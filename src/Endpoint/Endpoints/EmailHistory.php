<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Email History Endpoint.
 */
class EmailHistory extends AbstractEndpoint
{
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/email_history", $query);
    }
    
    /**
     * @param string $emailId
     * @param string $attachmentId
     * @param array $query = []
     * 
     * @return array|null
     */
    public function getAttachment(string $emailId, string $attachmentId, array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/email_history/$emailId/attachment/$attachmentId", $query);
    }
    
    /**
     * @param string $emailId
     * @param string $attachmentId
     *
     * @return array|null
     */
    public function reprocessAttachment(string $emailId, string $attachmentId): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/email_history/$emailId/attachment/$attachmentId/reprocess");
    }
}
