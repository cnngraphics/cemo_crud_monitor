
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Update.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord21
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_ADMIN_MAIN.'&view=mailingdataavmedgroupinvoicesrecord21&do=updatepro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_ADMIN;?>&view=mailingdataavmedgroupinvoicesrecord21&id=<?php echo $rows->id;?>&do=details" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdataavmedgroupinvoicesrecord21&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdataavmedgroupinvoicesrecord21&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_UPDATE;?> Mailingdataavmedgroupinvoicesrecord21</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<input type="hidden" name="id" value="<?php echo $rows->id;?>">
	<div class="form-group">
    <label class="control-label sr-only" for="invNo">InvNo</label>
	<div class="input-group-addon left">InvNo</div>
	<input id="invNo" name="invNo" type="text" maxlength="12"  value="<?php echo $rows->invNo;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="subscriberAddr2">SubscriberAddr2</label>
	<div class="input-group-addon left">SubscriberAddr2</div>
	<input id="subscriberAddr2" name="subscriberAddr2" type="text" maxlength="28"  value="<?php echo $rows->subscriberAddr2;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="subscriberAddr3">SubscriberAddr3</label>
	<div class="input-group-addon left">SubscriberAddr3</div>
	<input id="subscriberAddr3" name="subscriberAddr3" type="text" maxlength="28"  value="<?php echo $rows->subscriberAddr3;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="acctId">AcctId</label>
	<div class="input-group-addon left">AcctId</div>
	<input id="acctId" name="acctId" type="text" maxlength="10"  value="<?php echo $rows->acctId;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="contact">Contact</label>
	<div class="input-group-addon left">Contact</div>
	<input id="contact" name="contact" type="text" maxlength="22"  value="<?php echo $rows->contact;?>" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 