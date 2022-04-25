<?php
	require_once dirname(__FILE__).'/../config.php';
?>

<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8" />
			<title>Kalkulator kredytowy</title>

			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>

	<body class='container d-flex flex-column align-items-center m-4'>
		<!-- <div>
			<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php">
				Log out
			</a>
		</div> -->

		<h1>Loan Calculator</h1>

		<form class='d-flex flex-column align-items-strertch'>
			<label class='pb-3'>
				Loan amount: <br />
				<input type="text" id="amount" name="amount" value="<?php print($amount); ?>" />
			</label> <br />
			<label class='pb-3'>
				Number of installments <br />
				<input type="text" id="installments" name="installments" value="<?php print($installments); ?>" />
			</label> <br />
			<label class='pb-3'>
				Loan rate: <br />
				<div class='d-flex flex-row'>
					<input type="text" id="loanrate" name="loanrate" value="<?php print($loanrate); ?>" />
					<div>%</div>
				</div>
			</label> <br />
			<label class='pb-3'>
				Upfront payment: <br />
				<input type="text" id="upfront" name="upfront" value="<?php print($upfront); ?>" />
			</label> <br />

			<button type="submit" value="Calculate" class='btn btn-primary m-2 p-3'>
				Submit
			</button>
		</form>

		<?php
			//wyświetlanie listy błędów
			if(isset($messages)) {
				if(count($messages) > 0) {
					echo '<div class=\'alert alert-warning p-4\'>';
						echo '<ol>';
							foreach($messages as $key => $msg) {
								echo '<li>'.$msg.'</li>';
							}
						echo '</ol>';
					echo '</div>';
				}
			}

			//wyświetlanie wyniku
			if(isset($result)) {
				echo '<h3 class=\'m-4\'>';
				echo 'One payment: <span class=\'badge bg-success\'>$'.$result.'</span>';
				echo '</h3>';
			}
		?>		

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>

