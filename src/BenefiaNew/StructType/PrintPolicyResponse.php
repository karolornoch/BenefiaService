<?php

declare(strict_types=1);

namespace BenefiaNew\StructType;

use BenefiaNew\StructType\PrintPolicyResult;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintPolicyResponse StructType
 * @subpackage Structs
 */
class PrintPolicyResponse extends AbstractStructBase
{
    /**
     * The PrintPolicyResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PrintPolicyResult|null
     */
    protected ?PrintPolicyResult $PrintPolicyResult = null;
    /**
     * Constructor method for PrintPolicyResponse
     * @uses PrintPolicyResponse::setPrintPolicyResult()
     * @param \StructType\PrintPolicyResult $printPolicyResult
     */
    public function __construct(?PrintPolicyResult $printPolicyResult = null)
    {
        $this
            ->setPrintPolicyResult($printPolicyResult);
    }
    /**
     * Get PrintPolicyResult value
     * @return \StructType\PrintPolicyResult|null
     */
    public function getPrintPolicyResult(): ?PrintPolicyResult
    {
        return $this->PrintPolicyResult;
    }
    /**
     * Set PrintPolicyResult value
     * @param \StructType\PrintPolicyResult $printPolicyResult
     * @return \StructType\PrintPolicyResponse
     */
    public function setPrintPolicyResult(?PrintPolicyResult $printPolicyResult = null): self
    {
        $this->PrintPolicyResult = $printPolicyResult;
        
        return $this;
    }
}
