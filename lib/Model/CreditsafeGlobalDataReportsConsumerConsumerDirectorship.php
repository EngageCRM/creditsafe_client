<?php
/**
 * CreditsafeGlobalDataReportsConsumerConsumerDirectorship
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
 * CreditsafeGlobalDataReportsConsumerConsumerDirectorship Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditsafeGlobalDataReportsConsumerConsumerDirectorship implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Creditsafe.GlobalData.Reports.Consumer.ConsumerDirectorship';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_name' => 'string',
'company_status' => 'string',
'appointment_date' => '\DateTime',
'turnover' => 'double',
'credit_rating' => 'string',
'company_number' => 'string',
'function' => 'string',
'company_registration_date' => '\DateTime',
'net_worth' => 'double',
'credit_limit' => 'double'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_name' => null,
'company_status' => null,
'appointment_date' => 'date-time',
'turnover' => 'double',
'credit_rating' => null,
'company_number' => null,
'function' => null,
'company_registration_date' => 'date-time',
'net_worth' => 'double',
'credit_limit' => 'double'    ];

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
        'company_name' => 'companyName',
'company_status' => 'companyStatus',
'appointment_date' => 'appointmentDate',
'turnover' => 'turnover',
'credit_rating' => 'creditRating',
'company_number' => 'companyNumber',
'function' => 'function',
'company_registration_date' => 'companyRegistrationDate',
'net_worth' => 'netWorth',
'credit_limit' => 'creditLimit'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_name' => 'setCompanyName',
'company_status' => 'setCompanyStatus',
'appointment_date' => 'setAppointmentDate',
'turnover' => 'setTurnover',
'credit_rating' => 'setCreditRating',
'company_number' => 'setCompanyNumber',
'function' => 'setFunction',
'company_registration_date' => 'setCompanyRegistrationDate',
'net_worth' => 'setNetWorth',
'credit_limit' => 'setCreditLimit'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_name' => 'getCompanyName',
'company_status' => 'getCompanyStatus',
'appointment_date' => 'getAppointmentDate',
'turnover' => 'getTurnover',
'credit_rating' => 'getCreditRating',
'company_number' => 'getCompanyNumber',
'function' => 'getFunction',
'company_registration_date' => 'getCompanyRegistrationDate',
'net_worth' => 'getNetWorth',
'credit_limit' => 'getCreditLimit'    ];

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
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['company_status'] = isset($data['company_status']) ? $data['company_status'] : null;
        $this->container['appointment_date'] = isset($data['appointment_date']) ? $data['appointment_date'] : null;
        $this->container['turnover'] = isset($data['turnover']) ? $data['turnover'] : null;
        $this->container['credit_rating'] = isset($data['credit_rating']) ? $data['credit_rating'] : null;
        $this->container['company_number'] = isset($data['company_number']) ? $data['company_number'] : null;
        $this->container['function'] = isset($data['function']) ? $data['function'] : null;
        $this->container['company_registration_date'] = isset($data['company_registration_date']) ? $data['company_registration_date'] : null;
        $this->container['net_worth'] = isset($data['net_worth']) ? $data['net_worth'] : null;
        $this->container['credit_limit'] = isset($data['credit_limit']) ? $data['credit_limit'] : null;
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
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name company_name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets company_status
     *
     * @return string
     */
    public function getCompanyStatus()
    {
        return $this->container['company_status'];
    }

    /**
     * Sets company_status
     *
     * @param string $company_status company_status
     *
     * @return $this
     */
    public function setCompanyStatus($company_status)
    {
        $this->container['company_status'] = $company_status;

        return $this;
    }

    /**
     * Gets appointment_date
     *
     * @return \DateTime
     */
    public function getAppointmentDate()
    {
        return $this->container['appointment_date'];
    }

    /**
     * Sets appointment_date
     *
     * @param \DateTime $appointment_date appointment_date
     *
     * @return $this
     */
    public function setAppointmentDate($appointment_date)
    {
        $this->container['appointment_date'] = $appointment_date;

        return $this;
    }

    /**
     * Gets turnover
     *
     * @return double
     */
    public function getTurnover()
    {
        return $this->container['turnover'];
    }

    /**
     * Sets turnover
     *
     * @param double $turnover turnover
     *
     * @return $this
     */
    public function setTurnover($turnover)
    {
        $this->container['turnover'] = $turnover;

        return $this;
    }

    /**
     * Gets credit_rating
     *
     * @return string
     */
    public function getCreditRating()
    {
        return $this->container['credit_rating'];
    }

    /**
     * Sets credit_rating
     *
     * @param string $credit_rating credit_rating
     *
     * @return $this
     */
    public function setCreditRating($credit_rating)
    {
        $this->container['credit_rating'] = $credit_rating;

        return $this;
    }

    /**
     * Gets company_number
     *
     * @return string
     */
    public function getCompanyNumber()
    {
        return $this->container['company_number'];
    }

    /**
     * Sets company_number
     *
     * @param string $company_number company_number
     *
     * @return $this
     */
    public function setCompanyNumber($company_number)
    {
        $this->container['company_number'] = $company_number;

        return $this;
    }

    /**
     * Gets function
     *
     * @return string
     */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
     * Sets function
     *
     * @param string $function function
     *
     * @return $this
     */
    public function setFunction($function)
    {
        $this->container['function'] = $function;

        return $this;
    }

    /**
     * Gets company_registration_date
     *
     * @return \DateTime
     */
    public function getCompanyRegistrationDate()
    {
        return $this->container['company_registration_date'];
    }

    /**
     * Sets company_registration_date
     *
     * @param \DateTime $company_registration_date company_registration_date
     *
     * @return $this
     */
    public function setCompanyRegistrationDate($company_registration_date)
    {
        $this->container['company_registration_date'] = $company_registration_date;

        return $this;
    }

    /**
     * Gets net_worth
     *
     * @return double
     */
    public function getNetWorth()
    {
        return $this->container['net_worth'];
    }

    /**
     * Sets net_worth
     *
     * @param double $net_worth net_worth
     *
     * @return $this
     */
    public function setNetWorth($net_worth)
    {
        $this->container['net_worth'] = $net_worth;

        return $this;
    }

    /**
     * Gets credit_limit
     *
     * @return double
     */
    public function getCreditLimit()
    {
        return $this->container['credit_limit'];
    }

    /**
     * Sets credit_limit
     *
     * @param double $credit_limit credit_limit
     *
     * @return $this
     */
    public function setCreditLimit($credit_limit)
    {
        $this->container['credit_limit'] = $credit_limit;

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
