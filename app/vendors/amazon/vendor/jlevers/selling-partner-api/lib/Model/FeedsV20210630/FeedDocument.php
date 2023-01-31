<?php
/**
 * FeedDocument
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Feeds
 *
 * The Selling Partner API for Feeds lets you upload data to Amazon on behalf of a selling partner.
 *
 * The version of the OpenAPI document: 2021-06-30
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FeedsV20210630;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * FeedDocument Class Doc Comment
 *
 * @category Class
 * @description Information required for the feed document.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FeedDocument extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeedDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'feed_document_id' => 'string',
        'url' => 'string',
        'compression_algorithm' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'feed_document_id' => null,
        'url' => null,
        'compression_algorithm' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'headers' => 'headers',
        'feed_document_id' => 'feedDocumentId',
        'url' => 'url',
        'compression_algorithm' => 'compressionAlgorithm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headers' => 'setHeaders',
        'feed_document_id' => 'setFeedDocumentId',
        'url' => 'setUrl',
        'compression_algorithm' => 'setCompressionAlgorithm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headers' => 'getHeaders',
        'feed_document_id' => 'getFeedDocumentId',
        'url' => 'getUrl',
        'compression_algorithm' => 'getCompressionAlgorithm'
    ];



    const COMPRESSION_ALGORITHM_GZIP = 'GZIP';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompressionAlgorithmAllowableValues()
    {
        $baseVals = [
            self::COMPRESSION_ALGORITHM_GZIP,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
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
        $this->container['feed_document_id'] = $data['feed_document_id'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['compression_algorithm'] = $data['compression_algorithm'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['feed_document_id'] === null) {
            $invalidProperties[] = "'feed_document_id' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        $allowedValues = $this->getCompressionAlgorithmAllowableValues();
        if (
            !is_null($this->container['compression_algorithm']) &&
            !in_array(strtoupper($this->container['compression_algorithm']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'compression_algorithm', must be one of '%s'",
                $this->container['compression_algorithm'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Gets API response headers
     *
     * @return array[string]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets API response headers (only relevant to response models)
     *
     * @param array[string => string] $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;
        return $this;
    }

    /**
     * Gets feed_document_id
     *
     * @return string
     */
    public function getFeedDocumentId()
    {
        return $this->container['feed_document_id'];
    }

    /**
     * Sets feed_document_id
     *
     * @param string $feed_document_id The identifier for the feed document. This identifier is unique only in combination with a seller ID.
     *
     * @return self
     */
    public function setFeedDocumentId($feed_document_id)
    {
        $this->container['feed_document_id'] = $feed_document_id;

        return $this;
    }
    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url A presigned URL for the feed document. If `compressionAlgorithm` is not returned, you can download the feed directly from this URL. This URL expires after 5 minutes.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }
    /**
     * Gets compression_algorithm
     *
     * @return string|null
     */
    public function getCompressionAlgorithm()
    {
        return $this->container['compression_algorithm'];
    }

    /**
     * Sets compression_algorithm
     *
     * @param string|null $compression_algorithm If the feed document contents have been compressed, the compression algorithm used is returned in this property and you must decompress the feed when you download. Otherwise, you can download the feed directly. Refer to [Step 7. Download the feed processing report](https://developer-docs.amazon.com/sp-api/docs/feeds-api-v2021-06-30-use-case-guide#step-7-download-the-feed-processing-report) in the use case guide, where sample code is provided.
     *
     * @return self
     */
    public function setCompressionAlgorithm($compression_algorithm)
    {
        $allowedValues = $this->getCompressionAlgorithmAllowableValues();
        if (!is_null($compression_algorithm) &&!in_array(strtoupper($compression_algorithm), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'compression_algorithm', must be one of '%s'",
                    $compression_algorithm,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['compression_algorithm'] = $compression_algorithm;

        return $this;
    }
}


