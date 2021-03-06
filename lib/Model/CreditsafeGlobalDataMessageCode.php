<?php
/**
 * CreditsafeGlobalDataMessageCode
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
use \Swagger\Client\ObjectSerializer;

/**
 * CreditsafeGlobalDataMessageCode Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditsafeGlobalDataMessageCode
{
    /**
     * Possible values of this enum
     */
    const NO_RESULTS = 'NoResults';
const TOO_MANY_RESULTS = 'TooManyResults';
const REPORT_UNAVAILABLE = 'ReportUnavailable';
const REPORT_UNAVAILABLE_DUE_TO_LEGAL = 'ReportUnavailableDueToLegal';
const REPORT_UNAVAILABLE_ONLINE = 'ReportUnavailableOnline';
const LEGAL_NOTICE = 'LegalNotice';
const INVALID_CREDENTIALS = 'InvalidCredentials';
const ACCESS_RESTRICTED = 'AccessRestricted';
const ACCESS_LIMITS_NEARING = 'AccessLimitsNearing';
const INSUFFICIENT_CUSTOMER_DATA = 'InsufficientCustomerData';
const REPORTBOX_ALMOST_FULL = 'ReportboxAlmostFull';
const REPORTBOX_FULL = 'ReportboxFull';
const INVALID_REQUEST_XML = 'InvalidRequestXml';
const INVALID_OPERATION_PARAMETERS = 'InvalidOperationParameters';
const OPERATION_NOT_SUPPORTED = 'OperationNotSupported';
const INVALID_CUSTOM_DATA = 'InvalidCustomData';
const CHANGE_NOTIFICATION = 'ChangeNotification';
const TEMPORARY_SYSTEM_PROBLEM = 'TemporarySystemProblem';
const ENDPOINT_SHUTDOWN = 'EndpointShutdown';
const UNEXPECTED_INTERNAL_ERROR = 'UnexpectedInternalError';
const OTHER = 'Other';
const DATA_SERVICE_ACCESS_PROBLEMS = 'DataServiceAccessProblems';
const DATA_SERVICE_INVALID_RESPONSE = 'DataServiceInvalidResponse';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_RESULTS,
self::TOO_MANY_RESULTS,
self::REPORT_UNAVAILABLE,
self::REPORT_UNAVAILABLE_DUE_TO_LEGAL,
self::REPORT_UNAVAILABLE_ONLINE,
self::LEGAL_NOTICE,
self::INVALID_CREDENTIALS,
self::ACCESS_RESTRICTED,
self::ACCESS_LIMITS_NEARING,
self::INSUFFICIENT_CUSTOMER_DATA,
self::REPORTBOX_ALMOST_FULL,
self::REPORTBOX_FULL,
self::INVALID_REQUEST_XML,
self::INVALID_OPERATION_PARAMETERS,
self::OPERATION_NOT_SUPPORTED,
self::INVALID_CUSTOM_DATA,
self::CHANGE_NOTIFICATION,
self::TEMPORARY_SYSTEM_PROBLEM,
self::ENDPOINT_SHUTDOWN,
self::UNEXPECTED_INTERNAL_ERROR,
self::OTHER,
self::DATA_SERVICE_ACCESS_PROBLEMS,
self::DATA_SERVICE_INVALID_RESPONSE,        ];
    }
}
