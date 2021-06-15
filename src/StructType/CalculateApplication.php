<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateApplication StructType
 * @subpackage Structs
 */
class CalculateApplication extends AbstractStructBase
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
     * The calculationId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12} | [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string
     */
    protected ?string $calculationId;
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
     * Constructor method for CalculateApplication
     * @uses CalculateApplication::setInput()
     * @uses CalculateApplication::setCalculationId()
     * @uses CalculateApplication::setApplicationOvertNumber()
     * @uses CalculateApplication::setAdditionalProcessData()
     * @param \StructType\Input $input
     * @param string $calculationId
     * @param string $applicationOvertNumber
     * @param \StructType\AdditionalSalesProcessData $additionalProcessData
     */
    public function __construct(?\StructType\Input $input = null, ?string $calculationId, ?string $applicationOvertNumber = null, ?\StructType\AdditionalSalesProcessData $additionalProcessData = null)
    {
        $this
            ->setInput($input)
            ->setCalculationId($calculationId)
            ->setApplicationOvertNumber($applicationOvertNumber)
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
     * @return \StructType\CalculateApplication
     */
    public function setInput(?\StructType\Input $input = null): self
    {
        $this->input = $input;
        
        return $this;
    }
    /**
     * Get calculationId value
     * @return string
     */
    public function getCalculationId(): string
    {
        return $this->calculationId;
    }
    /**
     * Set calculationId value
     * @param string $calculationId
     * @return \StructType\CalculateApplication
     */
    public function setCalculationId(?string $calculationId): self
    {
        // validation for constraint: string
        if (!is_null($calculationId) && !is_string($calculationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calculationId, true), gettype($calculationId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}, [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($calculationId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}|[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $calculationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}|[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($calculationId, true)), __LINE__);
        }
        $this->calculationId = $calculationId;
        
        return $this;
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
     * @return \StructType\CalculateApplication
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
     * @return \StructType\CalculateApplication
     */
    public function setAdditionalProcessData(?\StructType\AdditionalSalesProcessData $additionalProcessData = null): self
    {
        $this->additionalProcessData = $additionalProcessData;
        
        return $this;
    }
}
