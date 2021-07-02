<?php

declare(strict_types=1);

namespace BenefiaNew\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignAppliacationPreparePolicyResponse StructType
 * @subpackage Structs
 */
class SignAppliacationPreparePolicyResponse extends AbstractStructBase
{
    /**
     * The SignAppliacationPreparePolicyResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SignAppliacationPreparePolicyResult|null
     */
    protected ?SignAppliacationPreparePolicyResult $SignAppliacationPreparePolicyResult = null;
    /**
     * Constructor method for SignAppliacationPreparePolicyResponse
     * @uses SignAppliacationPreparePolicyResponse::setSignAppliacationPreparePolicyResult()
     * @param \StructType\SignAppliacationPreparePolicyResult $signAppliacationPreparePolicyResult
     */
    public function __construct(?SignAppliacationPreparePolicyResult $signAppliacationPreparePolicyResult = null)
    {
        $this
            ->setSignAppliacationPreparePolicyResult($signAppliacationPreparePolicyResult);
    }
    /**
     * Get SignAppliacationPreparePolicyResult value
     * @return \StructType\SignAppliacationPreparePolicyResult|null
     */
    public function getSignAppliacationPreparePolicyResult(): ?SignAppliacationPreparePolicyResult
    {
        return $this->SignAppliacationPreparePolicyResult;
    }
    /**
     * Set SignAppliacationPreparePolicyResult value
     * @param \StructType\SignAppliacationPreparePolicyResult $signAppliacationPreparePolicyResult
     * @return \StructType\SignAppliacationPreparePolicyResponse
     */
    public function setSignAppliacationPreparePolicyResult(?SignAppliacationPreparePolicyResult $signAppliacationPreparePolicyResult = null): self
    {
        $this->SignAppliacationPreparePolicyResult = $signAppliacationPreparePolicyResult;
        
        return $this;
    }
}
