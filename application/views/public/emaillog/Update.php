
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Update.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		emaillog
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_CLIENT_MAIN.'&view=emaillog&do=updatepro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_CLIENT;?>&view=emaillog&id=<?php echo $rows->id;?>&do=details" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=emaillog&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=emaillog&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_UPDATE;?> Emaillog</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<input type="hidden" name="id" value="<?php echo $rows->id;?>">
	<div class="form-group">
    <label class="control-label sr-only" for="dateSent">DateSent</label>
	<div class="input-group-addon left">DateSent</div>
	<input name="dateSent" class="datepicker form-control styler" type="text" maxlength="20" value="<?php echo $rows->dateSent;?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mailTo">MailTo</label>
	<div class="input-group-addon left">MailTo</div>
	<input id="mailTo" name="mailTo" type="text" maxlength="255"  value="<?php echo $rows->mailTo;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="cc">Cc</label>
	<div class="input-group-addon left">Cc</div>
	<input id="cc" name="cc" type="text" maxlength="255"  value="<?php echo $rows->cc;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="bcc">Bcc</label>
	<div class="input-group-addon left">Bcc</div>
	<input id="bcc" name="bcc" type="text" maxlength="255"  value="<?php echo $rows->bcc;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="subject">Subject</label>
	<div class="input-group-addon left">Subject</div>
	<input id="subject" name="subject" type="text" maxlength="255"  value="<?php echo $rows->subject;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="body">Body</label>
	<div class="input-group-addon left">Body</div>
	<input id="body" name="body" type="text" maxlength="255"  value="<?php echo $rows->body;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="cemiUserId">CemiUserId</label>
	<div class="input-group-addon left">CemiUserId</div>
	<input id="cemiUserId" name="cemiUserId" type="text" maxlength="255"  value="<?php echo $rows->cemiUserId;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="cronConductor_id">CronConductor Id</label>
	<div class="input-group-addon left">CronConductor Id</div>
	<input id="cronConductor_id" name="cronConductor_id" type="text" maxlength="20"  value="<?php echo $rows->cronConductor_id;?>" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 