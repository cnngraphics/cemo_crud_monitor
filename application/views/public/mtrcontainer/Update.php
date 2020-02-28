
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Update.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mtrcontainer
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_CLIENT_MAIN.'&view=mtrcontainer&do=updatepro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_CLIENT;?>&view=mtrcontainer&id=<?php echo $rows->id;?>&do=details" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mtrcontainer&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mtrcontainer&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_UPDATE;?> Mtrcontainer</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<input type="hidden" name="id" value="<?php echo $rows->id;?>">
	<div class="form-group">
    <label class="control-label sr-only" for="sourceFile">SourceFile</label>
	<div class="input-group-addon left">SourceFile</div>
	<input id="sourceFile" name="sourceFile" type="text" maxlength="255"  value="<?php echo $rows->sourceFile;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="handlingEventType">HandlingEventType</label>
	<div class="input-group-addon left">HandlingEventType</div>
	<input id="handlingEventType" name="handlingEventType" type="text" maxlength="2"  value="<?php echo $rows->handlingEventType;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="handlingEventTypeDescription">HandlingEventTypeDescription</label>
	<div class="input-group-addon left">HandlingEventTypeDescription</div>
	<input id="handlingEventTypeDescription" name="handlingEventTypeDescription" type="text" maxlength="30"  value="<?php echo $rows->handlingEventTypeDescription;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="imcb">Imcb</label>
	<div class="input-group-addon left">Imcb</div>
	<input id="imcb" name="imcb" type="text" maxlength="21"  value="<?php echo $rows->imcb;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="imcbMid">ImcbMid</label>
	<div class="input-group-addon left">ImcbMid</div>
	<input id="imcbMid" name="imcbMid" type="text" maxlength="9"  value="<?php echo $rows->imcbMid;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="imcbSerialNumber">ImcbSerialNumber</label>
	<div class="input-group-addon left">ImcbSerialNumber</div>
	<input id="imcbSerialNumber" name="imcbSerialNumber" type="text" maxlength="12"  value="<?php echo $rows->imcbSerialNumber;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mailClassDescription">MailClassDescription</label>
	<div class="input-group-addon left">MailClassDescription</div>
	<input id="mailClassDescription" name="mailClassDescription" type="text" maxlength="50"  value="<?php echo $rows->mailClassDescription;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mailShapeDescription">MailShapeDescription</label>
	<div class="input-group-addon left">MailShapeDescription</div>
	<input id="mailShapeDescription" name="mailShapeDescription" type="text" maxlength="50"  value="<?php echo $rows->mailShapeDescription;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="arrDtm">ArrDtm</label>
	<div class="input-group-addon left">ArrDtm</div>
	<input id="arrDtm" name="arrDtm" type="text" maxlength="29"  value="<?php echo $rows->arrDtm;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="pieceCount">PieceCount</label>
	<div class="input-group-addon left">PieceCount</div>
	<input id="pieceCount" name="pieceCount" type="text" maxlength="10"  value="<?php echo $rows->pieceCount;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scanDatetime">ScanDatetime</label>
	<div class="input-group-addon left">ScanDatetime</div>
	<input id="scanDatetime" name="scanDatetime" type="text" maxlength="29"  value="<?php echo $rows->scanDatetime;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="facAddr">FacAddr</label>
	<div class="input-group-addon left">FacAddr</div>
	<input id="facAddr" name="facAddr" type="text" maxlength="80"  value="<?php echo $rows->facAddr;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scanFacilityCity">ScanFacilityCity</label>
	<div class="input-group-addon left">ScanFacilityCity</div>
	<input id="scanFacilityCity" name="scanFacilityCity" type="text" maxlength="50"  value="<?php echo $rows->scanFacilityCity;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scanFacilityName">ScanFacilityName</label>
	<div class="input-group-addon left">ScanFacilityName</div>
	<input id="scanFacilityName" name="scanFacilityName" type="text" maxlength="50"  value="<?php echo $rows->scanFacilityName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scanFacilityState">ScanFacilityState</label>
	<div class="input-group-addon left">ScanFacilityState</div>
	<input id="scanFacilityState" name="scanFacilityState" type="text" maxlength="2"  value="<?php echo $rows->scanFacilityState;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scanFacilityZip">ScanFacilityZip</label>
	<div class="input-group-addon left">ScanFacilityZip</div>
	<input id="scanFacilityZip" name="scanFacilityZip" type="text" maxlength="9"  value="<?php echo $rows->scanFacilityZip;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scanLocaleKey">ScanLocaleKey</label>
	<div class="input-group-addon left">ScanLocaleKey</div>
	<input id="scanLocaleKey" name="scanLocaleKey" type="text" maxlength="9"  value="<?php echo $rows->scanLocaleKey;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scanState">ScanState</label>
	<div class="input-group-addon left">ScanState</div>
	<input id="scanState" name="scanState" type="text" maxlength="50"  value="<?php echo $rows->scanState;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scannerType">ScannerType</label>
	<div class="input-group-addon left">ScannerType</div>
	<input id="scannerType" name="scannerType" type="text" maxlength="10"  value="<?php echo $rows->scannerType;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="stcDate">StcDate</label>
	<div class="input-group-addon left">StcDate</div>
	<input id="stcDate" name="stcDate" type="text" maxlength="10"  value="<?php echo $rows->stcDate;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="stcFacAddr">StcFacAddr</label>
	<div class="input-group-addon left">StcFacAddr</div>
	<input id="stcFacAddr" name="stcFacAddr" type="text" maxlength="80"  value="<?php echo $rows->stcFacAddr;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="stcFacCity">StcFacCity</label>
	<div class="input-group-addon left">StcFacCity</div>
	<input id="stcFacCity" name="stcFacCity" type="text" maxlength="50"  value="<?php echo $rows->stcFacCity;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="stcFacLcleKey">StcFacLcleKey</label>
	<div class="input-group-addon left">StcFacLcleKey</div>
	<input id="stcFacLcleKey" name="stcFacLcleKey" type="text" maxlength="9"  value="<?php echo $rows->stcFacLcleKey;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="stcFacName">StcFacName</label>
	<div class="input-group-addon left">StcFacName</div>
	<input id="stcFacName" name="stcFacName" type="text" maxlength="50"  value="<?php echo $rows->stcFacName;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="stcFacState">StcFacState</label>
	<div class="input-group-addon left">StcFacState</div>
	<input id="stcFacState" name="stcFacState" type="text" maxlength="2"  value="<?php echo $rows->stcFacState;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="stcFacZip">StcFacZip</label>
	<div class="input-group-addon left">StcFacZip</div>
	<input id="stcFacZip" name="stcFacZip" type="text" maxlength="9"  value="<?php echo $rows->stcFacZip;?>" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="trayCount">TrayCount</label>
	<div class="input-group-addon left">TrayCount</div>
	<input id="trayCount" name="trayCount" type="text" maxlength="8"  value="<?php echo $rows->trayCount;?>" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_UPDATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 