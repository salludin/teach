<?php
/* Smarty version 3.1.36, created on 2021-05-05 07:25:42
  from '/home/u6574599/public_html/content/themes/default/templates/emails/notification_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60924876e6d802_54695191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce191fba9e11f0c8f902c5303ac3183ed971751e' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/emails/notification_email.txt',
      1 => 1602729443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60924876e6d802_54695191 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
 <?php echo $_smarty_tpl->tpl_vars['receiver']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['receiver']->value['user_lastname'];?>
,

<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
 <?php echo $_smarty_tpl->tpl_vars['notification']->value['message'];?>

<?php echo $_smarty_tpl->tpl_vars['notification']->value['url'];?>


<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 <?php echo __("Team");
}
}
