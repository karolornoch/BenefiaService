<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalSalesProcessData StructType
 * @subpackage Structs
 */
class AdditionalSalesProcessData extends AbstractStructBase
{
    /**
     * The OnlyDataUpdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $OnlyDataUpdate;
    /**
     * The ConsentResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfConsentResult|null
     */
    protected ?\ArrayType\ArrayOfConsentResult $ConsentResults = null;
    /**
     * The MultiofferData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\MultiofferData|null
     */
    protected ?\StructType\MultiofferData $MultiofferData = null;
    /**
     * Constructor method for AdditionalSalesProcessData
     * @uses AdditionalSalesProcessData::setOnlyDataUpdate()
     * @uses AdditionalSalesProcessData::setConsentResults()
     * @uses AdditionalSalesProcessData::setMultiofferData()
     * @param bool $onlyDataUpdate
     * @param \ArrayType\ArrayOfConsentResult $consentResults
     * @param \StructType\MultiofferData $multiofferData
     */
    public function __construct(bool $onlyDataUpdate, ?\ArrayType\ArrayOfConsentResult $consentResults = null, ?\StructType\MultiofferData $multiofferData = null)
    {
        $this
            ->setOnlyDataUpdate($onlyDataUpdate)
            ->setConsentResults($consentResults)
            ->setMultiofferData($multiofferData);
    }
    /**
     * Get OnlyDataUpdate value
     * @return bool
     */
    public function getOnlyDataUpdate(): bool
    {
        return $this->OnlyDataUpdate;
    }
    /**
     * Set OnlyDataUpdate value
     * @param bool $onlyDataUpdate
     * @return \StructType\AdditionalSalesProcessData
     */
    public function setOnlyDataUpdate(bool $onlyDataUpdate): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyDataUpdate) && !is_bool($onlyDataUpdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyDataUpdate, true), gettype($onlyDataUpdate)), __LINE__);
        }
        $this->OnlyDataUpdate = $onlyDataUpdate;
        
        return $this;
    }
    /**
     * Get ConsentResults value
     * @return \ArrayType\ArrayOfConsentResult|null
     */
    public function getConsentResults(): ?\ArrayType\ArrayOfConsentResult
    {
        return $this->ConsentResults;
    }
    /**
     * Set ConsentResults value
     * @param \ArrayType\ArrayOfConsentResult $consentResults
     * @return \StructType\AdditionalSalesProcessData
     */
    public function setConsentResults(?\ArrayType\ArrayOfConsentResult $consentResults = null): self
    {
        $this->ConsentResults = $consentResults;
        
        return $this;
    }
    /**
     * Get MultiofferData value
     * @return \StructType\MultiofferData|null
     */
    public function getMultiofferData(): ?\StructType\MultiofferData
    {
        return $this->MultiofferData;
    }
    /**
     * Set MultiofferData value
     * @param \StructType\MultiofferData $multiofferData
     * @return \StructType\AdditionalSalesProcessData
     */
    public function setMultiofferData(?\StructType\MultiofferData $multiofferData = null): self
    {
        $this->MultiofferData = $multiofferData;
        
        return $this;
    }
}
