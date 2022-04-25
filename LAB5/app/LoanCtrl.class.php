<?php
	require_once $conf->root_path.'/lib/Twig/Autoloader.php';
	require_once $conf->root_path.'/lib/Messages.class.php';
	require_once $conf->root_path.'/app/LoanForm.class.php';
	require_once $conf->root_path.'/app/LoanResult.class.php';

	class LoanCtrl {
		private $msgs;
		private $form;
		private $result;
		private $hide_intro;

		public function __construct() {
			$this->msgs = new Messages();
			$this->form = new LoanForm();
			$this->result = new LoanResult();
			$this->hide_intro = false;
		}

		public function getParams() {
			$this->form->amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
			$this->form->installments = isset($_REQUEST['installments']) ? $_REQUEST['installments'] : null;
			$this->form->loanrate = isset($_REQUEST['loanrate']) ? $_REQUEST['loanrate'] : null;
			$this->form->upfront = isset($_REQUEST['upfront']) ? $_REQUEST['upfront'] : null;			
		}

		public function validate() {
			if(!isset($this->form->amount) && !isset($this->form->installments) && !isset($this->form->loanrate) && !isset($this->form->upfront)) {
				return false;
			} else {
				$this->hide_intro = true;
			}
	
			if($this->form->amount == '') {
				$this->msgs->addError('Missing the loan amount value');
			}
			if($this->form->installments == '') {
				$this->msgs->addError('Missing the installments amount value');
			}
			if($this->form->loanrate == '') {
				$this->msgs->addError('Missing the loan rate amount value');
			}
			if($this->form->upfront == '') {
				$this->msgs->addError('Missing the upfront payment amount value');
			}
			
			if(!$this->msgs->isError()) {
				if($this->form->installments == 0) {
					$this->msgs->addError('Number of installments cannot be 0');
				}
	
				if($this->form->installments == '') {
					$this->msgs->addError('Missing the installments amount value');
				}
				if($this->form->loanrate == '') {
					$this->msgs->addError('Missing the loan rate amount value');
				}
				if($this->form->upfront == '') {
					$this->msgs->addError('Missing the upfront payment amount value');
				}
			
				if(!is_numeric($this->form->amount) && $this->form->amount > 0) {
					$this->msgs->addError('Loan amount isn\'t a correct value');
				}
				if(!is_numeric($this->form->installments) && $this->form->installments > 0) {
					$this->msgs->addError('Number of installments amount isn\'t a correct value');
				}
				if(!is_numeric($this->form->loanrate) && $this->form->loanrate > 0) {
					$this->msgs->addError('Loan rate amount isn\'t a correct value');
				}
				if(!is_numeric($this->form->upfront) && $this->form->upfront > 0) {
					$this->msgs->addError('Upfront payment amount isn\'t a correct value');
				}
			}
	
			return !$this->msgs->isError();
		}

		public function calculate() {
			$this->form->amount = intval($this->form->amount);
			$this->form->installments = intval($this->form->installments);
			$this->form->loanrate = intval($this->form->loanrate);
			$this->form->upfront = intval($this->form->upfront);
	
			$this->result->result = (
				(
					$this->form->amount - $this->form->upfront
				) * (
					(
						100 + $this->form->loanrate
					) / 100
				)
			) / $this->form->installments;
			
			$this->msgs->addInfo('Calculations are done!');
		}

		public function process() {
			$this->getParams();

			if($this->validate()) {
				$this->calculate();
			}

			$this->generateView();
		}

		public function generateView() {
			Twig_Autoloader::register();
			$loader = new Twig_Loader_Filesystem(dirname(__FILE__).'/../templates');
			$loader->addPath(dirname(__FILE__).'/../app');
			$twig = new Twig_Environment($loader, array(
				// 'cache' => _ROOT_PATH.'/twig_cache',
			));

			$variables = array(
				'app_url' => 'http://loclahost:80/studia-pbaw',
				'root_path' => dirname(__FILE__),
				'page_title' => 'Loan calculator',
				'page_description' => 'Simple, fast, brutal',
				'page_header' => 'Loan calculator using PHP and Twig',
				'hide_intro' => true
			);

			if(isset($this->form->amount)) $variables['amount'] = $this->form->amount;
			if(isset($this->form->installments)) $variables['installments'] = $this->form->installments;
			if(isset($this->form->loanrate)) $variables['loanrate'] = $this->form->loanrate;
			if(isset($this->form->upfront)) $variables['upfront'] = $this->form->upfront;
			if(isset($this->form->result)) $variables['result'] = $this->form->result;
			if(isset($this->form->messages)) $variables['messages'] = $this->form->messages;

			echo $twig->render('loan.html', $variables);
		}
	}
?>