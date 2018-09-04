<?php declare(strict_types=1);

namespace UnitTest\AffordabilityChecker;

use AffordabilityChecker\BankStatement\BankStatement;
use AffordabilityChecker\Property\Property;
use AffordabilityChecker\PropertyAffordabilityChecker;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class PropertyAffordabilityCheckerTest extends MockeryTestCase
{
    public function testIsAffordableReturnsTrue()
    {
        $mockProperty = \Mockery::mock(Property::class);
        $mockStatement = \Mockery::mock(BankStatement::class);

        $mockStatement->shouldReceive('getIncome')->once()->andReturn(250);
        $mockStatement->shouldReceive('getExpenses')->once()->andReturn(125);
        $mockProperty->shouldReceive('getPricePcm')->once()->andReturn(99);


        $checker = new PropertyAffordabilityChecker();
        $this->assertTrue($checker->isAffordable($mockProperty, $mockStatement));
    }

    public function testIsAffordableReturnsFalse()
    {
        $mockProperty = \Mockery::mock(Property::class);
        $mockStatement = \Mockery::mock(BankStatement::class);

        $mockStatement->shouldReceive('getIncome')->once()->andReturn(250);
        $mockStatement->shouldReceive('getExpenses')->once()->andReturn(125);
        $mockProperty->shouldReceive('getPricePcm')->once()->andReturn(100);


        $checker = new PropertyAffordabilityChecker();
        $this->assertFalse($checker->isAffordable($mockProperty, $mockStatement));
    }
}
