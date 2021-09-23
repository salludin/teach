<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-27 04:45:32
  from '/home/u6574599/public_html/content/themes/default/templates/_sign_form_comp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f1e5becbc7c67_36033982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ad34e7f21ff09bd01362617f5728ac8fb6a110d' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/_sign_form_comp.tpl',
      1 => 1589568437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1e5becbc7c67_36033982 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card card-register">

    <!-- signin -->
    <div class="js_panel <?php if ($_smarty_tpl->tpl_vars['do']->value == 'upcompany') {?>x-hidden<?php }?>">
        <div class="card-header">
            <img class="card-img" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/home/square1.jpg">
            <h4 class="card-title"><?php echo __("Login");?>
</h4>
        </div>
        <div class="card-body">
            <?php if ($_smarty_tpl->tpl_vars['highlight']->value) {?><div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['highlight']->value;?>
</div><?php }?>
            <form class="js_ajax-forms" data-url="core/signin.php">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user fa-fw"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder='<?php echo __("Email");?>
 <?php echo __("or");?>
 <?php echo __("Username");?>
' name="username_email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key fa-fw"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder='<?php echo __("Password");?>
' name="password" required>
                    </div>
                </div>
                <div class="custom-control custom-checkbox mb10">
                    <input type="checkbox" class="custom-control-input" name="remember" id="remember">
                    <label class="custom-control-label" for="remember"><?php echo __("Remember me");?>
</label>
                    <a class="float-right" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/reset"><?php echo __("Forgotten password?");?>
</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary bg-gradient-blue border-0 rounded-pill"><?php echo __("Login");?>
</button>
                </div>
                <!-- error -->
                <div class="alert alert-danger mb0 x-hidden"></div>
                <!-- error -->
            </form>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['google_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['instagram_login_enabled']) {?>
                    <div class="hr-heading mt5 mb10">
                        <div class="hr-heading-text">
                            <?php echo __("or");?>
 <?php echo __("login with");?>

                        </div>
                    </div>
                    <div class="text-center">
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/facebook" class="btn btn-sm btn-rounded btn-social-icon btn-facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/google" class="btn btn-sm btn-rounded btn-social-icon btn-google">
                                <i class="fab fa-google"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/twitter" class="btn btn-sm btn-rounded btn-social-icon btn-twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['instagram_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/instagram" class="btn btn-sm btn-rounded btn-social-icon btn-instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/linkedin" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/vkontakte" class="btn btn-sm btn-rounded btn-social-icon btn-vk">
                                <i class="fab fa-vk"></i>
                            </a>
                        <?php }?>
                    </div>
                <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['registration_enabled'] || (!$_smarty_tpl->tpl_vars['system']->value['registration_enabled'] && $_smarty_tpl->tpl_vars['system']->value['invitation_enabled'])) {?>
                <div class="mt20 text-center">
                    <?php echo __("Not registered?");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signup" class="js_toggle-panel text-link"><?php echo __("Create an account");?>
</a>
                </div>
            <?php }?>
        </div>
    </div>
    <!-- signin -->

    <!-- signup -->
    <div class="js_panel <?php if ($_smarty_tpl->tpl_vars['do']->value != 'upcompany') {?>x-hidden<?php }?>">
                <div class="card-header">
        </div>
        <div class="card-body">
            <form class="js_ajax-forms" data-url="core/signup_company.php">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user fa-fw"></i></span>
                        </div>
                        <input name="company_name" type="text" class="form-control" placeholder='<?php echo __("Company Name");?>
' required>
                    </div>
                </div>
                <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-industry fa-fw"></i></span>
                            </div>
                                        <select name="id_industry" class="form-control">
                                             
                                            <option value="none">Select Industry</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['industries']->value, 'industry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['industry']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['industry']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['industry']->value['industry'];?>
</option>
                                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            
                                        </select>
                        </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope fa-fw"></i></span>
                        </div>
                        <input name="email" type="email" class="form-control" placeholder='<?php echo __("Email");?>
' required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key fa-fw"></i></span>
                            </div>
                            <input name="password" type="password" class="form-control" placeholder='<?php echo __("Password");?>
' required>
                        </div>
                    </div>
                </div>
                <div class="js_hidden-section x-hidden">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone fa-fw"></i></span>
                            </div>
                            <input id="phone" name="phone" type="text" class="form-control" placeholder='<?php echo __("Phone number (eg. +628...)");?>
'>
                        </div>
                    </div>
                    <div class="custom-control custom-checkbox mb10">
                        <input type="checkbox" class="custom-control-input" name="privacy_agree" id="privacy_agree">
                        <label class="custom-control-label" for="privacy_agree">
                            <?php echo __("By creating your account, you agree to our");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/terms" target="_blank"><?php echo __("Terms");?>
</a> & <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/privacy" target="_blank"><?php echo __("Privacy Policy");?>
</a>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-success bg-gradient-green border-0 rounded-pill"><?php echo __("Sign Up");?>
</button>
                </div>
                <!-- error -->
                <div class="alert alert-danger mb0 x-hidden"></div>
                <!-- error -->
            </form>

            <div class="mt20 text-center">
                <?php echo __("Have an account?");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin" class="js_toggle-panel text-link"><?php echo __("Login Now");?>
</a>
            </div>
        </div>
    </div>
    <!-- signup -->
</div><?php }
}
