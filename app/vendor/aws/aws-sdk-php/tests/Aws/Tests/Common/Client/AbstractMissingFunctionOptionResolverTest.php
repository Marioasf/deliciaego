<?php
/**
 * Copyright 2010-2012 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace Aws\Tests\Common\Client;

/**
 * @covers Aws\Common\Client\AbstractMissingFunctionOptionResolver
 */
class AbstractMissingFunctionOptionResolverTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testOwnsMissingFunction()
    {
        $foo = function() {};
        $mock = $this->getMockForAbstractClass('Aws\Common\Client\AbstractMissingFunctionOptionResolver');
        $mock->setMissingFunction($foo);
        $this->assertSame($foo, $this->readAttribute($mock, 'missingFunction'));
    }

    /**
     * @expectedException Aws\Common\Exception\InvalidArgumentException
     */
    public function testMissingFunctionMustBeCallable()
    {
        $foo = false;
        $mock = $this->getMockForAbstractClass('Aws\Common\Client\AbstractMissingFunctionOptionResolver');
        $mock->setMissingFunction($foo);
    }

    public function testOwnsMustImplement()
    {
        $mock = $this->getMockForAbstractClass('Aws\Common\Client\AbstractMissingFunctionOptionResolver');
        $mock->setMustImplement(__CLASS__);
        $this->assertEquals(__CLASS__, $this->readAttribute($mock, 'mustImplement'));
    }
}
