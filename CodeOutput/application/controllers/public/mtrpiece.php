
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mtrpiece.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mtrpiece
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mtrpiece.php');
	
	class mtrpiece_controller {
	public $mtrpiece_model;
	
	public function __construct()  
    {  
        $this->mtrpiece_model = new mtrpiece_model();
    } 
	
	public function invoke_mtrpiece()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mtrpiece_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mtrpiece_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mtrpiece&do=viewall');
	}else{
	$result = $this->mtrpiece_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/mtrpiece/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mtrpiece_model->SelectAll();
	include(APP_FOLDER.'/views/public/mtrpiece/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mtrpiece_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mtrpiece/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mtrpiece_model->AutoSearch(trim($qstring),10,'sourceFile');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mtrpiece&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->sourceFile.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/mtrpiece/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('sourceFile')==''){
	json_error('The field sourceFile cannot be empty!');
	}
	elseif (post('edocJobId')==''){
	json_error('The field edocJobId cannot be empty!');
	}
	elseif (post('edocMailingGroupId')==''){
	json_error('The field edocMailingGroupId cannot be empty!');
	}
	elseif (post('edocSubmitterCrid')==''){
	json_error('The field edocSubmitterCrid cannot be empty!');
	}
	elseif (post('handlingEventType')==''){
	json_error('The field handlingEventType cannot be empty!');
	}
	elseif (post('handlingEventTypeDescription')==''){
	json_error('The field handlingEventTypeDescription cannot be empty!');
	}
	elseif (post('idTag')==''){
	json_error('The field idTag cannot be empty!');
	}
	elseif (post('imb')==''){
	json_error('The field imb cannot be empty!');
	}
	elseif (post('imbMid')==''){
	json_error('The field imbMid cannot be empty!');
	}
	elseif (post('imbRoutingCode')==''){
	json_error('The field imbRoutingCode cannot be empty!');
	}
	elseif (post('imbSerialNumber')==''){
	json_error('The field imbSerialNumber cannot be empty!');
	}
	elseif (post('imbStid')==''){
	json_error('The field imbStid cannot be empty!');
	}
	elseif (post('imbTrackingCode')==''){
	json_error('The field imbTrackingCode cannot be empty!');
	}
	elseif (post('ldeDeliveryMode')==''){
	json_error('The field ldeDeliveryMode cannot be empty!');
	}
	elseif (post('ldeInventoryMethod')==''){
	json_error('The field ldeInventoryMethod cannot be empty!');
	}
	elseif (post('ldeTriggerMethod')==''){
	json_error('The field ldeTriggerMethod cannot be empty!');
	}
	elseif (post('machineId')==''){
	json_error('The field machineId cannot be empty!');
	}
	elseif (post('machineName')==''){
	json_error('The field machineName cannot be empty!');
	}
	elseif (post('mailClassDescription')==''){
	json_error('The field mailClassDescription cannot be empty!');
	}
	elseif (post('mailShapeDescription')==''){
	json_error('The field mailShapeDescription cannot be empty!');
	}
	elseif (post('parentContainerEdocContainerId')==''){
	json_error('The field parentContainerEdocContainerId cannot be empty!');
	}
	elseif (post('parentTrayEdocContainerId')==''){
	json_error('The field parentTrayEdocContainerId cannot be empty!');
	}
	elseif (post('predictedDeliveryDate')==''){
	json_error('The field predictedDeliveryDate cannot be empty!');
	}
	elseif (post('routingCodeImbMatchingPortion')==''){
	json_error('The field routingCodeImbMatchingPortion cannot be empty!');
	}
	elseif (post('scanDatetime')==''){
	json_error('The field scanDatetime cannot be empty!');
	}
	elseif (post('scanEventCode')==''){
	json_error('The field scanEventCode cannot be empty!');
	}
	elseif (post('scanFacilityCity')==''){
	json_error('The field scanFacilityCity cannot be empty!');
	}
	elseif (post('scanFacilityName')==''){
	json_error('The field scanFacilityName cannot be empty!');
	}
	elseif (post('scanFacilityState')==''){
	json_error('The field scanFacilityState cannot be empty!');
	}
	elseif (post('scanFacilityZip')==''){
	json_error('The field scanFacilityZip cannot be empty!');
	}
	elseif (post('scanLocaleKey')==''){
	json_error('The field scanLocaleKey cannot be empty!');
	}
	elseif (post('scannerType')==''){
	json_error('The field scannerType cannot be empty!');
	}
	elseif (post('startTheClockDate')==''){
	json_error('The field startTheClockDate cannot be empty!');
	}
	else{
	$this->mtrpiece_model->Insert(post('sourceFile'),post('edocJobId'),post('edocMailingGroupId'),post('edocSubmitterCrid'),post('handlingEventType'),post('handlingEventTypeDescription'),post('idTag'),post('imb'),post('imbMid'),post('imbRoutingCode'),post('imbSerialNumber'),post('imbStid'),post('imbTrackingCode'),post('ldeDeliveryMode'),post('ldeInventoryMethod'),post('ldeTriggerMethod'),post('machineId'),post('machineName'),post('mailClassDescription'),post('mailShapeDescription'),post('parentContainerEdocContainerId'),post('parentTrayEdocContainerId'),post('predictedDeliveryDate'),post('routingCodeImbMatchingPortion'),post('scanDatetime'),post('scanEventCode'),post('scanFacilityCity'),post('scanFacilityName'),post('scanFacilityState'),post('scanFacilityZip'),post('scanLocaleKey'),post('scannerType'),post('startTheClockDate'));
	json_send(''.H_CLIENT.'&view=mtrpiece&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mtrpiece_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mtrpiece/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('sourceFile')==''){
	json_error('The field sourceFile cannot be empty!');
	}
	elseif (post('edocJobId')==''){
	json_error('The field edocJobId cannot be empty!');
	}
	elseif (post('edocMailingGroupId')==''){
	json_error('The field edocMailingGroupId cannot be empty!');
	}
	elseif (post('edocSubmitterCrid')==''){
	json_error('The field edocSubmitterCrid cannot be empty!');
	}
	elseif (post('handlingEventType')==''){
	json_error('The field handlingEventType cannot be empty!');
	}
	elseif (post('handlingEventTypeDescription')==''){
	json_error('The field handlingEventTypeDescription cannot be empty!');
	}
	elseif (post('idTag')==''){
	json_error('The field idTag cannot be empty!');
	}
	elseif (post('imb')==''){
	json_error('The field imb cannot be empty!');
	}
	elseif (post('imbMid')==''){
	json_error('The field imbMid cannot be empty!');
	}
	elseif (post('imbRoutingCode')==''){
	json_error('The field imbRoutingCode cannot be empty!');
	}
	elseif (post('imbSerialNumber')==''){
	json_error('The field imbSerialNumber cannot be empty!');
	}
	elseif (post('imbStid')==''){
	json_error('The field imbStid cannot be empty!');
	}
	elseif (post('imbTrackingCode')==''){
	json_error('The field imbTrackingCode cannot be empty!');
	}
	elseif (post('ldeDeliveryMode')==''){
	json_error('The field ldeDeliveryMode cannot be empty!');
	}
	elseif (post('ldeInventoryMethod')==''){
	json_error('The field ldeInventoryMethod cannot be empty!');
	}
	elseif (post('ldeTriggerMethod')==''){
	json_error('The field ldeTriggerMethod cannot be empty!');
	}
	elseif (post('machineId')==''){
	json_error('The field machineId cannot be empty!');
	}
	elseif (post('machineName')==''){
	json_error('The field machineName cannot be empty!');
	}
	elseif (post('mailClassDescription')==''){
	json_error('The field mailClassDescription cannot be empty!');
	}
	elseif (post('mailShapeDescription')==''){
	json_error('The field mailShapeDescription cannot be empty!');
	}
	elseif (post('parentContainerEdocContainerId')==''){
	json_error('The field parentContainerEdocContainerId cannot be empty!');
	}
	elseif (post('parentTrayEdocContainerId')==''){
	json_error('The field parentTrayEdocContainerId cannot be empty!');
	}
	elseif (post('predictedDeliveryDate')==''){
	json_error('The field predictedDeliveryDate cannot be empty!');
	}
	elseif (post('routingCodeImbMatchingPortion')==''){
	json_error('The field routingCodeImbMatchingPortion cannot be empty!');
	}
	elseif (post('scanDatetime')==''){
	json_error('The field scanDatetime cannot be empty!');
	}
	elseif (post('scanEventCode')==''){
	json_error('The field scanEventCode cannot be empty!');
	}
	elseif (post('scanFacilityCity')==''){
	json_error('The field scanFacilityCity cannot be empty!');
	}
	elseif (post('scanFacilityName')==''){
	json_error('The field scanFacilityName cannot be empty!');
	}
	elseif (post('scanFacilityState')==''){
	json_error('The field scanFacilityState cannot be empty!');
	}
	elseif (post('scanFacilityZip')==''){
	json_error('The field scanFacilityZip cannot be empty!');
	}
	elseif (post('scanLocaleKey')==''){
	json_error('The field scanLocaleKey cannot be empty!');
	}
	elseif (post('scannerType')==''){
	json_error('The field scannerType cannot be empty!');
	}
	elseif (post('startTheClockDate')==''){
	json_error('The field startTheClockDate cannot be empty!');
	}
	else{
	$this->mtrpiece_model->Update(post('sourceFile'),post('edocJobId'),post('edocMailingGroupId'),post('edocSubmitterCrid'),post('handlingEventType'),post('handlingEventTypeDescription'),post('idTag'),post('imb'),post('imbMid'),post('imbRoutingCode'),post('imbSerialNumber'),post('imbStid'),post('imbTrackingCode'),post('ldeDeliveryMode'),post('ldeInventoryMethod'),post('ldeTriggerMethod'),post('machineId'),post('machineName'),post('mailClassDescription'),post('mailShapeDescription'),post('parentContainerEdocContainerId'),post('parentTrayEdocContainerId'),post('predictedDeliveryDate'),post('routingCodeImbMatchingPortion'),post('scanDatetime'),post('scanEventCode'),post('scanFacilityCity'),post('scanFacilityName'),post('scanFacilityState'),post('scanFacilityZip'),post('scanLocaleKey'),post('scannerType'),post('startTheClockDate'),post('id'));
	json_send(''.H_CLIENT.'&view=mtrpiece&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mtrpiece_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mtrpiece/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mtrpiece_model->TruncateTable(''.H_CLIENT.'&view=mtrpiece&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/mtrpiece/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mtrpiece_model->Delete(get('id'),''.H_CLIENT.'&view=mtrpiece&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mtrpiece_model->Delete(get('id'),''.H_CLIENT.'&view=mtrpiece&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=mtrpiece&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	