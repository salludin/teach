<div class="card">
    <div class="card-body with-nav">
        <ul class="main-side-nav">
            <!-- basic -->
            <li>
                <a href="{$system['system_url']}/institution/{$user->_data['user_name']}">
                    <img class="rounded-circle" src="{$user->_data.user_picture}" alt="{$user->_data['user_firstname']} {$user->_data['user_lastname']}">
                    <span>{$user->_data['user_firstname']} {$user->_data['user_lastname']}</span>
                </a>
            </li>

            <li>
                <a href="{$system['system_url']}/settings">
                    <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/icons/settings.png">
                    {__("Settings")}
                </a>
            </li>

            {if $user->_is_admin}
                <li>
                    <a href="{$system['system_url']}/admincp">
                        <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/icons/admin.png">
                        {__("Admin Panel")}
                    </a>
                </li>
            {elseif $user->_is_moderator}
                <li>
                    <a href="{$system['system_url']}/modcp">
                        <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/icons/admin.png">
                        {__("Moderator Panel")}
                    </a>
                </li>
            {/if}
            <!-- basic -->

            <!-- favorites -->
            <li class="ptb5">
                <strong><small class="text-muted">{__("favorites")|upper}</small></strong>
            </li>

            <li {if $page== "index" && ($view == "" || $view == "discover" || $view == "popular")}class="active"{/if}>
                {if !$system['popular_posts_enabled'] && !$system['discover_posts_enabled']}
                    <a href="{$system['system_url']}">
                        <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/icons/newfeed.png">
                        {__("Dashboard")}
                    </a>
                {else}
                    <a href="#newsfeed" data-toggle="collapse" {if $page== "index" && ($view == "" || $view == "post_job" || $view == "applier_job")}aria-expanded="true"{/if}>
                        <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/icons/newfeed.png">
                        {__("Dashboard")}
                    </a>
                    <div class='collapse {if $page== "index" && ($view == "" || $view == "post_job" || $view == "applier_job")}show{/if}' id="newsfeed">
                        <ul>
                            <li {if $page== "index" && $view == "post_job"}class="active"{/if}>
                                <a href="{$system['system_url']}/post_job">
                                    <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/icons/article.png">{__("Post Job")}
                                </a>
                            </li>
                            
                            <li {if $page== "index" && $view == "manage_job"}class="active"{/if}>
                                <a href="{$system['system_url']}/saved">
                                    <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/icons/saved.png">{__("Manage Jobs")}
                                </a>
                            </li>
                            
                          
                            <li {if $page== "index" && $view == "applier_job"}class="active"{/if}>
                                <a href="{$system['system_url']}/applier_job">
                                    <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/icons/groups.png">{__("Candidate")}
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                {/if}
            </li>

            <!-- favorites -->



            <!-- explore -->
            <li class="ptb5">
                <small class="text-muted">{__("explore")|upper}</small>
            </li>

            <li {if $page== "people"}class="active"{/if}>
                <a href="{$system['system_url']}/people">
                    <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/icons/people.png">
                    {__("People")}
                </a>
            </li>
            
            <li {if $page== "pages"}class="active"{/if}>
                <a href="{$system['system_url']}/pages">
                    <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/icons/pages.png">
                    {__("Pages")}
                </a>
            </li>


            <li {if $page== "events"}class="active"{/if}>
                <a href="{$system['system_url']}/events">
                    <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/icons/events.png">
                    {__("Events")}
                </a>
            </li>

            {if $system['blogs_enabled']}
                <li>
                    <a href="{$system['system_url']}/blogs">
                        <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/icons/blogs.png">
                        {__("Blogs")}
                    </a>
                </li>
            {/if}


            <!-- explore -->
        </ul>
    </div>
</div>