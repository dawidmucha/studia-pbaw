<?php
/* Smarty version 4.1.0, created on 2022-03-29 20:28:53
  from 'C:\xampp\htdocs\studia-pbaw\app\views\LoanView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62434fe5d3d133_89727024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33709ae19568dd3a6049fce1222508f924c4a4dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\studia-pbaw\\app\\views\\LoanView.tpl',
      1 => 1648578069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62434fe5d3d133_89727024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12268325662434fe5d16473_04348412', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137034154962434fe5d3beb4_79510321', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_12268325662434fe5d16473_04348412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12268325662434fe5d16473_04348412',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
	<div class='container d-flex flex-column align-items-center m-4'>
		<!-- <div>
			<a href="<?php echo '<?php'; ?>
 print(_APP_ROOT); <?php echo '?>'; ?>
/app/security/logout.php">
				Log out
			</a>
		</div> -->

		<h1>Loan Calculator</h1>

		<form class='d-flex flex-column align-items-strertch'>
			<label class='pb-3'>
				Loan amount: <br />
				<input type="text" id="amount" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
" />
			</label> <br />
			<label class='pb-3'>
				Number of installments <br />
				<input type="text" id="installments" name="installments" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->installments;?>
" />
			</label> <br />
			<label class='pb-3'>
				Loan rate: <br />
				<div class='d-flex flex-row'>
					<input type="text" id="loanrate" name="loanrate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->loanrate;?>
" />
					<div>%</div>
				</div>
			</label> <br />
			<label class='pb-3'>
				Upfront payment: <br />
				<input type="text" id="upfront" name="upfront" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->upfront;?>
" />
			</label> <br />

			<button type="submit" value="Calculate" class='btn btn-primary m-2 p-3'>
				Submit
			</button>
		</form>

		<div>
			<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
				<h4>Errors:</h4>
				<ol class="err">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msg']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ol>
			<?php }?>
		</div>

		<div>
			<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
				<h4>Errors:</h4>
				<ol class="inf">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msg']->value->getInfos(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ol>
			<?php }?>
		</div>

		<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
			<h4>Payment:</h4>
			<p class="res"><?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
</p>
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
class Block_137034154962434fe5d3beb4_79510321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_137034154962434fe5d3beb4_79510321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 by Dawid Mucha <?php
}
}
/* {/block 'footer'} */
}
