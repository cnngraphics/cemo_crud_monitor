
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Update.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		partdata
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_CLIENT_MAIN.'&view=partdata&do=updatepro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_CLIENT;?>&view=partdata&id=<?php echo $rows->id;?>&do=details" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=partdata&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=partdata&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_UPDATE;?> Partdata</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<input type="hidden" name="id" value="<?php echo $rows->id;?>">
	<div class="form-group">
    <label class="control-label sr-only" for="sourceFileName">SourceFileName</label>
	<div class="input-group-addon left">SourceFileName</div>
	<input id="sourceFileName" name="sourceFileName" type="text" maxlength="255"  value="<?php echo $rows->sourceFileName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="campaign">Campaign</label>
	<div class="input-group-addon left">Campaign</div>
	<input id="campaign" name="campaign" type="text" maxlength="60"  value="<?php echo $rows->campaign;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mailing">Mailing</label>
	<div class="input-group-addon left">Mailing</div>
	<input id="mailing" name="mailing" type="text" maxlength="60"  value="<?php echo $rows->mailing;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="originalFileName">OriginalFileName</label>
	<div class="input-group-addon left">OriginalFileName</div>
	<input id="originalFileName" name="originalFileName" type="text" maxlength="255"  value="<?php echo $rows->originalFileName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="fileReceived">FileReceived</label>
	<div class="input-group-addon left">FileReceived</div>
	<input id="fileReceived" name="fileReceived" type="text" maxlength="21"  value="<?php echo $rows->fileReceived;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="filePrinted">FilePrinted</label>
	<div class="input-group-addon left">FilePrinted</div>
	<input id="filePrinted" name="filePrinted" type="text" maxlength="21"  value="<?php echo $rows->filePrinted;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="memberId">MemberId</label>
	<div class="input-group-addon left">MemberId</div>
	<input id="memberId" name="memberId" type="text" maxlength="20"  value="<?php echo $rows->memberId;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="name">Name</label>
	<div class="input-group-addon left">Name</div>
	<input id="name" name="name" type="text" maxlength="100"  value="<?php echo $rows->name;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="address1">Address1</label>
	<div class="input-group-addon left">Address1</div>
	<input id="address1" name="address1" type="text" maxlength="100"  value="<?php echo $rows->address1;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="address2">Address2</label>
	<div class="input-group-addon left">Address2</div>
	<input id="address2" name="address2" type="text" maxlength="100"  value="<?php echo $rows->address2;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="city">City</label>
	<div class="input-group-addon left">City</div>
	<input id="city" name="city" type="text" maxlength="100"  value="<?php echo $rows->city;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="state">State</label>
	<div class="input-group-addon left">State</div>
	<input id="state" name="state" type="text" maxlength="20"  value="<?php echo $rows->state;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="zip">Zip</label>
	<div class="input-group-addon left">Zip</div>
	<input id="zip" name="zip" type="text" maxlength="12"  value="<?php echo $rows->zip;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="jobId">JobId</label>
	<div class="input-group-addon left">JobId</div>
	<input id="jobId" name="jobId" type="text" maxlength="11"  value="<?php echo $rows->jobId;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="pdfFileName">PdfFileName</label>
	<div class="input-group-addon left">PdfFileName</div>
	<input id="pdfFileName" name="pdfFileName" type="text" maxlength="255"  value="<?php echo $rows->pdfFileName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="sheetCount">SheetCount</label>
	<div class="input-group-addon left">SheetCount</div>
	<input id="sheetCount" name="sheetCount" type="text" maxlength="11"  value="<?php echo $rows->sheetCount;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="stitchedDate">StitchedDate</label>
	<div class="input-group-addon left">StitchedDate</div>
	<input id="stitchedDate" name="stitchedDate" type="text" maxlength="255"  value="<?php echo $rows->stitchedDate;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="checkedDate">CheckedDate</label>
	<div class="input-group-addon left">CheckedDate</div>
	<input id="checkedDate" name="checkedDate" type="text" maxlength="255"  value="<?php echo $rows->checkedDate;?>" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 