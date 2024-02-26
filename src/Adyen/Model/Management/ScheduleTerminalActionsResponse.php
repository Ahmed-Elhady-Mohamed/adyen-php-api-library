<?php

/**
 * Management API
 *
 * The version of the OpenAPI document: 3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Management;

use \ArrayAccess;
use Adyen\Model\Management\ObjectSerializer;

/**
 * ScheduleTerminalActionsResponse Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ScheduleTerminalActionsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScheduleTerminalActionsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actionDetails' => '\Adyen\Model\Management\ScheduleTerminalActionsRequestActionDetails',
        'items' => '\Adyen\Model\Management\TerminalActionScheduleDetail[]',
        'scheduledAt' => 'string',
        'storeId' => 'string',
        'terminalsWithErrors' => 'array<string,string[]>',
        'totalErrors' => 'int',
        'totalScheduled' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'actionDetails' => null,
        'items' => null,
        'scheduledAt' => null,
        'storeId' => null,
        'terminalsWithErrors' => null,
        'totalErrors' => 'int32',
        'totalScheduled' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'actionDetails' => false,
        'items' => false,
        'scheduledAt' => false,
        'storeId' => false,
        'terminalsWithErrors' => false,
        'totalErrors' => true,
        'totalScheduled' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
        'actionDetails' => 'actionDetails',
        'items' => 'items',
        'scheduledAt' => 'scheduledAt',
        'storeId' => 'storeId',
        'terminalsWithErrors' => 'terminalsWithErrors',
        'totalErrors' => 'totalErrors',
        'totalScheduled' => 'totalScheduled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actionDetails' => 'setActionDetails',
        'items' => 'setItems',
        'scheduledAt' => 'setScheduledAt',
        'storeId' => 'setStoreId',
        'terminalsWithErrors' => 'setTerminalsWithErrors',
        'totalErrors' => 'setTotalErrors',
        'totalScheduled' => 'setTotalScheduled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actionDetails' => 'getActionDetails',
        'items' => 'getItems',
        'scheduledAt' => 'getScheduledAt',
        'storeId' => 'getStoreId',
        'terminalsWithErrors' => 'getTerminalsWithErrors',
        'totalErrors' => 'getTotalErrors',
        'totalScheduled' => 'getTotalScheduled'
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
        $this->setIfExists('actionDetails', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('scheduledAt', $data ?? [], null);
        $this->setIfExists('storeId', $data ?? [], null);
        $this->setIfExists('terminalsWithErrors', $data ?? [], null);
        $this->setIfExists('totalErrors', $data ?? [], null);
        $this->setIfExists('totalScheduled', $data ?? [], null);
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
     * Gets actionDetails
     *
     * @return \Adyen\Model\Management\ScheduleTerminalActionsRequestActionDetails|null
     */
    public function getActionDetails()
    {
        return $this->container['actionDetails'];
    }

    /**
     * Sets actionDetails
     *
     * @param \Adyen\Model\Management\ScheduleTerminalActionsRequestActionDetails|null $actionDetails actionDetails
     *
     * @return self
     */
    public function setActionDetails($actionDetails)
    {
        if (is_null($actionDetails)) {
            throw new \InvalidArgumentException('non-nullable actionDetails cannot be null');
        }
        $this->container['actionDetails'] = $actionDetails;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Adyen\Model\Management\TerminalActionScheduleDetail[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Adyen\Model\Management\TerminalActionScheduleDetail[]|null $items A list containing a terminal ID and an action ID for each terminal that the action was scheduled for.
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets scheduledAt
     *
     * @return string|null
     */
    public function getScheduledAt()
    {
        return $this->container['scheduledAt'];
    }

    /**
     * Sets scheduledAt
     *
     * @param string|null $scheduledAt The date and time when the action should happen.  Format: [RFC 3339](https://www.rfc-editor.org/rfc/rfc3339), but without the **Z** before the time offset. For example, **2021-11-15T12:16:21+01:00**  The action is sent with the first [maintenance call](https://docs.adyen.com/point-of-sale/automating-terminal-management/terminal-actions-api#when-actions-take-effect) after the specified date and time in the time zone of the terminal.  An empty value causes the action to be sent as soon as possible: at the next maintenance call.
     *
     * @return self
     */
    public function setScheduledAt($scheduledAt)
    {
        if (is_null($scheduledAt)) {
            throw new \InvalidArgumentException('non-nullable scheduledAt cannot be null');
        }
        $this->container['scheduledAt'] = $scheduledAt;

        return $this;
    }

    /**
     * Gets storeId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param string|null $storeId The unique ID of the [store](https://docs.adyen.com/api-explorer/#/ManagementService/latest/get/stores). If present, all terminals in the `terminalIds` list must be assigned to this store.
     *
     * @return self
     */
    public function setStoreId($storeId)
    {
        if (is_null($storeId)) {
            throw new \InvalidArgumentException('non-nullable storeId cannot be null');
        }
        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets terminalsWithErrors
     *
     * @return array<string,string[]>|null
     */
    public function getTerminalsWithErrors()
    {
        return $this->container['terminalsWithErrors'];
    }

    /**
     * Sets terminalsWithErrors
     *
     * @param array<string,string[]>|null $terminalsWithErrors The validation errors that occurred in the list of terminals, and for each error the IDs of the terminals that the error applies to.
     *
     * @return self
     */
    public function setTerminalsWithErrors($terminalsWithErrors)
    {
        if (is_null($terminalsWithErrors)) {
            throw new \InvalidArgumentException('non-nullable terminalsWithErrors cannot be null');
        }
        $this->container['terminalsWithErrors'] = $terminalsWithErrors;

        return $this;
    }

    /**
     * Gets totalErrors
     *
     * @return int|null
     */
    public function getTotalErrors()
    {
        return $this->container['totalErrors'];
    }

    /**
     * Sets totalErrors
     *
     * @param int|null $totalErrors The number of terminals for which scheduling the action failed.
     *
     * @return self
     */
    public function setTotalErrors($totalErrors)
    {
        // Do nothing for nullable integers
        $this->container['totalErrors'] = $totalErrors;

        return $this;
    }

    /**
     * Gets totalScheduled
     *
     * @return int|null
     */
    public function getTotalScheduled()
    {
        return $this->container['totalScheduled'];
    }

    /**
     * Sets totalScheduled
     *
     * @param int|null $totalScheduled The number of terminals for which the action was successfully scheduled. This doesn't mean the action has happened yet.
     *
     * @return self
     */
    public function setTotalScheduled($totalScheduled)
    {
        // Do nothing for nullable integers
        $this->container['totalScheduled'] = $totalScheduled;

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

    public function toArray(): array
    {
        $array = [];
        foreach (self::$openAPITypes as $propertyName => $propertyType) {
            $propertyValue = $this[$propertyName];
            if ($propertyValue !== null) {
                // Check if the property value is an object and has a toArray() method
                if (is_object($propertyValue) && method_exists($propertyValue, 'toArray')) {
                    $array[$propertyName] = $propertyValue->toArray();
                // Check if it's type datetime
                } elseif ($propertyValue instanceof \DateTime) {
                    $array[$propertyName] = $propertyValue->format(DATE_ATOM);
                // If it's an array type we should check whether it contains objects and if so call toArray method
                } elseif (is_array($propertyValue)) {
                    $array[$propertyName] = array_map(function ($item) {
                        return $item instanceof ModelInterface ? $item->toArray() : $item;
                    }, $propertyValue);
                } else {
                    // Otherwise, directly assign the property value to the array
                    $array[$propertyName] = $propertyValue;
                }
            }
        }
        return $array;
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
}
