
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Update.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedidnrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_ADMIN_MAIN.'&view=mailingdataavmedidnrecord&do=updatepro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_ADMIN;?>&view=mailingdataavmedidnrecord&id=<?php echo $rows->id;?>&do=details" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdataavmedidnrecord&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdataavmedidnrecord&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_UPDATE;?> Mailingdataavmedidnrecord</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<input type="hidden" name="id" value="<?php echo $rows->id;?>">
	<div class="form-group">
    <label class="control-label sr-only" for="parent_id">Parent Id</label>
	<div class="input-group-addon left">Parent Id</div>
	<input id="parent_id" name="parent_id" type="text" maxlength="20"  value="<?php echo $rows->parent_id;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="claim">Claim</label>
	<div class="input-group-addon left">Claim</div>
	<input id="claim" name="claim" type="text" maxlength="12"  value="<?php echo $rows->claim;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="service">Service</label>
	<div class="input-group-addon left">Service</div>
	<input id="service" name="service" type="text" maxlength="4"  value="<?php echo $rows->service;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="serviceDate">ServiceDate</label>
	<div class="input-group-addon left">ServiceDate</div>
	<input id="serviceDate" name="serviceDate" type="text" maxlength="8"  value="<?php echo $rows->serviceDate;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="description">Description</label>
	<div class="input-group-addon left">Description</div>
	<input id="description" name="description" type="text" maxlength="72"  value="<?php echo $rows->description;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="codes">Codes</label>
	<div class="input-group-addon left">Codes</div>
	<input id="codes" name="codes" type="text" maxlength="20"  value="<?php echo $rows->codes;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="codeDesc">CodeDesc</label>
	<div class="input-group-addon left">CodeDesc</div>
	<input id="codeDesc" name="codeDesc" type="text" maxlength="218"  value="<?php echo $rows->codeDesc;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="provider">Provider</label>
	<div class="input-group-addon left">Provider</div>
	<input id="provider" name="provider" type="text" maxlength="36"  value="<?php echo $rows->provider;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="providerNumber">ProviderNumber</label>
	<div class="input-group-addon left">ProviderNumber</div>
	<input id="providerNumber" name="providerNumber" type="text" maxlength="12"  value="<?php echo $rows->providerNumber;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="billed">Billed</label>
	<div class="input-group-addon left">Billed</div>
	<input id="billed" name="billed" type="text" maxlength="10"  value="<?php echo $rows->billed;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="responsability">Responsability</label>
	<div class="input-group-addon left">Responsability</div>
	<input id="responsability" name="responsability" type="text" maxlength="10"  value="<?php echo $rows->responsability;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="type">Type</label>
	<div class="input-group-addon left">Type</div>
	<input id="type" name="type" type="text" maxlength="255"  value="<?php echo $rows->type;?>" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 