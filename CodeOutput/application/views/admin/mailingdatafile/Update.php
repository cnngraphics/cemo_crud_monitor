
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Update.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatafile
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_ADMIN_MAIN.'&view=mailingdatafile&do=updatepro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_ADMIN;?>&view=mailingdatafile&id=<?php echo $rows->id;?>&do=details" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdatafile&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdatafile&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_UPDATE;?> Mailingdatafile</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<input type="hidden" name="id" value="<?php echo $rows->id;?>">
	<div class="form-group">
    <label class="control-label sr-only" for="header_id">Header Id</label>
	<div class="input-group-addon left">Header Id</div>
	<input id="header_id" name="header_id" type="text" maxlength="20"  value="<?php echo $rows->header_id;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="footer_id">Footer Id</label>
	<div class="input-group-addon left">Footer Id</div>
	<input id="footer_id" name="footer_id" type="text" maxlength="20"  value="<?php echo $rows->footer_id;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="fileName">FileName</label>
	<div class="input-group-addon left">FileName</div>
	<input id="fileName" name="fileName" type="text" maxlength="255"  value="<?php echo $rows->fileName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="fileNameMm">FileNameMm</label>
	<div class="input-group-addon left">FileNameMm</div>
	<input id="fileNameMm" name="fileNameMm" type="text" maxlength="255"  value="<?php echo $rows->fileNameMm;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="createdAt">CreatedAt</label>
	<div class="input-group-addon left">CreatedAt</div>
	<input name="createdAt" class="datepicker form-control styler" type="text" maxlength="255" value="<?php echo $rows->createdAt;?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="jobData_id">JobData Id</label>
	<div class="input-group-addon left">JobData Id</div>
	<input id="jobData_id" name="jobData_id" type="text" maxlength="20"  value="<?php echo $rows->jobData_id;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="discr">Discr</label>
	<div class="input-group-addon left">Discr</div>
	<input id="discr" name="discr" type="text" maxlength="255"  value="<?php echo $rows->discr;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="totalRecords">TotalRecords</label>
	<div class="input-group-addon left">TotalRecords</div>
	<input id="totalRecords" name="totalRecords" type="text" maxlength="11"  value="<?php echo $rows->totalRecords;?>" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 