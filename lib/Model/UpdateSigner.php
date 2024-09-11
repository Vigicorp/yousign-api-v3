<?php
/**
 * UpdateSigner
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

use \ArrayAccess;
use \Yousign\Client\ObjectSerializer;

/**
 * UpdateSigner Class Doc Comment
 *
 * @category Class
 * @package  Yousign\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateSigner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateSigner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'info' => '\Yousign\Client\Model\UpdateSignerInfo',
        'insert_after_id' => 'string',
        'signature_level' => 'string',
        'signature_authentication_mode' => 'string',
        'redirect_urls' => '\Yousign\Client\Model\FromScratch1RedirectUrls',
        'custom_text' => '\Yousign\Client\Model\FromScratch1CustomText',
        'delivery_mode' => '\Yousign\Client\Model\SignerDeliveryMode',
        'identification_attestation_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'info' => null,
        'insert_after_id' => 'uuid',
        'signature_level' => null,
        'signature_authentication_mode' => null,
        'redirect_urls' => null,
        'custom_text' => null,
        'delivery_mode' => null,
        'identification_attestation_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'info' => true,
        'insert_after_id' => true,
        'signature_level' => false,
        'signature_authentication_mode' => true,
        'redirect_urls' => false,
        'custom_text' => false,
        'delivery_mode' => true,
        'identification_attestation_id' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'info' => 'info',
        'insert_after_id' => 'insert_after_id',
        'signature_level' => 'signature_level',
        'signature_authentication_mode' => 'signature_authentication_mode',
        'redirect_urls' => 'redirect_urls',
        'custom_text' => 'custom_text',
        'delivery_mode' => 'delivery_mode',
        'identification_attestation_id' => 'identification_attestation_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'info' => 'setInfo',
        'insert_after_id' => 'setInsertAfterId',
        'signature_level' => 'setSignatureLevel',
        'signature_authentication_mode' => 'setSignatureAuthenticationMode',
        'redirect_urls' => 'setRedirectUrls',
        'custom_text' => 'setCustomText',
        'delivery_mode' => 'setDeliveryMode',
        'identification_attestation_id' => 'setIdentificationAttestationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'info' => 'getInfo',
        'insert_after_id' => 'getInsertAfterId',
        'signature_level' => 'getSignatureLevel',
        'signature_authentication_mode' => 'getSignatureAuthenticationMode',
        'redirect_urls' => 'getRedirectUrls',
        'custom_text' => 'getCustomText',
        'delivery_mode' => 'getDeliveryMode',
        'identification_attestation_id' => 'getIdentificationAttestationId'
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
        return self::$openAPIModelName;
    }

    public const SIGNATURE_LEVEL_ELECTRONIC_SIGNATURE = 'electronic_signature';
    public const SIGNATURE_LEVEL_ADVANCED_ELECTRONIC_SIGNATURE = 'advanced_electronic_signature';
    public const SIGNATURE_LEVEL_ELECTRONIC_SIGNATURE_WITH_QUALIFIED_CERTIFICATE = 'electronic_signature_with_qualified_certificate';
    public const SIGNATURE_LEVEL_QUALIFIED_ELECTRONIC_SIGNATURE = 'qualified_electronic_signature';
    public const SIGNATURE_LEVEL_QUALIFIED_ELECTRONIC_SIGNATURE_MODE_1 = 'qualified_electronic_signature_mode_1';
    public const SIGNATURE_AUTHENTICATION_MODE_OTP_EMAIL = 'otp_email';
    public const SIGNATURE_AUTHENTICATION_MODE_OTP_SMS = 'otp_sms';
    public const SIGNATURE_AUTHENTICATION_MODE_NO_OTP = 'no_otp';

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
        $this->setIfExists('info', $data ?? [], null);
        $this->setIfExists('insert_after_id', $data ?? [], null);
        $this->setIfExists('signature_level', $data ?? [], 'electronic_signature');
        $this->setIfExists('signature_authentication_mode', $data ?? [], null);
        $this->setIfExists('redirect_urls', $data ?? [], null);
        $this->setIfExists('custom_text', $data ?? [], null);
        $this->setIfExists('delivery_mode', $data ?? [], null);
        $this->setIfExists('identification_attestation_id', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['insert_after_id']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $this->container['insert_after_id'])) {
            $invalidProperties[] = "invalid value for 'insert_after_id', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.";
        }

        $allowedValues = $this->getSignatureLevelAllowableValues();
        if (!is_null($this->container['signature_level']) && !in_array($this->container['signature_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'signature_level', must be one of '%s'",
                $this->container['signature_level'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSignatureAuthenticationModeAllowableValues();
        if (!is_null($this->container['signature_authentication_mode']) && !in_array($this->container['signature_authentication_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'signature_authentication_mode', must be one of '%s'",
                $this->container['signature_authentication_mode'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['identification_attestation_id']) && (mb_strlen($this->container['identification_attestation_id']) > 255)) {
            $invalidProperties[] = "invalid value for 'identification_attestation_id', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['identification_attestation_id']) && (mb_strlen($this->container['identification_attestation_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'identification_attestation_id', the character length must be bigger than or equal to 1.";
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
     * @return \Yousign\Client\Model\UpdateSignerInfo|null
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     *
     * @param \Yousign\Client\Model\UpdateSignerInfo|null $info info
     *
     * @return self
     */
    public function setInfo($info)
    {
        if (is_null($info)) {
            array_push($this->openAPINullablesSetToNull, 'info');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('info', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['info'] = $info;

        return $this;
    }

    /**
     * Gets insert_after_id
     *
     * @return string|null
     */
    public function getInsertAfterId()
    {
        return $this->container['insert_after_id'];
    }

    /**
     * Sets insert_after_id
     *
     * @param string|null $insert_after_id insert_after_id
     *
     * @return self
     */
    public function setInsertAfterId($insert_after_id)
    {
        if (is_null($insert_after_id)) {
            array_push($this->openAPINullablesSetToNull, 'insert_after_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('insert_after_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($insert_after_id) && (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", ObjectSerializer::toString($insert_after_id)))) {
            throw new \InvalidArgumentException("invalid value for \$insert_after_id when calling UpdateSigner., must conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.");
        }

        $this->container['insert_after_id'] = $insert_after_id;

        return $this;
    }

    /**
     * Gets signature_level
     *
     * @return string|null
     */
    public function getSignatureLevel()
    {
        return $this->container['signature_level'];
    }

    /**
     * Sets signature_level
     *
     * @param string|null $signature_level signature_level
     *
     * @return self
     */
    public function setSignatureLevel($signature_level)
    {
        if (is_null($signature_level)) {
            throw new \InvalidArgumentException('non-nullable signature_level cannot be null');
        }
        $allowedValues = $this->getSignatureLevelAllowableValues();
        if (!in_array($signature_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'signature_level', must be one of '%s'",
                    $signature_level,
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
     * @return string|null
     */
    public function getSignatureAuthenticationMode()
    {
        return $this->container['signature_authentication_mode'];
    }

    /**
     * Sets signature_authentication_mode
     *
     * @param string|null $signature_authentication_mode signature_authentication_mode
     *
     * @return self
     */
    public function setSignatureAuthenticationMode($signature_authentication_mode)
    {
        if (is_null($signature_authentication_mode)) {
            array_push($this->openAPINullablesSetToNull, 'signature_authentication_mode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('signature_authentication_mode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getSignatureAuthenticationModeAllowableValues();
        if (!is_null($signature_authentication_mode) && !in_array($signature_authentication_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'signature_authentication_mode', must be one of '%s'",
                    $signature_authentication_mode,
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
     * @return \Yousign\Client\Model\FromScratch1RedirectUrls|null
     */
    public function getRedirectUrls()
    {
        return $this->container['redirect_urls'];
    }

    /**
     * Sets redirect_urls
     *
     * @param \Yousign\Client\Model\FromScratch1RedirectUrls|null $redirect_urls redirect_urls
     *
     * @return self
     */
    public function setRedirectUrls($redirect_urls)
    {
        if (is_null($redirect_urls)) {
            throw new \InvalidArgumentException('non-nullable redirect_urls cannot be null');
        }
        $this->container['redirect_urls'] = $redirect_urls;

        return $this;
    }

    /**
     * Gets custom_text
     *
     * @return \Yousign\Client\Model\FromScratch1CustomText|null
     */
    public function getCustomText()
    {
        return $this->container['custom_text'];
    }

    /**
     * Sets custom_text
     *
     * @param \Yousign\Client\Model\FromScratch1CustomText|null $custom_text custom_text
     *
     * @return self
     */
    public function setCustomText($custom_text)
    {
        if (is_null($custom_text)) {
            throw new \InvalidArgumentException('non-nullable custom_text cannot be null');
        }
        $this->container['custom_text'] = $custom_text;

        return $this;
    }

    /**
     * Gets delivery_mode
     *
     * @return \Yousign\Client\Model\SignerDeliveryMode|null
     */
    public function getDeliveryMode()
    {
        return $this->container['delivery_mode'];
    }

    /**
     * Sets delivery_mode
     *
     * @param \Yousign\Client\Model\SignerDeliveryMode|null $delivery_mode delivery_mode
     *
     * @return self
     */
    public function setDeliveryMode($delivery_mode)
    {
        if (is_null($delivery_mode)) {
            array_push($this->openAPINullablesSetToNull, 'delivery_mode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delivery_mode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['delivery_mode'] = $delivery_mode;

        return $this;
    }

    /**
     * Gets identification_attestation_id
     *
     * @return string|null
     */
    public function getIdentificationAttestationId()
    {
        return $this->container['identification_attestation_id'];
    }

    /**
     * Sets identification_attestation_id
     *
     * @param string|null $identification_attestation_id identification_attestation_id
     *
     * @return self
     */
    public function setIdentificationAttestationId($identification_attestation_id)
    {
        if (is_null($identification_attestation_id)) {
            array_push($this->openAPINullablesSetToNull, 'identification_attestation_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('identification_attestation_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($identification_attestation_id) && (mb_strlen($identification_attestation_id) > 255)) {
            throw new \InvalidArgumentException('invalid length for $identification_attestation_id when calling UpdateSigner., must be smaller than or equal to 255.');
        }
        if (!is_null($identification_attestation_id) && (mb_strlen($identification_attestation_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $identification_attestation_id when calling UpdateSigner., must be bigger than or equal to 1.');
        }

        $this->container['identification_attestation_id'] = $identification_attestation_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


