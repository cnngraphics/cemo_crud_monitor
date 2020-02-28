
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Add.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		jobinterfaceitem
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_CLIENT_MAIN.'&view=jobinterfaceitem&do=addpro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_CREATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_CREATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_CLIENT;?>&view=jobinterfaceitem&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_CREATE_NEW;?> Jobinterfaceitem</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<div class="form-group">
    <label class="control-label sr-only" for="dateInserted">DateInserted</label>
	<div class="input-group-addon left">DateInserted</div>
	<input name="dateInserted" class="datepicker form-control styler" type="text" maxlength="20" value="<?php echo date('Y-m-d');?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="name">Name</label>
	<div class="input-group-addon left">Name</div>
	<input id="name" name="name" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="value">Value</label>
	<div class="input-group-addon left">Value</div>
	<input id="value" name="value" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="jobData_id">JobData Id</label>
	<div class="input-group-addon left">JobData Id</div>
	<input id="jobData_id" name="jobData_id" type="text" maxlength="20"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="discr">Discr</label>
	<div class="input-group-addon left">Discr</div>
	<input id="discr" name="discr" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="pathDownloadLink">PathDownloadLink</label>
	<div class="input-group-addon left">PathDownloadLink</div>
	<input id="pathDownloadLink" name="pathDownloadLink" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="saveBy">SaveBy</label>
	<div class="input-group-addon left">SaveBy</div>
	<input id="saveBy" name="saveBy" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="pathUploadFolder">PathUploadFolder</label>
	<div class="input-group-addon left">PathUploadFolder</div>
	<input id="pathUploadFolder" name="pathUploadFolder" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="pathUploadFileName">PathUploadFileName</label>
	<div class="input-group-addon left">PathUploadFileName</div>
	<input id="pathUploadFileName" name="pathUploadFileName" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="ccToTrigger_id">CcToTrigger Id</label>
	<div class="input-group-addon left">CcToTrigger Id</div>
	<input id="ccToTrigger_id" name="ccToTrigger_id" type="text" maxlength="20"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="approvedAction">ApprovedAction</label>
	<div class="input-group-addon left">ApprovedAction</div>
	<input id="approvedAction" name="approvedAction" type="text" maxlength="1"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="dateApproved">DateApproved</label>
	<div class="input-group-addon left">DateApproved</div>
	<input name="dateApproved" class="datepicker form-control styler" type="text" maxlength="1" value="<?php echo date('Y-m-d');?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="approvedBy">ApprovedBy</label>
	<div class="input-group-addon left">ApprovedBy</div>
	<input id="approvedBy" name="approvedBy" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="dateModified">DateModified</label>
	<div class="input-group-addon left">DateModified</div>
	<input name="dateModified" class="datepicker form-control styler" type="text" maxlength="255" value="<?php echo date('Y-m-d');?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="approvedDisapproved">ApprovedDisapproved</label>
	<div class="input-group-addon left">ApprovedDisapproved</div>
	<input id="approvedDisapproved" name="approvedDisapproved" type="text" maxlength="6"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="dateApprovedDisapproved">DateApprovedDisapproved</label>
	<div class="input-group-addon left">DateApprovedDisapproved</div>
	<input name="dateApprovedDisapproved" class="datepicker form-control styler" type="text" maxlength="6" value="<?php echo date('Y-m-d');?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="approvedDisapprovedBy">ApprovedDisapprovedBy</label>
	<div class="input-group-addon left">ApprovedDisapprovedBy</div>
	<input id="approvedDisapprovedBy" name="approvedDisapprovedBy" type="text" maxlength="20"  value="" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_CREATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_CREATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 