<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://wstest3.benefia.pl/ws_pakiety_new/PackagesService.svc?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://wstest3.benefia.pl/ws_pakiety_new/PackagesService.svc?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
];
/**
 * Samples for Calculate ServiceType
 */
$calculate = new \ServiceType\Calculate($options);
/**
 * Sample call for Calculate operation/method
 */
if ($calculate->Calculate(new \StructType\Calculate()) !== false) {
    print_r($calculate->getResult());
} else {
    print_r($calculate->getLastError());
}
/**
 * Sample call for CalculateApplication operation/method
 */
if ($calculate->CalculateApplication(new \StructType\CalculateApplication()) !== false) {
    print_r($calculate->getResult());
} else {
    print_r($calculate->getLastError());
}
/**
 * Sample call for CalculateMultioffer operation/method
 */
if ($calculate->CalculateMultioffer(new \StructType\CalculateMultioffer()) !== false) {
    print_r($calculate->getResult());
} else {
    print_r($calculate->getLastError());
}
/**
 * Samples for Finalize ServiceType
 */
$finalize = new \ServiceType\Finalize($options);
/**
 * Sample call for FinalizeApplication operation/method
 */
if ($finalize->FinalizeApplication(new \StructType\FinalizeApplication()) !== false) {
    print_r($finalize->getResult());
} else {
    print_r($finalize->getLastError());
}
/**
 * Samples for Sign ServiceType
 */
$sign = new \ServiceType\Sign($options);
/**
 * Sample call for SignAppliacationPreparePolicy operation/method
 */
if ($sign->SignAppliacationPreparePolicy(new \StructType\SignAppliacationPreparePolicy()) !== false) {
    print_r($sign->getResult());
} else {
    print_r($sign->getLastError());
}
/**
 * Samples for Make ServiceType
 */
$make = new \ServiceType\Make($options);
/**
 * Sample call for MakePayment operation/method
 */
if ($make->MakePayment(new \StructType\MakePayment()) !== false) {
    print_r($make->getResult());
} else {
    print_r($make->getLastError());
}
/**
 * Sample call for MakeInstallmentPayment operation/method
 */
if ($make->MakeInstallmentPayment(new \StructType\MakeInstallmentPayment()) !== false) {
    print_r($make->getResult());
} else {
    print_r($make->getLastError());
}
/**
 * Samples for Print ServiceType
 */
$print = new \ServiceType\_Print($options);
/**
 * Sample call for PrintCalculation operation/method
 */
if ($print->PrintCalculation(new \StructType\PrintCalculation()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Sample call for PrintApplication operation/method
 */
if ($print->PrintApplication(new \StructType\PrintApplication()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Sample call for PrintPolicy operation/method
 */
if ($print->PrintPolicy(new \StructType\PrintPolicy()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
/**
 * Sample call for GetSalesProcessConfiguration operation/method
 */
if ($get->GetSalesProcessConfiguration(new \StructType\GetSalesProcessConfiguration()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetApplicationStatus operation/method
 */
if ($get->GetApplicationStatus(new \StructType\GetApplicationStatus()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
