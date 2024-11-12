<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Cost Center Endpoint.
 */
class CostCenter extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/cost_center", $query);
    }
    
    /**
     * @param int $id
     * @param array $data = []
     * 
     * @return array|null
     */
    public function save(int $id, array $data = []): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/cost_center/$id", $data);
    }
}
