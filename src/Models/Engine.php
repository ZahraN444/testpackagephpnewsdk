<?php

declare(strict_types=1);

/*
 * APIWithComplexHeaderParametersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace APIWithComplexHeaderParametersLib\Models;

use APIWithComplexHeaderParametersLib\ApiHelper;
use stdClass;

class Engine implements \JsonSerializable
{
    /**
     * @var int
     */
    private $horsepower;

    /**
     * @var string
     */
    private $fuelType;

    /**
     * @param int $horsepower
     * @param string $fuelType
     */
    public function __construct(int $horsepower, string $fuelType)
    {
        $this->horsepower = $horsepower;
        $this->fuelType = $fuelType;
    }

    /**
     * Returns Horsepower.
     */
    public function getHorsepower(): int
    {
        return $this->horsepower;
    }

    /**
     * Sets Horsepower.
     *
     * @required
     * @maps horsepower
     */
    public function setHorsepower(int $horsepower): void
    {
        $this->horsepower = $horsepower;
    }

    /**
     * Returns Fuel Type.
     */
    public function getFuelType(): string
    {
        return $this->fuelType;
    }

    /**
     * Sets Fuel Type.
     *
     * @required
     * @maps fuelType
     * @factory \APIWithComplexHeaderParametersLib\Models\FuelTypeEnum::checkValue
     */
    public function setFuelType(string $fuelType): void
    {
        $this->fuelType = $fuelType;
    }

    /**
     * Converts the Engine object to a human-readable string representation.
     *
     * @return string The string representation of the Engine object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('Engine', ['horsepower' => $this->horsepower, 'fuelType' => $this->fuelType]);
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['horsepower'] = $this->horsepower;
        $json['fuelType']   = FuelTypeEnum::checkValue($this->fuelType);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
