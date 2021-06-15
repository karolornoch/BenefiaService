<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSalesProcessConfiguration StructType
 * @subpackage Structs
 */
class GetSalesProcessConfiguration extends AbstractStructBase
{
    /**
     * The productId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $productId = null;
    /**
     * Constructor method for GetSalesProcessConfiguration
     * @uses GetSalesProcessConfiguration::setProductId()
     * @param string $productId
     */
    public function __construct(?string $productId = null)
    {
        $this
            ->setProductId($productId);
    }
    /**
     * Get productId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return isset($this->productId) ? $this->productId : null;
    }
    /**
     * Set productId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productId
     * @return \StructType\GetSalesProcessConfiguration
     */
    public function setProductId(?string $productId = null): self
    {
        // validation for constraint: string
        if (!is_null($productId) && !is_string($productId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productId, true), gettype($productId)), __LINE__);
        }
        if (is_null($productId) || (is_array($productId) && empty($productId))) {
            unset($this->productId);
        } else {
            $this->productId = $productId;
        }
        
        return $this;
    }
}
