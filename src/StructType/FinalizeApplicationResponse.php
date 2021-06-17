<?php

declare(strict_types=1);

namespace BenefiaNew\StructType;

use BenefiaNew\StructType\FinalizeApplicationResult;
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
    protected ?FinalizeApplicationResult $FinalizeApplicationResult = null;
    /**
     * Constructor method for FinalizeApplicationResponse
     * @uses FinalizeApplicationResponse::setFinalizeApplicationResult()
     * @param \StructType\FinalizeApplicationResult $finalizeApplicationResult
     */
    public function __construct(?FinalizeApplicationResult $finalizeApplicationResult = null)
    {
        $this
            ->setFinalizeApplicationResult($finalizeApplicationResult);
    }
    /**
     * Get FinalizeApplicationResult value
     * @return \StructType\FinalizeApplicationResult|null
     */
    public function getFinalizeApplicationResult(): ?FinalizeApplicationResult
    {
        return $this->FinalizeApplicationResult;
    }
    /**
     * Set FinalizeApplicationResult value
     * @param \StructType\FinalizeApplicationResult $finalizeApplicationResult
     * @return \StructType\FinalizeApplicationResponse
     */
    public function setFinalizeApplicationResult(?FinalizeApplicationResult $finalizeApplicationResult = null): self
    {
        $this->FinalizeApplicationResult = $finalizeApplicationResult;
        
        return $this;
    }
}
