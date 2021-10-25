{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
{if !$user->_logged_in}
    
    <div class="container pt30" style="padding-top: 80px !important;">
        <div class="index-intro">
            <!--<p>
                <h4>{__("Lowongan kerja guru diseluruh indonesia — cari kandidat guru — komunitas guru ")}</h4>
            </p>-->
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-7">
                <img style="width: 80%;" class="d-none d-md-block" src="{$system['system_url']}/content/themes/{$system['theme']}/images/home/Conversation_concept_Artboard.svg">
        <div class="site-section index-intro" id="programs-section">
          <div class="col-lg-8 text-center"  data-aos="fade-up" data-aos-delay="" style="margin-left:25px;">
            <p class="mb-4"><b style="color:#3367d6;">Teachin.id</b> merupakan website pendidikan Indonesia yang ditujukan untuk para guru dan sekolah</p>
          </div>
        </div>
            </div>

            <div class="col-md-6 col-lg-5">
                {include file='_sign_form.tpl'}
            </div>
        </div>
        <br><br><br>
          {include file='_why_join.tpl'}
    </div>
    {if !$user->_logged_in}
    {include file='_footer_index.tpl'}
    {else}
    {include file='_footer.links.tpl'}
    {/if}
{else}

    <div class="container mt20 offcanvas">
        <div class="row">

            <!-- side panel -->
            <div class="col-md-4 col-lg-3 offcanvas-sidebar js_sticky-sidebar">
                {if !$user->_is_company}
                {include file='_sidebar.tpl'}
                {else}
                {include file='_sidebar_institution.tpl'}
                {/if}
            </div>
            <!-- side panel -->

            <!-- content panel -->
            <div class="col-md-8 col-lg-9 offcanvas-mainbar">
                <div class="row">
                    <!-- center panel -->
                    <div class="col-lg-8">

                        <!-- announcments -->
                        {include file='_announcements.tpl'}
                        <!-- announcments -->

                        {if $view == ""}

                            <!-- stories -->
                            {if $system['stories_enabled'] && !$user->_is_company}
                                <div class="card">
                                    <div class="card-header bg-transparent border-bottom-0">
                                        <strong class="text-muted">{__("Stories")}</strong>
                                        {if $has_story}
                                            <div class="float-right">
                                                <button data-toggle="tooltip" data-placement="top" title='{__("Delete Your Story")}' class="btn btn-sm btn-icon btn-rounded btn-danger js_story-deleter">
                                                    <i class="fa fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        {else}
                                            <div class="d-none d-sm-block text-muted pointer float-right">
                                                <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title='{__("Stories are photos and videos that only last 24 hours")}'></i>
                                            </div>
                                        {/if}
                                            
                                    </div>
                                    <div class="card-body pt5 stories-wrapper">
                                        <div id="stories" data-json='{$stories["json"]}'>
                                            <div class="add-story" data-toggle="modal" data-url="posts/story.php?do=create">
                                                <div class="img" style="background-image:url({$user->_data['user_picture']});">
                                                </div>
                                                <div class="add">
                                                    <i class="fa fa-plus-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {/if}
                            <!-- stories -->

                            <!-- job Vacancy -->
                            {include file='_job_vacancy.tpl'}
                            <!-- job Vacancy -->

                            <!-- publisher -->
                            {include file='_publisher.tpl' _handle="me" _privacy=true}
                            <!-- publisher -->
                     <!-- membership -->
                     {if $user->_is_company}
                    <div class="card">
                    <div class="card-body">
                        <div class="alert alert-primary">
                            <div class="icon">
                                <i class="fa fa-id-card fa-2x"></i>
                            </div>
                            <div class="text">
                                <strong>{__("Membership")}</strong><br>
                                {__("Choose the Plan That's Right for You")}, {__("Check the package from")} <a class="alert-link" href="{$system['system_url']}/packages">{__("Here")}</a>
                            </div>
                        </div>

                        <form>
                            {if $user->_data['user_subscribed']}
                                <div class="heading-small mb20">
                                    {__("Package Details")}
                                </div>
                                <div class="pl-md-4">
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            {__("Package")}
                                        </label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">
                                                {$user->_data['name']} ({$system['system_currency_symbol']}{$user->_data['price']} 
                                                {if $user->_data['period'] == "life"}{__("Life Time")}{else}{__("per")} {if $user->_data['period_num'] != '1'}{$user->_data['period_num']}{/if} {__($user->_data['period']|ucfirst)}{/if})
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            {__("Subscription Date")}
                                        </label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">
                                                {$user->_data['user_subscription_date']|date_format:"%e %B %Y"}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            {__("Expiration Date")}
                                        </label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">
                                                {if $user->_data['period'] == "life"}
                                                    {__("Life Time")}
                                                {else}
                                                    {$user->_data['subscription_end']|date_format:"%e %B %Y"} ({if $user->_data['subscription_timeleft'] > 0}{__("Remaining")} {$user->_data['subscription_timeleft']} {__("Days")}{else}{__("Expired")}{/if})
                                                {/if}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            {__("Job Posting")}
                                        </label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">
                                                {$user->_data['user_boosted_posts']}/{$user->_data['boost_posts']} (<a href="{$system['system_url']}/boosted/posts">{__("Manage")}</a>)
                                            </p>
                                            
                                            <div class="progress mb5">
                                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="{($user->_data['user_boosted_posts']/$user->_data['boost_pages'])*100}" aria-valuemin="0" aria-valuemax="100" style="width: {($user->_data['user_boosted_posts']/$user->_data['boost_posts'])*100}%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-md-3 form-control-label">
                                            {__("Hire People")}
                                        </label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext">
                                                {$user->_data['user_boosted_pages']}/{$user->_data['boost_pages']} (<a href="{$system['system_url']}/boosted/pages">{__("Manage")}</a>)
                                            </p>
                                            
                                            <div class="progress mb5">
                                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="{($user->_data['user_boosted_pages']/$user->_data['boost_pages'])*100}" aria-valuemin="0" aria-valuemax="100" style="width: {($user->_data['user_boosted_pages']/$user->_data['boost_pages'])*100}%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="heading-small mb20">
                                    {__("Upgrade Package")}
                                </div>
                                <div class="pl-md-4">
                                    <div class="text-center">
                                        <a href="{$system['system_url']}/packages" class="btn btn-md btn-success"><i class="fa fa-rocket mr10"></i>{__("Upgrade Package")}</a>
                                    </div>
                                </div>
                            {else}
                                <div class="text-center">
                                    <a href="{$system['system_url']}/packages" class="btn btn-md btn-success"><i class="fa fa-rocket mr10"></i>{__("Upgrade to Pro")}</a>
                                </div>
                            {/if}
                        </form>
                    </div>
                    </div>
                    {/if}
                    <!-- membership -->
                            <!-- boosted post -->
                            {if $boosted_post}
                                {include file='_boosted_post.tpl' post=$boosted_post}
                            {/if}
                            <!-- boosted post -->

                            <!-- posts -->
                            {if !$user->_is_company}
                            {include file='_posts.tpl' _get="newsfeed"}
                            {/if}
                            <!-- posts -->

                        {elseif $view == "popular"}
                            <!-- popular posts -->
                            {include file='_posts.tpl' _get="popular" _title=__("Popular Posts")}
                            <!-- popular posts -->

                        {elseif $view == "discover"}
                            <!-- discover posts -->
                            {include file='_posts.tpl' _get="discover" _title=__("Discover Posts")}
                            <!-- discover posts -->

                        {elseif $view == "saved"}
                            <!-- saved posts -->
                            {include file='_posts.tpl' _get="saved" _title=__("Saved Posts")}
                            <!-- saved posts -->

                        {elseif $view == "memories"}
                            <!-- page header -->
                            <div class="page-header mini rounded-top mb10">
                                <div class="crystal c03"></div>
                                <div class="circle-1"></div>
                                <div class="circle-2"></div>
                                <div class="inner">
                                    <h2>{__("Memories")}</h2>
                                    <p>{__("Enjoy looking back on your memories")}</p>
                                </div>
                            </div>
                            <!-- page header -->

                            <!-- memories posts -->
                            {include file='_posts.tpl' _get="memories" _title=__("ON THIS DAY") _filter="all"}
                            <!-- memories posts -->

                        {elseif $view == "articles"}
                            <!-- articles posts -->
                            {include file='_posts.tpl' _get="posts_profile" _id=$user->_data['user_id'] _filter="article" _title=__("My Articles")}
                            <!-- articles posts -->

                        {elseif $view == "post_job"}
                            <!-- articles posts -->
                            {include file='_post_job.tpl' _id=$user->_data['user_id'] _title=__("Post Job")}
                            <!-- articles posts -->

                        {elseif $view == "applier_job"}
                            <!-- articles posts -->
                            {include file='_candidate.tpl' _id=$user->_data['user_id'] _title=__("Post Job")}
                            <!-- articles posts -->

                        {elseif $view == "products"}
                            <!-- products posts -->
                            {include file='_posts.tpl' _get="posts_profile" _id=$user->_data['user_id'] _filter="product" _title=__("My Products")}
                            <!-- products posts -->

                        {elseif $view == "boosted_posts"}
                            {if $user->_is_admin || $user->_data['user_subscribed']}
                                <!-- boosted posts -->
                                {include file='_posts.tpl' _get="boosted" _title=__("My Boosted Posts")}
                                <!-- boosted posts -->
                            {else}
                                <!-- upgrade -->
                                <div class="alert alert-warning">
                                    <div class="icon">
                                        <i class="fa fa-id-card fa-2x"></i>
                                    </div>
                                    <div class="text">
                                        <strong>{__("Membership")}</strong><br>
                                        {__("Choose the Plan That's Right for You")}, {__("Check the package from")} <a href="{$system['system_url']}/packages">{__("Here")}</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="{$system['system_url']}/packages" class="btn btn-primary"><i class="fa fa-rocket mr5"></i>{__("Upgrade to Pro")}</a>
                                </div>
                                <!-- upgrade -->
                            {/if}

                        {elseif $view == "boosted_pages"}
                            {if $user->_is_admin || $user->_data['user_subscribed']}
                                <div class="card">
                                    <div class="card-header">
                                        <strong>{__("My Boosted Pages")}</strong>
                                    </div>
                                    <div class="card-body">
                                        {if $boosted_pages}
                                            <ul>
                                                {foreach $boosted_pages as $_page}
                                                    {include file='__feeds_page.tpl' _tpl="list"}
                                                {/foreach}
                                            </ul>

                                            {if count($boosted_pages) >= $system['max_results_even']}
                                            <!-- see-more -->
                                            <div class="alert alert-info see-more js_see-more" data-get="boosted_pages">
                                                <span>{__("See More")}</span>
                                                <div class="loader loader_small x-hidden"></div>
                                            </div>
                                            <!-- see-more -->
                                            {/if}
                                        {else}
                                            <p class="text-center text-muted mt10">
                                                {__("No pages to show")}
                                            </p>
                                        {/if}
                                    </div>
                                </div>
                            {else}
                                <!-- upgrade -->
                                <div class="alert alert-warning">
                                    <div class="icon">
                                        <i class="fa fa-id-card fa-2x"></i>
                                    </div>
                                    <div class="text">
                                        <strong>{__("Membership")}</strong><br>
                                        {__("Choose the Plan That's Right for You")}, {__("Check the package from")} <a href="{$system['system_url']}/packages">{__("Here")}</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="{$system['system_url']}/packages" class="btn btn-primary"><i class="fa fa-rocket mr5"></i>{__("Upgrade to Pro")}</a>
                                </div>
                                <!-- upgrade -->
                            {/if}

                        {/if}
                    </div>
                    <!-- center panel -->

                    <!-- right panel -->
                    <div class="col-lg-4 js_sticky-sidebar">
                        {if !$user->_is_company}
                        <!-- pro users -->
                        <!--{if $pro_members}
                            <div class="card bg-gradient-indigo border-0">
                                <div class="card-header ptb20 bg-transparent border-bottom-0">
                                    {if $system['packages_enabled'] && !$user->_data['user_subscribed']}
                                        <div class="float-right">
                                            <small><a class="text-white text-underline" href="{$system['system_url']}/packages">{__("Upgrade")}</a></small>
                                        </div>
                                    {/if}
                                    <h6 class="pb0"><i class="fa fa-user-shield mr5"></i> {__("Pro Users")}</h6>
                                </div>
                                <div class="card-body pt0 plr5">
                                    <div class="pro-box-wrapper {if count($pro_members) > 3}js_slick{else}full-opacity{/if}">
                                        {foreach $pro_members as $_member}
                                            <a class="user-box text-white" href="{$system['system_url']}/{$_member['user_name']}">
                                                <img alt="{$_member['user_firstname']} {$_member['user_lastname']}" src="{$_member['user_picture']}" />
                                                <div class="name" title="{$_member['user_firstname']} {$_member['user_lastname']}">
                                                    {$_member['user_firstname']} {$_member['user_lastname']}
                                                </div>
                                            </a>
                                        {/foreach}
                                    </div>
                                </div>
                            </div>
                        {/if}-->
                        <!-- pro users -->

                        <!-- pro pages -->
                        {if $promoted_pages}
                            <div class="card bg-gradient-teal border-0">
                                <div class="card-header ptb20 bg-transparent border-bottom-0">
                                    {if $system['packages_enabled'] && !$user->_data['user_subscribed']}
                                        <div class="float-right">
                                            <small><a class="text-white text-underline" href="{$system['system_url']}/packages">{__("Upgrade")}</a></small>
                                        </div>
                                    {/if}
                                    <h6 class="pb0"><i class="fa fa-flag-checkered mr5"></i> {__("Pro Pages")}</h6>
                                </div>
                                <div class="card-body pt0 plr5">
                                    <div class="pro-box-wrapper {if count($promoted_pages) > 3}js_slick{else}full-opacity{/if}">
                                        {foreach $promoted_pages as $_page}
                                            <a class="user-box text-white" href="{$system['system_url']}/pages/{$_page['page_name']}">
                                                <img alt="{$_page['page_title']}" src="{$_page['page_picture']}" />
                                                <div class="name" title="{$_page['page_title']}">
                                                    {$_page['page_title']}
                                                </div>
                                            </a>
                                        {/foreach}
                                    </div>
                                </div>
                            </div>
                        {/if}
                        <!-- pro pages -->

                        <!-- trending -->
                        {if $trending_hashtags}
                            <div class="card bg-gradient-red border-0">
                                <div class="card-header pt20 pb10 bg-transparent border-bottom-0">
                                    <h6 class="mb0"><i class="fa fa-fire mr5"></i> {__("Trending")}</h6>
                                </div>
                                <div class="card-body pt0">
                                    {foreach $trending_hashtags as $hashtag}
                                        <a class="trending-item" href="{$system['system_url']}/search/hashtag/{$hashtag['hashtag']}">
                                            <span class="hash">
                                                #{$hashtag['hashtag']}
                                            </span>
                                            <span class="frequency">
                                                {$hashtag['frequency']} {__("Posts")}
                                            </span>
                                        </a>
                                    {/foreach}
                                </div>
                            </div>
                        {/if}
                        <!-- trending -->
                        {/if}
                        {include file='_ads_campaigns.tpl'}
                        {include file='_ads.tpl'}
                        {include file='_widget.tpl'}

                        <!-- friend suggestions -->
                        {if !$user->_is_company}
                        {if $new_people}
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <div class="float-right">
                                        <small><a href="{$system['system_url']}/people">{__("See All")}</a></small>
                                    </div>
                                    {__("Friend Suggestions")}
                                </div>
                                <div class="card-body with-list">
                                    <ul>
                                        {foreach $new_people as $_user}
                                        {include file='__feeds_user.tpl' _tpl="list" _connection="add" _small=true}
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        {/if}
                        {/if}
                         <!-- friend suggestions -->

                        <!-- suggested pages -->
                        {if !$user->_is_company}
                        {if $new_pages}
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <div class="float-right">
                                        <small><a href="{$system['system_url']}/pages">{__("See All")}</a></small>
                                    </div>
                                    {__("Suggested Pages")}
                                </div>
                                <div class="card-body with-list">
                                    <ul>
                                        {foreach $new_pages as $_page}
                                        {include file='__feeds_page.tpl' _tpl="list"}
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        {/if}
                        {/if}
                        <!-- suggested pages -->

                        <!-- suggested groups -->
                        {if !$user->_is_company}
                        {if $new_groups}
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <div class="float-right">
                                        <small><a href="{$system['system_url']}/groups">{__("See All")}</a></small>
                                    </div>
                                    {__("Suggested Groups")}
                                </div>
                                <div class="card-body with-list">
                                    <ul>
                                        {foreach $new_groups as $_group}
                                        {include file='__feeds_group.tpl' _tpl="list"}
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        {/if}
                        {/if}
                        <!-- suggested groups -->

                        <!-- suggested events -->
                        {if $new_events}
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <div class="float-right">
                                        <small><a href="{$system['system_url']}/events">{__("See All")}</a></small>
                                    </div>
                                    {__("Suggested Events")}
                                </div>
                                <div class="card-body with-list">
                                    <ul>
                                        {foreach $new_events as $_event}
                                        {include file='__feeds_event.tpl' _tpl="list" _small=true}
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        {/if}
                        <!-- suggested events -->

                        <!-- invitation widget -->
                        {if $system['invitation_widget_enabled']}
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <i class="fa fa-envelope-open-text mr5"></i> {__("Invite Your Friends")}
                                </div>
                                <div class="card-body with-form">
                                    <form class="js_ajax-forms" data-url="users/invitation.php">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="email" placeholder='{__("Email")}'>
                                                <div class="input-group-append">
                                                    <button type="submit" name="submit" class="btn btn-primary plr20"><i class="fas fa-paper-plane"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- success -->
                                        <div class="alert alert-success mb0 x-hidden"></div>
                                        <!-- success -->

                                        <!-- error -->
                                        <div class="alert alert-danger mb0 x-hidden"></div>
                                        <!-- error -->
                                    </form>
                                </div>
                            </div>
                        {/if}
                        <!-- invitation widget -->

                        <!-- mini footer -->
                        {if $new_people || $new_pages || $new_groups || $new_events}
                            <div class="mtb20 plr10 d-none d-sm-block">
                                <div class="col-12 mb5">
                                    {if $static_pages}
                                        {foreach $static_pages as $static_page}
                                            <a href="{$system['system_url']}/static/{$static_page['page_url']}">
                                                {$static_page['page_title']}
                                            </a>{if !$static_page@last} · {/if}
                                        {/foreach}
                                    {/if}
                                    {if $system['contact_enabled']}
                                         · 
                                        <a href="{$system['system_url']}/contacts">
                                            {__("Contacts Us")}
                                        </a>
                                    {/if}
                                    {if $system['developers_apps_enabled'] || $system['developers_share_enabled']}
                                         · 
                                        <a href="{$system['system_url']}/developers{if !$system['developers_apps_enabled']}/share{/if}">
                                            {__("Developers")}
                                        </a>
                                    {/if}
                                    {if $system['directory_enabled']}
                                         · 
                                        <a href="{$system['system_url']}/directory">
                                            {__("Directory")}
                                        </a>
                                    {/if}
                                    {if $system['market_enabled']}
                                         · 
                                        <a href="{$system['system_url']}/market">
                                            {__("Market")}
                                        </a>
                                    {/if}
                                    {if $system['forums_enabled']}
                                         · 
                                        <a href="{$system['system_url']}/forums">
                                            {__("Forums")}
                                        </a>
                                    {/if}
                                </div>
                                <div class="col-12">
                                    &copy; {'Y'|date} {$system['system_title']} · <span class="text-link" data-toggle="modal" data-url="#translator">{$system['language']['title']}</span>
                                </div>
                            </div>
                        {/if}
                        <!-- mini footer -->
                        
                    </div>
                    <!-- right panel -->
                </div>
            </div>
            <!-- content panel -->

        </div>
    </div>

{/if}
<!-- page content -->

{include file='_footer.tpl'}