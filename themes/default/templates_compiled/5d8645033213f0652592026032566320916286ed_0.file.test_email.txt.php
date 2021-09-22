<?php
/* Smarty version 3.1.36, created on 2021-09-17 10:36:10
  from '/home/u6574599/public_html/content/themes/default/templates/emails/test_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_61446f9a4f1267_82651856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d8645033213f0652592026032566320916286ed' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/emails/test_email.txt',
      1 => 1602729443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61446f9a4f1267_82651856 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
,

<?php echo __("This is a test email");?>


<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 <?php echo __("Team");
}
}
