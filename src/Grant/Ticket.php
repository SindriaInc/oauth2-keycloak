<?php
/**
 * This file is part of the league/oauth2-client library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Alex Bilbie <hello@alexbilbie.com>
 * @license http://opensource.org/licenses/MIT MIT
 * @link http://thephpleague.com/oauth2-client/ Documentation
 * @link https://packagist.org/packages/league/oauth2-client Packagist
 * @link https://github.com/thephpleague/oauth2-client GitHub
 */

namespace Sindria\OAuth2\Client\Grant;

use League\OAuth2\Client\Grant\AbstractGrant;

/**
 * Represents a refresh token grant.
 *
 * @link http://tools.ietf.org/html/rfc6749#section-6 Refreshing an Access Token (RFC 6749, §6)
 */
class Ticket extends AbstractGrant
{
    /**
     * @inheritdoc
     */
    protected function getName()
    {
        return 'urn:ietf:params:oauth:grant-type:uma-ticket';
    }

    /**
     * @inheritdoc
     */
    protected function getRequiredRequestParameters()
    {
        return [
            'audience',
        ];
    }
}
