<?php declare(strict_types=1);

namespace AffordabilityChecker\BankStatement;

use DateTime;

class StatementEntry
{
    /**
     * @var DateTime
     */
    private $date;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var float
     */
    private $balance;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean|bool
     */
    private $isCredit;

    /**
     * StatementEntry constructor.
     *
     * @param DateTime $date
     * @param float    $amount
     * @param float    $balance
     * @param string   $description
     * @param boolean  $isCredit
     */
    public function __construct(
        DateTime $date,
        float $amount,
        float $balance,
        string $description,
        bool $isCredit
    ) {
        $this->date = $date;
        $this->amount = $amount;
        $this->balance = $balance;
        $this->description = $description;
        $this->isCredit = $isCredit;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function isCredit(): bool
    {
        return $this->isCredit;
    }
}
