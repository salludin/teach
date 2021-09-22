<?php
/* Smarty version 3.1.36, created on 2021-08-23 05:11:05
  from '/home/u6574599/public_html/content/themes/default/templates/ajax.job.editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_61232de9915726_59894816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0173803de6290cdfd7f3ac88fd855ced2e8a1327' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/ajax.job.editor.tpl',
      1 => 1602729443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61232de9915726_59894816 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
    <h6 class="modal-title">
        <i class="fas fa-briefcase mr5"></i><?php echo __("Edit Job");?>

    </h6>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form class="js_ajax-forms" data-url="posts/edit.php">
    <div class="modal-body">
        <div class="row">
            <!-- job title -->
            <div class="form-group col-md-6">
                <label class="form-control-label"><?php echo __("Job Title");?>
</label>
                <input name="title" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['title'];?>
">
            </div>
            <!-- job title -->
            <!-- location -->
            <div class="form-group col-md-6">
                <label class="form-control-label"><?php echo __("Location");?>
</label>
                <input name="location" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['location'];?>
">
            </div>
            <!-- location -->
        </div>
        <!-- salary range -->
        <div class="form-group">
            <label class="form-control-label"><?php echo __("Salary Range");?>
</label>
            <div class="row">
                <div class="input-group col-md-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</div>
                    </div>
                    <input name="salary_minimum" type="text" class="form-control" placeholder="<?php echo __("Minimum");?>
" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['salary_minimum'];?>
">
                </div>
                <div class="input-group col-md-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</div>
                    </div>
                    <input name="salary_maximum" type="text" class="form-control" placeholder="<?php echo __("Maximum");?>
" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['salary_maximum'];?>
">
                </div>
                <div class="col-md-4">
                    <select name="pay_salary_per" class="form-control">
                        <option value="per_hour" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['pay_salary_per'] == "per_hour") {?>selected<?php }?>><?php echo __("Per Hour");?>
</option>
                        <option value="per_day" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['pay_salary_per'] == "per_day") {?>selected<?php }?>><?php echo __("Per Day");?>
</option>
                        <option value="per_week" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['pay_salary_per'] == "per_week") {?>selected<?php }?>><?php echo __("Per Week");?>
</option>
                        <option value="per_month" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['pay_salary_per'] == "per_month") {?>selected<?php }?>><?php echo __("Per Month");?>
</option>
                        <option value="per_year" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['pay_salary_per'] == "per_year") {?>selected<?php }?>><?php echo __("Per Year");?>
</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- salary range -->
        <div class="row">
            <!-- job type -->
            <div class="form-group col-md-6">
                <label class="form-control-label"><?php echo __("Job Type");?>
</label>
                <select name="type" class="form-control">
                    <option value="full_time" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['type'] == "full_time") {?>selected<?php }?>><?php echo __("Full Time");?>
</option>
                    <option value="part_time" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['type'] == "part_time") {?>selected<?php }?>><?php echo __("Part Time");?>
</option>
                    <option value="internship" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['type'] == "internship") {?>selected<?php }?>><?php echo __("Internship");?>
</option>
                    <option value="volunteer" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['type'] == "volunteer") {?>selected<?php }?>><?php echo __("Volunteer");?>
</option>
                    <option value="contract" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['type'] == "contract") {?>selected<?php }?>><?php echo __("Contract");?>
</option>
                </select>
            </div>
            <!-- job type -->
            <!-- category -->
            <div class="form-group col-md-6">
                <label class="form-control-label"><?php echo __("Category");?>
</label>
                <select name="category" class="form-control">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jobs_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['category_id'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected<?php }?>><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <!-- category -->
        </div>
        <!-- description -->
        <div class="form-group">
            <label class="form-control-label"><?php echo __("Description");?>
</label>
            <textarea name="description" rows="5" dir="auto" class="form-control"><?php echo $_smarty_tpl->tpl_vars['post']->value['text_plain'];?>
</textarea>
            <span class="form-text">
                <?php echo __("Describe the responsibilities and preferred skills for this job");?>

            </span>
        </div>
        <!-- description -->
        <!-- questions -->
        <div class="form-group">
            <label class="form-control-label"><?php echo __("Questions");?>
</label>
            <div>
                <!-- add question -->
                <?php if (!$_smarty_tpl->tpl_vars['post']->value['job']['question_1_title'] || !$_smarty_tpl->tpl_vars['post']->value['job']['question_2_title'] || !$_smarty_tpl->tpl_vars['post']->value['job']['question_3_title']) {?>
                    <div class="add-job-question js_add-job-question"><i class="fas fa-plus-circle mr5"></i><?php echo __("Add Question");?>
</div>
                <?php }?>
                <!-- add question -->
                <!-- question #1 -->
                <div class="job-question <?php if (!$_smarty_tpl->tpl_vars['post']->value['job']['question_1_title']) {?>x-hidden<?php }?>" data-id="1">
                    <label class="form-control-label mb10"><?php echo __("Question");?>
 #1</label>
                    <select name="question_1_type" class="form-control js_question-type">
                        <option value="free_text" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_1_type'] == "free_text") {?>selected<?php }?>><?php echo __("Free Text Question");?>
</option>
                        <option value="yes_no_question" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_1_type'] == "yes_no_question") {?>selected<?php }?>><?php echo __("Yes/No Question");?>
</option>
                        <option value="multiple_choice" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_1_type'] == "multiple_choice") {?>selected<?php }?>><?php echo __("Multiple Choice Question");?>
</option>
                    </select>
                    <span class="form-text">
                        <?php echo __("Select the type of your question");?>

                    </span>
                    <input name="question_1_title" type="text" class="form-control mt10" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['question_1_title'];?>
">
                    <span class="form-text">
                        <?php echo __("Ask your question");?>

                    </span>
                    <div class="<?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_1_type'] != "multiple_choice") {?>x-hidden<?php }?> js_question-choices">
                        <textarea name="question_1_choices" rows="3" dir="auto" class="form-control mt10"><?php echo $_smarty_tpl->tpl_vars['post']->value['job']['question_1_choices'];?>
</textarea>
                        <span class="form-text">
                            <?php echo __("One option per line");?>

                        </span>
                    </div>
                </div>
                <!-- question #1 -->
                <!-- question #2 -->
                <div class="job-question <?php if (!$_smarty_tpl->tpl_vars['post']->value['job']['question_2_title']) {?>x-hidden<?php }?>" data-id="2">
                    <label class="form-control-label mb10"><?php echo __("Question");?>
 #2</label>
                    <select name="question_2_type" class="form-control js_question-type">
                        <option value="free_text" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_2_type'] == "free_text") {?>selected<?php }?>><?php echo __("Free Text Question");?>
</option>
                        <option value="yes_no_question" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_2_type'] == "yes_no_question") {?>selected<?php }?>><?php echo __("Yes/No Question");?>
</option>
                        <option value="multiple_choice" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_2_type'] == "multiple_choice") {?>selected<?php }?>><?php echo __("Multiple Choice Question");?>
</option>
                    </select>
                    <span class="form-text">
                        <?php echo __("Select the type of your question");?>

                    </span>
                    <input name="question_2_title" type="text" class="form-control mt10" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['question_2_title'];?>
">
                    <span class="form-text">
                        <?php echo __("Ask your question");?>

                    </span>
                    <div class="<?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_2_type'] != "multiple_choice") {?>x-hidden<?php }?> js_question-choices">
                        <textarea name="question_2_choices" rows="3" dir="auto" class="form-control mt10"><?php echo $_smarty_tpl->tpl_vars['post']->value['job']['question_2_choices'];?>
</textarea>
                        <span class="form-text">
                            <?php echo __("One option per line");?>

                        </span>
                    </div>
                </div>
                <!-- question #2 -->
                <!-- question #3 -->
                <div class="job-question <?php if (!$_smarty_tpl->tpl_vars['post']->value['job']['question_3_title']) {?>x-hidden<?php }?>" data-id="3">
                    <label class="form-control-label mb10"><?php echo __("Question");?>
  #3</label>
                    <select name="question_3_type" class="form-control js_question-type">
                        <option value="free_text" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_3_type'] == "free_text") {?>selected<?php }?>><?php echo __("Free Text Question");?>
</option>
                        <option value="yes_no_question" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_3_type'] == "yes_no_question") {?>selected<?php }?>><?php echo __("Yes/No Question");?>
</option>
                        <option value="multiple_choice" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_3_type'] == "multiple_choice") {?>selected<?php }?>><?php echo __("Multiple Choice Question");?>
</option>
                    </select>
                    <span class="form-text">
                        <?php echo __("Select the type of your question");?>

                    </span>
                    <input name="question_3_title" type="text" class="form-control mt10" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['question_3_title'];?>
">
                    <span class="form-text">
                        <?php echo __("Ask your question");?>

                    </span>
                    <div class="<?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_3_type'] != "multiple_choice") {?>x-hidden<?php }?> js_question-choices">
                        <textarea name="question_3_choices" rows="3" dir="auto" class="form-control mt10"><?php echo $_smarty_tpl->tpl_vars['post']->value['job']['question_3_choices'];?>
</textarea>
                        <span class="form-text">
                            <?php echo __("One option per line");?>

                        </span>
                    </div>
                </div>
                <!-- question #3 -->
            </div>
        </div>
        <!-- questions -->
        <!-- cover image -->
        <div class="form-group">
            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['cover_image'];?>
')">
                <div class="x-image-loader">
                    <div class="progress x-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-image-input" name="cover_image" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['cover_image'];?>
">
            </div>
        </div>
        <!-- cover image -->
        <!-- error -->
        <div class="alert alert-danger mb0 x-hidden"></div>
        <!-- error -->
    </div>
    <div class="modal-footer">
        <input type="hidden" name="handle" value="job">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
        <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo __("Cancel");?>
</button>
        <button type="submit" class="btn btn-primary"><?php echo __("Save");?>
</button>
    </div>
</form>

<?php echo '<script'; ?>
>
    $(function() {
        /* handle job questions */
        $('.js_add-job-question').on('click', function() {
            if($('.job-question[data-id="1"]').is(":hidden")) {
                $('.job-question[data-id="1"]').show();
                return;
            }
            if($('.job-question[data-id="2"]').is(":hidden")) {
                $('.job-question[data-id="2"]').show();
                return;
            }
            if($('.job-question[data-id="3"]').is(":hidden")) {
                $('.job-question[data-id="3"]').show();
                $(this).hide();
                return;
            }
        });
        /* handle job questions dependencies */
        $('.js_question-type').on('change', function() {
            if($(this).val() == "multiple_choice") {
                $(this).parents('.job-question').find(".js_question-choices").show();
            } else {
                $(this).parents('.job-question').find(".js_question-choices").hide();
            }
        });
    });
<?php echo '</script'; ?>
><?php }
}
