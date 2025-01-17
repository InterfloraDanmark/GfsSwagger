<?php
/**
 * ModelMessagesMessageFilter
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swan API v4
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.43
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
 * ModelMessagesMessageFilter Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelMessagesMessageFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Model.Messages.MessageFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max_count' => 'int',
        'read_only' => 'bool',
        'direction' => 'int',
        'gf_sgate_number' => 'int',
        'unit_message_id_min' => 'int',
        'unit_message_id_max' => 'int',
        'message_type' => 'int',
        'message_status' => 'int',
        'message_date_min' => '\DateTime',
        'message_date_max' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'max_count' => 'int32',
        'read_only' => null,
        'direction' => 'int32',
        'gf_sgate_number' => 'int32',
        'unit_message_id_min' => 'int32',
        'unit_message_id_max' => 'int32',
        'message_type' => 'int32',
        'message_status' => 'int32',
        'message_date_min' => 'date-time',
        'message_date_max' => 'date-time'
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
        'max_count' => 'MaxCount',
        'read_only' => 'ReadOnly',
        'direction' => 'Direction',
        'gf_sgate_number' => 'GFSgateNumber',
        'unit_message_id_min' => 'UnitMessageIDMin',
        'unit_message_id_max' => 'UnitMessageIDMax',
        'message_type' => 'MessageType',
        'message_status' => 'MessageStatus',
        'message_date_min' => 'MessageDateMin',
        'message_date_max' => 'MessageDateMax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_count' => 'setMaxCount',
        'read_only' => 'setReadOnly',
        'direction' => 'setDirection',
        'gf_sgate_number' => 'setGfSgateNumber',
        'unit_message_id_min' => 'setUnitMessageIdMin',
        'unit_message_id_max' => 'setUnitMessageIdMax',
        'message_type' => 'setMessageType',
        'message_status' => 'setMessageStatus',
        'message_date_min' => 'setMessageDateMin',
        'message_date_max' => 'setMessageDateMax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_count' => 'getMaxCount',
        'read_only' => 'getReadOnly',
        'direction' => 'getDirection',
        'gf_sgate_number' => 'getGfSgateNumber',
        'unit_message_id_min' => 'getUnitMessageIdMin',
        'unit_message_id_max' => 'getUnitMessageIdMax',
        'message_type' => 'getMessageType',
        'message_status' => 'getMessageStatus',
        'message_date_min' => 'getMessageDateMin',
        'message_date_max' => 'getMessageDateMax'
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

    const DIRECTION_0 = 0;
    const DIRECTION_1 = 1;
    const DIRECTION_2 = 2;
    const MESSAGE_TYPE_1 = 1;
    const MESSAGE_TYPE_3 = 3;
    const MESSAGE_TYPE_4 = 4;
    const MESSAGE_TYPE_5 = 5;
    const MESSAGE_TYPE_6 = 6;
    const MESSAGE_TYPE_7 = 7;
    const MESSAGE_TYPE_10 = 10;
    const MESSAGE_TYPE_13 = 13;
    const MESSAGE_TYPE_15 = 15;
    const MESSAGE_TYPE_22 = 22;
    const MESSAGE_TYPE_23 = 23;
    const MESSAGE_TYPE_24 = 24;
    const MESSAGE_TYPE_25 = 25;
    const MESSAGE_TYPE_26 = 26;
    const MESSAGE_TYPE_27 = 27;
    const MESSAGE_TYPE_28 = 28;
    const MESSAGE_TYPE_30 = 30;
    const MESSAGE_TYPE_31 = 31;
    const MESSAGE_STATUS_1 = 1;
    const MESSAGE_STATUS_2 = 2;
    const MESSAGE_STATUS_3 = 3;
    const MESSAGE_STATUS_4 = 4;
    const MESSAGE_STATUS_5 = 5;
    const MESSAGE_STATUS_6 = 6;
    const MESSAGE_STATUS_9 = 9;
    const MESSAGE_STATUS_10 = 10;
    const MESSAGE_STATUS_11 = 11;
    const MESSAGE_STATUS_12 = 12;
    const MESSAGE_STATUS_13 = 13;
    const MESSAGE_STATUS_14 = 14;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_0,
            self::DIRECTION_1,
            self::DIRECTION_2,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMessageTypeAllowableValues()
    {
        return [
            self::MESSAGE_TYPE_1,
            self::MESSAGE_TYPE_3,
            self::MESSAGE_TYPE_4,
            self::MESSAGE_TYPE_5,
            self::MESSAGE_TYPE_6,
            self::MESSAGE_TYPE_7,
            self::MESSAGE_TYPE_10,
            self::MESSAGE_TYPE_13,
            self::MESSAGE_TYPE_15,
            self::MESSAGE_TYPE_22,
            self::MESSAGE_TYPE_23,
            self::MESSAGE_TYPE_24,
            self::MESSAGE_TYPE_25,
            self::MESSAGE_TYPE_26,
            self::MESSAGE_TYPE_27,
            self::MESSAGE_TYPE_28,
            self::MESSAGE_TYPE_30,
            self::MESSAGE_TYPE_31,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMessageStatusAllowableValues()
    {
        return [
            self::MESSAGE_STATUS_1,
            self::MESSAGE_STATUS_2,
            self::MESSAGE_STATUS_3,
            self::MESSAGE_STATUS_4,
            self::MESSAGE_STATUS_5,
            self::MESSAGE_STATUS_6,
            self::MESSAGE_STATUS_9,
            self::MESSAGE_STATUS_10,
            self::MESSAGE_STATUS_11,
            self::MESSAGE_STATUS_12,
            self::MESSAGE_STATUS_13,
            self::MESSAGE_STATUS_14,
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
        $this->container['max_count'] = isset($data['max_count']) ? $data['max_count'] : null;
        $this->container['read_only'] = isset($data['read_only']) ? $data['read_only'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['gf_sgate_number'] = isset($data['gf_sgate_number']) ? $data['gf_sgate_number'] : null;
        $this->container['unit_message_id_min'] = isset($data['unit_message_id_min']) ? $data['unit_message_id_min'] : null;
        $this->container['unit_message_id_max'] = isset($data['unit_message_id_max']) ? $data['unit_message_id_max'] : null;
        $this->container['message_type'] = isset($data['message_type']) ? $data['message_type'] : null;
        $this->container['message_status'] = isset($data['message_status']) ? $data['message_status'] : null;
        $this->container['message_date_min'] = isset($data['message_date_min']) ? $data['message_date_min'] : null;
        $this->container['message_date_max'] = isset($data['message_date_max']) ? $data['message_date_max'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'direction', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMessageTypeAllowableValues();
        if (!is_null($this->container['message_type']) && !in_array($this->container['message_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'message_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMessageStatusAllowableValues();
        if (!is_null($this->container['message_status']) && !in_array($this->container['message_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'message_status', must be one of '%s'",
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
     * Gets max_count
     *
     * @return int
     */
    public function getMaxCount()
    {
        return $this->container['max_count'];
    }

    /**
     * Sets max_count
     *
     * @param int $max_count max_count
     *
     * @return $this
     */
    public function setMaxCount($max_count)
    {
        $this->container['max_count'] = $max_count;

        return $this;
    }

    /**
     * Gets read_only
     *
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->container['read_only'];
    }

    /**
     * Sets read_only
     *
     * @param bool $read_only read_only
     *
     * @return $this
     */
    public function setReadOnly($read_only)
    {
        $this->container['read_only'] = $read_only;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return int
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param int $direction direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($direction) && !in_array($direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'direction', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets gf_sgate_number
     *
     * @return int
     */
    public function getGfSgateNumber()
    {
        return $this->container['gf_sgate_number'];
    }

    /**
     * Sets gf_sgate_number
     *
     * @param int $gf_sgate_number gf_sgate_number
     *
     * @return $this
     */
    public function setGfSgateNumber($gf_sgate_number)
    {
        $this->container['gf_sgate_number'] = $gf_sgate_number;

        return $this;
    }

    /**
     * Gets unit_message_id_min
     *
     * @return int
     */
    public function getUnitMessageIdMin()
    {
        return $this->container['unit_message_id_min'];
    }

    /**
     * Sets unit_message_id_min
     *
     * @param int $unit_message_id_min unit_message_id_min
     *
     * @return $this
     */
    public function setUnitMessageIdMin($unit_message_id_min)
    {
        $this->container['unit_message_id_min'] = $unit_message_id_min;

        return $this;
    }

    /**
     * Gets unit_message_id_max
     *
     * @return int
     */
    public function getUnitMessageIdMax()
    {
        return $this->container['unit_message_id_max'];
    }

    /**
     * Sets unit_message_id_max
     *
     * @param int $unit_message_id_max unit_message_id_max
     *
     * @return $this
     */
    public function setUnitMessageIdMax($unit_message_id_max)
    {
        $this->container['unit_message_id_max'] = $unit_message_id_max;

        return $this;
    }

    /**
     * Gets message_type
     *
     * @return int
     */
    public function getMessageType()
    {
        return $this->container['message_type'];
    }

    /**
     * Sets message_type
     *
     * @param int $message_type message_type
     *
     * @return $this
     */
    public function setMessageType($message_type)
    {
        $allowedValues = $this->getMessageTypeAllowableValues();
        if (!is_null($message_type) && !in_array($message_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'message_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['message_type'] = $message_type;

        return $this;
    }

    /**
     * Gets message_status
     *
     * @return int
     */
    public function getMessageStatus()
    {
        return $this->container['message_status'];
    }

    /**
     * Sets message_status
     *
     * @param int $message_status message_status
     *
     * @return $this
     */
    public function setMessageStatus($message_status)
    {
        $allowedValues = $this->getMessageStatusAllowableValues();
        if (!is_null($message_status) && !in_array($message_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'message_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['message_status'] = $message_status;

        return $this;
    }

    /**
     * Gets message_date_min
     *
     * @return \DateTime
     */
    public function getMessageDateMin()
    {
        return $this->container['message_date_min'];
    }

    /**
     * Sets message_date_min
     *
     * @param \DateTime $message_date_min message_date_min
     *
     * @return $this
     */
    public function setMessageDateMin($message_date_min)
    {
        $this->container['message_date_min'] = $message_date_min;

        return $this;
    }

    /**
     * Gets message_date_max
     *
     * @return \DateTime
     */
    public function getMessageDateMax()
    {
        return $this->container['message_date_max'];
    }

    /**
     * Sets message_date_max
     *
     * @param \DateTime $message_date_max message_date_max
     *
     * @return $this
     */
    public function setMessageDateMax($message_date_max)
    {
        $this->container['message_date_max'] = $message_date_max;

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


