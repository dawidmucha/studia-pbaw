{if $msgs->isError()}
	<div>
		<h4>Errors:</h4>
		<ol class='alert alert-danger m-4'>
			{foreach $msgs->getErrors() as $err}
				{strip}
					<li>{$err}</li>
				{/strip}
			{/foreach}
		</ol>
	</div>
{/if}

{if $msgs->isInfo()}
	<div>
		<h4>Information:</h4>
		<ol class='alert alert-info m-4'>
			{foreach $msgs->getInfos() as $err}
				{strip}
					<li>{$err}</li>
				{/strip}
			{/foreach}
		</ol>
	</div>
{/if}