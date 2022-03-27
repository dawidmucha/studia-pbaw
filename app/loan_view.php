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

			<input type="submit" value="Calculate" />
		</form>

		<?php
			//wyświetlanie listy błędów
			if(isset($messages)) {
				if(count($messages) > 0) {
					echo '<ol>';
					foreach($messages as $key => $msg) {
						echo '<li>'.$msg.'</li>';
					}
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

