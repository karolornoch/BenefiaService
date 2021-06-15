<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfConsent ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfConsent
 * @subpackage Arrays
 */
class ArrayOfConsent extends AbstractStructArrayBase
{
    /**
     * The Consent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Consent[]
     */
    protected array $Consent = [];
    /**
     * Constructor method for ArrayOfConsent
     * @uses ArrayOfConsent::setConsent()
     * @param \StructType\Consent[] $consent
     */
    public function __construct(array $consent = [])
    {
        $this
            ->setConsent($consent);
    }
    /**
     * Get Consent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Consent[]
     */
    public function getConsent(): ?array
    {
        return isset($this->Consent) ? $this->Consent : null;
    }
    /**
     * This method is responsible for validating the values passed to the setConsent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConsent method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConsentForArrayConstraintsFromSetConsent(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfConsentConsentItem) {
            // validation for constraint: itemType
            if (!$arrayOfConsentConsentItem instanceof \StructType\Consent) {
                $invalidValues[] = is_object($arrayOfConsentConsentItem) ? get_class($arrayOfConsentConsentItem) : sprintf('%s(%s)', gettype($arrayOfConsentConsentItem), var_export($arrayOfConsentConsentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Consent property can only contain items of type \StructType\Consent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Consent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\Consent[] $consent
     * @return \ArrayType\ArrayOfConsent
     */
    public function setConsent(array $consent = []): self
    {
        // validation for constraint: array
        if ('' !== ($consentArrayErrorMessage = self::validateConsentForArrayConstraintsFromSetConsent($consent))) {
            throw new InvalidArgumentException($consentArrayErrorMessage, __LINE__);
        }
        if (is_null($consent) || (is_array($consent) && empty($consent))) {
            unset($this->Consent);
        } else {
            $this->Consent = $consent;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Consent|null
     */
    public function current(): ?\StructType\Consent
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Consent|null
     */
    public function item($index): ?\StructType\Consent
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Consent|null
     */
    public function first(): ?\StructType\Consent
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Consent|null
     */
    public function last(): ?\StructType\Consent
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Consent|null
     */
    public function offsetGet($offset): ?\StructType\Consent
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\Consent $item
     * @return \ArrayType\ArrayOfConsent
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Consent) {
            throw new InvalidArgumentException(sprintf('The Consent property can only contain items of type \StructType\Consent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Consent
     */
    public function getAttributeName(): string
    {
        return 'Consent';
    }
}
