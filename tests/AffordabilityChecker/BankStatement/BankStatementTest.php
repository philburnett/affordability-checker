<?php declare(strict_types=1);

namespace UnitTest\AffordabilityChecker\BankStatementTest;

use AffordabilityChecker\BankStatement\BankStatement;
use DateTime;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class BankStatementTest extends MockeryTestCase
{
    public function testConstructorsAndGetters()
    {
        $start = DateTime::createFromFormat('U', '1533081600');
        $end   = DateTime::createFromFormat('U', '1535760000');

        $bankStatement = new BankStatement(
            'testbank',
            'testname',
            'testaddressline1',
            'testaddressline2',
            $start,
            $end
        );

        $this->assertEquals('testbank', $bankStatement->getBankName());
        $this->assertEquals('testname', $bankStatement->getCustomerName());
        $this->assertEquals('testaddressline1', $bankStatement->getAddressLine1());
        $this->assertEquals('testaddressline2', $bankStatement->getAddressLine2());
        $this->assertEquals(1533081600, $bankStatement->getStart()->format('U'));
        $this->assertEquals(1535760000, $bankStatement->getEnd()->format('U'));
    }
}