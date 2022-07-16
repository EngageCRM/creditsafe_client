<?php
/**
 * CreditsafeGlobalDataServicesDEDataServiceModelShareholderShareholding
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
 * CreditsafeGlobalDataServicesDEDataServiceModelShareholderShareholding Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditsafeGlobalDataServicesDEDataServiceModelShareholderShareholding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Creditsafe.GlobalData.Services.DEDataService.Model.Shareholder.Shareholding';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'id_type' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsIdType',
'company_name' => 'string',
'company_number' => 'string',
'company_registration_number' => 'string',
'address' => '\Swagger\Client\Model\CreditsafeGlobalDataAddressData',
'status' => '\Swagger\Client\Model\CreditsafeGlobalDataCompanyStatus',
'company_registration_date' => '\DateTime',
'latest_turnover_figure' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsFinancialValue1SystemDecimal',
'net_worth' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsFinancialValue1SystemDecimal',
'legal_count' => 'int',
'legal_amount' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsFinancialValue1SystemDecimal',
'legal_count_in_last12_months' => 'int',
'credit_score' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsLtdCreditScore',
'dbt' => 'double',
'gearing' => 'double',
'share' => 'double',
'shareholder_structure' => '\Swagger\Client\Model\CreditsafeGlobalDataServicesDEDataServiceModelShareholderShareholderStructure',
'additional_data' => '\Swagger\Client\Model\CreditsafeGlobalDataServicesDEDataServiceModelShareholderShareholdingAdditionalData'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'id_type' => null,
'company_name' => null,
'company_number' => null,
'company_registration_number' => null,
'address' => null,
'status' => null,
'company_registration_date' => 'date-time',
'latest_turnover_figure' => null,
'net_worth' => null,
'legal_count' => 'int32',
'legal_amount' => null,
'legal_count_in_last12_months' => 'int32',
'credit_score' => null,
'dbt' => 'double',
'gearing' => 'double',
'share' => 'double',
'shareholder_structure' => null,
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
        'id' => 'id',
'id_type' => 'idType',
'company_name' => 'companyName',
'company_number' => 'companyNumber',
'company_registration_number' => 'companyRegistrationNumber',
'address' => 'address',
'status' => 'status',
'company_registration_date' => 'companyRegistrationDate',
'latest_turnover_figure' => 'latestTurnoverFigure',
'net_worth' => 'netWorth',
'legal_count' => 'legalCount',
'legal_amount' => 'legalAmount',
'legal_count_in_last12_months' => 'legalCountInLast12Months',
'credit_score' => 'creditScore',
'dbt' => 'dbt',
'gearing' => 'gearing',
'share' => 'share',
'shareholder_structure' => 'shareholderStructure',
'additional_data' => 'additionalData'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'id_type' => 'setIdType',
'company_name' => 'setCompanyName',
'company_number' => 'setCompanyNumber',
'company_registration_number' => 'setCompanyRegistrationNumber',
'address' => 'setAddress',
'status' => 'setStatus',
'company_registration_date' => 'setCompanyRegistrationDate',
'latest_turnover_figure' => 'setLatestTurnoverFigure',
'net_worth' => 'setNetWorth',
'legal_count' => 'setLegalCount',
'legal_amount' => 'setLegalAmount',
'legal_count_in_last12_months' => 'setLegalCountInLast12Months',
'credit_score' => 'setCreditScore',
'dbt' => 'setDbt',
'gearing' => 'setGearing',
'share' => 'setShare',
'shareholder_structure' => 'setShareholderStructure',
'additional_data' => 'setAdditionalData'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'id_type' => 'getIdType',
'company_name' => 'getCompanyName',
'company_number' => 'getCompanyNumber',
'company_registration_number' => 'getCompanyRegistrationNumber',
'address' => 'getAddress',
'status' => 'getStatus',
'company_registration_date' => 'getCompanyRegistrationDate',
'latest_turnover_figure' => 'getLatestTurnoverFigure',
'net_worth' => 'getNetWorth',
'legal_count' => 'getLegalCount',
'legal_amount' => 'getLegalAmount',
'legal_count_in_last12_months' => 'getLegalCountInLast12Months',
'credit_score' => 'getCreditScore',
'dbt' => 'getDbt',
'gearing' => 'getGearing',
'share' => 'getShare',
'shareholder_structure' => 'getShareholderStructure',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['id_type'] = isset($data['id_type']) ? $data['id_type'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['company_number'] = isset($data['company_number']) ? $data['company_number'] : null;
        $this->container['company_registration_number'] = isset($data['company_registration_number']) ? $data['company_registration_number'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['company_registration_date'] = isset($data['company_registration_date']) ? $data['company_registration_date'] : null;
        $this->container['latest_turnover_figure'] = isset($data['latest_turnover_figure']) ? $data['latest_turnover_figure'] : null;
        $this->container['net_worth'] = isset($data['net_worth']) ? $data['net_worth'] : null;
        $this->container['legal_count'] = isset($data['legal_count']) ? $data['legal_count'] : null;
        $this->container['legal_amount'] = isset($data['legal_amount']) ? $data['legal_amount'] : null;
        $this->container['legal_count_in_last12_months'] = isset($data['legal_count_in_last12_months']) ? $data['legal_count_in_last12_months'] : null;
        $this->container['credit_score'] = isset($data['credit_score']) ? $data['credit_score'] : null;
        $this->container['dbt'] = isset($data['dbt']) ? $data['dbt'] : null;
        $this->container['gearing'] = isset($data['gearing']) ? $data['gearing'] : null;
        $this->container['share'] = isset($data['share']) ? $data['share'] : null;
        $this->container['shareholder_structure'] = isset($data['shareholder_structure']) ? $data['shareholder_structure'] : null;
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
     * Gets id_type
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsIdType
     */
    public function getIdType()
    {
        return $this->container['id_type'];
    }

    /**
     * Sets id_type
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsIdType $id_type id_type
     *
     * @return $this
     */
    public function setIdType($id_type)
    {
        $this->container['id_type'] = $id_type;

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
     * Gets address
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataAddressData
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataAddressData $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataCompanyStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataCompanyStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Gets net_worth
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsFinancialValue1SystemDecimal
     */
    public function getNetWorth()
    {
        return $this->container['net_worth'];
    }

    /**
     * Sets net_worth
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsFinancialValue1SystemDecimal $net_worth net_worth
     *
     * @return $this
     */
    public function setNetWorth($net_worth)
    {
        $this->container['net_worth'] = $net_worth;

        return $this;
    }

    /**
     * Gets legal_count
     *
     * @return int
     */
    public function getLegalCount()
    {
        return $this->container['legal_count'];
    }

    /**
     * Sets legal_count
     *
     * @param int $legal_count legal_count
     *
     * @return $this
     */
    public function setLegalCount($legal_count)
    {
        $this->container['legal_count'] = $legal_count;

        return $this;
    }

    /**
     * Gets legal_amount
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsFinancialValue1SystemDecimal
     */
    public function getLegalAmount()
    {
        return $this->container['legal_amount'];
    }

    /**
     * Sets legal_amount
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsFinancialValue1SystemDecimal $legal_amount legal_amount
     *
     * @return $this
     */
    public function setLegalAmount($legal_amount)
    {
        $this->container['legal_amount'] = $legal_amount;

        return $this;
    }

    /**
     * Gets legal_count_in_last12_months
     *
     * @return int
     */
    public function getLegalCountInLast12Months()
    {
        return $this->container['legal_count_in_last12_months'];
    }

    /**
     * Sets legal_count_in_last12_months
     *
     * @param int $legal_count_in_last12_months legal_count_in_last12_months
     *
     * @return $this
     */
    public function setLegalCountInLast12Months($legal_count_in_last12_months)
    {
        $this->container['legal_count_in_last12_months'] = $legal_count_in_last12_months;

        return $this;
    }

    /**
     * Gets credit_score
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsLtdCreditScore
     */
    public function getCreditScore()
    {
        return $this->container['credit_score'];
    }

    /**
     * Sets credit_score
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsLtdCreditScore $credit_score credit_score
     *
     * @return $this
     */
    public function setCreditScore($credit_score)
    {
        $this->container['credit_score'] = $credit_score;

        return $this;
    }

    /**
     * Gets dbt
     *
     * @return double
     */
    public function getDbt()
    {
        return $this->container['dbt'];
    }

    /**
     * Sets dbt
     *
     * @param double $dbt dbt
     *
     * @return $this
     */
    public function setDbt($dbt)
    {
        $this->container['dbt'] = $dbt;

        return $this;
    }

    /**
     * Gets gearing
     *
     * @return double
     */
    public function getGearing()
    {
        return $this->container['gearing'];
    }

    /**
     * Sets gearing
     *
     * @param double $gearing gearing
     *
     * @return $this
     */
    public function setGearing($gearing)
    {
        $this->container['gearing'] = $gearing;

        return $this;
    }

    /**
     * Gets share
     *
     * @return double
     */
    public function getShare()
    {
        return $this->container['share'];
    }

    /**
     * Sets share
     *
     * @param double $share share
     *
     * @return $this
     */
    public function setShare($share)
    {
        $this->container['share'] = $share;

        return $this;
    }

    /**
     * Gets shareholder_structure
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataServicesDEDataServiceModelShareholderShareholderStructure
     */
    public function getShareholderStructure()
    {
        return $this->container['shareholder_structure'];
    }

    /**
     * Sets shareholder_structure
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataServicesDEDataServiceModelShareholderShareholderStructure $shareholder_structure shareholder_structure
     *
     * @return $this
     */
    public function setShareholderStructure($shareholder_structure)
    {
        $this->container['shareholder_structure'] = $shareholder_structure;

        return $this;
    }

    /**
     * Gets additional_data
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataServicesDEDataServiceModelShareholderShareholdingAdditionalData
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataServicesDEDataServiceModelShareholderShareholdingAdditionalData $additional_data additional_data
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
