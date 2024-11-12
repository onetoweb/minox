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
    public function __construct(string $accessToken, string $refreshToken, DateTime $expires)
    {
        $this->accessToken = $accessToken;
        $this->refreshToken = $refreshToken;
        $this->expires = $expires;
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
