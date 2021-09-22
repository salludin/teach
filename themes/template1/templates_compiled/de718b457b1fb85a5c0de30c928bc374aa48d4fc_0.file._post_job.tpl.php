<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-30 03:38:21
  from '/home/u6574599/public_html/content/themes/default/templates/_post_job.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f2240ad7f4c51_37688959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de718b457b1fb85a5c0de30c928bc374aa48d4fc' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/_post_job.tpl',
      1 => 1590227760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_5f2240ad7f4c51_37688959 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-12 col-lg-12 offcanvas-mainbar">
<div class="card">
<div class="card-header with-icon">
                            <i class="fa fa-toolbox fa-fw mr10" style="color: #2b53a4;"></i>Post Job
                        </div>
                        <form class="js_ajax-forms " data-url="posts/job.php">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label">Job Title</label>
                                        <input type="text" class="form-control" name="job_title" value="">
                                    </div>
                                   <div class="form-group col-md-6">
                                        <label class="form-control-label">Specialization</label>
                                        <select name="id_specialization" class="form-control">
                                             
                                            <option value="none">Select Specialization</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['specializations']->value, 'specialization');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['specialization']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['specialization']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['specialization']->value['specialization'];?>
</option>
                                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            
                                        </select>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                   <div class="form-group col-md-6">
                                        <label class="form-control-label">Employment Type</label>
                                        <select name="employment_type" class="form-control">
                                        <option value="full">Full Time</option>
                                        <option value="part">Part Time</option>
                                        <option value="volunteer">Volunteer</option>
                                            
                                        </select>
                                    </div>

                                   <div class="form-group col-md-6">
                                        <label class="form-control-label">Grade</label>
                                        <select name="id_grade" class="form-control">
                                             
                                            <option value="none">Select Grade</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grades']->value, 'grade');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['grade']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['grade']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['grade']->value['grade'];?>
</option>
                                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                   <div class="form-group col-md-6">
                                        <label class="form-control-label">Year of Experience</label>
                                        <select name="years" class="form-control">
                                             
                                           									<option value="0">< 1 years</option>
                   <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value < 6) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < 6; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 Years</option>

                    <?php }
}
?>
                    
                    <option value="6">> 5 years</option>
                                            
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label">Forecast Salary</label>
                                        <input type="text" class="form-control" name="salary" value="">
                                        <input  value="Y" id="chkIsTeamLead" name="negotiable" checked="" type="checkbox"> Negotiable
                                    </div>
                                    
                                </div>



                                <div class="form-group">
                                    <label class="form-control-label">Job Description</label>
                                    <textarea style="height:350px;" class="form-control" name="job_description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Qualification</label>
                                    <textarea style="height:350px;" class="form-control" name="qualification"></textarea>
                                </div>
                                <!-- custom fields -->
                                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['basic'],'_registration'=>false), 0, false);
?>
                                <?php }?>
                                <!-- custom fields -->

                                <!-- success -->
                                <div class="alert alert-success mb0 x-hidden"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 x-hidden"></div>
                                <!-- error -->
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                            </div>
                        </form>
                        </div>
                        </div><?php }
}
