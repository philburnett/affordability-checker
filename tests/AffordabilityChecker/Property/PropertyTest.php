<?php declare(strict_types=1);

namespace UnitTest\AffordabilityChecker\Property;

use AffordabilityChecker\Property\Address;
use AffordabilityChecker\Property\Property;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class PropertyTest extends MockeryTestCase
{
    public function testConstructor()
    {
        $mockAddress = Mockery::mock(Address::class);
        $property = new Property($mockAddress, 400);
        $this->assertEquals(400, $property->getPricePcm());
    }
}