
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Update.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatacarnival
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_ADMIN_MAIN.'&view=mailingdatacarnival&do=updatepro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_ADMIN;?>&view=mailingdatacarnival&id=<?php echo $rows->id;?>&do=details" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdatacarnival&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdatacarnival&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_UPDATE;?> Mailingdatacarnival</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<input type="hidden" name="id" value="<?php echo $rows->id;?>">
	<div class="form-group">
    <label class="control-label sr-only" for="job">Job</label>
	<div class="input-group-addon left">Job</div>
	<input id="job" name="job" type="text" maxlength="11"  value="<?php echo $rows->job;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="counter">Counter</label>
	<div class="input-group-addon left">Counter</div>
	<input id="counter" name="counter" type="text" maxlength="11"  value="<?php echo $rows->counter;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="shipCode">ShipCode</label>
	<div class="input-group-addon left">ShipCode</div>
	<input id="shipCode" name="shipCode" type="text" maxlength="255"  value="<?php echo $rows->shipCode;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="sailDate">SailDate</label>
	<div class="input-group-addon left">SailDate</div>
	<input name="sailDate" class="datepicker form-control styler" type="text" maxlength="255" value="<?php echo $rows->sailDate;?>" required/>
	</div>

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
    <label class="control-label sr-only" for="cabinNumber">CabinNumber</label>
	<div class="input-group-addon left">CabinNumber</div>
	<input id="cabinNumber" name="cabinNumber" type="text" maxlength="255"  value="<?php echo $rows->cabinNumber;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="section">Section</label>
	<div class="input-group-addon left">Section</div>
	<input id="section" name="section" type="text" maxlength="255"  value="<?php echo $rows->section;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="offer">Offer</label>
	<div class="input-group-addon left">Offer</div>
	<input id="offer" name="offer" type="text" maxlength="255"  value="<?php echo $rows->offer;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="companionFull">CompanionFull</label>
	<div class="input-group-addon left">CompanionFull</div>
	<input id="companionFull" name="companionFull" type="text" maxlength="255"  value="<?php echo $rows->companionFull;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="celebration">Celebration</label>
	<div class="input-group-addon left">Celebration</div>
	<input id="celebration" name="celebration" type="text" maxlength="255"  value="<?php echo $rows->celebration;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="expirationDate">ExpirationDate</label>
	<div class="input-group-addon left">ExpirationDate</div>
	<input name="expirationDate" class="datepicker form-control styler" type="text" maxlength="255" value="<?php echo $rows->expirationDate;?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="totalCards">TotalCards</label>
	<div class="input-group-addon left">TotalCards</div>
	<input id="totalCards" name="totalCards" type="text" maxlength="11"  value="<?php echo $rows->totalCards;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="companionF">CompanionF</label>
	<div class="input-group-addon left">CompanionF</div>
	<input id="companionF" name="companionF" type="text" maxlength="255"  value="<?php echo $rows->companionF;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="companionL">CompanionL</label>
	<div class="input-group-addon left">CompanionL</div>
	<input id="companionL" name="companionL" type="text" maxlength="255"  value="<?php echo $rows->companionL;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="shipName">ShipName</label>
	<div class="input-group-addon left">ShipName</div>
	<input id="shipName" name="shipName" type="text" maxlength="255"  value="<?php echo $rows->shipName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="HD">HD</label>
	<div class="input-group-addon left">HD</div>
	<input id="HD" name="HD" type="text" maxlength="255"  value="<?php echo $rows->HD;?>" class="form-control styler" required/>
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

	<div class="form-group">
    <label class="control-label sr-only" for="personNumber">PersonNumber</label>
	<div class="input-group-addon left">PersonNumber</div>
	<input id="personNumber" name="personNumber" type="text" maxlength="255"  value="<?php echo $rows->personNumber;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="pastGuessNumber">PastGuessNumber</label>
	<div class="input-group-addon left">PastGuessNumber</div>
	<input id="pastGuessNumber" name="pastGuessNumber" type="text" maxlength="255"  value="<?php echo $rows->pastGuessNumber;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="fileCreationDate">FileCreationDate</label>
	<div class="input-group-addon left">FileCreationDate</div>
	<input name="fileCreationDate" class="datepicker form-control styler" type="text" maxlength="255" value="<?php echo $rows->fileCreationDate;?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="cabinDropDate">CabinDropDate</label>
	<div class="input-group-addon left">CabinDropDate</div>
	<input name="cabinDropDate" class="datepicker form-control styler" type="text" maxlength="255" value="<?php echo $rows->cabinDropDate;?>" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="deliveryDate">DeliveryDate</label>
	<div class="input-group-addon left">DeliveryDate</div>
	<input id="deliveryDate" name="deliveryDate" type="text" maxlength="255"  value="<?php echo $rows->deliveryDate;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="offerAmount">OfferAmount</label>
	<div class="input-group-addon left">OfferAmount</div>
	<input id="offerAmount" name="offerAmount" type="text" maxlength="255"  value="<?php echo $rows->offerAmount;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="spaManager">SpaManager</label>
	<div class="input-group-addon left">SpaManager</div>
	<input id="spaManager" name="spaManager" type="text" maxlength="255"  value="<?php echo $rows->spaManager;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="spaManagerExt">SpaManagerExt</label>
	<div class="input-group-addon left">SpaManagerExt</div>
	<input id="spaManagerExt" name="spaManagerExt" type="text" maxlength="11"  value="<?php echo $rows->spaManagerExt;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="holderId">HolderId</label>
	<div class="input-group-addon left">HolderId</div>
	<input id="holderId" name="holderId" type="text" maxlength="255"  value="<?php echo $rows->holderId;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="cellPackageSk">CellPackageSk</label>
	<div class="input-group-addon left">CellPackageSk</div>
	<input id="cellPackageSk" name="cellPackageSk" type="text" maxlength="255"  value="<?php echo $rows->cellPackageSk;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="seqTrkNum">SeqTrkNum</label>
	<div class="input-group-addon left">SeqTrkNum</div>
	<input id="seqTrkNum" name="seqTrkNum" type="text" maxlength="255"  value="<?php echo $rows->seqTrkNum;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="cardHolderType">CardHolderType</label>
	<div class="input-group-addon left">CardHolderType</div>
	<input id="cardHolderType" name="cardHolderType" type="text" maxlength="255"  value="<?php echo $rows->cardHolderType;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="priorityPrinting">PriorityPrinting</label>
	<div class="input-group-addon left">PriorityPrinting</div>
	<input id="priorityPrinting" name="priorityPrinting" type="text" maxlength="255"  value="<?php echo $rows->priorityPrinting;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="bulletDeliveryDate">BulletDeliveryDate</label>
	<div class="input-group-addon left">BulletDeliveryDate</div>
	<input id="bulletDeliveryDate" name="bulletDeliveryDate" type="text" maxlength="255"  value="<?php echo $rows->bulletDeliveryDate;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="wildCard">WildCard</label>
	<div class="input-group-addon left">WildCard</div>
	<input id="wildCard" name="wildCard" type="text" maxlength="255"  value="<?php echo $rows->wildCard;?>" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 