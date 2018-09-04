<?php declare(strict_types=1);

namespace AffordabilityChecker\File;

use AffordabilityChecker\BankStatement\BankStatement;
use AffordabilityChecker\BankStatement\StatementEntry;

class BankStatementCsvReader
{
    /**
     * @var string
     */
    private $fileLocation;

    /**
     * CsvBankStatementFactory constructor.
     *
     * @param string $fileLocation
     */
    public function __construct(string $fileLocation)
    {
        $this->fileLocation = $fileLocation;
    }

    /**
     * @return BankStatement
     */
    public function getStatement(): BankStatement
    {
        $statementEntries = [];
        if (($handle = fopen($this->fileLocation, "r")) !== false) {
            $i = 0;
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                if ($i > 10) {
                    $amount             = (float) str_replace('£', '', $data[3]);
                    $isCredit           = ($data[1] === 'Bank Credit') ? true : false;
                    $statementEntries[] = new StatementEntry($amount, $isCredit);
                }
                $i++;
            }
            fclose($handle);
        }

        return new BankStatement($statementEntries);
    }
}
