<?php
/* Smarty version 3.1.36, created on 2021-09-20 08:15:02
  from '/home/u6574599/public_html/content/themes/default/templates/event.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_614843060beae7_65947372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e24f87b2922483b3291b78e38b60137eb9af970' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/event.tpl',
      1 => 1632125699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_photo.tpl' => 1,
    'file:__feeds_album.tpl' => 1,
    'file:_album.tpl' => 1,
    'file:__feeds_video.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_614843060beae7_65947372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u6574599/public_html/includes/libs/Smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>offcanvas<?php }?>">
    <div class="row">

        <!-- side panel -->
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
            <div class="col-12 col-md-4 col-lg-3 d-block d-sm-none d-md-block offcanvas-sidebar mt20 js_sticky-sidebar">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        <?php }?>
        <!-- side panel -->

        <!-- content panel -->
        <div class="col-12 <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>col-md-8 col-lg-9 offcanvas-mainbar<?php }?>">
            <!-- profile-header -->
            
            <!-- profile-header -->

            <!-- profile-content -->
            <div class="row">
                <!-- view content -->
                <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
                    <div class="col-lg-12">
                        <!-- panel [about] -->
                        <div class="card">
                                </div>
                                </div>
                    <!-- right panel -->
                    <div class="order-2 col-lg-7 order-lg-2">
                        <!-- panel [about] -->
                        <div class="card">
                            <div class="card-body">
                     
                                <ul class="about-list">
                                    <li>
                                        <div class="about-list-item">
                                            <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "public") {?>
                                                <i class="fa fa-globe fa-fw fa-lg"></i>
                                                <?php echo __("Public Event");?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "closed") {?>
                                                <i class="fa fa-unlock-alt fa-fw fa-lg"></i>
                                                <?php echo __("Closed Event");?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "secret") {?>
                                                <i class="fa fa-lock fa-fw fa-lg"></i>
                                                <?php echo __("Secret Event");?>

                                            <?php }?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-clock fa-fw fa-lg"></i>
                                            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_start_date'],"%B %e");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_end_date'],"%B %e");?>
<br>
                                            <small class="text-muted"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_start_date'],"%b %e %I:%M %p");?>
 <?php echo __("to");?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['event_end_date'],"%b %e %I:%M %p");?>
</small>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-user fa-fw fa-lg"></i>
                                            <?php echo __("Hosted By");?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['event']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['event']->value['user_lastname'];?>
</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-tag fa-fw fa-lg"></i>
                                            <?php echo __($_smarty_tpl->tpl_vars['event']->value['event_category_name']);?>

                                        </div>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['event']->value['event_location']) {?>
                                        <!-- event location -->
                                        <li>
                                            <div class="about-list-item">
                                                <i class="fa fa-map-marker fa-fw fa-lg"></i>
                                                <?php echo $_smarty_tpl->tpl_vars['event']->value['event_location'];?>

                                            </div>
                                        </li>
                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['geolocation_enabled']) {?>
                                        <div style="margin-left: -20px; margin-right: -20px;">
                                            <iframe width="100%" frameborder="0" style="border:0;" src="https://www.google.com/maps/embed/v1/place?key=<?php echo $_smarty_tpl->tpl_vars['system']->value['geolocation_key'];?>
&amp;q=<?php echo $_smarty_tpl->tpl_vars['event']->value['event_location'];?>
&amp;language=en"></iframe>
                                        </div>
                                        <?php }?>
                                        <!-- event location -->
                                    <?php }?>
                                    <li class="divider mtb10"></li>

                                </ul>
                            </div>
                        </div>
                        <!-- panel [about] -->

                        <!-- custom fields [basic] -->
                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <i class="fa fa-info-circle mr5"></i>
                                    <strong><?php echo __("Info");?>
</strong>
                                </div>
                                <div class="card-body">
                                    <ul class="about-list">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['basic'], 'custom_field');
$_smarty_tpl->tpl_vars['custom_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
$_smarty_tpl->tpl_vars['custom_field']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                                                <li>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['label'];?>
</strong><br>
                                                    <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                                                </li>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <!-- custom fields [basic] -->




                    </div>
                    <!-- right panel -->

                    <!-- left panel -->
                    <div class="order-1 col-lg-5 order-lg-1">
                        <div class="card">
                        <div class="card">
                                <?php if ($_smarty_tpl->tpl_vars['event']->value['event_cover_id']) {?>
                        <!-- full-cover -->
                        <img class="js_position-cover-full js_lightbox" data-init-position="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_cover_position'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_cover_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_cover_full'];?>
" data-context="album" src="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_cover'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
">
                        <!-- full-cover -->
                        

                    <?php }?>
                                </div>                            
                                </div>
                    </div>
                    <!-- left panel -->
                    <div class="order-3 col-lg-12 order-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <?php if (!is_empty($_smarty_tpl->tpl_vars['event']->value['event_description'])) {?>
                                    <div class="">
                                        <div class="js_readmore overflow-hidden">
                                            <?php echo $_smarty_tpl->tpl_vars['event']->value['event_description'];?>

                                        </div>
                                    </div>
                                <?php }?>
                                </div>
                                </div>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "photos") {?>
                    <!-- photos -->
                    <div class="col-12">
                        <div class="card panel-photos">
                            <div class="card-header with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-images mr10"></i><?php echo __("Photos");?>

                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/albums"><?php echo __("Albums");?>
</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="card-body">
                                <?php if ($_smarty_tpl->tpl_vars['event']->value['photos']) {?>
                                    <ul class="row no-gutters">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value['photos'], 'photo');
$_smarty_tpl->tpl_vars['photo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->do_else = false;
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos"), 0, true);
?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <!-- see-more -->
                                    <div class="alert alert-info see-more js_see-more" data-get="photos" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
" data-type='event'>
                                        <span><?php echo __("See More");?>
</span>
                                        <div class="loader loader_small x-hidden"></div>
                                    </div>
                                    <!-- see-more -->
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
 <?php echo __("doesn't have photos");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- photos -->
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "albums") {?>
                    <!-- albums -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-images mr10"></i><?php echo __("Photos");?>

                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/albums"><?php echo __("Albums");?>
</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="card-body">
                                <?php if ($_smarty_tpl->tpl_vars['event']->value['albums']) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value['albums'], 'album');
$_smarty_tpl->tpl_vars['album']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->do_else = false;
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <?php if (count($_smarty_tpl->tpl_vars['event']->value['albums']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="albums" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
" data-type='event'>
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
 <?php echo __("doesn't have albums");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- albums -->
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "album") {?>
                    <!-- albums -->
                    <div class="col-12">
                        <div class="card panel-photos">
                            <div class="card-header with-icon with-nav">
                                <!-- back to albums -->
                                <div class="float-right">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/albums" class="btn btn-sm btn-light">
                                        <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Back to Albums");?>

                                    </a>
                                </div>
                                <!-- back to albums -->

                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-images mr10"></i><?php echo __("Photos");?>

                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/albums"><?php echo __("Albums");?>
</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="card-body">
                            <?php $_smarty_tpl->_subTemplateRender('file:_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
                        </div>
                    </div>
                    <!-- albums -->

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "videos") {?>
                    <!-- videos -->
                    <div class="col-12">
                        <div class="card panel-videos">
                            <div class="card-header with-icon">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-video mr10"></i><?php echo __("Videos");?>

                                </div>
                                <!-- panel title -->
                            </div>
                            <div class="card-body">
                                <?php if ($_smarty_tpl->tpl_vars['event']->value['videos']) {?>
                                    <ul class="row no-gutters">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value['videos'], 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_video.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <!-- see-more -->
                                    <div class="alert alert-info see-more js_see-more" data-get="videos" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
" data-type='event'>
                                        <span><?php echo __("See More");?>
</span>
                                        <div class="loader loader_small x-hidden"></div>
                                    </div>
                                    <!-- see-more -->
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
 <?php echo __("doesn't have videos");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- videos -->
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "going" || $_smarty_tpl->tpl_vars['view']->value == "interested" || $_smarty_tpl->tpl_vars['view']->value == "invited" || $_smarty_tpl->tpl_vars['view']->value == "invites") {?>
                    <!-- members -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-users mr10"></i><?php echo __("Members");?>

                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['view']->value == "going") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/going">
                                            <?php echo __("Going");?>

                                            <span class="badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_going'];?>
</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['view']->value == "interested") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/interested">
                                            <?php echo __("Interested");?>

                                            <span class="badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_interested'];?>
</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['view']->value == "invited") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/invited">
                                            <?php echo __("Invited");?>

                                            <span class="badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_invited'];?>
</span>
                                        </a>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['event']->value['i_joined']) {?>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['view']->value == "invites") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/invites">
                                                <?php echo __("Invites");?>

                                            </a>
                                        </li>
                                    <?php }?>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="card-body">
                                <?php if ($_smarty_tpl->tpl_vars['event']->value['total_members'] > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value['members'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0, true);
?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>

                                    <?php if ($_smarty_tpl->tpl_vars['event']->value['total_members'] >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="event_<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php if ($_smarty_tpl->tpl_vars['view']->value == "invites") {?>
                                            <?php echo __("No friends to invite");?>

                                        <?php } else { ?>
                                            <?php echo __("No people available");?>

                                        <?php }?>
                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- members -->
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body with-nav">
                                <ul class="side-nav">
                                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/settings"><i class="fa fa-cog fa-fw mr5"></i><?php echo __("Event Settings");?>
</a>
                                    </li>
                                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
/settings/delete"><i class="fa fa-trash fa-fw mr5"></i><?php echo __("Delete Event");?>
</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <!-- edit -->
                        <div class="card">
                            <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
                                <div class="card-header with-icon">
                                    <i class="fa fa-cog mr10"></i><?php echo __("Event Settings");?>

                                </div>
                                <form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=event&do=edit&id=<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-control-label" for="title"><?php echo __("Name Your Event");?>
</label>
                                            <input type="text" class="form-control" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_title'];?>
">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="location"><?php echo __("Location");?>
</label>
                                            <input type="text" class="form-control" name="location" id="location" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_location'];?>
">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label"><?php echo __("Start Date");?>
</label>
                                            <div class="input-group date js_datetimepicker" id="start_date" data-target-input="nearest">
                                                <input type='text' class="form-control datetimepicker-input" data-target="#start_date" name="start_date" value="<?php echo get_datetime($_smarty_tpl->tpl_vars['event']->value['event_start_date']);?>
" />
                                                <div class="input-group-append" data-target="#start_date" data-toggle="datetimepicker">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label"><?php echo __("End Date");?>
</label>
                                            <div class="input-group date js_datetimepicker" id="end_date" data-target-input="nearest">
                                                <input type='text' class="form-control datetimepicker-input" data-target="#end_date" name="end_date" value="<?php echo get_datetime($_smarty_tpl->tpl_vars['event']->value['event_end_date']);?>
" />
                                                <div class="input-group-append" data-target="#end_date" data-toggle="datetimepicker">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="privacy"><?php echo __("Select Privacy");?>
</label>
                                            <select class="form-control selectpicker" name="privacy">
                                                <option <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "public") {?>selected<?php }?> value="public" data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-2x'></i></div><div class='text'><b><?php echo __("Public Event");?>
</b><br><?php echo __("Anyone can see the event, its users and posts");?>
.
                                                </div></div>"><?php echo __("Public Event");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "closed") {?>selected<?php }?> value="closed" data-content="<div class='option'><div class='icon'><i class='fa fa-unlock-alt fa-2x'></i></div><div class='text'><b><?php echo __("Closed Event");?>
</b><br><?php echo __("Only event users can see posts");?>
.
                                                </div></div>"><?php echo __("Closed Event");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['event']->value['event_privacy'] == "secret") {?>selected<?php }?> value="secret" data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-2x'></i></div><div class='text'><b><?php echo __("Secret Event");?>
</b><br><?php echo __("Only invited users and event users can find the event");?>
.
                                                </div></div>"><?php echo __("Secret Event");?>
</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="category"><?php echo __("Category");?>
</label>
                                            <select class="form-control" name="category">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['event']->value['event_category'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="description"><?php echo __("About");?>
</label>
                                            <textarea class="form-control" name="description"><?php echo $_smarty_tpl->tpl_vars['event']->value['event_description'];?>
</textarea>
                                        </div>
                                        <!-- custom fields -->
                                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['basic'],'_registration'=>false), 0, false);
?>
                                        <?php }?>
                                        <!-- custom fields -->

                                        <div class="divider"></div>

                                        <div class="form-table-row">
                                            <div>
                                                <div class="form-control-label h6"><?php echo __("Members Can Publish Posts?");?>
</div>
                                                <div class="form-text d-none d-sm-block"><?php echo __("Members can publish posts or only event admin");?>
</div>
                                            </div>
                                            <div class="text-right">
                                                <label class="switch" for="event_publish_enabled">
                                                    <input type="checkbox" name="event_publish_enabled" id="event_publish_enabled" <?php if ($_smarty_tpl->tpl_vars['event']->value['event_publish_enabled']) {?>checked<?php }?>>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-table-row">
                                            <div>
                                                <div class="form-control-label h6"><?php echo __("Post Approval");?>
</div>
                                                <div class="form-text d-none d-sm-block">
                                                    <?php echo __("All posts must be approved by the event admin");?>
<br>
                                                    (<?php echo __("Note: Disable it will approve any pending posts");?>
)
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <label class="switch" for="event_publish_approval_enabled">
                                                    <input type="checkbox" name="event_publish_approval_enabled" id="event_publish_approval_enabled" <?php if ($_smarty_tpl->tpl_vars['event']->value['event_publish_approval_enabled']) {?>checked<?php }?>>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <!-- error -->
                                        <div class="alert alert-danger mb0 x-hidden"></div>
                                        <!-- error -->
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                                    </div>
                                </form>
                            <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>
                                <div class="card-header with-icon">
                                    <i class="fa fa-trash mr10"></i><?php echo __("Delete Event");?>

                                </div>
                                <div class="card-body">
                                    <div class="alert alert-warning">
                                        <div class="icon">
                                            <i class="fa fa-exclamation-triangle fa-2x"></i>
                                        </div>
                                        <div class="text pt5">
                                            <?php echo __("Once you delete your event you will no longer can access it again");?>

                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button class="btn btn-danger js_delete-event" data-id="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">
                                            <i class="fa fa-trash mr10"></i><?php echo __("Delete Event");?>

                                        </button>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                        <!-- edit -->
                    </div>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "about") {?>
                    <!-- info -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?php echo __("This event is private and you need to be invited to see its info, members and posts");?>

                            </div>
                        </div>
                    </div>
                    <!-- info -->
                
                <?php }?>
                <!-- view content -->
            </div>
            <!-- profile-content -->
        </div>
        <!-- content panel -->

    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
