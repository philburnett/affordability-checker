<?php declare(strict_types=1);

namespace UnitTest\AffordabilityChecker\BankStatementTest;

use AffordabilityChecker\BankStatement\StatementEntry;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class StatementEntryTest extends MockeryTestCase
{
    public function testConstructor()
    {
        $entry = new StatementEntry(
            10.99,
            true
        );

        $this->assertEquals(10.99, $entry->getAmount());
        $this->assertTrue($entry->isCredit());
    }
}