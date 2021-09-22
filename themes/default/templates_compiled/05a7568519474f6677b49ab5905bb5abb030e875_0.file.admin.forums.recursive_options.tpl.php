<?php
/* Smarty version 3.1.36, created on 2021-05-07 01:43:39
  from '/home/u6574599/public_html/content/themes/default/templates/admin.forums.recursive_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60949b4bb741e9_41839138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05a7568519474f6677b49ab5905bb5abb030e875' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/admin.forums.recursive_options.tpl',
      1 => 1602729443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin.forums.recursive_options.tpl' => 2,
  ),
),false)) {
function content_60949b4bb741e9_41839138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u6574599/public_html/includes/libs/Smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<option <?php if ($_smarty_tpl->tpl_vars['data']->value['forum_section'] == $_smarty_tpl->tpl_vars['forum']->value['forum_id']) {?>selected style="font-weight: 600;"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['forum']->value['iteration']) {?>class="bg-info"<?php }?>>
    <?php echo str_repeat("- - ",$_smarty_tpl->tpl_vars['forum']->value['iteration']);
echo __(smarty_modifier_truncate($_smarty_tpl->tpl_vars['forum']->value['forum_name'],30));?>

</option>
<?php if ($_smarty_tpl->tpl_vars['forum']->value['childs']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forum']->value['childs'], '_forum');
$_smarty_tpl->tpl_vars['_forum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_forum']->value) {
$_smarty_tpl->tpl_vars['_forum']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender('file:admin.forums.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('forum'=>$_smarty_tpl->tpl_vars['_forum']->value), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
