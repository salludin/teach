<div class="card card-register">

    <!-- signin -->
    <div class="js_panel {if $do == 'upcompany'}x-hidden{/if}">
        <div class="card-header">
            <img class="card-img" src="{$system['system_url']}/content/themes/{$system['theme']}/images/home/square1.jpg">
            <h4 class="card-title">{__("Login")}</h4>
        </div>
        <div class="card-body">
            {if $highlight}<div class="alert alert-warning">{$highlight}</div>{/if}
            <form class="js_ajax-forms" data-url="core/signin.php">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user fa-fw"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder='{__("Email")} {__("or")} {__("Username")}' name="username_email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key fa-fw"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder='{__("Password")}' name="password" required>
                    </div>
                </div>
                <div class="custom-control custom-checkbox mb10">
                    <input type="checkbox" class="custom-control-input" name="remember" id="remember">
                    <label class="custom-control-label" for="remember">{__("Remember me")}</label>
                    <a class="float-right" href="{$system['system_url']}/reset">{__("Forgotten password?")}</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary bg-gradient-blue border-0 rounded-pill">{__("Login")}</button>
                </div>
                <!-- error -->
                <div class="alert alert-danger mb0 x-hidden"></div>
                <!-- error -->
            </form>
            {if $system['social_login_enabled']}
                {if $system['facebook_login_enabled'] || $system['google_login_enabled'] || $system['twitter_login_enabled'] || $system['linkedin_login_enabled'] || $system['vkontakte_login_enabled'] || $system['instagram_login_enabled']}
                    <div class="hr-heading mt5 mb10">
                        <div class="hr-heading-text">
                            {__("or")} {__("login with")}
                        </div>
                    </div>
                    <div class="text-center">
                        {if $system['facebook_login_enabled']}
                            <a href="{$system['system_url']}/connect/facebook" class="btn btn-sm btn-rounded btn-social-icon btn-facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        {/if}
                        {if $system['google_login_enabled']}
                            <a href="{$system['system_url']}/connect/google" class="btn btn-sm btn-rounded btn-social-icon btn-google">
                                <i class="fab fa-google"></i>
                            </a>
                        {/if}
                        {if $system['twitter_login_enabled']}
                            <a href="{$system['system_url']}/connect/twitter" class="btn btn-sm btn-rounded btn-social-icon btn-twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        {/if}
                        {if $system['instagram_login_enabled']}
                            <a href="{$system['system_url']}/connect/instagram" class="btn btn-sm btn-rounded btn-social-icon btn-instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        {/if}
                        {if $system['linkedin_login_enabled']}
                            <a href="{$system['system_url']}/connect/linkedin" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        {/if}
                        {if $system['vkontakte_login_enabled']}
                            <a href="{$system['system_url']}/connect/vkontakte" class="btn btn-sm btn-rounded btn-social-icon btn-vk">
                                <i class="fab fa-vk"></i>
                            </a>
                        {/if}
                    </div>
                {/if}
            {/if}
            {if $system['registration_enabled'] || (!$system['registration_enabled'] && $system['invitation_enabled'])}
                <div class="mt20 text-center">
                    {__("Not registered?")} <a href="{$system['system_url']}/signup" class="js_toggle-panel text-link">{__("Create an account")}</a>
                </div>
            {/if}
        </div>
    </div>
    <!-- signin -->

    <!-- signup -->
    <div class="js_panel {if $do != 'upcompany'}x-hidden{/if}">
                <div class="card-header">
        </div>
        <div class="card-body">
            <form class="js_ajax-forms" data-url="core/signup_company.php">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user fa-fw"></i></span>
                        </div>
                        <input name="company_name" type="text" class="form-control" placeholder='{__("Company Name")}' required>
                    </div>
                </div>
                <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-industry fa-fw"></i></span>
                            </div>
                                        <select name="id_industry" class="form-control">
                                             
                                            <option value="none">Select Industry</option>
                                            {foreach $industries as $industry}
                                            <option value="{$industry['id']}">{$industry['industry']}</option>
                                     {/foreach}
                                            
                                        </select>
                        </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope fa-fw"></i></span>
                        </div>
                        <input name="email" type="email" class="form-control" placeholder='{__("Email")}' required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key fa-fw"></i></span>
                            </div>
                            <input name="password" type="password" class="form-control" placeholder='{__("Password")}' required>
                        </div>
                    </div>
                </div>
                <div class="js_hidden-section x-hidden">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone fa-fw"></i></span>
                            </div>
                            <input id="phone" name="phone" type="text" class="form-control" placeholder='{__("Phone number (eg. +628...)")}'>
                        </div>
                    </div>
                    <div class="custom-control custom-checkbox mb10">
                        <input type="checkbox" class="custom-control-input" name="privacy_agree" id="privacy_agree">
                        <label class="custom-control-label" for="privacy_agree">
                            {__("By creating your account, you agree to our")} <a href="{$system['system_url']}/static/terms" target="_blank">{__("Terms")}</a> & <a href="{$system['system_url']}/static/privacy" target="_blank">{__("Privacy Policy")}</a>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-success bg-gradient-green border-0 rounded-pill">{__("Sign Up")}</button>
                </div>
                <!-- error -->
                <div class="alert alert-danger mb0 x-hidden"></div>
                <!-- error -->
            </form>

            <div class="mt20 text-center">
                {__("Have an account?")} <a href="{$system['system_url']}/signin" class="js_toggle-panel text-link">{__("Login Now")}</a>
            </div>
        </div>
    </div>
    <!-- signup -->
</div>