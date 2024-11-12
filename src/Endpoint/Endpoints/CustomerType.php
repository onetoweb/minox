<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Customer Type Endpoint.
 */
class CustomerType extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/customer_type", $query);
    }
    
    /**
     * @param int $id
     * @param array $data = []
     * 
     * @return array|null
     */
    public function save(int $id, array $data = []): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/customer_type/$id", $data);
    }
}
