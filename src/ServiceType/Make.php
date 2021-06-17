<?php

declare(strict_types=1);

namespace BenefiaNew\ServiceType;

use BenefiaNew\StructType\MakePayment;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Make ServiceType
 * @subpackage Services
 */
class Make extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named MakePayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\MakePayment $parameters
     * @return \StructType\MakePaymentResponse|bool
     */
    public function MakePayment(MakePayment $parameters)
    {
        try {
            $this->setResult($resultMakePayment = $this->getSoapClient()->__soapCall('MakePayment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultMakePayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named MakeInstallmentPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\MakeInstallmentPayment $parameters
     * @return \StructType\MakeInstallmentPaymentResponse|bool
     */
    public function MakeInstallmentPayment(MakeInstallmentPayment $parameters)
    {
        try {
            $this->setResult($resultMakeInstallmentPayment = $this->getSoapClient()->__soapCall('MakeInstallmentPayment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultMakeInstallmentPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\MakeInstallmentPaymentResponse|\StructType\MakePaymentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
