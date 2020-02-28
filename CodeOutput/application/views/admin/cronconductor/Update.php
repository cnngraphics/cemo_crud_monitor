
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Update.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		cronconductor
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_ADMIN_MAIN.'&view=cronconductor&do=updatepro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_ADMIN;?>&view=cronconductor&id=<?php echo $rows->id;?>&do=details" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=cronconductor&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=cronconductor&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_UPDATE;?> Cronconductor</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<input type="hidden" name="id" value="<?php echo $rows->id;?>">
	<div class="form-group">
    <label class="control-label sr-only" for="cronFunction">CronFunction</label>
	<div class="input-group-addon left">CronFunction</div>
	<input id="cronFunction" name="cronFunction" type="text" maxlength="255"  value="<?php echo $rows->cronFunction;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="timeAdded">TimeAdded</label>
	<div class="input-group-addon left">TimeAdded</div>
	<input id="timeAdded" name="timeAdded" type="text" maxlength="255"  value="<?php echo $rows->timeAdded;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="addedBy">AddedBy</label>
	<div class="input-group-addon left">AddedBy</div>
	<input id="addedBy" name="addedBy" type="text" maxlength="11"  value="<?php echo $rows->addedBy;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="timeToRun">TimeToRun</label>
	<div class="input-group-addon left">TimeToRun</div>
	<input name="timeToRun" class="datepicker form-control styler" type="text" maxlength="11" value="<?php echo $rows->timeToRun;?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="timeRan">TimeRan</label>
	<div class="input-group-addon left">TimeRan</div>
	<input name="timeRan" class="datepicker form-control styler" type="text" maxlength="11" value="<?php echo $rows->timeRan;?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="timeNeededToRun">TimeNeededToRun</label>
	<div class="input-group-addon left">TimeNeededToRun</div>
	<input name="timeNeededToRun" class="datepicker form-control styler" type="text" maxlength="11" value="<?php echo $rows->timeNeededToRun;?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="ranBy">RanBy</label>
	<div class="input-group-addon left">RanBy</div>
	<input id="ranBy" name="ranBy" type="text" maxlength="11"  value="<?php echo $rows->ranBy;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="timeFinished">TimeFinished</label>
	<div class="input-group-addon left">TimeFinished</div>
	<input name="timeFinished" class="datepicker form-control styler" type="text" maxlength="11" value="<?php echo $rows->timeFinished;?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="error">Error</label>
	<div class="input-group-addon left">Error</div>
	<textarea rows="5" id="error" name="error" class="form-control editor1 styler" required/><?php echo $rows->error;?></textarea>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="sleeping">Sleeping</label>
	<div class="input-group-addon left">Sleeping</div>
	<input id="sleeping" name="sleeping" type="text" maxlength="1"  value="<?php echo $rows->sleeping;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="jobData_id">JobData Id</label>
	<div class="input-group-addon left">JobData Id</div>
	<input id="jobData_id" name="jobData_id" type="text" maxlength="20"  value="<?php echo $rows->jobData_id;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="clientData_id">ClientData Id</label>
	<div class="input-group-addon left">ClientData Id</div>
	<input id="clientData_id" name="clientData_id" type="text" maxlength="20"  value="<?php echo $rows->clientData_id;?>" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 