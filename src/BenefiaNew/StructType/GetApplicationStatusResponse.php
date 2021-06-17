<?php

declare(strict_types=1);

namespace BenefiaNew\StructType;

use BenefiaNew\StructType\GetApplicationStatusResult;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetApplicationStatusResponse StructType
 * @subpackage Structs
 */
class GetApplicationStatusResponse extends AbstractStructBase
{
    /**
     * The GetApplicationStatusResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetApplicationStatusResult|null
     */
    protected ?GetApplicationStatusResult $GetApplicationStatusResult = null;
    /**
     * Constructor method for GetApplicationStatusResponse
     * @uses GetApplicationStatusResponse::setGetApplicationStatusResult()
     * @param \StructType\GetApplicationStatusResult $getApplicationStatusResult
     */
    public function __construct(?GetApplicationStatusResult $getApplicationStatusResult = null)
    {
        $this
            ->setGetApplicationStatusResult($getApplicationStatusResult);
    }
    /**
     * Get GetApplicationStatusResult value
     * @return \StructType\GetApplicationStatusResult|null
     */
    public function getGetApplicationStatusResult(): ?GetApplicationStatusResult
    {
        return $this->GetApplicationStatusResult;
    }
    /**
     * Set GetApplicationStatusResult value
     * @param \StructType\GetApplicationStatusResult $getApplicationStatusResult
     * @return \StructType\GetApplicationStatusResponse
     */
    public function setGetApplicationStatusResult(?GetApplicationStatusResult $getApplicationStatusResult = null): self
    {
        $this->GetApplicationStatusResult = $getApplicationStatusResult;
        
        return $this;
    }
}
