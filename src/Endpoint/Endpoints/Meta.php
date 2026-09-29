<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;
use Onetoweb\Minox\Config\Method;

/**
 * Meta Endpoint.
 */
class Meta extends AbstractEndpoint
{
    /**
     * @return array|null
     */
    public function inspect(): ?array
    {
        return $this->client->requestBasic(Method::POST, '/inspect', [
            'token' => (string) $this->client->getToken(),
        ]);
    }
}
