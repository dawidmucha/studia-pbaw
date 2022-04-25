{extends file="main.tpl"}

{block name=content}
	<div class='container d-flex flex-column align-items-center m-4'>
		<form action="{$conf->action_url}login" method="post">
			<fieldset class='d-flex flex-column align-items-stretch form-group'>
				<legend style='text-align: center;'>System log in</legend>
				<div class='form-group'>
					<label for="id_login">login:</label>
					<input id="id_login" type="text" name="login" class='form-control' />
				</div>
				<div class='form-group'>
					<label for="id_pass">password:</label>
					<input id="id_pass" type="password" name="pass" class='form-control' />
				</div>
				<div class='d-flex justify-content-center m-4'>
					<input type="submit" value="log in" class='btn btn-primary' />
				</div>
			</filedset>
		</form>
	</div>

	{include file='messages.tpl'}
{/block}

{block name=footer} by Dawid Mucha {/block}