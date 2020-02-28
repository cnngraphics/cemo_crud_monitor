
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Update.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord50
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_CLIENT_MAIN.'&view=mailingdataavmedgroupinvoicesrecord50&do=updatepro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_CLIENT;?>&view=mailingdataavmedgroupinvoicesrecord50&id=<?php echo $rows->id;?>&do=details" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mailingdataavmedgroupinvoicesrecord50&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mailingdataavmedgroupinvoicesrecord50&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_UPDATE;?> Mailingdataavmedgroupinvoicesrecord50</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<input type="hidden" name="id" value="<?php echo $rows->id;?>">
	<div class="form-group">
    <label class="control-label sr-only" for="invNo">InvNo</label>
	<div class="input-group-addon left">InvNo</div>
	<input id="invNo" name="invNo" type="text" maxlength="12"  value="<?php echo $rows->invNo;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="contracts">Contracts</label>
	<div class="input-group-addon left">Contracts</div>
	<input id="contracts" name="contracts" type="text" maxlength="7"  value="<?php echo $rows->contracts;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="members">Members</label>
	<div class="input-group-addon left">Members</div>
	<input id="members" name="members" type="text" maxlength="7"  value="<?php echo $rows->members;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="prevBalance">PrevBalance</label>
	<div class="input-group-addon left">PrevBalance</div>
	<input id="prevBalance" name="prevBalance" type="text" maxlength="11"  value="<?php echo $rows->prevBalance;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="totRetroAdj">TotRetroAdj</label>
	<div class="input-group-addon left">TotRetroAdj</div>
	<input id="totRetroAdj" name="totRetroAdj" type="text" maxlength="11"  value="<?php echo $rows->totRetroAdj;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="totAdj">TotAdj</label>
	<div class="input-group-addon left">TotAdj</div>
	<input id="totAdj" name="totAdj" type="text" maxlength="11"  value="<?php echo $rows->totAdj;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="payments">Payments</label>
	<div class="input-group-addon left">Payments</div>
	<input id="payments" name="payments" type="text" maxlength="11"  value="<?php echo $rows->payments;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="finance">Finance</label>
	<div class="input-group-addon left">Finance</div>
	<input id="finance" name="finance" type="text" maxlength="11"  value="<?php echo $rows->finance;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="balanceForward">BalanceForward</label>
	<div class="input-group-addon left">BalanceForward</div>
	<input id="balanceForward" name="balanceForward" type="text" maxlength="11"  value="<?php echo $rows->balanceForward;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="totPremium">TotPremium</label>
	<div class="input-group-addon left">TotPremium</div>
	<input id="totPremium" name="totPremium" type="text" maxlength="11"  value="<?php echo $rows->totPremium;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="amountDue">AmountDue</label>
	<div class="input-group-addon left">AmountDue</div>
	<input id="amountDue" name="amountDue" type="text" maxlength="11"  value="<?php echo $rows->amountDue;?>" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 