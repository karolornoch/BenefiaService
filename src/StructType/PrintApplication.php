<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintApplication StructType
 * @subpackage Structs
 */
class PrintApplication extends AbstractStructBase
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
     * Constructor method for PrintApplication
     * @uses PrintApplication::setApplicationOvertNumber()
     * @param string $applicationOvertNumber
     */
    public function __construct(?string $applicationOvertNumber = null)
    {
        $this
            ->setApplicationOvertNumber($applicationOvertNumber);
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
     * @return \StructType\PrintApplication
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
}
