<?php
/**
 * TDSReimbursementEvent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace SellingPartnerApi\Model\FinancesV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * TDSReimbursementEvent Class Doc Comment
 *
 * @category Class
 * @description An event related to a Tax-Deducted-at-Source (TDS) reimbursement.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TDSReimbursementEvent extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TDSReimbursementEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'posted_date' => 'string',
        'tds_order_id' => 'string',
        'reimbursed_amount' => '\SellingPartnerApi\Model\FinancesV0\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'posted_date' => null,
        'tds_order_id' => null,
        'reimbursed_amount' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'posted_date' => 'PostedDate',
        'tds_order_id' => 'TDSOrderId',
        'reimbursed_amount' => 'ReimbursedAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'posted_date' => 'setPostedDate',
        'tds_order_id' => 'setTdsOrderId',
        'reimbursed_amount' => 'setReimbursedAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'posted_date' => 'getPostedDate',
        'tds_order_id' => 'getTdsOrderId',
        'reimbursed_amount' => 'getReimbursedAmount'
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
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['tds_order_id'] = $data['tds_order_id'] ?? null;
        $this->container['reimbursed_amount'] = $data['reimbursed_amount'] ?? null;
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
     * Gets posted_date
     *
     * @return string|null
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param string|null $posted_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setPostedDate($posted_date)
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }
    /**
     * Gets tds_order_id
     *
     * @return string|null
     */
    public function getTdsOrderId()
    {
        return $this->container['tds_order_id'];
    }

    /**
     * Sets tds_order_id
     *
     * @param string|null $tds_order_id The Tax-Deducted-at-Source (TDS) identifier.
     *
     * @return self
     */
    public function setTdsOrderId($tds_order_id)
    {
        $this->container['tds_order_id'] = $tds_order_id;

        return $this;
    }
    /**
     * Gets reimbursed_amount
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getReimbursedAmount()
    {
        return $this->container['reimbursed_amount'];
    }

    /**
     * Sets reimbursed_amount
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $reimbursed_amount reimbursed_amount
     *
     * @return self
     */
    public function setReimbursedAmount($reimbursed_amount)
    {
        $this->container['reimbursed_amount'] = $reimbursed_amount;

        return $this;
    }
}


