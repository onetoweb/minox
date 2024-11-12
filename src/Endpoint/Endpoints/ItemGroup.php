<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Item Group Endpoint.
 */
class ItemGroup extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/item_group", $query);
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array|null
     */
    public function save(int $id, array $data): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/item_group/$id", $data);
    }
}
