<?php
/* Smarty version 3.1.36, created on 2021-05-05 07:30:55
  from '/home/u6574599/public_html/content/themes/default/templates/_album.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609249af5e0696_93324297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11664ae2abd470862f36bc431f870ba399ab3c0c' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/_album.tpl',
      1 => 1602729443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_photo.tpl' => 1,
  ),
),false)) {
function content_609249af5e0696_93324297 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- album buttons -->
<?php if ($_smarty_tpl->tpl_vars['album']->value['manage_album'] && $_smarty_tpl->tpl_vars['album']->value['can_delete']) {?>
    <div class="text-center">
        <button type="button" class="btn btn-sm btn-outline-primary rounded-pill ml5 mb5" data-toggle="modal" data-url="albums/modal.php?do=edit_title&id=<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
">
            <i class="fa fa-pencil-alt mr5"></i><?php echo __("Edit Album");?>

        </button>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['photos_enabled']) {?>
            <button type="button" class="btn btn-sm btn-outline-primary rounded-pill ml5 mb5" data-toggle="modal" data-url="albums/modal.php?do=add_photos&id=<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
">
                <i class="fa fa-plus-circle mr5"></i><?php echo __("Add Photos");?>

            </button>
        <?php }?>
        <button type="button" class="btn btn-sm btn-outline-danger rounded-pill ml5 mb5 js_delete-album" data-id="<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
">
            <i class="fa fa-trash-alt mr5"></i><?php echo __("Delete Album");?>

        </button>
    </div>
<?php }?>
<!-- album buttons -->

<!-- album title & meta -->
<div class="album-title">
    <?php echo $_smarty_tpl->tpl_vars['album']->value['title'];?>

</div>
<div class="album-meta">
    <?php if ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "me") {?>
        <?php echo __("Shared with");?>
 <i class="fa fa-lock" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
: <?php echo __("Only Me");?>
'></i>
    <?php } elseif ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "friends") {?>
        <?php echo __("Shared with");?>
 <i class="fa fa-users" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
: <?php echo __("Friends");?>
'></i>
    <?php } elseif ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "public") {?>
        <?php echo __("Shared with");?>
 <i class="fa fa-globe" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
: <?php echo __("Public");?>
'></i>
    <?php } elseif ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "custom") {?>
        <?php echo __("Shared with");?>
 <i class="fa fa-cog" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Custom People");?>
'></i>
    <?php }?>
</div>
<!-- album title & meta -->

<!-- photos -->
<?php if (count($_smarty_tpl->tpl_vars['album']->value['photos']) > 0) {?>
    <ul class="row no-gutters">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album']->value['photos'], 'photo');
$_smarty_tpl->tpl_vars['photo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"album",'_manage'=>$_smarty_tpl->tpl_vars['album']->value['manage_album']), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php if (count($_smarty_tpl->tpl_vars['album']->value['photos']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
        <!-- see-more -->
        <div class="alert alert-info see-more mt20 js_see-more" data-get="photos" data-id="<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
" data-type='album'>
            <span><?php echo __("See More");?>
</span>
            <div class="loader loader_small x-hidden"></div>
        </div>
        <!-- see-more -->
    <?php }
} else { ?>
    <p class="text-center text-muted mt10">
        <?php echo __("This album is empty");?>

    </p>
<?php }?>
<!-- photos --><?php }
}
