<?php
/**
 * ©[2022] SugarCRM Inc.  Licensed by SugarCRM under the Apache 2.0 license.
 */

namespace Sugarcrm\REST\Endpoint\Data\Filters\Operator;

/**
 * @package Sugarcrm\REST\Endpoint\Data\Filters\Operator
 */
class LessThan extends AbstractOperator
{
    const OPERATOR = '$lt';

    protected static $_OPERATOR = self::OPERATOR;

}