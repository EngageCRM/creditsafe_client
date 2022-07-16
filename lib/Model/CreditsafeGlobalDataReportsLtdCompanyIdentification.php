<?php
/**
 * CreditsafeGlobalDataReportsLtdCompanyIdentification
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
 * CreditsafeGlobalDataReportsLtdCompanyIdentification Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditsafeGlobalDataReportsLtdCompanyIdentification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Creditsafe.GlobalData.Reports.LtdCompanyIdentification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'basic_information' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsLtdCompanyBasicInformation',
'activity_classifications' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsCompanyActivityList[]',
'previous_names' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsPreviousName[]',
'previous_legal_forms' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsPreviousLegalForm[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'basic_information' => null,
'activity_classifications' => null,
'previous_names' => null,
'previous_legal_forms' => null    ];

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
        'basic_information' => 'basicInformation',
'activity_classifications' => 'activityClassifications',
'previous_names' => 'previousNames',
'previous_legal_forms' => 'previousLegalForms'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'basic_information' => 'setBasicInformation',
'activity_classifications' => 'setActivityClassifications',
'previous_names' => 'setPreviousNames',
'previous_legal_forms' => 'setPreviousLegalForms'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'basic_information' => 'getBasicInformation',
'activity_classifications' => 'getActivityClassifications',
'previous_names' => 'getPreviousNames',
'previous_legal_forms' => 'getPreviousLegalForms'    ];

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
        $this->container['basic_information'] = isset($data['basic_information']) ? $data['basic_information'] : null;
        $this->container['activity_classifications'] = isset($data['activity_classifications']) ? $data['activity_classifications'] : null;
        $this->container['previous_names'] = isset($data['previous_names']) ? $data['previous_names'] : null;
        $this->container['previous_legal_forms'] = isset($data['previous_legal_forms']) ? $data['previous_legal_forms'] : null;
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
     * Gets basic_information
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsLtdCompanyBasicInformation
     */
    public function getBasicInformation()
    {
        return $this->container['basic_information'];
    }

    /**
     * Sets basic_information
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsLtdCompanyBasicInformation $basic_information basic_information
     *
     * @return $this
     */
    public function setBasicInformation($basic_information)
    {
        $this->container['basic_information'] = $basic_information;

        return $this;
    }

    /**
     * Gets activity_classifications
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsCompanyActivityList[]
     */
    public function getActivityClassifications()
    {
        return $this->container['activity_classifications'];
    }

    /**
     * Sets activity_classifications
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsCompanyActivityList[] $activity_classifications activity_classifications
     *
     * @return $this
     */
    public function setActivityClassifications($activity_classifications)
    {
        $this->container['activity_classifications'] = $activity_classifications;

        return $this;
    }

    /**
     * Gets previous_names
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsPreviousName[]
     */
    public function getPreviousNames()
    {
        return $this->container['previous_names'];
    }

    /**
     * Sets previous_names
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsPreviousName[] $previous_names previous_names
     *
     * @return $this
     */
    public function setPreviousNames($previous_names)
    {
        $this->container['previous_names'] = $previous_names;

        return $this;
    }

    /**
     * Gets previous_legal_forms
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsPreviousLegalForm[]
     */
    public function getPreviousLegalForms()
    {
        return $this->container['previous_legal_forms'];
    }

    /**
     * Sets previous_legal_forms
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsPreviousLegalForm[] $previous_legal_forms previous_legal_forms
     *
     * @return $this
     */
    public function setPreviousLegalForms($previous_legal_forms)
    {
        $this->container['previous_legal_forms'] = $previous_legal_forms;

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
