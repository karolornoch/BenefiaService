<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Consent StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Consent
 * @subpackage Structs
 */
class Consent extends AbstractStructBase
{
    /**
     * The CollectingStage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CollectingStage = null;
    /**
     * The Content
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Content = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * The IsRequired
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsRequired = null;
    /**
     * Constructor method for Consent
     * @uses Consent::setCollectingStage()
     * @uses Consent::setContent()
     * @uses Consent::setId()
     * @uses Consent::setIsRequired()
     * @param string $collectingStage
     * @param string $content
     * @param int $id
     * @param bool $isRequired
     */
    public function __construct(?string $collectingStage = null, ?string $content = null, ?int $id = null, ?bool $isRequired = null)
    {
        $this
            ->setCollectingStage($collectingStage)
            ->setContent($content)
            ->setId($id)
            ->setIsRequired($isRequired);
    }
    /**
     * Get CollectingStage value
     * @return string|null
     */
    public function getCollectingStage(): ?string
    {
        return $this->CollectingStage;
    }
    /**
     * Set CollectingStage value
     * @uses \EnumType\ConsentCollectingStage::valueIsValid()
     * @uses \EnumType\ConsentCollectingStage::getValidValues()
     * @throws InvalidArgumentException
     * @param string $collectingStage
     * @return \StructType\Consent
     */
    public function setCollectingStage(?string $collectingStage = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ConsentCollectingStage::valueIsValid($collectingStage)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ConsentCollectingStage', is_array($collectingStage) ? implode(', ', $collectingStage) : var_export($collectingStage, true), implode(', ', \EnumType\ConsentCollectingStage::getValidValues())), __LINE__);
        }
        $this->CollectingStage = $collectingStage;
        
        return $this;
    }
    /**
     * Get Content value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContent(): ?string
    {
        return isset($this->Content) ? $this->Content : null;
    }
    /**
     * Set Content value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $content
     * @return \StructType\Consent
     */
    public function setContent(?string $content = null): self
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        if (is_null($content) || (is_array($content) && empty($content))) {
            unset($this->Content);
        } else {
            $this->Content = $content;
        }
        
        return $this;
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \StructType\Consent
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get IsRequired value
     * @return bool|null
     */
    public function getIsRequired(): ?bool
    {
        return $this->IsRequired;
    }
    /**
     * Set IsRequired value
     * @param bool $isRequired
     * @return \StructType\Consent
     */
    public function setIsRequired(?bool $isRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRequired) && !is_bool($isRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRequired, true), gettype($isRequired)), __LINE__);
        }
        $this->IsRequired = $isRequired;
        
        return $this;
    }
}
