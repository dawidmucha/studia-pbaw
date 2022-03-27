<<<<<<< HEAD
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
=======
<?php
	require_once dirname(__FILE__).'/../config.php';
?>

<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8" />
			<title>Kalkulator kredytowy</title>
	</head>

	<body>
		<form>
			<label>
				Loan amount: <br />
				<input type="text" id="amount" name="amount" value="<?php print($amount); ?>" />
			</label> <br />
			<label>
				Number of installments <br />
				<input type="text" id="installments" name="installments" value="<?php print($installments); ?>" />
			</label> <br />
			<label>
				Loan rate: <br />
				<input type="text" id="loanrate" name="loanrate" value="<?php print($upfront); ?>" />
			</label>% <br />
			<label>
				Upfront payment: <br />
				<input type="text" id="upfront" name="upfront" value="<?php print($upfront); ?>" />
			</label> <br />

			<input type="submit" value="Oblicz ratę kredytu" />
		</form>

		<?php
			//wyświetlanie listy błędów
>>>>>>> 317973d (LAB1)
			if(isset($messages)) {
				if(count($messages) > 0) {
					echo '<ol>';
					foreach($messages as $key => $msg) {
						echo '<li>'.$msg.'</li>';
					}
<<<<<<< HEAD
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
=======
					echo '</ol>';
				}
			}

			//wyświetlanie wyniku
			if(isset($result)) {
				echo '<div>';
				echo 'One payment: $'.$result;
				echo '</div>';
			}
		?>		
	</body>
</html>

>>>>>>> 317973d (LAB1)
