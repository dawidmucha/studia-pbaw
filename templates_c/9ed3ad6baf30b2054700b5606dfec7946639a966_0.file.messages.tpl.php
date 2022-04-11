<?php
/* Smarty version 4.1.0, created on 2022-04-10 18:55:53
  from 'C:\xampp\htdocs\studia-pbaw\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62530c19460e06_84670750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ed3ad6baf30b2054700b5606dfec7946639a966' => 
    array (
      0 => 'C:\\xampp\\htdocs\\studia-pbaw\\app\\views\\templates\\messages.tpl',
      1 => 1649273880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62530c19460e06_84670750 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<div>
		<h4>Errors:</h4>
		<ol class='alert alert-danger m-4'>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
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
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<div>
		<h4>Information:</h4>
		<ol class='alert alert-info m-4'>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'err');
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
	</div>
<?php }
}
}
