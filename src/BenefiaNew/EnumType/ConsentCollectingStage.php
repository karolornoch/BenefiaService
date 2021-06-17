<?php

declare(strict_types=1);

namespace BenefiaNew\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ConsentCollectingStage EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ConsentCollectingStage
 * @subpackage Enumerations
 */
class ConsentCollectingStage extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Calculate'
     * @return string 'Calculate'
     */
    const VALUE_CALCULATE = 'Calculate';
    /**
     * Constant for value 'CalculateApplication'
     * @return string 'CalculateApplication'
     */
    const VALUE_CALCULATE_APPLICATION = 'CalculateApplication';
    /**
     * Constant for value 'FinalizeApplication'
     * @return string 'FinalizeApplication'
     */
    const VALUE_FINALIZE_APPLICATION = 'FinalizeApplication';
    /**
     * Constant for value 'SignAppliacationPreparePolicy'
     * @return string 'SignAppliacationPreparePolicy'
     */
    const VALUE_SIGN_APPLIACATION_PREPARE_POLICY = 'SignAppliacationPreparePolicy';
    /**
     * Constant for value 'MakePayment'
     * @return string 'MakePayment'
     */
    const VALUE_MAKE_PAYMENT = 'MakePayment';
    /**
     * Return allowed values
     * @uses self::VALUE_CALCULATE
     * @uses self::VALUE_CALCULATE_APPLICATION
     * @uses self::VALUE_FINALIZE_APPLICATION
     * @uses self::VALUE_SIGN_APPLIACATION_PREPARE_POLICY
     * @uses self::VALUE_MAKE_PAYMENT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CALCULATE,
            self::VALUE_CALCULATE_APPLICATION,
            self::VALUE_FINALIZE_APPLICATION,
            self::VALUE_SIGN_APPLIACATION_PREPARE_POLICY,
            self::VALUE_MAKE_PAYMENT,
        ];
    }
}
