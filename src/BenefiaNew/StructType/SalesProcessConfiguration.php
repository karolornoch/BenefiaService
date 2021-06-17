<?php

declare(strict_types=1);

namespace BenefiaNew\StructType;

use BenefiaNew\ArrayType\ArrayOfConsent;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesProcessConfiguration StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SalesProcessConfiguration
 * @subpackage Structs
 */
class SalesProcessConfiguration extends AbstractStructBase
{
    /**
     * The Consents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfConsent|null
     */
    protected ?ArrayOfConsent $Consents = null;
    /**
     * Constructor method for SalesProcessConfiguration
     * @uses SalesProcessConfiguration::setConsents()
     * @param \ArrayType\ArrayOfConsent $consents
     */
    public function __construct(?ArrayOfConsent $consents = null)
    {
        $this
            ->setConsents($consents);
    }
    /**
     * Get Consents value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfConsent|null
     */
    public function getConsents(): ?ArrayOfConsent
    {
        return isset($this->Consents) ? $this->Consents : null;
    }
    /**
     * Set Consents value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfConsent $consents
     * @return \StructType\SalesProcessConfiguration
     */
    public function setConsents(?ArrayOfConsent $consents = null): self
    {
        if (is_null($consents) || (is_array($consents) && empty($consents))) {
            unset($this->Consents);
        } else {
            $this->Consents = $consents;
        }
        
        return $this;
    }
}
