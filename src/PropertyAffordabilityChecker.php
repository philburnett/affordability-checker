<?php declare(strict_types=1);

namespace AffordabilityChecker;

use AffordabilityChecker\BankStatement\BankStatement;
use AffordabilityChecker\Property\Property;

class PropertyAffordabilityChecker
{
    /**
     * @param Property      $property
     * @param BankStatement $statement
     * @return bool
     */
    public function isAffordable(Property $property, BankStatement $statement): bool
    {
        $income   = $statement->getIncome();
        $expenses = $statement->getExpenses();

        $credit         = $income - $expenses;
        $requiredCredit = $property->getPricePcm() * 1.25;

        if ($credit > $requiredCredit) {
            return true;
        }

        return false;
    }
}
