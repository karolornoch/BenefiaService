<?php

declare(strict_types=1);

namespace BenefiaNew\StructType;

use BenefiaNew\StructType\MakeInstallmentPaymentResult;
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
    protected ?MakeInstallmentPaymentResult $MakeInstallmentPaymentResult = null;
    /**
     * Constructor method for MakeInstallmentPaymentResponse
     * @uses MakeInstallmentPaymentResponse::setMakeInstallmentPaymentResult()
     * @param \StructType\MakeInstallmentPaymentResult $makeInstallmentPaymentResult
     */
    public function __construct(?MakeInstallmentPaymentResult $makeInstallmentPaymentResult = null)
    {
        $this
            ->setMakeInstallmentPaymentResult($makeInstallmentPaymentResult);
    }
    /**
     * Get MakeInstallmentPaymentResult value
     * @return \StructType\MakeInstallmentPaymentResult|null
     */
    public function getMakeInstallmentPaymentResult(): ?MakeInstallmentPaymentResult
    {
        return $this->MakeInstallmentPaymentResult;
    }
    /**
     * Set MakeInstallmentPaymentResult value
     * @param \StructType\MakeInstallmentPaymentResult $makeInstallmentPaymentResult
     * @return \StructType\MakeInstallmentPaymentResponse
     */
    public function setMakeInstallmentPaymentResult(?MakeInstallmentPaymentResult $makeInstallmentPaymentResult = null): self
    {
        $this->MakeInstallmentPaymentResult = $makeInstallmentPaymentResult;
        
        return $this;
    }
}
