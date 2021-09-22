<?php
/* Smarty version 3.1.36, created on 2021-05-25 03:35:18
  from '/home/u6574599/public_html/content/themes/default/templates/ajax.comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60ac7076a4daf7_96633595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '450b6d306a35fe9f8e9218990cef2ab0feeed081' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/ajax.comments.tpl',
      1 => 1602729443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_comment.tpl' => 1,
  ),
),false)) {
function content_60ac7076a4daf7_96633595 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
$_smarty_tpl->_subTemplateRender('file:__feeds_comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_comment'=>$_smarty_tpl->tpl_vars['comment']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
