    <title>Teachin.id : Lowongan kerja terbaru 2020</title>
{include file='_head.tpl'}
{include file='_header.tpl'}
    <!-- page header -->
    <div class="page-header bg-1">

        <div class="crystal c03"></div>
        <div class="circle-2"></div>
        <div class="circle-3"></div>
        <div class="inner">
            <h2>{__("Lowongan Kerja Terbaru sebagai pendidik di seluruh Indonesia")}</h2>
        </div>
    </div>
    <!-- page header -->
<!-- page content -->
<div class="container mt20 offcanvas">
    <div class="row">



        <!-- content panel -->
        <div class="col-md-12 col-lg-12 offcanvas-mainbar">



            <!-- content -->
            <div class="row">
                <!-- left panel -->
                <div class="col-lg-3 order-lg-2">
                    <!-- search panel -->
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-search mr5"></i>{__("Search")}
                        </div>
                        <div class="card-body">
                            <form action="{$system['system_url']}/job-vacancies/find" method="post">
                                <div class="form-group">
                                    <label>{__("Keyword")}</label>
                                    <input type="text" class="form-control" name="query">
                                </div>
                                <div class="form-group">
                                    <label>{__("Specialization")}</label>
                                        <select name="id_specialization" class="form-control">
                                             
                                            <option value="none">Select Specialization</option>
                                            {foreach $specializations as $specialization}
                                            <option value="{$specialization['id']}">{$specialization['specialization']}</option>
                                     {/foreach}
                                            
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>{__("Grade")}</label>
                                        <select name="id_grade" class="form-control">
                                             
                                            <option value="none">Select Grade</option>
                                            {foreach $grades as $grade}
                                            <option value="{$grade['id']}">{$grade['grade']}</option>
                                     {/foreach}
                                            
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>{__("Provinces")}</label>
                                       <select name="id_province" class="form-control">
                                             
                                            <option value="none">Select Province</option>
                                            {foreach $provinces as $province}
                                            <option value="{$province['id']}">{$province['province_name']}</option>
                                     {/foreach}
                                            
                                        </select>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary" name="submit"><i class="fa fa-search mr5"></i>{__("Search")}</button>
                            </form>
                        </div>
                    </div>
                    <!-- search panel -->

  
                </div>
                <!-- left panel -->
            {if $view == ""}
                <!-- right panel -->
                <div class="col-lg-9 order-lg-1">
			{if $rows}
				<div class="row">
					{foreach $rows as $job}
						<div class="col-md-6 col-lg-4">
							<div class="card product" style="font-size: 15px;">
								<div class="ui-box" style="background: none;">
								    <div class="img" style="top: -20px;">
										<img src="{$system['system_uploads']}/{$job['picture']}">
									</div>
								</div>
								<div class="product-info">
									<div class="product-meta title">
										<center><a style="font-size: 15px;" href="{$system['system_url']}/job/{$job['id']}" class="title">{$job['company_name']}</a></center>
									</div>
									<div class="product-meta">
										<i class="fa fa-tag fa-fw mr5" style="color: #1f9cff;"></i>{__("Position")}: {$job['job_title']}
									</div>
									<div class="product-meta">
										<i class="fa fa-map-marker fa-fw"></i> {$job['province_name']}
									</div>
								</div>
							</div>
						</div>
					{/foreach}
				</div>
			{/if}
                </div>
			{elseif $view == "find"}
                <div class="col-lg-9 order-lg-1">
			{if $jobs}
				<div class="row">
					{foreach $jobs as $job}
						<div class="col-md-6 col-lg-4">
							<div class="card product" style="font-size: 15px;">
								<div class="ui-box" style="background: none;">
								    <div class="img" style="top: -20px;">
										<img src="{$system['system_uploads']}/{$job['picture']}">
									</div>
								</div>
								<div class="product-info">
									<div class="product-meta title">
										<center><a style="font-size: 15px;" href="{$system['system_url']}/job/{$job['id']}" class="title">{$job['company_name']}</a></center>
									</div>
									<div class="product-meta">
										<i class="fa fa-tag fa-fw mr5" style="color: #1f9cff;"></i>{__("Position")}: {$job['job_title']}
									</div>
									<div class="product-meta">
										<i class="fa fa-map-marker fa-fw"></i> {$job['province_name']}
									</div>
								</div>
							</div>
						</div>
					{/foreach}
				</div>
			{else}
				<div class="text-center text-muted">
                    <i class="fa fa-toolbox fa-4x"></i>
                    <p class="mt10"><strong>{__("No jobs to show")}</strong></p>
                </div>
			{/if}
                <!-- right panel -->
            </div>
            <!-- content -->
            {/if}
        </div>
        <!-- content panel -->

    </div>
</div>
<!-- page content -->

{include file='_footer.tpl'}