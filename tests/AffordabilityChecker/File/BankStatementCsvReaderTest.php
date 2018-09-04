<?php declare(strict_types=1);

namespace UnitTest\AffordabilityChecker\File;

use AffordabilityChecker\BankStatement\BankStatement;
use AffordabilityChecker\File\BankStatementCsvReader;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class BankStatementCsvReaderTest extends MockeryTestCase
{
    public function testGetStatment()
    {
        $reader = new BankStatementCsvReader(__DIR__ . DIRECTORY_SEPARATOR . '/../../../data/bank_statement.csv');
        $statement = $reader->getStatement();

        $this->assertInstanceOf(BankStatement::class, $statement);
        $this->assertEquals(65, count($statement->getEntries()));
    }

}