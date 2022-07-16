<?php
/**
 * ConnectIdentitySummaryLinks
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
 * ConnectIdentitySummaryLinks Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConnectIdentitySummaryLinks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Connect.Identity.SummaryLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'undeclared_address_count' => 'int',
'undeclared_alias_count' => 'int',
'undeclared_associates_count' => 'int',
'undeclared_address_searched_count' => 'int',
'undeclared_address_unsearched_count' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'undeclared_address_count' => 'int32',
'undeclared_alias_count' => 'int32',
'undeclared_associates_count' => 'int32',
'undeclared_address_searched_count' => 'int32',
'undeclared_address_unsearched_count' => 'int32'    ];

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
        'undeclared_address_count' => 'undeclaredAddressCount',
'undeclared_alias_count' => 'undeclaredAliasCount',
'undeclared_associates_count' => 'undeclaredAssociatesCount',
'undeclared_address_searched_count' => 'undeclaredAddressSearchedCount',
'undeclared_address_unsearched_count' => 'undeclaredAddressUnsearchedCount'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'undeclared_address_count' => 'setUndeclaredAddressCount',
'undeclared_alias_count' => 'setUndeclaredAliasCount',
'undeclared_associates_count' => 'setUndeclaredAssociatesCount',
'undeclared_address_searched_count' => 'setUndeclaredAddressSearchedCount',
'undeclared_address_unsearched_count' => 'setUndeclaredAddressUnsearchedCount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'undeclared_address_count' => 'getUndeclaredAddressCount',
'undeclared_alias_count' => 'getUndeclaredAliasCount',
'undeclared_associates_count' => 'getUndeclaredAssociatesCount',
'undeclared_address_searched_count' => 'getUndeclaredAddressSearchedCount',
'undeclared_address_unsearched_count' => 'getUndeclaredAddressUnsearchedCount'    ];

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
        $this->container['undeclared_address_count'] = isset($data['undeclared_address_count']) ? $data['undeclared_address_count'] : null;
        $this->container['undeclared_alias_count'] = isset($data['undeclared_alias_count']) ? $data['undeclared_alias_count'] : null;
        $this->container['undeclared_associates_count'] = isset($data['undeclared_associates_count']) ? $data['undeclared_associates_count'] : null;
        $this->container['undeclared_address_searched_count'] = isset($data['undeclared_address_searched_count']) ? $data['undeclared_address_searched_count'] : null;
        $this->container['undeclared_address_unsearched_count'] = isset($data['undeclared_address_unsearched_count']) ? $data['undeclared_address_unsearched_count'] : null;
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
     * Gets undeclared_address_count
     *
     * @return int
     */
    public function getUndeclaredAddressCount()
    {
        return $this->container['undeclared_address_count'];
    }

    /**
     * Sets undeclared_address_count
     *
     * @param int $undeclared_address_count undeclared_address_count
     *
     * @return $this
     */
    public function setUndeclaredAddressCount($undeclared_address_count)
    {
        $this->container['undeclared_address_count'] = $undeclared_address_count;

        return $this;
    }

    /**
     * Gets undeclared_alias_count
     *
     * @return int
     */
    public function getUndeclaredAliasCount()
    {
        return $this->container['undeclared_alias_count'];
    }

    /**
     * Sets undeclared_alias_count
     *
     * @param int $undeclared_alias_count undeclared_alias_count
     *
     * @return $this
     */
    public function setUndeclaredAliasCount($undeclared_alias_count)
    {
        $this->container['undeclared_alias_count'] = $undeclared_alias_count;

        return $this;
    }

    /**
     * Gets undeclared_associates_count
     *
     * @return int
     */
    public function getUndeclaredAssociatesCount()
    {
        return $this->container['undeclared_associates_count'];
    }

    /**
     * Sets undeclared_associates_count
     *
     * @param int $undeclared_associates_count undeclared_associates_count
     *
     * @return $this
     */
    public function setUndeclaredAssociatesCount($undeclared_associates_count)
    {
        $this->container['undeclared_associates_count'] = $undeclared_associates_count;

        return $this;
    }

    /**
     * Gets undeclared_address_searched_count
     *
     * @return int
     */
    public function getUndeclaredAddressSearchedCount()
    {
        return $this->container['undeclared_address_searched_count'];
    }

    /**
     * Sets undeclared_address_searched_count
     *
     * @param int $undeclared_address_searched_count undeclared_address_searched_count
     *
     * @return $this
     */
    public function setUndeclaredAddressSearchedCount($undeclared_address_searched_count)
    {
        $this->container['undeclared_address_searched_count'] = $undeclared_address_searched_count;

        return $this;
    }

    /**
     * Gets undeclared_address_unsearched_count
     *
     * @return int
     */
    public function getUndeclaredAddressUnsearchedCount()
    {
        return $this->container['undeclared_address_unsearched_count'];
    }

    /**
     * Sets undeclared_address_unsearched_count
     *
     * @param int $undeclared_address_unsearched_count undeclared_address_unsearched_count
     *
     * @return $this
     */
    public function setUndeclaredAddressUnsearchedCount($undeclared_address_unsearched_count)
    {
        $this->container['undeclared_address_unsearched_count'] = $undeclared_address_unsearched_count;

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
