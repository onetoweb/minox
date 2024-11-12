<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Ocr Endpoint.
 */
class Ocr extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function history(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/ocr/history", $query);
    }
    
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function proposal(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/ocr/proposal", $query);
    }
    
    /**
     * @param string $type
     * 
     * @return array|null
     */
    public function settings(string $type): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/ocr/settings", [
            'type' => $type,
        ]);
    }
    
    /**
     * @param string $type
     * @param array $data
     * 
     * @return array|null
     */
    public function updateSettings(string $type, array $data): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/ocr/settings", $data, [
            'type' => $type,
        ]);
    }
    
    /**
     * @param array $data
     * 
     * @return array|null
     */
    public function reprocess(array $data): ?array
    {
        return $this->client->post("/{$this->getBasePath()}/ocr/reprocess", $data);
    }
    
}
