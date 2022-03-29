<!doctype html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="{{ page_description|default("Default description") }}">

		<title>Loan Calculator</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>

	<body>
		<div id="app_top">
		<div class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand mx-3" href="">Loan Calculator</a>
			<div class='collapse navbar-collapse' id='navbarNav'>
				<ul class='navbar-nav mr-auto'>
					<li class='nav-item'>
						<a href="#app_top" class='nav-link'>Loan Calculator</a>
					</li>
					<li class='nav-item'>
						<a href="#app_content" class='nav-link'>Go to form</a>
					</li>
				</ul>
			</div>
		</div>
		</div>

		<div>
			<div id="app_content">
				{block name=content} Default content {/block}
			</div>

			<div>
				<p>
					{block name=footer} Default footer {/block}
				</p>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>