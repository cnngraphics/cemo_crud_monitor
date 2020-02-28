
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Update.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatafplemm
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_ADMIN_MAIN.'&view=mailingdatafplemm&do=updatepro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_ADMIN;?>&view=mailingdatafplemm&id=<?php echo $rows->id;?>&do=details" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdatafplemm&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdatafplemm&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_UPDATE;?> Mailingdatafplemm</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<input type="hidden" name="id" value="<?php echo $rows->id;?>">
	<div class="form-group">
    <label class="control-label sr-only" for="jobId">JobId</label>
	<div class="input-group-addon left">JobId</div>
	<input id="jobId" name="jobId" type="text" maxlength="11"  value="<?php echo $rows->jobId;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="originalFileName">OriginalFileName</label>
	<div class="input-group-addon left">OriginalFileName</div>
	<input id="originalFileName" name="originalFileName" type="text" maxlength="255"  value="<?php echo $rows->originalFileName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="fileName">FileName</label>
	<div class="input-group-addon left">FileName</div>
	<input id="fileName" name="fileName" type="text" maxlength="255"  value="<?php echo $rows->fileName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="sheets">Sheets</label>
	<div class="input-group-addon left">Sheets</div>
	<input id="sheets" name="sheets" type="text" maxlength="11"  value="<?php echo $rows->sheets;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="date">Date</label>
	<div class="input-group-addon left">Date</div>
	<input id="date" name="date" type="text" maxlength="21"  value="<?php echo $rows->date;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="fullName">FullName</label>
	<div class="input-group-addon left">FullName</div>
	<input id="fullName" name="fullName" type="text" maxlength="100"  value="<?php echo $rows->fullName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="address1">Address1</label>
	<div class="input-group-addon left">Address1</div>
	<input id="address1" name="address1" type="text" maxlength="100"  value="<?php echo $rows->address1;?>" class="form-control styler" required/>
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
    <label class="control-label sr-only" for="stitchedDate">StitchedDate</label>
	<div class="input-group-addon left">StitchedDate</div>
	<input id="stitchedDate" name="stitchedDate" type="text" maxlength="255"  value="<?php echo $rows->stitchedDate;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="seqNumber">SeqNumber</label>
	<div class="input-group-addon left">SeqNumber</div>
	<input id="seqNumber" name="seqNumber" type="text" maxlength="11"  value="<?php echo $rows->seqNumber;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mailingPrintReadyFile_id">MailingPrintReadyFile Id</label>
	<div class="input-group-addon left">MailingPrintReadyFile Id</div>
	<input id="mailingPrintReadyFile_id" name="mailingPrintReadyFile_id" type="text" maxlength="20"  value="<?php echo $rows->mailingPrintReadyFile_id;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="pdfTotPages">PdfTotPages</label>
	<div class="input-group-addon left">PdfTotPages</div>
	<input id="pdfTotPages" name="pdfTotPages" type="text" maxlength="11"  value="<?php echo $rows->pdfTotPages;?>" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 