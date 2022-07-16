<?php
/**
 * ConnectMonitoringAllNotificationsEventsData
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
 * ConnectMonitoringAllNotificationsEventsData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConnectMonitoringAllNotificationsEventsData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Connect.Monitoring.AllNotificationsEvents_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company' => '\Swagger\Client\Model\ConnectMonitoringCompanyInfo',
'event_id' => 'float',
'event_date' => '\DateTime',
'new_value' => 'string',
'old_value' => 'string',
'notification_event_id' => 'float',
'notification_id' => 'float',
'processed_date' => '\DateTime',
'rule_code' => 'float',
'rule_name' => 'string',
'summary' => 'string',
'rule_text' => 'string',
'local_event_code' => 'string',
'is_processed' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company' => null,
'event_id' => null,
'event_date' => 'date-time',
'new_value' => null,
'old_value' => null,
'notification_event_id' => null,
'notification_id' => null,
'processed_date' => 'date-time',
'rule_code' => null,
'rule_name' => null,
'summary' => null,
'rule_text' => null,
'local_event_code' => null,
'is_processed' => null    ];

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
        'company' => 'company',
'event_id' => 'eventId',
'event_date' => 'eventDate',
'new_value' => 'newValue',
'old_value' => 'oldValue',
'notification_event_id' => 'notificationEventId',
'notification_id' => 'notificationId',
'processed_date' => 'processedDate',
'rule_code' => 'ruleCode',
'rule_name' => 'ruleName',
'summary' => 'summary',
'rule_text' => 'ruleText',
'local_event_code' => 'localEventCode',
'is_processed' => 'isProcessed'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company' => 'setCompany',
'event_id' => 'setEventId',
'event_date' => 'setEventDate',
'new_value' => 'setNewValue',
'old_value' => 'setOldValue',
'notification_event_id' => 'setNotificationEventId',
'notification_id' => 'setNotificationId',
'processed_date' => 'setProcessedDate',
'rule_code' => 'setRuleCode',
'rule_name' => 'setRuleName',
'summary' => 'setSummary',
'rule_text' => 'setRuleText',
'local_event_code' => 'setLocalEventCode',
'is_processed' => 'setIsProcessed'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company' => 'getCompany',
'event_id' => 'getEventId',
'event_date' => 'getEventDate',
'new_value' => 'getNewValue',
'old_value' => 'getOldValue',
'notification_event_id' => 'getNotificationEventId',
'notification_id' => 'getNotificationId',
'processed_date' => 'getProcessedDate',
'rule_code' => 'getRuleCode',
'rule_name' => 'getRuleName',
'summary' => 'getSummary',
'rule_text' => 'getRuleText',
'local_event_code' => 'getLocalEventCode',
'is_processed' => 'getIsProcessed'    ];

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
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['event_id'] = isset($data['event_id']) ? $data['event_id'] : null;
        $this->container['event_date'] = isset($data['event_date']) ? $data['event_date'] : null;
        $this->container['new_value'] = isset($data['new_value']) ? $data['new_value'] : null;
        $this->container['old_value'] = isset($data['old_value']) ? $data['old_value'] : null;
        $this->container['notification_event_id'] = isset($data['notification_event_id']) ? $data['notification_event_id'] : null;
        $this->container['notification_id'] = isset($data['notification_id']) ? $data['notification_id'] : null;
        $this->container['processed_date'] = isset($data['processed_date']) ? $data['processed_date'] : null;
        $this->container['rule_code'] = isset($data['rule_code']) ? $data['rule_code'] : null;
        $this->container['rule_name'] = isset($data['rule_name']) ? $data['rule_name'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['rule_text'] = isset($data['rule_text']) ? $data['rule_text'] : null;
        $this->container['local_event_code'] = isset($data['local_event_code']) ? $data['local_event_code'] : null;
        $this->container['is_processed'] = isset($data['is_processed']) ? $data['is_processed'] : null;
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
     * Gets company
     *
     * @return \Swagger\Client\Model\ConnectMonitoringCompanyInfo
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param \Swagger\Client\Model\ConnectMonitoringCompanyInfo $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
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
     * @param float $event_id The unique identifier of the event that triggered the generation of the `notificationEvent`. This identifier is consistent across all portfolios in the Global Monitoring product.
     *
     * @return $this
     */
    public function setEventId($event_id)
    {
        $this->container['event_id'] = $event_id;

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
     * Gets notification_event_id
     *
     * @return float
     */
    public function getNotificationEventId()
    {
        return $this->container['notification_event_id'];
    }

    /**
     * Sets notification_event_id
     *
     * @param float $notification_event_id The unique identifier for the `notificationEvent`. This identifier is tied to a specific `eventId` and `portfolioId`.
     *
     * @return $this
     */
    public function setNotificationEventId($notification_event_id)
    {
        $this->container['notification_event_id'] = $notification_event_id;

        return $this;
    }

    /**
     * Gets notification_id
     *
     * @return float
     */
    public function getNotificationId()
    {
        return $this->container['notification_id'];
    }

    /**
     * Sets notification_id
     *
     * @param float $notification_id The unique identifier for the `notificationEvent`. This identifier is tied to a specific `eventId` and `portfolioId`.
     *
     * @return $this
     */
    public function setNotificationId($notification_id)
    {
        $this->container['notification_id'] = $notification_id;

        return $this;
    }

    /**
     * Gets processed_date
     *
     * @return \DateTime
     */
    public function getProcessedDate()
    {
        return $this->container['processed_date'];
    }

    /**
     * Sets processed_date
     *
     * @param \DateTime $processed_date If the Notification was sent by email, the date will be populated with when the notification was sent.
     *
     * @return $this
     */
    public function setProcessedDate($processed_date)
    {
        $this->container['processed_date'] = $processed_date;

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
     * @param float $rule_code The unique identifier for the `ruleCode` that triggered the generation of the `notificationEvent`.
     *
     * @return $this
     */
    public function setRuleCode($rule_code)
    {
        $this->container['rule_code'] = $rule_code;

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
     * @param string $rule_name The name of the notification event rule that triggered the generation of the `notificationEvent`.
     *
     * @return $this
     */
    public function setRuleName($rule_name)
    {
        $this->container['rule_name'] = $rule_name;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string $summary A short description of the notification event rule that triggered the `notificationEvent`.
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets rule_text
     *
     * @return string
     */
    public function getRuleText()
    {
        return $this->container['rule_text'];
    }

    /**
     * Sets rule_text
     *
     * @param string $rule_text A short description of the notification event rule that triggered the `notificationEvent`.
     *
     * @return $this
     */
    public function setRuleText($rule_text)
    {
        $this->container['rule_text'] = $rule_text;

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
     * @param string $local_event_code The local canadacode of the `notificationEvent` used by  .
     *
     * @return $this
     */
    public function setLocalEventCode($local_event_code)
    {
        $this->container['local_event_code'] = $local_event_code;

        return $this;
    }

    /**
     * Gets is_processed
     *
     * @return bool
     */
    public function getIsProcessed()
    {
        return $this->container['is_processed'];
    }

    /**
     * Sets is_processed
     *
     * @param bool $is_processed a `true` or `false` flag for each event. Can be updated using the PATCH endpoint.
     *
     * @return $this
     */
    public function setIsProcessed($is_processed)
    {
        $this->container['is_processed'] = $is_processed;

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
