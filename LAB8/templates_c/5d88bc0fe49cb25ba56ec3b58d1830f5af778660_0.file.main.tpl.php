<?php
/* Smarty version 4.1.0, created on 2022-05-11 17:55:28
  from 'C:\xampp\htdocs\studia-pbaw\LAB8\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627bdc70616850_51101267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d88bc0fe49cb25ba56ec3b58d1830f5af778660' => 
    array (
      0 => 'C:\\xampp\\htdocs\\studia-pbaw\\LAB8\\app\\views\\templates\\main.tpl',
      1 => 1650898743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627bdc70616850_51101267 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1799094074627bdc70612f08_93453178', 'content');
?>

			</div>

			<div>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1701501718627bdc706144c4_83580024', 'database');
?>

			</div>

			<div>
				<p>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_422639953627bdc70615793_64914927', 'footer');
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
class Block_1799094074627bdc70612f08_93453178 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1799094074627bdc70612f08_93453178',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default content <?php
}
}
/* {/block 'content'} */
/* {block 'database'} */
class Block_1701501718627bdc706144c4_83580024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'database' => 
  array (
    0 => 'Block_1701501718627bdc706144c4_83580024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default database <?php
}
}
/* {/block 'database'} */
/* {block 'footer'} */
class Block_422639953627bdc70615793_64914927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_422639953627bdc70615793_64914927',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default footer <?php
}
}
/* {/block 'footer'} */
}
