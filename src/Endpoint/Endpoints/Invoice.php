<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Invoice Endpoint.
 */
class Invoice extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/invoice", $query);
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function get(string $id): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/invoice/$id");
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array|null
     */
    public function save(string $id, array $data): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/invoice/$id", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function delete(string $id): ?array
    {
        return $this->client->delete("/{$this->getBasePath()}/invoice/$id");
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function openItemsByInvoice(string $id): ?array
    {
        return $this->client->delete("/{$this->getBasePath()}/invoice/$id/open_item");
    }
    
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function openItems(array $query = []): ?array
    {
        return $this->client->delete("/{$this->getBasePath()}/invoice/open_item", $query);
    }
}
