<?php declare(strict_types=1);

namespace UnitTest\AffordabilityChecker\BankStatementTest;

use AffordabilityChecker\BankStatement\BankStatement;
use AffordabilityChecker\BankStatement\StatementEntry;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class BankStatementTest extends MockeryTestCase
{
    public function testConstructorsAndGetters()
    {
        $bankStatement = new BankStatement([
            Mockery::mock(StatementEntry::class),
            Mockery::mock(StatementEntry::class),
            Mockery::mock(StatementEntry::class),
            Mockery::mock(StatementEntry::class),
            Mockery::mock(StatementEntry::class),
        ]);

        $this->assertEquals(5, count($bankStatement->getEntries()));
    }

    public function testGetIncome()
    {
        $bankStatement = $this->getStatement();
        $this->assertEquals(100, $bankStatement->getIncome());
    }

    public function testGetExpenses()
    {
        $bankStatement = $this->getStatement();
        $this->assertEquals(150, $bankStatement->getExpenses());
    }

    private function getStatement()
    {
        $mockData = $this->getMockEntries();

        $entries = [];
        foreach ($mockData as $data) {
            $mockEntry = \Mockery::mock(StatementEntry::class);
            $mockEntry->shouldReceive('isCredit')->once()->andReturn($data['isCredit']);
            $mockEntry->shouldReceive('getAmount')->andReturn($data['amount']);

            $entries[] = $mockEntry;
        }

        return new BankStatement($entries);
    }

    private function getMockEntries()
    {
        return [
            [
                'isCredit' => true,
                'amount'   => 60,
            ],
            [
                'isCredit' => true,
                'amount'   => 40,
            ],
            [
                'isCredit' => false,
                'amount'   => 100,
            ],
            [
                'isCredit' => false,
                'amount'   => 50,
            ],
        ];
    }
}