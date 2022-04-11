<?php
/* Smarty version 4.1.0, created on 2022-04-10 18:55:53
  from 'C:\xampp\htdocs\studia-pbaw\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62530c1928e352_56675367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33a808e7f51588291126c4de4a738f2ee6bf2742' => 
    array (
      0 => 'C:\\xampp\\htdocs\\studia-pbaw\\app\\views\\LoginView.tpl',
      1 => 1649609724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_62530c1928e352_56675367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142077406462530c19281192_69778388', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176867920162530c1928d666_73480957', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_142077406462530c19281192_69778388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_142077406462530c19281192_69778388',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class='container d-flex flex-column align-items-center m-4'>
		<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
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

	<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_176867920162530c1928d666_73480957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_176867920162530c1928d666_73480957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 by Dawid Mucha <?php
}
}
/* {/block 'footer'} */
}
