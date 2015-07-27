<?php

namespace Pixelfear\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\GenericResourceOwner;

/**
 * @property array $response
 * @property string $resourceOwnerId
 */
class DropboxResourceOwner extends GenericResourceOwner
{
    /**
     * Get resource owner id
     *
     * @return string
     */
    public function getId()
    {
        return $this->resourceOwnerId;
    }

    /**
     * Get resource owner name
     *
     * @return string
     */
    public function getName()
    {
        return $this->response['display_name'] ?: null;
    }
}
