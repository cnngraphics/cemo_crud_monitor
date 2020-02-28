
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Update.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		jobdata
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_ADMIN_MAIN.'&view=jobdata&do=updatepro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_ADMIN;?>&view=jobdata&id=<?php echo $rows->id;?>&do=details" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=jobdata&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=jobdata&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_UPDATE;?> Jobdata</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<input type="hidden" name="id" value="<?php echo $rows->id;?>">
	<div class="form-group">
    <label class="control-label sr-only" for="createdAt">CreatedAt</label>
	<div class="input-group-addon left">CreatedAt</div>
	<input name="createdAt" class="datepicker form-control styler" type="text" maxlength="20" value="<?php echo $rows->createdAt;?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="finishedAt">FinishedAt</label>
	<div class="input-group-addon left">FinishedAt</div>
	<input name="finishedAt" class="datepicker form-control styler" type="text" maxlength="20" value="<?php echo $rows->finishedAt;?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="jobName">JobName</label>
	<div class="input-group-addon left">JobName</div>
	<input id="jobName" name="jobName" type="text" maxlength="255"  value="<?php echo $rows->jobName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="oiJobNumber">OiJobNumber</label>
	<div class="input-group-addon left">OiJobNumber</div>
	<input id="oiJobNumber" name="oiJobNumber" type="text" maxlength="255"  value="<?php echo $rows->oiJobNumber;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="status">Status</label>
	<div class="input-group-addon left">Status</div>
	<select name="status" id="status" class="required form-control styler choz">
	<option value="<?php echo $rows->status;?>"><?php echo $rows->status;?></option><option value="open">open</option>
	<option value="closed">closed</option>
	<option value="canceled">canceled</option>
	</select>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 