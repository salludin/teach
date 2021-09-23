<div class="card">
    <div class="card-header with-icon">
        {if $sub_view == "edit"}
           <!-- <div class="float-right">
                <button type="button" class="btn btn-sm btn-primary js_chat-start" data-uid="{$data['user_id']}" data-name="{$data['user_firstname']} {$data['user_lastname']}" data-link="{$data['user_name']}">
                    <i class="fa fa-comments fa-fw fa-lg"></i><span class="ml5 d-none d-lg-inline-block">{__("Message")}</span>
                </button>
                <button type="button" class="btn btn-sm btn-info js_chat-call-start" data-type="video" data-uid="{$data['user_id']}" data-name="{$data['user_firstname']} {$data['user_lastname']}" data-link="{$data['user_name']}">
                    <i class="fa fa-video"></i><span class="ml5 d-none d-lg-inline-block">{__("Video Call")}</span> 
                </button>
                <button type="button" class="btn btn-sm btn-success js_chat-call-start" data-type="audio" data-uid="{$data['user_id']}" data-name="{$data['user_firstname']} {$data['user_lastname']}" data-link="{$data['user_name']}">
                    <i class="fa fa-video"></i><span class="ml5 d-none d-lg-inline-block">{__("Call")}</span>
                </button>
            </div> -->
        {elseif $sub_view == "banned"}
            <div class="float-right">
                <a href="{$system['system_url']}/admincp/banned_ips" class="btn btn-sm btn-danger">
                    <i class="fa fa-user-times"></i><span class="ml5 d-none d-lg-inline-block">{__("Manage Banned IPs")}</span>
                </a>
            </div>
        {/if}
        <i class="fa fa-address-card fa-fw mr10"></i>{__("Candidate")}
        {if $sub_view != "" && $sub_view != "edit"} &rsaquo; {__($sub_view|capitalize)}{/if}
        {if $sub_view == "edit"} &rsaquo; {$data['user_firstname']} {$data['user_lastname']}{/if}
    </div>

    {if $sub_view == ""}
        
        <div class="card-body">



            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>{__("Name")}</th>
                            <th>{__("Job Title")}</th>
                            <th>{__("Apply Date")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {if $rows}
                            {foreach $rows as $row}
                                <tr>
                                    <td>
                                        <a target="_blank" href="{$system['system_url']}/applier_job/edit/{$row['id_user']}">
                                            <img class="tbl-image" src="{$row['user_picture']}">
                                            {$row['user_firstname']} {$row['user_lastname']}
                                        </a>
                                    </td>
                                    <td>
                                    {$row['job_title']}
                                    </td>
                                    <td>{$row['apply_date']|date_format:"%e %B %Y"}</td>
                                </tr>
                            {/foreach}
                        {else}
                            <tr>
                                <td colspan="6" class="text-center">
                                    {__("No data to show")}
                                </td>
                            </tr>
                        {/if}
                    </tbody>
                </table>
            </div>
            {$pager}
        </div>

    {elseif $sub_view == "edit"}
        
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-2 text-center mb20">
                    <img class="img-fluid img-thumbnail rounded-circle" src="{$data['user_picture']}">
                </div>
            </div>

            <!-- tabs nav -->
            <ul class="nav nav-tabs mb20">
                <li class="nav-item">
                    <a class="nav-link active" href="#profile" data-toggle="tab">
                        <i class="fa fa-user fa-fw mr5"></i><strong class="mr5">{__("Profile")}</strong>
                    </a>
                </li>
                {if $system['packages_enabled']}
                    <li class="nav-item">
                        <a class="nav-link" href="#interview" data-toggle="tab">
                            <i class="fa fa-id-card fa-fw mr5"></i><strong class="mr5">{__("Request Scheduling Interview")}</strong>
                        </a>
                    </li>
                {/if}
                {if $system['ads_enabled'] || $system['points_enabled']}
                    <li class="nav-item">
                        <a class="nav-link" href="#extra" data-toggle="tab">
                            <i class="fa fa-cubes fa-fw mr5"></i><strong class="mr5">{__("Extra")}</strong>
                        </a>
                    </li>
                {/if}
            </ul>
            <!-- tabs nav -->

            <!-- tabs content -->
            <div class="tab-content">

                <!-- profile tab -->
                <div class="tab-pane active" id="profile">
                    <form class="js_ajax-forms " data-url="admin/users.php?id={$data['user_id']}&do=edit_profile">

                        <div class="heading-small mb20">
                            {__("Basic")}
                        </div>
                {foreach $cvs as $cv}
                        {if $cv['user_cv'] !== NULL}
                        <div class="card-body">
                            <div class="post-downloader"> <div class="icon"> <i class="fa fa-file-alt fa-2x"></i> </div> <div class="info"> <strong>Update time :</strong>&nbsp;&nbsp;{$cv['cv_datetime']}
            <div class="mt10"> <a class="btn btn-primary btn-sm" href="{$system['system_uploads']}/{$cv['user_cv']}">View CV</a> </div> </div> </div>
                        </div>
                        {/if}
                     {/foreach}
                        <div class="pl-md-4">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">{__("First Name")}</label>
                                    <span class="form-control">{$data['user_firstname']}</span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-control-label">{__("Last Name")}</label>
                                    <span class="form-control">{$data['user_lastname']}</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">{__("Gender")}</label>
                                    <span class="form-control">{$data['user_gender']}
                                    </span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-control-label">{__("Relationship Status")}</label>
                                    <span class="form-control">
                                        {if $data['user_relationship'] == "single"}{__("Single")}{/if}
                                        {if $data['user_relationship'] == "relationship"}{__("In a relationship")}{/if}
                                        {if $data['user_relationship'] == "married"}{__("Married")}{/if}
                                        {if $data['user_relationship'] == "complicated"}{__("It's complicated")}{/if}
                                        {if $data['user_relationship'] == "separated"}{__("Separated")}{/if}
                                        {if $data['user_relationship'] == "divorced"}{__("Divorced")}{/if}
                                        {if $data['user_relationship'] == "widowed"}{__("Widowed")}{/if}
                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">{__("Country")}</label>
                                    <span class="form-control">
                                        {foreach $countriess as $country}
                                        {$country['country_name']}
                                        {/foreach}
                                    </span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-control-label">{__("City / Districts")}</label>
                                    <span class="form-control">
                                        {$city = strtok($data['user_current_city'], ',')}
                                        {$city}
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">{__("Birthdate")}</label>
                                <div class="form-row">
                                    <div class="col">
                                        <span class="form-control">
                                            {$data['user_birthdate_parsed']['month']}
                                        </span>
                                            
                                    </div>
                                    <div class="col">
                                        <span class="form-control">
                                            {$data['user_birthdate_parsed']['day']}
                                        </span>
                                    </div>
                                    <div class="col">
                                        <span class="form-control">
                                            {$data['user_birthdate_parsed']['year']}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">{__("About Me")}</label>
                                 <span style="font-size: 1rem;font-weight: 400;color: #495057;">{$data['user_biography']}
                                 </span>
                            </div>

                            <!-- custom fields -->
                            {if $custom_fields['basic']}
                            {include file='__custom_fields.tpl' _custom_fields=$custom_fields['basic'] _registration=false}
                            {/if}
                            <!-- custom fields -->
                        </div>

                        <div class="divider"></div>

                        <div class="heading-small mb20">
                            {__("Work")}
                        </div>
                        <div class="pl-md-4">
                            <div class="form-group">
                                <label class="form-control-label">{__("Work Title")}</label>
                                <input type="text" class="form-control" name="user_work_title" value="{$data['user_work_title']}">
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">{__("Work Place")}</label>
                                    <input type="text" class="form-control" name="user_work_place" value="{$data['user_work_place']}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-control-label">{__("Work Website")}</label>
                                    <input type="text" class="form-control" name="user_work_url" value="{$data['user_work_url']}">
                                </div>
                            </div>

                            <!-- custom fields -->
                            {if $custom_fields['work']}
                            {include file='__custom_fields.tpl' _custom_fields=$custom_fields['work'] _registration=false}
                            {/if}
                            <!-- custom fields -->
                        </div>



                        <div class="divider"></div>

                        <div class="heading-small mb20">
                            {__("Education")}
                        </div>
                        <div class="pl-md-4">
                            <div class="form-group">
                                <label class="form-control-label">{__("School")}</label>
                                <input type="text" class="form-control" name="user_edu_school" value="{$data['user_edu_school']}">
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">{__("Major")}</label>
                                    <input type="text" class="form-control" name="user_edu_major" value="{$data['user_edu_major']}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-control-label">{__("Class")}</label>
                                    <input type="text" class="form-control" name="user_edu_class" value="{$data['user_edu_class']}">
                                </div>
                            </div>

                            <!-- custom fields -->
                            {if $custom_fields['education']}
                            {include file='__custom_fields.tpl' _custom_fields=$custom_fields['education'] _registration=false}
                            {/if}
                            <!-- custom fields -->
                        </div>

                        <div class="divider"></div>

                        <div class="heading-small mb20">
                            {__("Curriculum Vitae")}
                        </div>
                {foreach $cvs as $cv}
                        {if $cv['user_cv'] !== NULL}
                        <div class="card-body">
                            <div class="post-downloader"> <div class="icon"> <i class="fa fa-file-alt fa-2x"></i> </div> <div class="info"> <strong>Update time :</strong>&nbsp;&nbsp;{$cv['cv_datetime']}
            <div class="mt10"> <a class="btn btn-primary btn-sm" href="{$system['system_uploads']}/{$cv['user_cv']}">View CV</a> </div> </div> </div>
                        </div>
                        {/if}
                     {/foreach}

                        {if $custom_fields['other']}
                            <div class="divider"></div>
                            <div class="heading-small mb20">
                                {__("Other")}
                            </div>
                            <div class="pl-md-4">
                                <!-- custom fields -->
                                {if $custom_fields['other']}
                                {include file='__custom_fields.tpl' _custom_fields=$custom_fields['other'] _registration=false}
                                {/if}
                                <!-- custom fields -->
                            </div>
                        {/if}
                        
                    </form>
                </div>
                <!-- profile tab -->
                
                <!-- interview tab -->
                <div class="tab-pane" id="interview">
                    <form class="js_ajax-forms " data-url="posts/interview.php?id={$data['user_id']}&do=interview">

                        <div class="pl-md-4">
                            <div class="row">
                                <div class="form-group col-md-12">
                                            <label class="form-control-label">{__("Date and Time")}</label>
                                            <div class="input-group date js_datetimepicker" id="start_date" data-target-input="nearest">
                                                <input type='text' class="form-control datetimepicker-input" data-target="#start_date" name="start_date" value="" />
                                                <div class="input-group-append" data-target="#start_date" data-toggle="datetimepicker">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>

                        <div class="divider"></div>
                        <!-- success -->
                        <div class="alert alert-success mb0 x-hidden"></div>
                        <!-- success -->

                        <!-- error -->
                        <div class="alert alert-danger mb0 x-hidden"></div>
                        <!-- error -->                        
                        <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">{__("Request")}</button>
                        </div>
                        
                    </form>
                </div>
                <!-- interview tab -->


            </div>
            <!-- tabs content -->
        </div>

    {/if}
</div>
