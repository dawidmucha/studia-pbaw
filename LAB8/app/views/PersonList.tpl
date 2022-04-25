{extends file="main.tpl"}

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