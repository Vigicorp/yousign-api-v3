<?php
/**
 * Archiving
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Yousign\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Public Api v3
 *
 * Build the best experience of digital signature through your own platform. Increase your conversion rates, leverage your data and reduce your costs with Yousign API.
 *
 * The version of the OpenAPI document: 3.0
 * Contact: contact@yousign.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Yousign\Client\Model;
use \Yousign\Client\ObjectSerializer;

/**
 * Archiving Class Doc Comment
 *
 * @category Class
 * @description Once the signature request completed, archive its documents in a secure digital safe
 * @package  Yousign\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Archiving
{
    /**
     * Possible values of this enum
     */
    public const ARCHIVE = 'archive';

    public const ARCHIVE_Y = 'archive_y';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ARCHIVE,
            self::ARCHIVE_Y
        ];
    }
}


