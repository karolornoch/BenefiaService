<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiofferData StructType
 * @subpackage Structs
 */
class MultiofferData extends AbstractStructBase
{
    /**
     * The FlowId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FlowId = null;
    /**
     * The SelectedVariants
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfSelectedVariant|null
     */
    protected ?\ArrayType\ArrayOfSelectedVariant $SelectedVariants = null;
    /**
     * Constructor method for MultiofferData
     * @uses MultiofferData::setFlowId()
     * @uses MultiofferData::setSelectedVariants()
     * @param string $flowId
     * @param \ArrayType\ArrayOfSelectedVariant $selectedVariants
     */
    public function __construct(?string $flowId = null, ?\ArrayType\ArrayOfSelectedVariant $selectedVariants = null)
    {
        $this
            ->setFlowId($flowId)
            ->setSelectedVariants($selectedVariants);
    }
    /**
     * Get FlowId value
     * @return string|null
     */
    public function getFlowId(): ?string
    {
        return $this->FlowId;
    }
    /**
     * Set FlowId value
     * @param string $flowId
     * @return \StructType\MultiofferData
     */
    public function setFlowId(?string $flowId = null): self
    {
        // validation for constraint: string
        if (!is_null($flowId) && !is_string($flowId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flowId, true), gettype($flowId)), __LINE__);
        }
        $this->FlowId = $flowId;
        
        return $this;
    }
    /**
     * Get SelectedVariants value
     * @return \ArrayType\ArrayOfSelectedVariant|null
     */
    public function getSelectedVariants(): ?\ArrayType\ArrayOfSelectedVariant
    {
        return $this->SelectedVariants;
    }
    /**
     * Set SelectedVariants value
     * @param \ArrayType\ArrayOfSelectedVariant $selectedVariants
     * @return \StructType\MultiofferData
     */
    public function setSelectedVariants(?\ArrayType\ArrayOfSelectedVariant $selectedVariants = null): self
    {
        $this->SelectedVariants = $selectedVariants;
        
        return $this;
    }
}
