<?php

declare(strict_types=1);

namespace BenefiaNew\ArrayType;

use BenefiaNew\StructType\SelectedVariant;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSelectedVariant ArrayType
 * @subpackage Arrays
 */
class ArrayOfSelectedVariant extends AbstractStructArrayBase
{
    /**
     * The SelectedVariant
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \BenefiaNew\StructType\SelectedVariant[]
     */
    protected array $SelectedVariant = [];
    /**
     * Constructor method for ArrayOfSelectedVariant
     * @uses ArrayOfSelectedVariant::setSelectedVariant()
     * @param \BenefiaNew\StructType\SelectedVariant[] $selectedVariant
     */
    public function __construct(array $selectedVariant = [])
    {
        $this
            ->setSelectedVariant($selectedVariant);
    }
    /**
     * Get SelectedVariant value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \BenefiaNew\StructType\SelectedVariant[]
     */
    public function getSelectedVariant(): ?array
    {
        return isset($this->SelectedVariant) ? $this->SelectedVariant : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSelectedVariant method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSelectedVariant method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSelectedVariantForArrayConstraintsFromSetSelectedVariant(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSelectedVariantSelectedVariantItem) {
            // validation for constraint: itemType
            if (!$arrayOfSelectedVariantSelectedVariantItem instanceof \StructType\SelectedVariant) {
                $invalidValues[] = is_object($arrayOfSelectedVariantSelectedVariantItem) ? get_class($arrayOfSelectedVariantSelectedVariantItem) : sprintf('%s(%s)', gettype($arrayOfSelectedVariantSelectedVariantItem), var_export($arrayOfSelectedVariantSelectedVariantItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SelectedVariant property can only contain items of type \StructType\SelectedVariant, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SelectedVariant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \BenefiaNew\StructType\SelectedVariant[] $selectedVariant
     * @return \BenefiaNew\ArrayType\ArrayOfSelectedVariant
     */
    public function setSelectedVariant(array $selectedVariant = []): self
    {
        // validation for constraint: array
        if ('' !== ($selectedVariantArrayErrorMessage = self::validateSelectedVariantForArrayConstraintsFromSetSelectedVariant($selectedVariant))) {
            throw new InvalidArgumentException($selectedVariantArrayErrorMessage, __LINE__);
        }
        if (is_null($selectedVariant) || (is_array($selectedVariant) && empty($selectedVariant))) {
            unset($this->SelectedVariant);
        } else {
            $this->SelectedVariant = $selectedVariant;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \BenefiaNew\StructType\SelectedVariant|null
     */
    public function current(): ?SelectedVariant
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \BenefiaNew\StructType\SelectedVariant|null
     */
    public function item($index): ?SelectedVariant
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \BenefiaNew\StructType\SelectedVariant|null
     */
    public function first(): ?SelectedVariant
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \BenefiaNew\StructType\SelectedVariant|null
     */
    public function last(): ?SelectedVariant
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \BenefiaNew\StructType\SelectedVariant|null
     */
    public function offsetGet($offset): ?SelectedVariant
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \BenefiaNew\StructType\SelectedVariant $item
     * @return \BenefiaNew\ArrayType\ArrayOfSelectedVariant
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof SelectedVariant) {
            throw new InvalidArgumentException(sprintf('The SelectedVariant property can only contain items of type \StructType\SelectedVariant, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SelectedVariant
     */
    public function getAttributeName(): string
    {
        return 'SelectedVariant';
    }
}
