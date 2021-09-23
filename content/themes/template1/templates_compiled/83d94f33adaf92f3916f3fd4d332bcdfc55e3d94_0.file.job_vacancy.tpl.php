<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-27 08:27:47
  from '/home/u6574599/public_html/content/themes/default/templates/job_vacancy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f1e900322ead5_26542409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83d94f33adaf92f3916f3fd4d332bcdfc55e3d94' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/job_vacancy.tpl',
      1 => 1592184936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5f1e900322ead5_26542409 (Smarty_Internal_Template $_smarty_tpl) {
?>    <title>Teachin.id : Lowongan kerja terbaru 2020</title>
<?php $_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- page header -->
    <div class="page-header bg-1">

        <div class="crystal c03"></div>
        <div class="circle-2"></div>
        <div class="circle-3"></div>
        <div class="inner">
            <h2><?php echo __("Lowongan Kerja Terbaru sebagai pendidik di seluruh Indonesia");?>
</h2>
        </div>
    </div>
    <!-- page header -->
<!-- page content -->
<div class="container mt20 offcanvas">
    <div class="row">



        <!-- content panel -->
        <div class="col-md-12 col-lg-12 offcanvas-mainbar">



            <!-- content -->
            <div class="row">
                <!-- left panel -->
                <div class="col-lg-3 order-lg-2">
                    <!-- search panel -->
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-search mr5"></i><?php echo __("Search");?>

                        </div>
                        <div class="card-body">
                            <form action="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/job-vacancies/find" method="post">
                                <div class="form-group">
                                    <label><?php echo __("Keyword");?>
</label>
                                    <input type="text" class="form-control" name="query">
                                </div>
                                <div class="form-group">
                                    <label><?php echo __("Specialization");?>
</label>
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
                                <div class="form-group">
                                    <label><?php echo __("Grade");?>
</label>
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
                                <div class="form-group">
                                    <label><?php echo __("Provinces");?>
</label>
                                       <select name="id_province" class="form-control">
                                             
                                            <option value="none">Select Province</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['provinces']->value, 'province');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['province']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['province']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['province']->value['province_name'];?>
</option>
                                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            
                                        </select>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary" name="submit"><i class="fa fa-search mr5"></i><?php echo __("Search");?>
</button>
                            </form>
                        </div>
                    </div>
                    <!-- search panel -->

  
                </div>
                <!-- left panel -->
            <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
                <!-- right panel -->
                <div class="col-lg-9 order-lg-1">
			<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
				<div class="row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'job');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['job']->value) {
?>
						<div class="col-md-6 col-lg-4">
							<div class="card product" style="font-size: 15px;">
								<div class="ui-box" style="background: none;">
								    <div class="img" style="top: -20px;">
										<img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['picture'];?>
">
									</div>
								</div>
								<div class="product-info">
									<div class="product-meta title">
										<center><a style="font-size: 15px;" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/job/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['job']->value['company_name'];?>
</a></center>
									</div>
									<div class="product-meta">
										<i class="fa fa-tag fa-fw mr5" style="color: #1f9cff;"></i><?php echo __("Position");?>
: <?php echo $_smarty_tpl->tpl_vars['job']->value['job_title'];?>

									</div>
									<div class="product-meta">
										<i class="fa fa-map-marker fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['job']->value['province_name'];?>

									</div>
								</div>
							</div>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php }?>
                </div>
			<?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "find") {?>
                <div class="col-lg-9 order-lg-1">
			<?php if ($_smarty_tpl->tpl_vars['jobs']->value) {?>
				<div class="row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jobs']->value, 'job');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['job']->value) {
?>
						<div class="col-md-6 col-lg-4">
							<div class="card product" style="font-size: 15px;">
								<div class="ui-box" style="background: none;">
								    <div class="img" style="top: -20px;">
										<img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['picture'];?>
">
									</div>
								</div>
								<div class="product-info">
									<div class="product-meta title">
										<center><a style="font-size: 15px;" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/job/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['job']->value['company_name'];?>
</a></center>
									</div>
									<div class="product-meta">
										<i class="fa fa-tag fa-fw mr5" style="color: #1f9cff;"></i><?php echo __("Position");?>
: <?php echo $_smarty_tpl->tpl_vars['job']->value['job_title'];?>

									</div>
									<div class="product-meta">
										<i class="fa fa-map-marker fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['job']->value['province_name'];?>

									</div>
								</div>
							</div>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php } else { ?>
				<div class="text-center text-muted">
                    <i class="fa fa-toolbox fa-4x"></i>
                    <p class="mt10"><strong><?php echo __("No jobs to show");?>
</strong></p>
                </div>
			<?php }?>
                <!-- right panel -->
            </div>
            <!-- content -->
            <?php }?>
        </div>
        <!-- content panel -->

    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
