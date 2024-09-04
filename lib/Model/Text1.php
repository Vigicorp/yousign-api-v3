<?php
/**
 * Text1
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
 * Text1 Class Doc Comment
 *
 * @category Class
 * @package  Yousign\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Text1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Text_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'signer_id' => 'string',
        'page' => 'int',
        'x' => 'int',
        'y' => 'int',
        'width' => 'int',
        'height' => 'int',
        'max_length' => 'int',
        'question' => 'string',
        'instruction' => 'string',
        'optional' => 'bool',
        'font' => '\Yousign\Client\Model\UpdateFieldFont'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'signer_id' => 'uuid',
        'page' => null,
        'x' => null,
        'y' => null,
        'width' => null,
        'height' => null,
        'max_length' => null,
        'question' => null,
        'instruction' => null,
        'optional' => null,
        'font' => null
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
        'signer_id' => 'signer_id',
        'page' => 'page',
        'x' => 'x',
        'y' => 'y',
        'width' => 'width',
        'height' => 'height',
        'max_length' => 'max_length',
        'question' => 'question',
        'instruction' => 'instruction',
        'optional' => 'optional',
        'font' => 'font'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'signer_id' => 'setSignerId',
        'page' => 'setPage',
        'x' => 'setX',
        'y' => 'setY',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'max_length' => 'setMaxLength',
        'question' => 'setQuestion',
        'instruction' => 'setInstruction',
        'optional' => 'setOptional',
        'font' => 'setFont'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'signer_id' => 'getSignerId',
        'page' => 'getPage',
        'x' => 'getX',
        'y' => 'getY',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'max_length' => 'getMaxLength',
        'question' => 'getQuestion',
        'instruction' => 'getInstruction',
        'optional' => 'getOptional',
        'font' => 'getFont'
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
        $this->container['signer_id'] = isset($data['signer_id']) ? $data['signer_id'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['max_length'] = isset($data['max_length']) ? $data['max_length'] : null;
        $this->container['question'] = isset($data['question']) ? $data['question'] : null;
        $this->container['instruction'] = isset($data['instruction']) ? $data['instruction'] : null;
        $this->container['optional'] = isset($data['optional']) ? $data['optional'] : false;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
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
     * Gets signer_id
     *
     * @return string
     */
    public function getSignerId()
    {
        return $this->container['signer_id'];
    }

    /**
     * Sets signer_id
     *
     * @param string $signer_id signer_id
     *
     * @return $this
     */
    public function setSignerId($signer_id)
    {
        $this->container['signer_id'] = $signer_id;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int $page page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets x
     *
     * @return int
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param int $x x
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets y
     *
     * @return int
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     * @param int $y y
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->container['y'] = $y;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width If not set, the width is automatically calculated with the max_length value
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height The height must be 24 or a multiple of 15 greater than 24. If height is provided, max_length must be less than or equal to the maximum number of characters based on the width and height of the text field.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets max_length
     *
     * @return int
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     *
     * @param int $max_length max_length
     *
     * @return $this
     */
    public function setMaxLength($max_length)
    {
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->container['question'];
    }

    /**
     * Sets question
     *
     * @param string $question question
     *
     * @return $this
     */
    public function setQuestion($question)
    {
        $this->container['question'] = $question;

        return $this;
    }

    /**
     * Gets instruction
     *
     * @return string
     */
    public function getInstruction()
    {
        return $this->container['instruction'];
    }

    /**
     * Sets instruction
     *
     * @param string $instruction instruction
     *
     * @return $this
     */
    public function setInstruction($instruction)
    {
        $this->container['instruction'] = $instruction;

        return $this;
    }

    /**
     * Gets optional
     *
     * @return bool
     */
    public function getOptional()
    {
        return $this->container['optional'];
    }

    /**
     * Sets optional
     *
     * @param bool $optional optional
     *
     * @return $this
     */
    public function setOptional($optional)
    {
        $this->container['optional'] = $optional;

        return $this;
    }

    /**
     * Gets font
     *
     * @return \Yousign\Client\Model\UpdateFieldFont
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
     * Sets font
     *
     * @param \Yousign\Client\Model\UpdateFieldFont $font font
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

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
