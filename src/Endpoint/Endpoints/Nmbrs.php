<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Nmbrs Endpoint.
 */
class Nmbrs extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function loonrun(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/nmbrs/loonrun", $query);
    }
    
    /**
     * @return array|null
     */
    public function loonrunCheckForNew(): ?array
    {
        return $this->client->post("/{$this->getBasePath()}/nmbrs/loonrun/check_for_new");
    }
    
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function settings(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/nmbrs/settings", $query);
    }
    
    /**
     * @param array $data
     * 
     * @return array|null
     */
    public function saveSettings(array $data): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/nmbrs/settings", $data);
    }
    
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function deleteSettings(): ?array
    {
        return $this->client->delete("/{$this->getBasePath()}/nmbrs/settings");
    }
    
    /**
     * @param array $data
     * 
     * @return array|null
     */
    public function testCredentials(array $data): ?array
    {
        return $this->client->post("/{$this->getBasePath()}/nmbrs/test_credentials", $data);
    }
}
