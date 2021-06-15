<?php

declare(strict_types=1);
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
            'SalesProcessConfiguration' => '\\StructType\\SalesProcessConfiguration',
            'ArrayOfConsent' => '\\ArrayType\\ArrayOfConsent',
            'Consent' => '\\StructType\\Consent',
            'Calculate' => '\\StructType\\Calculate',
            'input' => '\\StructType\\Input',
            'AdditionalSalesProcessData' => '\\StructType\\AdditionalSalesProcessData',
            'ArrayOfConsentResult' => '\\ArrayType\\ArrayOfConsentResult',
            'ConsentResult' => '\\StructType\\ConsentResult',
            'MultiofferData' => '\\StructType\\MultiofferData',
            'ArrayOfSelectedVariant' => '\\ArrayType\\ArrayOfSelectedVariant',
            'SelectedVariant' => '\\StructType\\SelectedVariant',
            'CalculateResponse' => '\\StructType\\CalculateResponse',
            'CalculateResult' => '\\StructType\\CalculateResult',
            'CalculateApplication' => '\\StructType\\CalculateApplication',
            'CalculateApplicationResponse' => '\\StructType\\CalculateApplicationResponse',
            'CalculateApplicationResult' => '\\StructType\\CalculateApplicationResult',
            'FinalizeApplication' => '\\StructType\\FinalizeApplication',
            'FinalizeApplicationResponse' => '\\StructType\\FinalizeApplicationResponse',
            'FinalizeApplicationResult' => '\\StructType\\FinalizeApplicationResult',
            'SignAppliacationPreparePolicy' => '\\StructType\\SignAppliacationPreparePolicy',
            'SignAppliacationPreparePolicyResponse' => '\\StructType\\SignAppliacationPreparePolicyResponse',
            'SignAppliacationPreparePolicyResult' => '\\StructType\\SignAppliacationPreparePolicyResult',
            'MakePayment' => '\\StructType\\MakePayment',
            'MakePaymentResponse' => '\\StructType\\MakePaymentResponse',
            'MakePaymentResult' => '\\StructType\\MakePaymentResult',
            'PrintCalculation' => '\\StructType\\PrintCalculation',
            'PrintCalculationResponse' => '\\StructType\\PrintCalculationResponse',
            'PrintCalculationResult' => '\\StructType\\PrintCalculationResult',
            'PrintApplication' => '\\StructType\\PrintApplication',
            'PrintApplicationResponse' => '\\StructType\\PrintApplicationResponse',
            'PrintApplicationResult' => '\\StructType\\PrintApplicationResult',
            'PrintPolicy' => '\\StructType\\PrintPolicy',
            'PrintPolicyResponse' => '\\StructType\\PrintPolicyResponse',
            'PrintPolicyResult' => '\\StructType\\PrintPolicyResult',
            'MakeInstallmentPayment' => '\\StructType\\MakeInstallmentPayment',
            'MakeInstallmentPaymentResponse' => '\\StructType\\MakeInstallmentPaymentResponse',
            'MakeInstallmentPaymentResult' => '\\StructType\\MakeInstallmentPaymentResult',
            'GetSalesProcessConfiguration' => '\\StructType\\GetSalesProcessConfiguration',
            'GetSalesProcessConfigurationResponse' => '\\StructType\\GetSalesProcessConfigurationResponse',
            'CalculateMultioffer' => '\\StructType\\CalculateMultioffer',
            'CalculateMultiofferResponse' => '\\StructType\\CalculateMultiofferResponse',
            'CalculateMultiofferResult' => '\\StructType\\CalculateMultiofferResult',
            'GetApplicationStatus' => '\\StructType\\GetApplicationStatus',
            'GetApplicationStatusResponse' => '\\StructType\\GetApplicationStatusResponse',
            'GetApplicationStatusResult' => '\\StructType\\GetApplicationStatusResult',
        ];
    }
}
