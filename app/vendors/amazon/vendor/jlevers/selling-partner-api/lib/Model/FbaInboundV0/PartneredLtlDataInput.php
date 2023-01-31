<?php
/**
 * PartneredLtlDataInput
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaInboundV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * PartneredLtlDataInput Class Doc Comment
 *
 * @category Class
 * @description Information that is required by an Amazon-partnered carrier to ship a Less Than Truckload/Full Truckload (LTL/FTL) inbound shipment.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PartneredLtlDataInput extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PartneredLtlDataInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contact' => '\SellingPartnerApi\Model\FbaInboundV0\Contact',
        'box_count' => 'int',
        'seller_freight_class' => 'string',
        'freight_ready_date' => 'string',
        'pallet_list' => '\SellingPartnerApi\Model\FbaInboundV0\Pallet[]',
        'total_weight' => '\SellingPartnerApi\Model\FbaInboundV0\Weight',
        'seller_declared_value' => '\SellingPartnerApi\Model\FbaInboundV0\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contact' => null,
        'box_count' => 'int64',
        'seller_freight_class' => null,
        'freight_ready_date' => null,
        'pallet_list' => null,
        'total_weight' => null,
        'seller_declared_value' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'contact' => 'Contact',
        'box_count' => 'BoxCount',
        'seller_freight_class' => 'SellerFreightClass',
        'freight_ready_date' => 'FreightReadyDate',
        'pallet_list' => 'PalletList',
        'total_weight' => 'TotalWeight',
        'seller_declared_value' => 'SellerDeclaredValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact' => 'setContact',
        'box_count' => 'setBoxCount',
        'seller_freight_class' => 'setSellerFreightClass',
        'freight_ready_date' => 'setFreightReadyDate',
        'pallet_list' => 'setPalletList',
        'total_weight' => 'setTotalWeight',
        'seller_declared_value' => 'setSellerDeclaredValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact' => 'getContact',
        'box_count' => 'getBoxCount',
        'seller_freight_class' => 'getSellerFreightClass',
        'freight_ready_date' => 'getFreightReadyDate',
        'pallet_list' => 'getPalletList',
        'total_weight' => 'getTotalWeight',
        'seller_declared_value' => 'getSellerDeclaredValue'
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
        $this->container['contact'] = $data['contact'] ?? null;
        $this->container['box_count'] = $data['box_count'] ?? null;
        $this->container['seller_freight_class'] = $data['seller_freight_class'] ?? null;
        $this->container['freight_ready_date'] = $data['freight_ready_date'] ?? null;
        $this->container['pallet_list'] = $data['pallet_list'] ?? null;
        $this->container['total_weight'] = $data['total_weight'] ?? null;
        $this->container['seller_declared_value'] = $data['seller_declared_value'] ?? null;
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
     * Gets contact
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\Contact|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\Contact|null $contact contact
     *
     * @return self
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }
    /**
     * Gets box_count
     *
     * @return int|null
     */
    public function getBoxCount()
    {
        return $this->container['box_count'];
    }

    /**
     * Sets box_count
     *
     * @param int|null $box_count box_count
     *
     * @return self
     */
    public function setBoxCount($box_count)
    {
        $this->container['box_count'] = $box_count;

        return $this;
    }
    /**
     * Gets seller_freight_class
     *
     * @return string|null
     */
    public function getSellerFreightClass()
    {
        return $this->container['seller_freight_class'];
    }

    /**
     * Sets seller_freight_class
     *
     * @param string|null $seller_freight_class The freight class of the shipment. For information about determining the freight class, contact the carrier.
     *
     * @return self
     */
    public function setSellerFreightClass($seller_freight_class)
    {
        $this->container['seller_freight_class'] = $seller_freight_class;

        return $this;
    }
    /**
     * Gets freight_ready_date
     *
     * @return string|null
     */
    public function getFreightReadyDate()
    {
        return $this->container['freight_ready_date'];
    }

    /**
     * Sets freight_ready_date
     *
     * @param string|null $freight_ready_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setFreightReadyDate($freight_ready_date)
    {
        $this->container['freight_ready_date'] = $freight_ready_date;

        return $this;
    }
    /**
     * Gets pallet_list
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\Pallet[]|null
     */
    public function getPalletList()
    {
        return $this->container['pallet_list'];
    }

    /**
     * Sets pallet_list
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\Pallet[]|null $pallet_list A list of pallet information.
     *
     * @return self
     */
    public function setPalletList($pallet_list)
    {
        $this->container['pallet_list'] = $pallet_list;

        return $this;
    }
    /**
     * Gets total_weight
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\Weight|null
     */
    public function getTotalWeight()
    {
        return $this->container['total_weight'];
    }

    /**
     * Sets total_weight
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\Weight|null $total_weight total_weight
     *
     * @return self
     */
    public function setTotalWeight($total_weight)
    {
        $this->container['total_weight'] = $total_weight;

        return $this;
    }
    /**
     * Gets seller_declared_value
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\Amount|null
     */
    public function getSellerDeclaredValue()
    {
        return $this->container['seller_declared_value'];
    }

    /**
     * Sets seller_declared_value
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\Amount|null $seller_declared_value seller_declared_value
     *
     * @return self
     */
    public function setSellerDeclaredValue($seller_declared_value)
    {
        $this->container['seller_declared_value'] = $seller_declared_value;

        return $this;
    }
}

