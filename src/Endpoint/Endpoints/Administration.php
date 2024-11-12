<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Administration Endpoint.
 */
class Administration extends AbstractEndpoint
{
    /**
     * @return array|null
     */
    public function list(): ?array
    {
        return $this->client->get("/tenant/{$this->client->getClientNumber()}/administration");
    }
}
