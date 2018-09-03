<?php declare(strict_types=1);

namespace UnitTest\AffordabilityChecker\BankStatementTest;

use AffordabilityChecker\BankStatement\StatementEntry;
use DateTime;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class StatementEntryTest extends MockeryTestCase
{
    public function testConstructorAndGetters()
    {
        $date = DateTime::createFromFormat('U', '1535760000');

        $entry = new StatementEntry(
            $date,
            10.99,
            1000.54,
            'Test description',
            true
        );

        $this->assertEquals('1535760000', $entry->getDate()->format('U'));
        $this->assertEquals(10.99, $entry->getAmount());
        $this->assertEquals(1000.54, $entry->getBalance());
        $this->assertEquals('Test description', $entry->getDescription());
        $this->assertTrue($entry->isCredit());
    }
}