<?php
/**
 * CreditsafeGlobalDataReportsDirectorship
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
 * CreditsafeGlobalDataReportsDirectorship Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditsafeGlobalDataReportsDirectorship implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Creditsafe.GlobalData.Reports.Directorship';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'title' => 'string',
'initials' => 'string',
'name' => 'string',
'position' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsCorporatePositionResigned',
'registration_number' => 'string',
'company_name' => 'string',
'status' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsCompanyStatusDescription'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'title' => null,
'initials' => null,
'name' => null,
'position' => null,
'registration_number' => null,
'company_name' => null,
'status' => null    ];

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
        'id' => 'id',
'title' => 'title',
'initials' => 'initials',
'name' => 'name',
'position' => 'position',
'registration_number' => 'registrationNumber',
'company_name' => 'companyName',
'status' => 'status'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'title' => 'setTitle',
'initials' => 'setInitials',
'name' => 'setName',
'position' => 'setPosition',
'registration_number' => 'setRegistrationNumber',
'company_name' => 'setCompanyName',
'status' => 'setStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'title' => 'getTitle',
'initials' => 'getInitials',
'name' => 'getName',
'position' => 'getPosition',
'registration_number' => 'getRegistrationNumber',
'company_name' => 'getCompanyName',
'status' => 'getStatus'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['initials'] = isset($data['initials']) ? $data['initials'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['registration_number'] = isset($data['registration_number']) ? $data['registration_number'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets initials
     *
     * @return string
     */
    public function getInitials()
    {
        return $this->container['initials'];
    }

    /**
     * Sets initials
     *
     * @param string $initials initials
     *
     * @return $this
     */
    public function setInitials($initials)
    {
        $this->container['initials'] = $initials;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets position
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsCorporatePositionResigned
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsCorporatePositionResigned $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets registration_number
     *
     * @return string
     */
    public function getRegistrationNumber()
    {
        return $this->container['registration_number'];
    }

    /**
     * Sets registration_number
     *
     * @param string $registration_number registration_number
     *
     * @return $this
     */
    public function setRegistrationNumber($registration_number)
    {
        $this->container['registration_number'] = $registration_number;

        return $this;
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
     * Gets status
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsCompanyStatusDescription
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsCompanyStatusDescription $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
