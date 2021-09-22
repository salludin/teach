{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
<div class="container {if $user->_logged_in}offcanvas{/if}">
    <div class="row">

        <!-- side panel -->
        {if $user->_logged_in}
            <div class="col-12 col-md-4 col-lg-3 d-block d-sm-none d-md-block offcanvas-sidebar mt20 js_sticky-sidebar">
                {include file='_sidebar.tpl'}
            </div>
        {/if}
        <!-- side panel -->

        <!-- content panel -->
        <div class="col-12 {if $user->_logged_in}col-md-8 col-lg-9 offcanvas-mainbar{/if}">
            <!-- profile-header -->
            
            <!-- profile-header -->

            <!-- profile-content -->
            <div class="row">
                <!-- view content -->
                {if $view == ""}
                    <div class="col-lg-12">
                        <!-- panel [about] -->
                        <div class="card">
                                </div>
                                </div>
                    <!-- right panel -->
                    <div class="order-2 col-lg-7 order-lg-2">
                        <!-- panel [about] -->
                        <div class="card">
                            <div class="card-body">
                     
                                <ul class="about-list">
                                    <li>
                                        <div class="about-list-item">
                                            {if $event['event_privacy'] == "public"}
                                                <i class="fa fa-globe fa-fw fa-lg"></i>
                                                {__("Public Event")}
                                            {elseif $event['event_privacy'] == "closed"}
                                                <i class="fa fa-unlock-alt fa-fw fa-lg"></i>
                                                {__("Closed Event")}
                                            {elseif $event['event_privacy'] == "secret"}
                                                <i class="fa fa-lock fa-fw fa-lg"></i>
                                                {__("Secret Event")}
                                            {/if}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-clock fa-fw fa-lg"></i>
                                            {$event['event_start_date']|date_format:"%B %e"} - {$event['event_end_date']|date_format:"%B %e"}<br>
                                            <small class="text-muted">{$event['event_start_date']|date_format:"%b %e %I:%M %p"} {__("to")} {$event['event_end_date']|date_format:"%b %e %I:%M %p"}</small>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-user fa-fw fa-lg"></i>
                                            {__("Hosted By")} <a target="_blank" href="{$system['system_url']}/{$event['user_name']}">{$event['user_firstname']} {$event['user_lastname']}</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-tag fa-fw fa-lg"></i>
                                            {__($event['event_category_name'])}
                                        </div>
                                    </li>
                                    {if $event['event_location']}
                                        <!-- event location -->
                                        <li>
                                            <div class="about-list-item">
                                                <i class="fa fa-map-marker fa-fw fa-lg"></i>
                                                {$event['event_location']}
                                            </div>
                                        </li>
                                        {if $system['geolocation_enabled']}
                                        <div style="margin-left: -20px; margin-right: -20px;">
                                            <iframe width="100%" frameborder="0" style="border:0;" src="https://www.google.com/maps/embed/v1/place?key={$system['geolocation_key']}&amp;q={$event['event_location']}&amp;language=en"></iframe>
                                        </div>
                                        {/if}
                                        <!-- event location -->
                                    {/if}
                                    <li class="divider mtb10"></li>

                                </ul>
                            </div>
                        </div>
                        <!-- panel [about] -->

                        <!-- custom fields [basic] -->
                        {if $custom_fields['basic']}
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <i class="fa fa-info-circle mr5"></i>
                                    <strong>{__("Info")}</strong>
                                </div>
                                <div class="card-body">
                                    <ul class="about-list">
                                        {foreach $custom_fields['basic'] as $custom_field}
                                            {if $custom_field['value']}
                                                <li>
                                                    <strong>{$custom_field['label']}</strong><br>
                                                    {$custom_field['value']}
                                                </li>
                                            {/if}
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        {/if}
                        <!-- custom fields [basic] -->




                    </div>
                    <!-- right panel -->

                    <!-- left panel -->
                    <div class="order-1 col-lg-5 order-lg-1">
                        <div class="card">
                        <div class="card">
                                {if $event['event_cover_id']}
                        <!-- full-cover -->
                        <img class="js_position-cover-full js_lightbox" data-init-position="{$event['event_cover_position']}" data-id="{$event['event_cover_id']}" data-image="{$event['event_cover_full']}" data-context="album" src="{$event['event_cover']}" alt="{$event['event_title']}">
                        <!-- full-cover -->
                        

                    {/if}
                                </div>                            
                                </div>
                    </div>
                    <!-- left panel -->
                    <div class="order-3 col-lg-12 order-lg-3">
                        <div class="card">
                            <div class="card-body">
                                {if !is_empty($event['event_description'])}
                                    <div class="">
                                        <div class="js_readmore overflow-hidden">
                                            {$event['event_description']}
                                        </div>
                                    </div>
                                {/if}
                                </div>
                                </div>
                    </div>
                {elseif $view == "photos"}
                    <!-- photos -->
                    <div class="col-12">
                        <div class="card panel-photos">
                            <div class="card-header with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-images mr10"></i>{__("Photos")}
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{$system['system_url']}/events/{$event['event_id']}/photos">{__("Photos")}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{$system['system_url']}/events/{$event['event_id']}/albums">{__("Albums")}</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="card-body">
                                {if $event['photos']}
                                    <ul class="row no-gutters">
                                        {foreach $event['photos'] as $photo}
                                            {include file='__feeds_photo.tpl' _context="photos"}
                                        {/foreach}
                                    </ul>
                                    <!-- see-more -->
                                    <div class="alert alert-info see-more js_see-more" data-get="photos" data-id="{$event['event_id']}" data-type='event'>
                                        <span>{__("See More")}</span>
                                        <div class="loader loader_small x-hidden"></div>
                                    </div>
                                    <!-- see-more -->
                                {else}
                                    <p class="text-center text-muted mt10">
                                        {$event['event_title']} {__("doesn't have photos")}
                                    </p>
                                {/if}
                            </div>
                        </div>
                    </div>
                    <!-- photos -->
                
                {elseif $view == "albums"}
                    <!-- albums -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-images mr10"></i>{__("Photos")}
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{$system['system_url']}/events/{$event['event_id']}/photos">{__("Photos")}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{$system['system_url']}/events/{$event['event_id']}/albums">{__("Albums")}</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="card-body">
                                {if $event['albums']}
                                    <ul class="row">
                                        {foreach $event['albums'] as $album}
                                        {include file='__feeds_album.tpl'}
                                        {/foreach}
                                    </ul>
                                    {if count($event['albums']) >= $system['max_results_even']}
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="albums" data-id="{$event['event_id']}" data-type='event'>
                                            <span>{__("See More")}</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    {/if}
                                {else}
                                    <p class="text-center text-muted mt10">
                                        {$event['event_title']} {__("doesn't have albums")}
                                    </p>
                                {/if}
                            </div>
                        </div>
                    </div>
                    <!-- albums -->
                
                {elseif $view == "album"}
                    <!-- albums -->
                    <div class="col-12">
                        <div class="card panel-photos">
                            <div class="card-header with-icon with-nav">
                                <!-- back to albums -->
                                <div class="float-right">
                                    <a href="{$system['system_url']}/events/{$event['event_id']}/albums" class="btn btn-sm btn-light">
                                        <i class="fa fa-arrow-circle-left mr5"></i>{__("Back to Albums")}
                                    </a>
                                </div>
                                <!-- back to albums -->

                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-images mr10"></i>{__("Photos")}
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{$system['system_url']}/events/{$event['event_id']}/photos">{__("Photos")}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{$system['system_url']}/events/{$event['event_id']}/albums">{__("Albums")}</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="card-body">
                            {include file='_album.tpl'}
                            </div>
                        </div>
                    </div>
                    <!-- albums -->

                {elseif $view == "videos"}
                    <!-- videos -->
                    <div class="col-12">
                        <div class="card panel-videos">
                            <div class="card-header with-icon">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-video mr10"></i>{__("Videos")}
                                </div>
                                <!-- panel title -->
                            </div>
                            <div class="card-body">
                                {if $event['videos']}
                                    <ul class="row no-gutters">
                                        {foreach $event['videos'] as $video}
                                            {include file='__feeds_video.tpl'}
                                        {/foreach}
                                    </ul>
                                    <!-- see-more -->
                                    <div class="alert alert-info see-more js_see-more" data-get="videos" data-id="{$event['event_id']}" data-type='event'>
                                        <span>{__("See More")}</span>
                                        <div class="loader loader_small x-hidden"></div>
                                    </div>
                                    <!-- see-more -->
                                {else}
                                    <p class="text-center text-muted mt10">
                                        {$event['event_title']} {__("doesn't have videos")}
                                    </p>
                                {/if}
                            </div>
                        </div>
                    </div>
                    <!-- videos -->
                
                {elseif $view == "going" || $view == "interested" || $view == "invited" || $view == "invites"}
                    <!-- members -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-users mr10"></i>{__("Members")}
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link {if $view == "going"}active{/if}" href="{$system['system_url']}/events/{$event['event_id']}/going">
                                            {__("Going")}
                                            <span class="badge badge-pill badge-info">{$event['event_going']}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {if $view == "interested"}active{/if}" href="{$system['system_url']}/events/{$event['event_id']}/interested">
                                            {__("Interested")}
                                            <span class="badge badge-pill badge-info">{$event['event_interested']}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {if $view == "invited"}active{/if}" href="{$system['system_url']}/events/{$event['event_id']}/invited">
                                            {__("Invited")}
                                            <span class="badge badge-pill badge-info">{$event['event_invited']}</span>
                                        </a>
                                    </li>
                                    {if $event['i_joined']}
                                        <li class="nav-item">
                                            <a class="nav-link {if $view == "invites"}active{/if}" href="{$system['system_url']}/events/{$event['event_id']}/invites">
                                                {__("Invites")}
                                            </a>
                                        </li>
                                    {/if}
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="card-body">
                                {if $event['total_members'] > 0}
                                    <ul class="row">
                                        {foreach $event['members'] as $_user}
                                        {include file='__feeds_user.tpl' _tpl="box" _connection=$_user["connection"]}
                                        {/foreach}
                                    </ul>

                                    {if $event['total_members'] >= $system['max_results_even']}
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="event_{$view}" data-id="{$event['event_id']}">
                                            <span>{__("See More")}</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    {/if}
                                {else}
                                    <p class="text-center text-muted mt10">
                                        {if $view == "invites"}
                                            {__("No friends to invite")}
                                        {else}
                                            {__("No people available")}
                                        {/if}
                                    </p>
                                {/if}
                            </div>
                        </div>
                    </div>
                    <!-- members -->
                
                {elseif $view == "settings"}
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body with-nav">
                                <ul class="side-nav">
                                    <li {if $sub_view == ""}class="active"{/if}>
                                        <a href="{$system['system_url']}/events/{$event['event_id']}/settings"><i class="fa fa-cog fa-fw mr5"></i>{__("Event Settings")}</a>
                                    </li>
                                    <li {if $sub_view == "delete"}class="active"{/if}>
                                        <a href="{$system['system_url']}/events/{$event['event_id']}/settings/delete"><i class="fa fa-trash fa-fw mr5"></i>{__("Delete Event")}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <!-- edit -->
                        <div class="card">
                            {if $sub_view == ""}
                                <div class="card-header with-icon">
                                    <i class="fa fa-cog mr10"></i>{__("Event Settings")}
                                </div>
                                <form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=event&do=edit&id={$event['event_id']}">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-control-label" for="title">{__("Name Your Event")}</label>
                                            <input type="text" class="form-control" name="title" id="title" value="{$event['event_title']}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="location">{__("Location")}</label>
                                            <input type="text" class="form-control" name="location" id="location" value="{$event['event_location']}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">{__("Start Date")}</label>
                                            <div class="input-group date js_datetimepicker" id="start_date" data-target-input="nearest">
                                                <input type='text' class="form-control datetimepicker-input" data-target="#start_date" name="start_date" value="{get_datetime($event['event_start_date'])}" />
                                                <div class="input-group-append" data-target="#start_date" data-toggle="datetimepicker">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">{__("End Date")}</label>
                                            <div class="input-group date js_datetimepicker" id="end_date" data-target-input="nearest">
                                                <input type='text' class="form-control datetimepicker-input" data-target="#end_date" name="end_date" value="{get_datetime($event['event_end_date'])}" />
                                                <div class="input-group-append" data-target="#end_date" data-toggle="datetimepicker">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="privacy">{__("Select Privacy")}</label>
                                            <select class="form-control selectpicker" name="privacy">
                                                <option {if $event['event_privacy'] == "public"}selected{/if} value="public" data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-2x'></i></div><div class='text'><b>{__("Public Event")}</b><br>{__("Anyone can see the event, its users and posts")}.
                                                </div></div>">{__("Public Event")}</option>
                                                <option {if $event['event_privacy'] == "closed"}selected{/if} value="closed" data-content="<div class='option'><div class='icon'><i class='fa fa-unlock-alt fa-2x'></i></div><div class='text'><b>{__("Closed Event")}</b><br>{__("Only event users can see posts")}.
                                                </div></div>">{__("Closed Event")}</option>
                                                <option {if $event['event_privacy'] == "secret"}selected{/if} value="secret" data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-2x'></i></div><div class='text'><b>{__("Secret Event")}</b><br>{__("Only invited users and event users can find the event")}.
                                                </div></div>">{__("Secret Event")}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="category">{__("Category")}</label>
                                            <select class="form-control" name="category">
                                                {foreach $categories as $category}
                                                    <option {if $event['event_category'] == $category['category_id']}selected{/if} value="{$category['category_id']}">{__($category['category_name'])}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="description">{__("About")}</label>
                                            <textarea class="form-control" name="description">{$event['event_description']}</textarea>
                                        </div>
                                        <!-- custom fields -->
                                        {if $custom_fields['basic']}
                                        {include file='__custom_fields.tpl' _custom_fields=$custom_fields['basic'] _registration=false}
                                        {/if}
                                        <!-- custom fields -->

                                        <div class="divider"></div>

                                        <div class="form-table-row">
                                            <div>
                                                <div class="form-control-label h6">{__("Members Can Publish Posts?")}</div>
                                                <div class="form-text d-none d-sm-block">{__("Members can publish posts or only event admin")}</div>
                                            </div>
                                            <div class="text-right">
                                                <label class="switch" for="event_publish_enabled">
                                                    <input type="checkbox" name="event_publish_enabled" id="event_publish_enabled" {if $event['event_publish_enabled']}checked{/if}>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-table-row">
                                            <div>
                                                <div class="form-control-label h6">{__("Post Approval")}</div>
                                                <div class="form-text d-none d-sm-block">
                                                    {__("All posts must be approved by the event admin")}<br>
                                                    ({__("Note: Disable it will approve any pending posts")})
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <label class="switch" for="event_publish_approval_enabled">
                                                    <input type="checkbox" name="event_publish_approval_enabled" id="event_publish_approval_enabled" {if $event['event_publish_approval_enabled']}checked{/if}>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <!-- error -->
                                        <div class="alert alert-danger mb0 x-hidden"></div>
                                        <!-- error -->
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
                                    </div>
                                </form>
                            {elseif $sub_view == "delete"}
                                <div class="card-header with-icon">
                                    <i class="fa fa-trash mr10"></i>{__("Delete Event")}
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-warning">
                                        <div class="icon">
                                            <i class="fa fa-exclamation-triangle fa-2x"></i>
                                        </div>
                                        <div class="text pt5">
                                            {__("Once you delete your event you will no longer can access it again")}
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button class="btn btn-danger js_delete-event" data-id="{$event['event_id']}">
                                            <i class="fa fa-trash mr10"></i>{__("Delete Event")}
                                        </button>
                                    </div>
                                </div>
                            {/if}
                        </div>
                        <!-- edit -->
                    </div>
                
                {elseif $view == "about"}
                    <!-- info -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                {__("This event is private and you need to be invited to see its info, members and posts")}
                            </div>
                        </div>
                    </div>
                    <!-- info -->
                
                {/if}
                <!-- view content -->
            </div>
            <!-- profile-content -->
        </div>
        <!-- content panel -->

    </div>
</div>
<!-- page content -->

{include file='_footer.tpl'}