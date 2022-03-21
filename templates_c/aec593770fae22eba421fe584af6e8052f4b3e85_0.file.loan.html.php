<?php
/* Smarty version 4.1.0, created on 2022-03-21 22:59:35
  from 'C:\xampp\htdocs\studia-pbaw\app\loan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6238f5472bc521_78008786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aec593770fae22eba421fe584af6e8052f4b3e85' => 
    array (
      0 => 'C:\\xampp\\htdocs\\studia-pbaw\\app\\loan.html',
      1 => 1647899973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6238f5472bc521_78008786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14547301146238f547291b84_49164857', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11780528766238f547293bb0_90898013', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_14547301146238f547291b84_49164857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_14547301146238f547291b84_49164857',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_11780528766238f547293bb0_90898013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11780528766238f547293bb0_90898013',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="'content-head is-center">Kalkulator Kredytowy</h2>

<div class="pure-g">
	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/loan.php" method="post">
			<fieldset>
				<label for="amount">Wielkość kredytu</label>
				<input id="amount" type="text" placeholder="podaj wartość kredytu" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['amount'];?>
"> 

				<label for="payments">Ilość rat</label>
				<input id="payments" type="text" placeholder="podaj ilość rat" name="payments" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['payments'];?>
">

				<label for="upfront">Wartość początkowa</label>
				<input id="upfront" type="text" placeholder="podaj wartość kwoty początkowej" name="upfront" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['upfront'];?>
">

				<label for="bankrate">Oprocentowanie</label>
				<input id="bankrate" type="text" placeholder="podaj wysokość oprocentowania" name="bankrate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['bankrate'];?>
">
			
				<button type="submit" class="pure-button">Oblicz</button>
			</fieldset>
		</form>
	</div>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">
		<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
		<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
			<h4>Wystąpiły błędy:</h4>
			<ol class="err">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ol>
		<?php }?>
	<?php }?>
</div>

<div>
		<p class="res">
		<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
</div>

<?php
}
}
/* {/block 'content'} */
}
