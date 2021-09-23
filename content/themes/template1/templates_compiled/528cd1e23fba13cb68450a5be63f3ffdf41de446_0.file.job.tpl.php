<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-27 06:28:10
  from '/home/u6574599/public_html/content/themes/default/templates/job.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f1e73faa9bfa6_58853828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '528cd1e23fba13cb68450a5be63f3ffdf41de446' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/job.tpl',
      1 => 1593748130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5f1e73faa9bfa6_58853828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
    <!-- page header -->
    <div class="page-header bg-1">

        <div class="crystal c03"></div>
        <div class="circle-2"></div>
        <div class="circle-3"></div>
        <div class="inner">
            <div class="ui-box" style="background: none;">
            <div class="img"> <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/job/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
"> <img alt="<?php echo $_smarty_tpl->tpl_vars['job']->value['company_name'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['picture'];?>
"> </a> </div>
            </div>
            <h2><b><?php echo $_smarty_tpl->tpl_vars['job']->value['company_name'];?>
</b></h2>
        </div>
    </div>
    <!-- page header -->
<?php }?>


<!-- page content -->
<div class="container mt20 <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>offcanvas<?php }?>">
 <div class="row">

	    <!-- side panel -->
	    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
		    <div class="col-12 d-block d-sm-none offcanvas-sidebar">
		        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		    </div>
	    <?php }?>
	    <!-- side panel -->

	    <!-- content panel -->
	    <div class="col-12 <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>offcanvas-mainbar<?php }?>">
    		<div class="card shadow">
    			<div class="card-body page-content text-readable">
    			    <center><h3 class="text-info"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_title'];?>
</h3>
    			    <i class="fa fa-map-marker fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['job']->value['province_name'];?>

    			    </center>
    			    <br>
    			    <h4 class="text-info">About Us</h4>
    			    <?php echo $_smarty_tpl->tpl_vars['job']->value['about_us'];?>

    			    <br><br>
    			    <h3 class="text-info">Job description:</h3>
			        <?php echo $_smarty_tpl->tpl_vars['job']->value['job_description'];?>
 <br>
			        <h3 class="text-info">Job qualification:</h3>
			        <?php echo $_smarty_tpl->tpl_vars['job']->value['qualification'];?>

			        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
			        <?php if ($_smarty_tpl->tpl_vars['applier']->value == 0) {?>
			        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_cv'] == NULL) {?>
			        <div class="card-footer text-right"> <button class="btn btn-primary" data-toggle="modal" data-url="#apply">Apply Job</button>
			        </div>
                    <?php } else { ?>
                    <div class="card-footer text-right">
                         <button type="button" class="btn btn-primary js_apply" data-uid="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
">
                        <i class="fa fa-toolbox mr5"></i><?php if ($_smarty_tpl->tpl_vars['_small']->value) {
echo __("Apply");
} else {
echo __("Apply Job");
}?>
                    </button>
                    </div>
                    <?php }?>
			        <?php } else { ?>
			        <div class="card-footer text-right"> <button type="submit" class="btn btn-success">You have applied for this job</button> </div>
			        <?php }?>
			        <?php } else { ?>
			        <div class="card-footer text-right"> <button class="btn btn-primary" data-toggle="modal" data-url="#modal-login">Apply Job</button>
			        </div>
			        <?php }?>
    			</div>
    		</div>
	    </div>
	    <!-- content panel -->
	    
	</div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
