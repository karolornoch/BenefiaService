<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FinalizeApplicationResponse StructType
 * @subpackage Structs
 */
class FinalizeApplicationResponse extends AbstractStructBase
{
    /**
     * The FinalizeApplicationResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\FinalizeApplicationResult|null
     */
    protected ?\StructType\FinalizeApplicationResult $FinalizeApplicationResult = null;
    /**
     * Constructor method for FinalizeApplicationResponse
     * @uses FinalizeApplicationResponse::setFinalizeApplicationResult()
     * @param \StructType\FinalizeApplicationResult $finalizeApplicationResult
     */
    public function __construct(?\StructType\FinalizeApplicationResult $finalizeApplicationResult = null)
    {
        $this
            ->setFinalizeApplicationResult($finalizeApplicationResult);
    }
    /**
     * Get FinalizeApplicationResult value
     * @return \StructType\FinalizeApplicationResult|null
     */
    public function getFinalizeApplicationResult(): ?\StructType\FinalizeApplicationResult
    {
        return $this->FinalizeApplicationResult;
    }
    /**
     * Set FinalizeApplicationResult value
     * @param \StructType\FinalizeApplicationResult $finalizeApplicationResult
     * @return \StructType\FinalizeApplicationResponse
     */
    public function setFinalizeApplicationResult(?\StructType\FinalizeApplicationResult $finalizeApplicationResult = null): self
    {
        $this->FinalizeApplicationResult = $finalizeApplicationResult;
        
        return $this;
    }
}
