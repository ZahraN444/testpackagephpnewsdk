<?php

declare(strict_types=1);

/*
 * APIWithComplexHeaderParametersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace APIWithComplexHeaderParametersLib\Tests\Controllers;

use APIWithComplexHeaderParametersLib\APIWithComplexHeaderParametersClient;
use APIWithComplexHeaderParametersLib\Tests\ClientFactory;
use Core\TestCase\CoreTestCase;
use Core\Types\CallbackCatcher;
use PHPUnit\Framework\TestCase;

class BaseTestController extends TestCase
{
    /**
     * @var CallbackCatcher Callback
     */
    protected static $callbackCatcher;

    protected function newTestCase($result): CoreTestCase
    {
        return new CoreTestCase($this, self::$callbackCatcher, $result);
    }

    protected static function getClient(): APIWithComplexHeaderParametersClient
    {
        self::$callbackCatcher = new CallbackCatcher();
        return ClientFactory::create(self::$callbackCatcher);
    }
}
