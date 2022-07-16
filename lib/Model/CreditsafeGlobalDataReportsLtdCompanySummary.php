<?php
/**
 * CreditsafeGlobalDataReportsLtdCompanySummary
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
 * CreditsafeGlobalDataReportsLtdCompanySummary Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditsafeGlobalDataReportsLtdCompanySummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Creditsafe.GlobalData.Reports.LtdCompanySummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'business_name' => 'string',
'country' => '\Swagger\Client\Model\CreditsafeGlobalDataCountryCode',
'company_number' => 'string',
'company_registration_number' => 'string',
'main_activity' => '\Swagger\Client\Model\CreditsafeGlobalDataCompanyActivityClassification',
'company_status' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsCompanyStatusDescription',
'latest_turnover_figure' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsFinancialValue1SystemDecimal',
'latest_shareholders_equity_figure' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsFinancialValue1SystemDecimal',
'credit_rating' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsCreditRating'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'business_name' => null,
'country' => null,
'company_number' => null,
'company_registration_number' => null,
'main_activity' => null,
'company_status' => null,
'latest_turnover_figure' => null,
'latest_shareholders_equity_figure' => null,
'credit_rating' => null    ];

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
        'business_name' => 'businessName',
'country' => 'country',
'company_number' => 'companyNumber',
'company_registration_number' => 'companyRegistrationNumber',
'main_activity' => 'mainActivity',
'company_status' => 'companyStatus',
'latest_turnover_figure' => 'latestTurnoverFigure',
'latest_shareholders_equity_figure' => 'latestShareholdersEquityFigure',
'credit_rating' => 'creditRating'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_name' => 'setBusinessName',
'country' => 'setCountry',
'company_number' => 'setCompanyNumber',
'company_registration_number' => 'setCompanyRegistrationNumber',
'main_activity' => 'setMainActivity',
'company_status' => 'setCompanyStatus',
'latest_turnover_figure' => 'setLatestTurnoverFigure',
'latest_shareholders_equity_figure' => 'setLatestShareholdersEquityFigure',
'credit_rating' => 'setCreditRating'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_name' => 'getBusinessName',
'country' => 'getCountry',
'company_number' => 'getCompanyNumber',
'company_registration_number' => 'getCompanyRegistrationNumber',
'main_activity' => 'getMainActivity',
'company_status' => 'getCompanyStatus',
'latest_turnover_figure' => 'getLatestTurnoverFigure',
'latest_shareholders_equity_figure' => 'getLatestShareholdersEquityFigure',
'credit_rating' => 'getCreditRating'    ];

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
        $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['company_number'] = isset($data['company_number']) ? $data['company_number'] : null;
        $this->container['company_registration_number'] = isset($data['company_registration_number']) ? $data['company_registration_number'] : null;
        $this->container['main_activity'] = isset($data['main_activity']) ? $data['main_activity'] : null;
        $this->container['company_status'] = isset($data['company_status']) ? $data['company_status'] : null;
        $this->container['latest_turnover_figure'] = isset($data['latest_turnover_figure']) ? $data['latest_turnover_figure'] : null;
        $this->container['latest_shareholders_equity_figure'] = isset($data['latest_shareholders_equity_figure']) ? $data['latest_shareholders_equity_figure'] : null;
        $this->container['credit_rating'] = isset($data['credit_rating']) ? $data['credit_rating'] : null;
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
     * Gets business_name
     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->container['business_name'];
    }

    /**
     * Sets business_name
     *
     * @param string $business_name business_name
     *
     * @return $this
     */
    public function setBusinessName($business_name)
    {
        $this->container['business_name'] = $business_name;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataCountryCode
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataCountryCode $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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
     * Gets company_registration_number
     *
     * @return string
     */
    public function getCompanyRegistrationNumber()
    {
        return $this->container['company_registration_number'];
    }

    /**
     * Sets company_registration_number
     *
     * @param string $company_registration_number company_registration_number
     *
     * @return $this
     */
    public function setCompanyRegistrationNumber($company_registration_number)
    {
        $this->container['company_registration_number'] = $company_registration_number;

        return $this;
    }

    /**
     * Gets main_activity
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataCompanyActivityClassification
     */
    public function getMainActivity()
    {
        return $this->container['main_activity'];
    }

    /**
     * Sets main_activity
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataCompanyActivityClassification $main_activity main_activity
     *
     * @return $this
     */
    public function setMainActivity($main_activity)
    {
        $this->container['main_activity'] = $main_activity;

        return $this;
    }

    /**
     * Gets company_status
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsCompanyStatusDescription
     */
    public function getCompanyStatus()
    {
        return $this->container['company_status'];
    }

    /**
     * Sets company_status
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsCompanyStatusDescription $company_status company_status
     *
     * @return $this
     */
    public function setCompanyStatus($company_status)
    {
        $this->container['company_status'] = $company_status;

        return $this;
    }

    /**
     * Gets latest_turnover_figure
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsFinancialValue1SystemDecimal
     */
    public function getLatestTurnoverFigure()
    {
        return $this->container['latest_turnover_figure'];
    }

    /**
     * Sets latest_turnover_figure
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsFinancialValue1SystemDecimal $latest_turnover_figure latest_turnover_figure
     *
     * @return $this
     */
    public function setLatestTurnoverFigure($latest_turnover_figure)
    {
        $this->container['latest_turnover_figure'] = $latest_turnover_figure;

        return $this;
    }

    /**
     * Gets latest_shareholders_equity_figure
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsFinancialValue1SystemDecimal
     */
    public function getLatestShareholdersEquityFigure()
    {
        return $this->container['latest_shareholders_equity_figure'];
    }

    /**
     * Sets latest_shareholders_equity_figure
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsFinancialValue1SystemDecimal $latest_shareholders_equity_figure latest_shareholders_equity_figure
     *
     * @return $this
     */
    public function setLatestShareholdersEquityFigure($latest_shareholders_equity_figure)
    {
        $this->container['latest_shareholders_equity_figure'] = $latest_shareholders_equity_figure;

        return $this;
    }

    /**
     * Gets credit_rating
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsCreditRating
     */
    public function getCreditRating()
    {
        return $this->container['credit_rating'];
    }

    /**
     * Sets credit_rating
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsCreditRating $credit_rating credit_rating
     *
     * @return $this
     */
    public function setCreditRating($credit_rating)
    {
        $this->container['credit_rating'] = $credit_rating;

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
