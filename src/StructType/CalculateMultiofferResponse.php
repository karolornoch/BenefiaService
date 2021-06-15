<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateMultiofferResponse StructType
 * @subpackage Structs
 */
class CalculateMultiofferResponse extends AbstractStructBase
{
    /**
     * The CalculateMultiofferResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CalculateMultiofferResult|null
     */
    protected ?\StructType\CalculateMultiofferResult $CalculateMultiofferResult = null;
    /**
     * Constructor method for CalculateMultiofferResponse
     * @uses CalculateMultiofferResponse::setCalculateMultiofferResult()
     * @param \StructType\CalculateMultiofferResult $calculateMultiofferResult
     */
    public function __construct(?\StructType\CalculateMultiofferResult $calculateMultiofferResult = null)
    {
        $this
            ->setCalculateMultiofferResult($calculateMultiofferResult);
    }
    /**
     * Get CalculateMultiofferResult value
     * @return \StructType\CalculateMultiofferResult|null
     */
    public function getCalculateMultiofferResult(): ?\StructType\CalculateMultiofferResult
    {
        return $this->CalculateMultiofferResult;
    }
    /**
     * Set CalculateMultiofferResult value
     * @param \StructType\CalculateMultiofferResult $calculateMultiofferResult
     * @return \StructType\CalculateMultiofferResponse
     */
    public function setCalculateMultiofferResult(?\StructType\CalculateMultiofferResult $calculateMultiofferResult = null): self
    {
        $this->CalculateMultiofferResult = $calculateMultiofferResult;
        
        return $this;
    }
}
