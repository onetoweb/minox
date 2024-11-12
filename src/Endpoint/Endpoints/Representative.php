<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Representative Endpoint.
 */
class Representative extends AbstractEndpoint
{
    /**
     * @return array|null
     */
    public function list(): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/representative");
    }
    
    /**
     * @param int $id
     * @param array $data
     * 
     * @return array|null
     */
    public function save(int $id, array $data): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/representative/$id", $data);
    }
}