<?php
/* Smarty version 3.1.36, created on 2021-05-06 02:36:17
  from '/home/u6574599/public_html/content/themes/default/templates/_pinned_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60935621640ec4_39674991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b0b14383f0f32ab8e8da91b6f1577f79f2d31b9' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/_pinned_post.tpl',
      1 => 1602729443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
),false)) {
function content_60935621640ec4_39674991 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- posts-filter -->
<div class="posts-filter">
    <span><?php echo __("Pinned Post");?>
</span>
</div>
<!-- posts-filter -->

<?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('standalone'=>true,'pinned'=>true), 0, false);
}
}
