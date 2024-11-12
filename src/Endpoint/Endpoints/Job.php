<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Job Endpoint.
 */
class Job extends AbstractEndpoint
{
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function get(string $id): ?array
    {
        return $this->client->get("/tenant/{$this->client->getClientNumber()}/job/$id");
    }
}
