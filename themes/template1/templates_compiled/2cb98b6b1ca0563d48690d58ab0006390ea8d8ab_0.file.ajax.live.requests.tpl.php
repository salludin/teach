<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-17 05:55:34
  from '/home/u6574599/public_html/content/themes/default/templates/ajax.live.requests.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f62fa5676d2a2_45719232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cb98b6b1ca0563d48690d58ab0006390ea8d8ab' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/ajax.live.requests.tpl',
      1 => 1589561315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_user.tpl' => 1,
  ),
),false)) {
function content_5f62fa5676d2a2_45719232 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['requests']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"request"), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
