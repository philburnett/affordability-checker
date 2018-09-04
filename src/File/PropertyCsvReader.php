<?php declare(strict_types=1);

namespace AffordabilityChecker\File;

use AffordabilityChecker\Property\PropertyFactory;

class PropertyCsvReader
{
    /**
     * @var string
     */
    private $fileLocation;

    /**
     * PropertyCsvReader constructor.
     *
     * @param string $fileLocation
     */
    public function __construct(string $fileLocation)
    {
        $this->fileLocation = $fileLocation;
    }

    /**
     * @return array
     */
    public function getProperties(): array
    {
        $propertyFactory = new PropertyFactory();
        $properties      = [];

        if (($handle = fopen($this->fileLocation, "r")) !== false) {
            $i = 0;
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                if ($data[0] !== 'Id') {
                    $properties[] = $propertyFactory->createFromCvsLine($data);
                }
            }
            fclose($handle);
        }

        return $properties;
    }
}