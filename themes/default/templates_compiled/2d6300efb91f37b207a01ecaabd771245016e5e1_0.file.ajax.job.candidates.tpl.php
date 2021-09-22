<?php
/* Smarty version 3.1.36, created on 2021-07-05 06:33:22
  from '/home/u6574599/public_html/content/themes/default/templates/ajax.job.candidates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60e2a7b288f089_08493286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d6300efb91f37b207a01ecaabd771245016e5e1' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/ajax.job.candidates.tpl',
      1 => 1602729443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_candidate.tpl' => 1,
  ),
),false)) {
function content_60e2a7b288f089_08493286 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
    <h6 class="modal-title">
        <i class="fas fa-briefcase mr5"></i><?php echo __("Job Candidates");?>

    </h6>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <?php if ($_smarty_tpl->tpl_vars['candidates']->value) {?>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['candidates']->value, 'candidate');
$_smarty_tpl->tpl_vars['candidate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['candidate']->value) {
$_smarty_tpl->tpl_vars['candidate']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_candidate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
            
        <?php if ($_smarty_tpl->tpl_vars['candidates_count']->value >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
            <!-- see-more -->
            <div class="alert alert-info see-more js_see-more" data-get="job_candidates" data-id="<?php echo $_smarty_tpl->tpl_vars['post_id']->value;?>
">
                <span><?php echo __("See More");?>
</span>
                <div class="loader loader_small x-hidden"></div>
            </div>
            <!-- see-more -->
        <?php }?>
    <?php } else { ?>
        <!-- no candidates -->
        <div class="text-center text-muted">
            <i class="fa fa-users fa-4x"></i>
            <p class="mtb10"><strong><?php echo __("No candidates to show");?>
</strong></p>
        </div>
        <!-- no candidates -->
    <?php }?>
</div><?php }
}
