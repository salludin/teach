<?php
/* Smarty version 3.1.36, created on 2021-06-28 16:12:45
  from '/home/u6574599/public_html/content/themes/default/templates/emails/invitation_user_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60d9f4fde64cf3_27285644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '554be7b1ae31ce953ce1198ef69551cc37384315' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/emails/invitation_user_email.txt',
      1 => 1602729443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d9f4fde64cf3_27285644 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
,

<?php echo __("Your friend");?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
 <?php echo __("invite you to our website");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>


<?php echo __("To complete the registration process, please follow this link");?>
:
<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>


<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 <?php echo __("Team");
}
}
