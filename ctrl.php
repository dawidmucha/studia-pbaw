<?php
	require_once 'init.php';

	getRouter()->setDefaultRoute('loanShow');
	getRouter()->setLoginRoute('login');

	getRouter()->addRoute('loanShow', 'LoanCtrl', ['user','admin']);
	getRouter()->addRoute('loanCompute', 'LoanCtrl', ['user', 'admin']);
	
	getRouter()->addRoute('loginShow', 'LoginCtrl');
	getRouter()->addRoute('login', 'LoginCtrl');
	getRouter()->addRoute('logout', 'LoginCtrl');

	getRouter()->addRoute('personList', 'PersonListCtrl');
	getRouter()->addRoute('personNew', 'PersonEditCtrl', ['user', 'admin']);
	getRouter()->addRoute('personEdit', 'PersonEditCtrl', ['user', 'admin']);
	getRouter()->addRoute('personSave', 'PersonEditCtrl', ['user', 'admin']);
	getRouter()->addRoute('personDelete', 'PersonEditCtrl', ['admin']);

	getRouter()->go();
?>
