<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-01 06:48:24
  from '/home/u6574599/public_html/content/themes/default/templates/admin.tools.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f757bb8592907_44172109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '064be4bbb95353bed890c2bec9c131f3c6a2611d' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/admin.tools.tpl',
      1 => 1589561315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f757bb8592907_44172109 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header with-icon">
        <i class="fa fa-toolbox mr10"></i><?php echo __("Tools");?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "faker") {?> &rsaquo; <?php echo __("Fake Users Generator");
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "auto-connect") {?> &rsaquo; <?php echo __("Auto Connect");
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "garbage-collector") {?> &rsaquo; <?php echo __("Garbage Collector");
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "backups") {?> &rsaquo; <?php echo __("Backup Database & Files");
}?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "faker") {?>

        <form class="js_ajax-forms " data-url="admin/tools.php?do=faker">
            <div class="card-body">
                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Random Pictures");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Profile pictures will be generated randomly and may be dublicated");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="random_Avatar">
                            <input type="checkbox" name="random_Avatar" id="random_Avatar">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Number of Users");?>

                    </label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" name="users_num" value="10">
                        <span class="form-text">
                            <?php echo __("How many users you want to generate (Maximum is 1000 per request)");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Password");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="default_password">
                        <span class="form-text">
                            <?php echo __("This password will be used for all generated accounts (Default is 123456789)");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Names Language");?>

                    </label>
                    <div class="col-md-9">
                        <select class="form-control" name="language">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['system']->value['languages'], 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                                <?php $_smarty_tpl->_assignInScope('parts', explode('_',$_smarty_tpl->tpl_vars['language']->value['code']));?>
                                <option <?php if ($_smarty_tpl->tpl_vars['system']->value['default_language']['language_id'] == $_smarty_tpl->tpl_vars['language']->value['language_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['parts']->value[0];?>
_<?php echo strtoupper($_smarty_tpl->tpl_vars['parts']->value[1]);?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <span class="form-text">
                            <?php echo __("Select the language of generated account names");?>

                        </span>
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 x-hidden"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 x-hidden"></div>
                <!-- error -->
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-danger"><i class="fa fa-bolt mr10"></i><?php echo __("Generate");?>
</button>
            </div>
        </form>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "auto-connect") {?>

        <form class="js_ajax-forms " data-url="admin/tools.php?do=auto-connect">
            <div class="card-body">
                <div class="heading-small mb20">
                    <?php echo __("Auto Friend");?>

                </div>
                <div class="pl-md-4">
                    <div class="form-table-row">
                        <div>
                            <div class="form-control-label h6"><?php echo __("Auto Friend");?>
</div>
                            <div class="form-text d-none d-sm-block"><?php echo __("When a user creates a new account, select which users you want to auto friend (following included)");?>
</div>
                        </div>
                        <div class="text-right">
                            <label class="switch" for="auto_friend">
                                <input type="checkbox" name="auto_friend" id="auto_friend" <?php if ($_smarty_tpl->tpl_vars['system']->value['auto_friend']) {?>checked<?php }?>>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                            <?php echo __("Select Users");?>

                        </label>
                        <div class="col-md-9">
                            <input type="text" class="js_tagify x-hidden" data-handle="users" name="auto_friend_users" value='<?php echo $_smarty_tpl->tpl_vars['system']->value['auto_friend_users'];?>
'>
                            <span class="form-text">
                                <?php echo __("Search for users you want new accounts to auto friend");?>

                            </span>
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="heading-small mb20">
                    <?php echo __("Auto Follow");?>

                </div>
                <div class="pl-md-4">
                    <div class="form-table-row">
                        <div>
                            <div class="form-control-label h6"><?php echo __("Auto Follow");?>
</div>
                            <div class="form-text d-none d-sm-block"><?php echo __("When a user creates a new account, select which users you want to auto follow");?>
</div>
                        </div>
                        <div class="text-right">
                            <label class="switch" for="auto_follow">
                                <input type="checkbox" name="auto_follow" id="auto_follow" <?php if ($_smarty_tpl->tpl_vars['system']->value['auto_follow']) {?>checked<?php }?>>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                            <?php echo __("Select Users");?>

                        </label>
                        <div class="col-md-9">
                            <input type="text" class="js_tagify x-hidden" data-handle="users" name="auto_follow_users" value='<?php echo $_smarty_tpl->tpl_vars['system']->value['auto_follow_users'];?>
'>
                            <span class="form-text">
                                <?php echo __("Search for users you want new accounts to auto follow");?>

                            </span>
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="heading-small mb20">
                    <?php echo __("Auto Like");?>

                </div>
                <div class="pl-md-4">
                    <div class="form-table-row">
                        <div>
                            <div class="form-control-label h6"><?php echo __("Auto Like");?>
</div>
                            <div class="form-text d-none d-sm-block"><?php echo __("When a user creates a new account, select which pages you want to auto like");?>
</div>
                        </div>
                        <div class="text-right">
                            <label class="switch" for="auto_like">
                                <input type="checkbox" name="auto_like" id="auto_like" <?php if ($_smarty_tpl->tpl_vars['system']->value['auto_like']) {?>checked<?php }?>>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                            <?php echo __("Select Pages");?>

                        </label>
                        <div class="col-md-9">
                            <input type="text" class="js_tagify x-hidden" data-handle="pages" name="auto_like_pages" value='<?php echo $_smarty_tpl->tpl_vars['system']->value['auto_like_pages'];?>
'>
                            <span class="form-text">
                                <?php echo __("Search for pages you want new accounts to auto like");?>

                            </span>
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="heading-small mb20">
                    <?php echo __("Auto Join");?>

                </div>
                <div class="pl-md-4">
                    <div class="form-table-row">
                        <div>
                            <div class="form-control-label h6"><?php echo __("Auto Join");?>
</div>
                            <div class="form-text d-none d-sm-block"><?php echo __("When a user creates a new account, select which groups you want to auto join");?>
</div>
                        </div>
                        <div class="text-right">
                            <label class="switch" for="auto_join">
                                <input type="checkbox" name="auto_join" id="auto_join" <?php if ($_smarty_tpl->tpl_vars['system']->value['auto_join']) {?>checked<?php }?>>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                            <?php echo __("Select Groups");?>

                        </label>
                        <div class="col-md-9">
                            <input type="text" class="js_tagify x-hidden" data-handle="groups" name="auto_join_groups" value='<?php echo $_smarty_tpl->tpl_vars['system']->value['auto_join_groups'];?>
'>
                            <span class="form-text">
                                <?php echo __("Search for groups you want new accounts to auto join");?>

                            </span>
                        </div>
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 x-hidden"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 x-hidden"></div>
                <!-- error -->
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
            </div>
        </form>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "garbage-collector") {?>

        <form class="js_ajax-forms " data-url="admin/tools.php?do=garbage-collector">
            <div class="card-body">

                <div class="alert alert-info">
                    <div class="icon">
                        <i class="fa fa-info-circle fa-2x"></i>
                    </div>
                    <div class="text pt5">
                        <?php echo __("Garbage collector will remove all selected data and might take some time");?>

                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("What you want to delete");?>

                    </label>
                    <div class="col-md-9">
                        <select class="form-control" name="delete">
                            <option value="users_not_activated"><?php echo __("Delete all not activated accounts");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_activated'];?>
 <?php echo __("user");?>
)</option>
                            <option value="users_not_logged_week"><?php echo __("Delete users that are not logged in more than 1 week");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_logged_week'];?>
 <?php echo __("user");?>
)</option>
                            <option value="users_not_logged_month"><?php echo __("Delete users that are not logged in more than 1 month");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_logged_month'];?>
 <?php echo __("user");?>
)</option>
                            <option value="users_not_logged_year"><?php echo __("Delete users that are not logged in more than 1 year");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['users_not_logged_year'];?>
 <?php echo __("user");?>
)</option>
                            <option value="posts_longer_week"><?php echo __("Delete posts that are longer than 1 week");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['posts_longer_week'];?>
 <?php echo __("post");?>
)</option>
                            <option value="posts_longer_month"><?php echo __("Delete posts that are longer than 1 month");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['posts_longer_month'];?>
 <?php echo __("post");?>
)</option>
                            <option value="posts_longer_year"><?php echo __("Delete posts that are longer than 1 year");?>
 (<?php echo $_smarty_tpl->tpl_vars['insights']->value['posts_longer_year'];?>
 <?php echo __("post");?>
)</option>
                        </select>
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 x-hidden"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 x-hidden"></div>
                <!-- error -->
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-danger"><i class="fa fa-bolt mr10"></i><?php echo __("Run");?>
</button>
            </div>
        </form>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "backups") {?>

        <form class="js_ajax-forms " data-url="admin/tools.php?do=backups">
            <div class="card-body">

                <div class="alert alert-primary">
                    <div class="icon">
                        <i class="fa fa-server fa-2x"></i>
                    </div>
                    <div class="text">
                        <?php echo __("You last backup");?>
 <span class="badge badge-pill badge-lg badge-warning"><?php if ($_smarty_tpl->tpl_vars['system']->value['last_backup_time']) {
echo $_smarty_tpl->tpl_vars['system']->value['last_backup_time'];
} else {
echo __("N/A");
}?></span><br>
                        <?php echo __("You can find backups in");?>
 <strong>content/backups</strong><br>
                        <?php echo __("Taking backup might take some time and you can download backups via FTP");?>

                    </div>
                </div>

                <div class="h5 mb20 text-center">
                    <?php echo __("Select which backup you would like to generate");?>

                </div>
                <!-- backup options -->
                <div class="text-center">
                    <!-- Database -->
                    <input class="x-hidden input-label" type="radio" name="backup_option" value="datebase_backup" id="datebase_backup"/>
                    <label class="button-label" for="datebase_backup">
                        <div class="icon">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/database.png">
                        </div>
                        <div class="title"><?php echo __("Database");?>
</div>
                    </label>
                    <!-- Database -->
                    <!-- Files -->
                    <input class="x-hidden input-label" type="radio" name="backup_option" value="files_backup" id="files_backup"/>
                    <label class="button-label" for="files_backup">
                        <div class="icon">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/folder.png">
                        </div>
                        <div class="title"><?php echo __("Files");?>
</div>
                    </label>
                    <!-- Files -->
                    <!-- Full -->
                    <input class="x-hidden input-label" type="radio" name="backup_option" value="full_backup" id="full_backup"/>
                    <label class="button-label" for="full_backup">
                        <div class="icon">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/server.png">
                        </div>
                        <div class="title"><?php echo __("Full Backup");?>
</div>
                    </label>
                    <!-- Full -->
                </div>
                <!-- backup options -->

                <!-- success -->
                <div class="alert alert-success mt10 mb0 x-hidden"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mt10 mb0 x-hidden"></div>
                <!-- error -->
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-danger"><i class="fa fa-bolt mr10"></i><?php echo __("Run");?>
</button>
            </div>
        </form>

    <?php }?>
</div><?php }
}
