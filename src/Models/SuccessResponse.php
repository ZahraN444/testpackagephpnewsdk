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

class SuccessResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $message;

    /**
     * Returns Message.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     *
     * @maps message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * Converts the SuccessResponse object to a human-readable string representation.
     *
     * @return string The string representation of the SuccessResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('SuccessResponse', ['message' => $this->message]);
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
        if (isset($this->message)) {
            $json['message'] = $this->message;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
