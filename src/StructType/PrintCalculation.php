<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintCalculation StructType
 * @subpackage Structs
 */
class PrintCalculation extends AbstractStructBase
{
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
     * Constructor method for PrintCalculation
     * @uses PrintCalculation::setCalculationId()
     * @param string $calculationId
     */
    public function __construct(?string $calculationId)
    {
        $this
            ->setCalculationId($calculationId);
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
     * @return \StructType\PrintCalculation
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
}
