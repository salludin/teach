<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-04 08:34:29
  from '/home/u6574599/public_html/content/themes/default/templates/ajax.story.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f291d95686b79_79289044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a53f9cba6e4887ad23c21ce252477c3c6662310d' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/ajax.story.publisher.tpl',
      1 => 1589561315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f291d95686b79_79289044 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
    <h6 class="modal-title">
        <i class="fa fa-images mr5"></i><?php echo __("Create New Story");?>

    </h6>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form class="publisher-mini">
    <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-control-label"><?php echo __("Message");?>
</label>
                    <textarea name="message" rows="5" dir="auto" class="form-control"></textarea>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="form-control-label"><?php echo __("Photos");?>
</label>
            <div class="attachments clearfix" data-type="photos">
                <ul>
                    <li class="add">
                        <i class="fa fa-camera js_x-uploader" data-handle="publisher-mini" data-multiple="true"></i>
                    </li>
                </ul>
            </div>
        </div>

        <div class="form-group">
            <label class="form-control-label"><?php echo __("Videos");?>
</label>
            <div class="attachments clearfix" data-type="videos">
                <ul>
                    <li class="add">
                        <i class="fa fa-video js_x-uploader" data-type="video" data-handle="publisher-mini" data-multiple="true"></i>
                    </li>
                </ul>
            </div>
        </div>

        <!-- error -->
        <div class="alert alert-danger mb0 x-hidden"></div>
        <!-- error -->
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary js_publisher-story"><?php echo __("Publish");?>
</button>
    </div>
</form><?php }
}
