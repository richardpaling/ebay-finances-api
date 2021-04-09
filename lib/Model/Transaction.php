<?php
/**
 * Transaction
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eBay Finances API
 *
 * This API is used to retrieve seller payouts and monetary transaction details related to those payouts.
 *
 * The version of the OpenAPI document: 1.8.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
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
 * Transaction Class Doc Comment
 *
 * @category Class
 * @description This type is used to express the details of one of the following monetary transactions: a buyer&#39;s payment for an order, a refund to the buyer for a returned item or cancelled order, or a credit issued by eBay to the seller&#39;s account.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Transaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => '\OpenAPI\Client\Model\Amount',
        'booking_entry' => 'string',
        'buyer' => '\OpenAPI\Client\Model\Buyer',
        'fee_type' => 'string',
        'order_id' => 'string',
        'order_line_items' => '\OpenAPI\Client\Model\OrderLineItem[]',
        'payments_entity' => 'string',
        'payout_id' => 'string',
        'references' => '\OpenAPI\Client\Model\Reference[]',
        'sales_record_reference' => 'string',
        'total_fee_basis_amount' => '\OpenAPI\Client\Model\Amount',
        'total_fee_amount' => '\OpenAPI\Client\Model\Amount',
        'transaction_date' => 'string',
        'transaction_id' => 'string',
        'transaction_memo' => 'string',
        'transaction_status' => 'string',
        'transaction_type' => 'string'
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
        'booking_entry' => null,
        'buyer' => null,
        'fee_type' => null,
        'order_id' => null,
        'order_line_items' => null,
        'payments_entity' => null,
        'payout_id' => null,
        'references' => null,
        'sales_record_reference' => null,
        'total_fee_basis_amount' => null,
        'total_fee_amount' => null,
        'transaction_date' => null,
        'transaction_id' => null,
        'transaction_memo' => null,
        'transaction_status' => null,
        'transaction_type' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'booking_entry' => 'bookingEntry',
        'buyer' => 'buyer',
        'fee_type' => 'feeType',
        'order_id' => 'orderId',
        'order_line_items' => 'orderLineItems',
        'payments_entity' => 'paymentsEntity',
        'payout_id' => 'payoutId',
        'references' => 'references',
        'sales_record_reference' => 'salesRecordReference',
        'total_fee_basis_amount' => 'totalFeeBasisAmount',
        'total_fee_amount' => 'totalFeeAmount',
        'transaction_date' => 'transactionDate',
        'transaction_id' => 'transactionId',
        'transaction_memo' => 'transactionMemo',
        'transaction_status' => 'transactionStatus',
        'transaction_type' => 'transactionType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'booking_entry' => 'setBookingEntry',
        'buyer' => 'setBuyer',
        'fee_type' => 'setFeeType',
        'order_id' => 'setOrderId',
        'order_line_items' => 'setOrderLineItems',
        'payments_entity' => 'setPaymentsEntity',
        'payout_id' => 'setPayoutId',
        'references' => 'setReferences',
        'sales_record_reference' => 'setSalesRecordReference',
        'total_fee_basis_amount' => 'setTotalFeeBasisAmount',
        'total_fee_amount' => 'setTotalFeeAmount',
        'transaction_date' => 'setTransactionDate',
        'transaction_id' => 'setTransactionId',
        'transaction_memo' => 'setTransactionMemo',
        'transaction_status' => 'setTransactionStatus',
        'transaction_type' => 'setTransactionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'booking_entry' => 'getBookingEntry',
        'buyer' => 'getBuyer',
        'fee_type' => 'getFeeType',
        'order_id' => 'getOrderId',
        'order_line_items' => 'getOrderLineItems',
        'payments_entity' => 'getPaymentsEntity',
        'payout_id' => 'getPayoutId',
        'references' => 'getReferences',
        'sales_record_reference' => 'getSalesRecordReference',
        'total_fee_basis_amount' => 'getTotalFeeBasisAmount',
        'total_fee_amount' => 'getTotalFeeAmount',
        'transaction_date' => 'getTransactionDate',
        'transaction_id' => 'getTransactionId',
        'transaction_memo' => 'getTransactionMemo',
        'transaction_status' => 'getTransactionStatus',
        'transaction_type' => 'getTransactionType'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['booking_entry'] = $data['booking_entry'] ?? null;
        $this->container['buyer'] = $data['buyer'] ?? null;
        $this->container['fee_type'] = $data['fee_type'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['order_line_items'] = $data['order_line_items'] ?? null;
        $this->container['payments_entity'] = $data['payments_entity'] ?? null;
        $this->container['payout_id'] = $data['payout_id'] ?? null;
        $this->container['references'] = $data['references'] ?? null;
        $this->container['sales_record_reference'] = $data['sales_record_reference'] ?? null;
        $this->container['total_fee_basis_amount'] = $data['total_fee_basis_amount'] ?? null;
        $this->container['total_fee_amount'] = $data['total_fee_amount'] ?? null;
        $this->container['transaction_date'] = $data['transaction_date'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['transaction_memo'] = $data['transaction_memo'] ?? null;
        $this->container['transaction_status'] = $data['transaction_status'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
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
     * @return \OpenAPI\Client\Model\Amount|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \OpenAPI\Client\Model\Amount|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets booking_entry
     *
     * @return string|null
     */
    public function getBookingEntry()
    {
        return $this->container['booking_entry'];
    }

    /**
     * Sets booking_entry
     *
     * @param string|null $booking_entry The enumeration value returned in this field indicates if the monetary transaction amount is a (CREDIT) or a (DEBIT) to the seller's account. Typically, the SALE and CREDIT transaction types are credits to the seller's account, and the REFUND, DISPUTE, SHIPPING_LABEL, and TRANSFER transaction types are debits to the seller's account. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setBookingEntry($booking_entry)
    {
        $this->container['booking_entry'] = $booking_entry;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \OpenAPI\Client\Model\Buyer|null
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \OpenAPI\Client\Model\Buyer|null $buyer buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets fee_type
     *
     * @return string|null
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type
     *
     * @param string|null $fee_type The type of fee. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/api:FeeTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setFeeType($fee_type)
    {
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id The unique identifier of the eBay order associated with the monetary transaction.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_line_items
     *
     * @return \OpenAPI\Client\Model\OrderLineItem[]|null
     */
    public function getOrderLineItems()
    {
        return $this->container['order_line_items'];
    }

    /**
     * Sets order_line_items
     *
     * @param \OpenAPI\Client\Model\OrderLineItem[]|null $order_line_items This array shows the fees that are deducted from a seller payout for each line item in an order.
     *
     * @return self
     */
    public function setOrderLineItems($order_line_items)
    {
        $this->container['order_line_items'] = $order_line_items;

        return $this;
    }

    /**
     * Gets payments_entity
     *
     * @return string|null
     */
    public function getPaymentsEntity()
    {
        return $this->container['payments_entity'];
    }

    /**
     * Sets payments_entity
     *
     * @param string|null $payments_entity This string value indicates the entity that is processing the payment.
     *
     * @return self
     */
    public function setPaymentsEntity($payments_entity)
    {
        $this->container['payments_entity'] = $payments_entity;

        return $this;
    }

    /**
     * Gets payout_id
     *
     * @return string|null
     */
    public function getPayoutId()
    {
        return $this->container['payout_id'];
    }

    /**
     * Sets payout_id
     *
     * @param string|null $payout_id The unique identifier of the seller payout associated with the monetary transaction. This identifier is generated once eBay begins processing the payout for the corresponding order. This field will not be returned if eBay has not yet begun processing the payout for an order.
     *
     * @return self
     */
    public function setPayoutId($payout_id)
    {
        $this->container['payout_id'] = $payout_id;

        return $this;
    }

    /**
     * Gets references
     *
     * @return \OpenAPI\Client\Model\Reference[]|null
     */
    public function getReferences()
    {
        return $this->container['references'];
    }

    /**
     * Sets references
     *
     * @param \OpenAPI\Client\Model\Reference[]|null $references This field contains reference information for the transaction fee. This includes an ID and the type of ID provided (such as item ID).
     *
     * @return self
     */
    public function setReferences($references)
    {
        $this->container['references'] = $references;

        return $this;
    }

    /**
     * Gets sales_record_reference
     *
     * @return string|null
     */
    public function getSalesRecordReference()
    {
        return $this->container['sales_record_reference'];
    }

    /**
     * Sets sales_record_reference
     *
     * @param string|null $sales_record_reference The Sales Record Number associated with a sales order. Sales Record Numbers are Selling Manager/Selling Manager Pro identifiers that are created at order checkout. Note: For all orders originating after February 1, 2020, a value of 0 will be returned in this field. The Sales Record Number field has also been removed from Seller Hub. Instead of salesRecordReference, depend on orderId instead as the identifier of the order. The salesRecordReference field has been scheduled for deprecation, and a date for when this field will no longer be returned at all will be announced soon.
     *
     * @return self
     */
    public function setSalesRecordReference($sales_record_reference)
    {
        $this->container['sales_record_reference'] = $sales_record_reference;

        return $this;
    }

    /**
     * Gets total_fee_basis_amount
     *
     * @return \OpenAPI\Client\Model\Amount|null
     */
    public function getTotalFeeBasisAmount()
    {
        return $this->container['total_fee_basis_amount'];
    }

    /**
     * Sets total_fee_basis_amount
     *
     * @param \OpenAPI\Client\Model\Amount|null $total_fee_basis_amount total_fee_basis_amount
     *
     * @return self
     */
    public function setTotalFeeBasisAmount($total_fee_basis_amount)
    {
        $this->container['total_fee_basis_amount'] = $total_fee_basis_amount;

        return $this;
    }

    /**
     * Gets total_fee_amount
     *
     * @return \OpenAPI\Client\Model\Amount|null
     */
    public function getTotalFeeAmount()
    {
        return $this->container['total_fee_amount'];
    }

    /**
     * Sets total_fee_amount
     *
     * @param \OpenAPI\Client\Model\Amount|null $total_fee_amount total_fee_amount
     *
     * @return self
     */
    public function setTotalFeeAmount($total_fee_amount)
    {
        $this->container['total_fee_amount'] = $total_fee_amount;

        return $this;
    }

    /**
     * Gets transaction_date
     *
     * @return string|null
     */
    public function getTransactionDate()
    {
        return $this->container['transaction_date'];
    }

    /**
     * Sets transaction_date
     *
     * @param string|null $transaction_date This timestamp indicates when the monetary transaction (order purchase, buyer refund, seller credit) occurred. The following (UTC) format is used: YYYY-MM-DDTHH:MM:SS.SSSZ. For example, 2015-08-04T19:09:02.768Z.
     *
     * @return self
     */
    public function setTransactionDate($transaction_date)
    {
        $this->container['transaction_date'] = $transaction_date;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string|null $transaction_id The unique identifier of the monetary transaction. A monetary transaction can be a sales order, an order refund to the buyer, a credit to the seller's account, a debit to the seller for the purchase of a shipping label, or a transaction where eBay recouped money from the seller if the seller lost a buyer-initiated payment dispute.
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets transaction_memo
     *
     * @return string|null
     */
    public function getTransactionMemo()
    {
        return $this->container['transaction_memo'];
    }

    /**
     * Sets transaction_memo
     *
     * @param string|null $transaction_memo This field provides more details on a shipping label transaction, such as a purchase, a refund, or a price adjustment to the cost of the shipping label. This field is only returned if applicable/available. Currently, this field is only used for shipping label transactions, but it is possible that it will be used for other transaction types in the future.
     *
     * @return self
     */
    public function setTransactionMemo($transaction_memo)
    {
        $this->container['transaction_memo'] = $transaction_memo;

        return $this;
    }

    /**
     * Gets transaction_status
     *
     * @return string|null
     */
    public function getTransactionStatus()
    {
        return $this->container['transaction_status'];
    }

    /**
     * Sets transaction_status
     *
     * @param string|null $transaction_status This enumeration value indicates the current status of the seller payout associated with the monetary transaction. See the TransactionStatusEnum type for more information on the different states. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:TransactionStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setTransactionStatus($transaction_status)
    {
        $this->container['transaction_status'] = $transaction_status;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string|null $transaction_type This enumeration value indicates whether the monetary transaction is a buyer's payment for an order, a refund to the buyer for a returned item or cancelled order, a credit issued by eBay to the seller's account, a payment dispute between the buyer and seller, or where eBay is billing the seller for an eBay shipping label or another charge (such as a refund to a buyer). Note that the shipping label functionality will initially only be available to a select number of sellers. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:TransactionTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


