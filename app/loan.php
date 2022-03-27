<?php
	require_once dirname(__FILE__).'/../config.php';

	//fetch parameters
	$amount = $_REQUEST['amount'];
	$installments = $_REQUEST['installments'];
	$loanrate = $_REQUEST['loanrate'];
	$upfront = $_REQUEST['upfront'];

	//validation
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
		if(!is_numeric($installments) && $installments > 0)) {
			$messages [] = 'Number of installments amount isn\'t a correct value';
		}
		if(!is_numeric($loanrate) && $loanrate > 0) {
			$messages [] = 'Loan rate amount isn\'t a correct value';
		}
		if(!is_numeric($upfront) && $upfront > 0) {
			$messages [] = 'Upfront payment amount isn\'t a correct value';
		}
	}

	//calculations
	if(empty($messages)) {
		$amount = intval($amount);
		$installments = intval($installments);
		$loanrate = intval($loanrate);
		$upfront = intval($upfront);
	
		$result = (($amount-$upfront) * ((100 + $loanrate)/100))/$installments;
	}

	include 'loan_view.php';
?>
