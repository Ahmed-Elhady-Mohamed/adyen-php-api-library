<?php

/**
 * Adyen BinLookup API
 *
 * The version of the OpenAPI document: 54
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\BinLookup;

use \ArrayAccess;
use Adyen\Model\BinLookup\ObjectSerializer;

/**
 * ThreeDS2CardRangeDetail Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ThreeDS2CardRangeDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ThreeDS2CardRangeDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acsInfoInd' => 'string[]',
        'brandCode' => 'string',
        'endRange' => 'string',
        'startRange' => 'string',
        'threeDS2Versions' => 'string[]',
        'threeDSMethodURL' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'acsInfoInd' => null,
        'brandCode' => null,
        'endRange' => null,
        'startRange' => null,
        'threeDS2Versions' => null,
        'threeDSMethodURL' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'acsInfoInd' => false,
        'brandCode' => false,
        'endRange' => false,
        'startRange' => false,
        'threeDS2Versions' => false,
        'threeDSMethodURL' => false
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
        'acsInfoInd' => 'acsInfoInd',
        'brandCode' => 'brandCode',
        'endRange' => 'endRange',
        'startRange' => 'startRange',
        'threeDS2Versions' => 'threeDS2Versions',
        'threeDSMethodURL' => 'threeDSMethodURL'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acsInfoInd' => 'setAcsInfoInd',
        'brandCode' => 'setBrandCode',
        'endRange' => 'setEndRange',
        'startRange' => 'setStartRange',
        'threeDS2Versions' => 'setThreeDS2Versions',
        'threeDSMethodURL' => 'setThreeDSMethodURL'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acsInfoInd' => 'getAcsInfoInd',
        'brandCode' => 'getBrandCode',
        'endRange' => 'getEndRange',
        'startRange' => 'getStartRange',
        'threeDS2Versions' => 'getThreeDS2Versions',
        'threeDSMethodURL' => 'getThreeDSMethodURL'
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
        $this->setIfExists('acsInfoInd', $data ?? [], null);
        $this->setIfExists('brandCode', $data ?? [], null);
        $this->setIfExists('endRange', $data ?? [], null);
        $this->setIfExists('startRange', $data ?? [], null);
        $this->setIfExists('threeDS2Versions', $data ?? [], null);
        $this->setIfExists('threeDSMethodURL', $data ?? [], null);
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
     * Gets acsInfoInd
     *
     * @return string[]|null
     */
    public function getAcsInfoInd()
    {
        return $this->container['acsInfoInd'];
    }

    /**
     * Sets acsInfoInd
     *
     * @param string[]|null $acsInfoInd Provides additional information to the 3DS Server. Possible values: - 01 (Authentication is available at ACS) - 02 (Attempts supported by ACS or DS) - 03 (Decoupled authentication supported) - 04 (Whitelisting supported)
     *
     * @return self
     */
    public function setAcsInfoInd($acsInfoInd)
    {
        if (is_null($acsInfoInd)) {
            throw new \InvalidArgumentException('non-nullable acsInfoInd cannot be null');
        }
        $this->container['acsInfoInd'] = $acsInfoInd;

        return $this;
    }

    /**
     * Gets brandCode
     *
     * @return string|null
     */
    public function getBrandCode()
    {
        return $this->container['brandCode'];
    }

    /**
     * Sets brandCode
     *
     * @param string|null $brandCode Card brand.
     *
     * @return self
     */
    public function setBrandCode($brandCode)
    {
        if (is_null($brandCode)) {
            throw new \InvalidArgumentException('non-nullable brandCode cannot be null');
        }
        $this->container['brandCode'] = $brandCode;

        return $this;
    }

    /**
     * Gets endRange
     *
     * @return string|null
     */
    public function getEndRange()
    {
        return $this->container['endRange'];
    }

    /**
     * Sets endRange
     *
     * @param string|null $endRange BIN end range.
     *
     * @return self
     */
    public function setEndRange($endRange)
    {
        if (is_null($endRange)) {
            throw new \InvalidArgumentException('non-nullable endRange cannot be null');
        }
        $this->container['endRange'] = $endRange;

        return $this;
    }

    /**
     * Gets startRange
     *
     * @return string|null
     */
    public function getStartRange()
    {
        return $this->container['startRange'];
    }

    /**
     * Sets startRange
     *
     * @param string|null $startRange BIN start range.
     *
     * @return self
     */
    public function setStartRange($startRange)
    {
        if (is_null($startRange)) {
            throw new \InvalidArgumentException('non-nullable startRange cannot be null');
        }
        $this->container['startRange'] = $startRange;

        return $this;
    }

    /**
     * Gets threeDS2Versions
     *
     * @return string[]|null
     */
    public function getThreeDS2Versions()
    {
        return $this->container['threeDS2Versions'];
    }

    /**
     * Sets threeDS2Versions
     *
     * @param string[]|null $threeDS2Versions Supported 3D Secure protocol versions
     *
     * @return self
     */
    public function setThreeDS2Versions($threeDS2Versions)
    {
        if (is_null($threeDS2Versions)) {
            throw new \InvalidArgumentException('non-nullable threeDS2Versions cannot be null');
        }
        $this->container['threeDS2Versions'] = $threeDS2Versions;

        return $this;
    }

    /**
     * Gets threeDSMethodURL
     *
     * @return string|null
     */
    public function getThreeDSMethodURL()
    {
        return $this->container['threeDSMethodURL'];
    }

    /**
     * Sets threeDSMethodURL
     *
     * @param string|null $threeDSMethodURL In a 3D Secure 2 browser-based flow, this is the URL where you should send the device fingerprint to.
     *
     * @return self
     */
    public function setThreeDSMethodURL($threeDSMethodURL)
    {
        if (is_null($threeDSMethodURL)) {
            throw new \InvalidArgumentException('non-nullable threeDSMethodURL cannot be null');
        }
        $this->container['threeDSMethodURL'] = $threeDSMethodURL;

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
