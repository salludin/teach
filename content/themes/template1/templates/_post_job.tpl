<div class="col-md-12 col-lg-12 offcanvas-mainbar">
<div class="card">
<div class="card-header with-icon">
                            <i class="fa fa-toolbox fa-fw mr10" style="color: #2b53a4;"></i>Post Job
                        </div>
                        <form class="js_ajax-forms " data-url="posts/job.php">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label">Job Title</label>
                                        <input type="text" class="form-control" name="job_title" value="">
                                    </div>
                                   <div class="form-group col-md-6">
                                        <label class="form-control-label">Specialization</label>
                                        <select name="id_specialization" class="form-control">
                                             
                                            <option value="none">Select Specialization</option>
                                            {foreach $specializations as $specialization}
                                            <option value="{$specialization['id']}">{$specialization['specialization']}</option>
                                     {/foreach}
                                            
                                        </select>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                   <div class="form-group col-md-6">
                                        <label class="form-control-label">Employment Type</label>
                                        <select name="employment_type" class="form-control">
                                        <option value="full">Full Time</option>
                                        <option value="part">Part Time</option>
                                        <option value="volunteer">Volunteer</option>
                                            
                                        </select>
                                    </div>

                                   <div class="form-group col-md-6">
                                        <label class="form-control-label">Grade</label>
                                        <select name="id_grade" class="form-control">
                                             
                                            <option value="none">Select Grade</option>
                                            {foreach $grades as $grade}
                                            <option value="{$grade['id']}">{$grade['grade']}</option>
                                     {/foreach}
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                   <div class="form-group col-md-6">
                                        <label class="form-control-label">Year of Experience</label>
                                        <select name="years" class="form-control">
                                             
                                           									<option value="0">< 1 years</option>
                   {for $i=1; $i < 6; $i++ }
                      <option value="{$i}">{$i} Years</option>

                    {/for}
                    
                    <option value="6">> 5 years</option>
                                            
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-control-label">Forecast Salary</label>
                                        <input type="text" class="form-control" name="salary" value="">
                                        <input  value="Y" id="chkIsTeamLead" name="negotiable" checked="" type="checkbox"> Negotiable
                                    </div>
                                    
                                </div>



                                <div class="form-group">
                                    <label class="form-control-label">Job Description</label>
                                    <textarea style="height:350px;" class="form-control" name="job_description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Qualification</label>
                                    <textarea style="height:350px;" class="form-control" name="qualification"></textarea>
                                </div>
                                <!-- custom fields -->
                                {if $custom_fields['basic']}
                                {include file='__custom_fields.tpl' _custom_fields=$custom_fields['basic'] _registration=false}
                                {/if}
                                <!-- custom fields -->

                                <!-- success -->
                                <div class="alert alert-success mb0 x-hidden"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 x-hidden"></div>
                                <!-- error -->
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
                            </div>
                        </form>
                        </div>
                        </div>