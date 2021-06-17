<?php

declare(strict_types=1);

namespace BenefiaNew;
/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'SalesProcessConfiguration' => '\\BenefiaNew\\StructType\\SalesProcessConfiguration',
            'ArrayOfConsent' => '\\BenefiaNew\\ArrayType\\ArrayOfConsent',
            'Consent' => '\\BenefiaNew\\StructType\\Consent',
            'Calculate' => '\\BenefiaNew\\StructType\\Calculate',
            'input' => '\\BenefiaNew\\StructType\\Input',
            'AdditionalSalesProcessData' => '\\BenefiaNew\\StructType\\AdditionalSalesProcessData',
            'ArrayOfConsentResult' => '\\BenefiaNew\\ArrayType\\ArrayOfConsentResult',
            'ConsentResult' => '\\BenefiaNew\\StructType\\ConsentResult',
            'MultiofferData' => '\\BenefiaNew\\StructType\\MultiofferData',
            'ArrayOfSelectedVariant' => '\\BenefiaNew\\ArrayType\\ArrayOfSelectedVariant',
            'SelectedVariant' => '\\BenefiaNew\\StructType\\SelectedVariant',
            'CalculateResponse' => '\\BenefiaNew\\StructType\\CalculateResponse',
            'CalculateResult' => '\\BenefiaNew\\StructType\\CalculateResult',
            'CalculateApplication' => '\\BenefiaNew\\StructType\\CalculateApplication',
            'CalculateApplicationResponse' => '\\BenefiaNew\\StructType\\CalculateApplicationResponse',
            'CalculateApplicationResult' => '\\BenefiaNew\\StructType\\CalculateApplicationResult',
            'FinalizeApplication' => '\\BenefiaNew\\StructType\\FinalizeApplication',
            'FinalizeApplicationResponse' => '\\BenefiaNew\\StructType\\FinalizeApplicationResponse',
            'FinalizeApplicationResult' => '\\BenefiaNew\\StructType\\FinalizeApplicationResult',
            'SignAppliacationPreparePolicy' => '\\BenefiaNew\\StructType\\SignAppliacationPreparePolicy',
            'SignAppliacationPreparePolicyResponse' => '\\BenefiaNew\\StructType\\SignAppliacationPreparePolicyResponse',
            'SignAppliacationPreparePolicyResult' => '\\BenefiaNew\\StructType\\SignAppliacationPreparePolicyResult',
            'MakePayment' => '\\BenefiaNew\\StructType\\MakePayment',
            'MakePaymentResponse' => '\\BenefiaNew\\StructType\\MakePaymentResponse',
            'MakePaymentResult' => '\\BenefiaNew\\StructType\\MakePaymentResult',
            'PrintCalculation' => '\\BenefiaNew\\StructType\\PrintCalculation',
            'PrintCalculationResponse' => '\\BenefiaNew\\StructType\\PrintCalculationResponse',
            'PrintCalculationResult' => '\\BenefiaNew\\StructType\\PrintCalculationResult',
            'PrintApplication' => '\\BenefiaNew\\StructType\\PrintApplication',
            'PrintApplicationResponse' => '\\BenefiaNew\\StructType\\PrintApplicationResponse',
            'PrintApplicationResult' => '\\BenefiaNew\\StructType\\PrintApplicationResult',
            'PrintPolicy' => '\\BenefiaNew\\StructType\\PrintPolicy',
            'PrintPolicyResponse' => '\\BenefiaNew\\StructType\\PrintPolicyResponse',
            'PrintPolicyResult' => '\\BenefiaNew\\StructType\\PrintPolicyResult',
            'MakeInstallmentPayment' => '\\BenefiaNew\\StructType\\MakeInstallmentPayment',
            'MakeInstallmentPaymentResponse' => '\\BenefiaNew\\StructType\\MakeInstallmentPaymentResponse',
            'MakeInstallmentPaymentResult' => '\\BenefiaNew\\StructType\\MakeInstallmentPaymentResult',
            'GetSalesProcessConfiguration' => '\\BenefiaNew\\StructType\\GetSalesProcessConfiguration',
            'GetSalesProcessConfigurationResponse' => '\\BenefiaNew\\StructType\\GetSalesProcessConfigurationResponse',
            'CalculateMultioffer' => '\\BenefiaNew\\StructType\\CalculateMultioffer',
            'CalculateMultiofferResponse' => '\\BenefiaNew\\StructType\\CalculateMultiofferResponse',
            'CalculateMultiofferResult' => '\\BenefiaNew\\StructType\\CalculateMultiofferResult',
            'GetApplicationStatus' => '\\BenefiaNew\\StructType\\GetApplicationStatus',
            'GetApplicationStatusResponse' => '\\BenefiaNew\\StructType\\GetApplicationStatusResponse',
            'GetApplicationStatusResult' => '\\BenefiaNew\\StructType\\GetApplicationStatusResult',
        ];
    }
}
