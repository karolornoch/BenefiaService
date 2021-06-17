<?php

declare(strict_types=1);

namespace BenefiaNew\StructType;

use BenefiaNew\StructType\PrintApplicationResult;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintApplicationResponse StructType
 * @subpackage Structs
 */
class PrintApplicationResponse extends AbstractStructBase
{
    /**
     * The PrintApplicationResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PrintApplicationResult|null
     */
    protected ?PrintApplicationResult $PrintApplicationResult = null;
    /**
     * Constructor method for PrintApplicationResponse
     * @uses PrintApplicationResponse::setPrintApplicationResult()
     * @param \StructType\PrintApplicationResult $printApplicationResult
     */
    public function __construct(?PrintApplicationResult $printApplicationResult = null)
    {
        $this
            ->setPrintApplicationResult($printApplicationResult);
    }
    /**
     * Get PrintApplicationResult value
     * @return \StructType\PrintApplicationResult|null
     */
    public function getPrintApplicationResult(): ?PrintApplicationResult
    {
        return $this->PrintApplicationResult;
    }
    /**
     * Set PrintApplicationResult value
     * @param \StructType\PrintApplicationResult $printApplicationResult
     * @return \StructType\PrintApplicationResponse
     */
    public function setPrintApplicationResult(?PrintApplicationResult $printApplicationResult = null): self
    {
        $this->PrintApplicationResult = $printApplicationResult;
        
        return $this;
    }
}
