<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Document Endpoint.
 */
class Document extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/document");
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function get(string $id): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/document/$id");
    }
    
    /**
     * @param array $data
     * 
     * @return array|null
     */
    public function create(array $data): ?array
    {
        return $this->client->post("/{$this->getBasePath()}/document", $data);
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array|null
     */
    public function update(string $id, array $data): ?array
    {
        return $this->client->patch("/{$this->getBasePath()}/document/$id", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function delete(string $id): ?array
    {
        return $this->client->delete("/{$this->getBasePath()}/document/$id");
    }
}
