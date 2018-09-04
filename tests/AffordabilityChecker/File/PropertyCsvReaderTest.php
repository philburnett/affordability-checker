<?php declare(strict_types=1);

namespace UnitTest\AffordabilityChecker\File;

use AffordabilityChecker\File\PropertyCsvReader;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class PropertyCsvReaderTest extends MockeryTestCase
{
    public function testReturnsCorrectNumberOfProperties()
    {
        $reader = new PropertyCsvReader(__DIR__ . DIRECTORY_SEPARATOR . '/../../../data/properties.csv');
        $properties = $reader->getProperties();
        $this->assertEquals(11, count($properties));
    }
}