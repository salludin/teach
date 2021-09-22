<?php
/* Smarty version 3.1.36, created on 2021-05-05 07:26:34
  from '/home/u6574599/public_html/content/themes/default/templates/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609248aa402319_69750411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d3a2e4e20261e4b446642dda4b5ea54370a6d97' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/404.tpl',
      1 => 1602729443,
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
function content_609248aa402319_69750411 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
    		<div class="notfound-wrapper">
				<div class="notfound">
					<div class="notfound-circle">
						<i class="far fa-frown"></i>
					</div>
					<h1>404</h1>
					<h2><?php echo __("Oops! Page Not Be Found");?>
</h2>
					<p class="mt10"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
					<a class="btn btn-primary rounded-pill" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
"><?php echo __("Back to homepage");?>
</a>
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
