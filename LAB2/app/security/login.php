<?php
	require_once dirname(__FILE__).'/../../config.php';

	function loginGetParams(&$form) {
		$form['login'] = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
		$form['pass'] = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;
	}

	function loginValidate(&$form, &$messages) {
		if(!(isset($form['login']) && isset($form['pass']))) {
			return false;
		}

		if($form['login'] == '') {
			$messages[] = 'Login is missing';
		}

		if($form['pass'] == '') {
			$messages[] = 'Password is missing';
		}

		if(count($messages) > 0) return false;

		if($form['login'] == 'admin' && $form['pass'] == 'admin') {
			session_start();
			$_SESSION['role'] = 'admin';
			return true;
		}
		
		if($form['login'] == 'user' && $form['pass'] == 'user') {
			session_start();
			$_SESSION['role'] = 'user';
			return true;
		}

		$messages[] = 'Incorrect login or password';
		return false;
	}

	//variable initialization
	$form = array();
	$messages = array();

	loginGetParams($form);

	if(!loginValidate($form, $messages)) {
		include _ROOT_PATH.'/app/security/login_view.php';
	} else {
		header("Location: "._APP_URL);

		include _ROOT_PATH.'/index.php';
	}
?>