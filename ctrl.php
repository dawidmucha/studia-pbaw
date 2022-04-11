<?php
	require_once 'init.php';

	getRouter()->setDefaultRoute('loanShow');
	getRouter()->setLoginRoute('login');

	getRouter()->addRoute('loanShow', 'LoanCtrl', ['user','admin']);
	getRouter()->addRoute('loanCompute', 'LoanCtrl', ['user', 'admin']);
	getRouter()->addRoute('login', 'LoginCtrl');
	getRouter()->addRoute('logout', 'LoginCtrl', ['user', 'admin']);

	getRouter()->go();
?>
