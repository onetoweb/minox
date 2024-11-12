<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Item Endpoint.
 */
class Item extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/item", $query);
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function get(string $id): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/item/$id");
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array|null
     */
    public function save(string $id, array $data): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/item/$id", $data);
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array|null
     */
    public function update(string $id, array $data): ?array
    {
        return $this->client->patch("/{$this->getBasePath()}/item/$id", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function delete(string $id): ?array
    {
        return $this->client->delete("/{$this->getBasePath()}/item/$id");
    }
}
