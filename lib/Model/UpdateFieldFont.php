<?php
/**
 * UpdateFieldFont
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
 * UpdateFieldFont Class Doc Comment
 *
 * @category Class
 * @description If set, **width** and **height** properties become required. Otherwise, if not set the font will not be changed, and if set to null the default font will be used.
 * @package  Yousign\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateFieldFont implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateFieldFont';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'family' => '\Yousign\Client\Model\FontFamily',
        'color' => 'string',
        'size' => 'int',
        'variants' => '\Yousign\Client\Model\FontVariants'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'family' => null,
        'color' => null,
        'size' => null,
        'variants' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'family' => false,
        'color' => false,
        'size' => false,
        'variants' => false
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
        'family' => 'family',
        'color' => 'color',
        'size' => 'size',
        'variants' => 'variants'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'family' => 'setFamily',
        'color' => 'setColor',
        'size' => 'setSize',
        'variants' => 'setVariants'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'family' => 'getFamily',
        'color' => 'getColor',
        'size' => 'getSize',
        'variants' => 'getVariants'
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
        $this->setIfExists('family', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], '#000000');
        $this->setIfExists('size', $data ?? [], 12);
        $this->setIfExists('variants', $data ?? [], null);
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

        if ($this->container['family'] === null) {
            $invalidProperties[] = "'family' can't be null";
        }
        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        if (!preg_match("/^#([a-f0-9]{6}|[A-F0-9]{6})$/", $this->container['color'])) {
            $invalidProperties[] = "invalid value for 'color', must be conform to the pattern /^#([a-f0-9]{6}|[A-F0-9]{6})$/.";
        }

        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if (($this->container['size'] > 22)) {
            $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 22.";
        }

        if (($this->container['size'] < 8)) {
            $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 8.";
        }

        if ($this->container['variants'] === null) {
            $invalidProperties[] = "'variants' can't be null";
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
     * Gets family
     *
     * @return \Yousign\Client\Model\FontFamily
     */
    public function getFamily()
    {
        return $this->container['family'];
    }

    /**
     * Sets family
     *
     * @param \Yousign\Client\Model\FontFamily $family family
     *
     * @return self
     */
    public function setFamily($family)
    {
        if (is_null($family)) {
            throw new \InvalidArgumentException('non-nullable family cannot be null');
        }
        $this->container['family'] = $family;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color color
     *
     * @return self
     */
    public function setColor($color)
    {
        if (is_null($color)) {
            throw new \InvalidArgumentException('non-nullable color cannot be null');
        }

        if ((!preg_match("/^#([a-f0-9]{6}|[A-F0-9]{6})$/", ObjectSerializer::toString($color)))) {
            throw new \InvalidArgumentException("invalid value for \$color when calling UpdateFieldFont., must conform to the pattern /^#([a-f0-9]{6}|[A-F0-9]{6})$/.");
        }

        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }

        if (($size > 22)) {
            throw new \InvalidArgumentException('invalid value for $size when calling UpdateFieldFont., must be smaller than or equal to 22.');
        }
        if (($size < 8)) {
            throw new \InvalidArgumentException('invalid value for $size when calling UpdateFieldFont., must be bigger than or equal to 8.');
        }

        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets variants
     *
     * @return \Yousign\Client\Model\FontVariants
     */
    public function getVariants()
    {
        return $this->container['variants'];
    }

    /**
     * Sets variants
     *
     * @param \Yousign\Client\Model\FontVariants $variants variants
     *
     * @return self
     */
    public function setVariants($variants)
    {
        if (is_null($variants)) {
            throw new \InvalidArgumentException('non-nullable variants cannot be null');
        }
        $this->container['variants'] = $variants;

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


