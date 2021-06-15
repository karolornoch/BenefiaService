<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfConsentResult ArrayType
 * @subpackage Arrays
 */
class ArrayOfConsentResult extends AbstractStructArrayBase
{
    /**
     * The ConsentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ConsentResult[]
     */
    protected array $ConsentResult = [];
    /**
     * Constructor method for ArrayOfConsentResult
     * @uses ArrayOfConsentResult::setConsentResult()
     * @param \StructType\ConsentResult[] $consentResult
     */
    public function __construct(array $consentResult = [])
    {
        $this
            ->setConsentResult($consentResult);
    }
    /**
     * Get ConsentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ConsentResult[]
     */
    public function getConsentResult(): ?array
    {
        return isset($this->ConsentResult) ? $this->ConsentResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setConsentResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConsentResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConsentResultForArrayConstraintsFromSetConsentResult(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfConsentResultConsentResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfConsentResultConsentResultItem instanceof \StructType\ConsentResult) {
                $invalidValues[] = is_object($arrayOfConsentResultConsentResultItem) ? get_class($arrayOfConsentResultConsentResultItem) : sprintf('%s(%s)', gettype($arrayOfConsentResultConsentResultItem), var_export($arrayOfConsentResultConsentResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ConsentResult property can only contain items of type \StructType\ConsentResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ConsentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ConsentResult[] $consentResult
     * @return \ArrayType\ArrayOfConsentResult
     */
    public function setConsentResult(array $consentResult = []): self
    {
        // validation for constraint: array
        if ('' !== ($consentResultArrayErrorMessage = self::validateConsentResultForArrayConstraintsFromSetConsentResult($consentResult))) {
            throw new InvalidArgumentException($consentResultArrayErrorMessage, __LINE__);
        }
        if (is_null($consentResult) || (is_array($consentResult) && empty($consentResult))) {
            unset($this->ConsentResult);
        } else {
            $this->ConsentResult = $consentResult;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ConsentResult|null
     */
    public function current(): ?\StructType\ConsentResult
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ConsentResult|null
     */
    public function item($index): ?\StructType\ConsentResult
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ConsentResult|null
     */
    public function first(): ?\StructType\ConsentResult
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ConsentResult|null
     */
    public function last(): ?\StructType\ConsentResult
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ConsentResult|null
     */
    public function offsetGet($offset): ?\StructType\ConsentResult
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ConsentResult $item
     * @return \ArrayType\ArrayOfConsentResult
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ConsentResult) {
            throw new InvalidArgumentException(sprintf('The ConsentResult property can only contain items of type \StructType\ConsentResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ConsentResult
     */
    public function getAttributeName(): string
    {
        return 'ConsentResult';
    }
}
