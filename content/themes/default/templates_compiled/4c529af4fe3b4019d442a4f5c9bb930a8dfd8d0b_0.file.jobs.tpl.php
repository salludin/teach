<?php
/* Smarty version 3.1.36, created on 2021-05-06 04:56:15
  from '/home/u6574599/public_html/content/themes/default/templates/jobs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609376efd4e723_51226747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c529af4fe3b4019d442a4f5c9bb930a8dfd8d0b' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/jobs.tpl',
      1 => 1604469524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_609376efd4e723_51226747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
	<img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_interview_rmcf.svg">
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="container">
        <h2><?php echo __("Jobs");?>
</h2>
        <div class="row mt20">
            <div class="col-sm-9 col-lg-6 mx-sm-auto">
                <form class="js_search-form" data-handle="jobs">
                    <div class="input-group">
                        <input type="text" class="form-control" name="query" placeholder='<?php echo __("Search for jobs");?>
'>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-danger"><?php echo __("Search");?>
</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="container mt20 offcanvas">
	<div class="row">

		<!-- left panel -->
		<div class="col-md-4 col-lg-3 offcanvas-sidebar">
            <!-- categories -->
			<div class="card">
				<div class="card-body with-nav">
					<ul class="side-nav">
						<li <?php if ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "search") {?>class="active"<?php }?>>
							<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/jobs">
                                <?php echo __("All");?>

                            </a>
						</li>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
							<li <?php if ($_smarty_tpl->tpl_vars['view']->value == "category" && $_smarty_tpl->tpl_vars['category_id']->value == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>class="active"<?php }?>>
								<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/jobs/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_url'];?>
">
	                                <?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>

	                            </a>
							</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			</div>
			<!-- categories -->
		</div>
		<!-- left panel -->

		<!-- right panel -->
		<div class="col-md-8 col-lg-9 offcanvas-mainbar">

			<?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php if ($_smarty_tpl->tpl_vars['view']->value == "search") {?>
				<div class="bs-callout bs-callout-info mt0">
                    <!-- results counter -->
                    <span class="badge badge-pill badge-lg badge-light"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span> <?php echo __("results were found for the search for");?>
 "<strong class="text-primary"><?php echo htmlentities($_smarty_tpl->tpl_vars['query']->value,ENT_QUOTES,'utf-8');?>
</strong>"
                    <!-- results counter -->
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['view']->value == '' && $_smarty_tpl->tpl_vars['promoted_jobs']->value) {?>
				<div class="articles-widget-header">
                    <div class="articles-widget-title"><?php echo __("Promoted Jobs");?>
</div>
                </div>
				<div class="row mb20">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promoted_jobs']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
						<div class="col-md-6 col-lg-4">
							<div class="card product boosted">
								<div class="boosted-icon" data-toggle="tooltip" title="<?php echo __("Promoted");?>
">
					                <i class="fa fa-bullhorn"></i>
					            </div>
								<div class="product-image">
									<div class="product-price">
										<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['post']->value['job']['salary_minimum'];?>
 - <?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['post']->value['job']['salary_maximum'];?>
 / <?php echo $_smarty_tpl->tpl_vars['post']->value['job']['pay_salary_per_meta'];?>

									</div>
									<img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['cover_image'];?>
">
									<div class="product-overlay">
										<a class="btn btn-sm btn-outline-secondary rounded-pill" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
											<?php echo __("More");?>

										</a>
										<?php if ($_smarty_tpl->tpl_vars['post']->value['author_id'] != $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
									        <button type="button" class="btn btn-sm btn-info rounded-pill js_job-apply" data-id="<?php echo $_smarty_tpl->tpl_vars['_post']->value['post_id'];?>
">
									        	<i class="fa fa-user-tie mr5"></i><?php echo __("Apply Now");?>

									        </button>
									    <?php }?>
									</div>
								</div>
								<div class="product-info">
									<div class="product-meta title">
										<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['post']->value['job']['title'];?>
</a>
									</div>
									<div class="product-meta">
										<i class="fa fa-briefcase fa-fw mr5" style="color: #2bb431;"></i><?php echo $_smarty_tpl->tpl_vars['post']->value['job']['type_meta'];?>

									</div>
									<div class="product-meta">
										<i class="fa fa-map-marker fa-fw mr5" style="color: #1f9cff;"></i><?php if ($_smarty_tpl->tpl_vars['post']->value['job']['location']) {
echo $_smarty_tpl->tpl_vars['post']->value['job']['location'];
} else {
echo __("N/A");
}?>
									</div>
								</div>
							</div>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
            <?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
				<div class="row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
						<div class="col-md-6 col-lg-4">
							<div class="card product">
								<div class="product-image">
									<div class="product-price">
						            	<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['post']->value['job']['salary_minimum'];?>
 - <?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['post']->value['job']['salary_maximum'];?>
 / <?php echo $_smarty_tpl->tpl_vars['post']->value['job']['pay_salary_per_meta'];?>

									</div>
									<img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['cover_image'];?>
">
									<div class="product-overlay">
										<a class="btn btn-sm btn-outline-secondary rounded-pill" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
											<?php echo __("More");?>

										</a>
										<?php if ($_smarty_tpl->tpl_vars['post']->value['author_id'] != $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
									        <button type="button" class="btn btn-sm btn-info rounded-pill js_job-apply" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
									        	<i class="fa fa-user-tie mr5"></i><?php echo __("Apply Now");?>

									        </button>
									    <?php }?>
									</div>
								</div>
								<div class="product-info">
									<div class="product-meta title">
										<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['post']->value['job']['title'];?>
</a>
									</div>
									<div class="product-meta">
										<i class="fa fa-briefcase fa-fw mr5" style="color: #2bb431;"></i><?php echo $_smarty_tpl->tpl_vars['post']->value['job']['type_meta'];?>

									</div>
									<div class="product-meta">
										<i class="fa fa-map-marker fa-fw mr5" style="color: #1f9cff;"></i><?php if ($_smarty_tpl->tpl_vars['post']->value['job']['location']) {
echo $_smarty_tpl->tpl_vars['post']->value['job']['location'];
} else {
echo __("N/A");
}?>
									</div>
								</div>
							</div>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>

				<?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

			<?php } else { ?>
				<div class="text-center text-muted">
                    <i class="fa fa-briefcase fa-4x"></i>
                    <p class="mt10"><strong><?php echo __("No jobs to show");?>
</strong></p>
                </div>
			<?php }?>
		</div>
		<!-- right panel -->

	</div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}