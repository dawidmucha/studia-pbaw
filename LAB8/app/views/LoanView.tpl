{extends file="main.tpl"}

{block name=content} 
	<div class='container d-flex flex-column align-items-center m-4'>
		<h1>Loan Calculator</h1>

		<form class='d-flex flex-column' action="{$conf->action_root}loanCompute" method="post">
			<label class='pb-3' class='form-group'>
				Loan amount: <br />
				<input type="text" id="amount" name="amount" value="{$form->amount}" class='form-control' />
			</label> <br />
			<label class='pb-3' class='form-group'>
				Number of installments <br />
				<input type="text" id="installments" name="installments" value="{$form->installments}" class='form-control' />
			</label> <br />
			<label class='pb-3' class='form-group'>
				Loan rate: <br />
				<div class='d-flex flex-row align-items-center'>
					<input type="text" id="loanrate" name="loanrate" value="{$form->loanrate}" class='form-control' />
					<div style='font-size: 1.5rem'>%</div>
				</div>
			</label> <br />
			<label class='pb-3' class='form-group'>
				Upfront payment: <br />
				<input type="text" id="upfront" name="upfront" value="{$form->upfront}" class='form-control' />
			</label> <br />

			<button type="submit" value="Calculate" class='btn btn-primary m-4'>
				Submit
			</button>
		</form>

		{include file='messages.tpl'}

		{if isset($res->result)}
			<h4>Payment:</h4>
			<h1><span class="badge badge-secondary" style='background-color: lightgreen;'>{$res->result}</span></h1>
		{/if}

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</div>
{/block}

{block name=database}
	{block name=top}
		<div>
			<form action="{$conf->action_url}personList">
				<legend>Search options</legend>
				<fieldset>
					<input type='text' placeholder='surname' name='sf_surname' value="{$searchForm->surname}" /><br />
					<button type='submit'>Filter</button>
				</fieldset>
			</form>
		</div>
	{/block}

	{block name=bottom}
		<div>
			<a href="{$conf->action_url}personNew">New person</a>
		</div>
		<table id='tab_people'>
			<thead>
				<tr>
					<th>name</th>
					<th>surname</th>
					<th>date of birth</th>
					<th>options</th>
				</tr>
			</thead>
			<tbody>
				{foreach $people as $p}
					{strip}
						<tr>
							<td>{$p["name"]}</td>
							<td>{$p["surname"]}</td>
							<td>{$p["birthdate"]}</td>
							<td>
								<a href="{$conf->action_url}personEdit&id={$p['idperson']}">Edit</a>
								&nbsp;
								<a href="{$conf->action_url}personDelete&id={$p['idperson']}">Delete</a>
							</td>
						</tr>
					{/strip}
				{/foreach}
			</tbody>
		</table>
	{/block}
{/block}

{block name=footer} by Dawid Mucha {/block}