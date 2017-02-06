<?php if($this->session->userdata('is_user_login')!=TRUE): ?>


  <div class="candidatesection">
  
  <form action='http://localhost/mpower/index.php/search-jobs' METHOD='GET'>
    <input type="hidden" name="indpubnum" value="4087572496810901">
    
    <table cellspacing='0' style='font-family: arial'>
        
        <tr>
            <td><input name='q' value='' size='25'></td>
            <td><input name='l' value='' size=''></td>
            <td><input type='submit' value='Find Jobs'/></td>
        </tr>
        <tr>
            <td valign='top' style='font-size: 10px'>job title, keywords or company</td>
            <td colspan='2' valign='top' style='font-size: 10px; padding: 0; margin: 0; border: 0' >
                <table cellpadding='0' width='100%' style='padding: 0; margin: 0; border: 0'>
                    <tr>
                        <td valign='top' style='font-size: 10px; padding: 0; margin: 0; border: 0'>city, state or pin</td>
                        <td style='font-size: 13px' align='right'>
                            <!--span id=indeed_at>
                                <a title="Job Search" href="https://www.indeed.co.in/?indpubnum=4087572496810901" style="text-decoration: none; color: #000" rel="nofollow">
                                    jobs by <img alt=Indeed src='https://www.indeed.com/p/jobsearch.gif' style='border: 0; vertical-align: middle'>
                                </a>
                            </span-->
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
                            
  
  
  
  <h1>One million success stories. Start yours today.</h1>
  
  <?php echo form_open_multipart('job_search/search',array('name' => 'jsearch', 'id' => 'jsearch'));?>
    <div class="col-md-6">
          <input type="text" required name="job_params" id="job_params" class="form-control" placeholder="Job title or Skill" />                
    </div>
    
    <div class="col-md-5">
      <select class="form-control" name="jcity" id="jcity">
      	
        <option value="" selected>Select City</option>
        <?php if($cities_res): foreach($cities_res as $cities):?>
        	<option value="<?php echo $cities->city_name;?>"><?php echo $cities->city_name;?></option>
        <?php endforeach; endif;?>
      </select>
    </div>

    <div class="col-md-1">
      <input type="submit" name="job_submit" class="btn" id="job_submit" value="Search"  />
    </div>
<?php echo form_close();?> 

    <div class="clear"></div>
	
  </div>





  <div class="employersection">   
  <div class="banner-menu">
<ul>
<li><a href="#">San Francisco</a></li> |
<li><a href="#">Palo Alto</a></li>|
<li><a href="#">Mountain View</a></li>|
<li><a href="#">Sacramento</a></li>|
<li><a href="#">New York</a></li>|
<li><a href="#">United Kindom</a></li>|
<li><a href="#">Asia Pacific</a></li>
</ul>
</div>
      <!--h3>Get Started Now</h3-->
      <a href="<?php echo base_url('employer/post_new_job');?>" class="postjobbtn" title="Post Job"><i class="fa fa-user"></i> Post a Job</a>
	  <a href="<?php echo base_url('employer/post_new_job');?>" class="postjobbtn" title="Uplaod Resume" onClick="document.location='<?php echo base_url('login');?>'"><i class="fa fa-building-o"></i> Upload Resume</a>
      <!--input type="submit" value="Upload Resume" title="job search engine USA" class="btn" alt="job search engine USA" onClick="document.location='<?php echo base_url('login');?>'" /-->
      <div class="clear"></div>
    </div>


<?php else: 

if($this->session->userdata('is_employer')==TRUE): ?>
<div class="col-md-12">
  <div class="employersection">
    <div class="col-md-6 col-md-offset-3">
      <h1>Search Resume</h1>
      <?php echo form_open_multipart('resume_search/search',array('name' => 'rsearch', 'id' => 'rsearch'));?>
      <div class="input-group">
        <input type="text" name="resume_params" class="form-control" id="resume_params" placeholder="Search Resume with Skill or Job Title" />
        <span class="input-group-btn">
        <input type="submit" name="resume_submit" class="btn" id="resume_submit" value="Search" />
        </span> </div>
      <?php echo form_close();?> </div>
      <div class="col-md-12" style="margin-top: 10px;">
      <h1>New Company Get Started</h1>
      <a href="<?php echo base_url('employer/post_new_job');?>" class="postjobbtn" title="Post Jobs">Post a Job</a>
      <div class="clear"></div>
	  
    </div>
    <div class="clear"></div>
  </div>
</div>

<?php else: ?>
<div class="col-md-12">
  <div class="candidatesection">
    <div class="row">
    
    <div class="col-md-8 col-md-offset-2">
      <h1>Search a job</h1>
      <?php echo form_open_multipart('job_search/search',array('name' => 'jsearch', 'id' => 'jsearch'));?>
      <div class="input-group">
        <input type="text" name="job_params" id="job_params" class="form-control" placeholder="Job title or Skill" />
        <span class="input-group-btn">
        <input type="submit" name="job_submit" id="job_submit" class="btn" value="Find"  />
        </span> </div>
      <?php echo form_close();?> </div>
      
     <div class="col-md-12">
       <div class="employersection">
      <h3>Upload your resume</h3>
      <input type="submit" value="Upload Resume" title="job search " class="postjobbtn" alt="job search engine USA" onClick="document.location='<?php echo base_url('login');?>'" />
      </div>
	  
      <div class="clear"></div>
    </div> 
    </div>
    <div class="clear"></div>
  </div>
</div>

<?php endif;?>
<?php endif;?>
