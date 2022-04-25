<?php
/* Smarty version 4.1.0, created on 2022-04-22 18:29:51
  from 'C:\xampp\htdocs\studia-pbaw\app\views\LoanView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6262d7ffecf263_67265779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33709ae19568dd3a6049fce1222508f924c4a4dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\studia-pbaw\\app\\views\\LoanView.tpl',
      1 => 1650644989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6262d7ffecf263_67265779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9573699106262d7ffc6cae6_06649747', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6750218516262d7ffe04ef5_99725810', 'database');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10427674786262d7ffece471_34116745', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_9573699106262d7ffc6cae6_06649747 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9573699106262d7ffc6cae6_06649747',
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
/* {block 'top'} */
class Block_13343869716262d7ffe05987_53670084 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div>
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personList">
				<legend>Search options</legend>
				<fieldset>
					<input type='text' placeholder='surname' name='sf_surname' value="123" /><br />
					<button type='submit'>Filter</button>
				</fieldset>
			</form>
		</div>
	<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_6837569746262d7ffe076f1_17431213 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div>
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personNew">New person</a>
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
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
					<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["surname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["birthdate"];?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['idperson'];?>
">Edit</a>&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personDelete&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['idperson'];?>
">Delete</a></td></tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
	<?php
}
}
/* {/block 'bottom'} */
/* {block 'database'} */
class Block_6750218516262d7ffe04ef5_99725810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'database' => 
  array (
    0 => 'Block_6750218516262d7ffe04ef5_99725810',
  ),
  'top' => 
  array (
    0 => 'Block_13343869716262d7ffe05987_53670084',
  ),
  'bottom' => 
  array (
    0 => 'Block_6837569746262d7ffe076f1_17431213',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13343869716262d7ffe05987_53670084', 'top', $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6837569746262d7ffe076f1_17431213', 'bottom', $this->tplIndex);
?>

<?php
}
}
/* {/block 'database'} */
/* {block 'footer'} */
class Block_10427674786262d7ffece471_34116745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_10427674786262d7ffece471_34116745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 by Dawid Mucha <?php
}
}
/* {/block 'footer'} */
}
