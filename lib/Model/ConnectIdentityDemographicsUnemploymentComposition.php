<?php
/**
 * ConnectIdentityDemographicsUnemploymentComposition
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
 * ConnectIdentityDemographicsUnemploymentComposition Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConnectIdentityDemographicsUnemploymentComposition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Connect.Identity.DemographicsUnemploymentComposition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'male_long_term_unemployment' => 'string',
'male_long_term_unemployment_description' => 'string',
'male_long_term_unemployment_label' => 'string',
'unemployment_among18to24_year_olds' => 'string',
'unemployment_among18to24_year_olds_description' => 'string',
'unemployment_among18to24_year_olds_label' => 'string',
'unemployment_among25to39_year_olds' => 'string',
'unemployment_among25to39_year_olds_description' => 'string',
'unemployment_among25to39_year_olds_label' => 'string',
'unemployment_among_those_aged40and_older' => 'string',
'unemployment_among_those_aged40and_older_description' => 'string',
'unemployment_among_those_aged40and_older_label' => 'string',
'unemployment_score_label' => 'string',
'unemployment_score_description' => 'string',
'unemployment_score' => 'string',
'male_long_term_unemployment_score' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'male_long_term_unemployment' => null,
'male_long_term_unemployment_description' => null,
'male_long_term_unemployment_label' => null,
'unemployment_among18to24_year_olds' => null,
'unemployment_among18to24_year_olds_description' => null,
'unemployment_among18to24_year_olds_label' => null,
'unemployment_among25to39_year_olds' => null,
'unemployment_among25to39_year_olds_description' => null,
'unemployment_among25to39_year_olds_label' => null,
'unemployment_among_those_aged40and_older' => null,
'unemployment_among_those_aged40and_older_description' => null,
'unemployment_among_those_aged40and_older_label' => null,
'unemployment_score_label' => null,
'unemployment_score_description' => null,
'unemployment_score' => null,
'male_long_term_unemployment_score' => null    ];

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
        'male_long_term_unemployment' => 'maleLongTermUnemployment',
'male_long_term_unemployment_description' => 'maleLongTermUnemploymentDescription',
'male_long_term_unemployment_label' => 'maleLongTermUnemploymentLabel',
'unemployment_among18to24_year_olds' => 'unemploymentAmong18to24YearOlds',
'unemployment_among18to24_year_olds_description' => 'unemploymentAmong18to24YearOldsDescription',
'unemployment_among18to24_year_olds_label' => 'unemploymentAmong18to24YearOldsLabel',
'unemployment_among25to39_year_olds' => 'unemploymentAmong25to39YearOlds',
'unemployment_among25to39_year_olds_description' => 'unemploymentAmong25to39YearOldsDescription',
'unemployment_among25to39_year_olds_label' => 'unemploymentAmong25to39YearOldsLabel',
'unemployment_among_those_aged40and_older' => 'unemploymentAmongThoseAged40andOlder',
'unemployment_among_those_aged40and_older_description' => 'unemploymentAmongThoseAged40andOlderDescription',
'unemployment_among_those_aged40and_older_label' => 'unemploymentAmongThoseAged40andOlderLabel',
'unemployment_score_label' => 'unemploymentScoreLabel',
'unemployment_score_description' => 'unemploymentScoreDescription',
'unemployment_score' => 'unemploymentScore',
'male_long_term_unemployment_score' => 'maleLongTermUnemploymentScore'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'male_long_term_unemployment' => 'setMaleLongTermUnemployment',
'male_long_term_unemployment_description' => 'setMaleLongTermUnemploymentDescription',
'male_long_term_unemployment_label' => 'setMaleLongTermUnemploymentLabel',
'unemployment_among18to24_year_olds' => 'setUnemploymentAmong18to24YearOlds',
'unemployment_among18to24_year_olds_description' => 'setUnemploymentAmong18to24YearOldsDescription',
'unemployment_among18to24_year_olds_label' => 'setUnemploymentAmong18to24YearOldsLabel',
'unemployment_among25to39_year_olds' => 'setUnemploymentAmong25to39YearOlds',
'unemployment_among25to39_year_olds_description' => 'setUnemploymentAmong25to39YearOldsDescription',
'unemployment_among25to39_year_olds_label' => 'setUnemploymentAmong25to39YearOldsLabel',
'unemployment_among_those_aged40and_older' => 'setUnemploymentAmongThoseAged40andOlder',
'unemployment_among_those_aged40and_older_description' => 'setUnemploymentAmongThoseAged40andOlderDescription',
'unemployment_among_those_aged40and_older_label' => 'setUnemploymentAmongThoseAged40andOlderLabel',
'unemployment_score_label' => 'setUnemploymentScoreLabel',
'unemployment_score_description' => 'setUnemploymentScoreDescription',
'unemployment_score' => 'setUnemploymentScore',
'male_long_term_unemployment_score' => 'setMaleLongTermUnemploymentScore'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'male_long_term_unemployment' => 'getMaleLongTermUnemployment',
'male_long_term_unemployment_description' => 'getMaleLongTermUnemploymentDescription',
'male_long_term_unemployment_label' => 'getMaleLongTermUnemploymentLabel',
'unemployment_among18to24_year_olds' => 'getUnemploymentAmong18to24YearOlds',
'unemployment_among18to24_year_olds_description' => 'getUnemploymentAmong18to24YearOldsDescription',
'unemployment_among18to24_year_olds_label' => 'getUnemploymentAmong18to24YearOldsLabel',
'unemployment_among25to39_year_olds' => 'getUnemploymentAmong25to39YearOlds',
'unemployment_among25to39_year_olds_description' => 'getUnemploymentAmong25to39YearOldsDescription',
'unemployment_among25to39_year_olds_label' => 'getUnemploymentAmong25to39YearOldsLabel',
'unemployment_among_those_aged40and_older' => 'getUnemploymentAmongThoseAged40andOlder',
'unemployment_among_those_aged40and_older_description' => 'getUnemploymentAmongThoseAged40andOlderDescription',
'unemployment_among_those_aged40and_older_label' => 'getUnemploymentAmongThoseAged40andOlderLabel',
'unemployment_score_label' => 'getUnemploymentScoreLabel',
'unemployment_score_description' => 'getUnemploymentScoreDescription',
'unemployment_score' => 'getUnemploymentScore',
'male_long_term_unemployment_score' => 'getMaleLongTermUnemploymentScore'    ];

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
        $this->container['male_long_term_unemployment'] = isset($data['male_long_term_unemployment']) ? $data['male_long_term_unemployment'] : null;
        $this->container['male_long_term_unemployment_description'] = isset($data['male_long_term_unemployment_description']) ? $data['male_long_term_unemployment_description'] : null;
        $this->container['male_long_term_unemployment_label'] = isset($data['male_long_term_unemployment_label']) ? $data['male_long_term_unemployment_label'] : null;
        $this->container['unemployment_among18to24_year_olds'] = isset($data['unemployment_among18to24_year_olds']) ? $data['unemployment_among18to24_year_olds'] : null;
        $this->container['unemployment_among18to24_year_olds_description'] = isset($data['unemployment_among18to24_year_olds_description']) ? $data['unemployment_among18to24_year_olds_description'] : null;
        $this->container['unemployment_among18to24_year_olds_label'] = isset($data['unemployment_among18to24_year_olds_label']) ? $data['unemployment_among18to24_year_olds_label'] : null;
        $this->container['unemployment_among25to39_year_olds'] = isset($data['unemployment_among25to39_year_olds']) ? $data['unemployment_among25to39_year_olds'] : null;
        $this->container['unemployment_among25to39_year_olds_description'] = isset($data['unemployment_among25to39_year_olds_description']) ? $data['unemployment_among25to39_year_olds_description'] : null;
        $this->container['unemployment_among25to39_year_olds_label'] = isset($data['unemployment_among25to39_year_olds_label']) ? $data['unemployment_among25to39_year_olds_label'] : null;
        $this->container['unemployment_among_those_aged40and_older'] = isset($data['unemployment_among_those_aged40and_older']) ? $data['unemployment_among_those_aged40and_older'] : null;
        $this->container['unemployment_among_those_aged40and_older_description'] = isset($data['unemployment_among_those_aged40and_older_description']) ? $data['unemployment_among_those_aged40and_older_description'] : null;
        $this->container['unemployment_among_those_aged40and_older_label'] = isset($data['unemployment_among_those_aged40and_older_label']) ? $data['unemployment_among_those_aged40and_older_label'] : null;
        $this->container['unemployment_score_label'] = isset($data['unemployment_score_label']) ? $data['unemployment_score_label'] : null;
        $this->container['unemployment_score_description'] = isset($data['unemployment_score_description']) ? $data['unemployment_score_description'] : null;
        $this->container['unemployment_score'] = isset($data['unemployment_score']) ? $data['unemployment_score'] : null;
        $this->container['male_long_term_unemployment_score'] = isset($data['male_long_term_unemployment_score']) ? $data['male_long_term_unemployment_score'] : null;
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
     * Gets male_long_term_unemployment
     *
     * @return string
     */
    public function getMaleLongTermUnemployment()
    {
        return $this->container['male_long_term_unemployment'];
    }

    /**
     * Sets male_long_term_unemployment
     *
     * @param string $male_long_term_unemployment male_long_term_unemployment
     *
     * @return $this
     */
    public function setMaleLongTermUnemployment($male_long_term_unemployment)
    {
        $this->container['male_long_term_unemployment'] = $male_long_term_unemployment;

        return $this;
    }

    /**
     * Gets male_long_term_unemployment_description
     *
     * @return string
     */
    public function getMaleLongTermUnemploymentDescription()
    {
        return $this->container['male_long_term_unemployment_description'];
    }

    /**
     * Sets male_long_term_unemployment_description
     *
     * @param string $male_long_term_unemployment_description male_long_term_unemployment_description
     *
     * @return $this
     */
    public function setMaleLongTermUnemploymentDescription($male_long_term_unemployment_description)
    {
        $this->container['male_long_term_unemployment_description'] = $male_long_term_unemployment_description;

        return $this;
    }

    /**
     * Gets male_long_term_unemployment_label
     *
     * @return string
     */
    public function getMaleLongTermUnemploymentLabel()
    {
        return $this->container['male_long_term_unemployment_label'];
    }

    /**
     * Sets male_long_term_unemployment_label
     *
     * @param string $male_long_term_unemployment_label male_long_term_unemployment_label
     *
     * @return $this
     */
    public function setMaleLongTermUnemploymentLabel($male_long_term_unemployment_label)
    {
        $this->container['male_long_term_unemployment_label'] = $male_long_term_unemployment_label;

        return $this;
    }

    /**
     * Gets unemployment_among18to24_year_olds
     *
     * @return string
     */
    public function getUnemploymentAmong18to24YearOlds()
    {
        return $this->container['unemployment_among18to24_year_olds'];
    }

    /**
     * Sets unemployment_among18to24_year_olds
     *
     * @param string $unemployment_among18to24_year_olds unemployment_among18to24_year_olds
     *
     * @return $this
     */
    public function setUnemploymentAmong18to24YearOlds($unemployment_among18to24_year_olds)
    {
        $this->container['unemployment_among18to24_year_olds'] = $unemployment_among18to24_year_olds;

        return $this;
    }

    /**
     * Gets unemployment_among18to24_year_olds_description
     *
     * @return string
     */
    public function getUnemploymentAmong18to24YearOldsDescription()
    {
        return $this->container['unemployment_among18to24_year_olds_description'];
    }

    /**
     * Sets unemployment_among18to24_year_olds_description
     *
     * @param string $unemployment_among18to24_year_olds_description unemployment_among18to24_year_olds_description
     *
     * @return $this
     */
    public function setUnemploymentAmong18to24YearOldsDescription($unemployment_among18to24_year_olds_description)
    {
        $this->container['unemployment_among18to24_year_olds_description'] = $unemployment_among18to24_year_olds_description;

        return $this;
    }

    /**
     * Gets unemployment_among18to24_year_olds_label
     *
     * @return string
     */
    public function getUnemploymentAmong18to24YearOldsLabel()
    {
        return $this->container['unemployment_among18to24_year_olds_label'];
    }

    /**
     * Sets unemployment_among18to24_year_olds_label
     *
     * @param string $unemployment_among18to24_year_olds_label unemployment_among18to24_year_olds_label
     *
     * @return $this
     */
    public function setUnemploymentAmong18to24YearOldsLabel($unemployment_among18to24_year_olds_label)
    {
        $this->container['unemployment_among18to24_year_olds_label'] = $unemployment_among18to24_year_olds_label;

        return $this;
    }

    /**
     * Gets unemployment_among25to39_year_olds
     *
     * @return string
     */
    public function getUnemploymentAmong25to39YearOlds()
    {
        return $this->container['unemployment_among25to39_year_olds'];
    }

    /**
     * Sets unemployment_among25to39_year_olds
     *
     * @param string $unemployment_among25to39_year_olds unemployment_among25to39_year_olds
     *
     * @return $this
     */
    public function setUnemploymentAmong25to39YearOlds($unemployment_among25to39_year_olds)
    {
        $this->container['unemployment_among25to39_year_olds'] = $unemployment_among25to39_year_olds;

        return $this;
    }

    /**
     * Gets unemployment_among25to39_year_olds_description
     *
     * @return string
     */
    public function getUnemploymentAmong25to39YearOldsDescription()
    {
        return $this->container['unemployment_among25to39_year_olds_description'];
    }

    /**
     * Sets unemployment_among25to39_year_olds_description
     *
     * @param string $unemployment_among25to39_year_olds_description unemployment_among25to39_year_olds_description
     *
     * @return $this
     */
    public function setUnemploymentAmong25to39YearOldsDescription($unemployment_among25to39_year_olds_description)
    {
        $this->container['unemployment_among25to39_year_olds_description'] = $unemployment_among25to39_year_olds_description;

        return $this;
    }

    /**
     * Gets unemployment_among25to39_year_olds_label
     *
     * @return string
     */
    public function getUnemploymentAmong25to39YearOldsLabel()
    {
        return $this->container['unemployment_among25to39_year_olds_label'];
    }

    /**
     * Sets unemployment_among25to39_year_olds_label
     *
     * @param string $unemployment_among25to39_year_olds_label unemployment_among25to39_year_olds_label
     *
     * @return $this
     */
    public function setUnemploymentAmong25to39YearOldsLabel($unemployment_among25to39_year_olds_label)
    {
        $this->container['unemployment_among25to39_year_olds_label'] = $unemployment_among25to39_year_olds_label;

        return $this;
    }

    /**
     * Gets unemployment_among_those_aged40and_older
     *
     * @return string
     */
    public function getUnemploymentAmongThoseAged40andOlder()
    {
        return $this->container['unemployment_among_those_aged40and_older'];
    }

    /**
     * Sets unemployment_among_those_aged40and_older
     *
     * @param string $unemployment_among_those_aged40and_older unemployment_among_those_aged40and_older
     *
     * @return $this
     */
    public function setUnemploymentAmongThoseAged40andOlder($unemployment_among_those_aged40and_older)
    {
        $this->container['unemployment_among_those_aged40and_older'] = $unemployment_among_those_aged40and_older;

        return $this;
    }

    /**
     * Gets unemployment_among_those_aged40and_older_description
     *
     * @return string
     */
    public function getUnemploymentAmongThoseAged40andOlderDescription()
    {
        return $this->container['unemployment_among_those_aged40and_older_description'];
    }

    /**
     * Sets unemployment_among_those_aged40and_older_description
     *
     * @param string $unemployment_among_those_aged40and_older_description unemployment_among_those_aged40and_older_description
     *
     * @return $this
     */
    public function setUnemploymentAmongThoseAged40andOlderDescription($unemployment_among_those_aged40and_older_description)
    {
        $this->container['unemployment_among_those_aged40and_older_description'] = $unemployment_among_those_aged40and_older_description;

        return $this;
    }

    /**
     * Gets unemployment_among_those_aged40and_older_label
     *
     * @return string
     */
    public function getUnemploymentAmongThoseAged40andOlderLabel()
    {
        return $this->container['unemployment_among_those_aged40and_older_label'];
    }

    /**
     * Sets unemployment_among_those_aged40and_older_label
     *
     * @param string $unemployment_among_those_aged40and_older_label unemployment_among_those_aged40and_older_label
     *
     * @return $this
     */
    public function setUnemploymentAmongThoseAged40andOlderLabel($unemployment_among_those_aged40and_older_label)
    {
        $this->container['unemployment_among_those_aged40and_older_label'] = $unemployment_among_those_aged40and_older_label;

        return $this;
    }

    /**
     * Gets unemployment_score_label
     *
     * @return string
     */
    public function getUnemploymentScoreLabel()
    {
        return $this->container['unemployment_score_label'];
    }

    /**
     * Sets unemployment_score_label
     *
     * @param string $unemployment_score_label unemployment_score_label
     *
     * @return $this
     */
    public function setUnemploymentScoreLabel($unemployment_score_label)
    {
        $this->container['unemployment_score_label'] = $unemployment_score_label;

        return $this;
    }

    /**
     * Gets unemployment_score_description
     *
     * @return string
     */
    public function getUnemploymentScoreDescription()
    {
        return $this->container['unemployment_score_description'];
    }

    /**
     * Sets unemployment_score_description
     *
     * @param string $unemployment_score_description unemployment_score_description
     *
     * @return $this
     */
    public function setUnemploymentScoreDescription($unemployment_score_description)
    {
        $this->container['unemployment_score_description'] = $unemployment_score_description;

        return $this;
    }

    /**
     * Gets unemployment_score
     *
     * @return string
     */
    public function getUnemploymentScore()
    {
        return $this->container['unemployment_score'];
    }

    /**
     * Sets unemployment_score
     *
     * @param string $unemployment_score unemployment_score
     *
     * @return $this
     */
    public function setUnemploymentScore($unemployment_score)
    {
        $this->container['unemployment_score'] = $unemployment_score;

        return $this;
    }

    /**
     * Gets male_long_term_unemployment_score
     *
     * @return string
     */
    public function getMaleLongTermUnemploymentScore()
    {
        return $this->container['male_long_term_unemployment_score'];
    }

    /**
     * Sets male_long_term_unemployment_score
     *
     * @param string $male_long_term_unemployment_score male_long_term_unemployment_score
     *
     * @return $this
     */
    public function setMaleLongTermUnemploymentScore($male_long_term_unemployment_score)
    {
        $this->container['male_long_term_unemployment_score'] = $male_long_term_unemployment_score;

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