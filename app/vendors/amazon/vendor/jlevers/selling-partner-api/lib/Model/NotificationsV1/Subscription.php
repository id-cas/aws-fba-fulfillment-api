<?php
/**
 * Subscription
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Notifications
 *
 * The Selling Partner API for Notifications lets you subscribe to notifications that are relevant to a selling partner's business. Using this API you can create a destination to receive notifications, subscribe to notifications, delete notification subscriptions, and more. For more information, see the [Notifications Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide).
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\NotificationsV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * Subscription Class Doc Comment
 *
 * @category Class
 * @description Represents a subscription to receive notifications.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Subscription extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'subscription_id' => 'string',
        'payload_version' => 'string',
        'destination_id' => 'string',
        'processing_directive' => '\SellingPartnerApi\Model\NotificationsV1\ProcessingDirective'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'subscription_id' => null,
        'payload_version' => null,
        'destination_id' => null,
        'processing_directive' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'subscription_id' => 'subscriptionId',
        'payload_version' => 'payloadVersion',
        'destination_id' => 'destinationId',
        'processing_directive' => 'processingDirective'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subscription_id' => 'setSubscriptionId',
        'payload_version' => 'setPayloadVersion',
        'destination_id' => 'setDestinationId',
        'processing_directive' => 'setProcessingDirective'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subscription_id' => 'getSubscriptionId',
        'payload_version' => 'getPayloadVersion',
        'destination_id' => 'getDestinationId',
        'processing_directive' => 'getProcessingDirective'
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
        $this->container['subscription_id'] = $data['subscription_id'] ?? null;
        $this->container['payload_version'] = $data['payload_version'] ?? null;
        $this->container['destination_id'] = $data['destination_id'] ?? null;
        $this->container['processing_directive'] = $data['processing_directive'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subscription_id'] === null) {
            $invalidProperties[] = "'subscription_id' can't be null";
        }
        if ($this->container['payload_version'] === null) {
            $invalidProperties[] = "'payload_version' can't be null";
        }
        if ($this->container['destination_id'] === null) {
            $invalidProperties[] = "'destination_id' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets subscription_id
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     *
     * @param string $subscription_id The subscription identifier generated when the subscription is created.
     *
     * @return self
     */
    public function setSubscriptionId($subscription_id)
    {
        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }
    /**
     * Gets payload_version
     *
     * @return string
     */
    public function getPayloadVersion()
    {
        return $this->container['payload_version'];
    }

    /**
     * Sets payload_version
     *
     * @param string $payload_version The version of the payload object to be used in the notification.
     *
     * @return self
     */
    public function setPayloadVersion($payload_version)
    {
        $this->container['payload_version'] = $payload_version;

        return $this;
    }
    /**
     * Gets destination_id
     *
     * @return string
     */
    public function getDestinationId()
    {
        return $this->container['destination_id'];
    }

    /**
     * Sets destination_id
     *
     * @param string $destination_id The identifier for the destination where notifications will be delivered.
     *
     * @return self
     */
    public function setDestinationId($destination_id)
    {
        $this->container['destination_id'] = $destination_id;

        return $this;
    }
    /**
     * Gets processing_directive
     *
     * @return \SellingPartnerApi\Model\NotificationsV1\ProcessingDirective|null
     */
    public function getProcessingDirective()
    {
        return $this->container['processing_directive'];
    }

    /**
     * Sets processing_directive
     *
     * @param \SellingPartnerApi\Model\NotificationsV1\ProcessingDirective|null $processing_directive processing_directive
     *
     * @return self
     */
    public function setProcessingDirective($processing_directive)
    {
        $this->container['processing_directive'] = $processing_directive;

        return $this;
    }
}

