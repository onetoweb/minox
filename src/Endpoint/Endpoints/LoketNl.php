<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Loket.nl Endpoint.
 */
class LoketNl extends AbstractEndpoint
{
    /**
     * @param string $state
     * @param array $query = []
     * 
     * @return array|null
     */
    public function connect(string $state, array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/loket.nl/connect/$state", $query);
    }
    
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function loonrun(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/loket.nl/loonrun", $query);
    }
    
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function loonrunCheckForNew(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/loket.nl/loonrun/check_for_new", $query);
    }
    
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function settings(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/loket.nl/settings", $query);
    }
    
    /**
     * @param array $data
     *
     * @return array|null
     */
    public function saveSettings(array $data): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/loket.nl/settings", $data);
    }
    
    /**
     * @return array|null
     */
    public function deleteSettings(): ?array
    {
        return $this->client->delete("/{$this->getBasePath()}/loket.nl/settings");
    }
}
