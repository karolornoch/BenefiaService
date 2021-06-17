<?php

declare(strict_types=1);

namespace BenefiaNew\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsentResult StructType
 * @subpackage Structs
 */
class ConsentResult extends AbstractStructBase
{
    /**
     * The ConsentId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $ConsentId;
    /**
     * The Agreed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Agreed = null;
    /**
     * Constructor method for ConsentResult
     * @uses ConsentResult::setConsentId()
     * @uses ConsentResult::setAgreed()
     * @param int $consentId
     * @param string $agreed
     */
    public function __construct(int $consentId, ?string $agreed = null)
    {
        $this
            ->setConsentId($consentId)
            ->setAgreed($agreed);
    }
    /**
     * Get ConsentId value
     * @return int
     */
    public function getConsentId(): int
    {
        return $this->ConsentId;
    }
    /**
     * Set ConsentId value
     * @param int $consentId
     * @return \StructType\ConsentResult
     */
    public function setConsentId(int $consentId): self
    {
        // validation for constraint: int
        if (!is_null($consentId) && !(is_int($consentId) || ctype_digit($consentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($consentId, true), gettype($consentId)), __LINE__);
        }
        $this->ConsentId = $consentId;
        
        return $this;
    }
    /**
     * Get Agreed value
     * @return string|null
     */
    public function getAgreed(): ?string
    {
        return $this->Agreed;
    }
    /**
     * Set Agreed value
     * @param string $agreed
     * @return \StructType\ConsentResult
     */
    public function setAgreed(?string $agreed = null): self
    {
        // validation for constraint: string
        if (!is_null($agreed) && !is_string($agreed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agreed, true), gettype($agreed)), __LINE__);
        }
        $this->Agreed = $agreed;
        
        return $this;
    }
}
