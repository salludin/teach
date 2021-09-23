{include file='_head.tpl'}
{include file='_header.tpl'}




<!-- page content -->
<div class="container mt20 {if $user->_logged_in}offcanvas{/if}">
    <div class="row">
        {elseif $view == "new"}
            
            <!-- side panel -->
            <div class="col-md-4 col-lg-3 offcanvas-sidebar js_sticky-sidebar">
                {include file='_sidebar.tpl'}
            </div>
            <!-- side panel -->

            <!-- content panel -->
            <div class="col-md-8 col-lg-9 offcanvas-mainbar">
                <!-- content -->
                <div class="card">
                    <div class="card-header with-icon">
                        <i class="fa fa-edit mr10"></i>{__("Create New Event")}
                    </div>

                    <div class="js_ajax-forms-html" data-url="posts/article.php?do=create">
                        <div class="card-body">
                            <div class="form-group form-row">
                                <label class="col-md-2 form-control-label">
                                    {__("Title")}
                                </label>
                                <div class="col-md-10">
                                    <input class="form-control" name="title">
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <label class="col-md-2 form-control-label">
                                    {__("Content")}
                                </label>
                                <div class="col-md-10">
                                    <textarea name="text" class="form-control js_wysiwyg"></textarea>
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <label class="col-md-2 form-control-label">
                                    {__("Cover")}
                                </label>
                                <div class="col-md-10">
                                    <div class="x-image">
                                        <button type="button" class="close x-hidden js_x-image-remover" title='{__("Remove")}'>
                                            <span>×</span>
                                        </button>
                                        <div class="x-image-loader">
                                            <div class="progress x-progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                        <input type="hidden" class="js_x-image-input" name="cover">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <label class="col-md-2 form-control-label">
                                    {__("Category")}
                                </label>
                                <div class="col-md-10">
                                    <select class="form-control" name="category">
                                        <option>{__("Select Category")}</option>
                                        <!--{foreach $blogs_categories as $category}
                                        <option value="{$category['category_id']}">{__($category['category_name'])}</option>
                                        {/foreach}-->
                                    </select>
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <label class="col-md-2 form-control-label">
                                    {__("Tags")}
                                </label>
                                <div class="col-md-10">
                                    <input class="form-control" name="tags">
                                </div>
                            </div>

                            <!-- error -->
                            <div class="alert alert-danger mb0 x-hidden"></div>
                            <!-- error -->
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">{__("Publish")}</button>
                        </div>
                    </div>
                </div>
                <!-- content -->
            </div>
            <!-- content panel -->
        
        {/if}
    </div>
</div>
<!-- page content -->

{include file='_footer.tpl'}