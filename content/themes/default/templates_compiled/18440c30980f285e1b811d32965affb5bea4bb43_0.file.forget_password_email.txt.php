<?php
/* Smarty version 3.1.36, created on 2021-05-07 11:48:01
  from '/home/u6574599/public_html/content/themes/default/templates/emails/forget_password_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609528f18544b3_37494687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18440c30980f285e1b811d32965affb5bea4bb43' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/emails/forget_password_email.txt',
      1 => 1602729443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609528f18544b3_37494687 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>


<?php echo __("To complete the reset password process, please copy this token");?>
:

<?php echo __("Token");?>
: <?php echo $_smarty_tpl->tpl_vars['reset_key']->value;?>


<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 <?php echo __("Team");
}
}
