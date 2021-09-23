<div class="card">

                                <div class="card-header bg-transparent">
                                    <div class="float-right">
                                        <small><a href="{$system['system_url']}/job-vacancies">{__("See All")}</a></small>
                                    </div>
                                        <strong class="text-muted">{__("Job Vacancy")}</strong>
                                </div>
                                    <div class="content-tabs rounded-sm">
                                        <div>
                                    <ul class="row">
                            {if $jobs}
                            {foreach $jobs as $job}
                                        <li class="col-md-6 col-lg-4"> <div class="ui-box"> <div class="img"> <a href="{$system['system_url']}/job/{$job['id']}"> <img alt="{$job['company_name']}" src="{$system['system_uploads']}/{$job['user_picture']}"> </a> </div> <div class="mt10"> <span> <a class="h6" href="{$system['system_url']}/job/{$job['id']}">{$job['company_name']}</a> </span> <div>{$job['job_title']}</div> </div> </div> 
                                        </li>
                            {/foreach}
                            {/if}
                                        </ul>
                                        </div>
                                    </div>
                                </div>