<?php declare(strict_types=1);

namespace AffordabilityChecker\BankStatement;

class BankStatement
{
    /**
     * @var array
     */
    private $entries;

    /**
     * BankStatement constructor.
     *
     * @param array $entries
     */
    public function __construct(
        array $entries
    ) {
        $this->entries = $entries;
    }

    /**
     * @return float
     */
    public function getIncome(): float
    {
        $total = 0;
        /** @var StatementEntry $entry */
        foreach ($this->entries as $entry) {
            if ($entry->isCredit()) {
                $total += $entry->getAmount();
            }
        }

        return $total;
    }

    /**
     * @return float
     */
    public function getExpenses(): float
    {
        $total = 0;
        /** @var StatementEntry $entry */
        foreach ($this->entries as $entry) {
            if (!$entry->isCredit()) {
                $total += $entry->getAmount();
            }
        }

        return $total;
    }

    /**
     * @return array
     */
    public function getEntries(): array
    {
        return $this->entries;
    }
}
