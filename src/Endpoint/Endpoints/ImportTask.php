<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Import Task Endpoint.
 */
class ImportTask extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(array $query = []): ?array
    {
        return $this->client->get("/tenant/{$this->client->getClientNumber()}/administration/{$this->client->getAdministrationId()}/import_tasks", $query);
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function cancel(string $id): ?array
    {
        return $this->client->post("/tenant/{$this->client->getClientNumber()}/administration/{$this->client->getAdministrationId()}/import_tasks/$id/cancel");
    }
    
    /**
     * @param string $batchId
     * @param array $data
     * 
     * @return array|null
     */
    public function import(string $batchId, array $data): ?array
    {
        return $this->client->post("/tenant/{$this->client->getClientNumber()}/administration/{$this->client->getAdministrationId()}/import/$batchId", $data);
    }
    
    /**
     * @param string $batchId
     * @param array $data
     *
     * @return array|null
     */
    public function start(string $batchId, array $data): ?array
    {
        return $this->client->post("/tenant/{$this->client->getClientNumber()}/administration/{$this->client->getAdministrationId()}/import/$batchId/start", $data);
    }
}
