<?php
/* Smarty version 4.1.0, created on 2022-05-11 22:41:52
  from 'C:\xampp\htdocs\studia-pbaw\LAB8\app\views\LoanView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627c1f90221a53_49220838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37891237f1ce00aa64087b525f3c0953f8f7da53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\studia-pbaw\\LAB8\\app\\views\\LoanView.tpl',
      1 => 1652301707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_627c1f90221a53_49220838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2093321665627c1f901efa90_79241421', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1259820402627c1f90211003_85289061', 'database');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1029641245627c1f90220ee5_95823635', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_2093321665627c1f901efa90_79241421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2093321665627c1f901efa90_79241421',
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
/* {block 'database'} */
class Block_1259820402627c1f90211003_85289061 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'database' => 
  array (
    0 => 'Block_1259820402627c1f90211003_85289061',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<table class='table'>
		<thead>
			<tr>
				<th>Amount</th>
				<th>Number of installments</th>
				<th>Loan Rate</th>
				<th>Upfront payment</th>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['history']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?><tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["amount"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["installments"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["loanrate"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["upfront"];?>
</td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>
<?php
}
}
/* {/block 'database'} */
/* {block 'footer'} */
class Block_1029641245627c1f90220ee5_95823635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1029641245627c1f90220ee5_95823635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
by Dawid Mucha<?php
}
}
/* {/block 'footer'} */
}
