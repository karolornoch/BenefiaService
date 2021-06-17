<?php

declare(strict_types=1);

namespace BenefiaNew\StructType;

use BenefiaNew\StructType\CalculateApplicationResult;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateApplicationResponse StructType
 * @subpackage Structs
 */
class CalculateApplicationResponse extends AbstractStructBase
{
    /**
     * The CalculateApplicationResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CalculateApplicationResult|null
     */
    protected ?CalculateApplicationResult $CalculateApplicationResult = null;
    /**
     * Constructor method for CalculateApplicationResponse
     * @uses CalculateApplicationResponse::setCalculateApplicationResult()
     * @param \StructType\CalculateApplicationResult $calculateApplicationResult
     */
    public function __construct(?CalculateApplicationResult $calculateApplicationResult = null)
    {
        $this
            ->setCalculateApplicationResult($calculateApplicationResult);
    }
    /**
     * Get CalculateApplicationResult value
     * @return \StructType\CalculateApplicationResult|null
     */
    public function getCalculateApplicationResult(): ?CalculateApplicationResult
    {
        return $this->CalculateApplicationResult;
    }
    /**
     * Set CalculateApplicationResult value
     * @param \StructType\CalculateApplicationResult $calculateApplicationResult
     * @return \StructType\CalculateApplicationResponse
     */
    public function setCalculateApplicationResult(?CalculateApplicationResult $calculateApplicationResult = null): self
    {
        $this->CalculateApplicationResult = $calculateApplicationResult;
        
        return $this;
    }
}
