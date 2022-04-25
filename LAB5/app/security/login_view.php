<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title>Loan Calculator - Log In</title>
	</head>

	<body>
		<div>
			<form action='<?php print(_APP_ROOT); ?>/app/security/login.php' method='post'>
				<legend>Log In</legend>
				<fieldset>
					<label>
						Login:
						<input type='text' id='login' name='login' value='<?php out($form['login']); ?>' />
					</label>
					<label>
						Password:
						<input type='text' id='pass' name='pass' value='<?php out($form['login']); ?>' />
					</label>
					<input type='submit' value='LOG IN' />
				</fieldset>
			</form>

			<?php

				if(isset($messages)) {
					if(count($messages) > 0) {
						echo '<ol>';
						foreach($messages as $key => $msg) {
							echo '<li>'.$msg.'</li>';
						}
						echo '</ol>';
					} 
				}

			?>
		</div>
	</body>
</html>