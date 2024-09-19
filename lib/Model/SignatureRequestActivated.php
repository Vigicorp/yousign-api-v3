<?php
/**
 * SignatureRequestActivated
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
 * SignatureRequestActivated Class Doc Comment
 *
 * @category Class
 * @package  Yousign\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SignatureRequestActivated implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SignatureRequestActivated';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'status' => 'string',
        'name' => 'string',
        'delivery_mode' => 'string',
        'created_at' => '\DateTime',
        'ordered_signers' => 'bool',
        'reminder_settings' => '\Yousign\Client\Model\SignatureRequestInListReminderSettings',
        'timezone' => 'string',
        'email_custom_note' => 'string',
        'expiration_date' => '\DateTime',
        'signers' => '\Yousign\Client\Model\EmbeddedSignerWithSignatureLink[]',
        'approvers' => '\Yousign\Client\Model\ApproverToNotify[]',
        'documents' => '\Yousign\Client\Model\SignatureRequestActivatedDocumentsInner[]',
        'external_id' => 'string',
        'branding_id' => 'string',
        'custom_experience_id' => 'string',
        'audit_trail_locale' => '\Yousign\Client\Model\AuditTrailLocale'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'name' => null,
        'delivery_mode' => null,
        'created_at' => 'date-time',
        'ordered_signers' => null,
        'reminder_settings' => null,
        'timezone' => null,
        'email_custom_note' => null,
        'expiration_date' => 'date-time',
        'signers' => null,
        'approvers' => null,
        'documents' => null,
        'external_id' => null,
        'branding_id' => 'uuid',
        'custom_experience_id' => 'uuid',
        'audit_trail_locale' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'status' => false,
        'name' => false,
        'delivery_mode' => false,
        'created_at' => false,
        'ordered_signers' => false,
        'reminder_settings' => true,
        'timezone' => false,
        'email_custom_note' => true,
        'expiration_date' => false,
        'signers' => false,
        'approvers' => false,
        'documents' => false,
        'external_id' => true,
        'branding_id' => true,
        'custom_experience_id' => true,
        'audit_trail_locale' => false
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
        'status' => 'status',
        'name' => 'name',
        'delivery_mode' => 'delivery_mode',
        'created_at' => 'created_at',
        'ordered_signers' => 'ordered_signers',
        'reminder_settings' => 'reminder_settings',
        'timezone' => 'timezone',
        'email_custom_note' => 'email_custom_note',
        'expiration_date' => 'expiration_date',
        'signers' => 'signers',
        'approvers' => 'approvers',
        'documents' => 'documents',
        'external_id' => 'external_id',
        'branding_id' => 'branding_id',
        'custom_experience_id' => 'custom_experience_id',
        'audit_trail_locale' => 'audit_trail_locale'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'name' => 'setName',
        'delivery_mode' => 'setDeliveryMode',
        'created_at' => 'setCreatedAt',
        'ordered_signers' => 'setOrderedSigners',
        'reminder_settings' => 'setReminderSettings',
        'timezone' => 'setTimezone',
        'email_custom_note' => 'setEmailCustomNote',
        'expiration_date' => 'setExpirationDate',
        'signers' => 'setSigners',
        'approvers' => 'setApprovers',
        'documents' => 'setDocuments',
        'external_id' => 'setExternalId',
        'branding_id' => 'setBrandingId',
        'custom_experience_id' => 'setCustomExperienceId',
        'audit_trail_locale' => 'setAuditTrailLocale'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'name' => 'getName',
        'delivery_mode' => 'getDeliveryMode',
        'created_at' => 'getCreatedAt',
        'ordered_signers' => 'getOrderedSigners',
        'reminder_settings' => 'getReminderSettings',
        'timezone' => 'getTimezone',
        'email_custom_note' => 'getEmailCustomNote',
        'expiration_date' => 'getExpirationDate',
        'signers' => 'getSigners',
        'approvers' => 'getApprovers',
        'documents' => 'getDocuments',
        'external_id' => 'getExternalId',
        'branding_id' => 'getBrandingId',
        'custom_experience_id' => 'getCustomExperienceId',
        'audit_trail_locale' => 'getAuditTrailLocale'
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

    public const STATUS_ONGOING = 'ongoing';
    public const STATUS_APPROVAL = 'approval';
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
            self::STATUS_ONGOING,
            self::STATUS_APPROVAL,
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('delivery_mode', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('ordered_signers', $data ?? [], null);
        $this->setIfExists('reminder_settings', $data ?? [], null);
        $this->setIfExists('timezone', $data ?? [], null);
        $this->setIfExists('email_custom_note', $data ?? [], null);
        $this->setIfExists('expiration_date', $data ?? [], null);
        $this->setIfExists('signers', $data ?? [], null);
        $this->setIfExists('approvers', $data ?? [], null);
        $this->setIfExists('documents', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('branding_id', $data ?? [], null);
        $this->setIfExists('custom_experience_id', $data ?? [], null);
        $this->setIfExists('audit_trail_locale', $data ?? [], null);
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

        if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.";
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 128)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ((mb_strlen($this->container['created_at']) < 1)) {
            $invalidProperties[] = "invalid value for 'created_at', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['ordered_signers'] === null) {
            $invalidProperties[] = "'ordered_signers' can't be null";
        }
        if ($this->container['reminder_settings'] === null) {
            $invalidProperties[] = "'reminder_settings' can't be null";
        }
        if ($this->container['timezone'] === null) {
            $invalidProperties[] = "'timezone' can't be null";
        }
        if ($this->container['email_custom_note'] === null) {
            $invalidProperties[] = "'email_custom_note' can't be null";
        }
        if ($this->container['expiration_date'] === null) {
            $invalidProperties[] = "'expiration_date' can't be null";
        }
        if ($this->container['signers'] === null) {
            $invalidProperties[] = "'signers' can't be null";
        }
        if ((count($this->container['signers']) < 1)) {
            $invalidProperties[] = "invalid value for 'signers', number of items must be greater than or equal to 1.";
        }

        if ($this->container['documents'] === null) {
            $invalidProperties[] = "'documents' can't be null";
        }
        if ($this->container['external_id'] === null) {
            $invalidProperties[] = "'external_id' can't be null";
        }
        if ((mb_strlen($this->container['external_id']) > 255)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be smaller than or equal to 255.";
        }

        if (!preg_match("/^[\\w\\-@.%+]+$/", $this->container['external_id'])) {
            $invalidProperties[] = "invalid value for 'external_id', must be conform to the pattern /^[\\w\\-@.%+]+$/.";
        }

        if ($this->container['branding_id'] === null) {
            $invalidProperties[] = "'branding_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $this->container['branding_id'])) {
            $invalidProperties[] = "invalid value for 'branding_id', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.";
        }

        if ($this->container['custom_experience_id'] === null) {
            $invalidProperties[] = "'custom_experience_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $this->container['custom_experience_id'])) {
            $invalidProperties[] = "invalid value for 'custom_experience_id', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.";
        }

        if ($this->container['audit_trail_locale'] === null) {
            $invalidProperties[] = "'audit_trail_locale' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $id when calling SignatureRequestActivated., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", ObjectSerializer::toString($id)))) {
            throw new \InvalidArgumentException("invalid value for \$id when calling SignatureRequestActivated., must conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.");
        }

        $this->container['id'] = $id;

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
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 128)) {
            throw new \InvalidArgumentException('invalid length for $name when calling SignatureRequestActivated., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling SignatureRequestActivated., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

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
            throw new \InvalidArgumentException('non-nullable delivery_mode cannot be null');
        }
        $allowedValues = $this->getDeliveryModeAllowableValues();
        if (!in_array($delivery_mode, $allowedValues, true)) {
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
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }

        if (!($created_at instanceof \DateTime)) {
            throw new \InvalidArgumentException('invalid type for $created_at when calling SignatureRequest., must be a \DateTime.');
        }

        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets ordered_signers
     *
     * @return bool
     */
    public function getOrderedSigners()
    {
        return $this->container['ordered_signers'];
    }

    /**
     * Sets ordered_signers
     *
     * @param bool $ordered_signers Enable an ordered workflow, each signer will be requested to sign in a sequential order
     *
     * @return self
     */
    public function setOrderedSigners($ordered_signers)
    {
        if (is_null($ordered_signers)) {
            throw new \InvalidArgumentException('non-nullable ordered_signers cannot be null');
        }
        $this->container['ordered_signers'] = $ordered_signers;

        return $this;
    }

    /**
     * Gets reminder_settings
     *
     * @return \Yousign\Client\Model\SignatureRequestInListReminderSettings
     */
    public function getReminderSettings()
    {
        return $this->container['reminder_settings'];
    }

    /**
     * Sets reminder_settings
     *
     * @param \Yousign\Client\Model\SignatureRequestInListReminderSettings $reminder_settings reminder_settings
     *
     * @return self
     */
    public function setReminderSettings($reminder_settings)
    {
        if (is_null($reminder_settings)) {
            array_push($this->openAPINullablesSetToNull, 'reminder_settings');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reminder_settings', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['reminder_settings'] = $reminder_settings;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone timezone
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        if (is_null($timezone)) {
            throw new \InvalidArgumentException('non-nullable timezone cannot be null');
        }
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets email_custom_note
     *
     * @return string
     * @deprecated
     */
    public function getEmailCustomNote()
    {
        return $this->container['email_custom_note'];
    }

    /**
     * Sets email_custom_note
     *
     * @param string $email_custom_note email_custom_note
     *
     * @return self
     * @deprecated
     */
    public function setEmailCustomNote($email_custom_note)
    {
        if (is_null($email_custom_note)) {
            array_push($this->openAPINullablesSetToNull, 'email_custom_note');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email_custom_note', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['email_custom_note'] = $email_custom_note;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime $expiration_date expiration_date
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        if (is_null($expiration_date)) {
            throw new \InvalidArgumentException('non-nullable expiration_date cannot be null');
        }
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets signers
     *
     * @return \Yousign\Client\Model\EmbeddedSignerWithSignatureLink[]
     */
    public function getSigners()
    {
        return $this->container['signers'];
    }

    /**
     * Sets signers
     *
     * @param \Yousign\Client\Model\EmbeddedSignerWithSignatureLink[] $signers signers
     *
     * @return self
     */
    public function setSigners($signers)
    {
        if (is_null($signers)) {
            throw new \InvalidArgumentException('non-nullable signers cannot be null');
        }


        if ((count($signers) < 1)) {
            throw new \InvalidArgumentException('invalid length for $signers when calling SignatureRequestActivated., number of items must be greater than or equal to 1.');
        }
        $this->container['signers'] = $signers;

        return $this;
    }

    /**
     * Gets approvers
     *
     * @return \Yousign\Client\Model\ApproverToNotify[]|null
     */
    public function getApprovers()
    {
        return $this->container['approvers'];
    }

    /**
     * Sets approvers
     *
     * @param \Yousign\Client\Model\ApproverToNotify[]|null $approvers approvers
     *
     * @return self
     */
    public function setApprovers($approvers)
    {
        if (is_null($approvers)) {
            throw new \InvalidArgumentException('non-nullable approvers cannot be null');
        }


        $this->container['approvers'] = $approvers;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \Yousign\Client\Model\SignatureRequestActivatedDocumentsInner[]
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \Yousign\Client\Model\SignatureRequestActivatedDocumentsInner[] $documents documents
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        if (is_null($documents)) {
            throw new \InvalidArgumentException('non-nullable documents cannot be null');
        }
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id external_id
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            array_push($this->openAPINullablesSetToNull, 'external_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('external_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($external_id) && (mb_strlen($external_id) > 255)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling SignatureRequestActivated., must be smaller than or equal to 255.');
        }
        if (!is_null($external_id) && (!preg_match("/^[\\w\\-@.%+]+$/", ObjectSerializer::toString($external_id)))) {
            throw new \InvalidArgumentException("invalid value for \$external_id when calling SignatureRequestActivated., must conform to the pattern /^[\\w\\-@.%+]+$/.");
        }

        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets branding_id
     *
     * @return string
     */
    public function getBrandingId()
    {
        return $this->container['branding_id'];
    }

    /**
     * Sets branding_id
     *
     * @param string $branding_id branding_id
     *
     * @return self
     */
    public function setBrandingId($branding_id)
    {
        if (is_null($branding_id)) {
            array_push($this->openAPINullablesSetToNull, 'branding_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('branding_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($branding_id) && (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", ObjectSerializer::toString($branding_id)))) {
            throw new \InvalidArgumentException("invalid value for \$branding_id when calling SignatureRequestActivated., must conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.");
        }

        $this->container['branding_id'] = $branding_id;

        return $this;
    }

    /**
     * Gets custom_experience_id
     *
     * @return string
     */
    public function getCustomExperienceId()
    {
        return $this->container['custom_experience_id'];
    }

    /**
     * Sets custom_experience_id
     *
     * @param string $custom_experience_id custom_experience_id
     *
     * @return self
     */
    public function setCustomExperienceId($custom_experience_id)
    {
        if (is_null($custom_experience_id)) {
            array_push($this->openAPINullablesSetToNull, 'custom_experience_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom_experience_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($custom_experience_id) && (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", ObjectSerializer::toString($custom_experience_id)))) {
            throw new \InvalidArgumentException("invalid value for \$custom_experience_id when calling SignatureRequestActivated., must conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.");
        }

        $this->container['custom_experience_id'] = $custom_experience_id;

        return $this;
    }

    /**
     * Gets audit_trail_locale
     *
     * @return \Yousign\Client\Model\AuditTrailLocale
     */
    public function getAuditTrailLocale()
    {
        return $this->container['audit_trail_locale'];
    }

    /**
     * Sets audit_trail_locale
     *
     * @param \Yousign\Client\Model\AuditTrailLocale $audit_trail_locale audit_trail_locale
     *
     * @return self
     */
    public function setAuditTrailLocale($audit_trail_locale)
    {
        if (is_null($audit_trail_locale)) {
            throw new \InvalidArgumentException('non-nullable audit_trail_locale cannot be null');
        }
        $this->container['audit_trail_locale'] = $audit_trail_locale;

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
