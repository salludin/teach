<?php
/* Smarty version 3.1.36, created on 2021-07-06 00:27:18
  from '/home/u6574599/public_html/content/themes/default/templates/_job_vacancy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60e3a3667e1824_28527212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cfee6f20868d3d7ac550608b5a7207684e94828' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/_job_vacancy.tpl',
      1 => 1625531234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e3a3667e1824_28527212 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">

                                <div class="card-header bg-transparent">
                                    <div class="float-right">
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/jobs"><?php echo __("See All");?>
</a></small>
                                    </div>
                                        <strong class="text-muted"><?php echo __("Job Vacancy");?>
</strong>
                                </div>
                                    <div class="content-tabs rounded-sm">
                                        <div>
                                    <ul class="row">
                            <?php if ($_smarty_tpl->tpl_vars['jobs']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jobs']->value, 'job');
$_smarty_tpl->tpl_vars['job']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->do_else = false;
?>
                                        <li class="col-md-6 col-lg-4"> <div class="ui-box"> <div class="img"> <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/job/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
"> <img alt="<?php echo $_smarty_tpl->tpl_vars['job']->value['company_name'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['user_picture'];?>
"> </a> </div> <div class="mt10"> <span> <a class="h6" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/job/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['company_name'];?>
</a> </span> <div><?php echo $_smarty_tpl->tpl_vars['job']->value['job_title'];?>
</div> </div> </div> 
                                        </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                                        </ul>
                                        </div>
                                    </div>
                                </div><?php }
}
