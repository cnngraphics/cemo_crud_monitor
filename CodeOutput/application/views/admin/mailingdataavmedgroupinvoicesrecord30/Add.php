
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Add.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord30
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_ADMIN_MAIN.'&view=mailingdataavmedgroupinvoicesrecord30&do=addpro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_CREATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_CREATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_ADMIN;?>&view=mailingdataavmedgroupinvoicesrecord30&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_CREATE_NEW;?> Mailingdataavmedgroupinvoicesrecord30</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<div class="form-group">
    <label class="control-label sr-only" for="parent_id">Parent Id</label>
	<div class="input-group-addon left">Parent Id</div>
	<input id="parent_id" name="parent_id" type="text" maxlength="20"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="invNo">InvNo</label>
	<div class="input-group-addon left">InvNo</div>
	<input id="invNo" name="invNo" type="text" maxlength="12"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="contractNo">ContractNo</label>
	<div class="input-group-addon left">ContractNo</div>
	<input id="contractNo" name="contractNo" type="text" maxlength="12"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="lastName">LastName</label>
	<div class="input-group-addon left">LastName</div>
	<input id="lastName" name="lastName" type="text" maxlength="14"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="firstName">FirstName</label>
	<div class="input-group-addon left">FirstName</div>
	<input id="firstName" name="firstName" type="text" maxlength="14"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="divisionNo">DivisionNo</label>
	<div class="input-group-addon left">DivisionNo</div>
	<input id="divisionNo" name="divisionNo" type="text" maxlength="10"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="spanEffDate">SpanEffDate</label>
	<div class="input-group-addon left">SpanEffDate</div>
	<input id="spanEffDate" name="spanEffDate" type="text" maxlength="8"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="premFromDate">PremFromDate</label>
	<div class="input-group-addon left">PremFromDate</div>
	<input id="premFromDate" name="premFromDate" type="text" maxlength="8"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="premToDate">PremToDate</label>
	<div class="input-group-addon left">PremToDate</div>
	<input id="premToDate" name="premToDate" type="text" maxlength="8"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="premContType">PremContType</label>
	<div class="input-group-addon left">PremContType</div>
	<input id="premContType" name="premContType" type="text" maxlength="2"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="familySize">FamilySize</label>
	<div class="input-group-addon left">FamilySize</div>
	<input id="familySize" name="familySize" type="text" maxlength="2"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="premAmount">PremAmount</label>
	<div class="input-group-addon left">PremAmount</div>
	<input id="premAmount" name="premAmount" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="nbrDayMonths">NbrDayMonths</label>
	<div class="input-group-addon left">NbrDayMonths</div>
	<input id="nbrDayMonths" name="nbrDayMonths" type="text" maxlength="3"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="premAmtEntry1">PremAmtEntry1</label>
	<div class="input-group-addon left">PremAmtEntry1</div>
	<input id="premAmtEntry1" name="premAmtEntry1" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="premAmtEntry2">PremAmtEntry2</label>
	<div class="input-group-addon left">PremAmtEntry2</div>
	<input id="premAmtEntry2" name="premAmtEntry2" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="premAmtEntry3">PremAmtEntry3</label>
	<div class="input-group-addon left">PremAmtEntry3</div>
	<input id="premAmtEntry3" name="premAmtEntry3" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="premAmtEntry4">PremAmtEntry4</label>
	<div class="input-group-addon left">PremAmtEntry4</div>
	<input id="premAmtEntry4" name="premAmtEntry4" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="premAmtEntry5">PremAmtEntry5</label>
	<div class="input-group-addon left">PremAmtEntry5</div>
	<input id="premAmtEntry5" name="premAmtEntry5" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="premAmtEntry6">PremAmtEntry6</label>
	<div class="input-group-addon left">PremAmtEntry6</div>
	<input id="premAmtEntry6" name="premAmtEntry6" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="premAmtEntry7">PremAmtEntry7</label>
	<div class="input-group-addon left">PremAmtEntry7</div>
	<input id="premAmtEntry7" name="premAmtEntry7" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="premAmtEntry8">PremAmtEntry8</label>
	<div class="input-group-addon left">PremAmtEntry8</div>
	<input id="premAmtEntry8" name="premAmtEntry8" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="premAmtEntry9">PremAmtEntry9</label>
	<div class="input-group-addon left">PremAmtEntry9</div>
	<input id="premAmtEntry9" name="premAmtEntry9" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="premAmtEntry10">PremAmtEntry10</label>
	<div class="input-group-addon left">PremAmtEntry10</div>
	<input id="premAmtEntry10" name="premAmtEntry10" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="premAmtEntry11">PremAmtEntry11</label>
	<div class="input-group-addon left">PremAmtEntry11</div>
	<input id="premAmtEntry11" name="premAmtEntry11" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="premAmtEntry12">PremAmtEntry12</label>
	<div class="input-group-addon left">PremAmtEntry12</div>
	<input id="premAmtEntry12" name="premAmtEntry12" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_CREATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_CREATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 