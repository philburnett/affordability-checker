<?php declare(strict_types=1);

namespace AffordabilityChecker\Property;

class PropertyFactory
{
    /**
     * @param $csvLine
     * @return Property
     */
    public function createFromCvsLine($csvLine): Property
    {
        [$addressLine1, $postcode] = explode(', ', $csvLine[1]);

        $address = new Address(
            $addressLine1,
            $postcode
        );

        return new Property($address, (int) $csvLine[2]);
    }
}
