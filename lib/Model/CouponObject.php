<?php
/**
 * CouponObject
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lago API documentation
 *
 * Lago API allows your application to push customer information and metrics (events) from your application to the billing application.
 *
 * The version of the OpenAPI document: 0.32.0-beta
 * Contact: tech@getlago.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CouponObject Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CouponObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CouponObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lago_id' => 'string',
        'name' => 'string',
        'code' => 'string',
        'coupon_type' => 'string',
        'amount_cents' => 'int',
        'amount_currency' => 'string',
        'reusable' => 'bool',
        'limited_plans' => 'bool',
        'plan_codes' => 'string[]',
        'limited_billable_metrics' => 'bool',
        'billable_metric_codes' => 'string[]',
        'created_at' => '\DateTime',
        'percentage_rate' => 'float',
        'frequency' => 'string',
        'frequency_duration' => 'int',
        'expiration_at' => '\DateTime',
        'expiration' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'lago_id' => 'uuid',
        'name' => null,
        'code' => null,
        'coupon_type' => null,
        'amount_cents' => null,
        'amount_currency' => null,
        'reusable' => null,
        'limited_plans' => null,
        'plan_codes' => null,
        'limited_billable_metrics' => null,
        'billable_metric_codes' => null,
        'created_at' => 'date-time',
        'percentage_rate' => null,
        'frequency' => null,
        'frequency_duration' => null,
        'expiration_at' => 'date-time',
        'expiration' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lago_id' => false,
		'name' => false,
		'code' => false,
		'coupon_type' => false,
		'amount_cents' => false,
		'amount_currency' => false,
		'reusable' => false,
		'limited_plans' => false,
		'plan_codes' => false,
		'limited_billable_metrics' => false,
		'billable_metric_codes' => false,
		'created_at' => false,
		'percentage_rate' => false,
		'frequency' => false,
		'frequency_duration' => false,
		'expiration_at' => false,
		'expiration' => false
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
        'lago_id' => 'lago_id',
        'name' => 'name',
        'code' => 'code',
        'coupon_type' => 'coupon_type',
        'amount_cents' => 'amount_cents',
        'amount_currency' => 'amount_currency',
        'reusable' => 'reusable',
        'limited_plans' => 'limited_plans',
        'plan_codes' => 'plan_codes',
        'limited_billable_metrics' => 'limited_billable_metrics',
        'billable_metric_codes' => 'billable_metric_codes',
        'created_at' => 'created_at',
        'percentage_rate' => 'percentage_rate',
        'frequency' => 'frequency',
        'frequency_duration' => 'frequency_duration',
        'expiration_at' => 'expiration_at',
        'expiration' => 'expiration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lago_id' => 'setLagoId',
        'name' => 'setName',
        'code' => 'setCode',
        'coupon_type' => 'setCouponType',
        'amount_cents' => 'setAmountCents',
        'amount_currency' => 'setAmountCurrency',
        'reusable' => 'setReusable',
        'limited_plans' => 'setLimitedPlans',
        'plan_codes' => 'setPlanCodes',
        'limited_billable_metrics' => 'setLimitedBillableMetrics',
        'billable_metric_codes' => 'setBillableMetricCodes',
        'created_at' => 'setCreatedAt',
        'percentage_rate' => 'setPercentageRate',
        'frequency' => 'setFrequency',
        'frequency_duration' => 'setFrequencyDuration',
        'expiration_at' => 'setExpirationAt',
        'expiration' => 'setExpiration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lago_id' => 'getLagoId',
        'name' => 'getName',
        'code' => 'getCode',
        'coupon_type' => 'getCouponType',
        'amount_cents' => 'getAmountCents',
        'amount_currency' => 'getAmountCurrency',
        'reusable' => 'getReusable',
        'limited_plans' => 'getLimitedPlans',
        'plan_codes' => 'getPlanCodes',
        'limited_billable_metrics' => 'getLimitedBillableMetrics',
        'billable_metric_codes' => 'getBillableMetricCodes',
        'created_at' => 'getCreatedAt',
        'percentage_rate' => 'getPercentageRate',
        'frequency' => 'getFrequency',
        'frequency_duration' => 'getFrequencyDuration',
        'expiration_at' => 'getExpirationAt',
        'expiration' => 'getExpiration'
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

    public const COUPON_TYPE_FIXED_AMOUNT = 'fixed_amount';
    public const COUPON_TYPE_PERCENTAGE = 'percentage';
    public const FREQUENCY_ONCE = 'once';
    public const FREQUENCY_RECURRING = 'recurring';
    public const EXPIRATION_NO_EXPIRATION = 'no_expiration';
    public const EXPIRATION_TIME_LIMIT = 'time_limit';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCouponTypeAllowableValues()
    {
        return [
            self::COUPON_TYPE_FIXED_AMOUNT,
            self::COUPON_TYPE_PERCENTAGE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrequencyAllowableValues()
    {
        return [
            self::FREQUENCY_ONCE,
            self::FREQUENCY_RECURRING,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExpirationAllowableValues()
    {
        return [
            self::EXPIRATION_NO_EXPIRATION,
            self::EXPIRATION_TIME_LIMIT,
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
        $this->setIfExists('lago_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('coupon_type', $data ?? [], null);
        $this->setIfExists('amount_cents', $data ?? [], null);
        $this->setIfExists('amount_currency', $data ?? [], null);
        $this->setIfExists('reusable', $data ?? [], null);
        $this->setIfExists('limited_plans', $data ?? [], null);
        $this->setIfExists('plan_codes', $data ?? [], null);
        $this->setIfExists('limited_billable_metrics', $data ?? [], null);
        $this->setIfExists('billable_metric_codes', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('percentage_rate', $data ?? [], null);
        $this->setIfExists('frequency', $data ?? [], null);
        $this->setIfExists('frequency_duration', $data ?? [], null);
        $this->setIfExists('expiration_at', $data ?? [], null);
        $this->setIfExists('expiration', $data ?? [], null);
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

        if ($this->container['lago_id'] === null) {
            $invalidProperties[] = "'lago_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['coupon_type'] === null) {
            $invalidProperties[] = "'coupon_type' can't be null";
        }
        $allowedValues = $this->getCouponTypeAllowableValues();
        if (!is_null($this->container['coupon_type']) && !in_array($this->container['coupon_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'coupon_type', must be one of '%s'",
                $this->container['coupon_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($this->container['frequency']) && !in_array($this->container['frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'frequency', must be one of '%s'",
                $this->container['frequency'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['expiration'] === null) {
            $invalidProperties[] = "'expiration' can't be null";
        }
        $allowedValues = $this->getExpirationAllowableValues();
        if (!is_null($this->container['expiration']) && !in_array($this->container['expiration'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'expiration', must be one of '%s'",
                $this->container['expiration'],
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
     * Gets lago_id
     *
     * @return string
     */
    public function getLagoId()
    {
        return $this->container['lago_id'];
    }

    /**
     * Sets lago_id
     *
     * @param string $lago_id lago_id
     *
     * @return self
     */
    public function setLagoId($lago_id)
    {
        if (is_null($lago_id)) {
            throw new \InvalidArgumentException('non-nullable lago_id cannot be null');
        }
        $this->container['lago_id'] = $lago_id;

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
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets coupon_type
     *
     * @return string
     */
    public function getCouponType()
    {
        return $this->container['coupon_type'];
    }

    /**
     * Sets coupon_type
     *
     * @param string $coupon_type Coupon type
     *
     * @return self
     */
    public function setCouponType($coupon_type)
    {
        if (is_null($coupon_type)) {
            throw new \InvalidArgumentException('non-nullable coupon_type cannot be null');
        }
        $allowedValues = $this->getCouponTypeAllowableValues();
        if (!in_array($coupon_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'coupon_type', must be one of '%s'",
                    $coupon_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['coupon_type'] = $coupon_type;

        return $this;
    }

    /**
     * Gets amount_cents
     *
     * @return int|null
     */
    public function getAmountCents()
    {
        return $this->container['amount_cents'];
    }

    /**
     * Sets amount_cents
     *
     * @param int|null $amount_cents amount_cents
     *
     * @return self
     */
    public function setAmountCents($amount_cents)
    {
        if (is_null($amount_cents)) {
            throw new \InvalidArgumentException('non-nullable amount_cents cannot be null');
        }
        $this->container['amount_cents'] = $amount_cents;

        return $this;
    }

    /**
     * Gets amount_currency
     *
     * @return string|null
     */
    public function getAmountCurrency()
    {
        return $this->container['amount_currency'];
    }

    /**
     * Sets amount_currency
     *
     * @param string|null $amount_currency amount_currency
     *
     * @return self
     */
    public function setAmountCurrency($amount_currency)
    {
        if (is_null($amount_currency)) {
            throw new \InvalidArgumentException('non-nullable amount_currency cannot be null');
        }
        $this->container['amount_currency'] = $amount_currency;

        return $this;
    }

    /**
     * Gets reusable
     *
     * @return bool|null
     */
    public function getReusable()
    {
        return $this->container['reusable'];
    }

    /**
     * Sets reusable
     *
     * @param bool|null $reusable reusable
     *
     * @return self
     */
    public function setReusable($reusable)
    {
        if (is_null($reusable)) {
            throw new \InvalidArgumentException('non-nullable reusable cannot be null');
        }
        $this->container['reusable'] = $reusable;

        return $this;
    }

    /**
     * Gets limited_plans
     *
     * @return bool|null
     */
    public function getLimitedPlans()
    {
        return $this->container['limited_plans'];
    }

    /**
     * Sets limited_plans
     *
     * @param bool|null $limited_plans limited_plans
     *
     * @return self
     */
    public function setLimitedPlans($limited_plans)
    {
        if (is_null($limited_plans)) {
            throw new \InvalidArgumentException('non-nullable limited_plans cannot be null');
        }
        $this->container['limited_plans'] = $limited_plans;

        return $this;
    }

    /**
     * Gets plan_codes
     *
     * @return string[]|null
     */
    public function getPlanCodes()
    {
        return $this->container['plan_codes'];
    }

    /**
     * Sets plan_codes
     *
     * @param string[]|null $plan_codes plan_codes
     *
     * @return self
     */
    public function setPlanCodes($plan_codes)
    {
        if (is_null($plan_codes)) {
            throw new \InvalidArgumentException('non-nullable plan_codes cannot be null');
        }
        $this->container['plan_codes'] = $plan_codes;

        return $this;
    }

    /**
     * Gets limited_billable_metrics
     *
     * @return bool|null
     */
    public function getLimitedBillableMetrics()
    {
        return $this->container['limited_billable_metrics'];
    }

    /**
     * Sets limited_billable_metrics
     *
     * @param bool|null $limited_billable_metrics limited_billable_metrics
     *
     * @return self
     */
    public function setLimitedBillableMetrics($limited_billable_metrics)
    {
        if (is_null($limited_billable_metrics)) {
            throw new \InvalidArgumentException('non-nullable limited_billable_metrics cannot be null');
        }
        $this->container['limited_billable_metrics'] = $limited_billable_metrics;

        return $this;
    }

    /**
     * Gets billable_metric_codes
     *
     * @return string[]|null
     */
    public function getBillableMetricCodes()
    {
        return $this->container['billable_metric_codes'];
    }

    /**
     * Sets billable_metric_codes
     *
     * @param string[]|null $billable_metric_codes billable_metric_codes
     *
     * @return self
     */
    public function setBillableMetricCodes($billable_metric_codes)
    {
        if (is_null($billable_metric_codes)) {
            throw new \InvalidArgumentException('non-nullable billable_metric_codes cannot be null');
        }
        $this->container['billable_metric_codes'] = $billable_metric_codes;

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
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets percentage_rate
     *
     * @return float|null
     */
    public function getPercentageRate()
    {
        return $this->container['percentage_rate'];
    }

    /**
     * Sets percentage_rate
     *
     * @param float|null $percentage_rate percentage_rate
     *
     * @return self
     */
    public function setPercentageRate($percentage_rate)
    {
        if (is_null($percentage_rate)) {
            throw new \InvalidArgumentException('non-nullable percentage_rate cannot be null');
        }
        $this->container['percentage_rate'] = $percentage_rate;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string $frequency Frequency type
     *
     * @return self
     */
    public function setFrequency($frequency)
    {
        if (is_null($frequency)) {
            throw new \InvalidArgumentException('non-nullable frequency cannot be null');
        }
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!in_array($frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'frequency', must be one of '%s'",
                    $frequency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets frequency_duration
     *
     * @return int|null
     */
    public function getFrequencyDuration()
    {
        return $this->container['frequency_duration'];
    }

    /**
     * Sets frequency_duration
     *
     * @param int|null $frequency_duration frequency_duration
     *
     * @return self
     */
    public function setFrequencyDuration($frequency_duration)
    {
        if (is_null($frequency_duration)) {
            throw new \InvalidArgumentException('non-nullable frequency_duration cannot be null');
        }
        $this->container['frequency_duration'] = $frequency_duration;

        return $this;
    }

    /**
     * Gets expiration_at
     *
     * @return \DateTime|null
     */
    public function getExpirationAt()
    {
        return $this->container['expiration_at'];
    }

    /**
     * Sets expiration_at
     *
     * @param \DateTime|null $expiration_at expiration_at
     *
     * @return self
     */
    public function setExpirationAt($expiration_at)
    {
        if (is_null($expiration_at)) {
            throw new \InvalidArgumentException('non-nullable expiration_at cannot be null');
        }
        $this->container['expiration_at'] = $expiration_at;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return string
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param string $expiration Expiration type
     *
     * @return self
     */
    public function setExpiration($expiration)
    {
        if (is_null($expiration)) {
            throw new \InvalidArgumentException('non-nullable expiration cannot be null');
        }
        $allowedValues = $this->getExpirationAllowableValues();
        if (!in_array($expiration, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'expiration', must be one of '%s'",
                    $expiration,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['expiration'] = $expiration;

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


