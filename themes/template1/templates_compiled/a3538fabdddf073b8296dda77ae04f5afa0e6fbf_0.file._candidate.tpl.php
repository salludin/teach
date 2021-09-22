<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-30 03:35:53
  from '/home/u6574599/public_html/content/themes/default/templates/_candidate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f22401965aef9_76936667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3538fabdddf073b8296dda77ae04f5afa0e6fbf' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/_candidate.tpl',
      1 => 1590855150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__custom_fields.tpl' => 4,
  ),
),false)) {
function content_5f22401965aef9_76936667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u6574599/public_html/includes/libs/Smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/home/u6574599/public_html/includes/libs/Smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="card">
    <div class="card-header with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
           <!-- <div class="float-right">
                <button type="button" class="btn btn-sm btn-primary js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['user_lastname'];?>
" data-link="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
">
                    <i class="fa fa-comments fa-fw fa-lg"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("Message");?>
</span>
                </button>
                <button type="button" class="btn btn-sm btn-info js_chat-call-start" data-type="video" data-uid="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['user_lastname'];?>
" data-link="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
">
                    <i class="fa fa-video"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("Video Call");?>
</span> 
                </button>
                <button type="button" class="btn btn-sm btn-success js_chat-call-start" data-type="audio" data-uid="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['user_lastname'];?>
" data-link="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
">
                    <i class="fa fa-video"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("Call");?>
</span>
                </button>
            </div> -->
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "banned") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/banned_ips" class="btn btn-sm btn-danger">
                    <i class="fa fa-user-times"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("Manage Banned IPs");?>
</span>
                </a>
            </div>
        <?php }?>
        <i class="fa fa-address-card fa-fw mr10"></i><?php echo __("Candidate");?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value != '' && $_smarty_tpl->tpl_vars['sub_view']->value != "edit") {?> &rsaquo; <?php echo __(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['sub_view']->value));
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->tpl_vars['data']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['user_lastname'];
}?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
        
        <div class="card-body">



            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo __("Name");?>
</th>
                            <th><?php echo __("Job Title");?>
</th>
                            <th><?php echo __("Apply Date");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                <tr>
                                    <td>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/applier_job/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['id_user'];?>
">
                                            <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_picture'];?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['row']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['user_lastname'];?>

                                        </a>
                                    </td>
                                    <td>
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['job_title'];?>

                                    </td>
                                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['apply_date'],"%e %B %Y");?>
</td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="6" class="text-center">
                                    <?php echo __("No data to show");?>

                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
        
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-2 text-center mb20">
                    <img class="img-fluid img-thumbnail rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_picture'];?>
">
                </div>
            </div>

            <!-- tabs nav -->
            <ul class="nav nav-tabs mb20">
                <li class="nav-item">
                    <a class="nav-link active" href="#profile" data-toggle="tab">
                        <i class="fa fa-user fa-fw mr5"></i><strong class="mr5"><?php echo __("Profile");?>
</strong>
                    </a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="#interview" data-toggle="tab">
                            <i class="fa fa-id-card fa-fw mr5"></i><strong class="mr5"><?php echo __("Request Scheduling Interview");?>
</strong>
                        </a>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['ads_enabled'] || $_smarty_tpl->tpl_vars['system']->value['points_enabled']) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="#extra" data-toggle="tab">
                            <i class="fa fa-cubes fa-fw mr5"></i><strong class="mr5"><?php echo __("Extra");?>
</strong>
                        </a>
                    </li>
                <?php }?>
            </ul>
            <!-- tabs nav -->

            <!-- tabs content -->
            <div class="tab-content">

                <!-- profile tab -->
                <div class="tab-pane active" id="profile">
                    <form class="js_ajax-forms " data-url="admin/users.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&do=edit_profile">

                        <div class="heading-small mb20">
                            <?php echo __("Basic");?>

                        </div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cvs']->value, 'cv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cv']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['cv']->value['user_cv'] !== NULL) {?>
                        <div class="card-body">
                            <div class="post-downloader"> <div class="icon"> <i class="fa fa-file-alt fa-2x"></i> </div> <div class="info"> <strong>Update time :</strong>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['cv']->value['cv_datetime'];?>

            <div class="mt10"> <a class="btn btn-primary btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['cv']->value['user_cv'];?>
">View CV</a> </div> </div> </div>
                        </div>
                        <?php }?>
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <div class="pl-md-4">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label"><?php echo __("First Name");?>
</label>
                                    <span class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['user_firstname'];?>
</span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-control-label"><?php echo __("Last Name");?>
</label>
                                    <span class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['user_lastname'];?>
</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label"><?php echo __("Gender");?>
</label>
                                    <span class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['user_gender'];?>

                                    </span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-control-label"><?php echo __("Relationship Status");?>
</label>
                                    <span class="form-control">
                                        <?php if ($_smarty_tpl->tpl_vars['data']->value['user_relationship'] == "single") {
echo __("Single");
}?>
                                        <?php if ($_smarty_tpl->tpl_vars['data']->value['user_relationship'] == "relationship") {
echo __("In a relationship");
}?>
                                        <?php if ($_smarty_tpl->tpl_vars['data']->value['user_relationship'] == "married") {
echo __("Married");
}?>
                                        <?php if ($_smarty_tpl->tpl_vars['data']->value['user_relationship'] == "complicated") {
echo __("It's complicated");
}?>
                                        <?php if ($_smarty_tpl->tpl_vars['data']->value['user_relationship'] == "separated") {
echo __("Separated");
}?>
                                        <?php if ($_smarty_tpl->tpl_vars['data']->value['user_relationship'] == "divorced") {
echo __("Divorced");
}?>
                                        <?php if ($_smarty_tpl->tpl_vars['data']->value['user_relationship'] == "widowed") {
echo __("Widowed");
}?>
                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label"><?php echo __("Country");?>
</label>
                                    <span class="form-control">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countriess']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
                                        <?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-control-label"><?php echo __("City / Districts");?>
</label>
                                    <span class="form-control">
                                        <?php $_smarty_tpl->_assignInScope('city', strtok($_smarty_tpl->tpl_vars['data']->value['user_current_city'],','));?>
                                        <?php echo $_smarty_tpl->tpl_vars['city']->value;?>

                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label"><?php echo __("Birthdate");?>
</label>
                                <div class="form-row">
                                    <div class="col">
                                        <span class="form-control">
                                            <?php echo $_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'];?>

                                        </span>
                                            
                                    </div>
                                    <div class="col">
                                        <span class="form-control">
                                            <?php echo $_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['day'];?>

                                        </span>
                                    </div>
                                    <div class="col">
                                        <span class="form-control">
                                            <?php echo $_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['year'];?>

                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label"><?php echo __("About Me");?>
</label>
                                 <span style="font-size: 1rem;font-weight: 400;color: #495057;"><?php echo $_smarty_tpl->tpl_vars['data']->value['user_biography'];?>

                                 </span>
                            </div>

                            <!-- custom fields -->
                            <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['basic'],'_registration'=>false), 0, false);
?>
                            <?php }?>
                            <!-- custom fields -->
                        </div>

                        <div class="divider"></div>

                        <div class="heading-small mb20">
                            <?php echo __("Work");?>

                        </div>
                        <div class="pl-md-4">
                            <div class="form-group">
                                <label class="form-control-label"><?php echo __("Work Title");?>
</label>
                                <input type="text" class="form-control" name="user_work_title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_work_title'];?>
">
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label"><?php echo __("Work Place");?>
</label>
                                    <input type="text" class="form-control" name="user_work_place" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_work_place'];?>
">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-control-label"><?php echo __("Work Website");?>
</label>
                                    <input type="text" class="form-control" name="user_work_url" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_work_url'];?>
">
                                </div>
                            </div>

                            <!-- custom fields -->
                            <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['work']) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['work'],'_registration'=>false), 0, true);
?>
                            <?php }?>
                            <!-- custom fields -->
                        </div>



                        <div class="divider"></div>

                        <div class="heading-small mb20">
                            <?php echo __("Education");?>

                        </div>
                        <div class="pl-md-4">
                            <div class="form-group">
                                <label class="form-control-label"><?php echo __("School");?>
</label>
                                <input type="text" class="form-control" name="user_edu_school" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_edu_school'];?>
">
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label"><?php echo __("Major");?>
</label>
                                    <input type="text" class="form-control" name="user_edu_major" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_edu_major'];?>
">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-control-label"><?php echo __("Class");?>
</label>
                                    <input type="text" class="form-control" name="user_edu_class" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_edu_class'];?>
">
                                </div>
                            </div>

                            <!-- custom fields -->
                            <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['education']) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['education'],'_registration'=>false), 0, true);
?>
                            <?php }?>
                            <!-- custom fields -->
                        </div>

                        <div class="divider"></div>

                        <div class="heading-small mb20">
                            <?php echo __("Curriculum Vitae");?>

                        </div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cvs']->value, 'cv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cv']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['cv']->value['user_cv'] !== NULL) {?>
                        <div class="card-body">
                            <div class="post-downloader"> <div class="icon"> <i class="fa fa-file-alt fa-2x"></i> </div> <div class="info"> <strong>Update time :</strong>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['cv']->value['cv_datetime'];?>

            <div class="mt10"> <a class="btn btn-primary btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['cv']->value['user_cv'];?>
">View CV</a> </div> </div> </div>
                        </div>
                        <?php }?>
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['other']) {?>
                            <div class="divider"></div>
                            <div class="heading-small mb20">
                                <?php echo __("Other");?>

                            </div>
                            <div class="pl-md-4">
                                <!-- custom fields -->
                                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['other']) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['other'],'_registration'=>false), 0, true);
?>
                                <?php }?>
                                <!-- custom fields -->
                            </div>
                        <?php }?>
                        
                    </form>
                </div>
                <!-- profile tab -->
                
                <!-- interview tab -->
                <div class="tab-pane" id="interview">
                    <form class="js_ajax-forms " data-url="posts/interview.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&do=interview">

                        <div class="pl-md-4">
                            <div class="row">
                                <div class="form-group col-md-12">
                                            <label class="form-control-label"><?php echo __("Date and Time");?>
</label>
                                            <div class="input-group date js_datetimepicker" id="start_date" data-target-input="nearest">
                                                <input type='text' class="form-control datetimepicker-input" data-target="#start_date" name="start_date" value="" />
                                                <div class="input-group-append" data-target="#start_date" data-toggle="datetimepicker">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>

                        <div class="divider"></div>
                        <!-- success -->
                        <div class="alert alert-success mb0 x-hidden"></div>
                        <!-- success -->

                        <!-- error -->
                        <div class="alert alert-danger mb0 x-hidden"></div>
                        <!-- error -->                        
                        <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary"><?php echo __("Request");?>
</button>
                        </div>
                        
                    </form>
                </div>
                <!-- interview tab -->


            </div>
            <!-- tabs content -->
        </div>

    <?php }?>
</div>
<?php }
}
