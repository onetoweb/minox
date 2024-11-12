<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

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
        return $this->client->requestBasic($this->client::METHOD_POST, '/inspect', [
            'token' => (string) $this->client->getToken(),
        ]);
    }
}
