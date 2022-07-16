<?php
/**
 * ConnectBankMatchTotals
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Creditsafe Connect
 *
 * Creditsafe Connect is a REST API that provides access to the <a href=\"https://www.creditsafe.com/gb/en/more/about/our-data.html\">Creditsafe Global Company Database.</a> This allows you to: <ul><li>Control your master data</li><li>Utilise up-to-date Business and Director information, enhancing your onboarding and qualification processes</li><li>Recieve alerts when your customer's and supplier's Credit Report changes</li></ul> <h2>Quick Start</h2> To start your Creditsafe Connect API integration you will need to have activated your account and set a password by following the instructions in your Welcome Email. If you have not received a Welcome Email please contact your Creditsafe Account Manager.</br></br>By default, you will have been setup on our Sandbox environment.</br></br> Using a REST API client construct an `/authenticate` POST request and enter your username & password (case-sensitive) into the POST body. A successful response will return an  `authentication token`.</br></br> Use the `authentication token` in an `Authorization` header on all other Creditsafe Connect calls as proof of your authenticity.  <h2>Environments</h2>Production Environment baseurl: <code> https://connect.creditsafe.com/v1 </code> </br> Sandbox Test Environment baseurl:  <code>https://connect.sandbox.creditsafe.com/v1</code> <h2>Resources</h2> <ul> <li><a href=\"https://creditsafe.github.io/connect-docs/cs_connectv1-15.html\">OpenAPI</a> specification.</li><li><a href=\"https://www.getpostman.com/collections/4406bbddb81c308db8ff\">Postman Collection</a> of the most common example calls to Creditsafe Connect.</li> <li><a href=\"https://connect-portal.creditsafe.com\"> A Front End Demo Site</a>. Use this as a quick easy way to validate your username & password and form requests.</li> <li><a href=\"https://creditsafe.freshdesk.com/en/support/solutions/categories/7000007071/folders/7000018640\"> Help Articles</a>  including: <ul><li>FAQs</li><li><a href=\"https://creditsafe.freshdesk.com/en/support/solutions/articles/7000053487-connect-api-data-dictionaries\"> Data Dictionaries </a></li><li><a href=\"https://creditsafe.freshdesk.com/en/support/solutions/articles/7000054765-connect-api-data-availability-per-country\"> Data Availability per Country </a></li><li><a href=\"https://creditsafe.freshdesk.com/en/support/solutions/articles/7000054656-connect-api-feature-availability-per-country\"> Feature Availability Matrix</a></li></ul></ul>
 *
 * OpenAPI spec version: 1.5.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ConnectBankMatchTotals Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConnectBankMatchTotals implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Connect.BankMatch.Totals';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_accounts' => 'int',
'total_balance' => 'int',
'total_overdraft_or_credit_limit' => 'int',
'remaining_balance' => 'int',
'total_average_balance' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_accounts' => 'int64',
'total_balance' => 'int64',
'total_overdraft_or_credit_limit' => 'int64',
'remaining_balance' => 'int64',
'total_average_balance' => 'int64'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'total_accounts' => 'totalAccounts',
'total_balance' => 'totalBalance',
'total_overdraft_or_credit_limit' => 'totalOverdraftOrCreditLimit',
'remaining_balance' => 'remainingBalance',
'total_average_balance' => 'totalAverageBalance'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_accounts' => 'setTotalAccounts',
'total_balance' => 'setTotalBalance',
'total_overdraft_or_credit_limit' => 'setTotalOverdraftOrCreditLimit',
'remaining_balance' => 'setRemainingBalance',
'total_average_balance' => 'setTotalAverageBalance'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_accounts' => 'getTotalAccounts',
'total_balance' => 'getTotalBalance',
'total_overdraft_or_credit_limit' => 'getTotalOverdraftOrCreditLimit',
'remaining_balance' => 'getRemainingBalance',
'total_average_balance' => 'getTotalAverageBalance'    ];

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
        return self::$swaggerModelName;
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
        $this->container['total_accounts'] = isset($data['total_accounts']) ? $data['total_accounts'] : null;
        $this->container['total_balance'] = isset($data['total_balance']) ? $data['total_balance'] : null;
        $this->container['total_overdraft_or_credit_limit'] = isset($data['total_overdraft_or_credit_limit']) ? $data['total_overdraft_or_credit_limit'] : null;
        $this->container['remaining_balance'] = isset($data['remaining_balance']) ? $data['remaining_balance'] : null;
        $this->container['total_average_balance'] = isset($data['total_average_balance']) ? $data['total_average_balance'] : null;
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
     * Gets total_accounts
     *
     * @return int
     */
    public function getTotalAccounts()
    {
        return $this->container['total_accounts'];
    }

    /**
     * Sets total_accounts
     *
     * @param int $total_accounts total_accounts
     *
     * @return $this
     */
    public function setTotalAccounts($total_accounts)
    {
        $this->container['total_accounts'] = $total_accounts;

        return $this;
    }

    /**
     * Gets total_balance
     *
     * @return int
     */
    public function getTotalBalance()
    {
        return $this->container['total_balance'];
    }

    /**
     * Sets total_balance
     *
     * @param int $total_balance total_balance
     *
     * @return $this
     */
    public function setTotalBalance($total_balance)
    {
        $this->container['total_balance'] = $total_balance;

        return $this;
    }

    /**
     * Gets total_overdraft_or_credit_limit
     *
     * @return int
     */
    public function getTotalOverdraftOrCreditLimit()
    {
        return $this->container['total_overdraft_or_credit_limit'];
    }

    /**
     * Sets total_overdraft_or_credit_limit
     *
     * @param int $total_overdraft_or_credit_limit total_overdraft_or_credit_limit
     *
     * @return $this
     */
    public function setTotalOverdraftOrCreditLimit($total_overdraft_or_credit_limit)
    {
        $this->container['total_overdraft_or_credit_limit'] = $total_overdraft_or_credit_limit;

        return $this;
    }

    /**
     * Gets remaining_balance
     *
     * @return int
     */
    public function getRemainingBalance()
    {
        return $this->container['remaining_balance'];
    }

    /**
     * Sets remaining_balance
     *
     * @param int $remaining_balance remaining_balance
     *
     * @return $this
     */
    public function setRemainingBalance($remaining_balance)
    {
        $this->container['remaining_balance'] = $remaining_balance;

        return $this;
    }

    /**
     * Gets total_average_balance
     *
     * @return int
     */
    public function getTotalAverageBalance()
    {
        return $this->container['total_average_balance'];
    }

    /**
     * Sets total_average_balance
     *
     * @param int $total_average_balance total_average_balance
     *
     * @return $this
     */
    public function setTotalAverageBalance($total_average_balance)
    {
        $this->container['total_average_balance'] = $total_average_balance;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}