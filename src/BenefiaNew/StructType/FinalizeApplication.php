<?php

declare(strict_types=1);

namespace BenefiaNew\StructType;

use BenefiaNew\StructType\AdditionalSalesProcessData;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FinalizeApplication StructType
 * @subpackage Structs
 */
class FinalizeApplication extends AbstractStructBase
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
     * The statementFile
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $statementFile = null;
    /**
     * The statementFileName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $statementFileName = null;
    /**
     * The additionalProcessData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalSalesProcessData|null
     */
    protected ?AdditionalSalesProcessData $additionalProcessData = null;
    /**
     * The nrWariantu
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nrWariantu = null;
    /**
     * Constructor method for FinalizeApplication
     * @uses FinalizeApplication::setApplicationOvertNumber()
     * @uses FinalizeApplication::setStatementFile()
     * @uses FinalizeApplication::setStatementFileName()
     * @uses FinalizeApplication::setAdditionalProcessData()
     * @uses FinalizeApplication::setNrWariantu()
     * @param string $applicationOvertNumber
     * @param string $statementFile
     * @param string $statementFileName
     * @param \StructType\AdditionalSalesProcessData $additionalProcessData
     * @param string $nrWariantu
     */
    public function __construct(?string $applicationOvertNumber = null, ?string $statementFile = null, ?string $statementFileName = null, ?\StructType\AdditionalSalesProcessData $additionalProcessData = null, ?string $nrWariantu = null)
    {
        $this
            ->setApplicationOvertNumber($applicationOvertNumber)
            ->setStatementFile($statementFile)
            ->setStatementFileName($statementFileName)
            ->setAdditionalProcessData($additionalProcessData)
            ->setNrWariantu($nrWariantu);
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
     * @return \StructType\FinalizeApplication
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
     * Get statementFile value
     * @return string|null
     */
    public function getStatementFile(): ?string
    {
        return $this->statementFile;
    }
    /**
     * Set statementFile value
     * @param string $statementFile
     * @return \StructType\FinalizeApplication
     */
    public function setStatementFile(?string $statementFile = null): self
    {
        // validation for constraint: string
        if (!is_null($statementFile) && !is_string($statementFile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statementFile, true), gettype($statementFile)), __LINE__);
        }
        $this->statementFile = $statementFile;
        
        return $this;
    }
    /**
     * Get statementFileName value
     * @return string|null
     */
    public function getStatementFileName(): ?string
    {
        return $this->statementFileName;
    }
    /**
     * Set statementFileName value
     * @param string $statementFileName
     * @return \StructType\FinalizeApplication
     */
    public function setStatementFileName(?string $statementFileName = null): self
    {
        // validation for constraint: string
        if (!is_null($statementFileName) && !is_string($statementFileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statementFileName, true), gettype($statementFileName)), __LINE__);
        }
        $this->statementFileName = $statementFileName;
        
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
     * @return \StructType\FinalizeApplication
     */
    public function setAdditionalProcessData(?AdditionalSalesProcessData $additionalProcessData = null): self
    {
        $this->additionalProcessData = $additionalProcessData;
        
        return $this;
    }
    /**
     * Get nrWariantu value
     * @return string|null
     */
    public function getNrWariantu(): ?string
    {
        return $this->nrWariantu;
    }
    /**
     * Set nrWariantu value
     * @param string $nrWariantu
     * @return \StructType\FinalizeApplication
     */
    public function setNrWariantu(?string $nrWariantu = null): self
    {
        // validation for constraint: string
        if (!is_null($nrWariantu) && !is_string($nrWariantu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nrWariantu, true), gettype($nrWariantu)), __LINE__);
        }
        $this->nrWariantu = $nrWariantu;
        
        return $this;
    }
}
