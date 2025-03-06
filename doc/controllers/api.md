# API

```php
$aPIController = $client->getAPIController();
```

## Class Name

`APIController`

## Methods

* [Retrieve Checkout Order](../../doc/controllers/api.md#retrieve-checkout-order)
* [Submit Vehicle Information](../../doc/controllers/api.md#submit-vehicle-information)
* [Submit a One of Vehicle](../../doc/controllers/api.md#submit-a-one-of-vehicle)
* [Submit a Map of Vehicles](../../doc/controllers/api.md#submit-a-map-of-vehicles)
* [Submit an Array of Vehicles](../../doc/controllers/api.md#submit-an-array-of-vehicles)


# Retrieve Checkout Order

Retrieves a checkout order, allowing response simulation via a complex header.

```php
function retrieveCheckoutOrder(?PaypalMockResponseSchema $payPalMockResponse = null): SuccessResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `payPalMockResponse` | [`?PaypalMockResponseSchema`](../../doc/models/paypal-mock-response-schema.md) | Header, Optional | Simulates negative responses. |

## Response Type

[`SuccessResponse`](../../doc/models/success-response.md)

## Example Usage

```php
$payPalMockResponse = PaypalMockResponseSchemaBuilder::init(
    'DUPLICATE_INVOICE_ID'
)->build();

$result = $aPIController->retrieveCheckoutOrder($payPalMockResponse);
```


# Submit Vehicle Information

Accepts a single vehicle object in the header.

```php
function submitVehicleInformation(Vehicle $vehicleHeader): SuccessResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `vehicleHeader` | [`Vehicle`](../../doc/models/vehicle.md) | Header, Required | JSON-serialized Vehicle object. |

## Response Type

[`SuccessResponse`](../../doc/models/success-response.md)

## Example Usage

```php
$vehicleHeader = VehicleBuilder::init(
    'Toyota',
    'Camry',
    2022,
    EngineBuilder::init(
        300,
        FuelTypeEnum::PETROL
    )->build()
)->build();

$result = $aPIController->submitVehicleInformation($vehicleHeader);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Invalid input. | `ApiException` |


# Submit a One of Vehicle

Accepts a Car or a Bike object in the header.

```php
function submitAOneOfVehicle($oneOfVehicle): SuccessResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `oneOfVehicle` | [Car](../../doc/models/car.md)\|[Bike](../../doc/models/bike.md) | Header, Required | Either a Car or a Bike. |

## Response Type

[`SuccessResponse`](../../doc/models/success-response.md)

## Example Usage

```php
$oneOfVehicle = CarBuilder::init(
    'Toyota',
    'Yaris',
    2,
    EngineBuilder::init(
        150,
        FuelTypeEnum::PETROL
    )->build()
)->build();

$result = $aPIController->submitAOneOfVehicle($oneOfVehicle);
```


# Submit a Map of Vehicles

Accepts a map of vehicle objects in the header.

```php
function submitAMapOfVehicles(array $mapOfVehicles): SuccessResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `mapOfVehicles` | [`array<string,Vehicle>`](../../doc/models/vehicle.md) | Header, Required | JSON-serialized map of Vehicle objects. |

## Response Type

[`SuccessResponse`](../../doc/models/success-response.md)

## Example Usage

```php
$mapOfVehicles = [
    'key0' => VehicleBuilder::init(
        'make0',
        'model8',
        230,
        EngineBuilder::init(
            78,
            FuelTypeEnum::PETROL
        )->build()
    )->build()
];

$result = $aPIController->submitAMapOfVehicles($mapOfVehicles);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Invalid input | `ApiException` |


# Submit an Array of Vehicles

Accepts an array of vehicles in the request body.

```php
function submitAnArrayOfVehicles(array $body): SuccessResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`Vehicle[]`](../../doc/models/vehicle.md) | Body, Required | - |

## Response Type

[`SuccessResponse`](../../doc/models/success-response.md)

## Example Usage

```php
$body = [
    VehicleBuilder::init(
        'Toyota',
        'Camry',
        2022,
        EngineBuilder::init(
            300,
            FuelTypeEnum::PETROL
        )->build()
    )->build()
];

$result = $aPIController->submitAnArrayOfVehicles($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Invalid input | `ApiException` |

