<?php
/* Smarty version 4.1.0, created on 2022-03-29 19:28:47
  from 'C:\xampp\htdocs\studia-pbaw\app\views\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624341cf2eed40_51060094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5904401e995d0179889c18c85b05bbce972f6a39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\studia-pbaw\\app\\views\\templates\\main.html',
      1 => 1648572758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624341cf2eed40_51060094 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_218379673624341cf2ec713_74767903', 'content');
?>

			</div>

			<div>
				<p>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_821251877624341cf2eddb7_67432152', 'footer');
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
class Block_218379673624341cf2ec713_74767903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_218379673624341cf2ec713_74767903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default content <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_821251877624341cf2eddb7_67432152 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_821251877624341cf2eddb7_67432152',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default footer <?php
}
}
/* {/block 'footer'} */
}
