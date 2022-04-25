<?php
	require_once 'init.php';

	switch($action) {
		default:
			include_once 'app/controllers/LoanCtrl.class.php';

			$ctrl = new app\controllers\LoanCtrl();
			$ctrl->generateView();

			break;
		case 'loanCompute':
			include_once 'app/controllers/LoanCtrl.class.php';

			$ctrl = new app\controllers\LoanCtrl();
			$ctrl->process();

			break;
	}
?>
