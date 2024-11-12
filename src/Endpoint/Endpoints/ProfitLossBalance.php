<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Profit Loss Balance Endpoint.
 */
class ProfitLossBalance extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/profit_loss_balance", $query);
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array|null
     */
    public function save(int $id, array $data): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/profit_loss_balance/$id", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function delete(int $id): ?array
    {
        return $this->client->delete("/{$this->getBasePath()}/profit_loss_balance/$id");
    }
}
