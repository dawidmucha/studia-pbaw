{extends file='LoanView.tpl'}

{block name=top}
	<div>
		<form>
			<fieldset>
				<legend>Personal info</legend>
				<div>
					<label for='name'>name</label>
					<input id='name' type='text', placeholder='name' name='name' value='{$form->name}'>
				</div>
				<div>
					<label for='surname'>surname</label>
					<input id='surname' type='text', placeholder='surname' name='surname' value='{$form->surname}'>
				</div>
				<div>
					<label for='birthdate'>date of birth</label>
					<input id='birthdate' type='text', placeholder='birthdate' name='birthdate' value='{$form->birthdate}'>
				</div>
				<div>
					<input type='submit' value='save' />
					<a href='{$conf->action_root}personList'>Go back</a>
				</div>
			</fieldset>

			<input type='hidden' name='id' value='{$form->id}' />
		</form>
	</div>
{/block}