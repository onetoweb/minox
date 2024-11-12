<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Paragon Endpoint.
 */
class Paragon extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function history(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/paragon/history", $query);
    }
    
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function settings(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/paragon/settings", $query);
    }
    
    /**
     * @param array $data
     * 
     * @return array|null
     */
    public function saveSettings(array $data): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/paragon/settings", $data);
    }
    
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function deleteSettings(): ?array
    {
        return $this->client->delete("/{$this->getBasePath()}/paragon/settings");
    }
}
