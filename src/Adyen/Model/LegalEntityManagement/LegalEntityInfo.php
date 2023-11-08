<?php

/**
 * Legal Entity Management API
 *
 * The version of the OpenAPI document: 3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\LegalEntityManagement;

use \ArrayAccess;
use Adyen\Model\LegalEntityManagement\ObjectSerializer;

/**
 * LegalEntityInfo Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LegalEntityInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LegalEntityInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'capabilities' => 'array<string,\Adyen\Model\LegalEntityManagement\LegalEntityCapability>',
        'entityAssociations' => '\Adyen\Model\LegalEntityManagement\LegalEntityAssociation[]',
        'individual' => '\Adyen\Model\LegalEntityManagement\Individual',
        'organization' => '\Adyen\Model\LegalEntityManagement\Organization',
        'reference' => 'string',
        'soleProprietorship' => '\Adyen\Model\LegalEntityManagement\SoleProprietorship',
        'trust' => '\Adyen\Model\LegalEntityManagement\Trust',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'capabilities' => null,
        'entityAssociations' => null,
        'individual' => null,
        'organization' => null,
        'reference' => null,
        'soleProprietorship' => null,
        'trust' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'capabilities' => false,
        'entityAssociations' => false,
        'individual' => false,
        'organization' => false,
        'reference' => false,
        'soleProprietorship' => false,
        'trust' => false,
        'type' => false
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
        'capabilities' => 'capabilities',
        'entityAssociations' => 'entityAssociations',
        'individual' => 'individual',
        'organization' => 'organization',
        'reference' => 'reference',
        'soleProprietorship' => 'soleProprietorship',
        'trust' => 'trust',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'capabilities' => 'setCapabilities',
        'entityAssociations' => 'setEntityAssociations',
        'individual' => 'setIndividual',
        'organization' => 'setOrganization',
        'reference' => 'setReference',
        'soleProprietorship' => 'setSoleProprietorship',
        'trust' => 'setTrust',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'capabilities' => 'getCapabilities',
        'entityAssociations' => 'getEntityAssociations',
        'individual' => 'getIndividual',
        'organization' => 'getOrganization',
        'reference' => 'getReference',
        'soleProprietorship' => 'getSoleProprietorship',
        'trust' => 'getTrust',
        'type' => 'getType'
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

    public const TYPE_INDIVIDUAL = 'individual';
    public const TYPE_ORGANIZATION = 'organization';
    public const TYPE_SOLE_PROPRIETORSHIP = 'soleProprietorship';
    public const TYPE_TRUST = 'trust';
    public const TYPE_UNINCORPORATED_PARTNERSHIP = 'unincorporatedPartnership';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INDIVIDUAL,
            self::TYPE_ORGANIZATION,
            self::TYPE_SOLE_PROPRIETORSHIP,
            self::TYPE_TRUST,
            self::TYPE_UNINCORPORATED_PARTNERSHIP,
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
        $this->setIfExists('capabilities', $data ?? [], null);
        $this->setIfExists('entityAssociations', $data ?? [], null);
        $this->setIfExists('individual', $data ?? [], null);
        $this->setIfExists('organization', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('soleProprietorship', $data ?? [], null);
        $this->setIfExists('trust', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets capabilities
     *
     * @return array<string,\Adyen\Model\LegalEntityManagement\LegalEntityCapability>|null
     */
    public function getCapabilities()
    {
        return $this->container['capabilities'];
    }

    /**
     * Sets capabilities
     *
     * @param array<string,\Adyen\Model\LegalEntityManagement\LegalEntityCapability>|null $capabilities Contains key-value pairs that specify the actions that the legal entity can do in your platform.The key is a capability required for your integration. For example, **issueCard** for Issuing.The value is an object containing the settings for the capability.
     *
     * @return self
     */
    public function setCapabilities($capabilities)
    {
        if (is_null($capabilities)) {
            throw new \InvalidArgumentException('non-nullable capabilities cannot be null');
        }
        $this->container['capabilities'] = $capabilities;

        return $this;
    }

    /**
     * Gets entityAssociations
     *
     * @return \Adyen\Model\LegalEntityManagement\LegalEntityAssociation[]|null
     */
    public function getEntityAssociations()
    {
        return $this->container['entityAssociations'];
    }

    /**
     * Sets entityAssociations
     *
     * @param \Adyen\Model\LegalEntityManagement\LegalEntityAssociation[]|null $entityAssociations List of legal entities associated with the current legal entity. For example, ultimate beneficial owners associated with an organization through ownership or control, or as signatories.
     *
     * @return self
     */
    public function setEntityAssociations($entityAssociations)
    {
        if (is_null($entityAssociations)) {
            throw new \InvalidArgumentException('non-nullable entityAssociations cannot be null');
        }
        $this->container['entityAssociations'] = $entityAssociations;

        return $this;
    }

    /**
     * Gets individual
     *
     * @return \Adyen\Model\LegalEntityManagement\Individual|null
     */
    public function getIndividual()
    {
        return $this->container['individual'];
    }

    /**
     * Sets individual
     *
     * @param \Adyen\Model\LegalEntityManagement\Individual|null $individual individual
     *
     * @return self
     */
    public function setIndividual($individual)
    {
        if (is_null($individual)) {
            throw new \InvalidArgumentException('non-nullable individual cannot be null');
        }
        $this->container['individual'] = $individual;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return \Adyen\Model\LegalEntityManagement\Organization|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param \Adyen\Model\LegalEntityManagement\Organization|null $organization organization
     *
     * @return self
     */
    public function setOrganization($organization)
    {
        if (is_null($organization)) {
            throw new \InvalidArgumentException('non-nullable organization cannot be null');
        }
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference Your reference for the legal entity, maximum 150 characters.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets soleProprietorship
     *
     * @return \Adyen\Model\LegalEntityManagement\SoleProprietorship|null
     */
    public function getSoleProprietorship()
    {
        return $this->container['soleProprietorship'];
    }

    /**
     * Sets soleProprietorship
     *
     * @param \Adyen\Model\LegalEntityManagement\SoleProprietorship|null $soleProprietorship soleProprietorship
     *
     * @return self
     */
    public function setSoleProprietorship($soleProprietorship)
    {
        if (is_null($soleProprietorship)) {
            throw new \InvalidArgumentException('non-nullable soleProprietorship cannot be null');
        }
        $this->container['soleProprietorship'] = $soleProprietorship;

        return $this;
    }

    /**
     * Gets trust
     *
     * @return \Adyen\Model\LegalEntityManagement\Trust|null
     */
    public function getTrust()
    {
        return $this->container['trust'];
    }

    /**
     * Sets trust
     *
     * @param \Adyen\Model\LegalEntityManagement\Trust|null $trust trust
     *
     * @return self
     */
    public function setTrust($trust)
    {
        if (is_null($trust)) {
            throw new \InvalidArgumentException('non-nullable trust cannot be null');
        }
        $this->container['trust'] = $trust;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of legal entity.  Possible values: **individual**, **organization**, **soleProprietorship**, or **trust**.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
}
