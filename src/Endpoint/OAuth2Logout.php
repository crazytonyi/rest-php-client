<?php
/**
 * ©[2022] SugarCRM Inc.  Licensed by SugarCRM under the Apache 2.0 license.
 */

namespace Sugarcrm\REST\Endpoint;

use MRussell\REST\Endpoint\Data\EndpointData;
use Sugarcrm\REST\Endpoint\Abstracts\AbstractSmartSugarEndpoint;

/**
 * The OAuth2 Logout Endpoint
 * @package Sugarcrm\REST\Endpoint
 */
class OAuth2Logout extends AbstractSmartSugarEndpoint
{
    protected static $_ENDPOINT_URL = 'oauth2/logout';

    protected static $_DEFAULT_PROPERTIES = array(
        self::PROPERTY_AUTH => true,
        self::PROPERTY_HTTP_METHOD => "POST",
        self::PROPERTY_DATA => array(
            EndpointData::DATA_PROPERTY_REQUIRED => array(
            ),
            EndpointData::DATA_PROPERTY_DEFAULTS => array(
            )
        )
    );
}
