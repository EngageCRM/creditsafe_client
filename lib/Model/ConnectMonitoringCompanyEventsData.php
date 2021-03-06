<?php
/**
 * ConnectMonitoringCompanyEventsData
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
 * ConnectMonitoringCompanyEventsData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConnectMonitoringCompanyEventsData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Connect.Monitoring.CompanyEvents_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'event_id' => 'float',
'company_id' => 'string',
'portfolio_id' => 'float',
'rule_name' => 'string',
'local_event_code' => 'string',
'global_event_code' => 'string',
'new_value' => 'string',
'old_value' => 'string',
'event_date' => '\DateTime',
'created_date' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'event_id' => null,
'company_id' => null,
'portfolio_id' => null,
'rule_name' => null,
'local_event_code' => null,
'global_event_code' => null,
'new_value' => null,
'old_value' => null,
'event_date' => 'date-time',
'created_date' => 'date-time'    ];

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
        'event_id' => 'eventId',
'company_id' => 'companyId',
'portfolio_id' => 'portfolioId',
'rule_name' => 'ruleName',
'local_event_code' => 'localEventCode',
'global_event_code' => 'globalEventCode',
'new_value' => 'newValue',
'old_value' => 'oldValue',
'event_date' => 'eventDate',
'created_date' => 'createdDate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_id' => 'setEventId',
'company_id' => 'setCompanyId',
'portfolio_id' => 'setPortfolioId',
'rule_name' => 'setRuleName',
'local_event_code' => 'setLocalEventCode',
'global_event_code' => 'setGlobalEventCode',
'new_value' => 'setNewValue',
'old_value' => 'setOldValue',
'event_date' => 'setEventDate',
'created_date' => 'setCreatedDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_id' => 'getEventId',
'company_id' => 'getCompanyId',
'portfolio_id' => 'getPortfolioId',
'rule_name' => 'getRuleName',
'local_event_code' => 'getLocalEventCode',
'global_event_code' => 'getGlobalEventCode',
'new_value' => 'getNewValue',
'old_value' => 'getOldValue',
'event_date' => 'getEventDate',
'created_date' => 'getCreatedDate'    ];

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
        $this->container['event_id'] = isset($data['event_id']) ? $data['event_id'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['portfolio_id'] = isset($data['portfolio_id']) ? $data['portfolio_id'] : null;
        $this->container['rule_name'] = isset($data['rule_name']) ? $data['rule_name'] : null;
        $this->container['local_event_code'] = isset($data['local_event_code']) ? $data['local_event_code'] : null;
        $this->container['global_event_code'] = isset($data['global_event_code']) ? $data['global_event_code'] : null;
        $this->container['new_value'] = isset($data['new_value']) ? $data['new_value'] : null;
        $this->container['old_value'] = isset($data['old_value']) ? $data['old_value'] : null;
        $this->container['event_date'] = isset($data['event_date']) ? $data['event_date'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
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
     * Gets event_id
     *
     * @return float
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id
     *
     * @param float $event_id The unique identifier for the event.
     *
     * @return $this
     */
    public function setEventId($event_id)
    {
        $this->container['event_id'] = $event_id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return string
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string $company_id The Safe Number (Creditsafe's identifier on all Companies owned in the Creditsafe Universe) of the company that triggered the event.
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets portfolio_id
     *
     * @return float
     */
    public function getPortfolioId()
    {
        return $this->container['portfolio_id'];
    }

    /**
     * Sets portfolio_id
     *
     * @param float $portfolio_id The portfolio Id of the portfolio that contains the company that you requested event information for.
     *
     * @return $this
     */
    public function setPortfolioId($portfolio_id)
    {
        $this->container['portfolio_id'] = $portfolio_id;

        return $this;
    }

    /**
     * Gets rule_name
     *
     * @return string
     */
    public function getRuleName()
    {
        return $this->container['rule_name'];
    }

    /**
     * Sets rule_name
     *
     * @param string $rule_name A short description of the company event.
     *
     * @return $this
     */
    public function setRuleName($rule_name)
    {
        $this->container['rule_name'] = $rule_name;

        return $this;
    }

    /**
     * Gets local_event_code
     *
     * @return string
     */
    public function getLocalEventCode()
    {
        return $this->container['local_event_code'];
    }

    /**
     * Sets local_event_code
     *
     * @param string $local_event_code The local event code for the event.
     *
     * @return $this
     */
    public function setLocalEventCode($local_event_code)
    {
        $this->container['local_event_code'] = $local_event_code;

        return $this;
    }

    /**
     * Gets global_event_code
     *
     * @return string
     */
    public function getGlobalEventCode()
    {
        return $this->container['global_event_code'];
    }

    /**
     * Sets global_event_code
     *
     * @param string $global_event_code The global event code that has been mapped to the local event.
     *
     * @return $this
     */
    public function setGlobalEventCode($global_event_code)
    {
        $this->container['global_event_code'] = $global_event_code;

        return $this;
    }

    /**
     * Gets new_value
     *
     * @return string
     */
    public function getNewValue()
    {
        return $this->container['new_value'];
    }

    /**
     * Sets new_value
     *
     * @param string $new_value Some events contain an `oldValue` and `newValue` (e.g. a change in Credit Limit).
     *
     * @return $this
     */
    public function setNewValue($new_value)
    {
        $this->container['new_value'] = $new_value;

        return $this;
    }

    /**
     * Gets old_value
     *
     * @return string
     */
    public function getOldValue()
    {
        return $this->container['old_value'];
    }

    /**
     * Sets old_value
     *
     * @param string $old_value Some events contain an `oldValue` and `newValue` (e.g. a change in Credit Limit).
     *
     * @return $this
     */
    public function setOldValue($old_value)
    {
        $this->container['old_value'] = $old_value;

        return $this;
    }

    /**
     * Gets event_date
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->container['event_date'];
    }

    /**
     * Sets event_date
     *
     * @param \DateTime $event_date The date that the event occured.
     *
     * @return $this
     */
    public function setEventDate($event_date)
    {
        $this->container['event_date'] = $event_date;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime $created_date The date that the event was created in the Creditsafe database.
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

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
