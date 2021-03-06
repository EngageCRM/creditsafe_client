<?php
/**
 * ConnectIdentityDemographicsShareholderComposition
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
 * ConnectIdentityDemographicsShareholderComposition Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConnectIdentityDemographicsShareholderComposition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Connect.Identity.DemographicsShareholderComposition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'average_investments' => 'string',
'average_investments_description' => 'string',
'average_investments_label' => 'string',
'average_shareholders' => 'string',
'average_shareholders_description' => 'string',
'average_shareholders_label' => 'string',
'average_shares' => 'string',
'average_shares_description' => 'string',
'average_shares_label' => 'string',
'average_value' => 'string',
'average_value_description' => 'string',
'average_value_label' => 'string',
'proportion_of_households_with_shares' => 'string',
'proportion_of_households_with_shares_description' => 'string',
'proportion_of_households_with_shares_label' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'average_investments' => null,
'average_investments_description' => null,
'average_investments_label' => null,
'average_shareholders' => null,
'average_shareholders_description' => null,
'average_shareholders_label' => null,
'average_shares' => null,
'average_shares_description' => null,
'average_shares_label' => null,
'average_value' => null,
'average_value_description' => null,
'average_value_label' => null,
'proportion_of_households_with_shares' => null,
'proportion_of_households_with_shares_description' => null,
'proportion_of_households_with_shares_label' => null    ];

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
        'average_investments' => 'averageInvestments',
'average_investments_description' => 'averageInvestmentsDescription',
'average_investments_label' => 'averageInvestmentsLabel',
'average_shareholders' => 'averageShareholders',
'average_shareholders_description' => 'averageShareholdersDescription',
'average_shareholders_label' => 'averageShareholdersLabel',
'average_shares' => 'averageShares',
'average_shares_description' => 'averageSharesDescription',
'average_shares_label' => 'averageSharesLabel',
'average_value' => 'averageValue',
'average_value_description' => 'averageValueDescription',
'average_value_label' => 'averageValueLabel',
'proportion_of_households_with_shares' => 'proportionOfHouseholdsWithShares',
'proportion_of_households_with_shares_description' => 'proportionOfHouseholdsWithSharesDescription',
'proportion_of_households_with_shares_label' => 'proportionOfHouseholdsWithSharesLabel'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'average_investments' => 'setAverageInvestments',
'average_investments_description' => 'setAverageInvestmentsDescription',
'average_investments_label' => 'setAverageInvestmentsLabel',
'average_shareholders' => 'setAverageShareholders',
'average_shareholders_description' => 'setAverageShareholdersDescription',
'average_shareholders_label' => 'setAverageShareholdersLabel',
'average_shares' => 'setAverageShares',
'average_shares_description' => 'setAverageSharesDescription',
'average_shares_label' => 'setAverageSharesLabel',
'average_value' => 'setAverageValue',
'average_value_description' => 'setAverageValueDescription',
'average_value_label' => 'setAverageValueLabel',
'proportion_of_households_with_shares' => 'setProportionOfHouseholdsWithShares',
'proportion_of_households_with_shares_description' => 'setProportionOfHouseholdsWithSharesDescription',
'proportion_of_households_with_shares_label' => 'setProportionOfHouseholdsWithSharesLabel'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'average_investments' => 'getAverageInvestments',
'average_investments_description' => 'getAverageInvestmentsDescription',
'average_investments_label' => 'getAverageInvestmentsLabel',
'average_shareholders' => 'getAverageShareholders',
'average_shareholders_description' => 'getAverageShareholdersDescription',
'average_shareholders_label' => 'getAverageShareholdersLabel',
'average_shares' => 'getAverageShares',
'average_shares_description' => 'getAverageSharesDescription',
'average_shares_label' => 'getAverageSharesLabel',
'average_value' => 'getAverageValue',
'average_value_description' => 'getAverageValueDescription',
'average_value_label' => 'getAverageValueLabel',
'proportion_of_households_with_shares' => 'getProportionOfHouseholdsWithShares',
'proportion_of_households_with_shares_description' => 'getProportionOfHouseholdsWithSharesDescription',
'proportion_of_households_with_shares_label' => 'getProportionOfHouseholdsWithSharesLabel'    ];

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
        $this->container['average_investments'] = isset($data['average_investments']) ? $data['average_investments'] : null;
        $this->container['average_investments_description'] = isset($data['average_investments_description']) ? $data['average_investments_description'] : null;
        $this->container['average_investments_label'] = isset($data['average_investments_label']) ? $data['average_investments_label'] : null;
        $this->container['average_shareholders'] = isset($data['average_shareholders']) ? $data['average_shareholders'] : null;
        $this->container['average_shareholders_description'] = isset($data['average_shareholders_description']) ? $data['average_shareholders_description'] : null;
        $this->container['average_shareholders_label'] = isset($data['average_shareholders_label']) ? $data['average_shareholders_label'] : null;
        $this->container['average_shares'] = isset($data['average_shares']) ? $data['average_shares'] : null;
        $this->container['average_shares_description'] = isset($data['average_shares_description']) ? $data['average_shares_description'] : null;
        $this->container['average_shares_label'] = isset($data['average_shares_label']) ? $data['average_shares_label'] : null;
        $this->container['average_value'] = isset($data['average_value']) ? $data['average_value'] : null;
        $this->container['average_value_description'] = isset($data['average_value_description']) ? $data['average_value_description'] : null;
        $this->container['average_value_label'] = isset($data['average_value_label']) ? $data['average_value_label'] : null;
        $this->container['proportion_of_households_with_shares'] = isset($data['proportion_of_households_with_shares']) ? $data['proportion_of_households_with_shares'] : null;
        $this->container['proportion_of_households_with_shares_description'] = isset($data['proportion_of_households_with_shares_description']) ? $data['proportion_of_households_with_shares_description'] : null;
        $this->container['proportion_of_households_with_shares_label'] = isset($data['proportion_of_households_with_shares_label']) ? $data['proportion_of_households_with_shares_label'] : null;
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
     * Gets average_investments
     *
     * @return string
     */
    public function getAverageInvestments()
    {
        return $this->container['average_investments'];
    }

    /**
     * Sets average_investments
     *
     * @param string $average_investments average_investments
     *
     * @return $this
     */
    public function setAverageInvestments($average_investments)
    {
        $this->container['average_investments'] = $average_investments;

        return $this;
    }

    /**
     * Gets average_investments_description
     *
     * @return string
     */
    public function getAverageInvestmentsDescription()
    {
        return $this->container['average_investments_description'];
    }

    /**
     * Sets average_investments_description
     *
     * @param string $average_investments_description average_investments_description
     *
     * @return $this
     */
    public function setAverageInvestmentsDescription($average_investments_description)
    {
        $this->container['average_investments_description'] = $average_investments_description;

        return $this;
    }

    /**
     * Gets average_investments_label
     *
     * @return string
     */
    public function getAverageInvestmentsLabel()
    {
        return $this->container['average_investments_label'];
    }

    /**
     * Sets average_investments_label
     *
     * @param string $average_investments_label average_investments_label
     *
     * @return $this
     */
    public function setAverageInvestmentsLabel($average_investments_label)
    {
        $this->container['average_investments_label'] = $average_investments_label;

        return $this;
    }

    /**
     * Gets average_shareholders
     *
     * @return string
     */
    public function getAverageShareholders()
    {
        return $this->container['average_shareholders'];
    }

    /**
     * Sets average_shareholders
     *
     * @param string $average_shareholders average_shareholders
     *
     * @return $this
     */
    public function setAverageShareholders($average_shareholders)
    {
        $this->container['average_shareholders'] = $average_shareholders;

        return $this;
    }

    /**
     * Gets average_shareholders_description
     *
     * @return string
     */
    public function getAverageShareholdersDescription()
    {
        return $this->container['average_shareholders_description'];
    }

    /**
     * Sets average_shareholders_description
     *
     * @param string $average_shareholders_description average_shareholders_description
     *
     * @return $this
     */
    public function setAverageShareholdersDescription($average_shareholders_description)
    {
        $this->container['average_shareholders_description'] = $average_shareholders_description;

        return $this;
    }

    /**
     * Gets average_shareholders_label
     *
     * @return string
     */
    public function getAverageShareholdersLabel()
    {
        return $this->container['average_shareholders_label'];
    }

    /**
     * Sets average_shareholders_label
     *
     * @param string $average_shareholders_label average_shareholders_label
     *
     * @return $this
     */
    public function setAverageShareholdersLabel($average_shareholders_label)
    {
        $this->container['average_shareholders_label'] = $average_shareholders_label;

        return $this;
    }

    /**
     * Gets average_shares
     *
     * @return string
     */
    public function getAverageShares()
    {
        return $this->container['average_shares'];
    }

    /**
     * Sets average_shares
     *
     * @param string $average_shares average_shares
     *
     * @return $this
     */
    public function setAverageShares($average_shares)
    {
        $this->container['average_shares'] = $average_shares;

        return $this;
    }

    /**
     * Gets average_shares_description
     *
     * @return string
     */
    public function getAverageSharesDescription()
    {
        return $this->container['average_shares_description'];
    }

    /**
     * Sets average_shares_description
     *
     * @param string $average_shares_description average_shares_description
     *
     * @return $this
     */
    public function setAverageSharesDescription($average_shares_description)
    {
        $this->container['average_shares_description'] = $average_shares_description;

        return $this;
    }

    /**
     * Gets average_shares_label
     *
     * @return string
     */
    public function getAverageSharesLabel()
    {
        return $this->container['average_shares_label'];
    }

    /**
     * Sets average_shares_label
     *
     * @param string $average_shares_label average_shares_label
     *
     * @return $this
     */
    public function setAverageSharesLabel($average_shares_label)
    {
        $this->container['average_shares_label'] = $average_shares_label;

        return $this;
    }

    /**
     * Gets average_value
     *
     * @return string
     */
    public function getAverageValue()
    {
        return $this->container['average_value'];
    }

    /**
     * Sets average_value
     *
     * @param string $average_value average_value
     *
     * @return $this
     */
    public function setAverageValue($average_value)
    {
        $this->container['average_value'] = $average_value;

        return $this;
    }

    /**
     * Gets average_value_description
     *
     * @return string
     */
    public function getAverageValueDescription()
    {
        return $this->container['average_value_description'];
    }

    /**
     * Sets average_value_description
     *
     * @param string $average_value_description average_value_description
     *
     * @return $this
     */
    public function setAverageValueDescription($average_value_description)
    {
        $this->container['average_value_description'] = $average_value_description;

        return $this;
    }

    /**
     * Gets average_value_label
     *
     * @return string
     */
    public function getAverageValueLabel()
    {
        return $this->container['average_value_label'];
    }

    /**
     * Sets average_value_label
     *
     * @param string $average_value_label average_value_label
     *
     * @return $this
     */
    public function setAverageValueLabel($average_value_label)
    {
        $this->container['average_value_label'] = $average_value_label;

        return $this;
    }

    /**
     * Gets proportion_of_households_with_shares
     *
     * @return string
     */
    public function getProportionOfHouseholdsWithShares()
    {
        return $this->container['proportion_of_households_with_shares'];
    }

    /**
     * Sets proportion_of_households_with_shares
     *
     * @param string $proportion_of_households_with_shares proportion_of_households_with_shares
     *
     * @return $this
     */
    public function setProportionOfHouseholdsWithShares($proportion_of_households_with_shares)
    {
        $this->container['proportion_of_households_with_shares'] = $proportion_of_households_with_shares;

        return $this;
    }

    /**
     * Gets proportion_of_households_with_shares_description
     *
     * @return string
     */
    public function getProportionOfHouseholdsWithSharesDescription()
    {
        return $this->container['proportion_of_households_with_shares_description'];
    }

    /**
     * Sets proportion_of_households_with_shares_description
     *
     * @param string $proportion_of_households_with_shares_description proportion_of_households_with_shares_description
     *
     * @return $this
     */
    public function setProportionOfHouseholdsWithSharesDescription($proportion_of_households_with_shares_description)
    {
        $this->container['proportion_of_households_with_shares_description'] = $proportion_of_households_with_shares_description;

        return $this;
    }

    /**
     * Gets proportion_of_households_with_shares_label
     *
     * @return string
     */
    public function getProportionOfHouseholdsWithSharesLabel()
    {
        return $this->container['proportion_of_households_with_shares_label'];
    }

    /**
     * Sets proportion_of_households_with_shares_label
     *
     * @param string $proportion_of_households_with_shares_label proportion_of_households_with_shares_label
     *
     * @return $this
     */
    public function setProportionOfHouseholdsWithSharesLabel($proportion_of_households_with_shares_label)
    {
        $this->container['proportion_of_households_with_shares_label'] = $proportion_of_households_with_shares_label;

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
