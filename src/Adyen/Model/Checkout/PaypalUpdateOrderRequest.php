<?php

/**
 * Adyen Checkout API
 *
 * The version of the OpenAPI document: 71
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Checkout;

use \ArrayAccess;
use Adyen\Model\Checkout\ObjectSerializer;

/**
 * PaypalUpdateOrderRequest Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaypalUpdateOrderRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaypalUpdateOrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => '\Adyen\Model\Checkout\Amount',
        'deliveryMethods' => '\Adyen\Model\Checkout\DeliveryMethod[]',
        'paymentData' => 'string',
        'pspReference' => 'string',
        'sessionId' => 'string',
        'taxTotal' => '\Adyen\Model\Checkout\TaxTotal'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'deliveryMethods' => null,
        'paymentData' => null,
        'pspReference' => null,
        'sessionId' => null,
        'taxTotal' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'amount' => false,
        'deliveryMethods' => false,
        'paymentData' => false,
        'pspReference' => false,
        'sessionId' => false,
        'taxTotal' => false
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
        'amount' => 'amount',
        'deliveryMethods' => 'deliveryMethods',
        'paymentData' => 'paymentData',
        'pspReference' => 'pspReference',
        'sessionId' => 'sessionId',
        'taxTotal' => 'taxTotal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'deliveryMethods' => 'setDeliveryMethods',
        'paymentData' => 'setPaymentData',
        'pspReference' => 'setPspReference',
        'sessionId' => 'setSessionId',
        'taxTotal' => 'setTaxTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'deliveryMethods' => 'getDeliveryMethods',
        'paymentData' => 'getPaymentData',
        'pspReference' => 'getPspReference',
        'sessionId' => 'getSessionId',
        'taxTotal' => 'getTaxTotal'
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('deliveryMethods', $data ?? [], null);
        $this->setIfExists('paymentData', $data ?? [], null);
        $this->setIfExists('pspReference', $data ?? [], null);
        $this->setIfExists('sessionId', $data ?? [], null);
        $this->setIfExists('taxTotal', $data ?? [], null);
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
     * Gets amount
     *
     * @return \Adyen\Model\Checkout\Amount|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Adyen\Model\Checkout\Amount|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets deliveryMethods
     *
     * @return \Adyen\Model\Checkout\DeliveryMethod[]|null
     */
    public function getDeliveryMethods()
    {
        return $this->container['deliveryMethods'];
    }

    /**
     * Sets deliveryMethods
     *
     * @param \Adyen\Model\Checkout\DeliveryMethod[]|null $deliveryMethods The list of new delivery methods and the cost of each.
     *
     * @return self
     */
    public function setDeliveryMethods($deliveryMethods)
    {
        if (is_null($deliveryMethods)) {
            throw new \InvalidArgumentException('non-nullable deliveryMethods cannot be null');
        }
        $this->container['deliveryMethods'] = $deliveryMethods;

        return $this;
    }

    /**
     * Gets paymentData
     *
     * @return string|null
     */
    public function getPaymentData()
    {
        return $this->container['paymentData'];
    }

    /**
     * Sets paymentData
     *
     * @param string|null $paymentData The `paymentData` from the client side. This value changes every time you make a `/paypal/updateOrder` request.
     *
     * @return self
     */
    public function setPaymentData($paymentData)
    {
        if (is_null($paymentData)) {
            throw new \InvalidArgumentException('non-nullable paymentData cannot be null');
        }
        $this->container['paymentData'] = $paymentData;

        return $this;
    }

    /**
     * Gets pspReference
     *
     * @return string|null
     */
    public function getPspReference()
    {
        return $this->container['pspReference'];
    }

    /**
     * Sets pspReference
     *
     * @param string|null $pspReference The original `pspReference` from the `/payments` response.
     *
     * @return self
     */
    public function setPspReference($pspReference)
    {
        if (is_null($pspReference)) {
            throw new \InvalidArgumentException('non-nullable pspReference cannot be null');
        }
        $this->container['pspReference'] = $pspReference;

        return $this;
    }

    /**
     * Gets sessionId
     *
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
     * Sets sessionId
     *
     * @param string|null $sessionId The original `sessionId` from the `/sessions` response.
     *
     * @return self
     */
    public function setSessionId($sessionId)
    {
        if (is_null($sessionId)) {
            throw new \InvalidArgumentException('non-nullable sessionId cannot be null');
        }
        $this->container['sessionId'] = $sessionId;

        return $this;
    }

    /**
     * Gets taxTotal
     *
     * @return \Adyen\Model\Checkout\TaxTotal|null
     */
    public function getTaxTotal()
    {
        return $this->container['taxTotal'];
    }

    /**
     * Sets taxTotal
     *
     * @param \Adyen\Model\Checkout\TaxTotal|null $taxTotal taxTotal
     *
     * @return self
     */
    public function setTaxTotal($taxTotal)
    {
        if (is_null($taxTotal)) {
            throw new \InvalidArgumentException('non-nullable taxTotal cannot be null');
        }
        $this->container['taxTotal'] = $taxTotal;

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
