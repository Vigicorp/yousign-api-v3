<?php
/**
 * UpdateCustomExperience
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
 * UpdateCustomExperience Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateCustomExperience implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateCustomExperience';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'landing_page_disabled' => 'bool',
        'side_panel_disabled' => 'bool',
        'background_color' => 'string',
        'button_color' => 'string',
        'text_color' => 'string',
        'text_button_color' => 'string',
        'disabled_notifications' => '\Swagger\Client\Model\CustomExperienceDisabledNotificationsType[]',
        'email_logo_disabled' => 'bool',
        'email_header_text_disabled' => 'bool',
        'email_footer_signature_disabled' => 'bool',
        'email_expiration_text_disabled' => 'bool',
        'redirect_urls' => '\Swagger\Client\Model\UpdateCustomExperienceRedirectUrls'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'landing_page_disabled' => null,
        'side_panel_disabled' => null,
        'background_color' => null,
        'button_color' => null,
        'text_color' => null,
        'text_button_color' => null,
        'disabled_notifications' => null,
        'email_logo_disabled' => null,
        'email_header_text_disabled' => null,
        'email_footer_signature_disabled' => null,
        'email_expiration_text_disabled' => null,
        'redirect_urls' => null
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
        'landing_page_disabled' => 'landing_page_disabled',
        'side_panel_disabled' => 'side_panel_disabled',
        'background_color' => 'background_color',
        'button_color' => 'button_color',
        'text_color' => 'text_color',
        'text_button_color' => 'text_button_color',
        'disabled_notifications' => 'disabled_notifications',
        'email_logo_disabled' => 'email_logo_disabled',
        'email_header_text_disabled' => 'email_header_text_disabled',
        'email_footer_signature_disabled' => 'email_footer_signature_disabled',
        'email_expiration_text_disabled' => 'email_expiration_text_disabled',
        'redirect_urls' => 'redirect_urls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'landing_page_disabled' => 'setLandingPageDisabled',
        'side_panel_disabled' => 'setSidePanelDisabled',
        'background_color' => 'setBackgroundColor',
        'button_color' => 'setButtonColor',
        'text_color' => 'setTextColor',
        'text_button_color' => 'setTextButtonColor',
        'disabled_notifications' => 'setDisabledNotifications',
        'email_logo_disabled' => 'setEmailLogoDisabled',
        'email_header_text_disabled' => 'setEmailHeaderTextDisabled',
        'email_footer_signature_disabled' => 'setEmailFooterSignatureDisabled',
        'email_expiration_text_disabled' => 'setEmailExpirationTextDisabled',
        'redirect_urls' => 'setRedirectUrls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'landing_page_disabled' => 'getLandingPageDisabled',
        'side_panel_disabled' => 'getSidePanelDisabled',
        'background_color' => 'getBackgroundColor',
        'button_color' => 'getButtonColor',
        'text_color' => 'getTextColor',
        'text_button_color' => 'getTextButtonColor',
        'disabled_notifications' => 'getDisabledNotifications',
        'email_logo_disabled' => 'getEmailLogoDisabled',
        'email_header_text_disabled' => 'getEmailHeaderTextDisabled',
        'email_footer_signature_disabled' => 'getEmailFooterSignatureDisabled',
        'email_expiration_text_disabled' => 'getEmailExpirationTextDisabled',
        'redirect_urls' => 'getRedirectUrls'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['landing_page_disabled'] = isset($data['landing_page_disabled']) ? $data['landing_page_disabled'] : null;
        $this->container['side_panel_disabled'] = isset($data['side_panel_disabled']) ? $data['side_panel_disabled'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['button_color'] = isset($data['button_color']) ? $data['button_color'] : null;
        $this->container['text_color'] = isset($data['text_color']) ? $data['text_color'] : null;
        $this->container['text_button_color'] = isset($data['text_button_color']) ? $data['text_button_color'] : null;
        $this->container['disabled_notifications'] = isset($data['disabled_notifications']) ? $data['disabled_notifications'] : null;
        $this->container['email_logo_disabled'] = isset($data['email_logo_disabled']) ? $data['email_logo_disabled'] : null;
        $this->container['email_header_text_disabled'] = isset($data['email_header_text_disabled']) ? $data['email_header_text_disabled'] : null;
        $this->container['email_footer_signature_disabled'] = isset($data['email_footer_signature_disabled']) ? $data['email_footer_signature_disabled'] : null;
        $this->container['email_expiration_text_disabled'] = isset($data['email_expiration_text_disabled']) ? $data['email_expiration_text_disabled'] : null;
        $this->container['redirect_urls'] = isset($data['redirect_urls']) ? $data['redirect_urls'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets landing_page_disabled
     *
     * @return bool
     */
    public function getLandingPageDisabled()
    {
        return $this->container['landing_page_disabled'];
    }

    /**
     * Sets landing_page_disabled
     *
     * @param bool $landing_page_disabled landing_page_disabled
     *
     * @return $this
     */
    public function setLandingPageDisabled($landing_page_disabled)
    {
        $this->container['landing_page_disabled'] = $landing_page_disabled;

        return $this;
    }

    /**
     * Gets side_panel_disabled
     *
     * @return bool
     */
    public function getSidePanelDisabled()
    {
        return $this->container['side_panel_disabled'];
    }

    /**
     * Sets side_panel_disabled
     *
     * @param bool $side_panel_disabled side_panel_disabled
     *
     * @return $this
     */
    public function setSidePanelDisabled($side_panel_disabled)
    {
        $this->container['side_panel_disabled'] = $side_panel_disabled;

        return $this;
    }

    /**
     * Gets background_color
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param string $background_color Hexadecimal color value
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets button_color
     *
     * @return string
     */
    public function getButtonColor()
    {
        return $this->container['button_color'];
    }

    /**
     * Sets button_color
     *
     * @param string $button_color Hexadecimal color value
     *
     * @return $this
     */
    public function setButtonColor($button_color)
    {
        $this->container['button_color'] = $button_color;

        return $this;
    }

    /**
     * Gets text_color
     *
     * @return string
     */
    public function getTextColor()
    {
        return $this->container['text_color'];
    }

    /**
     * Sets text_color
     *
     * @param string $text_color Hexadecimal color value
     *
     * @return $this
     */
    public function setTextColor($text_color)
    {
        $this->container['text_color'] = $text_color;

        return $this;
    }

    /**
     * Gets text_button_color
     *
     * @return string
     */
    public function getTextButtonColor()
    {
        return $this->container['text_button_color'];
    }

    /**
     * Sets text_button_color
     *
     * @param string $text_button_color Hexadecimal color value
     *
     * @return $this
     */
    public function setTextButtonColor($text_button_color)
    {
        $this->container['text_button_color'] = $text_button_color;

        return $this;
    }

    /**
     * Gets disabled_notifications
     *
     * @return \Swagger\Client\Model\CustomExperienceDisabledNotificationsType[]
     */
    public function getDisabledNotifications()
    {
        return $this->container['disabled_notifications'];
    }

    /**
     * Sets disabled_notifications
     *
     * @param \Swagger\Client\Model\CustomExperienceDisabledNotificationsType[] $disabled_notifications disabled_notifications
     *
     * @return $this
     */
    public function setDisabledNotifications($disabled_notifications)
    {
        $this->container['disabled_notifications'] = $disabled_notifications;

        return $this;
    }

    /**
     * Gets email_logo_disabled
     *
     * @return bool
     */
    public function getEmailLogoDisabled()
    {
        return $this->container['email_logo_disabled'];
    }

    /**
     * Sets email_logo_disabled
     *
     * @param bool $email_logo_disabled email_logo_disabled
     *
     * @return $this
     */
    public function setEmailLogoDisabled($email_logo_disabled)
    {
        $this->container['email_logo_disabled'] = $email_logo_disabled;

        return $this;
    }

    /**
     * Gets email_header_text_disabled
     *
     * @return bool
     */
    public function getEmailHeaderTextDisabled()
    {
        return $this->container['email_header_text_disabled'];
    }

    /**
     * Sets email_header_text_disabled
     *
     * @param bool $email_header_text_disabled email_header_text_disabled
     *
     * @return $this
     */
    public function setEmailHeaderTextDisabled($email_header_text_disabled)
    {
        $this->container['email_header_text_disabled'] = $email_header_text_disabled;

        return $this;
    }

    /**
     * Gets email_footer_signature_disabled
     *
     * @return bool
     */
    public function getEmailFooterSignatureDisabled()
    {
        return $this->container['email_footer_signature_disabled'];
    }

    /**
     * Sets email_footer_signature_disabled
     *
     * @param bool $email_footer_signature_disabled email_footer_signature_disabled
     *
     * @return $this
     */
    public function setEmailFooterSignatureDisabled($email_footer_signature_disabled)
    {
        $this->container['email_footer_signature_disabled'] = $email_footer_signature_disabled;

        return $this;
    }

    /**
     * Gets email_expiration_text_disabled
     *
     * @return bool
     */
    public function getEmailExpirationTextDisabled()
    {
        return $this->container['email_expiration_text_disabled'];
    }

    /**
     * Sets email_expiration_text_disabled
     *
     * @param bool $email_expiration_text_disabled email_expiration_text_disabled
     *
     * @return $this
     */
    public function setEmailExpirationTextDisabled($email_expiration_text_disabled)
    {
        $this->container['email_expiration_text_disabled'] = $email_expiration_text_disabled;

        return $this;
    }

    /**
     * Gets redirect_urls
     *
     * @return \Swagger\Client\Model\UpdateCustomExperienceRedirectUrls
     */
    public function getRedirectUrls()
    {
        return $this->container['redirect_urls'];
    }

    /**
     * Sets redirect_urls
     *
     * @param \Swagger\Client\Model\UpdateCustomExperienceRedirectUrls $redirect_urls redirect_urls
     *
     * @return $this
     */
    public function setRedirectUrls($redirect_urls)
    {
        $this->container['redirect_urls'] = $redirect_urls;

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
