<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Accrual Endpoint.
 */
class Accrual extends AbstractEndpoint
{
    /**
     * @return array|null
     */
    public function list(): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/accrual");
    }
    
    /**
     * @param array $data
     * 
     * @return array|null
     */
    public function create(array $data): ?array
    {
        return $this->client->post("/{$this->getBasePath()}/accrual", $data);
    }
    
    /**
     * @param int $id
     * 
     * @return array|null
     */
    public function get(int $id): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/accrual/$id");
    }
    
    /**
     * @param int $id
     * 
     * @return array|null
     */
    public function delete(int $id): ?array
    {
        return $this->client->delete("/{$this->getBasePath()}/accrual/$id");
    }
    
    /**
     * @param int $id
     * @param array $data
     *
     * @return array|null
     */
    public function update(int $id, array $data): ?array
    {
        return $this->client->patch("/{$this->getBasePath()}/accrual/$id", $data);
    }
    
    /**
     * @param int $id
     * 
     * @return array|null
     */
    public function process(int $id): ?array
    {
        return $this->client->post("/{$this->getBasePath()}/accrual/$id");
    }
    
    /**
     * @return array|null
     */
    public function getSettings(): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/accrual");
    }
    
    /**
     * @param array $data
     *
     * @return array|null
     */
    public function updateSettings(array $data): ?array
    {
        return $this->client->post("/{$this->getBasePath()}/settings", $data);
    }
}
