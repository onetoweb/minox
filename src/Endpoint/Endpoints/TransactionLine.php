<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Transaction Line Endpoint.
 */
class TransactionLine extends AbstractEndpoint
{
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(int $year, array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/year/$year/transaction_lines", $query);
    }
}
