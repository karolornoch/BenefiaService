<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetSalesProcessConfiguration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSalesProcessConfiguration $parameters
     * @return \StructType\GetSalesProcessConfigurationResponse|bool
     */
    public function GetSalesProcessConfiguration(\StructType\GetSalesProcessConfiguration $parameters)
    {
        try {
            $this->setResult($resultGetSalesProcessConfiguration = $this->getSoapClient()->__soapCall('GetSalesProcessConfiguration', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSalesProcessConfiguration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetApplicationStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetApplicationStatus $parameters
     * @return \StructType\GetApplicationStatusResponse|bool
     */
    public function GetApplicationStatus(\StructType\GetApplicationStatus $parameters)
    {
        try {
            $this->setResult($resultGetApplicationStatus = $this->getSoapClient()->__soapCall('GetApplicationStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetApplicationStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetApplicationStatusResponse|\StructType\GetSalesProcessConfigurationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
