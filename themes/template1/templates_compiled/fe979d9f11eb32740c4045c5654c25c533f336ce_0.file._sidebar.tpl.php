<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-27 03:56:08
  from '/home/u6574599/public_html/content/themes/default/templates/_sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f1e505869f5d3_42205483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe979d9f11eb32740c4045c5654c25c533f336ce' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/_sidebar.tpl',
      1 => 1590160153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1e505869f5d3_42205483 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-body with-nav">
        <ul class="main-side-nav">
            <!-- basic -->
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
">
                    <img class="rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
">
                    <span><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
</span>
                </a>
            </li>

            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/chat.png">
                    <?php echo __("Messages");?>

                </a>
            </li>

            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/settings.png">
                    <?php echo __("Settings");?>

                </a>
            </li>

            <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/admin.png">
                        <?php echo __("Admin Panel");?>

                    </a>
                </li>
            <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->_is_moderator) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/modcp">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/admin.png">
                        <?php echo __("Moderator Panel");?>

                    </a>
                </li>
            <?php }?>
            <!-- basic -->

            <!-- favorites -->
            <li class="ptb5">
                <strong><small class="text-muted"><?php echo mb_strtoupper(__("favorites"), 'UTF-8');?>
</small></strong>
            </li>

            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "discover" || $_smarty_tpl->tpl_vars['view']->value == "popular")) {?>class="active"<?php }?>>
                <?php if (!$_smarty_tpl->tpl_vars['system']->value['popular_posts_enabled'] && !$_smarty_tpl->tpl_vars['system']->value['discover_posts_enabled']) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/newfeed.png">
                        <?php echo __("News Feed");?>

                    </a>
                <?php } else { ?>
                    <a href="#newsfeed" data-toggle="collapse" <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "discover" || $_smarty_tpl->tpl_vars['view']->value == "popular")) {?>aria-expanded="true"<?php }?>>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/newfeed.png">
                        <?php echo __("News Feed");?>

                    </a>
                    <div class='collapse <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "discover" || $_smarty_tpl->tpl_vars['view']->value == "popular")) {?>show<?php }?>' id="newsfeed">
                        <ul>
                            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == '') {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/posts_recent.png">
                                    <?php echo __("Recent Updates");?>

                                </a>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['popular_posts_enabled']) {?>
                                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "popular") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/popular">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/posts_popular.png">
                                        <?php echo __("Popular Posts");?>

                                    </a>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['discover_posts_enabled']) {?>
                                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "discover") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/discover">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/posts_discover.png">
                                        <?php echo __("Discover Posts");?>

                                    </a>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                <?php }?>
            </li>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "articles") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/articles">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/article.png">
                        <?php echo __("My Articles");?>

                    </a>
                </li>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "products") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/products">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/products.png">
                        <?php echo __("My Products");?>

                    </a>
                </li>
            <?php }?>

            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "saved") {?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/saved">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/saved.png">
                    <?php echo __("Saved Posts");?>

                </a>
            </li>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['memories_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "memories") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/memories">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/memories.png">
                        <?php echo __("Memories");?>

                    </a>
                </li>
            <?php }?>
            <!-- favorites -->



            <!-- explore -->
            <li class="ptb5">
                <small class="text-muted"><?php echo mb_strtoupper(__("explore"), 'UTF-8');?>
</small>
            </li>

            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "people") {?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/people.png">
                    <?php echo __("People");?>

                </a>
            </li>
            
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "pages") {?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/pages.png">
                    <?php echo __("Pages");?>

                </a>
            </li>

            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "groups") {?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/groups.png">
                    <?php echo __("Groups");?>

                </a>
            </li>

            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "events") {?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/events.png">
                    <?php echo __("Events");?>

                </a>
            </li>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/blogs.png">
                        <?php echo __("Blogs");?>

                    </a>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/market.png">
                        <?php echo __("Market");?>

                    </a>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_enabled']) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/forums.png">
                        <?php echo __("Forums");?>

                    </a>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['movies_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "movies") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movies">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/movies.png">
                        <?php echo __("Movies");?>

                    </a>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "games") {?>class="active"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/games.png">
                        <?php echo __("Games");?>

                    </a>
                </li>
            <?php }?>
            <!-- explore -->
        </ul>
    </div>
</div><?php }
}
