<?php
require_once dirname(__FILE__).'/../config.php';

// include _ROOT_PATH.'/app/security/check.php

//pobranie parametrów
function getParams(&$amount, &$payments, &$upfront, &$bankrate) {
	$amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
	$payments = isset($_REQUEST['payments']) ? $_REQUEST['payments'] : null;
	$upfront = isset($_REQUEST['upfront']) ? $_REQUEST['upfront'] : null;
	$bankrate = isset($_REQUEST['bankrate']) ? $_REQUEST['bankrate'] : null;
}

// walidacja parametrów
function validate(&$amount, &$payments, &$upfront, &$bankrate, &$messages) {	
	if(!(isset($amount) && isset($payments) && isset($upfront) && isset($bankrate))) {
		return false;
	}

	if($amount == null) {
		$messages [] = "Nie podano wartości kredytu!";
	}
	
	if(count($messages) != 0) return false;
	else return true;
}

//wykonaj zadanie
$installment = null;
$messages = array();

getParams($amount, $payments, $upfront, $bankrate);
if(validate($amount, $payments, $upfront, $bankrate, $messages)) {
	$amount = intval($amount);
	$payments = intval($payments);
	$upfront = intval($upfront);
	$bankrate = intval($bankrate);

	$installment = ($amount-$upfront)*(($bankrate+100)/100)/$payments;
}

include 'loan_view.php';