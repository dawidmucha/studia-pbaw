<?php
/* Smarty version 4.1.0, created on 2022-03-29 20:28:53
  from 'C:\xampp\htdocs\studia-pbaw\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62434fe5f36a94_06916575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77a4905ac92d3211711d4659be089bae1c715c53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\studia-pbaw\\app\\views\\templates\\main.tpl',
      1 => 1648572758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62434fe5f36a94_06916575 (Smarty_Internal_Template $_smarty_tpl) {
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
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45913386262434fe5f31472_16115926', 'content');
?>

			</div>

			<div>
				<p>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193511217362434fe5f344b3_43116913', 'footer');
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
class Block_45913386262434fe5f31472_16115926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_45913386262434fe5f31472_16115926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default content <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_193511217362434fe5f344b3_43116913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_193511217362434fe5f344b3_43116913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default footer <?php
}
}
/* {/block 'footer'} */
}
