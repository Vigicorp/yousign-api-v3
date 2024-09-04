<?php
/**
 * SignatureRequestSignerFromInfoInput
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yousign\Client
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

namespace Yousign\Client\Model;

use \ArrayAccess;
use \Yousign\Client\ObjectSerializer;

/**
 * SignatureRequestSignerFromInfoInput Class Doc Comment
 *
 * @category Class
 * @description Create a signer from info
 * @package  Yousign\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SignatureRequestSignerFromInfoInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SignatureRequest_SignerFromInfoInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'info' => '\Yousign\Client\Model\SignatureRequestSignerFromInfoInputInfo',
        'fields' => '\Yousign\Client\Model\FieldsInput[]',
        'signature_level' => 'string',
        'signature_authentication_mode' => 'string',
        'redirect_urls' => '\Yousign\Client\Model\SignatureRequestSignerFromInfoInputRedirectUrls',
        'custom_text' => '\Yousign\Client\Model\FromScratch1CustomText'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'info' => null,
        'fields' => null,
        'signature_level' => null,
        'signature_authentication_mode' => null,
        'redirect_urls' => null,
        'custom_text' => null
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
        'info' => 'info',
        'fields' => 'fields',
        'signature_level' => 'signature_level',
        'signature_authentication_mode' => 'signature_authentication_mode',
        'redirect_urls' => 'redirect_urls',
        'custom_text' => 'custom_text'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'info' => 'setInfo',
        'fields' => 'setFields',
        'signature_level' => 'setSignatureLevel',
        'signature_authentication_mode' => 'setSignatureAuthenticationMode',
        'redirect_urls' => 'setRedirectUrls',
        'custom_text' => 'setCustomText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'info' => 'getInfo',
        'fields' => 'getFields',
        'signature_level' => 'getSignatureLevel',
        'signature_authentication_mode' => 'getSignatureAuthenticationMode',
        'redirect_urls' => 'getRedirectUrls',
        'custom_text' => 'getCustomText'
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

    const SIGNATURE_LEVEL_ELECTRONIC_SIGNATURE = 'electronic_signature';
    const SIGNATURE_LEVEL_ADVANCED_ELECTRONIC_SIGNATURE = 'advanced_electronic_signature';
    const SIGNATURE_LEVEL_ELECTRONIC_SIGNATURE_WITH_QUALIFIED_CERTIFICATE = 'electronic_signature_with_qualified_certificate';
    const SIGNATURE_LEVEL_QUALIFIED_ELECTRONIC_SIGNATURE = 'qualified_electronic_signature';
    const SIGNATURE_LEVEL_QUALIFIED_ELECTRONIC_SIGNATURE_MODE_1 = 'qualified_electronic_signature_mode_1';
    const SIGNATURE_AUTHENTICATION_MODE_NULL = 'null';
    const SIGNATURE_AUTHENTICATION_MODE_OTP_EMAIL = 'otp_email';
    const SIGNATURE_AUTHENTICATION_MODE_OTP_SMS = 'otp_sms';
    const SIGNATURE_AUTHENTICATION_MODE_NO_OTP = 'no_otp';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSignatureLevelAllowableValues()
    {
        return [
            self::SIGNATURE_LEVEL_ELECTRONIC_SIGNATURE,
            self::SIGNATURE_LEVEL_ADVANCED_ELECTRONIC_SIGNATURE,
            self::SIGNATURE_LEVEL_ELECTRONIC_SIGNATURE_WITH_QUALIFIED_CERTIFICATE,
            self::SIGNATURE_LEVEL_QUALIFIED_ELECTRONIC_SIGNATURE,
            self::SIGNATURE_LEVEL_QUALIFIED_ELECTRONIC_SIGNATURE_MODE_1,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSignatureAuthenticationModeAllowableValues()
    {
        return [
            self::SIGNATURE_AUTHENTICATION_MODE_NULL,
            self::SIGNATURE_AUTHENTICATION_MODE_OTP_EMAIL,
            self::SIGNATURE_AUTHENTICATION_MODE_OTP_SMS,
            self::SIGNATURE_AUTHENTICATION_MODE_NO_OTP,
        ];
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
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['signature_level'] = isset($data['signature_level']) ? $data['signature_level'] : 'electronic_signature';
        $this->container['signature_authentication_mode'] = isset($data['signature_authentication_mode']) ? $data['signature_authentication_mode'] : null;
        $this->container['redirect_urls'] = isset($data['redirect_urls']) ? $data['redirect_urls'] : null;
        $this->container['custom_text'] = isset($data['custom_text']) ? $data['custom_text'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['info'] === null) {
            $invalidProperties[] = "'info' can't be null";
        }
        if ($this->container['signature_level'] === null) {
            $invalidProperties[] = "'signature_level' can't be null";
        }
        $allowedValues = $this->getSignatureLevelAllowableValues();
        if (!is_null($this->container['signature_level']) && !in_array($this->container['signature_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'signature_level', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSignatureAuthenticationModeAllowableValues();
        if (!is_null($this->container['signature_authentication_mode']) && !in_array($this->container['signature_authentication_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'signature_authentication_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets info
     *
     * @return \Yousign\Client\Model\SignatureRequestSignerFromInfoInputInfo
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     *
     * @param \Yousign\Client\Model\SignatureRequestSignerFromInfoInputInfo $info info
     *
     * @return $this
     */
    public function setInfo($info)
    {
        $this->container['info'] = $info;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \Yousign\Client\Model\FieldsInput[]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \Yousign\Client\Model\FieldsInput[] $fields fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets signature_level
     *
     * @return string
     */
    public function getSignatureLevel()
    {
        return $this->container['signature_level'];
    }

    /**
     * Sets signature_level
     *
     * @param string $signature_level signature_level
     *
     * @return $this
     */
    public function setSignatureLevel($signature_level)
    {
        $allowedValues = $this->getSignatureLevelAllowableValues();
        if (!in_array($signature_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'signature_level', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['signature_level'] = $signature_level;

        return $this;
    }

    /**
     * Gets signature_authentication_mode
     *
     * @return string
     */
    public function getSignatureAuthenticationMode()
    {
        return $this->container['signature_authentication_mode'];
    }

    /**
     * Sets signature_authentication_mode
     *
     * @param string $signature_authentication_mode signature_authentication_mode
     *
     * @return $this
     */
    public function setSignatureAuthenticationMode($signature_authentication_mode)
    {
        $allowedValues = $this->getSignatureAuthenticationModeAllowableValues();
        if (!is_null($signature_authentication_mode) && !in_array($signature_authentication_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'signature_authentication_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['signature_authentication_mode'] = $signature_authentication_mode;

        return $this;
    }

    /**
     * Gets redirect_urls
     *
     * @return \Yousign\Client\Model\SignatureRequestSignerFromInfoInputRedirectUrls
     */
    public function getRedirectUrls()
    {
        return $this->container['redirect_urls'];
    }

    /**
     * Sets redirect_urls
     *
     * @param \Yousign\Client\Model\SignatureRequestSignerFromInfoInputRedirectUrls $redirect_urls redirect_urls
     *
     * @return $this
     */
    public function setRedirectUrls($redirect_urls)
    {
        $this->container['redirect_urls'] = $redirect_urls;

        return $this;
    }

    /**
     * Gets custom_text
     *
     * @return \Yousign\Client\Model\FromScratch1CustomText
     */
    public function getCustomText()
    {
        return $this->container['custom_text'];
    }

    /**
     * Sets custom_text
     *
     * @param \Yousign\Client\Model\FromScratch1CustomText $custom_text custom_text
     *
     * @return $this
     */
    public function setCustomText($custom_text)
    {
        $this->container['custom_text'] = $custom_text;

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
