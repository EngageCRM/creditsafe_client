<?php
/**
 * ConnectIdentityDemographicsPropertyComposition
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
 * ConnectIdentityDemographicsPropertyComposition Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConnectIdentityDemographicsPropertyComposition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Connect.Identity.DemographicsPropertyComposition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'average_detached_property_value' => 'string',
'average_detached_property_value_description' => 'string',
'average_flat_property_value' => 'string',
'average_flat_property_value_description_field' => 'string',
'average_house_age' => 'string',
'average_semi_detached_property_value' => 'string',
'average_semi_detached_property_value_description' => 'string',
'average_terrace_property_value' => 'string',
'average_terrace_property_value_description' => 'string',
'council_tax_band' => 'string',
'council_tax_band_description' => 'string',
'household_density' => 'string',
'location_type' => 'string',
'national_average_house_price' => 'string',
'national_average_house_price_above_or_below' => 'string',
'national_average_house_price_difference' => 'string',
'average_flat_property_value_description' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'average_detached_property_value' => null,
'average_detached_property_value_description' => null,
'average_flat_property_value' => null,
'average_flat_property_value_description_field' => null,
'average_house_age' => null,
'average_semi_detached_property_value' => null,
'average_semi_detached_property_value_description' => null,
'average_terrace_property_value' => null,
'average_terrace_property_value_description' => null,
'council_tax_band' => null,
'council_tax_band_description' => null,
'household_density' => null,
'location_type' => null,
'national_average_house_price' => null,
'national_average_house_price_above_or_below' => null,
'national_average_house_price_difference' => null,
'average_flat_property_value_description' => null    ];

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
        'average_detached_property_value' => 'averageDetachedPropertyValue',
'average_detached_property_value_description' => 'averageDetachedPropertyValueDescription',
'average_flat_property_value' => 'averageFlatPropertyValue',
'average_flat_property_value_description_field' => 'averageFlatPropertyValueDescriptionField',
'average_house_age' => 'averageHouseAge',
'average_semi_detached_property_value' => 'averageSemiDetachedPropertyValue',
'average_semi_detached_property_value_description' => 'averageSemiDetachedPropertyValueDescription',
'average_terrace_property_value' => 'averageTerracePropertyValue',
'average_terrace_property_value_description' => 'averageTerracePropertyValueDescription',
'council_tax_band' => 'councilTaxBand',
'council_tax_band_description' => 'councilTaxBandDescription',
'household_density' => 'householdDensity',
'location_type' => 'locationType',
'national_average_house_price' => 'nationalAverageHousePrice',
'national_average_house_price_above_or_below' => 'nationalAverageHousePriceAboveOrBelow',
'national_average_house_price_difference' => 'nationalAverageHousePriceDifference',
'average_flat_property_value_description' => 'averageFlatPropertyValueDescription'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'average_detached_property_value' => 'setAverageDetachedPropertyValue',
'average_detached_property_value_description' => 'setAverageDetachedPropertyValueDescription',
'average_flat_property_value' => 'setAverageFlatPropertyValue',
'average_flat_property_value_description_field' => 'setAverageFlatPropertyValueDescriptionField',
'average_house_age' => 'setAverageHouseAge',
'average_semi_detached_property_value' => 'setAverageSemiDetachedPropertyValue',
'average_semi_detached_property_value_description' => 'setAverageSemiDetachedPropertyValueDescription',
'average_terrace_property_value' => 'setAverageTerracePropertyValue',
'average_terrace_property_value_description' => 'setAverageTerracePropertyValueDescription',
'council_tax_band' => 'setCouncilTaxBand',
'council_tax_band_description' => 'setCouncilTaxBandDescription',
'household_density' => 'setHouseholdDensity',
'location_type' => 'setLocationType',
'national_average_house_price' => 'setNationalAverageHousePrice',
'national_average_house_price_above_or_below' => 'setNationalAverageHousePriceAboveOrBelow',
'national_average_house_price_difference' => 'setNationalAverageHousePriceDifference',
'average_flat_property_value_description' => 'setAverageFlatPropertyValueDescription'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'average_detached_property_value' => 'getAverageDetachedPropertyValue',
'average_detached_property_value_description' => 'getAverageDetachedPropertyValueDescription',
'average_flat_property_value' => 'getAverageFlatPropertyValue',
'average_flat_property_value_description_field' => 'getAverageFlatPropertyValueDescriptionField',
'average_house_age' => 'getAverageHouseAge',
'average_semi_detached_property_value' => 'getAverageSemiDetachedPropertyValue',
'average_semi_detached_property_value_description' => 'getAverageSemiDetachedPropertyValueDescription',
'average_terrace_property_value' => 'getAverageTerracePropertyValue',
'average_terrace_property_value_description' => 'getAverageTerracePropertyValueDescription',
'council_tax_band' => 'getCouncilTaxBand',
'council_tax_band_description' => 'getCouncilTaxBandDescription',
'household_density' => 'getHouseholdDensity',
'location_type' => 'getLocationType',
'national_average_house_price' => 'getNationalAverageHousePrice',
'national_average_house_price_above_or_below' => 'getNationalAverageHousePriceAboveOrBelow',
'national_average_house_price_difference' => 'getNationalAverageHousePriceDifference',
'average_flat_property_value_description' => 'getAverageFlatPropertyValueDescription'    ];

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
        $this->container['average_detached_property_value'] = isset($data['average_detached_property_value']) ? $data['average_detached_property_value'] : null;
        $this->container['average_detached_property_value_description'] = isset($data['average_detached_property_value_description']) ? $data['average_detached_property_value_description'] : null;
        $this->container['average_flat_property_value'] = isset($data['average_flat_property_value']) ? $data['average_flat_property_value'] : null;
        $this->container['average_flat_property_value_description_field'] = isset($data['average_flat_property_value_description_field']) ? $data['average_flat_property_value_description_field'] : null;
        $this->container['average_house_age'] = isset($data['average_house_age']) ? $data['average_house_age'] : null;
        $this->container['average_semi_detached_property_value'] = isset($data['average_semi_detached_property_value']) ? $data['average_semi_detached_property_value'] : null;
        $this->container['average_semi_detached_property_value_description'] = isset($data['average_semi_detached_property_value_description']) ? $data['average_semi_detached_property_value_description'] : null;
        $this->container['average_terrace_property_value'] = isset($data['average_terrace_property_value']) ? $data['average_terrace_property_value'] : null;
        $this->container['average_terrace_property_value_description'] = isset($data['average_terrace_property_value_description']) ? $data['average_terrace_property_value_description'] : null;
        $this->container['council_tax_band'] = isset($data['council_tax_band']) ? $data['council_tax_band'] : null;
        $this->container['council_tax_band_description'] = isset($data['council_tax_band_description']) ? $data['council_tax_band_description'] : null;
        $this->container['household_density'] = isset($data['household_density']) ? $data['household_density'] : null;
        $this->container['location_type'] = isset($data['location_type']) ? $data['location_type'] : null;
        $this->container['national_average_house_price'] = isset($data['national_average_house_price']) ? $data['national_average_house_price'] : null;
        $this->container['national_average_house_price_above_or_below'] = isset($data['national_average_house_price_above_or_below']) ? $data['national_average_house_price_above_or_below'] : null;
        $this->container['national_average_house_price_difference'] = isset($data['national_average_house_price_difference']) ? $data['national_average_house_price_difference'] : null;
        $this->container['average_flat_property_value_description'] = isset($data['average_flat_property_value_description']) ? $data['average_flat_property_value_description'] : null;
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
     * Gets average_detached_property_value
     *
     * @return string
     */
    public function getAverageDetachedPropertyValue()
    {
        return $this->container['average_detached_property_value'];
    }

    /**
     * Sets average_detached_property_value
     *
     * @param string $average_detached_property_value average_detached_property_value
     *
     * @return $this
     */
    public function setAverageDetachedPropertyValue($average_detached_property_value)
    {
        $this->container['average_detached_property_value'] = $average_detached_property_value;

        return $this;
    }

    /**
     * Gets average_detached_property_value_description
     *
     * @return string
     */
    public function getAverageDetachedPropertyValueDescription()
    {
        return $this->container['average_detached_property_value_description'];
    }

    /**
     * Sets average_detached_property_value_description
     *
     * @param string $average_detached_property_value_description average_detached_property_value_description
     *
     * @return $this
     */
    public function setAverageDetachedPropertyValueDescription($average_detached_property_value_description)
    {
        $this->container['average_detached_property_value_description'] = $average_detached_property_value_description;

        return $this;
    }

    /**
     * Gets average_flat_property_value
     *
     * @return string
     */
    public function getAverageFlatPropertyValue()
    {
        return $this->container['average_flat_property_value'];
    }

    /**
     * Sets average_flat_property_value
     *
     * @param string $average_flat_property_value average_flat_property_value
     *
     * @return $this
     */
    public function setAverageFlatPropertyValue($average_flat_property_value)
    {
        $this->container['average_flat_property_value'] = $average_flat_property_value;

        return $this;
    }

    /**
     * Gets average_flat_property_value_description_field
     *
     * @return string
     */
    public function getAverageFlatPropertyValueDescriptionField()
    {
        return $this->container['average_flat_property_value_description_field'];
    }

    /**
     * Sets average_flat_property_value_description_field
     *
     * @param string $average_flat_property_value_description_field average_flat_property_value_description_field
     *
     * @return $this
     */
    public function setAverageFlatPropertyValueDescriptionField($average_flat_property_value_description_field)
    {
        $this->container['average_flat_property_value_description_field'] = $average_flat_property_value_description_field;

        return $this;
    }

    /**
     * Gets average_house_age
     *
     * @return string
     */
    public function getAverageHouseAge()
    {
        return $this->container['average_house_age'];
    }

    /**
     * Sets average_house_age
     *
     * @param string $average_house_age average_house_age
     *
     * @return $this
     */
    public function setAverageHouseAge($average_house_age)
    {
        $this->container['average_house_age'] = $average_house_age;

        return $this;
    }

    /**
     * Gets average_semi_detached_property_value
     *
     * @return string
     */
    public function getAverageSemiDetachedPropertyValue()
    {
        return $this->container['average_semi_detached_property_value'];
    }

    /**
     * Sets average_semi_detached_property_value
     *
     * @param string $average_semi_detached_property_value average_semi_detached_property_value
     *
     * @return $this
     */
    public function setAverageSemiDetachedPropertyValue($average_semi_detached_property_value)
    {
        $this->container['average_semi_detached_property_value'] = $average_semi_detached_property_value;

        return $this;
    }

    /**
     * Gets average_semi_detached_property_value_description
     *
     * @return string
     */
    public function getAverageSemiDetachedPropertyValueDescription()
    {
        return $this->container['average_semi_detached_property_value_description'];
    }

    /**
     * Sets average_semi_detached_property_value_description
     *
     * @param string $average_semi_detached_property_value_description average_semi_detached_property_value_description
     *
     * @return $this
     */
    public function setAverageSemiDetachedPropertyValueDescription($average_semi_detached_property_value_description)
    {
        $this->container['average_semi_detached_property_value_description'] = $average_semi_detached_property_value_description;

        return $this;
    }

    /**
     * Gets average_terrace_property_value
     *
     * @return string
     */
    public function getAverageTerracePropertyValue()
    {
        return $this->container['average_terrace_property_value'];
    }

    /**
     * Sets average_terrace_property_value
     *
     * @param string $average_terrace_property_value average_terrace_property_value
     *
     * @return $this
     */
    public function setAverageTerracePropertyValue($average_terrace_property_value)
    {
        $this->container['average_terrace_property_value'] = $average_terrace_property_value;

        return $this;
    }

    /**
     * Gets average_terrace_property_value_description
     *
     * @return string
     */
    public function getAverageTerracePropertyValueDescription()
    {
        return $this->container['average_terrace_property_value_description'];
    }

    /**
     * Sets average_terrace_property_value_description
     *
     * @param string $average_terrace_property_value_description average_terrace_property_value_description
     *
     * @return $this
     */
    public function setAverageTerracePropertyValueDescription($average_terrace_property_value_description)
    {
        $this->container['average_terrace_property_value_description'] = $average_terrace_property_value_description;

        return $this;
    }

    /**
     * Gets council_tax_band
     *
     * @return string
     */
    public function getCouncilTaxBand()
    {
        return $this->container['council_tax_band'];
    }

    /**
     * Sets council_tax_band
     *
     * @param string $council_tax_band council_tax_band
     *
     * @return $this
     */
    public function setCouncilTaxBand($council_tax_band)
    {
        $this->container['council_tax_band'] = $council_tax_band;

        return $this;
    }

    /**
     * Gets council_tax_band_description
     *
     * @return string
     */
    public function getCouncilTaxBandDescription()
    {
        return $this->container['council_tax_band_description'];
    }

    /**
     * Sets council_tax_band_description
     *
     * @param string $council_tax_band_description council_tax_band_description
     *
     * @return $this
     */
    public function setCouncilTaxBandDescription($council_tax_band_description)
    {
        $this->container['council_tax_band_description'] = $council_tax_band_description;

        return $this;
    }

    /**
     * Gets household_density
     *
     * @return string
     */
    public function getHouseholdDensity()
    {
        return $this->container['household_density'];
    }

    /**
     * Sets household_density
     *
     * @param string $household_density household_density
     *
     * @return $this
     */
    public function setHouseholdDensity($household_density)
    {
        $this->container['household_density'] = $household_density;

        return $this;
    }

    /**
     * Gets location_type
     *
     * @return string
     */
    public function getLocationType()
    {
        return $this->container['location_type'];
    }

    /**
     * Sets location_type
     *
     * @param string $location_type location_type
     *
     * @return $this
     */
    public function setLocationType($location_type)
    {
        $this->container['location_type'] = $location_type;

        return $this;
    }

    /**
     * Gets national_average_house_price
     *
     * @return string
     */
    public function getNationalAverageHousePrice()
    {
        return $this->container['national_average_house_price'];
    }

    /**
     * Sets national_average_house_price
     *
     * @param string $national_average_house_price national_average_house_price
     *
     * @return $this
     */
    public function setNationalAverageHousePrice($national_average_house_price)
    {
        $this->container['national_average_house_price'] = $national_average_house_price;

        return $this;
    }

    /**
     * Gets national_average_house_price_above_or_below
     *
     * @return string
     */
    public function getNationalAverageHousePriceAboveOrBelow()
    {
        return $this->container['national_average_house_price_above_or_below'];
    }

    /**
     * Sets national_average_house_price_above_or_below
     *
     * @param string $national_average_house_price_above_or_below national_average_house_price_above_or_below
     *
     * @return $this
     */
    public function setNationalAverageHousePriceAboveOrBelow($national_average_house_price_above_or_below)
    {
        $this->container['national_average_house_price_above_or_below'] = $national_average_house_price_above_or_below;

        return $this;
    }

    /**
     * Gets national_average_house_price_difference
     *
     * @return string
     */
    public function getNationalAverageHousePriceDifference()
    {
        return $this->container['national_average_house_price_difference'];
    }

    /**
     * Sets national_average_house_price_difference
     *
     * @param string $national_average_house_price_difference national_average_house_price_difference
     *
     * @return $this
     */
    public function setNationalAverageHousePriceDifference($national_average_house_price_difference)
    {
        $this->container['national_average_house_price_difference'] = $national_average_house_price_difference;

        return $this;
    }

    /**
     * Gets average_flat_property_value_description
     *
     * @return string
     */
    public function getAverageFlatPropertyValueDescription()
    {
        return $this->container['average_flat_property_value_description'];
    }

    /**
     * Sets average_flat_property_value_description
     *
     * @param string $average_flat_property_value_description average_flat_property_value_description
     *
     * @return $this
     */
    public function setAverageFlatPropertyValueDescription($average_flat_property_value_description)
    {
        $this->container['average_flat_property_value_description'] = $average_flat_property_value_description;

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
