<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-03 07:18:06
  from '/home/u6574599/public_html/content/themes/default/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f27ba2e584e55_74509987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ed00a020509c792f662865e306ffae9c67b1534' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/index.tpl',
      1 => 1596439066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sign_form.tpl' => 1,
    'file:_why_join.tpl' => 1,
    'file:_footer_index.tpl' => 1,
    'file:_footer.links.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_sidebar_institution.tpl' => 1,
    'file:_announcements.tpl' => 1,
    'file:_job_vacancy.tpl' => 1,
    'file:_publisher.tpl' => 1,
    'file:_boosted_post.tpl' => 1,
    'file:_posts.tpl' => 8,
    'file:_post_job.tpl' => 1,
    'file:_candidate.tpl' => 1,
    'file:__feeds_page.tpl' => 2,
    'file:_ads_campaigns.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5f27ba2e584e55_74509987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u6574599/public_html/includes/libs/Smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
    
    <div class="container pt30">
        <div class="index-intro">
            <!--<p>
                <h4><?php echo __("Lowongan kerja guru diseluruh indonesia — cari kandidat guru — komunitas guru ");?>
</h4>
            </p>-->
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-7">
                <img style="width: 100%; max-height: 500px;" class="d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/home/undraw_teaching.svg">
            </div>

            <div class="col-md-6 col-lg-5">
                <?php $_smarty_tpl->_subTemplateRender('file:_sign_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
          <?php $_smarty_tpl->_subTemplateRender('file:_why_join.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:_footer_index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:_footer.links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
} else { ?>

    <div class="container mt20 offcanvas">
        <div class="row">

            <!-- side panel -->
            <div class="col-md-4 col-lg-3 offcanvas-sidebar js_sticky-sidebar">
                <?php if (!$_smarty_tpl->tpl_vars['user']->value->_is_company) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar_institution.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
            </div>
            <!-- side panel -->

            <!-- content panel -->
            <div class="col-md-8 col-lg-9 offcanvas-mainbar">
                <div class="row">
                    <!-- center panel -->
                    <div class="col-lg-8">

                        <!-- announcments -->
                        <?php $_smarty_tpl->_subTemplateRender('file:_announcements.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <!-- announcments -->

                        <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

                            <!-- stories -->
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['stories_enabled'] && !$_smarty_tpl->tpl_vars['user']->value->_is_company) {?>
                                <div class="card">
                                    <div class="card-header bg-transparent border-bottom-0">
                                        <strong class="text-muted"><?php echo __("Stories");?>
</strong>
                                        <?php if ($_smarty_tpl->tpl_vars['has_story']->value) {?>
                                            <div class="float-right">
                                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete Your Story");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_story-deleter">
                                                    <i class="fa fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        <?php } else { ?>
                                            <div class="d-none d-sm-block text-muted pointer float-right">
                                                <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title='<?php echo __("Stories are photos and videos that only last 24 hours");?>
'></i>
                                            </div>
                                        <?php }?>
                                            
                                    </div>
                                    <div class="card-body pt5 stories-wrapper">
                                        <div id="stories" data-json='<?php echo $_smarty_tpl->tpl_vars['stories']->value["json"];?>
'>
                                            <div class="add-story" data-toggle="modal" data-url="posts/story.php?do=create">
                                                <div class="img" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
);">
                                                </div>
                                                <div class="add">
                                                    <i class="fa fa-plus-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            <!-- stories -->

                            <!-- job Vacancy -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_job_vacancy.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <!-- job Vacancy -->

                            <!-- publisher -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"me",'_privacy'=>true), 0, false);
?>
                            <!-- publisher -->
                     <!-- membership -->
                     <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_company) {?>
                    <div class="card">
                    <div class="card-body">
                        <div class="alert alert-primary">
                            <div class="icon">
                                <i class="fa fa-id-card fa-2x"></i>
                            </div>
                            <div class="text">
                                <strong><?php echo __("Membership");?>
</strong><br>
                                <?php echo __("Choose the Plan That's Right for You");?>
, <?php echo __("Check the package from");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Here");?>
</a>
                            </div>
                        </div>

                        <form>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                <div class="heading-small mb20">
                                    <?php echo __("Package Details");?>

                                </div>
                                <div class="pl-md-4">
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Package");?>

                                        </label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">
                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['user']->value->_data['price'];?>
 
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['period'] == "life") {
echo __("Life Time");
} else {
echo __("per");?>
 <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['period_num'] != '1') {
echo $_smarty_tpl->tpl_vars['user']->value->_data['period_num'];
}?> <?php echo __(ucfirst($_smarty_tpl->tpl_vars['user']->value->_data['period']));
}?>)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Subscription Date");?>

                                        </label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value->_data['user_subscription_date'],"%e %B %Y");?>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Expiration Date");?>

                                        </label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['period'] == "life") {?>
                                                    <?php echo __("Life Time");?>

                                                <?php } else { ?>
                                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value->_data['subscription_end'],"%e %B %Y");?>
 (<?php if ($_smarty_tpl->tpl_vars['user']->value->_data['subscription_timeleft'] > 0) {
echo __("Remaining");?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['subscription_timeleft'];?>
 <?php echo __("Days");
} else {
echo __("Expired");
}?>)
                                                <?php }?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Job Posting");?>

                                        </label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">
                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_posts'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['boost_posts'];?>
 (<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/boosted/posts"><?php echo __("Manage");?>
</a>)
                                            </p>
                                            
                                            <div class="progress mb5">
                                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo ($_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_posts']/$_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'])*100;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_posts']/$_smarty_tpl->tpl_vars['user']->value->_data['boost_posts'])*100;?>
%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            <?php echo __("Hire People");?>

                                        </label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">
                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_pages'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'];?>
 (<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/boosted/pages"><?php echo __("Manage");?>
</a>)
                                            </p>
                                            
                                            <div class="progress mb5">
                                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo ($_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_pages']/$_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'])*100;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_pages']/$_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'])*100;?>
%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="heading-small mb20">
                                    <?php echo __("Upgrade Package");?>

                                </div>
                                <div class="pl-md-4">
                                    <div class="text-center">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="btn btn-md btn-success"><i class="fa fa-rocket mr10"></i><?php echo __("Upgrade Package");?>
</a>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="text-center">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="btn btn-md btn-success"><i class="fa fa-rocket mr10"></i><?php echo __("Upgrade to Pro");?>
</a>
                                </div>
                            <?php }?>
                        </form>
                    </div>
                    </div>
                    <?php }?>
                    <!-- membership -->
                            <!-- boosted post -->
                            <?php if ($_smarty_tpl->tpl_vars['boosted_post']->value) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:_boosted_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['boosted_post']->value), 0, false);
?>
                            <?php }?>
                            <!-- boosted post -->

                            <!-- posts -->
                            <?php if (!$_smarty_tpl->tpl_vars['user']->value->_is_company) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"newsfeed"), 0, false);
?>
                            <?php }?>
                            <!-- posts -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "popular") {?>
                            <!-- popular posts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"popular",'_title'=>__("Popular Posts")), 0, true);
?>
                            <!-- popular posts -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "discover") {?>
                            <!-- discover posts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"discover",'_title'=>__("Discover Posts")), 0, true);
?>
                            <!-- discover posts -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "saved") {?>
                            <!-- saved posts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"saved",'_title'=>__("Saved Posts")), 0, true);
?>
                            <!-- saved posts -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "memories") {?>
                            <!-- page header -->
                            <div class="page-header mini rounded-top mb10">
                                <div class="crystal c03"></div>
                                <div class="circle-1"></div>
                                <div class="circle-2"></div>
                                <div class="inner">
                                    <h2><?php echo __("Memories");?>
</h2>
                                    <p><?php echo __("Enjoy looking back on your memories");?>
</p>
                                </div>
                            </div>
                            <!-- page header -->

                            <!-- memories posts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"memories",'_title'=>__("ON THIS DAY"),'_filter'=>"all"), 0, true);
?>
                            <!-- memories posts -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "articles") {?>
                            <!-- articles posts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->tpl_vars['user']->value->_data['user_id'],'_filter'=>"article",'_title'=>__("My Articles")), 0, true);
?>
                            <!-- articles posts -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "post_job") {?>
                            <!-- articles posts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_post_job.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_id'=>$_smarty_tpl->tpl_vars['user']->value->_data['user_id'],'_title'=>__("Post Job")), 0, false);
?>
                            <!-- articles posts -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "applier_job") {?>
                            <!-- articles posts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_candidate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_id'=>$_smarty_tpl->tpl_vars['user']->value->_data['user_id'],'_title'=>__("Post Job")), 0, false);
?>
                            <!-- articles posts -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "products") {?>
                            <!-- products posts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->tpl_vars['user']->value->_data['user_id'],'_filter'=>"product",'_title'=>__("My Products")), 0, true);
?>
                            <!-- products posts -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "boosted_posts") {?>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin || $_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                <!-- boosted posts -->
                                <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"boosted",'_title'=>__("My Boosted Posts")), 0, true);
?>
                                <!-- boosted posts -->
                            <?php } else { ?>
                                <!-- upgrade -->
                                <div class="alert alert-warning">
                                    <div class="icon">
                                        <i class="fa fa-id-card fa-2x"></i>
                                    </div>
                                    <div class="text">
                                        <strong><?php echo __("Membership");?>
</strong><br>
                                        <?php echo __("Choose the Plan That's Right for You");?>
, <?php echo __("Check the package from");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Here");?>
</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="btn btn-primary"><i class="fa fa-rocket mr5"></i><?php echo __("Upgrade to Pro");?>
</a>
                                </div>
                                <!-- upgrade -->
                            <?php }?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "boosted_pages") {?>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin || $_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                <div class="card">
                                    <div class="card-header">
                                        <strong><?php echo __("My Boosted Pages");?>
</strong>
                                    </div>
                                    <div class="card-body">
                                        <?php if ($_smarty_tpl->tpl_vars['boosted_pages']->value) {?>
                                            <ul>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['boosted_pages']->value, '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </ul>

                                            <?php if (count($_smarty_tpl->tpl_vars['boosted_pages']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                            <!-- see-more -->
                                            <div class="alert alert-info see-more js_see-more" data-get="boosted_pages">
                                                <span><?php echo __("See More");?>
</span>
                                                <div class="loader loader_small x-hidden"></div>
                                            </div>
                                            <!-- see-more -->
                                            <?php }?>
                                        <?php } else { ?>
                                            <p class="text-center text-muted mt10">
                                                <?php echo __("No pages to show");?>

                                            </p>
                                        <?php }?>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <!-- upgrade -->
                                <div class="alert alert-warning">
                                    <div class="icon">
                                        <i class="fa fa-id-card fa-2x"></i>
                                    </div>
                                    <div class="text">
                                        <strong><?php echo __("Membership");?>
</strong><br>
                                        <?php echo __("Choose the Plan That's Right for You");?>
, <?php echo __("Check the package from");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Here");?>
</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="btn btn-primary"><i class="fa fa-rocket mr5"></i><?php echo __("Upgrade to Pro");?>
</a>
                                </div>
                                <!-- upgrade -->
                            <?php }?>

                        <?php }?>
                    </div>
                    <!-- center panel -->

                    <!-- right panel -->
                    <div class="col-lg-4 js_sticky-sidebar">
                        <?php if (!$_smarty_tpl->tpl_vars['user']->value->_is_company) {?>
                        <!-- pro users -->
                        <!--<?php if ($_smarty_tpl->tpl_vars['pro_members']->value) {?>
                            <div class="card bg-gradient-indigo border-0">
                                <div class="card-header ptb20 bg-transparent border-bottom-0">
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                        <div class="float-right">
                                            <small><a class="text-white text-underline" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Upgrade");?>
</a></small>
                                        </div>
                                    <?php }?>
                                    <h6 class="pb0"><i class="fa fa-user-shield mr5"></i> <?php echo __("Pro Users");?>
</h6>
                                </div>
                                <div class="card-body pt0 plr5">
                                    <div class="pro-box-wrapper <?php if (count($_smarty_tpl->tpl_vars['pro_members']->value) > 3) {?>js_slick<?php } else { ?>full-opacity<?php }?>">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pro_members']->value, '_member');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_member']->value) {
?>
                                            <a class="user-box text-white" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_member']->value['user_name'];?>
">
                                                <img alt="<?php echo $_smarty_tpl->tpl_vars['_member']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_member']->value['user_lastname'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_member']->value['user_picture'];?>
" />
                                                <div class="name" title="<?php echo $_smarty_tpl->tpl_vars['_member']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_member']->value['user_lastname'];?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['_member']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_member']->value['user_lastname'];?>

                                                </div>
                                            </a>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </div>
                        <?php }?>-->
                        <!-- pro users -->

                        <!-- pro pages -->
                        <?php if ($_smarty_tpl->tpl_vars['promoted_pages']->value) {?>
                            <div class="card bg-gradient-teal border-0">
                                <div class="card-header ptb20 bg-transparent border-bottom-0">
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                        <div class="float-right">
                                            <small><a class="text-white text-underline" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Upgrade");?>
</a></small>
                                        </div>
                                    <?php }?>
                                    <h6 class="pb0"><i class="fa fa-flag-checkered mr5"></i> <?php echo __("Pro Pages");?>
</h6>
                                </div>
                                <div class="card-body pt0 plr5">
                                    <div class="pro-box-wrapper <?php if (count($_smarty_tpl->tpl_vars['promoted_pages']->value) > 3) {?>js_slick<?php } else { ?>full-opacity<?php }?>">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promoted_pages']->value, '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                                            <a class="user-box text-white" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];?>
">
                                                <img alt="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_picture'];?>
" />
                                                <div class="name" title="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>

                                                </div>
                                            </a>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- pro pages -->

                        <!-- trending -->
                        <?php if ($_smarty_tpl->tpl_vars['trending_hashtags']->value) {?>
                            <div class="card bg-gradient-red border-0">
                                <div class="card-header pt20 pb10 bg-transparent border-bottom-0">
                                    <h6 class="mb0"><i class="fa fa-fire mr5"></i> <?php echo __("Trending");?>
</h6>
                                </div>
                                <div class="card-body pt0">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trending_hashtags']->value, 'hashtag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hashtag']->value) {
?>
                                        <a class="trending-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/hashtag/<?php echo $_smarty_tpl->tpl_vars['hashtag']->value['hashtag'];?>
">
                                            <span class="hash">
                                                #<?php echo $_smarty_tpl->tpl_vars['hashtag']->value['hashtag'];?>

                                            </span>
                                            <span class="frequency">
                                                <?php echo $_smarty_tpl->tpl_vars['hashtag']->value['frequency'];?>
 <?php echo __("Posts");?>

                                            </span>
                                        </a>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        <?php }?>
                        <!-- trending -->
                        <?php }?>
                        <?php $_smarty_tpl->_subTemplateRender('file:_ads_campaigns.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <!-- friend suggestions -->
                        <?php if (!$_smarty_tpl->tpl_vars['user']->value->_is_company) {?>
                        <?php if ($_smarty_tpl->tpl_vars['new_people']->value) {?>
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <div class="float-right">
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people"><?php echo __("See All");?>
</a></small>
                                    </div>
                                    <?php echo __("Friend Suggestions");?>

                                </div>
                                <div class="card-body with-list">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_people']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"add",'_small'=>true), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <?php }?>
                         <!-- friend suggestions -->

                        <!-- suggested pages -->
                        <?php if (!$_smarty_tpl->tpl_vars['user']->value->_is_company) {?>
                        <?php if ($_smarty_tpl->tpl_vars['new_pages']->value) {?>
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <div class="float-right">
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages"><?php echo __("See All");?>
</a></small>
                                    </div>
                                    <?php echo __("Suggested Pages");?>

                                </div>
                                <div class="card-body with-list">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_pages']->value, '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <?php }?>
                        <!-- suggested pages -->

                        <!-- suggested groups -->
                        <?php if (!$_smarty_tpl->tpl_vars['user']->value->_is_company) {?>
                        <?php if ($_smarty_tpl->tpl_vars['new_groups']->value) {?>
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <div class="float-right">
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups"><?php echo __("See All");?>
</a></small>
                                    </div>
                                    <?php echo __("Suggested Groups");?>

                                </div>
                                <div class="card-body with-list">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_groups']->value, '_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <?php }?>
                        <!-- suggested groups -->

                        <!-- suggested events -->
                        <?php if ($_smarty_tpl->tpl_vars['new_events']->value) {?>
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <div class="float-right">
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events"><?php echo __("See All");?>
</a></small>
                                    </div>
                                    <?php echo __("Suggested Events");?>

                                </div>
                                <div class="card-body with-list">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_events']->value, '_event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_small'=>true), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <!-- suggested events -->

                        <!-- invitation widget -->
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_widget_enabled']) {?>
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <i class="fa fa-envelope-open-text mr5"></i> <?php echo __("Invite Your Friends");?>

                                </div>
                                <div class="card-body with-form">
                                    <form class="js_ajax-forms" data-url="users/invitation.php">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="email" placeholder='<?php echo __("Email");?>
'>
                                                <div class="input-group-append">
                                                    <button type="submit" name="submit" class="btn btn-primary plr20"><i class="fas fa-paper-plane"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- success -->
                                        <div class="alert alert-success mb0 x-hidden"></div>
                                        <!-- success -->

                                        <!-- error -->
                                        <div class="alert alert-danger mb0 x-hidden"></div>
                                        <!-- error -->
                                    </form>
                                </div>
                            </div>
                        <?php }?>
                        <!-- invitation widget -->

                        <!-- mini footer -->
                        <?php if ($_smarty_tpl->tpl_vars['new_people']->value || $_smarty_tpl->tpl_vars['new_pages']->value || $_smarty_tpl->tpl_vars['new_groups']->value || $_smarty_tpl->tpl_vars['new_events']->value) {?>
                            <div class="mtb20 plr10 d-none d-sm-block">
                                <div class="col-12 mb5">
                                    <?php if ($_smarty_tpl->tpl_vars['static_pages']->value) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['static_pages']->value, 'static_page', true);
$_smarty_tpl->tpl_vars['static_page']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['static_page']->value) {
$_smarty_tpl->tpl_vars['static_page']->iteration++;
$_smarty_tpl->tpl_vars['static_page']->last = $_smarty_tpl->tpl_vars['static_page']->iteration === $_smarty_tpl->tpl_vars['static_page']->total;
$__foreach_static_page_8_saved = $_smarty_tpl->tpl_vars['static_page'];
?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/<?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_url'];?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_title'];?>

                                            </a><?php if (!$_smarty_tpl->tpl_vars['static_page']->last) {?> · <?php }?>
                                        <?php
$_smarty_tpl->tpl_vars['static_page'] = $__foreach_static_page_8_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['contact_enabled']) {?>
                                         · 
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/contacts">
                                            <?php echo __("Contacts Us");?>

                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['developers_apps_enabled'] || $_smarty_tpl->tpl_vars['system']->value['developers_share_enabled']) {?>
                                         · 
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/developers<?php if (!$_smarty_tpl->tpl_vars['system']->value['developers_apps_enabled']) {?>/share<?php }?>">
                                            <?php echo __("Developers");?>

                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['directory_enabled']) {?>
                                         · 
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory">
                                            <?php echo __("Directory");?>

                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
                                         · 
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market">
                                            <?php echo __("Market");?>

                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_enabled']) {?>
                                         · 
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums">
                                            <?php echo __("Forums");?>

                                        </a>
                                    <?php }?>
                                </div>
                                <div class="col-12">
                                    &copy; <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 · <span class="text-link" data-toggle="modal" data-url="#translator"><?php echo $_smarty_tpl->tpl_vars['system']->value['language']['title'];?>
</span>
                                </div>
                            </div>
                        <?php }?>
                        <!-- mini footer -->
                        
                    </div>
                    <!-- right panel -->
                </div>
            </div>
            <!-- content panel -->

        </div>
    </div>

<?php }?>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
