<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Receivable Endpoint.
 */
class Receivable extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/receivable", $query);
    }
    
    /**
     * @param string $accountId
     * @param string $invoiceId
     * 
     * @return array|null
     */
    public function get(string $accountId, string $invoiceId): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/receivable/account/$accountId/invoice/$invoiceId");
    }
    
    /**
     * @param string $accountId
     * @param string $invoiceId
     * @param array $data
     * 
     * @return array|null
     */
    public function update(string $accountId, string $invoiceId, array $data): ?array
    {
        return $this->client->patch("/{$this->getBasePath()}/receivable/account/$accountId/invoice/$invoiceId", $data);
    }
}
