<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Distance Sale Endpoint.
 */
class DistanceSale extends AbstractEndpoint
{
    /**
     * @return array|null
     */
    public function list(): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/distance_sales");
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function get(string $id): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/distance_sales/$id");
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array|null
     */
    public function save(string $id, array $data): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/distance_sales/$id", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function delete(string $id): ?array
    {
        return $this->client->delete("/{$this->getBasePath()}/distance_sales/$id");
    }
}
