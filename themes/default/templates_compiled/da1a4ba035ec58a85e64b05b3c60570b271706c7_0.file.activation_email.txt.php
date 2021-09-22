<?php
/* Smarty version 3.1.36, created on 2021-05-05 07:37:10
  from '/home/u6574599/public_html/content/themes/default/templates/emails/activation_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60924b26300486_29715584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da1a4ba035ec58a85e64b05b3c60570b271706c7' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/emails/activation_email.txt',
      1 => 1602729443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60924b26300486_29715584 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
 <?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
,

<?php echo __("To complete the activation process, please follow this link");?>
:
<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/activation/<?php echo $_smarty_tpl->tpl_vars['email_verification_code']->value;?>


<?php echo __("Welcome to");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>


<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 <?php echo __("Team");
}
}
