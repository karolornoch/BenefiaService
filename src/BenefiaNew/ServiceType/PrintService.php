<?php

declare(strict_types=1);

namespace BenefiaNew\ServiceType;

use BenefiaNew\StructType\PrintApplication;
use BenefiaNew\StructType\PrintCalculation;
use BenefiaNew\StructType\PrintPolicy;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Print ServiceType
 * @subpackage Services
 */
class PrintService extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named PrintCalculation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PrintCalculation $parameters
     * @return \StructType\PrintCalculationResponse|bool
     */
    public function PrintCalculation(PrintCalculation $parameters)
    {
        try {
            $this->setResult($resultPrintCalculation = $this->getSoapClient()->__soapCall('PrintCalculation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultPrintCalculation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named PrintApplication
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PrintApplication $parameters
     * @return \StructType\PrintApplicationResponse|bool
     */
    public function PrintApplication(PrintApplication $parameters)
    {
        try {
            $this->setResult($resultPrintApplication = $this->getSoapClient()->__soapCall('PrintApplication', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultPrintApplication;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named PrintPolicy
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PrintPolicy $parameters
     * @return \StructType\PrintPolicyResponse|bool
     */
    public function PrintPolicy(PrintPolicy $parameters)
    {
        try {
            $this->setResult($resultPrintPolicy = $this->getSoapClient()->__soapCall('PrintPolicy', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultPrintPolicy;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\PrintApplicationResponse|\StructType\PrintCalculationResponse|\StructType\PrintPolicyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
