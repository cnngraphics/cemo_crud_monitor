
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Add.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedauthrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_CLIENT_MAIN.'&view=mailingdataavmedauthrecord&do=addpro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_CREATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_CREATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_CLIENT;?>&view=mailingdataavmedauthrecord&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_CREATE_NEW;?> Mailingdataavmedauthrecord</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<div class="form-group">
    <label class="control-label sr-only" for="parent_id">Parent Id</label>
	<div class="input-group-addon left">Parent Id</div>
	<input id="parent_id" name="parent_id" type="text" maxlength="20"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="page">Page</label>
	<div class="input-group-addon left">Page</div>
	<input id="page" name="page" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="date">Date</label>
	<div class="input-group-addon left">Date</div>
	<input id="date" name="date" type="text" maxlength="10"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="summary">Summary</label>
	<div class="input-group-addon left">Summary</div>
	<input id="summary" name="summary" type="text" maxlength="70"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="info">Info</label>
	<div class="input-group-addon left">Info</div>
	<input id="info" name="info" type="text" maxlength="128"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="status">Status</label>
	<div class="input-group-addon left">Status</div>
	<input id="status" name="status" type="text" maxlength="80"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="prov">Prov</label>
	<div class="input-group-addon left">Prov</div>
	<input id="prov" name="prov" type="text" maxlength="80"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="header1">Header1</label>
	<div class="input-group-addon left">Header1</div>
	<input id="header1" name="header1" type="text" maxlength="140"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="header2">Header2</label>
	<div class="input-group-addon left">Header2</div>
	<input id="header2" name="header2" type="text" maxlength="140"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="details">Details</label>
	<div class="input-group-addon left">Details</div>
	<textarea rows="5" id="details" name="details" class="form-control editor1 styler" required/></textarea>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_CREATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_CREATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 