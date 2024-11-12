<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Ledger Endpoint.
 */
class Ledger extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/ledger_account", $query);
    }
    
    /**
     * @param int $id
     * 
     * @return array|null
     */
    public function get(int $id): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/ledger_account/$id");
    }
    
    /**
     * @param int $id
     * @param array $data
     * 
     * @return array|null
     */
    public function save(int $id, array $data): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/ledger_account/$id", $data);
    }
    
    /**
     * @param int $id
     * 
     * @return array|null
     */
    public function delete(int $id): ?array
    {
        return $this->client->delete("/{$this->getBasePath()}/ledger_account/$id");
    }
}
