<?php

namespace Onetoweb\Minox\Endpoint;

use Onetoweb\Minox\Client;

/**
 * Abstract Endpoint.
 */
abstract class AbstractEndpoint implements EndpointInterface
{
    /**
     * @param Client $client
     */
    public function __construct(
        protected Client $client
    ) {
        
    }
    
    /**
     * @return string
     */
    protected function getBasePath(): string
    {
        return "/tenant/{$this->client->getClientNumber()}/administration/{$this->client->getAdministrationId()}";
    }
}
