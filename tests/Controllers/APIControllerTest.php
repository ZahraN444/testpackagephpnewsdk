<?php

declare(strict_types=1);

/*
 * APIWithComplexHeaderParametersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace APIWithComplexHeaderParametersLib\Tests\Controllers;

use APIWithComplexHeaderParametersLib\Controllers\APIController;
use APIWithComplexHeaderParametersLib\Exceptions;
use APIWithComplexHeaderParametersLib\Models;
use Core\TestCase\TestParam;

class APIControllerTest extends BaseTestController
{
    /**
     * @var APIController APIController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getAPIController();
    }

    public function testCreateOrderWithPayPalMockResponse()
    {
        // Parameters for the API call
        $payPalMockResponse = TestParam::object(
            "{\n  \"mock_application_codes\": \"DUPLICATE_INVOICE_ID\"\n}\n",
            Models\PaypalMockResponseSchema::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveCheckoutOrder($payPalMockResponse);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->assert();
    }

    public function testUploadVehicles()
    {
        // Parameters for the API call
        $vehicleHeader = TestParam::object(
            "{\n  \"make\": \"Toyota\",\n  \"model\": \"Camry\",\n  \"year\": 2022,\n  \"engine" .
            "\": {\n    \"horsepower\": 3000,\n    \"fuelType\": \"Petrol\"\n  }\n}\n",
            Models\Vehicle::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->submitVehicleInformation($vehicleHeader);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->assert();
    }

    public function testUploadOneOfVehiclesAsBike()
    {
        // Parameters for the API call
        $oneOfVehicle = TestParam::typeGroup(
            "{\n  \"make\": \"Yamaha\",\n  \"model\": \"VMax\",\n  \"year\": 2020,\n  \"engineC" .
            "apacity\": 1800\n}\n",
            'oneOf(Car,Bike)'
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->submitAOneOfVehicle($oneOfVehicle);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->assert();
    }

    public function testUploadOneOfVehiclesAsCar()
    {
        // Parameters for the API call
        $oneOfVehicle = TestParam::typeGroup(
            "{\n  \"make\": \"Toyota\",\n  \"model\": \"Yaris\",\n  \"doors\": 2,\n  \"engine\"" .
            ": {\n    \"horsepower\": 1500,\n    \"fuelType\": \"Petrol\"\n  }\n}\n",
            'oneOf(Car,Bike)'
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->submitAOneOfVehicle($oneOfVehicle);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->assert();
    }

    public function testUploadMapOfVehicles()
    {
        // Parameters for the API call
        $mapOfVehicles = TestParam::object(
            "{\n  \"Toyota Camry\": {\n    \"make\": \"Toyota\",\n    \"model\": \"Camry\",\n  " .
            "  \"year\": 2022,\n    \"engine\": {\n      \"horsepower\": 3000,\n      \"fuelType" .
            "\": \"Petrol\"\n    }\n  },\n  \"Toyota Yaris\": {\n    \"make\": \"Toyota\",\n    " .
            "\"model\": \"Yaris\",\n    \"year\": 2020,\n    \"engine\": {\n      \"horsepower\"" .
            ": 1300,\n      \"fuelType\": \"Petrol\"\n    }\n  }\n}\n",
            Models\Vehicle::class,
            1
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->submitAMapOfVehicles($mapOfVehicles);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->assert();
    }

    public function testUploadArrayOfVehicles()
    {
        // Parameters for the API call
        $body = TestParam::object(
            "[\n  {\n    \"make\": \"Toyota\",\n    \"model\": \"Camry\",\n    \"year\": 2022," .
            "\n    \"engine\": {\n      \"horsepower\": 3000,\n      \"fuelType\": \"Petrol\"\n " .
            "   }\n  },\n  {\n    \"make\": \"Toyota\",\n    \"model\": \"Yaris\",\n    \"year\"" .
            ": 2020,\n    \"engine\": {\n      \"horsepower\": 1300,\n      \"fuelType\": \"Petr" .
            "ol\"\n    }\n  }\n]\n",
            Models\Vehicle::class,
            1
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->submitAnArrayOfVehicles($body);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->assert();
    }
}
