<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Calculate StructType
 * @subpackage Structs
 */
class Calculate extends AbstractStructBase
{
    /**
     * The input
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Input|null
     */
    protected ?\StructType\Input $input = null;
    /**
     * The additionalProcessData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalSalesProcessData|null
     */
    protected ?\StructType\AdditionalSalesProcessData $additionalProcessData = null;
    /**
     * Constructor method for Calculate
     * @uses Calculate::setInput()
     * @uses Calculate::setAdditionalProcessData()
     * @param \StructType\Input $input
     * @param \StructType\AdditionalSalesProcessData $additionalProcessData
     */
    public function __construct(?\StructType\Input $input = null, ?\StructType\AdditionalSalesProcessData $additionalProcessData = null)
    {
        $this
            ->setInput($input)
            ->setAdditionalProcessData($additionalProcessData);
    }
    /**
     * Get input value
     * @return \StructType\Input|null
     */
    public function getInput(): ?\StructType\Input
    {
        return $this->input;
    }
    /**
     * Set input value
     * @param \StructType\Input $input
     * @return \StructType\Calculate
     */
    public function setInput(?\StructType\Input $input = null): self
    {
        $this->input = $input;
        
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
     * @return \StructType\Calculate
     */
    public function setAdditionalProcessData(?\StructType\AdditionalSalesProcessData $additionalProcessData = null): self
    {
        $this->additionalProcessData = $additionalProcessData;
        
        return $this;
    }
}
