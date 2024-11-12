<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Mollie Endpoint.
 */
class Mollie extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function settings(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/mollie/settings", $query);
    }
    
    /**
     * @param array $data
     * 
     * @return array|null
     */
    public function saveSettings(array $data): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/mollie/settings", $data);
    }
    
    /**
     * @return array|null
     */
    public function deleteSettings(): ?array
    {
        return $this->client->delete("/{$this->getBasePath()}/mollie/settings");
    }
    
    /**
     * @param array $data
     * 
     * @return array|null
     */
    public function testCredentials(array $data): ?array
    {
        return $this->client->post("/{$this->getBasePath()}/mollie/settings/test_credentials", $data);
    }
}
