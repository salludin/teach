<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-03 06:45:33
  from '/home/u6574599/public_html/content/themes/default/templates/ajax.live.notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f27b28daf3605_51264771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '791603e1bff2d2cbbfc31f24960ebc067e8e6b12' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/ajax.live.notifications.tpl',
      1 => 1589561315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_notification.tpl' => 1,
  ),
),false)) {
function content_5f27b28daf3605_51264771 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value, 'notification');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notification']->value) {
$_smarty_tpl->_subTemplateRender('file:__feeds_notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
