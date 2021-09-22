<?php
/* Smarty version 3.1.36, created on 2021-05-05 07:25:48
  from '/home/u6574599/public_html/content/themes/default/templates/_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6092487ca21e16_11024516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fef44931576a6b3cec4dcc1baaacc959e1e74c1' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/_widget.tpl',
      1 => 1602729443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6092487ca21e16_11024516 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['widgets']->value) {?>
	<!-- Widgets -->
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
		<div class="card">
		    <div class="card-header">
		        <strong><?php echo $_smarty_tpl->tpl_vars['widget']->value['title'];?>
</strong>
		    </div>
		    <div class="card-body"><?php echo $_smarty_tpl->tpl_vars['widget']->value['code'];?>
</div>
		</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<!-- Widgets -->
<?php }
}
}
