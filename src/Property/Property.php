<?php declare(strict_types=1);

namespace AffordabilityChecker\Property;

class Property
{
    /**
     * @var Address
     */
    private $address;

    /**
     * @var int
     */
    private $pricePcm;

    /**
     * Property constructor.
     *
     * @param Address $address
     * @param int     $pricePcm
     */
    public function __construct(Address $address, int $pricePcm)
    {
        $this->address  = $address;
        $this->pricePcm = $pricePcm;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @return int
     */
    public function getPricePcm(): int
    {
        return $this->pricePcm;
    }
}
