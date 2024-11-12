<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Transaction Line Batch Endpoint.
 */
class TransactionLineBatch extends AbstractEndpoint
{
    /**
     * @param string $id
     * @param array $query = []
     * 
     * @return array|null
     */
    public function get(string $id, array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/transaction_line_batch/$id", $query);
    }
    
    /**
     * @param string $id
     * @param array $data = []
     * 
     * @return array|null
     */
    public function save(string $id, array $data = []): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/transaction_line_batch/$id", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function delete(string $id): ?array
    {
        return $this->client->delete("/{$this->getBasePath()}/transaction_line_batch/$id");
    }
}
