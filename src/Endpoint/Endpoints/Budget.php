<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Budget Endpoint.
 */
class Budget extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/budget", $query);
    }
    
    /**
     * @param array $data = []
     * 
     * @return array|null
     */
    public function save(array $data = []): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/budget", $data);
    }
}
