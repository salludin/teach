<?php
/* Smarty version 3.1.36, created on 2021-05-28 06:10:39
  from '/home/u6574599/public_html/content/themes/default/templates/admin.forums.recursive_rows.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60b0895f054158_29533259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e653792b9abcfb5a38e835ef1ae06f849fb3aa2b' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/admin.forums.recursive_rows.tpl',
      1 => 1602729443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin.forums.recursive_rows.tpl' => 2,
  ),
),false)) {
function content_60b0895f054158_29533259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u6574599/public_html/includes/libs/Smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<tr class="treegrid-<?php echo $_smarty_tpl->tpl_vars['row']->value['forum_id'];?>
 <?php if ($_smarty_tpl->tpl_vars['row']->value['forum_section'] != '0') {?>treegrid-parent-<?php echo $_smarty_tpl->tpl_vars['row']->value['forum_section'];
}?>">
    <td>
        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['row']->value['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['title_url'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['row']->value['forum_name'];?>

        </a>
    </td>
    <td>
        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['forum_description'],50);?>

    </td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['forum_threads'];?>
</td>
    <td><span class="badge badge-pill badge-lg badge-info"><?php echo $_smarty_tpl->tpl_vars['row']->value['forum_order'];?>
</span></td>
    <td>
        <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/forums/edit_forum/<?php echo $_smarty_tpl->tpl_vars['row']->value['forum_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
            <i class="fa fa-pencil-alt"></i>
        </a>
        <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="forum" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['forum_id'];?>
">
            <i class="fa fa-trash-alt"></i>
        </button>
    </td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['row']->value['childs']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value['childs'], '_row');
$_smarty_tpl->tpl_vars['_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_row']->value) {
$_smarty_tpl->tpl_vars['_row']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender('file:admin.forums.recursive_rows.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('row'=>$_smarty_tpl->tpl_vars['_row']->value), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
