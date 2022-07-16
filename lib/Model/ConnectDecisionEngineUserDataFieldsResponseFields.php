<?php
/**
 * ConnectDecisionEngineUserDataFieldsResponseFields
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
 * ConnectDecisionEngineUserDataFieldsResponseFields Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConnectDecisionEngineUserDataFieldsResponseFields implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Connect.DecisionEngine.UserDataFieldsResponse_fields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_index' => 'float',
'label' => 'string',
'param_name' => 'string',
'field_type' => 'string',
'mandatory' => 'bool',
'dropdown_details' => '\Swagger\Client\Model\ConnectDecisionEngineUserDataFieldsResponseDropdownDetails[]',
'validation' => '\Swagger\Client\Model\ConnectDecisionEngineUserDataFieldsResponseValidation[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_index' => null,
'label' => null,
'param_name' => null,
'field_type' => null,
'mandatory' => null,
'dropdown_details' => null,
'validation' => null    ];

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
        'order_index' => 'orderIndex',
'label' => 'label',
'param_name' => 'paramName',
'field_type' => 'fieldType',
'mandatory' => 'mandatory',
'dropdown_details' => 'dropdownDetails',
'validation' => 'validation'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_index' => 'setOrderIndex',
'label' => 'setLabel',
'param_name' => 'setParamName',
'field_type' => 'setFieldType',
'mandatory' => 'setMandatory',
'dropdown_details' => 'setDropdownDetails',
'validation' => 'setValidation'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_index' => 'getOrderIndex',
'label' => 'getLabel',
'param_name' => 'getParamName',
'field_type' => 'getFieldType',
'mandatory' => 'getMandatory',
'dropdown_details' => 'getDropdownDetails',
'validation' => 'getValidation'    ];

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

    const FIELD_TYPE_TEXT = 'Text';
const FIELD_TYPE_INTEGER = 'Integer';
const FIELD_TYPE_DROPDOWN = 'Dropdown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFieldTypeAllowableValues()
    {
        return [
            self::FIELD_TYPE_TEXT,
self::FIELD_TYPE_INTEGER,
self::FIELD_TYPE_DROPDOWN,        ];
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
        $this->container['order_index'] = isset($data['order_index']) ? $data['order_index'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['param_name'] = isset($data['param_name']) ? $data['param_name'] : null;
        $this->container['field_type'] = isset($data['field_type']) ? $data['field_type'] : null;
        $this->container['mandatory'] = isset($data['mandatory']) ? $data['mandatory'] : null;
        $this->container['dropdown_details'] = isset($data['dropdown_details']) ? $data['dropdown_details'] : null;
        $this->container['validation'] = isset($data['validation']) ? $data['validation'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFieldTypeAllowableValues();
        if (!is_null($this->container['field_type']) && !in_array($this->container['field_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'field_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets order_index
     *
     * @return float
     */
    public function getOrderIndex()
    {
        return $this->container['order_index'];
    }

    /**
     * Sets order_index
     *
     * @param float $order_index Used to assist ordering of the user data fields on a UI.
     *
     * @return $this
     */
    public function setOrderIndex($order_index)
    {
        $this->container['order_index'] = $order_index;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label The user-friendly label for the field for display on a UI.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets param_name
     *
     * @return string
     */
    public function getParamName()
    {
        return $this->container['param_name'];
    }

    /**
     * Sets param_name
     *
     * @param string $param_name The string value for the parameter to be used when calling the `/{guid}` endpoint.
     *
     * @return $this
     */
    public function setParamName($param_name)
    {
        $this->container['param_name'] = $param_name;

        return $this;
    }

    /**
     * Gets field_type
     *
     * @return string
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     *
     * @param string $field_type The type of user data field.
     *
     * @return $this
     */
    public function setFieldType($field_type)
    {
        $allowedValues = $this->getFieldTypeAllowableValues();
        if (!is_null($field_type) && !in_array($field_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'field_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['field_type'] = $field_type;

        return $this;
    }

    /**
     * Gets mandatory
     *
     * @return bool
     */
    public function getMandatory()
    {
        return $this->container['mandatory'];
    }

    /**
     * Sets mandatory
     *
     * @param bool $mandatory Flag to dictate whether the user data field is required when running the associated decision tree.
     *
     * @return $this
     */
    public function setMandatory($mandatory)
    {
        $this->container['mandatory'] = $mandatory;

        return $this;
    }

    /**
     * Gets dropdown_details
     *
     * @return \Swagger\Client\Model\ConnectDecisionEngineUserDataFieldsResponseDropdownDetails[]
     */
    public function getDropdownDetails()
    {
        return $this->container['dropdown_details'];
    }

    /**
     * Sets dropdown_details
     *
     * @param \Swagger\Client\Model\ConnectDecisionEngineUserDataFieldsResponseDropdownDetails[] $dropdown_details dropdown_details
     *
     * @return $this
     */
    public function setDropdownDetails($dropdown_details)
    {
        $this->container['dropdown_details'] = $dropdown_details;

        return $this;
    }

    /**
     * Gets validation
     *
     * @return \Swagger\Client\Model\ConnectDecisionEngineUserDataFieldsResponseValidation[]
     */
    public function getValidation()
    {
        return $this->container['validation'];
    }

    /**
     * Sets validation
     *
     * @param \Swagger\Client\Model\ConnectDecisionEngineUserDataFieldsResponseValidation[] $validation Optional validation rules that should be applied to the corresponding user data field prior to running the decision tree.
     *
     * @return $this
     */
    public function setValidation($validation)
    {
        $this->container['validation'] = $validation;

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