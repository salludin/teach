<?php
/* Smarty version 3.1.36, created on 2021-07-05 11:01:31
  from '/home/u6574599/public_html/content/themes/default/templates/ajax.job.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60e2e68b92f0c1_85229839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c096d2ad31b5f8b3cd8388c565f9c545ff37762' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/ajax.job.publisher.tpl',
      1 => 1604469776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e2e68b92f0c1_85229839 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
    <h6 class="modal-title">
        <i class="fas fa-briefcase mr5"></i><?php echo __("Create New Job");?>

    </h6>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form class="js_ajax-forms" data-url="posts/job.php?do=publish">
    <div class="modal-body">
        <div class="row">
            <!-- job title -->
            <div class="form-group col-md-6">
                <label class="form-control-label"><?php echo __("Title");?>
</label>
                <input name="title" type="text" class="form-control">
            </div>
            <!-- job title -->
            <!-- location -->
            <div class="form-group col-md-6">
                <label class="form-control-label"><?php echo __("Location");?>
</label>
                <input name="location" type="text" class="form-control">
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
">
                </div>
                <div class="input-group col-md-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</div>
                    </div>
                    <input name="salary_maximum" type="text" class="form-control" placeholder="<?php echo __("Maximum");?>
">
                </div>
                <div class="col-md-4">
                    <select name="pay_salary_per" class="form-control">
                        <option value="per_hour"><?php echo __("Per Hour");?>
</option>
                        <option value="per_day"><?php echo __("Per Day");?>
</option>
                        <option value="per_week"><?php echo __("Per Week");?>
</option>
                        <option value="per_month"><?php echo __("Per Month");?>
</option>
                        <option value="per_year"><?php echo __("Per Year");?>
</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- salary range -->
        <!-- salary range -->
        <div class="form-group">
            <label class="form-control-label"><?php echo __("Hide Salary");?>
</label>
            <div class="row">
                <div class="input-group col-md-4">
                    <div class="input-group-prepend">
                        
                    </div>
                    <input name="hide_salary" type="checkbox" value="1">
                    
                </div>
            </div>
        </div>
        <!-- salary range -->
        <div class="row">
            <!-- job type -->
            <div class="form-group col-md-6">
                <label class="form-control-label"><?php echo __("Type");?>
</label>
                <select name="type" class="form-control">
                    <option value="full_time"><?php echo __("Full Time");?>
</option>
                    <option value="part_time"><?php echo __("Part Time");?>
</option>
                    <option value="internship"><?php echo __("Internship");?>
</option>
                    <option value="volunteer"><?php echo __("Volunteer");?>
</option>
                    <option value="contract"><?php echo __("Contract");?>
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
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
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
            <textarea name="description" rows="5" dir="auto" class="form-control"></textarea>
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
                <div class="add-job-question js_add-job-question"><i class="fas fa-plus-circle mr5"></i><?php echo __("Add Question");?>
</div>
                <!-- add question -->
                <!-- question #1 -->
                <div class="job-question x-hidden" data-id="1">
                    <label class="form-control-label mb10"><?php echo __("Question");?>
 #1</label>
                    <select name="question_1_type" class="form-control js_question-type">
                        <option value="free_text"><?php echo __("Free Text Question");?>
</option>
                        <option value="yes_no_question"><?php echo __("Yes/No Question");?>
</option>
                        <option value="multiple_choice"><?php echo __("Multiple Choice Question");?>
</option>
                    </select>
                    <span class="form-text">
                        <?php echo __("Select the type of your question");?>

                    </span>
                    <input name="question_1_title" type="text" class="form-control mt10">
                    <span class="form-text">
                        <?php echo __("Ask your question");?>

                    </span>
                    <div class="x-hidden js_question-choices">
                        <textarea name="question_1_choices" rows="3" dir="auto" class="form-control mt10"></textarea>
                        <span class="form-text">
                            <?php echo __("One option per line");?>

                        </span>
                    </div>
                </div>
                <!-- question #1 -->
                <!-- question #2 -->
                <div class="job-question x-hidden" data-id="2">
                    <label class="form-control-label mb10"><?php echo __("Question");?>
 #2</label>
                    <select name="question_2_type" class="form-control js_question-type">
                        <option value="free_text"><?php echo __("Free Text Question");?>
</option>
                        <option value="yes_no_question"><?php echo __("Yes/No Question");?>
</option>
                        <option value="multiple_choice"><?php echo __("Multiple Choice Question");?>
</option>
                    </select>
                    <span class="form-text">
                        <?php echo __("Select the type of your question");?>

                    </span>
                    <input name="question_2_title" type="text" class="form-control mt10">
                    <span class="form-text">
                        <?php echo __("Ask your question");?>

                    </span>
                    <div class="x-hidden js_question-choices">
                        <textarea name="question_2_choices" rows="3" dir="auto" class="form-control mt10"></textarea>
                        <span class="form-text">
                            <?php echo __("One option per line");?>

                        </span>
                    </div>
                </div>
                <!-- question #2 -->
                <!-- question #3 -->
                <div class="job-question x-hidden" data-id="3">
                    <label class="form-control-label mb10"><?php echo __("Question");?>
  #3</label>
                    <select name="question_3_type" class="form-control js_question-type">
                        <option value="free_text"><?php echo __("Free Text Question");?>
</option>
                        <option value="yes_no_question"><?php echo __("Yes/No Question");?>
</option>
                        <option value="multiple_choice"><?php echo __("Multiple Choice Question");?>
</option>
                    </select>
                    <span class="form-text">
                        <?php echo __("Select the type of your question");?>

                    </span>
                    <input name="question_3_title" type="text" class="form-control mt10">
                    <span class="form-text">
                        <?php echo __("Ask your question");?>

                    </span>
                    <div class="x-hidden js_question-choices">
                        <textarea name="question_3_choices" rows="3" dir="auto" class="form-control mt10"></textarea>
                        <span class="form-text">
                            <?php echo __("One option per line");?>

                        </span>
                    </div>
                </div>
                <!-- question #3 -->
            </div>
        </div>
        <!-- questions -->

        <!-- error -->
        <div class="alert alert-danger mb0 x-hidden"></div>
        <!-- error -->
    </div>
    <div class="modal-footer">
        <input type="hidden" name="page_id" value="<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
">
        <button type="submit" class="btn btn-primary"><?php echo __("Publish");?>
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
