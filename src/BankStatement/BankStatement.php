<?php declare(strict_types=1);

namespace AffordabilityChecker\BankStatement;

use DateTime;

class BankStatement
{
    /**
     * @var string
     */
    private $bankName;

    /**
     * @var string
     */
    private $customerName;

    /**
     * @var string
     */
    private $addressLine1;

    /**
     * @var string
     */
    private $addressLine2;

    /**
     * @var DateTime
     */
    private $start;

    /**
     * @var DateTime
     */
    private $end;

    /**
     * @var array
     */
    private $entries;

    /**
     * BankStatement constructor.
     *
     * @param string   $bankName
     * @param string   $customerName
     * @param string   $addressLine1
     * @param string   $addressLine2
     * @param DateTime $start
     * @param DateTime $end
     */
    public function __construct(
        string $bankName,
        string $customerName,
        string $addressLine1,
        string $addressLine2,
        DateTime $start,
        DateTime $end
    ) {
        $this->bankName     = $bankName;
        $this->customerName = $customerName;
        $this->addressLine1 = $addressLine1;
        $this->addressLine2 = $addressLine2;
        $this->start        = $start;
        $this->end          = $end;
        $this->entries      = [];
    }

    /**
     * @return string
     */
    public function getBankName(): string
    {
        return $this->bankName;
    }/**
     * @return string
     */
    public function getCustomerName(): string
    {
        return $this->customerName;
    }/**
     * @return string
     */
    public function getAddressLine1(): string
    {
        return $this->addressLine1;
    }/**
     * @return string
     */
    public function getAddressLine2(): string
    {
        return $this->addressLine2;
    }/**
     * @return DateTime
     */
    public function getStart(): DateTime
    {
        return $this->start;
    }/**
     * @return DateTime
     */
    public function getEnd(): DateTime
    {
        return $this->end;
    }

    /**
     * @param StatementEntry $entry
     */
    public function addEntry(StatementEntry $entry)
    {
        $this->entries[] = $entry;
    }

    /**
     * @return array
     */
    public function getEntries(): array
    {
        return $this->entries;
    }
}
