<?php

declare(strict_types=1);

namespace BenefiaNew\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeInstallmentPayment StructType
 * @subpackage Structs
 */
class MakeInstallmentPayment extends AbstractStructBase
{
    /**
     * The installmentNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $installmentNumber;
    /**
     * The dueDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $dueDate;
    /**
     * The policyNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $policyNumber = null;
    /**
     * Constructor method for MakeInstallmentPayment
     * @uses MakeInstallmentPayment::setInstallmentNumber()
     * @uses MakeInstallmentPayment::setDueDate()
     * @uses MakeInstallmentPayment::setPolicyNumber()
     * @param int $installmentNumber
     * @param string $dueDate
     * @param string $policyNumber
     */
    public function __construct(int $installmentNumber, string $dueDate, ?string $policyNumber = null)
    {
        $this
            ->setInstallmentNumber($installmentNumber)
            ->setDueDate($dueDate)
            ->setPolicyNumber($policyNumber);
    }
    /**
     * Get installmentNumber value
     * @return int
     */
    public function getInstallmentNumber(): int
    {
        return $this->installmentNumber;
    }
    /**
     * Set installmentNumber value
     * @param int $installmentNumber
     * @return \StructType\MakeInstallmentPayment
     */
    public function setInstallmentNumber(int $installmentNumber): self
    {
        // validation for constraint: int
        if (!is_null($installmentNumber) && !(is_int($installmentNumber) || ctype_digit($installmentNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($installmentNumber, true), gettype($installmentNumber)), __LINE__);
        }
        $this->installmentNumber = $installmentNumber;
        
        return $this;
    }
    /**
     * Get dueDate value
     * @return string
     */
    public function getDueDate(): string
    {
        return $this->dueDate;
    }
    /**
     * Set dueDate value
     * @param string $dueDate
     * @return \StructType\MakeInstallmentPayment
     */
    public function setDueDate(string $dueDate): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->dueDate = $dueDate;
        
        return $this;
    }
    /**
     * Get policyNumber value
     * @return string|null
     */
    public function getPolicyNumber(): ?string
    {
        return $this->policyNumber;
    }
    /**
     * Set policyNumber value
     * @param string $policyNumber
     * @return \StructType\MakeInstallmentPayment
     */
    public function setPolicyNumber(?string $policyNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($policyNumber) && !is_string($policyNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($policyNumber, true), gettype($policyNumber)), __LINE__);
        }
        $this->policyNumber = $policyNumber;
        
        return $this;
    }
}
