<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetApplicationStatus StructType
 * @subpackage Structs
 */
class GetApplicationStatus extends AbstractStructBase
{
    /**
     * The applicationNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $applicationNumber = null;
    /**
     * Constructor method for GetApplicationStatus
     * @uses GetApplicationStatus::setApplicationNumber()
     * @param string $applicationNumber
     */
    public function __construct(?string $applicationNumber = null)
    {
        $this
            ->setApplicationNumber($applicationNumber);
    }
    /**
     * Get applicationNumber value
     * @return string|null
     */
    public function getApplicationNumber(): ?string
    {
        return $this->applicationNumber;
    }
    /**
     * Set applicationNumber value
     * @param string $applicationNumber
     * @return \StructType\GetApplicationStatus
     */
    public function setApplicationNumber(?string $applicationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($applicationNumber) && !is_string($applicationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($applicationNumber, true), gettype($applicationNumber)), __LINE__);
        }
        $this->applicationNumber = $applicationNumber;
        
        return $this;
    }
}
