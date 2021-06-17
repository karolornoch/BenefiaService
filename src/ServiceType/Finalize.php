<?php

declare(strict_types=1);

namespace BenefiaNew\ServiceType;

use BenefiaNew\StructType\FinalizeApplication;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Finalize ServiceType
 * @subpackage Services
 */
class Finalize extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named FinalizeApplication
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FinalizeApplication $parameters
     * @return \StructType\FinalizeApplicationResponse|bool
     */
    public function FinalizeApplication(FinalizeApplication $parameters)
    {
        try {
            $this->setResult($resultFinalizeApplication = $this->getSoapClient()->__soapCall('FinalizeApplication', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFinalizeApplication;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\FinalizeApplicationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
