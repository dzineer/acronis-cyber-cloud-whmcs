<?php
/**
 * @Copyright © 2003-2019 Acronis International GmbH. This source code is distributed under MIT software license.
 */

namespace AcronisCloud\Service\Config\Settings;

use AcronisCloud\Util\Arr;

class CloudApiSettings extends AbstractSettings
{
    const PROPERTY_VERIFY_SSL = 'verify_ssl';
    const PROPERTY_ACCESS_TOKEN_TTL = 'access_token_ttl';

    /**
     * @return bool
     */
    public function getVerifySsl()
    {
        return (bool)Arr::get($this->settings, static::PROPERTY_VERIFY_SSL, true);
    }

    /**
     * @return int
     */
    public function getAccessTokenTtl()
    {
        return (int)Arr::get($this->settings, static::PROPERTY_ACCESS_TOKEN_TTL, 7200);
    }
}