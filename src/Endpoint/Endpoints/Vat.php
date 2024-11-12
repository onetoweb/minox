<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Vat Endpoint.
 */
class Vat extends AbstractEndpoint
{
    /**
     * @return array|null
     */
    public function list(): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/vat");
    }
}
