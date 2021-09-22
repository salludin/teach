<?php
/* Smarty version 3.1.36, created on 2021-06-26 16:21:18
  from '/home/u6574599/public_html/content/themes/default/templates/ajax.live.conversations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60d753fe2e62c4_16127972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abd32344886da871202d0f3d531df3112c74b76d' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/ajax.live.conversations.tpl',
      1 => 1602729443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_conversation.tpl' => 1,
  ),
),false)) {
function content_60d753fe2e62c4_16127972 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conversations']->value, 'conversation');
$_smarty_tpl->tpl_vars['conversation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conversation']->value) {
$_smarty_tpl->tpl_vars['conversation']->do_else = false;
$_smarty_tpl->_subTemplateRender('file:__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
