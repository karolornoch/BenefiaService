<?php

declare(strict_types=1);

namespace StructType;

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
    protected ?\StructType\PrintCalculationResult $PrintCalculationResult = null;
    /**
     * Constructor method for PrintCalculationResponse
     * @uses PrintCalculationResponse::setPrintCalculationResult()
     * @param \StructType\PrintCalculationResult $printCalculationResult
     */
    public function __construct(?\StructType\PrintCalculationResult $printCalculationResult = null)
    {
        $this
            ->setPrintCalculationResult($printCalculationResult);
    }
    /**
     * Get PrintCalculationResult value
     * @return \StructType\PrintCalculationResult|null
     */
    public function getPrintCalculationResult(): ?\StructType\PrintCalculationResult
    {
        return $this->PrintCalculationResult;
    }
    /**
     * Set PrintCalculationResult value
     * @param \StructType\PrintCalculationResult $printCalculationResult
     * @return \StructType\PrintCalculationResponse
     */
    public function setPrintCalculationResult(?\StructType\PrintCalculationResult $printCalculationResult = null): self
    {
        $this->PrintCalculationResult = $printCalculationResult;
        
        return $this;
    }
}
