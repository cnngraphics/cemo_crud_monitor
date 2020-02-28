
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Update.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedchecks
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_CLIENT_MAIN.'&view=mailingdataavmedchecks&do=updatepro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_CLIENT;?>&view=mailingdataavmedchecks&id=<?php echo $rows->id;?>&do=details" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mailingdataavmedchecks&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mailingdataavmedchecks&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_UPDATE;?> Mailingdataavmedchecks</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<input type="hidden" name="id" value="<?php echo $rows->id;?>">
	<div class="form-group">
    <label class="control-label sr-only" for="aAdd1">AAdd1</label>
	<div class="input-group-addon left">AAdd1</div>
	<input id="aAdd1" name="aAdd1" type="text" maxlength="255"  value="<?php echo $rows->aAdd1;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="aAdd2">AAdd2</label>
	<div class="input-group-addon left">AAdd2</div>
	<input id="aAdd2" name="aAdd2" type="text" maxlength="255"  value="<?php echo $rows->aAdd2;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="aAdd3">AAdd3</label>
	<div class="input-group-addon left">AAdd3</div>
	<input id="aAdd3" name="aAdd3" type="text" maxlength="255"  value="<?php echo $rows->aAdd3;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="aAdd4">AAdd4</label>
	<div class="input-group-addon left">AAdd4</div>
	<input id="aAdd4" name="aAdd4" type="text" maxlength="255"  value="<?php echo $rows->aAdd4;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="bAdd1">BAdd1</label>
	<div class="input-group-addon left">BAdd1</div>
	<input id="bAdd1" name="bAdd1" type="text" maxlength="255"  value="<?php echo $rows->bAdd1;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="bAdd2">BAdd2</label>
	<div class="input-group-addon left">BAdd2</div>
	<input id="bAdd2" name="bAdd2" type="text" maxlength="255"  value="<?php echo $rows->bAdd2;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="bAdd3">BAdd3</label>
	<div class="input-group-addon left">BAdd3</div>
	<input id="bAdd3" name="bAdd3" type="text" maxlength="255"  value="<?php echo $rows->bAdd3;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="bAdd4">BAdd4</label>
	<div class="input-group-addon left">BAdd4</div>
	<input id="bAdd4" name="bAdd4" type="text" maxlength="255"  value="<?php echo $rows->bAdd4;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="pAdd1">PAdd1</label>
	<div class="input-group-addon left">PAdd1</div>
	<input id="pAdd1" name="pAdd1" type="text" maxlength="255"  value="<?php echo $rows->pAdd1;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="pAdd2">PAdd2</label>
	<div class="input-group-addon left">PAdd2</div>
	<input id="pAdd2" name="pAdd2" type="text" maxlength="255"  value="<?php echo $rows->pAdd2;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="pAdd3">PAdd3</label>
	<div class="input-group-addon left">PAdd3</div>
	<input id="pAdd3" name="pAdd3" type="text" maxlength="255"  value="<?php echo $rows->pAdd3;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="pAdd4">PAdd4</label>
	<div class="input-group-addon left">PAdd4</div>
	<input id="pAdd4" name="pAdd4" type="text" maxlength="255"  value="<?php echo $rows->pAdd4;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="checkId">CheckId</label>
	<div class="input-group-addon left">CheckId</div>
	<input id="checkId" name="checkId" type="text" maxlength="255"  value="<?php echo $rows->checkId;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="checkNumber">CheckNumber</label>
	<div class="input-group-addon left">CheckNumber</div>
	<input id="checkNumber" name="checkNumber" type="text" maxlength="255"  value="<?php echo $rows->checkNumber;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="checkDate">CheckDate</label>
	<div class="input-group-addon left">CheckDate</div>
	<input id="checkDate" name="checkDate" type="text" maxlength="255"  value="<?php echo $rows->checkDate;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="checkAmount">CheckAmount</label>
	<div class="input-group-addon left">CheckAmount</div>
	<input id="checkAmount" name="checkAmount" type="text" maxlength="255"  value="<?php echo $rows->checkAmount;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="micrCheck">MicrCheck</label>
	<div class="input-group-addon left">MicrCheck</div>
	<input id="micrCheck" name="micrCheck" type="text" maxlength="255"  value="<?php echo $rows->micrCheck;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="micrRouting">MicrRouting</label>
	<div class="input-group-addon left">MicrRouting</div>
	<input id="micrRouting" name="micrRouting" type="text" maxlength="255"  value="<?php echo $rows->micrRouting;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="micrAccount">MicrAccount</label>
	<div class="input-group-addon left">MicrAccount</div>
	<input id="micrAccount" name="micrAccount" type="text" maxlength="255"  value="<?php echo $rows->micrAccount;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="seqNumber">SeqNumber</label>
	<div class="input-group-addon left">SeqNumber</div>
	<input id="seqNumber" name="seqNumber" type="text" maxlength="11"  value="<?php echo $rows->seqNumber;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="createdAt">CreatedAt</label>
	<div class="input-group-addon left">CreatedAt</div>
	<input name="createdAt" class="datepicker form-control styler" type="text" maxlength="11" value="<?php echo $rows->createdAt;?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="jobData_id">JobData Id</label>
	<div class="input-group-addon left">JobData Id</div>
	<input id="jobData_id" name="jobData_id" type="text" maxlength="20"  value="<?php echo $rows->jobData_id;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mailingDataFile_id">MailingDataFile Id</label>
	<div class="input-group-addon left">MailingDataFile Id</div>
	<input id="mailingDataFile_id" name="mailingDataFile_id" type="text" maxlength="20"  value="<?php echo $rows->mailingDataFile_id;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mailingPrintReadyFile_id">MailingPrintReadyFile Id</label>
	<div class="input-group-addon left">MailingPrintReadyFile Id</div>
	<input id="mailingPrintReadyFile_id" name="mailingPrintReadyFile_id" type="text" maxlength="20"  value="<?php echo $rows->mailingPrintReadyFile_id;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="discr">Discr</label>
	<div class="input-group-addon left">Discr</div>
	<input id="discr" name="discr" type="text" maxlength="255"  value="<?php echo $rows->discr;?>" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 