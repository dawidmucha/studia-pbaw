{extends file="main.tpl"}

{block name=content} 
	<div class='container d-flex flex-column align-items-center m-4'>
		<!-- <div>
			<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php">
				Log out
			</a>
		</div> -->

		<h1>Loan Calculator</h1>

		<form class='d-flex flex-column align-items-strertch'>
			<label class='pb-3'>
				Loan amount: <br />
				<input type="text" id="amount" name="amount" value="{$form->amount}" />
			</label> <br />
			<label class='pb-3'>
				Number of installments <br />
				<input type="text" id="installments" name="installments" value="{$form->installments}" />
			</label> <br />
			<label class='pb-3'>
				Loan rate: <br />
				<div class='d-flex flex-row'>
					<input type="text" id="loanrate" name="loanrate" value="{$form->loanrate}" />
					<div>%</div>
				</div>
			</label> <br />
			<label class='pb-3'>
				Upfront payment: <br />
				<input type="text" id="upfront" name="upfront" value="{$form->upfront}" />
			</label> <br />

			<button type="submit" value="Calculate" class='btn btn-primary m-2 p-3'>
				Submit
			</button>
		</form>

		<div>
			{if $msgs->isError()}
				<h4>Errors:</h4>
				<ol class="err">
					{foreach $msg->getErrors() as $err}
						{strip}
							<li>{$err}</li>
						{/strip}
					{/foreach}
				</ol>
			{/if}
		</div>

		<div>
			{if $msgs->isInfo()}
				<h4>Errors:</h4>
				<ol class="inf">
					{foreach $msg->getInfos() as $err}
						{strip}
							<li>{$err}</li>
						{/strip}
					{/foreach}
				</ol>
			{/if}
		</div>

		{if isset($res->result)}
			<h4>Payment:</h4>
			<p class="res">{$res->result}</p>
		{/if}

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</div>
{/block}

{block name=footer} by Dawid Mucha {/block}