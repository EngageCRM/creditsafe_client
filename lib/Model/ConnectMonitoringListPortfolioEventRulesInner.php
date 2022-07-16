<?php
/**
 * ConnectMonitoringListPortfolioEventRulesInner
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
 * ConnectMonitoringListPortfolioEventRulesInner Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConnectMonitoringListPortfolioEventRulesInner implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Connect.Monitoring.ListPortfolioEventRules_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_active' => 'bool',
'rule_code' => 'float',
'rule_country_code' => 'string',
'rule_type' => 'float',
'rule_type_name' => 'string',
'name' => 'string',
'param0' => 'string',
'param1' => 'string',
'param2' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_active' => null,
'rule_code' => null,
'rule_country_code' => null,
'rule_type' => null,
'rule_type_name' => null,
'name' => null,
'param0' => null,
'param1' => null,
'param2' => null    ];

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
        'is_active' => 'isActive',
'rule_code' => 'ruleCode',
'rule_country_code' => 'ruleCountryCode',
'rule_type' => 'ruleType',
'rule_type_name' => 'ruleTypeName',
'name' => 'name',
'param0' => 'param0',
'param1' => 'param1',
'param2' => 'param2'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_active' => 'setIsActive',
'rule_code' => 'setRuleCode',
'rule_country_code' => 'setRuleCountryCode',
'rule_type' => 'setRuleType',
'rule_type_name' => 'setRuleTypeName',
'name' => 'setName',
'param0' => 'setParam0',
'param1' => 'setParam1',
'param2' => 'setParam2'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_active' => 'getIsActive',
'rule_code' => 'getRuleCode',
'rule_country_code' => 'getRuleCountryCode',
'rule_type' => 'getRuleType',
'rule_type_name' => 'getRuleTypeName',
'name' => 'getName',
'param0' => 'getParam0',
'param1' => 'getParam1',
'param2' => 'getParam2'    ];

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
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['rule_code'] = isset($data['rule_code']) ? $data['rule_code'] : null;
        $this->container['rule_country_code'] = isset($data['rule_country_code']) ? $data['rule_country_code'] : null;
        $this->container['rule_type'] = isset($data['rule_type']) ? $data['rule_type'] : null;
        $this->container['rule_type_name'] = isset($data['rule_type_name']) ? $data['rule_type_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['param0'] = isset($data['param0']) ? $data['param0'] : null;
        $this->container['param1'] = isset($data['param1']) ? $data['param1'] : null;
        $this->container['param2'] = isset($data['param2']) ? $data['param2'] : null;
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
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active Shows whether the notification event rule has been enabled for the given portfolio.
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets rule_code
     *
     * @return float
     */
    public function getRuleCode()
    {
        return $this->container['rule_code'];
    }

    /**
     * Sets rule_code
     *
     * @param float $rule_code The unique identifier for the notification event rule.
     *
     * @return $this
     */
    public function setRuleCode($rule_code)
    {
        $this->container['rule_code'] = $rule_code;

        return $this;
    }

    /**
     * Gets rule_country_code
     *
     * @return string
     */
    public function getRuleCountryCode()
    {
        return $this->container['rule_country_code'];
    }

    /**
     * Sets rule_country_code
     *
     * @param string $rule_country_code The ISO/Alpha 2 format country code for the notification event rule. \"XX\" is used for global rules that apply to companies from all countries.
     *
     * @return $this
     */
    public function setRuleCountryCode($rule_country_code)
    {
        $this->container['rule_country_code'] = $rule_country_code;

        return $this;
    }

    /**
     * Gets rule_type
     *
     * @return float
     */
    public function getRuleType()
    {
        return $this->container['rule_type'];
    }

    /**
     * Sets rule_type
     *
     * @param float $rule_type The unique identifier of the `ruleType` for the notification event rule.
     *
     * @return $this
     */
    public function setRuleType($rule_type)
    {
        $this->container['rule_type'] = $rule_type;

        return $this;
    }

    /**
     * Gets rule_type_name
     *
     * @return string
     */
    public function getRuleTypeName()
    {
        return $this->container['rule_type_name'];
    }

    /**
     * Sets rule_type_name
     *
     * @param string $rule_type_name A short description of the `ruleType` for the notification event rule.
     *
     * @return $this
     */
    public function setRuleTypeName($rule_type_name)
    {
        $this->container['rule_type_name'] = $rule_type_name;

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
     * @param string $name The name for the notification event rule.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets param0
     *
     * @return string
     */
    public function getParam0()
    {
        return $this->container['param0'];
    }

    /**
     * Sets param0
     *
     * @param string $param0 Some notification event rules may include input parameters used to tailor the notifications generated to your preference.
     *
     * @return $this
     */
    public function setParam0($param0)
    {
        $this->container['param0'] = $param0;

        return $this;
    }

    /**
     * Gets param1
     *
     * @return string
     */
    public function getParam1()
    {
        return $this->container['param1'];
    }

    /**
     * Sets param1
     *
     * @param string $param1 Some notification event rules may include input parameters used to tailor the notifications generated to your preference.
     *
     * @return $this
     */
    public function setParam1($param1)
    {
        $this->container['param1'] = $param1;

        return $this;
    }

    /**
     * Gets param2
     *
     * @return string
     */
    public function getParam2()
    {
        return $this->container['param2'];
    }

    /**
     * Sets param2
     *
     * @param string $param2 Some notification event rules may include input parameters used to tailor the notifications generated to your preference.
     *
     * @return $this
     */
    public function setParam2($param2)
    {
        $this->container['param2'] = $param2;

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