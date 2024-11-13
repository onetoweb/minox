<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Ordering Endpoint.
 */
class Ordering extends AbstractEndpoint
{
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function get(string $id): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/ordering/$id");
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function save(string $id, array $data): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/ordering/$id", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function delete(string $id): ?array
    {
        return $this->client->delete("/{$this->getBasePath()}/ordering/$id");
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function getOrderDocument(string $id): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/ordering/$id/blob");
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array|null
     */
    public function sendOrderDocument(string $id, array $data): ?array
    {
        return $this->client->gpostet("/{$this->getBasePath()}/ordering/$id/send", $data);
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array|null
     */
    public function transitionOrderDocument(string $id, array $data): ?array
    {
        return $this->client->post("/{$this->getBasePath()}/ordering/$id/transition", $data);
    }
    
    /**
     * @param string $id
     * @param array $data
     *
     * @return array|null
     */
    public function unmergeOrderDocument(string $id, array $data): ?array
    {
        return $this->client->post("/{$this->getBasePath()}/ordering/$id/unmerge", $data);
    }
    
    /**
     * @param string $id
     * @param array $data
     *
     * @return array|null
     */
    public function bulkDeleteOrderDocument(string $id, array $data): ?array
    {
        return $this->client->post("/{$this->getBasePath()}/ordering/$id/bulk_delete", $data);
    }
    
    /**
     * @param string $type
     * 
     * @return array|null
     */
    public function getByType(string $type): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/ordering/by_type/$type");
    }
    
    /**
     * @param $data
     *
     * @return array|null
     */
    public function merge(array $data): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/ordering/merge", $data);
    }
    
    /**
     * @param string $type
     * 
     * @return array|null
     */
    public function getSummaryByType(string $type): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/ordering/summary_by_type/$type");
    }
    
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function listTask(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/ordering/tasks", $query);
    }
    
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function getTask(string $taskId): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/ordering/tasks/$taskId");
    }
    
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function deleteTask(string $taskId): ?array
    {
        return $this->client->delete("/{$this->getBasePath()}/ordering/tasks/$taskId");
    }
    
    /**
     * @param array $data
     * 
     * @return array|null
     */
    public function transitionBulk(array $data): ?array
    {
        return $this->client->post("/{$this->getBasePath()}/ordering/transition/bulk", $data);
    }
}
