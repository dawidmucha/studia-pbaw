<?php
<<<<<<< HEAD
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

//pobranie parametrów
function getParams(&$form) {
	$form['amount'] = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
	$form['payments'] = isset($_REQUEST['payments']) ? $_REQUEST['payments'] : null;
	$form['upfront'] = isset($_REQUEST['upfront']) ? $_REQUEST['upfront'] : null;
	$form['bankrate'] = isset($_REQUEST['bankrate']) ? $_REQUEST['bankrate'] : null;
	$form['installment'] = isset($_REQUEST['installment']) ? $_REQUEST['installment'] : null;
}

// walidacja parametrów
function validate(&$amount, &$payments, &$upfront, &$bankrate, &$messages) {	
	if(!(isset($form['amount']) && isset($form['payments']) && isset($form['upfront']) && isset($form['bankrate']))) {
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
$infos = array();
$messages = array();
$hide_intro = false;

getParams($form);
if(validate($amount, $payments, $upfront, $bankrate, $messages)) {
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia';
	
	$form['amount'] = floatval($form['amount']);
	$form['payments'] = floatval($form['payments']);
	$form['upfront'] = floatval($form['upfront']);
	$form['bankrate'] = floatval($form['bankrate']);

	$form['installment'] = ($form['amount']-$form['upfront'])*(($form['bankrate']+100)/100)/$form['payments'];
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Oblicz wysokość składki kredytu.');
$smarty->assign('page_header','Kalkulator Kredytowy');

$smarty->assign('hide_intro',$hide_intro);

$smarty->assign('form',$form);
$smarty->assign('installment',$installment);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/app/loan.html');
=======
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
>>>>>>> 317973d (LAB1)
