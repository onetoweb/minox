<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Customer Endpoint.
 */
class Customer extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/customer", $query);
    }
    
    /**
     * @param array $data = []
     * 
     * @return array|null
     */
    public function create(array $data = []): ?array
    {
        return $this->client->post("/{$this->getBasePath()}/customer", $data);
    }
    
    /**
     * @param int $id
     * 
     * @return array|null
     */
    public function get(int $id): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/customer/$id");
    }
    
    /**
     * @param int $id
     * @param array $data = []
     * 
     * @return array|null
     */
    public function update(int $id, array $data = []): ?array
    {
        return $this->client->patch("/{$this->getBasePath()}/customer/$id", $data);
    }
    
    /**
     * @param string $email
     * 
     * @return array|null
     */
    public function getByEmail(string $email): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/customer/by_email/$email");
    }
    
    /**
     * @param string $externalId
     * 
     * @return array|null
     */
    public function getByExternalId(string $externalId): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/customer/by_externalid/$externalId");
    }
}
