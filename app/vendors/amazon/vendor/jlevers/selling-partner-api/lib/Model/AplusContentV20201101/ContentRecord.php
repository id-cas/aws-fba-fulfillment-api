<?php
/**
 * ContentRecord
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\AplusContentV20201101;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ContentRecord Class Doc Comment
 *
 * @category Class
 * @description A content document with additional information for content management.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ContentRecord extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContentRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'content_reference_key' => 'string',
        'content_metadata' => '\SellingPartnerApi\Model\AplusContentV20201101\ContentMetadata',
        'content_document' => '\SellingPartnerApi\Model\AplusContentV20201101\ContentDocument'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'content_reference_key' => null,
        'content_metadata' => null,
        'content_document' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'content_reference_key' => 'contentReferenceKey',
        'content_metadata' => 'contentMetadata',
        'content_document' => 'contentDocument'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content_reference_key' => 'setContentReferenceKey',
        'content_metadata' => 'setContentMetadata',
        'content_document' => 'setContentDocument'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content_reference_key' => 'getContentReferenceKey',
        'content_metadata' => 'getContentMetadata',
        'content_document' => 'getContentDocument'
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
        $this->container['content_reference_key'] = $data['content_reference_key'] ?? null;
        $this->container['content_metadata'] = $data['content_metadata'] ?? null;
        $this->container['content_document'] = $data['content_document'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['content_reference_key'] === null) {
            $invalidProperties[] = "'content_reference_key' can't be null";
        }
        if ((mb_strlen($this->container['content_reference_key']) < 1)) {
            $invalidProperties[] = "invalid value for 'content_reference_key', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }


    /**
     * Gets content_reference_key
     *
     * @return string
     */
    public function getContentReferenceKey()
    {
        return $this->container['content_reference_key'];
    }

    /**
     * Sets content_reference_key
     *
     * @param string $content_reference_key A unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier.
     *
     * @return self
     */
    public function setContentReferenceKey($content_reference_key)
    {

        if ((mb_strlen($content_reference_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $content_reference_key when calling ContentRecord., must be bigger than or equal to 1.');
        }

        $this->container['content_reference_key'] = $content_reference_key;

        return $this;
    }
    /**
     * Gets content_metadata
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\ContentMetadata|null
     */
    public function getContentMetadata()
    {
        return $this->container['content_metadata'];
    }

    /**
     * Sets content_metadata
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\ContentMetadata|null $content_metadata content_metadata
     *
     * @return self
     */
    public function setContentMetadata($content_metadata)
    {
        $this->container['content_metadata'] = $content_metadata;

        return $this;
    }
    /**
     * Gets content_document
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\ContentDocument|null
     */
    public function getContentDocument()
    {
        return $this->container['content_document'];
    }

    /**
     * Sets content_document
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\ContentDocument|null $content_document content_document
     *
     * @return self
     */
    public function setContentDocument($content_document)
    {
        $this->container['content_document'] = $content_document;

        return $this;
    }
}


