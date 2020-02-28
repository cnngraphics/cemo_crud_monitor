
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Update.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedmedeobquarterlyrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_ADMIN_MAIN.'&view=mailingdataavmedmedeobquarterlyrecord&do=updatepro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_ADMIN;?>&view=mailingdataavmedmedeobquarterlyrecord&id=<?php echo $rows->id;?>&do=details" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdataavmedmedeobquarterlyrecord&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdataavmedmedeobquarterlyrecord&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_UPDATE;?> Mailingdataavmedmedeobquarterlyrecord</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<input type="hidden" name="id" value="<?php echo $rows->id;?>">
	<div class="form-group">
    <label class="control-label sr-only" for="parent_id">Parent Id</label>
	<div class="input-group-addon left">Parent Id</div>
	<input id="parent_id" name="parent_id" type="text" maxlength="20"  value="<?php echo $rows->parent_id;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="page">Page</label>
	<div class="input-group-addon left">Page</div>
	<input id="page" name="page" type="text" maxlength="11"  value="<?php echo $rows->page;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="pageDate">PageDate</label>
	<div class="input-group-addon left">PageDate</div>
	<input id="pageDate" name="pageDate" type="text" maxlength="10"  value="<?php echo $rows->pageDate;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="quarterPeriodStart">QuarterPeriodStart</label>
	<div class="input-group-addon left">QuarterPeriodStart</div>
	<input id="quarterPeriodStart" name="quarterPeriodStart" type="text" maxlength="10"  value="<?php echo $rows->quarterPeriodStart;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="quarterPeriodEnd">QuarterPeriodEnd</label>
	<div class="input-group-addon left">QuarterPeriodEnd</div>
	<input id="quarterPeriodEnd" name="quarterPeriodEnd" type="text" maxlength="10"  value="<?php echo $rows->quarterPeriodEnd;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="memberNumber">MemberNumber</label>
	<div class="input-group-addon left">MemberNumber</div>
	<input id="memberNumber" name="memberNumber" type="text" maxlength="14"  value="<?php echo $rows->memberNumber;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="name">Name</label>
	<div class="input-group-addon left">Name</div>
	<input id="name" name="name" type="text" maxlength="36"  value="<?php echo $rows->name;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="address">Address</label>
	<div class="input-group-addon left">Address</div>
	<input id="address" name="address" type="text" maxlength="93"  value="<?php echo $rows->address;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="city">City</label>
	<div class="input-group-addon left">City</div>
	<input id="city" name="city" type="text" maxlength="23"  value="<?php echo $rows->city;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="state">State</label>
	<div class="input-group-addon left">State</div>
	<input id="state" name="state" type="text" maxlength="5"  value="<?php echo $rows->state;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="zip">Zip</label>
	<div class="input-group-addon left">Zip</div>
	<input id="zip" name="zip" type="text" maxlength="10"  value="<?php echo $rows->zip;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="billedAmountQuarter">BilledAmountQuarter</label>
	<div class="input-group-addon left">BilledAmountQuarter</div>
	<input id="billedAmountQuarter" name="billedAmountQuarter" type="text" maxlength="25"  value="<?php echo $rows->billedAmountQuarter;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="allowedAmountQuarter">AllowedAmountQuarter</label>
	<div class="input-group-addon left">AllowedAmountQuarter</div>
	<input id="allowedAmountQuarter" name="allowedAmountQuarter" type="text" maxlength="25"  value="<?php echo $rows->allowedAmountQuarter;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="paidAmountQuarter">PaidAmountQuarter</label>
	<div class="input-group-addon left">PaidAmountQuarter</div>
	<input id="paidAmountQuarter" name="paidAmountQuarter" type="text" maxlength="25"  value="<?php echo $rows->paidAmountQuarter;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="memberResponsibilityQuarter">MemberResponsibilityQuarter</label>
	<div class="input-group-addon left">MemberResponsibilityQuarter</div>
	<input id="memberResponsibilityQuarter" name="memberResponsibilityQuarter" type="text" maxlength="25"  value="<?php echo $rows->memberResponsibilityQuarter;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="billedAmountYear">BilledAmountYear</label>
	<div class="input-group-addon left">BilledAmountYear</div>
	<input id="billedAmountYear" name="billedAmountYear" type="text" maxlength="25"  value="<?php echo $rows->billedAmountYear;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="allowedAmountYear">AllowedAmountYear</label>
	<div class="input-group-addon left">AllowedAmountYear</div>
	<input id="allowedAmountYear" name="allowedAmountYear" type="text" maxlength="25"  value="<?php echo $rows->allowedAmountYear;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="paidAmountYear">PaidAmountYear</label>
	<div class="input-group-addon left">PaidAmountYear</div>
	<input id="paidAmountYear" name="paidAmountYear" type="text" maxlength="25"  value="<?php echo $rows->paidAmountYear;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="memberResponsibilityYear">MemberResponsibilityYear</label>
	<div class="input-group-addon left">MemberResponsibilityYear</div>
	<input id="memberResponsibilityYear" name="memberResponsibilityYear" type="text" maxlength="25"  value="<?php echo $rows->memberResponsibilityYear;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="oopUsedYear">OopUsedYear</label>
	<div class="input-group-addon left">OopUsedYear</div>
	<input id="oopUsedYear" name="oopUsedYear" type="text" maxlength="25"  value="<?php echo $rows->oopUsedYear;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="oopMaxYear">OopMaxYear</label>
	<div class="input-group-addon left">OopMaxYear</div>
	<input id="oopMaxYear" name="oopMaxYear" type="text" maxlength="25"  value="<?php echo $rows->oopMaxYear;?>" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 