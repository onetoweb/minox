<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Webhook Endpoint.
 */
class Webhook extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(array $query = []): ?array
    {
        return $this->client->get("/tenant/{$this->client->getClientNumber()}/webhook", $query);
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function get(string $id): ?array
    {
        return $this->client->get("/tenant/{$this->client->getClientNumber()}/webhook/$id");
    }
    
    /**
     * @param array $data = []
     * 
     * @return array|null
     */
    public function create(array $data = []): ?array
    {
        return $this->client->post("/tenant/{$this->client->getClientNumber()}/webhook", $data);
    }
    
    /**
     * @param string $id
     * @param array $data = []
     * 
     * @return array|null
     */
    public function update(string $id, array $data = []): ?array
    {
        return $this->client->put("/tenant/{$this->client->getClientNumber()}/webhook/$id", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function delete(string $id): ?array
    {
        return $this->client->delete("/tenant/{$this->client->getClientNumber()}/webhook/$id");
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function history(string $id): ?array
    {
        return $this->client->get("/tenant/{$this->client->getClientNumber()}/webhook/$id/history");
    }
}
