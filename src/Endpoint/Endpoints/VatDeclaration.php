<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Vat Declaration Endpoint.
 */
class VatDeclaration extends AbstractEndpoint
{
    /**
     * @return array|null
     */
    public function list(): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/vat_declaration");
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function get(string $id): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/vat_declaration/$id");
    }
    
    /**
     * @param string $id
     * @param array $data
     * 
     * @return array|null
     */
    public function update(string $id, array $data): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/vat_declaration/$id", $data);
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function delete(string $id): ?array
    {
        return $this->client->delete("/{$this->getBasePath()}/vat_declaration/$id");
    }
    
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function finalize(string $id): ?array
    {
        return $this->client->post("/{$this->getBasePath()}/vat_declaration/$id/finalize");
    }
    
    /**
     * @return array|null
     */
    public function creaimSettings(): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/vat_declaration/creaim_settings");
    }
    
    /**
     * @return array $data
     * 
     * @return array|null
     */
    public function generate(array $data): ?array
    {
        return $this->client->post("/{$this->getBasePath()}/vat_declaration/generate", $data);
    }
    
    /**
     * @return array|null
     */
    public function settings(): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/vat_declaration/settings");
    }
    
    /**
     * @return array $data
     * 
     * @return array|null
     */
    public function updateSettings(array $data): ?array
    {
        return $this->client->put("/{$this->getBasePath()}/vat_declaration/settings", $data);
    }
    
    /**
     * @return array $data
     * 
     * @return array|null
     */
    public function patchSettings(array $data): ?array
    {
        return $this->client->patch("/{$this->getBasePath()}/vat_declaration/settings", $data);
    }
}
