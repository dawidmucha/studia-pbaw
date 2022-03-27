<?php
/* Smarty version 4.1.0, created on 2022-03-21 23:11:12
  from 'C:\xampp\htdocs\studia-pbaw\app\loan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6238f800c80e53_67817771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c57de9181bfdb300842c5e7907d7b5a15b04000' => 
    array (
      0 => 'C:\\xampp\\htdocs\\studia-pbaw\\app\\loan.html',
      1 => 1647900669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6238f800c80e53_67817771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1176654226238f800c57c58_14131719', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2909513616238f800c59859_81153029', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_1176654226238f800c57c58_14131719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1176654226238f800c57c58_14131719',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_2909513616238f800c59859_81153029 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2909513616238f800c59859_81153029',
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

<?php if ((isset($_smarty_tpl->tpl_vars['installment']->value))) {?>
<div>
		<h4>Wynik</h4>
	<p class="res">
		<?php echo $_smarty_tpl->tpl_vars['installment']->value;?>

	</p>
	test
</div>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
