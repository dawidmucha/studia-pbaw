<?php
/* Smarty version 4.1.0, created on 2022-04-20 14:28:09
  from 'C:\xampp\htdocs\studia-pbaw\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625ffc59986fb1_95880201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77a4905ac92d3211711d4659be089bae1c715c53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\studia-pbaw\\app\\views\\templates\\main.tpl',
      1 => 1650121301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625ffc59986fb1_95880201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
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
			<div class="navbar navbar-expand-lg navbar-light bg-light w-100 d-flex justify-content-center">
				<a class="navbar-brand mx-3" href="">Loan Calculator</a>
				<div>
					<ul class='nav navbar-nav'>
						<li class='nav-item'>
							<a href="#app_content" class='nav-link'>Go to form</a>
						</li>
					</ul>
				</div>
				<div>
					<ul class='nav navbar-nav'>
						<li class='nav-item'>
							<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class='nav-link'>Log out</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div>
			<div id="app_content">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1698553148625ffc59984d75_37837555', 'content');
?>

			</div>

			<div>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1269961623625ffc599859d7_93684172', 'database');
?>

			</div>

			<div>
				<p>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_691461400625ffc59986370_21748028', 'footer');
?>

				</p>
			</div>
		</div>

		<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>
	</body>
</html><?php }
/* {block 'content'} */
class Block_1698553148625ffc59984d75_37837555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1698553148625ffc59984d75_37837555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default content <?php
}
}
/* {/block 'content'} */
/* {block 'database'} */
class Block_1269961623625ffc599859d7_93684172 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'database' => 
  array (
    0 => 'Block_1269961623625ffc599859d7_93684172',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default database <?php
}
}
/* {/block 'database'} */
/* {block 'footer'} */
class Block_691461400625ffc59986370_21748028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_691461400625ffc59986370_21748028',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default footer <?php
}
}
/* {/block 'footer'} */
}
