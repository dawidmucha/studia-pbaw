<?php
/* Smarty version 4.1.0, created on 2022-04-22 18:30:07
  from 'C:\xampp\htdocs\studia-pbaw\app\views\PersonEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6262d80f9c5172_93921283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73bcac9c6bf4cbdf4e4e1e3cc2fcb5a598a21394' => 
    array (
      0 => 'C:\\xampp\\htdocs\\studia-pbaw\\app\\views\\PersonEdit.tpl',
      1 => 1650121396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6262d80f9c5172_93921283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16228704656262d80f9be3b6_59452383', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'LoanView.tpl');
}
/* {block 'top'} */
class Block_16228704656262d80f9be3b6_59452383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_16228704656262d80f9be3b6_59452383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div>
		<form>
			<fieldset>
				<legend>Personal info</legend>
				<div>
					<label for='name'>name</label>
					<input id='name' type='text', placeholder='name' name='name' value='<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
'>
				</div>
				<div>
					<label for='surname'>surname</label>
					<input id='surname' type='text', placeholder='surname' name='surname' value='<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
'>
				</div>
				<div>
					<label for='birthdate'>date of birth</label>
					<input id='birthdate' type='text', placeholder='birthdate' name='birthdate' value='<?php echo $_smarty_tpl->tpl_vars['form']->value->birthdate;?>
'>
				</div>
				<div>
					<input type='submit' value='save' />
					<a href='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList'>Go back</a>
				</div>
			</fieldset>

			<input type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
' />
		</form>
	</div>
<?php
}
}
/* {/block 'top'} */
}
