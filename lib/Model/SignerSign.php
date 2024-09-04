<?php
/**
 * SignerSign
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Public Api v3
 *
 * Build the best experience of digital signature through your own platform. Increase your conversion rates, leverage your data and reduce your costs with Yousign API.
 *
 * OpenAPI spec version: 3.0
 * Contact: contact@yousign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.62
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * SignerSign Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SignerSign implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SignerSign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'otp' => 'string',
        'ip_address' => '\Swagger\Client\Model\SignerSIPAddress',
        'consent_given_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'otp' => null,
        'ip_address' => null,
        'consent_given_at' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'otp' => 'otp',
        'ip_address' => 'ip_address',
        'consent_given_at' => 'consent_given_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'otp' => 'setOtp',
        'ip_address' => 'setIpAddress',
        'consent_given_at' => 'setConsentGivenAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'otp' => 'getOtp',
        'ip_address' => 'getIpAddress',
        'consent_given_at' => 'getConsentGivenAt'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['otp'] = isset($data['otp']) ? $data['otp'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['consent_given_at'] = isset($data['consent_given_at']) ? $data['consent_given_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ip_address'] === null) {
            $invalidProperties[] = "'ip_address' can't be null";
        }
        if ($this->container['consent_given_at'] === null) {
            $invalidProperties[] = "'consent_given_at' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets otp
     *
     * @return string
     */
    public function getOtp()
    {
        return $this->container['otp'];
    }

    /**
     * Sets otp
     *
     * @param string $otp otp
     *
     * @return $this
     */
    public function setOtp($otp)
    {
        $this->container['otp'] = $otp;

        return $this;
    }

    /**
     * Gets ip_address
     *
     * @return \Swagger\Client\Model\SignerSIPAddress
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param \Swagger\Client\Model\SignerSIPAddress $ip_address ip_address
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets consent_given_at
     *
     * @return \DateTime
     */
    public function getConsentGivenAt()
    {
        return $this->container['consent_given_at'];
    }

    /**
     * Sets consent_given_at
     *
     * @param \DateTime $consent_given_at consent_given_at
     *
     * @return $this
     */
    public function setConsentGivenAt($consent_given_at)
    {
        $this->container['consent_given_at'] = $consent_given_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
