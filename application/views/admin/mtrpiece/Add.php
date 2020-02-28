
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Add.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mtrpiece
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_ADMIN_MAIN.'&view=mtrpiece&do=addpro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_CREATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_CREATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_ADMIN;?>&view=mtrpiece&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_CREATE_NEW;?> Mtrpiece</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<div class="form-group">
    <label class="control-label sr-only" for="sourceFile">SourceFile</label>
	<div class="input-group-addon left">SourceFile</div>
	<input id="sourceFile" name="sourceFile" type="text" maxlength="255"  value="" class="form-control styler" required/>
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
    <label class="control-label sr-only" for="edocSubmitterCrid">EdocSubmitterCrid</label>
	<div class="input-group-addon left">EdocSubmitterCrid</div>
	<input id="edocSubmitterCrid" name="edocSubmitterCrid" type="text" maxlength="12"  value="" class="form-control styler" required/>
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
    <label class="control-label sr-only" for="idTag">IdTag</label>
	<div class="input-group-addon left">IdTag</div>
	<input id="idTag" name="idTag" type="text" maxlength="20"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="imb">Imb</label>
	<div class="input-group-addon left">Imb</div>
	<input id="imb" name="imb" type="text" maxlength="31"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="imbMid">ImbMid</label>
	<div class="input-group-addon left">ImbMid</div>
	<input id="imbMid" name="imbMid" type="text" maxlength="9"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="imbRoutingCode">ImbRoutingCode</label>
	<div class="input-group-addon left">ImbRoutingCode</div>
	<input id="imbRoutingCode" name="imbRoutingCode" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="imbSerialNumber">ImbSerialNumber</label>
	<div class="input-group-addon left">ImbSerialNumber</div>
	<input id="imbSerialNumber" name="imbSerialNumber" type="text" maxlength="9"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="imbStid">ImbStid</label>
	<div class="input-group-addon left">ImbStid</div>
	<input id="imbStid" name="imbStid" type="text" maxlength="3"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="imbTrackingCode">ImbTrackingCode</label>
	<div class="input-group-addon left">ImbTrackingCode</div>
	<input id="imbTrackingCode" name="imbTrackingCode" type="text" maxlength="20"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="ldeDeliveryMode">LdeDeliveryMode</label>
	<div class="input-group-addon left">LdeDeliveryMode</div>
	<input id="ldeDeliveryMode" name="ldeDeliveryMode" type="text" maxlength="50"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="ldeInventoryMethod">LdeInventoryMethod</label>
	<div class="input-group-addon left">LdeInventoryMethod</div>
	<input id="ldeInventoryMethod" name="ldeInventoryMethod" type="text" maxlength="50"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="ldeTriggerMethod">LdeTriggerMethod</label>
	<div class="input-group-addon left">LdeTriggerMethod</div>
	<input id="ldeTriggerMethod" name="ldeTriggerMethod" type="text" maxlength="50"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="machineId">MachineId</label>
	<div class="input-group-addon left">MachineId</div>
	<input id="machineId" name="machineId" type="text" maxlength="15"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="machineName">MachineName</label>
	<div class="input-group-addon left">MachineName</div>
	<input id="machineName" name="machineName" type="text" maxlength="25"  value="" class="form-control styler" required/>
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
    <label class="control-label sr-only" for="parentContainerEdocContainerId">ParentContainerEdocContainerId</label>
	<div class="input-group-addon left">ParentContainerEdocContainerId</div>
	<input id="parentContainerEdocContainerId" name="parentContainerEdocContainerId" type="text" maxlength="6"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="parentTrayEdocContainerId">ParentTrayEdocContainerId</label>
	<div class="input-group-addon left">ParentTrayEdocContainerId</div>
	<input id="parentTrayEdocContainerId" name="parentTrayEdocContainerId" type="text" maxlength="6"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="predictedDeliveryDate">PredictedDeliveryDate</label>
	<div class="input-group-addon left">PredictedDeliveryDate</div>
	<input id="predictedDeliveryDate" name="predictedDeliveryDate" type="text" maxlength="10"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="routingCodeImbMatchingPortion">RoutingCodeImbMatchingPortion</label>
	<div class="input-group-addon left">RoutingCodeImbMatchingPortion</div>
	<input id="routingCodeImbMatchingPortion" name="routingCodeImbMatchingPortion" type="text" maxlength="11"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scanDatetime">ScanDatetime</label>
	<div class="input-group-addon left">ScanDatetime</div>
	<input id="scanDatetime" name="scanDatetime" type="text" maxlength="29"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="scanEventCode">ScanEventCode</label>
	<div class="input-group-addon left">ScanEventCode</div>
	<input id="scanEventCode" name="scanEventCode" type="text" maxlength="3"  value="" class="form-control styler" required/>
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
    <label class="control-label sr-only" for="scannerType">ScannerType</label>
	<div class="input-group-addon left">ScannerType</div>
	<input id="scannerType" name="scannerType" type="text" maxlength="10"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="startTheClockDate">StartTheClockDate</label>
	<div class="input-group-addon left">StartTheClockDate</div>
	<input id="startTheClockDate" name="startTheClockDate" type="text" maxlength="10"  value="" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_CREATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_CREATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 