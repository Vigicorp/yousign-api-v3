<?php
/**
 * Signer
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
 * Signer Class Doc Comment
 *
 * @category Class
 * @description Signer
 * @package  Yousign\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Signer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Signer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'info' => '\Yousign\Client\Model\SignerInfo',
        'status' => 'string',
        'fields' => '\Yousign\Client\Model\SignerFieldsInner[]',
        'signature_level' => 'string',
        'signature_authentication_mode' => 'string',
        'signature_link' => 'string',
        'signature_link_expiration_date' => '\DateTime',
        'signature_image_preview' => 'string',
        'redirect_urls' => '\Yousign\Client\Model\SignerRedirectUrls',
        'custom_text' => '\Yousign\Client\Model\SignerCustomText',
        'delivery_mode' => 'string',
        'identification_attestation_id' => 'string',
        'sms_notification' => '\Yousign\Client\Model\SmsNotification'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'info' => null,
        'status' => null,
        'fields' => null,
        'signature_level' => null,
        'signature_authentication_mode' => null,
        'signature_link' => 'uri',
        'signature_link_expiration_date' => 'date-time',
        'signature_image_preview' => null,
        'redirect_urls' => null,
        'custom_text' => null,
        'delivery_mode' => null,
        'identification_attestation_id' => null,
        'sms_notification' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'info' => false,
        'status' => false,
        'fields' => true,
        'signature_level' => false,
        'signature_authentication_mode' => true,
        'signature_link' => true,
        'signature_link_expiration_date' => true,
        'signature_image_preview' => true,
        'redirect_urls' => false,
        'custom_text' => false,
        'delivery_mode' => true,
        'identification_attestation_id' => true,
        'sms_notification' => false
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
        'id' => 'id',
        'info' => 'info',
        'status' => 'status',
        'fields' => 'fields',
        'signature_level' => 'signature_level',
        'signature_authentication_mode' => 'signature_authentication_mode',
        'signature_link' => 'signature_link',
        'signature_link_expiration_date' => 'signature_link_expiration_date',
        'signature_image_preview' => 'signature_image_preview',
        'redirect_urls' => 'redirect_urls',
        'custom_text' => 'custom_text',
        'delivery_mode' => 'delivery_mode',
        'identification_attestation_id' => 'identification_attestation_id',
        'sms_notification' => 'sms_notification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'info' => 'setInfo',
        'status' => 'setStatus',
        'fields' => 'setFields',
        'signature_level' => 'setSignatureLevel',
        'signature_authentication_mode' => 'setSignatureAuthenticationMode',
        'signature_link' => 'setSignatureLink',
        'signature_link_expiration_date' => 'setSignatureLinkExpirationDate',
        'signature_image_preview' => 'setSignatureImagePreview',
        'redirect_urls' => 'setRedirectUrls',
        'custom_text' => 'setCustomText',
        'delivery_mode' => 'setDeliveryMode',
        'identification_attestation_id' => 'setIdentificationAttestationId',
        'sms_notification' => 'setSmsNotification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'info' => 'getInfo',
        'status' => 'getStatus',
        'fields' => 'getFields',
        'signature_level' => 'getSignatureLevel',
        'signature_authentication_mode' => 'getSignatureAuthenticationMode',
        'signature_link' => 'getSignatureLink',
        'signature_link_expiration_date' => 'getSignatureLinkExpirationDate',
        'signature_image_preview' => 'getSignatureImagePreview',
        'redirect_urls' => 'getRedirectUrls',
        'custom_text' => 'getCustomText',
        'delivery_mode' => 'getDeliveryMode',
        'identification_attestation_id' => 'getIdentificationAttestationId',
        'sms_notification' => 'getSmsNotification'
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

    public const STATUS_INITIATED = 'initiated';
    public const STATUS_DECLINED = 'declined';
    public const STATUS_NOTIFIED = 'notified';
    public const STATUS_VERIFIED = 'verified';
    public const STATUS_PROCESSING = 'processing';
    public const STATUS_CONSENT_GIVEN = 'consent_given';
    public const STATUS_SIGNED = 'signed';
    public const STATUS_ABORTED = 'aborted';
    public const STATUS_ERROR = 'error';
    public const SIGNATURE_LEVEL_ELECTRONIC_SIGNATURE = 'electronic_signature';
    public const SIGNATURE_LEVEL_ADVANCED_ELECTRONIC_SIGNATURE = 'advanced_electronic_signature';
    public const SIGNATURE_LEVEL_ELECTRONIC_SIGNATURE_WITH_QUALIFIED_CERTIFICATE = 'electronic_signature_with_qualified_certificate';
    public const SIGNATURE_LEVEL_QUALIFIED_ELECTRONIC_SIGNATURE = 'qualified_electronic_signature';
    public const SIGNATURE_LEVEL_QUALIFIED_ELECTRONIC_SIGNATURE_MODE_1 = 'qualified_electronic_signature_mode_1';
    public const SIGNATURE_AUTHENTICATION_MODE_NULL = 'null';
    public const SIGNATURE_AUTHENTICATION_MODE_OTP_EMAIL = 'otp_email';
    public const SIGNATURE_AUTHENTICATION_MODE_OTP_SMS = 'otp_sms';
    public const SIGNATURE_AUTHENTICATION_MODE_NO_OTP = 'no_otp';
    public const DELIVERY_MODE_EMAIL = 'email';
    public const DELIVERY_MODE_NONE = 'none';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_INITIATED,
            self::STATUS_DECLINED,
            self::STATUS_NOTIFIED,
            self::STATUS_VERIFIED,
            self::STATUS_PROCESSING,
            self::STATUS_CONSENT_GIVEN,
            self::STATUS_SIGNED,
            self::STATUS_ABORTED,
            self::STATUS_ERROR,
        ];
    }

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliveryModeAllowableValues()
    {
        return [
            self::DELIVERY_MODE_EMAIL,
            self::DELIVERY_MODE_NONE,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('info', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('fields', $data ?? [], null);
        $this->setIfExists('signature_level', $data ?? [], 'electronic_signature');
        $this->setIfExists('signature_authentication_mode', $data ?? [], null);
        $this->setIfExists('signature_link', $data ?? [], null);
        $this->setIfExists('signature_link_expiration_date', $data ?? [], null);
        $this->setIfExists('signature_image_preview', $data ?? [], null);
        $this->setIfExists('redirect_urls', $data ?? [], null);
        $this->setIfExists('custom_text', $data ?? [], null);
        $this->setIfExists('delivery_mode', $data ?? [], null);
        $this->setIfExists('identification_attestation_id', $data ?? [], null);
        $this->setIfExists('sms_notification', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) < 1)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['info'] === null) {
            $invalidProperties[] = "'info' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['status']) < 1)) {
            $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['fields'] === null) {
            $invalidProperties[] = "'fields' can't be null";
        }
        if ($this->container['signature_level'] === null) {
            $invalidProperties[] = "'signature_level' can't be null";
        }
        $allowedValues = $this->getSignatureLevelAllowableValues();
        if (!is_null($this->container['signature_level']) && !in_array($this->container['signature_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'signature_level', must be one of '%s'",
                $this->container['signature_level'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['signature_authentication_mode'] === null) {
            $invalidProperties[] = "'signature_authentication_mode' can't be null";
        }
        $allowedValues = $this->getSignatureAuthenticationModeAllowableValues();
        if (!is_null($this->container['signature_authentication_mode']) && !in_array($this->container['signature_authentication_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'signature_authentication_mode', must be one of '%s'",
                $this->container['signature_authentication_mode'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['signature_link'] === null) {
            $invalidProperties[] = "'signature_link' can't be null";
        }
        if ((mb_strlen($this->container['signature_link']) < 1)) {
            $invalidProperties[] = "invalid value for 'signature_link', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['signature_link_expiration_date'] === null) {
            $invalidProperties[] = "'signature_link_expiration_date' can't be null";
        }
        if ($this->container['signature_image_preview'] === null) {
            $invalidProperties[] = "'signature_image_preview' can't be null";
        }
        if ((mb_strlen($this->container['signature_image_preview']) < 1)) {
            $invalidProperties[] = "invalid value for 'signature_image_preview', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['redirect_urls'] === null) {
            $invalidProperties[] = "'redirect_urls' can't be null";
        }
        if ($this->container['custom_text'] === null) {
            $invalidProperties[] = "'custom_text' can't be null";
        }
        if ($this->container['delivery_mode'] === null) {
            $invalidProperties[] = "'delivery_mode' can't be null";
        }
        $allowedValues = $this->getDeliveryModeAllowableValues();
        if (!is_null($this->container['delivery_mode']) && !in_array($this->container['delivery_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'delivery_mode', must be one of '%s'",
                $this->container['delivery_mode'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['identification_attestation_id'] === null) {
            $invalidProperties[] = "'identification_attestation_id' can't be null";
        }
        if ((mb_strlen($this->container['identification_attestation_id']) > 255)) {
            $invalidProperties[] = "invalid value for 'identification_attestation_id', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['identification_attestation_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'identification_attestation_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['sms_notification'] === null) {
            $invalidProperties[] = "'sms_notification' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        if ((mb_strlen($id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id when calling Signer., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets info
     *
     * @return \Yousign\Client\Model\SignerInfo
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     *
     * @param \Yousign\Client\Model\SignerInfo $info info
     *
     * @return self
     */
    public function setInfo($info)
    {
        if (is_null($info)) {
            throw new \InvalidArgumentException('non-nullable info cannot be null');
        }
        $this->container['info'] = $info;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if ((mb_strlen($status) < 1)) {
            throw new \InvalidArgumentException('invalid length for $status when calling Signer., must be bigger than or equal to 1.');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \Yousign\Client\Model\SignerFieldsInner[]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \Yousign\Client\Model\SignerFieldsInner[] $fields fields
     *
     * @return self
     */
    public function setFields($fields)
    {
        if (is_null($fields)) {
            array_push($this->openAPINullablesSetToNull, 'fields');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fields', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
     * Gets signature_link
     *
     * @return string
     */
    public function getSignatureLink()
    {
        return $this->container['signature_link'];
    }

    /**
     * Sets signature_link
     *
     * @param string $signature_link signature_link
     *
     * @return self
     */
    public function setSignatureLink($signature_link)
    {
        if (is_null($signature_link)) {
            array_push($this->openAPINullablesSetToNull, 'signature_link');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('signature_link', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($signature_link) && (mb_strlen($signature_link) < 1)) {
            throw new \InvalidArgumentException('invalid length for $signature_link when calling Signer., must be bigger than or equal to 1.');
        }

        $this->container['signature_link'] = $signature_link;

        return $this;
    }

    /**
     * Gets signature_link_expiration_date
     *
     * @return \DateTime
     */
    public function getSignatureLinkExpirationDate()
    {
        return $this->container['signature_link_expiration_date'];
    }

    /**
     * Sets signature_link_expiration_date
     *
     * @param \DateTime $signature_link_expiration_date signature_link_expiration_date
     *
     * @return self
     */
    public function setSignatureLinkExpirationDate($signature_link_expiration_date)
    {
        if (is_null($signature_link_expiration_date)) {
            array_push($this->openAPINullablesSetToNull, 'signature_link_expiration_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('signature_link_expiration_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['signature_link_expiration_date'] = $signature_link_expiration_date;

        return $this;
    }

    /**
     * Gets signature_image_preview
     *
     * @return string
     */
    public function getSignatureImagePreview()
    {
        return $this->container['signature_image_preview'];
    }

    /**
     * Sets signature_image_preview
     *
     * @param string $signature_image_preview signature_image_preview
     *
     * @return self
     */
    public function setSignatureImagePreview($signature_image_preview)
    {
        if (is_null($signature_image_preview)) {
            array_push($this->openAPINullablesSetToNull, 'signature_image_preview');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('signature_image_preview', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($signature_image_preview) && (mb_strlen($signature_image_preview) < 1)) {
            throw new \InvalidArgumentException('invalid length for $signature_image_preview when calling Signer., must be bigger than or equal to 1.');
        }

        $this->container['signature_image_preview'] = $signature_image_preview;

        return $this;
    }

    /**
     * Gets redirect_urls
     *
     * @return \Yousign\Client\Model\SignerRedirectUrls
     */
    public function getRedirectUrls()
    {
        return $this->container['redirect_urls'];
    }

    /**
     * Sets redirect_urls
     *
     * @param \Yousign\Client\Model\SignerRedirectUrls $redirect_urls redirect_urls
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
     * @return \Yousign\Client\Model\SignerCustomText
     */
    public function getCustomText()
    {
        return $this->container['custom_text'];
    }

    /**
     * Sets custom_text
     *
     * @param \Yousign\Client\Model\SignerCustomText $custom_text custom_text
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
     * @return string
     */
    public function getDeliveryMode()
    {
        return $this->container['delivery_mode'];
    }

    /**
     * Sets delivery_mode
     *
     * @param string $delivery_mode delivery_mode
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
        $allowedValues = $this->getDeliveryModeAllowableValues();
        if (!is_null($delivery_mode) && !in_array($delivery_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'delivery_mode', must be one of '%s'",
                    $delivery_mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['delivery_mode'] = $delivery_mode;

        return $this;
    }

    /**
     * Gets identification_attestation_id
     *
     * @return string
     */
    public function getIdentificationAttestationId()
    {
        return $this->container['identification_attestation_id'];
    }

    /**
     * Sets identification_attestation_id
     *
     * @param string $identification_attestation_id identification_attestation_id
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
            throw new \InvalidArgumentException('invalid length for $identification_attestation_id when calling Signer., must be smaller than or equal to 255.');
        }
        if (!is_null($identification_attestation_id) && (mb_strlen($identification_attestation_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $identification_attestation_id when calling Signer., must be bigger than or equal to 1.');
        }

        $this->container['identification_attestation_id'] = $identification_attestation_id;

        return $this;
    }

    /**
     * Gets sms_notification
     *
     * @return \Yousign\Client\Model\SmsNotification
     */
    public function getSmsNotification()
    {
        return $this->container['sms_notification'];
    }

    /**
     * Sets sms_notification
     *
     * @param \Yousign\Client\Model\SmsNotification $sms_notification sms_notification
     *
     * @return self
     */
    public function setSmsNotification($sms_notification)
    {
        if (is_null($sms_notification)) {
            throw new \InvalidArgumentException('non-nullable sms_notification cannot be null');
        }
        $this->container['sms_notification'] = $sms_notification;

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


