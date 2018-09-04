<?php

use AffordabilityChecker\File\BankStatementCsvReader;
use AffordabilityChecker\File\PropertyCsvReader;
use AffordabilityChecker\Property\Property;
use AffordabilityChecker\PropertyAffordabilityChecker;

require_once('../vendor/autoload.php');

$propertyReader  = new PropertyCsvReader(__DIR__ . DIRECTORY_SEPARATOR . '../data/properties.csv');
$statementReader = new BankStatementCsvReader(__DIR__ . DIRECTORY_SEPARATOR . '../data/bank_statement.csv');
$checker = new PropertyAffordabilityChecker();

$properties      = $propertyReader->getProperties();
$statement = $statementReader->getStatement();

/** @var Property $property */
foreach ($properties as $property) {
    echo
        ($checker->isAffordable($property, $statement)? 'YES' : 'NO ') .
        " : " .
        $property->getAddress()->getFirstLine() . ', ' .
        $property->getAddress()->getPostcode() .

        "\n";
}
