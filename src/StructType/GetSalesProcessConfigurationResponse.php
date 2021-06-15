<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSalesProcessConfigurationResponse StructType
 * @subpackage Structs
 */
class GetSalesProcessConfigurationResponse extends AbstractStructBase
{
    /**
     * The GetSalesProcessConfigurationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\SalesProcessConfiguration|null
     */
    protected ?\StructType\SalesProcessConfiguration $GetSalesProcessConfigurationResult = null;
    /**
     * Constructor method for GetSalesProcessConfigurationResponse
     * @uses GetSalesProcessConfigurationResponse::setGetSalesProcessConfigurationResult()
     * @param \StructType\SalesProcessConfiguration $getSalesProcessConfigurationResult
     */
    public function __construct(?\StructType\SalesProcessConfiguration $getSalesProcessConfigurationResult = null)
    {
        $this
            ->setGetSalesProcessConfigurationResult($getSalesProcessConfigurationResult);
    }
    /**
     * Get GetSalesProcessConfigurationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\SalesProcessConfiguration|null
     */
    public function getGetSalesProcessConfigurationResult(): ?\StructType\SalesProcessConfiguration
    {
        return isset($this->GetSalesProcessConfigurationResult) ? $this->GetSalesProcessConfigurationResult : null;
    }
    /**
     * Set GetSalesProcessConfigurationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\SalesProcessConfiguration $getSalesProcessConfigurationResult
     * @return \StructType\GetSalesProcessConfigurationResponse
     */
    public function setGetSalesProcessConfigurationResult(?\StructType\SalesProcessConfiguration $getSalesProcessConfigurationResult = null): self
    {
        if (is_null($getSalesProcessConfigurationResult) || (is_array($getSalesProcessConfigurationResult) && empty($getSalesProcessConfigurationResult))) {
            unset($this->GetSalesProcessConfigurationResult);
        } else {
            $this->GetSalesProcessConfigurationResult = $getSalesProcessConfigurationResult;
        }
        
        return $this;
    }
}
