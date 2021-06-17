<?php

declare(strict_types=1);

namespace BenefiaNew\StructType;

use BenefiaNew\StructType\CalculateResult;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateResponse StructType
 * @subpackage Structs
 */
class CalculateResponse extends AbstractStructBase
{
    /**
     * The CalculateResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CalculateResult|null
     */
    protected ?CalculateResult $CalculateResult = null;
    /**
     * Constructor method for CalculateResponse
     * @uses CalculateResponse::setCalculateResult()
     * @param \StructType\CalculateResult $calculateResult
     */
    public function __construct(?CalculateResult $calculateResult = null)
    {
        $this
            ->setCalculateResult($calculateResult);
    }
    /**
     * Get CalculateResult value
     * @return \StructType\CalculateResult|null
     */
    public function getCalculateResult(): ?CalculateResult
    {
        return $this->CalculateResult;
    }
    /**
     * Set CalculateResult value
     * @param \StructType\CalculateResult $calculateResult
     * @return \StructType\CalculateResponse
     */
    public function setCalculateResult(?CalculateResult $calculateResult = null): self
    {
        $this->CalculateResult = $calculateResult;
        
        return $this;
    }
}
