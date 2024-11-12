<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Supplier Endpoint.
 */
class Supplier extends AbstractEndpoint
{
    /**
     * @return array|null
     */
    public function list(): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/supplier");
    }
    
    /**
     * @param int $id
     * 
     * @return array|null
     */
    public function get(int $id): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/supplier/$id");
    }
    
    /**
     * @param string $email
     * 
     * @return array|null
     */
    public function getByEmail(string $email): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/supplier/by_email/$email");
    }
    
    /**
     * @param string $externalId
     * 
     * @return array|null
     */
    public function getByExternalId(string $externalId): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/supplier/by_externalid/$externalId");
    }
    
    /**
     * @param array $data
     * 
     * @return array|null
     */
    public function create(array $data): ?array
    {
        return $this->client->post("/{$this->getBasePath()}/supplier", $data);
    }
    
    /**
     * @param int $id
     * @param array $data
     * 
     * @return array|null
     */
    public function update(int $id, array $data): ?array
    {
        return $this->client->patch("/{$this->getBasePath()}/supplier/$id", $data);
    }
}
