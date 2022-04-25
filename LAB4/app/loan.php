<?php
	require_once dirname(__FILE__).'/../config.php';
	// include _ROOT_PATH.'/app/security/check.php';

	require_once _ROOT_PATH.'/lib/Twig/Autoloader.php';

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
			if(!is_numeric($installments) && $installments > 0) {
				$messages [] = 'Number of installments amount isn\'t a correct value';
			}
			if(!is_numeric($loanrate) && $loanrate > 0) {
				$messages [] = 'Loan rate amount isn\'t a correct value';
			}
			if(!is_numeric($upfront) && $upfront > 0) {
				$messages [] = 'Upfront payment amount isn\'t a correct value';
			}
		}

		if(count($messages) != 0) return false;
		else return true;
	}

	function calculate(&$result, &$messages, &$amount, &$installments, &$loanrate, &$upfront) {
		global $role;
		$amount = intval($amount);
		$installments = intval($installments);
		$loanrate = intval($loanrate);
		$upfront = intval($upfront);

		if($role == 'user' && $amount > 100000) {
			$messages [] = 'Users cannot calculate loans above $100,000';
		} else {
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

	getParams($amount, $installments, $loanrate, $upfront);
	if(validate($messages, $amount, $installments, $loanrate, $upfront)) {
		calculate($result, $messages, $amount, $installments, $loanrate, $upfront);
	}

	// include 'loan_view.php';

	Twig_Autoloader::register();
	$loader = new Twig_Loader_Filesystem(_ROOT_PATH.'/templates');
	$loader->addPath(_ROOT_PATH.'/app');
	$twig = new Twig_Environment($loader, array(
		// 'cache' => _ROOT_PATH.'/twig_cache',
	));

	$variables = array(
		'app_url' => _APP_URL,
		'root_path' => _ROOT_PATH,
		'page_title' => 'Loan calculator',
		'page_description' => 'Simple, fast, brutal',
		'page_header' => 'Loan calculator using PHP and Twig',
		'hide_intro' => true
	);

	if(isset($amount)) $variables['amount'] = $amount;
	if(isset($installments)) $variables['installments'] = $installments;
	if(isset($loanrate)) $variables['loanrate'] = $loanrate;
	if(isset($upfront)) $variables['upfront'] = $upfront;
	if(isset($result)) $variables['result'] = $result;
	if(isset($messages)) $variables['messages'] = $messages;

	echo $twig->render('loan.html', $variables);
?>
