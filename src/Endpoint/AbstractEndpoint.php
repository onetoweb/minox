<?php

namespace Onetoweb\Minox\Endpoint;

use Onetoweb\Minox\Client;

/**
 * Abstract Endpoint.
 */
abstract class AbstractEndpoint implements EndpointInterface
{
    /**
     * @var Client
     */
    protected $client;
    
    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    
    /**
     * @return string
     */
    protected function getBasePath(): string
    {
        return "/tenant/{$this->client->getClientNumber()}/administration/{$this->client->getAdministrationId()}";
    }
}
