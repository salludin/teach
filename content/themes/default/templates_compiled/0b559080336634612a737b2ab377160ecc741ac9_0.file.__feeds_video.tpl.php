<?php
/* Smarty version 3.1.36, created on 2021-05-05 23:26:28
  from '/home/u6574599/public_html/content/themes/default/templates/__feeds_video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609329a4485ec5_34377616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b559080336634612a737b2ab377160ecc741ac9' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/__feeds_video.tpl',
      1 => 1602729443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609329a4485ec5_34377616 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-6 col-md-4 col-lg-3">
    <a class="pg_video" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['video']->value['post_id'];?>
">
    	<video>
            <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['video']->value['source'];?>
" type="video/mp4">
            <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['video']->value['source'];?>
" type="video/webm">
        </video>
        <div class="play-button"><i class="fa fa-play fa-2x"></i></div>
    </a>
</div><?php }
}
