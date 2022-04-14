<?php
/* Smarty version 4.1.0, created on 2022-04-14 19:46:53
  from 'C:\xampp\htdocs\studia-pbaw\app\views\LoanView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62585e0d045a34_55673748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33709ae19568dd3a6049fce1222508f924c4a4dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\studia-pbaw\\app\\views\\LoanView.tpl',
      1 => 1649274228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_62585e0d045a34_55673748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197585191962585e0ce0edf4_82354628', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122052896762585e0d044a62_02811657', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_197585191962585e0ce0edf4_82354628 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_197585191962585e0ce0edf4_82354628',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
	<div class='container d-flex flex-column align-items-center m-4'>
		<h1>Loan Calculator</h1>

		<form class='d-flex flex-column' action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loanCompute" method="post">
			<label class='pb-3' class='form-group'>
				Loan amount: <br />
				<input type="text" id="amount" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
" class='form-control' />
			</label> <br />
			<label class='pb-3' class='form-group'>
				Number of installments <br />
				<input type="text" id="installments" name="installments" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->installments;?>
" class='form-control' />
			</label> <br />
			<label class='pb-3' class='form-group'>
				Loan rate: <br />
				<div class='d-flex flex-row align-items-center'>
					<input type="text" id="loanrate" name="loanrate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->loanrate;?>
" class='form-control' />
					<div style='font-size: 1.5rem'>%</div>
				</div>
			</label> <br />
			<label class='pb-3' class='form-group'>
				Upfront payment: <br />
				<input type="text" id="upfront" name="upfront" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->upfront;?>
" class='form-control' />
			</label> <br />

			<button type="submit" value="Calculate" class='btn btn-primary m-4'>
				Submit
			</button>
		</form>

		<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
			<h4>Payment:</h4>
			<h1><span class="badge badge-secondary" style='background-color: lightgreen;'><?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
</span></h1>
		<?php }?>

		<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>
	</div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_122052896762585e0d044a62_02811657 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_122052896762585e0d044a62_02811657',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 by Dawid Mucha <?php
}
}
/* {/block 'footer'} */
}
