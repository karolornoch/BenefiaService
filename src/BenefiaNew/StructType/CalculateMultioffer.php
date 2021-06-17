<?php

declare(strict_types=1);

namespace BenefiaNew\StructType;

use BenefiaNew\StructType\AdditionalSalesProcessData;
use BenefiaNew\StructType\Input;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateMultioffer StructType
 * @subpackage Structs
 */
class CalculateMultioffer extends AbstractStructBase
{
    /**
     * The input
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Input|null
     */
    protected ?Input $input = null;
    /**
     * The additionalProcessData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalSalesProcessData|null
     */
    protected ?AdditionalSalesProcessData $additionalProcessData = null;
    /**
     * Constructor method for CalculateMultioffer
     * @uses CalculateMultioffer::setInput()
     * @uses CalculateMultioffer::setAdditionalProcessData()
     * @param \StructType\Input $input
     * @param \StructType\AdditionalSalesProcessData $additionalProcessData
     */
    public function __construct(?Input $input = null, ?AdditionalSalesProcessData $additionalProcessData = null)
    {
        $this
            ->setInput($input)
            ->setAdditionalProcessData($additionalProcessData);
    }
    /**
     * Get input value
     * @return \StructType\Input|null
     */
    public function getInput(): ?Input
    {
        return $this->input;
    }
    /**
     * Set input value
     * @param \StructType\Input $input
     * @return \StructType\CalculateMultioffer
     */
    public function setInput(?Input $input = null): self
    {
        $this->input = $input;
        
        return $this;
    }
    /**
     * Get additionalProcessData value
     * @return \StructType\AdditionalSalesProcessData|null
     */
    public function getAdditionalProcessData(): ?AdditionalSalesProcessData
    {
        return $this->additionalProcessData;
    }
    /**
     * Set additionalProcessData value
     * @param \StructType\AdditionalSalesProcessData $additionalProcessData
     * @return \StructType\CalculateMultioffer
     */
    public function setAdditionalProcessData(?AdditionalSalesProcessData $additionalProcessData = null): self
    {
        $this->additionalProcessData = $additionalProcessData;
        
        return $this;
    }
}
