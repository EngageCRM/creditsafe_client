<?php
/**
 * CreditsafeGlobalDataReportsConsumerConsumerReport
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
 * CreditsafeGlobalDataReportsConsumerConsumerReport Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditsafeGlobalDataReportsConsumerConsumerReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Creditsafe.GlobalData.Reports.Consumer.ConsumerReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consumer_information' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerInformation',
'incomes' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerIncome[]',
'registered_property' => 'int',
'registered_housing_share' => 'int',
'directorships' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerDirectorship[]',
'payment_remarks' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerPaymentSummary[]',
'payment_remarks_details' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerRemarkOfPayment[]',
'voluntary_pledges' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerRemarkOfPayment[]',
'consumer_rating' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerCreditScore',
'additional_information' => '\Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerAdditionalInformation'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'consumer_information' => null,
'incomes' => null,
'registered_property' => 'int32',
'registered_housing_share' => 'int32',
'directorships' => null,
'payment_remarks' => null,
'payment_remarks_details' => null,
'voluntary_pledges' => null,
'consumer_rating' => null,
'additional_information' => null    ];

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
        'consumer_information' => 'consumerInformation',
'incomes' => 'incomes',
'registered_property' => 'registeredProperty',
'registered_housing_share' => 'registeredHousingShare',
'directorships' => 'directorships',
'payment_remarks' => 'paymentRemarks',
'payment_remarks_details' => 'paymentRemarksDetails',
'voluntary_pledges' => 'voluntaryPledges',
'consumer_rating' => 'consumerRating',
'additional_information' => 'additionalInformation'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consumer_information' => 'setConsumerInformation',
'incomes' => 'setIncomes',
'registered_property' => 'setRegisteredProperty',
'registered_housing_share' => 'setRegisteredHousingShare',
'directorships' => 'setDirectorships',
'payment_remarks' => 'setPaymentRemarks',
'payment_remarks_details' => 'setPaymentRemarksDetails',
'voluntary_pledges' => 'setVoluntaryPledges',
'consumer_rating' => 'setConsumerRating',
'additional_information' => 'setAdditionalInformation'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consumer_information' => 'getConsumerInformation',
'incomes' => 'getIncomes',
'registered_property' => 'getRegisteredProperty',
'registered_housing_share' => 'getRegisteredHousingShare',
'directorships' => 'getDirectorships',
'payment_remarks' => 'getPaymentRemarks',
'payment_remarks_details' => 'getPaymentRemarksDetails',
'voluntary_pledges' => 'getVoluntaryPledges',
'consumer_rating' => 'getConsumerRating',
'additional_information' => 'getAdditionalInformation'    ];

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
        $this->container['consumer_information'] = isset($data['consumer_information']) ? $data['consumer_information'] : null;
        $this->container['incomes'] = isset($data['incomes']) ? $data['incomes'] : null;
        $this->container['registered_property'] = isset($data['registered_property']) ? $data['registered_property'] : null;
        $this->container['registered_housing_share'] = isset($data['registered_housing_share']) ? $data['registered_housing_share'] : null;
        $this->container['directorships'] = isset($data['directorships']) ? $data['directorships'] : null;
        $this->container['payment_remarks'] = isset($data['payment_remarks']) ? $data['payment_remarks'] : null;
        $this->container['payment_remarks_details'] = isset($data['payment_remarks_details']) ? $data['payment_remarks_details'] : null;
        $this->container['voluntary_pledges'] = isset($data['voluntary_pledges']) ? $data['voluntary_pledges'] : null;
        $this->container['consumer_rating'] = isset($data['consumer_rating']) ? $data['consumer_rating'] : null;
        $this->container['additional_information'] = isset($data['additional_information']) ? $data['additional_information'] : null;
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
     * Gets consumer_information
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerInformation
     */
    public function getConsumerInformation()
    {
        return $this->container['consumer_information'];
    }

    /**
     * Sets consumer_information
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerInformation $consumer_information consumer_information
     *
     * @return $this
     */
    public function setConsumerInformation($consumer_information)
    {
        $this->container['consumer_information'] = $consumer_information;

        return $this;
    }

    /**
     * Gets incomes
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerIncome[]
     */
    public function getIncomes()
    {
        return $this->container['incomes'];
    }

    /**
     * Sets incomes
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerIncome[] $incomes incomes
     *
     * @return $this
     */
    public function setIncomes($incomes)
    {
        $this->container['incomes'] = $incomes;

        return $this;
    }

    /**
     * Gets registered_property
     *
     * @return int
     */
    public function getRegisteredProperty()
    {
        return $this->container['registered_property'];
    }

    /**
     * Sets registered_property
     *
     * @param int $registered_property registered_property
     *
     * @return $this
     */
    public function setRegisteredProperty($registered_property)
    {
        $this->container['registered_property'] = $registered_property;

        return $this;
    }

    /**
     * Gets registered_housing_share
     *
     * @return int
     */
    public function getRegisteredHousingShare()
    {
        return $this->container['registered_housing_share'];
    }

    /**
     * Sets registered_housing_share
     *
     * @param int $registered_housing_share registered_housing_share
     *
     * @return $this
     */
    public function setRegisteredHousingShare($registered_housing_share)
    {
        $this->container['registered_housing_share'] = $registered_housing_share;

        return $this;
    }

    /**
     * Gets directorships
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerDirectorship[]
     */
    public function getDirectorships()
    {
        return $this->container['directorships'];
    }

    /**
     * Sets directorships
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerDirectorship[] $directorships directorships
     *
     * @return $this
     */
    public function setDirectorships($directorships)
    {
        $this->container['directorships'] = $directorships;

        return $this;
    }

    /**
     * Gets payment_remarks
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerPaymentSummary[]
     */
    public function getPaymentRemarks()
    {
        return $this->container['payment_remarks'];
    }

    /**
     * Sets payment_remarks
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerPaymentSummary[] $payment_remarks payment_remarks
     *
     * @return $this
     */
    public function setPaymentRemarks($payment_remarks)
    {
        $this->container['payment_remarks'] = $payment_remarks;

        return $this;
    }

    /**
     * Gets payment_remarks_details
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerRemarkOfPayment[]
     */
    public function getPaymentRemarksDetails()
    {
        return $this->container['payment_remarks_details'];
    }

    /**
     * Sets payment_remarks_details
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerRemarkOfPayment[] $payment_remarks_details payment_remarks_details
     *
     * @return $this
     */
    public function setPaymentRemarksDetails($payment_remarks_details)
    {
        $this->container['payment_remarks_details'] = $payment_remarks_details;

        return $this;
    }

    /**
     * Gets voluntary_pledges
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerRemarkOfPayment[]
     */
    public function getVoluntaryPledges()
    {
        return $this->container['voluntary_pledges'];
    }

    /**
     * Sets voluntary_pledges
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerRemarkOfPayment[] $voluntary_pledges voluntary_pledges
     *
     * @return $this
     */
    public function setVoluntaryPledges($voluntary_pledges)
    {
        $this->container['voluntary_pledges'] = $voluntary_pledges;

        return $this;
    }

    /**
     * Gets consumer_rating
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerCreditScore
     */
    public function getConsumerRating()
    {
        return $this->container['consumer_rating'];
    }

    /**
     * Sets consumer_rating
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerCreditScore $consumer_rating consumer_rating
     *
     * @return $this
     */
    public function setConsumerRating($consumer_rating)
    {
        $this->container['consumer_rating'] = $consumer_rating;

        return $this;
    }

    /**
     * Gets additional_information
     *
     * @return \Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerAdditionalInformation
     */
    public function getAdditionalInformation()
    {
        return $this->container['additional_information'];
    }

    /**
     * Sets additional_information
     *
     * @param \Swagger\Client\Model\CreditsafeGlobalDataReportsConsumerConsumerAdditionalInformation $additional_information additional_information
     *
     * @return $this
     */
    public function setAdditionalInformation($additional_information)
    {
        $this->container['additional_information'] = $additional_information;

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
