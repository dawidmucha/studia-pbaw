<?php
	namespace app\controllers;

	use app\forms\PersonEditForm;
	use DateTime;
	use PDOException;

	class PersonEditCtrl {
		private $form;

		public function __contstruct() {
			$this->form = new PersonEditForm();
		}

		public function validateSave() {
			$this->form->id = getFromRequest('id', true, 'Error while running the app');
			$this->form->name = getFromRequest('name', true, 'Error while running the app');
			$this->form->surname = getFromRequest('surname', true, 'Error while running the app');
			$this->form->birthdate = getFromRequest('birthdate', true, 'Error while running the app');
		

			if(getMessages()->isError()) return false;

			if(empty(trim($this->form->name))) {
				getMessages()->addError('Enter name');
			}
			if(empty(trim($this->form->surname))) {
				getMessages()->addError('Enter surname');
			}
			if(empty(trim($this->form->birthdate))) {
				getMessages()->addError('Enter the day of birth');
			}

			if(getMessages()->isError()) return false;

			$d = DateTime::createFromFormat('Y-m-d', $this->form->birthdate);
			if($d === false) {
				getMessages()->addError('Wrong date format. Example: 2015-12-20');
			}

			return !getMessages()->isError();
		}

		public function validateEdit() {
			$this->form->id = getFromRequest('id', true, 'Error while running the app');
			return !getMessages()->isError();
		}

		public function action_personNew() {
			$this->generateView();
		}

		public function action_personEdit() {
			if($this->validateEdit()) {
				try {
					$record = getDB()->get("person", "*", [
						"idperson" => $this->form->id
					]);

					$this->form->id = $record['idperson'];
					$this->form->name = $record['name'];
					$this->form->surname = $record['surname'];
					$this->form->birthdate = $record['birthdate'];			
				} catch(PDOException $e) {
					getMessages()->addError('There\'s been a mistake while fetching the record');
					if(getConf()->debug) getMessages()->addError($e->getMessage());
				}
			}

			$this->generateView();
		}

		public function action_personDelete() {
			if($this->validateEdit()) {
				try {
					getDB()->delete("person", [
						"idperson" => $this->form->id
					]);
					getMessages()->addInfo('Succesfully removed the record');
				} catch(PDOException $e) {
					getMessages()->addError('Error while removing the record');
					if(getConf()->debug) getMessages()->addError($e->getMessage());
				}
			}

			forwardTo('personList');
		}

		public function action_preSave() {
			if($this->validateSave()) {
				try {
					if($this->form->id == '') {
						$cound = getDB()->count("person");
						if($cound <= 20) {
							getDB()->insert("person", [
								"name" => $this->form->name,
								"surname" => $this->form->surname,
								"birthdate" => $this->form->birthdate
							]);
						} else {
							getMessages()->addInfo('Restriction: Doo many record. Please delete other record before adding a new one');
							$this->generateView();
							exit();
						}
					} else {
						getDB()->update("person", [
							"name" => $this->form->name,
							"surname" => $this->form->surname,
							"birthdate" => $this->form->birthdate
						], [
							"idperson" => $this->form->id
						]);
					}

					getMessages()->addInfo("Succesfully added record");
				} catch (PDOException $e) {
					getMessages()->addError('Unexpected error while saving the record');
					if(getConf()->debug) getMessages()->addError($e->getMessage());
				}

				forwardTo('personList');
			} else {
				$this->generateView();
			}
		}

		public function generateView() {
			getSmarty()->assign('form', $this->form);
			getSmarty()->display('PersonEdit.tpl');
		}
	}
?>