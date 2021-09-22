<?php
/* Smarty version 3.1.36, created on 2021-05-29 13:11:49
  from '/home/u6574599/public_html/content/themes/default/templates/__feeds_message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60b23d95d5b163_92224126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ef3237b294f56b9ddea1046d31bcc8b954fc4a0' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/__feeds_message.tpl',
      1 => 1602729443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b23d95d5b163_92224126 (Smarty_Internal_Template $_smarty_tpl) {
?><li>
    <div class="conversation clearfix <?php if ($_smarty_tpl->tpl_vars['message']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>right<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['message']->value['message_id'];?>
">
        <?php if ($_smarty_tpl->tpl_vars['message']->value['user_id'] != $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
            <div class="conversation-user">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['message']->value['user_name'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['message']->value['user_picture'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['message']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['message']->value['user_lastname'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['message']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['message']->value['user_lastname'];?>
">
                </a>
            </div>
        <?php }?>
        <div class="conversation-body">
            <!-- message text -->
            <div class="text <?php if ($_smarty_tpl->tpl_vars['message']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>js_chat-color-me<?php }?>">
                <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

                <?php if ($_smarty_tpl->tpl_vars['message']->value['image']) {?>
                    <span class="text-link js_lightbox-nodata <?php if ($_smarty_tpl->tpl_vars['message']->value['message'] != '') {?>mt5<?php }?>" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['message']->value['image'];?>
">
                        <img alt="" class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['message']->value['image'];?>
">
                    </span>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['message']->value['voice_note']) {?>
                    <audio class="js_audio" id="audio-<?php echo $_smarty_tpl->tpl_vars['message']->value['message_id'];?>
" controls preload="auto" style="width: 100%; min-width: 120px;">
                        <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['message']->value['voice_note'];?>
" type="audio/mpeg">
                        <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['message']->value['voice_note'];?>
" type="audio/mp3">
                        <?php echo __("Your browser does not support HTML5 audio");?>

                    </audio>
                <?php }?>
            </div>
            <!-- message text -->

            <!-- message time -->
            <div class="time js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['message']->value['time'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['message']->value['time'];?>

            </div>
            <!-- message time -->

            <!-- seen status -->
            <?php if ($_smarty_tpl->tpl_vars['last_seen_message_id']->value == $_smarty_tpl->tpl_vars['message']->value['message_id']) {?>
                <div class="seen">
                    <?php echo __("Seen by");?>
 <?php echo $_smarty_tpl->tpl_vars['conversation']->value['seen_name_list'];?>

                </div>
            <?php }?>
            <!-- seen status -->
        </div>
    </div>
</li><?php }
}
