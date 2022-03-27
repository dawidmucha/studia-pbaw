<?php
	require_once dirname(__FILE__).'/../config.php';
	include _ROOT_PATH.'/app/security/check.php';

	function getParams(&$amount, &$installments, &$loanrate, &$upfront) {
		$amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
		$installments = isset($_REQUEST['installments']) ? $_REQUEST['installments'] : null;
		$loanrate = isset($_REQUEST['loanrate']) ? $_REQUEST['loanrate'] : null;
		$upfront = isset($_REQUEST['upfront']) ? $_REQUEST['upfront'] : null;
	}

	function validate(&$messages, &$amount, &$installments, &$loanrate, &$upfront) {
		if(!isset($amount) && !isset($installments) && !isset($loanrate) && !isset($upfront)) {
			$messages [] = 'Missing one or more parameters';
		}

		if($amount == '') {
			$messages [] = 'Missing the loan amount value';
		}
		if($installments == '') {
			$messages [] = 'Missing the installments amount value';
		}
		if($loanrate == '') {
			$messages [] = 'Missing the loan rate amount value';
		}
		if($upfront == '') {
			$messages [] = 'Missing the upfront payment amount value';
		}
		
		if(empty($messages)) {
			if($installments == 0) {
				$messages [] = 'Number of installments cannot be 0';
			}

			if($installments == '') {
				$messages [] = 'Missing the installments amount value';
			}
			if($loanrate == '') {
				$messages [] = 'Missing the loan rate amount value';
			}
			if($upfront == '') {
				$messages [] = 'Missing the upfront payment amount value';
			}
		
			if(!is_numeric($amount) && $amount > 0) {
				$messages [] = 'Loan amount isn\'t a correct value';
			}
			if(!is_numeric($installments) && ($installments > 0)) {
				$messages [] = 'Number of installments amount isn\'t a correct value';
			}
			if(!is_numeric($loanrate) && $loanrate > 0) {
				$messages [] = 'Loan rate amount isn\'t a correct value';
			}
			if(!is_numeric($upfront) && $upfront > 0) {
				$messages [] = 'Upfront payment amount isn\'t a correct value';
			}
		}
	}

	function calculate(&$result, &$amount, &$installments, &$loanrate, &$upfront) {
		if(empty($messages)) {
			$amount = intval($amount);
			$installments = intval($installments);
			$loanrate = intval($loanrate);
			$upfront = intval($upfront);
		
			$result = (($amount-$upfront) * ((100 + $loanrate)/100))/$installments;
		}
	}

	// variable initialization
	$amount = null;
	$installments = null;
	$loanrate = null;
	$upfront = null;

	$result = null;
	$messages = array();

	getParams($amount, $installmennts, $loanrate, $upfront);
	if(validate($messages, $amount, $installmennts, $loanrate, $upfront)) {
		calculate($result, $amount, $installmennts, $loanrate, $upfront);
	}

	include 'loan_view.php';
?>
