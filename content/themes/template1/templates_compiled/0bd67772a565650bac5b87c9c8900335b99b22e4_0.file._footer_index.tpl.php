<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-04 07:59:36
  from '/home/u6574599/public_html/content/themes/default/templates/_footer_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f291568e827a6_23790983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bd67772a565650bac5b87c9c8900335b99b22e4' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/_footer_index.tpl',
      1 => 1596527971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f291568e827a6_23790983 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Footer -->
<footer class="page-footer font-small blue pt-4" style=" background-color: #3367d6;color: white;--link-color: white;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">
                                      <!-- logo -->
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
" class="logo">
                                <?php if ($_smarty_tpl->tpl_vars['system']->value['system_logo']) {?>
                                    <img style="width:50%;" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
">
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>

                                <?php }?>
                            </a><br>
                            <!-- logo -->
            <a href="https://play.google.com/store/apps/details?id=com.teachin.teachin"><img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" width=200px></a>
        <!-- Content -->
        <h5 class="text-uppercase"><!-- Footer Content--></h5>
        <p><!-- Here you can use rows and columns to organize your footer content.--></p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->

        <ul class="list-unstyled">
	<?php if ($_smarty_tpl->tpl_vars['static_pages']->value) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['static_pages']->value, 'static_page', true);
$_smarty_tpl->tpl_vars['static_page']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['static_page']->value) {
$_smarty_tpl->tpl_vars['static_page']->iteration++;
$_smarty_tpl->tpl_vars['static_page']->last = $_smarty_tpl->tpl_vars['static_page']->iteration === $_smarty_tpl->tpl_vars['static_page']->total;
$__foreach_static_page_0_saved = $_smarty_tpl->tpl_vars['static_page'];
?>
				 <li>
					<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/<?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_url'];?>
"><?php echo __($_smarty_tpl->tpl_vars['static_page']->value['page_title']);?>

					</a>
				</li><?php if (!$_smarty_tpl->tpl_vars['static_page']->last) {
}?>
				<?php
$_smarty_tpl->tpl_vars['static_page'] = $__foreach_static_page_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->

        <ul class="list-unstyled">
			<?php if ($_smarty_tpl->tpl_vars['system']->value['contact_enabled']) {?>
				 <li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/contacts">
					<?php echo __("Contact Us");?>

				</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['system']->value['developers_apps_enabled'] || $_smarty_tpl->tpl_vars['system']->value['developers_share_enabled']) {?>
				 <li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/developers<?php if (!$_smarty_tpl->tpl_vars['system']->value['developers_apps_enabled']) {?>/share<?php }?>">
					<?php echo __("Developers");?>

				</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['system']->value['directory_enabled']) {?>
				 <li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory">
					<?php echo __("Directory");?>

				</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
                 <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market">
                    <?php echo __("Market");?>

                </a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_enabled']) {?>
                 <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums">
                    <?php echo __("Forums");?>

                </a>
                </li>
            <?php }?>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://teachin.id/"> Teachin.id</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer --><?php }
}
