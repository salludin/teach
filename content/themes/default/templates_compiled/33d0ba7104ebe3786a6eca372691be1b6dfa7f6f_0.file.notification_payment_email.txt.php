<?php
/* Smarty version 3.1.36, created on 2021-09-17 11:05:00
  from '/home/u6574599/public_html/content/themes/default/templates/emails/notification_payment_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6144765ce39195_75738742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33d0ba7104ebe3786a6eca372691be1b6dfa7f6f' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/emails/notification_payment_email.txt',
      1 => 1631876691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6144765ce39195_75738742 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
 <?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
,

<?php echo __("To complete the activation process, please follow this link");?>
:
<a href="<?php echo $_smarty_tpl->tpl_vars['email_verification_code']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['email_verification_code']->value;?>
</a>

<?php echo __("Welcome to");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>

<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 <?php echo __("Team");
}
}
