<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Kalkulator Kredytowy</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>

	<body>
		<form action='<?php print(_APP_ROOT) ?>/app/loan.php' method='post'>
			<div>
				<label for='amount'>Wartość pożyczki:</label>
				<input type='text' id='amount' name='amount' value='<?php out($amount) ?>' />
			</div>

			<div>
				<label for='payments'>Podaj ilość rat:</label>
				<input type='text' id='payments' name='payments' value='<?php out($payments) ?>' />
			</div>

			<div>
				<label for='upfront'>Podaj wpłatę początkową:</label>
				<input type='text' id='upfront' name='upfront' value='<?php out($upfront) ?>' />
			</div>

			<div>
				<label for='bankrate'>Podaj wartość oprocentowania:</label>
				<input type='text' id='bankrate' name='bankrate' value='<?php out($bankrate) ?>' />
			</div>

			<input type='submit' value='Oblicz' />
		</form>

		<?php 
			if(isset($messages)) {
				if(count($messages) > 0) {
					echo '<ol>';
					foreach($messages as $key => $msg) {
						echo '<li>'.$msg.'</li>';
					}
					echo '.</ol>';
				}
			}
		?>

		<?php 
			if(isset($installment)) { ?>
				<div>
					<?php echo 'Twoja rata wynosi '.$installment.'zł'; ?>
				</div>
		<?php	}
		?>
	</body>
</html>