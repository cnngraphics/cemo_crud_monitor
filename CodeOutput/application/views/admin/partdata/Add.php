
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Add.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		partdata
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_ADMIN_MAIN.'&view=partdata&do=addpro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_CREATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_CREATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_ADMIN;?>&view=partdata&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_CREATE_NEW;?> Partdata</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<div class="form-group">
    <label class="control-label sr-only" for="sourceFileName">SourceFileName</label>
	<div class="input-group-addon left">SourceFileName</div>
	<input id="sourceFileName" name="sourceFileName" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="campaign">Campaign</label>
	<div class="input-group-addon left">Campaign</div>
	<input id="campaign" name="campaign" type="text" maxlength="60"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mailing">Mailing</label>
	<div class="input-group-addon left">Mailing</div>
	<input id="mailing" name="mailing" type="text" maxlength="60"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="originalFileName">OriginalFileName</label>
	<div class="input-group-addon left">OriginalFileName</div>
	<input id="originalFileName" name="originalFileName" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="fileReceived">FileReceived</label>
	<div class="input-group-addon left">FileReceived</div>
	<input id="fileReceived" name="fileReceived" type="text" maxlength="21"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="filePrinted">FilePrinted</label>
	<div class="input-group-addon left">FilePrinted</div>
	<input id="filePrinted" name="filePrinted" type="text" maxlength="21"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="memberId">MemberId</label>
	<div class="input-group-addon left">MemberId</div>
	<input id="memberId" name="memberId" type="text" maxlength="20"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="name">Name</label>
	<div class="input-group-addon left">Name</div>
	<input id="name" name="name" type="text" maxlength="100"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="address1">Address1</label>
	<div class="input-group-addon left">Address1</div>
	<input id="address1" name="address1" type="text" maxlength="100"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="address2">Address2</label>
	<div class="input-group-addon left">Address2</div>
	<input id="address2" name="address2" type="text" maxlength="100"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="city">City</label>
	<div class="input-group-addon left">City</div>
	<input id="city" name="city" type="text" maxlength="100"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="state">State</label>
	<div class="input-group-addon left">State</div>
	<input id="state" name="state" type="text" maxlength="20"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="zip">Zip</label>
	<div class="input-group-addon left">Zip</div>
	<input id="zip" name="zip" type="text" maxlength="12"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="jobId">JobId</label>
	<div class="input-group-addon left">JobId</div>
	<input id="jobId" name="jobId" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="pdfFileName">PdfFileName</label>
	<div class="input-group-addon left">PdfFileName</div>
	<input id="pdfFileName" name="pdfFileName" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="sheetCount">SheetCount</label>
	<div class="input-group-addon left">SheetCount</div>
	<input id="sheetCount" name="sheetCount" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="stitchedDate">StitchedDate</label>
	<div class="input-group-addon left">StitchedDate</div>
	<input id="stitchedDate" name="stitchedDate" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="checkedDate">CheckedDate</label>
	<div class="input-group-addon left">CheckedDate</div>
	<input id="checkedDate" name="checkedDate" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_CREATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_CREATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 