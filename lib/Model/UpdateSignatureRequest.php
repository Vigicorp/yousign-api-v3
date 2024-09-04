<?php
/**
 * UpdateSignatureRequest
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
 * UpdateSignatureRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateSignatureRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateSignatureRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'delivery_mode' => 'string',
        'ordered_signers' => 'bool',
        'reminder_settings' => '\Swagger\Client\Model\UpdateSignatureRequestReminderSettings',
        'timezone' => 'string',
        'email_custom_note' => 'string',
        'expiration_date' => '\DateTime',
        'external_id' => 'string',
        'branding_id' => 'string',
        'custom_experience_id' => 'string',
        'signers_allowed_to_decline' => 'bool',
        'workspace_id' => 'string',
        'audit_trail_locale' => 'AllOfUpdateSignatureRequestAuditTrailLocale',
        'email_notification' => '\Swagger\Client\Model\SignatureRequestEmailNotification'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'delivery_mode' => null,
        'ordered_signers' => null,
        'reminder_settings' => null,
        'timezone' => null,
        'email_custom_note' => null,
        'expiration_date' => 'date',
        'external_id' => null,
        'branding_id' => 'uuid',
        'custom_experience_id' => 'uuid',
        'signers_allowed_to_decline' => null,
        'workspace_id' => 'uuid',
        'audit_trail_locale' => null,
        'email_notification' => null
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
        'name' => 'name',
        'delivery_mode' => 'delivery_mode',
        'ordered_signers' => 'ordered_signers',
        'reminder_settings' => 'reminder_settings',
        'timezone' => 'timezone',
        'email_custom_note' => 'email_custom_note',
        'expiration_date' => 'expiration_date',
        'external_id' => 'external_id',
        'branding_id' => 'branding_id',
        'custom_experience_id' => 'custom_experience_id',
        'signers_allowed_to_decline' => 'signers_allowed_to_decline',
        'workspace_id' => 'workspace_id',
        'audit_trail_locale' => 'audit_trail_locale',
        'email_notification' => 'email_notification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'delivery_mode' => 'setDeliveryMode',
        'ordered_signers' => 'setOrderedSigners',
        'reminder_settings' => 'setReminderSettings',
        'timezone' => 'setTimezone',
        'email_custom_note' => 'setEmailCustomNote',
        'expiration_date' => 'setExpirationDate',
        'external_id' => 'setExternalId',
        'branding_id' => 'setBrandingId',
        'custom_experience_id' => 'setCustomExperienceId',
        'signers_allowed_to_decline' => 'setSignersAllowedToDecline',
        'workspace_id' => 'setWorkspaceId',
        'audit_trail_locale' => 'setAuditTrailLocale',
        'email_notification' => 'setEmailNotification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'delivery_mode' => 'getDeliveryMode',
        'ordered_signers' => 'getOrderedSigners',
        'reminder_settings' => 'getReminderSettings',
        'timezone' => 'getTimezone',
        'email_custom_note' => 'getEmailCustomNote',
        'expiration_date' => 'getExpirationDate',
        'external_id' => 'getExternalId',
        'branding_id' => 'getBrandingId',
        'custom_experience_id' => 'getCustomExperienceId',
        'signers_allowed_to_decline' => 'getSignersAllowedToDecline',
        'workspace_id' => 'getWorkspaceId',
        'audit_trail_locale' => 'getAuditTrailLocale',
        'email_notification' => 'getEmailNotification'
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

    const DELIVERY_MODE_NONE = 'none';
    const DELIVERY_MODE_EMAIL = 'email';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliveryModeAllowableValues()
    {
        return [
            self::DELIVERY_MODE_NONE,
            self::DELIVERY_MODE_EMAIL,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['delivery_mode'] = isset($data['delivery_mode']) ? $data['delivery_mode'] : null;
        $this->container['ordered_signers'] = isset($data['ordered_signers']) ? $data['ordered_signers'] : null;
        $this->container['reminder_settings'] = isset($data['reminder_settings']) ? $data['reminder_settings'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['email_custom_note'] = isset($data['email_custom_note']) ? $data['email_custom_note'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['branding_id'] = isset($data['branding_id']) ? $data['branding_id'] : null;
        $this->container['custom_experience_id'] = isset($data['custom_experience_id']) ? $data['custom_experience_id'] : null;
        $this->container['signers_allowed_to_decline'] = isset($data['signers_allowed_to_decline']) ? $data['signers_allowed_to_decline'] : false;
        $this->container['workspace_id'] = isset($data['workspace_id']) ? $data['workspace_id'] : null;
        $this->container['audit_trail_locale'] = isset($data['audit_trail_locale']) ? $data['audit_trail_locale'] : null;
        $this->container['email_notification'] = isset($data['email_notification']) ? $data['email_notification'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDeliveryModeAllowableValues();
        if (!is_null($this->container['delivery_mode']) && !in_array($this->container['delivery_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'delivery_mode', must be one of '%s'",
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
     * @return $this
     */
    public function setName($name)
    {
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
     * @param string $delivery_mode Delivery mode to notify signers.
     *
     * @return $this
     */
    public function setDeliveryMode($delivery_mode)
    {
        $allowedValues = $this->getDeliveryModeAllowableValues();
        if (!is_null($delivery_mode) && !in_array($delivery_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'delivery_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['delivery_mode'] = $delivery_mode;

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
     * @return $this
     */
    public function setOrderedSigners($ordered_signers)
    {
        $this->container['ordered_signers'] = $ordered_signers;

        return $this;
    }

    /**
     * Gets reminder_settings
     *
     * @return \Swagger\Client\Model\UpdateSignatureRequestReminderSettings
     */
    public function getReminderSettings()
    {
        return $this->container['reminder_settings'];
    }

    /**
     * Sets reminder_settings
     *
     * @param \Swagger\Client\Model\UpdateSignatureRequestReminderSettings $reminder_settings reminder_settings
     *
     * @return $this
     */
    public function setReminderSettings($reminder_settings)
    {
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
     * @param string $timezone tz database format
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets email_custom_note
     *
     * @return string
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
     * @return $this
     */
    public function setEmailCustomNote($email_custom_note)
    {
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
     * @param \DateTime $expiration_date Due date of the signature request (yyyy-mm-dd).
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

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
     * @return $this
     */
    public function setExternalId($external_id)
    {
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
     * @return $this
     */
    public function setBrandingId($branding_id)
    {
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
     * @param string $custom_experience_id Use a specific Custom Experience to customize the signature experience.
     *
     * @return $this
     */
    public function setCustomExperienceId($custom_experience_id)
    {
        $this->container['custom_experience_id'] = $custom_experience_id;

        return $this;
    }

    /**
     * Gets signers_allowed_to_decline
     *
     * @return bool
     */
    public function getSignersAllowedToDecline()
    {
        return $this->container['signers_allowed_to_decline'];
    }

    /**
     * Sets signers_allowed_to_decline
     *
     * @param bool $signers_allowed_to_decline Allowing signers to decline to sign.
     *
     * @return $this
     */
    public function setSignersAllowedToDecline($signers_allowed_to_decline)
    {
        $this->container['signers_allowed_to_decline'] = $signers_allowed_to_decline;

        return $this;
    }

    /**
     * Gets workspace_id
     *
     * @return string
     */
    public function getWorkspaceId()
    {
        return $this->container['workspace_id'];
    }

    /**
     * Sets workspace_id
     *
     * @param string $workspace_id Transfer the Signature Request into a given Workspace.
     *
     * @return $this
     */
    public function setWorkspaceId($workspace_id)
    {
        $this->container['workspace_id'] = $workspace_id;

        return $this;
    }

    /**
     * Gets audit_trail_locale
     *
     * @return AllOfUpdateSignatureRequestAuditTrailLocale
     */
    public function getAuditTrailLocale()
    {
        return $this->container['audit_trail_locale'];
    }

    /**
     * Sets audit_trail_locale
     *
     * @param AllOfUpdateSignatureRequestAuditTrailLocale $audit_trail_locale Define the locale for the generated audit trail.
     *
     * @return $this
     */
    public function setAuditTrailLocale($audit_trail_locale)
    {
        $this->container['audit_trail_locale'] = $audit_trail_locale;

        return $this;
    }

    /**
     * Gets email_notification
     *
     * @return \Swagger\Client\Model\SignatureRequestEmailNotification
     */
    public function getEmailNotification()
    {
        return $this->container['email_notification'];
    }

    /**
     * Sets email_notification
     *
     * @param \Swagger\Client\Model\SignatureRequestEmailNotification $email_notification email_notification
     *
     * @return $this
     */
    public function setEmailNotification($email_notification)
    {
        $this->container['email_notification'] = $email_notification;

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
