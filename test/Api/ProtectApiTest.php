<?php
/**
 * ProtectApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use Swagger\Client\Configuration;
use Swagger\Client\ApiException;
use Swagger\Client\ObjectSerializer;

/**
 * ProtectApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProtectApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for addInvestigationToProfile
     *
     * .
     *
     */
    public function testAddInvestigationToProfile()
    {
    }

    /**
     * Test case for addMatchToInvestigation
     *
     * .
     *
     */
    public function testAddMatchToInvestigation()
    {
    }

    /**
     * Test case for createProtectInvestigation
     *
     * .
     *
     */
    public function testCreateProtectInvestigation()
    {
    }

    /**
     * Test case for createProtectInvestigationPDF
     *
     * .
     *
     */
    public function testCreateProtectInvestigationPDF()
    {
    }

    /**
     * Test case for createProtectProfile
     *
     * .
     *
     */
    public function testCreateProtectProfile()
    {
    }

    /**
     * Test case for createProtectSchedule
     *
     * .
     *
     */
    public function testCreateProtectSchedule()
    {
    }

    /**
     * Test case for editProtectProfile
     *
     * .
     *
     */
    public function testEditProtectProfile()
    {
    }

    /**
     * Test case for exportAuditLogFile
     *
     * .
     *
     */
    public function testExportAuditLogFile()
    {
    }

    /**
     * Test case for listAllProtectInvestigations
     *
     * .
     *
     */
    public function testListAllProtectInvestigations()
    {
    }

    /**
     * Test case for listAllProtectProfiles
     *
     * .
     *
     */
    public function testListAllProtectProfiles()
    {
    }

    /**
     * Test case for listInvestigationsInAProfile
     *
     * .
     *
     */
    public function testListInvestigationsInAProfile()
    {
    }

    /**
     * Test case for listMatchesPerInvestigation
     *
     * .
     *
     */
    public function testListMatchesPerInvestigation()
    {
    }

    /**
     * Test case for protectSchedulesScheduleIdDelete
     *
     * .
     *
     */
    public function testProtectSchedulesScheduleIdDelete()
    {
    }

    /**
     * Test case for retrieveProtectAuditLog
     *
     * .
     *
     */
    public function testRetrieveProtectAuditLog()
    {
    }

    /**
     * Test case for retrieveProtectInvestigationById
     *
     * .
     *
     */
    public function testRetrieveProtectInvestigationById()
    {
    }

    /**
     * Test case for retrieveProtectProfileByID
     *
     * .
     *
     */
    public function testRetrieveProtectProfileByID()
    {
    }

    /**
     * Test case for retrieveScheduleById
     *
     * .
     *
     */
    public function testRetrieveScheduleById()
    {
    }
}
