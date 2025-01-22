<?php

namespace Onetoweb\Minox;

use Onetoweb\Minox\Endpoint\Endpoints;
use Onetoweb\Minox\Exception\{TokenException, AuthException, AdministrationException};
use Onetoweb\Minox\Token;
use GuzzleHttp\Psr7\{Response, Utils};
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Client as GuzzleCLient;
use DateTime;

/**
 * Minox Api Client.
 */
#[\AllowDynamicProperties]
class Client
{
    /**
     * Base href
     */
    public const BASE_HREF = 'https://app.minox.nl/api/1';
    public const AUTHORIZATION_URL = 'https://app.minox.nl/oauth/authorize';
    public const TOKEN_URL = 'https://app.minox.nl/oauth/token';
    
    /**
     * Methods.
     */
    public const METHOD_GET = 'GET';
    public const METHOD_POST = 'POST';
    public const METHOD_PUT = 'PUT';
    public const METHOD_PATCH = 'PATCH';
    public const METHOD_DELETE = 'DELETE';
    
    /**
     * @var int
     */
    private $clientNumber;
    
    /**
     * @var string
     */
    private $clientId;
    
    /**
     * @var string
     */
    private $clientSecret;
    
    /**
     * @var int
     */
    private $administrationId;
    
    /**
     * @var int
     */
    private $rateLimit;
    
    /**
     * @var int
     */
    private $rateLimitRemaining;
    
    /**
     * @var DateTime
     */
    private $rateLimitReset;
    
    /**
     * @var bool
     */
    private $throttle = true;
    
    /**
     * @var Token
     */
    private $token;
    
    /**
     * @param int $clientNumber
     * @param string $clientId
     * @param string $clientSecret
     */
    public function __construct(int $clientNumber, string $clientId, string $clientSecret)
    {
        $this->clientNumber = $clientNumber;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        
        // load endpoints
        $this->loadEndpoints();
    }
    
    /**
     * @return void
     */
    private function loadEndpoints(): void
    {
        foreach (Endpoints::list() as $name => $class) {
            $this->{$name} = new $class($this);
        }
    }
    
    /**
     * @param string $redirectUrl
     * @param array $scope = []
     * @param string $state = null
     * 
     * @return string
     */
    public function getAuthorizationUrl(string $redirectUrl, array $scope = [], string $state = null): string
    {
        return self::AUTHORIZATION_URL.'?'.http_build_query([
            'client_id' => $this->clientId,
            'redirect_uri' => $redirectUrl,
            'response_type' => 'code',
            'scope' => implode(' ', $scope),
            'state' => $state,
        ]);
    }
    
    /**
     * @return int
     */
    public function getClientNumber(): int
    {
        return $this->clientNumber;
    }
    
    /**
     * @return int|null
     */
    public function getRateLimit(): ?int
    {
        return $this->rateLimit;
    }
    
    /**
     * @return int|null
     */
    public function getRateLimitRemaining(): ?int
    {
        return $this->rateLimitRemaining;
    }
    
    /**
     * @return DateTime|null
     */
    public function getRateLimitReset(): ?DateTime
    {
        return $this->rateLimitReset;
    }
    
    /**
     * @return void
     */
    public function disableAutoThrottle(): void
    {
        $this->throttle = false;
    }
    
    /**
     * @param int $administrationId
     * 
     * @return void
     */
    public function setAdministrationId(int $administrationId): void
    {
        $this->administrationId = $administrationId;
    }
    
    /**
     * @throws AdministrationException if the administration is is not set
     * 
     * @return int
     */
    public function getAdministrationId(): int
    {
        if ($this->administrationId === null) {
            
            $previous = debug_backtrace(!DEBUG_BACKTRACE_PROVIDE_OBJECT|DEBUG_BACKTRACE_IGNORE_ARGS, 2)[1] ?? null;
            
            $caller = __METHOD__;
            if ($previous !== null) {
                $caller = "{$previous['class']}::{$previous['function']}";
            }
            
            throw new AdministrationException("administration id is required for the method: $caller use: ".self::class.'::setAdministrationId to set it');
        }
        
        return $this->administrationId;
    }
    
    /**
     * @param Token $token
     *
     * @return void
     */
    public function setToken(Token $token): void
    {
        $this->token = $token;
    }
    
    /**
     * @return Token|null
     */
    public function getToken(): ?Token
    {
        return $this->token;
    }
    
    /**
     * @param callable $tokenUpdateCallback
     *
     * @return void
     */
    public function setTokenUpdateCallback(callable $tokenUpdateCallback): void
    {
        $this->tokenUpdateCallback = $tokenUpdateCallback;
    }
    
    /**
     * @param string $endpoint
     * 
     * @return string
     */
    public function getUrl(string $endpoint): string
    {
        return self::BASE_HREF . '/' . ltrim($endpoint, '/');
    }
    
    /**
     * @param string $endpoint
     * @param array $query = []
     * @param array $headers = []
     * 
     * @return array|null
     */
    public function get(string $endpoint, array $query = [], array $headers = []): ?array
    {
        return $this->request(self::METHOD_GET, $endpoint, [], $query, $headers);
    }
    
    /**
     * @param string $endpoint
     * @param array $data = []
     * 
     * @return array|null
     */
    public function post(string $endpoint, array $data = [], array $headers = []): ?array
    {
        return $this->request(self::METHOD_POST, $endpoint, $data, [], $headers);
    }
    
    /**
     * @param string $endpoint
     * @param array $data = []
     * @param array $query = []
     * 
     * @return array|null
     */
    public function put(string $endpoint, array $data = [], array $query = []): ?array
    {
        return $this->request(self::METHOD_PUT, $endpoint, $data, $query);
    }
    
    /**
     * @param string $endpoint
     * @param array $data = []
     * 
     * @return array|null
     */
    public function patch(string $endpoint, array $data = []): ?array
    {
        return $this->request(self::METHOD_PATCH, $endpoint, $data);
    }
    
    /**
     * @param string $endpoint
     * 
     * 
     * @return array|null
     */
    public function delete(string $endpoint): ?array
    {
        return $this->request(self::METHOD_DELETE, $endpoint);
    }
    
    /**
     * @param array $tokenArray
     * 
     * @throws TokenException if token response is missing values
     * 
     * @return void
     */
    public function updateToken(array $tokenArray): void
    {
        // check token array values
        foreach (['access_token', 'refresh_token', 'expires_in'] as $key) {
            
            if (!isset($tokenArray[$key])) {
                throw new TokenException("token response does not contain require value for: $key");
            }
        }
        
        // get expires datetime
        $expiresIn = ((int) $tokenArray['expires_in'] - 10);
        $expires = (new DateTime())->modify("+$expiresIn seconds");
        
        // return restricted data token
        $this->token = new Token($tokenArray['access_token'], $tokenArray['refresh_token'], $expires);
        
        // token update callback
        ($this->tokenUpdateCallback)($this->token);
    }
    
    /**
     * @param string $code
     * 
     * @return void
     */
    public function requestTokenFromCode(string $code): void
    {
        // build options
        $options = [
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::HEADERS => [
                'accept' => 'application/json',
            ],
            RequestOptions::JSON => [
                'grant_type' => 'authorization_code',
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'code' => $code,
            ],
        ];
        
        // make request
        $response = (new GuzzleCLient())->post(self::TOKEN_URL, $options);
        
        // decode json
        $tokenArray = json_decode($response->getBody()->getContents(), true);
        
        // update token
        $this->updateToken($tokenArray);
    }
    
    /**
     * @return void
     */
    public function refreshToken(): void
    {
        // build options
        $options = [
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::HEADERS => [
                'accept' => 'application/json'
            ],
            RequestOptions::JSON => [
                'grant_type' => 'refresh_token',
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'refresh_token' => $this->token->getRefreshToken(),
            ]
        ];
        
        // make request
        $response = (new GuzzleCLient())->post(self::TOKEN_URL, $options);
        
        // decode json
        $tokenArray = json_decode($response->getBody()->getContents(), true);
        
        // update token
        $this->updateToken($tokenArray);
    }
    
    /**
     * @param Response $response
     * 
     * @return void
     */
    private function throttle(Response $response): void
    {
        // get rate limit / remaining
        $rateLimit = $response->getHeader('x-rate-limit-limit');
        $rateLimitRemaining = $response->getHeader('x-rate-limit-remaining');
        $rateLimitReset = $response->getHeader('x-rate-limit-reset');
        
        $this->rateLimit = isset($rateLimit[0]) ? (int) $rateLimit[0] : null;
        $this->rateLimitRemaining = isset($rateLimitRemaining[0]) ? (int) $rateLimitRemaining[0] : null;
        
        // convert to timestamp in seconds
        $rateLimitResetSeconds = isset($rateLimitReset[0]) ? (float) (intval($rateLimitReset[0]) / 1000) : null;
        
        if ($rateLimitResetSeconds !== null) {
            
            // get timestamp / millisecond
            list (
                $timestamp,
                $millisecond
            ) = explode('.', $rateLimitResetSeconds);
            
            // get now
            $now = new DateTime();
            
            // get rate limit reset in DateTime format
            $this->rateLimitReset = (clone $now)
                ->setTimestamp($timestamp)
                ->modify("+$millisecond ms")
            ;
            
            if (
                $this->throttle
                and $this->rateLimit !== null
                and $this->rateLimitRemaining < 1
            ) {
                
                // get diff DateInterval
                $interval = $now->diff($this->rateLimitReset);
                
                // calculate microsleep
                $microsleep = (
                    $interval->h * 3600000000 // hours to microseconds
                    + $interval->i * 60000000 // minutes to microseconds
                    + $interval->s * 1000000 // seconds to microseconds
                    + (int) $interval->format('%f') // microseconds
                );
                
                // take a micronap
                usleep($microsleep);
            }
        }
    }
    
    /**
     * Checks if token isset and is fresh in not refreshes it.
     * 
     * @throws AuthException if token is not set
     */
    private function checkToken()
    {
        if ($this->token === null) {
            throw new AuthException('you must provide a token with '.self::class.'::setToken, or you can request a token via the authorization workflow');
        }
        
        if ($this->token->isExpired()) {
            $this->refreshToken();
        }
    }
    
    /**
     * @param string $method
     * @param string $endpoint
     * @param array $data = []
     * @param array $query = []
     *
     * @return array|null
     */
    public function requestBasic(string $method, string $endpoint, array $data = [], array $query = []): ?array
    {
        // build options
        $options = [
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::HEADERS => [
                'accept' => 'application/json',
                'content-type' => 'application/json',
            ],
            RequestOptions::JSON => $data,
            RequestOptions::QUERY => $query,
            RequestOptions::AUTH => [
                $this->clientId,
                $this->clientSecret
            ],
        ];
        
        // make request
        $response = (new GuzzleCLient())->request($method, $this->getUrl($endpoint), $options);
        
        // decode json
        $json = json_decode($response->getBody()->getContents(), true);
        
        return $json;
    }
    
    /**
     * @param string $method
     * @param string $endpoint
     * @param string $filepath
     * 
     * @return array|null
     */
    public function requestMultipart(string $method, string $endpoint, string $filepath): ?array
    {
        // check token
        $this->checkToken();
        
        // build options
        $options = [
            RequestOptions::DEBUG => false,
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::HEADERS => [
                'accept' => 'application/json',
                'authorization' => "Bearer {$this->token}",
            ],
            RequestOptions::MULTIPART => [[
                'name' => 'data',
                'contents' => base64_encode(file_get_contents($filepath)),
                'headers' => [
                    'content-type' => mime_content_type($filepath)
                ],
                'filename' => basename($filepath),
            ]],
        ];
        
        // make request
        $response = (new GuzzleCLient())->post($this->getUrl($endpoint), $options);
        
        // throttle
        $this->throttle($response);
        
        // get contents
        $contents = $response->getBody()->getContents();
        
        // decode json
        $json = json_decode($contents, true);
        
        return $json;
    }
    
    /**
     * @param string $method
     * @param string $endpoint
     * @param array $data = []
     * @param array $query = []
     * @param array $headers = []
     * 
     * @return array|null
     */
    public function request(string $method, string $endpoint, array $data = [], array $query = [], array $headers = []): ?array
    {
        // check token
        $this->checkToken();
        
        // build options
        $options = [
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::HEADERS => array_merge([
                'content-type' => 'application/json',
                'authorization' => "Bearer {$this->token}",
            ], $headers),
            RequestOptions::JSON => $data,
            RequestOptions::QUERY => $query,
        ];
        
        // make request
        $response = (new GuzzleCLient())->request($method, $this->getUrl($endpoint), $options);
        
        // throttle
        $this->throttle($response);
        
        // get contents
        $contents = $response->getBody()->getContents();
        
        // check for binary data
        if ($response->getHeaderLine('content-type') === 'application/octet-stream') {
            
            // encode binary data in b64
            $json = [
                'data' => base64_encode($contents)
            ];
            
        } else {
            
            // decode json
            $json = json_decode($contents, true);
            
            if ($json !== null and !is_array($json)) {
                $json = [
                    'message' => $json
                ];
            }
        }
        
        return $json;
    }
}
