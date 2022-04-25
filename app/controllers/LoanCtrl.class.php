<?php
	namespace app\controllers;

	use app\forms\LoanForm;
	use app\transfer\LoanResult;

	class LoanCtrl {
		private $form;
		private $result;

		public function __construct() {
			$this->form = new LoanForm();
			$this->result = new LoanResult();
		}

		public function getParams() {
			$this->form->amount = getFromRequest('amount');
			$this->form->installments = getFromRequest('installments');
			$this->form->loanrate = getFromRequest('loanrate');
			$this->form->upfront = getFromRequest('upfront');		
			
		}

		public function validate() {
			if(!isset($this->form->amount) && !isset($this->form->installments) && !isset($this->form->loanrate) && !isset($this->form->upfront)) {
				return false;
			}
	
			if($this->form->amount == '') {
				getMessages()->addError('Missing the loan amount value');
			}
			if($this->form->installments == '') {
				getMessages()->addError('Missing the installments amount value');
			}
			if($this->form->loanrate == '') {
				getMessages()->addError('Missing the loan rate amount value');
			}
			if($this->form->upfront == '') {
				getMessages()->addError('Missing the upfront payment amount value');
			}
			
			if(!getMessages()->isError()) {
				if($this->form->installments == 0) {
					getMessages()->addError('Number of installments cannot be 0');
				}
			
				if(!is_numeric($this->form->amount) && $this->form->amount > 0) {
					$this->msgs->addError('Loan amount isn\'t a correct value');
				}
				if(!(is_numeric($this->form->installments) && $this->form->installments > 0)) {
					$this->msgs->addError('Number of installments amount isn\'t a correct value');
				}
				if(!(is_numeric($this->form->loanrate) && $this->form->loanrate > 0)) {
					$this->msgs->addError('Loan rate amount isn\'t a correct value');
				}
				if(!(is_numeric($this->form->upfront) && $this->form->upfront > 0)) {
					$this->msgs->addError('Upfront payment amount isn\'t a correct value');
				}
			}
	
			return !getMessages()->isError();
		}

		public function calculate() {
			$this->form->amount = intval($this->form->amount);
			$this->form->installments = intval($this->form->installments);
			$this->form->loanrate = intval($this->form->loanrate);
			$this->form->upfront = intval($this->form->upfront);
			getMessages()->addInfo('Parameters are correct');
	
			$this->result->result = (
				(
					$this->form->amount - $this->form->upfront
				) * (
					(
						100 + $this->form->loanrate
					) / 100
				)
			) / $this->form->installments;
			
			getMessages()->addInfo('Calculations are done!');
		}

		public function action_loanCompute() {
			$this->getParams();

			if($this->validate()) {
				$this->calculate();
			}

			$this->generateView();
		}

		public function action_loanShow() {
			getMessages()->addInfo('Welcome to the loan calculator');
			$this->generateView();
		}

		public function generateView() {
			// getSmarty()->assign('user', unserialize($_SESSION['user']));

			getSmarty()->assign('page_title', 'Loan Calculator');

			getSmarty()->assign('form', $this->form);
			getSmarty()->assign('res', $this->result);

			getSmarty()->display('LoanView.tpl');
		}
	}
?>