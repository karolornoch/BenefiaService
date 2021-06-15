<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeInstallmentPaymentResponse StructType
 * @subpackage Structs
 */
class MakeInstallmentPaymentResponse extends AbstractStructBase
{
    /**
     * The MakeInstallmentPaymentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\MakeInstallmentPaymentResult|null
     */
    protected ?\StructType\MakeInstallmentPaymentResult $MakeInstallmentPaymentResult = null;
    /**
     * Constructor method for MakeInstallmentPaymentResponse
     * @uses MakeInstallmentPaymentResponse::setMakeInstallmentPaymentResult()
     * @param \StructType\MakeInstallmentPaymentResult $makeInstallmentPaymentResult
     */
    public function __construct(?\StructType\MakeInstallmentPaymentResult $makeInstallmentPaymentResult = null)
    {
        $this
            ->setMakeInstallmentPaymentResult($makeInstallmentPaymentResult);
    }
    /**
     * Get MakeInstallmentPaymentResult value
     * @return \StructType\MakeInstallmentPaymentResult|null
     */
    public function getMakeInstallmentPaymentResult(): ?\StructType\MakeInstallmentPaymentResult
    {
        return $this->MakeInstallmentPaymentResult;
    }
    /**
     * Set MakeInstallmentPaymentResult value
     * @param \StructType\MakeInstallmentPaymentResult $makeInstallmentPaymentResult
     * @return \StructType\MakeInstallmentPaymentResponse
     */
    public function setMakeInstallmentPaymentResult(?\StructType\MakeInstallmentPaymentResult $makeInstallmentPaymentResult = null): self
    {
        $this->MakeInstallmentPaymentResult = $makeInstallmentPaymentResult;
        
        return $this;
    }
}
