<?php
/**
 * InvalidItemReason
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaOutboundV20200701;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * InvalidItemReason Class Doc Comment
 *
 * @category Class
 * @description The reason that the item is invalid for return.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InvalidItemReason extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvalidItemReason';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invalid_item_reason_code' => '\SellingPartnerApi\Model\FbaOutboundV20200701\InvalidItemReasonCode',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'invalid_item_reason_code' => null,
        'description' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'invalid_item_reason_code' => 'invalidItemReasonCode',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invalid_item_reason_code' => 'setInvalidItemReasonCode',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invalid_item_reason_code' => 'getInvalidItemReasonCode',
        'description' => 'getDescription'
    ];


    
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
        $this->container['invalid_item_reason_code'] = $data['invalid_item_reason_code'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['invalid_item_reason_code'] === null) {
            $invalidProperties[] = "'invalid_item_reason_code' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets invalid_item_reason_code
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\InvalidItemReasonCode
     */
    public function getInvalidItemReasonCode()
    {
        return $this->container['invalid_item_reason_code'];
    }

    /**
     * Sets invalid_item_reason_code
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\InvalidItemReasonCode $invalid_item_reason_code invalid_item_reason_code
     *
     * @return self
     */
    public function setInvalidItemReasonCode($invalid_item_reason_code)
    {
        $this->container['invalid_item_reason_code'] = $invalid_item_reason_code;

        return $this;
    }
    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description A human readable description of the invalid item reason code.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }
}

