<?php

declare(strict_types=1);

namespace BenefiaNew\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectedVariant StructType
 * @subpackage Structs
 */
class SelectedVariant extends AbstractStructBase
{
    /**
     * The RiderCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RiderCode = null;
    /**
     * The VariantCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VariantCode = null;
    /**
     * Constructor method for SelectedVariant
     * @uses SelectedVariant::setRiderCode()
     * @uses SelectedVariant::setVariantCode()
     * @param string $riderCode
     * @param string $variantCode
     */
    public function __construct(?string $riderCode = null, ?string $variantCode = null)
    {
        $this
            ->setRiderCode($riderCode)
            ->setVariantCode($variantCode);
    }
    /**
     * Get RiderCode value
     * @return string|null
     */
    public function getRiderCode(): ?string
    {
        return $this->RiderCode;
    }
    /**
     * Set RiderCode value
     * @param string $riderCode
     * @return \BenefiaNew\StructType\SelectedVariant
     */
    public function setRiderCode(?string $riderCode = null): self
    {
        // validation for constraint: string
        if (!is_null($riderCode) && !is_string($riderCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($riderCode, true), gettype($riderCode)), __LINE__);
        }
        $this->RiderCode = $riderCode;
        
        return $this;
    }
    /**
     * Get VariantCode value
     * @return string|null
     */
    public function getVariantCode(): ?string
    {
        return $this->VariantCode;
    }
    /**
     * Set VariantCode value
     * @param string $variantCode
     * @return \BenefiaNew\StructType\SelectedVariant
     */
    public function setVariantCode(?string $variantCode = null): self
    {
        // validation for constraint: string
        if (!is_null($variantCode) && !is_string($variantCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($variantCode, true), gettype($variantCode)), __LINE__);
        }
        $this->VariantCode = $variantCode;
        
        return $this;
    }
}
