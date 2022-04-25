<?php
	require_once dirname(__FILE__).'/../config.php';
	// include _ROOT_PATH.'/app/security/check.php';

	require_once $conf->root_path.'/app/LoanCtrl.class.php';

	$ctrl = new LoanCtrl();
	$ctrl->process();
?>
