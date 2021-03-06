<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operational
 */
class Operational
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $operationalName;

    /**
     * @var string
     */
    private $operationalMonth;

    /**
     * @var string
     */
     private $operationalYear;

    /**
     * @var string
     */
    private $operationalQty;

    /**
     * @var string
     */
    private $operationalUnitprice;

        /**
     * @var string
     */
    private $operationalUnit;

    /**
     * @var string
     */
    private $operationalTotal;

    /**
     * @var string
     */
    private $operationalCategory;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set operationaName
     *
     * @param string $operationaName
     * @return Operational
     */
    public function setOperationalName($operationalName)
    {
        $this->operationalName = $operationalName;

        return $this;
    }

    /**
     * Get operationaName
     *
     * @return string 
     */
    public function getOperationalName()
    {
        return $this->operationalName;
    }

    /**
     * Set operationalDate
     *
     * @param string $operationalDate
     * @return Operational
     */
    public function setOperationalDate($operationalDate)
    {
        $this->operationalDate = $operationalDate;

        return $this;
    }

    /**
     * Get operationalDate
     *
     * @return string 
     */
    public function getOperationalDate()
    {
        return $this->operationalDate;
    }

    /**
     * Set operationalQty
     *
     * @param string $operationalQty
     * @return Operational
     */
    public function setOperationalQty($operationalQty)
    {
        $this->operationalQty = $operationalQty;

        return $this;
    }

    /**
     * Get operationalQty
     *
     * @return string 
     */
    public function getOperationalQty()
    {
        return $this->operationalQty;
    }

    /**
     * Set operationalUnitprice
     *
     * @param string $operationalUnitprice
     * @return Operational
     */
    public function setOperationalUnitprice($operationalUnitprice)
    {
        $this->operationalUnitprice = $operationalUnitprice;

        return $this;
    }

    /**
     * Get operationalUnitprice
     *
     * @return string 
     */
    public function getOperationalUnitprice()
    {
        return $this->operationalUnitprice;
    }

    /**
     * Set operationalTotal
     *
     * @param string $operationalTotal
     * @return Operational
     */
    public function setOperationalTotal($operationalTotal)
    {
        $this->operationalTotal = $operationalTotal;

        return $this;
    }

    /**
     * Get operationalTotal
     *
     * @return string 
     */
    public function getOperationalTotal()
    {
        return $this->operationalTotal;
    }

     /**
     * Set operationalTotal
     *
     * @param string $operationalTotal
     * @return Operational
     */
    public function setOperationalCategory($operationalCategory)
    {
        $this->operationalCategory = $operationalCategory;

        return $this;
    }

    /**
     * Get operationalCategory
     *
     * @return string 
     */
    public function getOperationalCategory()
    {
        return $this->operationalCategory;
    }

    /**
     * Set operationalMonth
     *
     * @param string $operationalTotal
     * @return Operational
     */
    public function setOperationalMonth($operationalMonth)
    {
        $this->operationalMonth = $operationalMonth;

        return $this;
    }

    /**
     * Get operationalCategory
     *
     * @return string 
     */
    public function getOperationalMonth()
    {
        return $this->operationalMonth;
    }

    /**
     * Set operationalTotal
     *
     * @param string $operationalTotal
     * @return Operational
     */
    public function setOperationalYear($operationalYear)
    {
        $this->operationalYear = $operationalYear;

        return $this;
    }

    /**
     * Get operationalCategory
     *
     * @return string 
     */
    public function getOperationalYear()
    {
        return $this->operationalYear;
    }
}
