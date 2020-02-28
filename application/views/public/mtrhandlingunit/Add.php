
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Add.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mtrhandlingunit
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_CLIENT_MAIN.'&view=mtrhandlingunit&do=addpro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_CREATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_CREATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_CLIENT;?>&view=mtrhandlingunit&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_CREATE_NEW;?> Mtrhandlingunit</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<div class="form-group">
    <label class="control-label sr-only" for="sourceFile">SourceFile</label>
	<div class="input-group-addon left">SourceFile</div>
	<input id="sourceFile" name="sourceFile" type="text" maxlength="255"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="appointmentId">AppointmentId</label>
	<div class="input-group-addon left">AppointmentId</div>
	<input id="appointmentId" name="appointmentId" type="text" maxlength="15"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="bundleCount">BundleCount</label>
	<div class="input-group-addon left">BundleCount</div>
	<input id="bundleCount" name="bundleCount" type="text" maxlength="5"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="edocContainerId">EdocContainerId</label>
	<div class="input-group-addon left">EdocContainerId</div>
	<input id="edocContainerId" name="edocContainerId" type="text" maxlength="6"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="edocCsaAgreementId">EdocCsaAgreementId</label>
	<div class="input-group-addon left">EdocCsaAgreementId</div>
	<input id="edocCsaAgreementId" name="edocCsaAgreementId" type="text" maxlength="10"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="edocCustomerGroupId">EdocCustomerGroupId</label>
	<div class="input-group-addon left">EdocCustomerGroupId</div>
	<input id="edocCustomerGroupId" name="edocCustomerGroupId" type="text" maxlength="12"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="edocJobId">EdocJobId</label>
	<div class="input-group-addon left">EdocJobId</div>
	<input id="edocJobId" name="edocJobId" type="text" maxlength="8"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="edocMailingGroupId">EdocMailingGroupId</label>
	<div class="input-group-addon left">EdocMailingGroupId</div>
	<input id="edocMailingGroupId" name="edocMailingGroupId" type="text" maxlength="12"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="edocParentContainerId">EdocParentContainerId</label>
	<div class="input-group-addon left">EdocParentContainerId</div>
	<input id="edocParentContainerId" name="edocParentContainerId" type="text" maxlength="6"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="edocSiblingContainerId">EdocSiblingContainerId</label>
	<div class="input-group-addon left">EdocSiblingContainerId</div>
	<input id="edocSiblingContainerId" name="edocSiblingContainerId" type="text" maxlength="6"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="edocSubmitterCrid">EdocSubmitterCrid</label>
	<div class="input-group-addon left">EdocSubmitterCrid</div>
	<input id="edocSubmitterCrid" name="edocSubmitterCrid" type="text" maxlength="12"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="edocUserLicenseCode">EdocUserLicenseCode</label>
	<div class="input-group-addon left">EdocUserLicenseCode</div>
	<input id="edocUserLicenseCode" name="edocUserLicenseCode" type="text" maxlength="4"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="handlingEventType">HandlingEventType</label>
	<div class="input-group-addon left">HandlingEventType</div>
	<input id="handlingEventType" name="handlingEventType" type="text" maxlength="2"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="handlingEventTypeDescription">HandlingEventTypeDescription</label>
	<div class="input-group-addon left">HandlingEventTypeDescription</div>
	<input id="handlingEventTypeDescription" name="handlingEventTypeDescription" type="text" maxlength="30"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="imtb">Imtb</label>
	<div class="input-group-addon left">Imtb</div>
	<input id="imtb" name="imtb" type="text" maxlength="24"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="imtbCin">ImtbCin</label>
	<div class="input-group-addon left">ImtbCin</div>
	<input id="imtbCin" name="imtbCin" type="text" maxlength="3"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="imtbDestinationZip">ImtbDestinationZip</label>
	<div class="input-group-addon left">ImtbDestinationZip</div>
	<input id="imtbDestinationZip" name="imtbDestinationZip" type="text" maxlength="5"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="imtbMid">ImtbMid</label>
	<div class="input-group-addon left">ImtbMid</div>
	<input id="imtbMid" name="imtbMid" type="text" maxlength="9"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="imtbProcessingCode">ImtbProcessingCode</label>
	<div class="input-group-addon left">ImtbProcessingCode</div>
	<input id="imtbProcessingCode" name="imtbProcessingCode" type="text" maxlength="1"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="imtbSerialNumber">ImtbSerialNumber</label>
	<div class="input-group-addon left">ImtbSerialNumber</div>
	<input id="imtbSerialNumber" name="imtbSerialNumber" type="text" maxlength="8"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mailClassDescription">MailClassDescription</label>
	<div class="input-group-addon left">MailClassDescription</div>
	<input id="mailClassDescription" name="mailClassDescription" type="text" maxlength="50"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="mailShapeDescription">MailShapeDescription</label>
	<div class="input-group-addon left">MailShapeDescription</div>
	<input id="mailShapeDescription" name="mailShapeDescription" type="text" maxlength="50"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="arrDtm">ArrDtm</label>
	<div class="input-group-addon left">ArrDtm</div>
	<input id="arrDtm" name="arrDtm" type="text" maxlength="29"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="pieceCount">PieceCount</label>
	<div class="input-group-addon left">PieceCount</div>
	<input id="pieceCount" name="pieceCount" type="text" maxlength="8"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scanDatetime">ScanDatetime</label>
	<div class="input-group-addon left">ScanDatetime</div>
	<input id="scanDatetime" name="scanDatetime" type="text" maxlength="29"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="facAddr">FacAddr</label>
	<div class="input-group-addon left">FacAddr</div>
	<input id="facAddr" name="facAddr" type="text" maxlength="80"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scanFacilityCity">ScanFacilityCity</label>
	<div class="input-group-addon left">ScanFacilityCity</div>
	<input id="scanFacilityCity" name="scanFacilityCity" type="text" maxlength="50"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scanFacilityName">ScanFacilityName</label>
	<div class="input-group-addon left">ScanFacilityName</div>
	<input id="scanFacilityName" name="scanFacilityName" type="text" maxlength="50"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scanFacilityState">ScanFacilityState</label>
	<div class="input-group-addon left">ScanFacilityState</div>
	<input id="scanFacilityState" name="scanFacilityState" type="text" maxlength="2"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scanFacilityZip">ScanFacilityZip</label>
	<div class="input-group-addon left">ScanFacilityZip</div>
	<input id="scanFacilityZip" name="scanFacilityZip" type="text" maxlength="9"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scanLocaleKey">ScanLocaleKey</label>
	<div class="input-group-addon left">ScanLocaleKey</div>
	<input id="scanLocaleKey" name="scanLocaleKey" type="text" maxlength="9"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scanState">ScanState</label>
	<div class="input-group-addon left">ScanState</div>
	<input id="scanState" name="scanState" type="text" maxlength="50"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scannerType">ScannerType</label>
	<div class="input-group-addon left">ScannerType</div>
	<input id="scannerType" name="scannerType" type="text" maxlength="10"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="stcFacAddr">StcFacAddr</label>
	<div class="input-group-addon left">StcFacAddr</div>
	<input id="stcFacAddr" name="stcFacAddr" type="text" maxlength="80"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="stcFacCity">StcFacCity</label>
	<div class="input-group-addon left">StcFacCity</div>
	<input id="stcFacCity" name="stcFacCity" type="text" maxlength="50"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="stcFacLcleKey">StcFacLcleKey</label>
	<div class="input-group-addon left">StcFacLcleKey</div>
	<input id="stcFacLcleKey" name="stcFacLcleKey" type="text" maxlength="9"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="stcFacName">StcFacName</label>
	<div class="input-group-addon left">StcFacName</div>
	<input id="stcFacName" name="stcFacName" type="text" maxlength="50"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="stcFacState">StcFacState</label>
	<div class="input-group-addon left">StcFacState</div>
	<input id="stcFacState" name="stcFacState" type="text" maxlength="2"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="stcFacZip">StcFacZip</label>
	<div class="input-group-addon left">StcFacZip</div>
	<input id="stcFacZip" name="stcFacZip" type="text" maxlength="9"  value="" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_CREATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_CREATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 