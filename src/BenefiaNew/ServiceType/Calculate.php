<?php

declare(strict_types=1);

namespace BenefiaNew\ServiceType;

use BenefiaNew\StructType\Calculate as StructTypeCalculate;
use BenefiaNew\StructType\CalculateApplication;
use BenefiaNew\StructType\CalculateMultioffer;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Calculate ServiceType
 * @subpackage Services
 */
class Calculate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Calculate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Calculate $parameters
     * @return \StructType\CalculateResponse|bool
     */
    public function Calculate(StructTypeCalculate $parameters)
    {
        try {
            $this->setResult($resultCalculate = $this->getSoapClient()->__soapCall('Calculate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CalculateApplication
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CalculateApplication $parameters
     * @return \StructType\CalculateApplicationResponse|bool
     */
    public function CalculateApplication(CalculateApplication $parameters)
    {
        try {
            $this->setResult($resultCalculateApplication = $this->getSoapClient()->__soapCall('CalculateApplication', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculateApplication;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CalculateMultioffer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CalculateMultioffer $parameters
     * @return \StructType\CalculateMultiofferResponse|bool
     */
    public function CalculateMultioffer(CalculateMultioffer $parameters)
    {
        try {
            $this->setResult($resultCalculateMultioffer = $this->getSoapClient()->__soapCall('CalculateMultioffer', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculateMultioffer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\CalculateApplicationResponse|\StructType\CalculateMultiofferResponse|\StructType\CalculateResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
