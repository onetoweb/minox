<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Other Document Endpoint.
 */
class OtherDocument extends AbstractEndpoint
{
    /**
     * @param string $id
     * 
     * @return array|null
     */
    public function get(string $id): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/document/$id/blob");
    }
    
    /**
     * @param string $batchId
     * @param string $filepath
     * 
     * @return array|null
     */
    public function transactionLineBatch(string $batchId, string $filepath): ?array
    {
        return $this->client->requestMultipart($this->client::METHOD_POST, "/{$this->getBasePath()}/transaction_line_batch/$batchId/blob", $filepath);
    }
    
    /**
     * @param string $batchId
     * 
     * @return array|null
     */
    public function getBatchDocument(string $batchId): ?array
    {
        return $this->client->get("/tenant/{$this->client->getClientNumber()}/transaction_line_batch/$batchId/blob");
    }
    
    /**
     * @param string $batchId
     * 
     * @return array|null
     */
    public function deleteBatchDocument(string $batchId): ?array
    {
        return $this->client->delete("/tenant/{$this->client->getClientNumber()}/transaction_line_batch/$batchId/blob");
    }
}
