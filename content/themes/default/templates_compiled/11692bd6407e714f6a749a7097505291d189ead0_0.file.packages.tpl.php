<?php
/* Smarty version 3.1.36, created on 2021-05-07 07:13:05
  from '/home/u6574599/public_html/content/themes/default/templates/packages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6094e881f214f2_82603125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11692bd6407e714f6a749a7097505291d189ead0' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/packages.tpl',
      1 => 1602729443,
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
function content_6094e881f214f2_82603125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
    <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_upgrade_06a0.svg">
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="inner">
        <h2><?php echo __("Pro Packages");?>
</h2>
        <p class="text-xlg"><?php echo __("Choose the Plan That's Right for You");?>
</p>
    </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="container" style="margin-top: -25px;">
    <div class="card">
        <div class="card-body">

            <div class="row justify-content-md-center">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packages']->value, 'package');
$_smarty_tpl->tpl_vars['package']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->do_else = false;
?>
                    <!-- package -->
                    <div class="col-md-6 col-lg-4 col-xl-<?php if ($_smarty_tpl->tpl_vars['packages_count']->value >= 4) {?>3<?php } elseif ($_smarty_tpl->tpl_vars['packages_count']->value == 3) {?>4<?php } elseif ($_smarty_tpl->tpl_vars['packages_count']->value <= 2) {?>6<?php }?> text-center">
                        <div class="card card-pricing shadow-sm">
                            <div class="card-header bg-transparent">
                                <h3><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
</h3>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['package']->value['icon'];?>
">
                            </div>
                            <div class="card-body text-center">
                                <h2 class="price" style="color: <?php echo $_smarty_tpl->tpl_vars['package']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
</h2>
                                <div>
                                    <?php if ($_smarty_tpl->tpl_vars['package']->value['period'] == "life") {?>
                                        <?php echo __("Life Time");?>

                                    <?php } else { ?>
                                        <?php echo __("per");?>
 
                                        <?php if ($_smarty_tpl->tpl_vars['package']->value['period_num'] != '1') {
echo $_smarty_tpl->tpl_vars['package']->value['period_num'];
}?> <?php echo __(ucfirst($_smarty_tpl->tpl_vars['package']->value['period']));?>

                                    <?php }?>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="fa fa-check green mr10"></i><?php echo __("Featured member");?>
</li>
                                <li class="list-group-item">
                                    <?php if ($_smarty_tpl->tpl_vars['package']->value['verification_badge_enabled']) {?>
                                        <i class="fa fa-check green mr10"></i>
                                    <?php } else { ?>
                                        <i class="fa fa-times red mr10"></i>
                                    <?php }?>
                                    <?php echo __("Verified badge");?>

                                </li>
                                <li class="list-group-item">
                                    <?php if (!$_smarty_tpl->tpl_vars['package']->value['boost_posts_enabled']) {?>
                                        <i class="fa fa-times red mr10"></i><?php echo __("Posts promotion");?>

                                    <?php } else { ?>
                                        <i class="fa fa-check green mr10"></i><?php echo __("Boost up to");?>
 <?php echo $_smarty_tpl->tpl_vars['package']->value['boost_posts'];?>
 <?php echo __("Posts");?>

                                    <?php }?>
                                </li>
                                <li class="list-group-item">
                                    <?php if (!$_smarty_tpl->tpl_vars['package']->value['boost_pages_enabled']) {?>
                                        <i class="fa fa-times red mr10"></i><?php echo __("Pages promotion");?>

                                    <?php } else { ?>
                                        <i class="fa fa-check green mr10"></i><?php echo __("Boost up to");?>
 <?php echo $_smarty_tpl->tpl_vars['package']->value['boost_pages'];?>
 <?php echo __("Pages");?>

                                    <?php }?>
                                </li>
                            </ul>
                            <div class="card-footer bg-transparent">
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                                    <button class="btn btn-block rounded-pill btn-danger" data-toggle="modal" data-url="#payment" data-options='{"handle": "packages", "id": <?php echo $_smarty_tpl->tpl_vars['package']->value["package_id"];?>
, "price": "<?php echo $_smarty_tpl->tpl_vars['package']->value["price"];?>
", "name": "<?php echo $_smarty_tpl->tpl_vars['package']->value["name"];?>
", "img": "<?php echo $_smarty_tpl->tpl_vars['package']->value["icon"];?>
"}'>
                                        <?php if (!$_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                            <?php echo __("Buy Now");?>

                                        <?php } else { ?>
                                            <?php echo __("Upgrade Now");?>

                                        <?php }?>
                                    </button>
                                <?php } else { ?>
                                    <a class="btn btn-block rounded-pill btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin">
                                        <?php echo __("Buy Now");?>

                                    </a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- /package -->
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

        </div>            
    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
