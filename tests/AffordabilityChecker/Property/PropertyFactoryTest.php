<?php declare(strict_types=1);

namespace UnitTest\AffordabilityChecker\Property;

use AffordabilityChecker\Property\Address;
use AffordabilityChecker\Property\Property;
use AffordabilityChecker\Property\PropertyFactory;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class PropertyFactoryTest extends MockeryTestCase
{
    public function testCreatesFactory()
    {
        $factory  = new PropertyFactory();
        $property = $factory->createFromCvsLine([
                '1',
                '99  Brackley Road, KW17 9QS',
                '300',
            ]
        );
        $address  = $property->getAddress();

        $this->assertInstanceOf(Property::class, $property);
        $this->assertInstanceOf(Address::class, $address);

        $this->assertEquals(300, $property->getPricePcm());
        $this->assertEquals('99  Brackley Road', $address->getFirstLine());
        $this->assertEquals('KW17 9QS', $address->getPostcode());
    }
}
