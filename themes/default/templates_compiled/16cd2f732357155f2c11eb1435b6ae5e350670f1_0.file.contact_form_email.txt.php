<?php
/* Smarty version 3.1.36, created on 2021-05-11 00:40:14
  from '/home/u6574599/public_html/content/themes/default/templates/emails/contact_form_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6099d26e5fbd55_54427507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16cd2f732357155f2c11eb1435b6ae5e350670f1' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/emails/contact_form_email.txt',
      1 => 1602729443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6099d26e5fbd55_54427507 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
,

<?php echo __("You have a new email message");?>


<?php echo __("Email Subject");?>
: <?php echo $_smarty_tpl->tpl_vars['_POST']->value['subject'];?>


<?php echo __("Sender Name");?>
: <?php echo $_smarty_tpl->tpl_vars['_POST']->value['name'];?>


<?php echo __("Sender Email");?>
: <?php echo $_smarty_tpl->tpl_vars['_POST']->value['email'];?>


<?php echo __("Email Message");?>
: <?php echo $_smarty_tpl->tpl_vars['_POST']->value['message'];?>


<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 <?php echo __("Team");
}
}
