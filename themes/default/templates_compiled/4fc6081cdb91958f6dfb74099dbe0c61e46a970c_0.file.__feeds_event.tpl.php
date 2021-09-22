<?php
/* Smarty version 3.1.36, created on 2021-09-21 08:55:00
  from '/home/u6574599/public_html/content/themes/default/templates/__feeds_event.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_61499de4b7b0e2_38979259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fc6081cdb91958f6dfb74099dbe0c61e46a970c' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/__feeds_event.tpl',
      1 => 1632214498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61499de4b7b0e2_38979259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u6574599/public_html/includes/libs/Smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if ($_smarty_tpl->tpl_vars['_tpl']->value == "box") {?>
    <li class="col-12 col-sm-6 col-lg-6 mb-3">
        <div class="card product" style="min-height:390px">
        <div class="product-image" >
        <div class="profle-date-wrapper" style="background-color:#5e72e4; color:white;">
            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['_event']->value['event_start_date'],"%b");?>
<br><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['_event']->value['event_start_date'],"%e");?>

        </div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>">
                    <img alt="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_picture'];?>
" />
                </a>
            </div>
            <div class="product-info">
                <a class="h6" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>
</a>
                <div><?php echo $_smarty_tpl->tpl_vars['_event']->value['event_interested'];?>
 <?php echo __("Interested");?>
</div>
            </div>
            <div class="product-info">
                <?php if ($_smarty_tpl->tpl_vars['_event']->value['i_joined']['is_interested']) {?>
                    <button type="button" class="btn btn-sm btn-primary js_uninterest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
">
                        <i class="fa fa-check mr5"></i><?php echo __("Interested");?>

                    </button>
                <?php } else { ?>
                    <button type="button" class="btn btn-sm btn-primary js_interest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
">
                        <i class="fa fa-star mr5"></i><?php echo __("Interested");?>

                    </button>
                <?php }?>
                <button type="button" class="btn btn-sm btn-primary js_interest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
">
                        <i class="fa fa-star mr5"></i><?php echo __("Register");?>

                    </button>
            </div>
        </div>
    </li>
<?php } elseif ($_smarty_tpl->tpl_vars['_tpl']->value == "list") {?>
    <li class="feeds-item">
        <div class="data-container <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>small<?php }?>">
            <a class="data-avatar" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>
">
            </a>
            <div class="data-content">
                <div class="float-right">
                    <?php if ($_smarty_tpl->tpl_vars['_event']->value['i_joined']['is_interested']) {?>
                        <button type="button" class="btn btn-sm btn-primary js_uninterest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
">
                            <i class="fa fa-check mr5"></i><?php echo __("Interested");?>

                        </button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-sm btn-primary js_interest-event" data-id="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
">
                            <i class="fa fa-star mr5"></i><?php echo __("Interested");?>

                        </button>
                    <?php }?>
                </div>
                <div>
                    <span class="name">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>
</a>
                    </span>
                    <div><?php echo $_smarty_tpl->tpl_vars['_event']->value['event_interested'];?>
 <?php echo __("Interested");?>
</div>
                </div>
            </div>
        </div>
    </li>
<?php }
}
}
