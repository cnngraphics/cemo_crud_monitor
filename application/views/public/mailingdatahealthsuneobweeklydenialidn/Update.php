
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Update.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatahealthsuneobweeklydenialidn
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_CLIENT_MAIN.'&view=mailingdatahealthsuneobweeklydenialidn&do=updatepro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_CLIENT;?>&view=mailingdatahealthsuneobweeklydenialidn&id=<?php echo $rows->id;?>&do=details" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mailingdatahealthsuneobweeklydenialidn&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mailingdatahealthsuneobweeklydenialidn&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_UPDATE;?> Mailingdatahealthsuneobweeklydenialidn</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<input type="hidden" name="id" value="<?php echo $rows->id;?>">
	<div class="form-group">
    <label class="control-label sr-only" for="firstName">FirstName</label>
	<div class="input-group-addon left">FirstName</div>
	<input id="firstName" name="firstName" type="text" maxlength="255"  value="<?php echo $rows->firstName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="lastName">LastName</label>
	<div class="input-group-addon left">LastName</div>
	<input id="lastName" name="lastName" type="text" maxlength="255"  value="<?php echo $rows->lastName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="middleName">MiddleName</label>
	<div class="input-group-addon left">MiddleName</div>
	<input id="middleName" name="middleName" type="text" maxlength="255"  value="<?php echo $rows->middleName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="fullName">FullName</label>
	<div class="input-group-addon left">FullName</div>
	<input id="fullName" name="fullName" type="text" maxlength="255"  value="<?php echo $rows->fullName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="address1">Address1</label>
	<div class="input-group-addon left">Address1</div>
	<input id="address1" name="address1" type="text" maxlength="255"  value="<?php echo $rows->address1;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mmAddress1">MmAddress1</label>
	<div class="input-group-addon left">MmAddress1</div>
	<input id="mmAddress1" name="mmAddress1" type="text" maxlength="255"  value="<?php echo $rows->mmAddress1;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="address2">Address2</label>
	<div class="input-group-addon left">Address2</div>
	<input id="address2" name="address2" type="text" maxlength="255"  value="<?php echo $rows->address2;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mmAddress2">MmAddress2</label>
	<div class="input-group-addon left">MmAddress2</div>
	<input id="mmAddress2" name="mmAddress2" type="text" maxlength="255"  value="<?php echo $rows->mmAddress2;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="city">City</label>
	<div class="input-group-addon left">City</div>
	<input id="city" name="city" type="text" maxlength="255"  value="<?php echo $rows->city;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mmCity">MmCity</label>
	<div class="input-group-addon left">MmCity</div>
	<input id="mmCity" name="mmCity" type="text" maxlength="255"  value="<?php echo $rows->mmCity;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="state">State</label>
	<div class="input-group-addon left">State</div>
	<input id="state" name="state" type="text" maxlength="255"  value="<?php echo $rows->state;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mmState">MmState</label>
	<div class="input-group-addon left">MmState</div>
	<input id="mmState" name="mmState" type="text" maxlength="255"  value="<?php echo $rows->mmState;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="zipCode">ZipCode</label>
	<div class="input-group-addon left">ZipCode</div>
	<input id="zipCode" name="zipCode" type="text" maxlength="255"  value="<?php echo $rows->zipCode;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mmZipCode">MmZipCode</label>
	<div class="input-group-addon left">MmZipCode</div>
	<input id="mmZipCode" name="mmZipCode" type="text" maxlength="255"  value="<?php echo $rows->mmZipCode;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="country">Country</label>
	<div class="input-group-addon left">Country</div>
	<input id="country" name="country" type="text" maxlength="255"  value="<?php echo $rows->country;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mmCountry">MmCountry</label>
	<div class="input-group-addon left">MmCountry</div>
	<input id="mmCountry" name="mmCountry" type="text" maxlength="255"  value="<?php echo $rows->mmCountry;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mmImb">MmImb</label>
	<div class="input-group-addon left">MmImb</div>
	<input id="mmImb" name="mmImb" type="text" maxlength="255"  value="<?php echo $rows->mmImb;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mmOpt">MmOpt</label>
	<div class="input-group-addon left">MmOpt</div>
	<input id="mmOpt" name="mmOpt" type="text" maxlength="255"  value="<?php echo $rows->mmOpt;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mmReturnCode">MmReturnCode</label>
	<div class="input-group-addon left">MmReturnCode</div>
	<input id="mmReturnCode" name="mmReturnCode" type="text" maxlength="255"  value="<?php echo $rows->mmReturnCode;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mmDpv">MmDpv</label>
	<div class="input-group-addon left">MmDpv</div>
	<input id="mmDpv" name="mmDpv" type="text" maxlength="255"  value="<?php echo $rows->mmDpv;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mmOrder">MmOrder</label>
	<div class="input-group-addon left">MmOrder</div>
	<input id="mmOrder" name="mmOrder" type="text" maxlength="20"  value="<?php echo $rows->mmOrder;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mmCOAMoveToDate">MmCOAMoveToDate</label>
	<div class="input-group-addon left">MmCOAMoveToDate</div>
	<input name="mmCOAMoveToDate" class="datepicker form-control styler" type="text" maxlength="20" value="<?php echo $rows->mmCOAMoveToDate;?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mmCOAMoveType">MmCOAMoveType</label>
	<div class="input-group-addon left">MmCOAMoveType</div>
	<input id="mmCOAMoveType" name="mmCOAMoveType" type="text" maxlength="255"  value="<?php echo $rows->mmCOAMoveType;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="pdfLocation">PdfLocation</label>
	<div class="input-group-addon left">PdfLocation</div>
	<input id="pdfLocation" name="pdfLocation" type="text" maxlength="255"  value="<?php echo $rows->pdfLocation;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="pdfTotPages">PdfTotPages</label>
	<div class="input-group-addon left">PdfTotPages</div>
	<input id="pdfTotPages" name="pdfTotPages" type="text" maxlength="11"  value="<?php echo $rows->pdfTotPages;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="generic1">Generic1</label>
	<div class="input-group-addon left">Generic1</div>
	<input id="generic1" name="generic1" type="text" maxlength="255"  value="<?php echo $rows->generic1;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="generic2">Generic2</label>
	<div class="input-group-addon left">Generic2</div>
	<input id="generic2" name="generic2" type="text" maxlength="255"  value="<?php echo $rows->generic2;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mmImbDigi">MmImbDigi</label>
	<div class="input-group-addon left">MmImbDigi</div>
	<input id="mmImbDigi" name="mmImbDigi" type="text" maxlength="255"  value="<?php echo $rows->mmImbDigi;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="sourceFileName">SourceFileName</label>
	<div class="input-group-addon left">SourceFileName</div>
	<input id="sourceFileName" name="sourceFileName" type="text" maxlength="255"  value="<?php echo $rows->sourceFileName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="documentDate">DocumentDate</label>
	<div class="input-group-addon left">DocumentDate</div>
	<input name="documentDate" class="datepicker form-control styler" type="text" maxlength="255" value="<?php echo $rows->documentDate;?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="processDate">ProcessDate</label>
	<div class="input-group-addon left">ProcessDate</div>
	<input name="processDate" class="datepicker form-control styler" type="text" maxlength="255" value="<?php echo $rows->processDate;?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="seqNumber">SeqNumber</label>
	<div class="input-group-addon left">SeqNumber</div>
	<input id="seqNumber" name="seqNumber" type="text" maxlength="11"  value="<?php echo $rows->seqNumber;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="memberNumber">MemberNumber</label>
	<div class="input-group-addon left">MemberNumber</div>
	<input id="memberNumber" name="memberNumber" type="text" maxlength="255"  value="<?php echo $rows->memberNumber;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="claimId">ClaimId</label>
	<div class="input-group-addon left">ClaimId</div>
	<input id="claimId" name="claimId" type="text" maxlength="255"  value="<?php echo $rows->claimId;?>" class="form-control styler" required/>
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

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 