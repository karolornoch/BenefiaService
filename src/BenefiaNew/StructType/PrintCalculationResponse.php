<?php

declare(strict_types=1);

namespace BenefiaNew\StructType;

use BenefiaNew\StructType\PrintCalculationResult;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintCalculationResponse StructType
 * @subpackage Structs
 */
class PrintCalculationResponse extends AbstractStructBase
{
    /**
     * The PrintCalculationResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PrintCalculationResult|null
     */
    protected ?PrintCalculationResult $PrintCalculationResult = null;
    /**
     * Constructor method for PrintCalculationResponse
     * @uses PrintCalculationResponse::setPrintCalculationResult()
     * @param \StructType\PrintCalculationResult $printCalculationResult
     */
    public function __construct(?PrintCalculationResult $printCalculationResult = null)
    {
        $this
            ->setPrintCalculationResult($printCalculationResult);
    }
    /**
     * Get PrintCalculationResult value
     * @return \StructType\PrintCalculationResult|null
     */
    public function getPrintCalculationResult(): ?PrintCalculationResult
    {
        return $this->PrintCalculationResult;
    }
    /**
     * Set PrintCalculationResult value
     * @param \StructType\PrintCalculationResult $printCalculationResult
     * @return \StructType\PrintCalculationResponse
     */
    public function setPrintCalculationResult(?PrintCalculationResult $printCalculationResult = null): self
    {
        $this->PrintCalculationResult = $printCalculationResult;
        
        return $this;
    }
}
