<?php declare(strict_types=1);

namespace AffordabilityChecker\BankStatement;

use DateTime;

class StatementEntry
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var boolean|bool
     */
    private $isCredit;

    /**
     * StatementEntry constructor.
     *
     * @param float   $amount
     * @param boolean $isCredit
     */
    public function __construct(
        float $amount,
        bool $isCredit
    ) {
        $this->amount   = $amount;
        $this->isCredit = $isCredit;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return bool
     */
    public function isCredit(): bool
    {
        return $this->isCredit;
    }
}
