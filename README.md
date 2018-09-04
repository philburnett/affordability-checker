# Property Availablility Checker

## Installation

Clone project repository:

```
mkdir affordability-checker
cd affordability-checker
git clone https://github.com/philburnett/affordability-checker.git .
```

Install composer dependencies (requires composer on path):

```
composer install
```

Run Tests

```
./vendor/bin/phpunit
```

Run Affordability Check on Properties
```
cd scripts
php csv-affordability-report-generator.php
```

## Notes
 - Lack of validation of data extracted from CSV's
 - Partial models, on the data specifically required for the task is extracted