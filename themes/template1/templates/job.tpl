{include file='_head.tpl'}
{include file='_header.tpl'}

{if $view == ""}
    <!-- page header -->
    <div class="page-header bg-1">

        <div class="crystal c03"></div>
        <div class="circle-2"></div>
        <div class="circle-3"></div>
        <div class="inner">
            <div class="ui-box" style="background: none;">
            <div class="img"> <a href="{$system['system_url']}/job/{$job['id']}"> <img alt="{$job['company_name']}" src="{$system['system_uploads']}/{$job['picture']}"> </a> </div>
            </div>
            <h2><b>{$job['company_name']}</b></h2>
        </div>
    </div>
    <!-- page header -->
{/if}


<!-- page content -->
<div class="container mt20 {if $user->_logged_in}offcanvas{/if}">
 <div class="row">

	    <!-- side panel -->
	    {if $user->_logged_in}
		    <div class="col-12 d-block d-sm-none offcanvas-sidebar">
		        {include file='_sidebar.tpl'}
		    </div>
	    {/if}
	    <!-- side panel -->

	    <!-- content panel -->
	    <div class="col-12 {if $user->_logged_in}offcanvas-mainbar{/if}">
    		<div class="card shadow">
    			<div class="card-body page-content text-readable">
    			    <center><h3 class="text-info">{$job['job_title']}</h3>
    			    <i class="fa fa-map-marker fa-fw"></i> {$job['province_name']}
    			    </center>
    			    <br>
    			    <h4 class="text-info">About Us</h4>
    			    {$job['about_us']}
    			    <br><br>
    			    <h3 class="text-info">Job description:</h3>
			        {$job['job_description']} <br>
			        <h3 class="text-info">Job qualification:</h3>
			        {$job['qualification']}
			        {if $user->_logged_in}
			        {if $applier == 0}
			        {if $user->_data['user_cv'] == NULL}
			        <div class="card-footer text-right"> <button class="btn btn-primary" data-toggle="modal" data-url="#apply">Apply Job</button>
			        </div>
                    {else}
                    <div class="card-footer text-right">
                         <button type="button" class="btn btn-primary js_apply" data-uid="{$job['id']}">
                        <i class="fa fa-toolbox mr5"></i>{if $_small}{__("Apply")}{else}{__("Apply Job")}{/if}
                    </button>
                    </div>
                    {/if}
			        {else}
			        <div class="card-footer text-right"> <button type="submit" class="btn btn-success">You have applied for this job</button> </div>
			        {/if}
			        {else}
			        <div class="card-footer text-right"> <button class="btn btn-primary" data-toggle="modal" data-url="#modal-login">Apply Job</button>
			        </div>
			        {/if}
    			</div>
    		</div>
	    </div>
	    <!-- content panel -->
	    
	</div>
</div>
<!-- page content -->

{include file='_footer.tpl'}