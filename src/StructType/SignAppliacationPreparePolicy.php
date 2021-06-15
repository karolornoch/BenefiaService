<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignAppliacationPreparePolicy StructType
 * @subpackage Structs
 */
class SignAppliacationPreparePolicy extends AbstractStructBase
{
    /**
     * The applicationOvertNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $applicationOvertNumber = null;
    /**
     * The additionalProcessData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalSalesProcessData|null
     */
    protected ?\StructType\AdditionalSalesProcessData $additionalProcessData = null;
    /**
     * Constructor method for SignAppliacationPreparePolicy
     * @uses SignAppliacationPreparePolicy::setApplicationOvertNumber()
     * @uses SignAppliacationPreparePolicy::setAdditionalProcessData()
     * @param string $applicationOvertNumber
     * @param \StructType\AdditionalSalesProcessData $additionalProcessData
     */
    public function __construct(?string $applicationOvertNumber = null, ?\StructType\AdditionalSalesProcessData $additionalProcessData = null)
    {
        $this
            ->setApplicationOvertNumber($applicationOvertNumber)
            ->setAdditionalProcessData($additionalProcessData);
    }
    /**
     * Get applicationOvertNumber value
     * @return string|null
     */
    public function getApplicationOvertNumber(): ?string
    {
        return $this->applicationOvertNumber;
    }
    /**
     * Set applicationOvertNumber value
     * @param string $applicationOvertNumber
     * @return \StructType\SignAppliacationPreparePolicy
     */
    public function setApplicationOvertNumber(?string $applicationOvertNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($applicationOvertNumber) && !is_string($applicationOvertNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($applicationOvertNumber, true), gettype($applicationOvertNumber)), __LINE__);
        }
        $this->applicationOvertNumber = $applicationOvertNumber;
        
        return $this;
    }
    /**
     * Get additionalProcessData value
     * @return \StructType\AdditionalSalesProcessData|null
     */
    public function getAdditionalProcessData(): ?\StructType\AdditionalSalesProcessData
    {
        return $this->additionalProcessData;
    }
    /**
     * Set additionalProcessData value
     * @param \StructType\AdditionalSalesProcessData $additionalProcessData
     * @return \StructType\SignAppliacationPreparePolicy
     */
    public function setAdditionalProcessData(?\StructType\AdditionalSalesProcessData $additionalProcessData = null): self
    {
        $this->additionalProcessData = $additionalProcessData;
        
        return $this;
    }
}
