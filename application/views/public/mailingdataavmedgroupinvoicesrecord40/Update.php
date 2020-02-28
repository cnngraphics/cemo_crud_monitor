
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Update.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord40
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_CLIENT_MAIN.'&view=mailingdataavmedgroupinvoicesrecord40&do=updatepro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_CLIENT;?>&view=mailingdataavmedgroupinvoicesrecord40&id=<?php echo $rows->id;?>&do=details" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mailingdataavmedgroupinvoicesrecord40&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mailingdataavmedgroupinvoicesrecord40&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_UPDATE;?> Mailingdataavmedgroupinvoicesrecord40</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<input type="hidden" name="id" value="<?php echo $rows->id;?>">
	<div class="form-group">
    <label class="control-label sr-only" for="parent_id">Parent Id</label>
	<div class="input-group-addon left">Parent Id</div>
	<input id="parent_id" name="parent_id" type="text" maxlength="20"  value="<?php echo $rows->parent_id;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="invNo">InvNo</label>
	<div class="input-group-addon left">InvNo</div>
	<input id="invNo" name="invNo" type="text" maxlength="12"  value="<?php echo $rows->invNo;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="contractNo">ContractNo</label>
	<div class="input-group-addon left">ContractNo</div>
	<input id="contractNo" name="contractNo" type="text" maxlength="12"  value="<?php echo $rows->contractNo;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="lastName">LastName</label>
	<div class="input-group-addon left">LastName</div>
	<input id="lastName" name="lastName" type="text" maxlength="14"  value="<?php echo $rows->lastName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="firstName">FirstName</label>
	<div class="input-group-addon left">FirstName</div>
	<input id="firstName" name="firstName" type="text" maxlength="14"  value="<?php echo $rows->firstName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="divisionNo">DivisionNo</label>
	<div class="input-group-addon left">DivisionNo</div>
	<input id="divisionNo" name="divisionNo" type="text" maxlength="10"  value="<?php echo $rows->divisionNo;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="adjEffDate">AdjEffDate</label>
	<div class="input-group-addon left">AdjEffDate</div>
	<input id="adjEffDate" name="adjEffDate" type="text" maxlength="8"  value="<?php echo $rows->adjEffDate;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="adjEndDate">AdjEndDate</label>
	<div class="input-group-addon left">AdjEndDate</div>
	<input id="adjEndDate" name="adjEndDate" type="text" maxlength="8"  value="<?php echo $rows->adjEndDate;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="adjContType">AdjContType</label>
	<div class="input-group-addon left">AdjContType</div>
	<input id="adjContType" name="adjContType" type="text" maxlength="2"  value="<?php echo $rows->adjContType;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="adjRemark">AdjRemark</label>
	<div class="input-group-addon left">AdjRemark</div>
	<input id="adjRemark" name="adjRemark" type="text" maxlength="16"  value="<?php echo $rows->adjRemark;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="adjAmount">AdjAmount</label>
	<div class="input-group-addon left">AdjAmount</div>
	<input id="adjAmount" name="adjAmount" type="text" maxlength="11"  value="<?php echo $rows->adjAmount;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="nbrDaysMonths">NbrDaysMonths</label>
	<div class="input-group-addon left">NbrDaysMonths</div>
	<input id="nbrDaysMonths" name="nbrDaysMonths" type="text" maxlength="3"  value="<?php echo $rows->nbrDaysMonths;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="adjAmountEntry1">AdjAmountEntry1</label>
	<div class="input-group-addon left">AdjAmountEntry1</div>
	<input id="adjAmountEntry1" name="adjAmountEntry1" type="text" maxlength="11"  value="<?php echo $rows->adjAmountEntry1;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="adjAmountEntry2">AdjAmountEntry2</label>
	<div class="input-group-addon left">AdjAmountEntry2</div>
	<input id="adjAmountEntry2" name="adjAmountEntry2" type="text" maxlength="11"  value="<?php echo $rows->adjAmountEntry2;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="adjAmountEntry3">AdjAmountEntry3</label>
	<div class="input-group-addon left">AdjAmountEntry3</div>
	<input id="adjAmountEntry3" name="adjAmountEntry3" type="text" maxlength="11"  value="<?php echo $rows->adjAmountEntry3;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="adjAmountEntry4">AdjAmountEntry4</label>
	<div class="input-group-addon left">AdjAmountEntry4</div>
	<input id="adjAmountEntry4" name="adjAmountEntry4" type="text" maxlength="11"  value="<?php echo $rows->adjAmountEntry4;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="adjAmountEntry5">AdjAmountEntry5</label>
	<div class="input-group-addon left">AdjAmountEntry5</div>
	<input id="adjAmountEntry5" name="adjAmountEntry5" type="text" maxlength="11"  value="<?php echo $rows->adjAmountEntry5;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="adjAmountEntry6">AdjAmountEntry6</label>
	<div class="input-group-addon left">AdjAmountEntry6</div>
	<input id="adjAmountEntry6" name="adjAmountEntry6" type="text" maxlength="11"  value="<?php echo $rows->adjAmountEntry6;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="adjAmountEntry7">AdjAmountEntry7</label>
	<div class="input-group-addon left">AdjAmountEntry7</div>
	<input id="adjAmountEntry7" name="adjAmountEntry7" type="text" maxlength="11"  value="<?php echo $rows->adjAmountEntry7;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="adjAmountEntry8">AdjAmountEntry8</label>
	<div class="input-group-addon left">AdjAmountEntry8</div>
	<input id="adjAmountEntry8" name="adjAmountEntry8" type="text" maxlength="11"  value="<?php echo $rows->adjAmountEntry8;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="adjAmountEntry9">AdjAmountEntry9</label>
	<div class="input-group-addon left">AdjAmountEntry9</div>
	<input id="adjAmountEntry9" name="adjAmountEntry9" type="text" maxlength="11"  value="<?php echo $rows->adjAmountEntry9;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="adjAmountEntry10">AdjAmountEntry10</label>
	<div class="input-group-addon left">AdjAmountEntry10</div>
	<input id="adjAmountEntry10" name="adjAmountEntry10" type="text" maxlength="11"  value="<?php echo $rows->adjAmountEntry10;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="adjAmountEntry11">AdjAmountEntry11</label>
	<div class="input-group-addon left">AdjAmountEntry11</div>
	<input id="adjAmountEntry11" name="adjAmountEntry11" type="text" maxlength="11"  value="<?php echo $rows->adjAmountEntry11;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="adjAmountEntry12">AdjAmountEntry12</label>
	<div class="input-group-addon left">AdjAmountEntry12</div>
	<input id="adjAmountEntry12" name="adjAmountEntry12" type="text" maxlength="11"  value="<?php echo $rows->adjAmountEntry12;?>" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 