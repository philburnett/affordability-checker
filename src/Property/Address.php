<?php declare(strict_types=1);

namespace AffordabilityChecker\Property;

class Address
{
    /**
     * @var string
     */
    private $firstLine;

    /**
     * @var string
     */
    private $postcode;

    /**
     * Address constructor.
     *
     * @param string $firstLine
     * @param string $postcode
     */
    public function __construct(string $firstLine, string $postcode)
    {
        $this->firstLine = $firstLine;
        $this->postcode  = $postcode;
    }

    /**
     * @return string
     */
    public function getFirstLine(): string
    {
        return $this->firstLine;
    }

    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }
}
