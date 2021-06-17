<?php

declare(strict_types=1);

namespace BenefiaNew\ServiceType;

use BenefiaNew\StructType\SignAppliacationPreparePolicy;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Sign ServiceType
 * @subpackage Services
 */
class Sign extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SignAppliacationPreparePolicy
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \BenefiaNew\StructType\SignAppliacationPreparePolicy $parameters
     * @return \BenefiaNew\StructType\SignAppliacationPreparePolicyResponse|bool
     */
    public function SignAppliacationPreparePolicy(SignAppliacationPreparePolicy $parameters)
    {
        try {
            $this->setResult($resultSignAppliacationPreparePolicy = $this->getSoapClient()->__soapCall('SignAppliacationPreparePolicy', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSignAppliacationPreparePolicy;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \BenefiaNew\StructType\SignAppliacationPreparePolicyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
