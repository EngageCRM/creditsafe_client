<?php
/**
 * CreditsafeGlobalDataReportsCorporatePosition
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
 * CreditsafeGlobalDataReportsCorporatePosition Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditsafeGlobalDataReportsCorporatePosition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Creditsafe.GlobalData.Reports.CorporatePosition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_appointed' => '\DateTime',
'common_code' => 'string',
'provider_code' => 'string',
'position_name' => 'string',
'authority' => 'string',
'appt_duration_type' => 'string',
'additional_data' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsCorporatePositionAdditionalData'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_appointed' => 'date-time',
'common_code' => null,
'provider_code' => null,
'position_name' => null,
'authority' => null,
'appt_duration_type' => null,
'additional_data' => null    ];

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
        'date_appointed' => 'dateAppointed',
'common_code' => 'commonCode',
'provider_code' => 'providerCode',
'position_name' => 'positionName',
'authority' => 'authority',
'appt_duration_type' => 'apptDurationType',
'additional_data' => 'additionalData'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_appointed' => 'setDateAppointed',
'common_code' => 'setCommonCode',
'provider_code' => 'setProviderCode',
'position_name' => 'setPositionName',
'authority' => 'setAuthority',
'appt_duration_type' => 'setApptDurationType',
'additional_data' => 'setAdditionalData'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_appointed' => 'getDateAppointed',
'common_code' => 'getCommonCode',
'provider_code' => 'getProviderCode',
'position_name' => 'getPositionName',
'authority' => 'getAuthority',
'appt_duration_type' => 'getApptDurationType',
'additional_data' => 'getAdditionalData'    ];

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
        $this->container['date_appointed'] = isset($data['date_appointed']) ? $data['date_appointed'] : null;
        $this->container['common_code'] = isset($data['common_code']) ? $data['common_code'] : null;
        $this->container['provider_code'] = isset($data['provider_code']) ? $data['provider_code'] : null;
        $this->container['position_name'] = isset($data['position_name']) ? $data['position_name'] : null;
        $this->container['authority'] = isset($data['authority']) ? $data['authority'] : null;
        $this->container['appt_duration_type'] = isset($data['appt_duration_type']) ? $data['appt_duration_type'] : null;
        $this->container['additional_data'] = isset($data['additional_data']) ? $data['additional_data'] : null;
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
     * Gets date_appointed
     *
     * @return \DateTime
     */
    public function getDateAppointed()
    {
        return $this->container['date_appointed'];
    }

    /**
     * Sets date_appointed
     *
     * @param \DateTime $date_appointed date_appointed
     *
     * @return $this
     */
    public function setDateAppointed($date_appointed)
    {
        $this->container['date_appointed'] = $date_appointed;

        return $this;
    }

    /**
     * Gets common_code
     *
     * @return string
     */
    public function getCommonCode()
    {
        return $this->container['common_code'];
    }

    /**
     * Sets common_code
     *
     * @param string $common_code common_code
     *
     * @return $this
     */
    public function setCommonCode($common_code)
    {
        $this->container['common_code'] = $common_code;

        return $this;
    }

    /**
     * Gets provider_code
     *
     * @return string
     */
    public function getProviderCode()
    {
        return $this->container['provider_code'];
    }

    /**
     * Sets provider_code
     *
     * @param string $provider_code provider_code
     *
     * @return $this
     */
    public function setProviderCode($provider_code)
    {
        $this->container['provider_code'] = $provider_code;

        return $this;
    }

    /**
     * Gets position_name
     *
     * @return string
     */
    public function getPositionName()
    {
        return $this->container['position_name'];
    }

    /**
     * Sets position_name
     *
     * @param string $position_name position_name
     *
     * @return $this
     */
    public function setPositionName($position_name)
    {
        $this->container['position_name'] = $position_name;

        return $this;
    }

    /**
     * Gets authority
     *
     * @return string
     */
    public function getAuthority()
    {
        return $this->container['authority'];
    }

    /**
     * Sets authority
     *
     * @param string $authority authority
     *
     * @return $this
     */
    public function setAuthority($authority)
    {
        $this->container['authority'] = $authority;

        return $this;
    }

    /**
     * Gets appt_duration_type
     *
     * @return string
     */
    public function getApptDurationType()
    {
        return $this->container['appt_duration_type'];
    }

    /**
     * Sets appt_duration_type
     *
     * @param string $appt_duration_type appt_duration_type
     *
     * @return $this
     */
    public function setApptDurationType($appt_duration_type)
    {
        $this->container['appt_duration_type'] = $appt_duration_type;

        return $this;
    }

    /**
     * Gets additional_data
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsCorporatePositionAdditionalData
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsCorporatePositionAdditionalData $additional_data additional_data
     *
     * @return $this
     */
    public function setAdditionalData($additional_data)
    {
        $this->container['additional_data'] = $additional_data;

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
