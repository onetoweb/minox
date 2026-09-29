<?php

namespace Onetoweb\Minox;

use DateTime;

/**
 * Token.
 */
class Token
{
    /**
     * @param string $accessToken
     * @param string $refreshToken
     * @param DateTime $expires
     */
    public function __construct(
        
        #[\SensitiveParameter]
        private string $accessToken,
        
        #[\SensitiveParameter]
        private string $refreshToken,
        
        #[\SensitiveParameter]
        private DateTime $expires
    ) {
        
    }
    
    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }
    
    /**
     * @return string
     */
    public function getRefreshToken(): string
    {
        return $this->refreshToken;
    }
    
    /**
     * @return DateTime
     */
    public function getExpires(): DateTime
    {
        return $this->expires;
    }
    
    /**
     * @return bool
     */
    public function isExpired(): bool
    {
        return (new DateTime()) > $this->expires;
    }
    
    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->accessToken;
    }
}
