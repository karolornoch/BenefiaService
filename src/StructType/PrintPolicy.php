<?php

declare(strict_types=1);

namespace BenefiaNew\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintPolicy StructType
 * @subpackage Structs
 */
class PrintPolicy extends AbstractStructBase
{
    /**
     * The policyNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $policyNumber = null;
    /**
     * Constructor method for PrintPolicy
     * @uses PrintPolicy::setPolicyNumber()
     * @param string $policyNumber
     */
    public function __construct(?string $policyNumber = null)
    {
        $this
            ->setPolicyNumber($policyNumber);
    }
    /**
     * Get policyNumber value
     * @return string|null
     */
    public function getPolicyNumber(): ?string
    {
        return $this->policyNumber;
    }
    /**
     * Set policyNumber value
     * @param string $policyNumber
     * @return \StructType\PrintPolicy
     */
    public function setPolicyNumber(?string $policyNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($policyNumber) && !is_string($policyNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($policyNumber, true), gettype($policyNumber)), __LINE__);
        }
        $this->policyNumber = $policyNumber;
        
        return $this;
    }
}
