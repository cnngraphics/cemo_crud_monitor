
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Add.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataprincess
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_ADMIN_MAIN.'&view=mailingdataprincess&do=addpro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_CREATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_CREATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_ADMIN;?>&view=mailingdataprincess&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_CREATE_NEW;?> Mailingdataprincess</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<div class="form-group">
    <label class="control-label sr-only" for="job">Job</label>
	<div class="input-group-addon left">Job</div>
	<input id="job" name="job" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="sailDate">SailDate</label>
	<div class="input-group-addon left">SailDate</div>
	<input name="sailDate" class="datepicker form-control styler" type="text" maxlength="11" value="<?php echo date('Y-m-d');?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="counter">Counter</label>
	<div class="input-group-addon left">Counter</div>
	<input id="counter" name="counter" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="firstName">FirstName</label>
	<div class="input-group-addon left">FirstName</div>
	<input id="firstName" name="firstName" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="lastName">LastName</label>
	<div class="input-group-addon left">LastName</div>
	<input id="lastName" name="lastName" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="companionF">CompanionF</label>
	<div class="input-group-addon left">CompanionF</div>
	<input id="companionF" name="companionF" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="companionL">CompanionL</label>
	<div class="input-group-addon left">CompanionL</div>
	<input id="companionL" name="companionL" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="cabinNumber">CabinNumber</label>
	<div class="input-group-addon left">CabinNumber</div>
	<input id="cabinNumber" name="cabinNumber" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="greeting">Greeting</label>
	<div class="input-group-addon left">Greeting</div>
	<input id="greeting" name="greeting" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="expirationDate">ExpirationDate</label>
	<div class="input-group-addon left">ExpirationDate</div>
	<input name="expirationDate" class="datepicker form-control styler" type="text" maxlength="255" value="<?php echo date('Y-m-d');?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="celebration">Celebration</label>
	<div class="input-group-addon left">Celebration</div>
	<input id="celebration" name="celebration" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="voyageId">VoyageId</label>
	<div class="input-group-addon left">VoyageId</div>
	<input id="voyageId" name="voyageId" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="uniqueId">UniqueId</label>
	<div class="input-group-addon left">UniqueId</div>
	<input id="uniqueId" name="uniqueId" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="offer">Offer</label>
	<div class="input-group-addon left">Offer</div>
	<input id="offer" name="offer" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="numCardsInHolder">NumCardsInHolder</label>
	<div class="input-group-addon left">NumCardsInHolder</div>
	<input id="numCardsInHolder" name="numCardsInHolder" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="value">Value</label>
	<div class="input-group-addon left">Value</div>
	<input id="value" name="value" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="disclaimer">Disclaimer</label>
	<div class="input-group-addon left">Disclaimer</div>
	<input id="disclaimer" name="disclaimer" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="justBecause">JustBecause</label>
	<div class="input-group-addon left">JustBecause</div>
	<input id="justBecause" name="justBecause" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mailingDataFile_id">MailingDataFile Id</label>
	<div class="input-group-addon left">MailingDataFile Id</div>
	<input id="mailingDataFile_id" name="mailingDataFile_id" type="text" maxlength="20"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mailingPrintReadyFile_id">MailingPrintReadyFile Id</label>
	<div class="input-group-addon left">MailingPrintReadyFile Id</div>
	<input id="mailingPrintReadyFile_id" name="mailingPrintReadyFile_id" type="text" maxlength="20"  value="" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_CREATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_CREATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 