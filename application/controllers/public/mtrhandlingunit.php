
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mtrhandlingunit.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mtrhandlingunit
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mtrhandlingunit.php');
	
	class mtrhandlingunit_controller {
	public $mtrhandlingunit_model;
	
	public function __construct()  
    {  
        $this->mtrhandlingunit_model = new mtrhandlingunit_model();
    } 
	
	public function invoke_mtrhandlingunit()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mtrhandlingunit_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mtrhandlingunit_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mtrhandlingunit&do=viewall');
	}else{
	$result = $this->mtrhandlingunit_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/mtrhandlingunit/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mtrhandlingunit_model->SelectAll();
	include(APP_FOLDER.'/views/public/mtrhandlingunit/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mtrhandlingunit_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mtrhandlingunit/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mtrhandlingunit_model->AutoSearch(trim($qstring),10,'sourceFile');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mtrhandlingunit&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->sourceFile.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/mtrhandlingunit/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('sourceFile')==''){
	json_error('The field sourceFile cannot be empty!');
	}
	elseif (post('appointmentId')==''){
	json_error('The field appointmentId cannot be empty!');
	}
	elseif (post('bundleCount')==''){
	json_error('The field bundleCount cannot be empty!');
	}
	elseif (post('edocContainerId')==''){
	json_error('The field edocContainerId cannot be empty!');
	}
	elseif (post('edocCsaAgreementId')==''){
	json_error('The field edocCsaAgreementId cannot be empty!');
	}
	elseif (post('edocCustomerGroupId')==''){
	json_error('The field edocCustomerGroupId cannot be empty!');
	}
	elseif (post('edocJobId')==''){
	json_error('The field edocJobId cannot be empty!');
	}
	elseif (post('edocMailingGroupId')==''){
	json_error('The field edocMailingGroupId cannot be empty!');
	}
	elseif (post('edocParentContainerId')==''){
	json_error('The field edocParentContainerId cannot be empty!');
	}
	elseif (post('edocSiblingContainerId')==''){
	json_error('The field edocSiblingContainerId cannot be empty!');
	}
	elseif (post('edocSubmitterCrid')==''){
	json_error('The field edocSubmitterCrid cannot be empty!');
	}
	elseif (post('edocUserLicenseCode')==''){
	json_error('The field edocUserLicenseCode cannot be empty!');
	}
	elseif (post('handlingEventType')==''){
	json_error('The field handlingEventType cannot be empty!');
	}
	elseif (post('handlingEventTypeDescription')==''){
	json_error('The field handlingEventTypeDescription cannot be empty!');
	}
	elseif (post('imtb')==''){
	json_error('The field imtb cannot be empty!');
	}
	elseif (post('imtbCin')==''){
	json_error('The field imtbCin cannot be empty!');
	}
	elseif (post('imtbDestinationZip')==''){
	json_error('The field imtbDestinationZip cannot be empty!');
	}
	elseif (post('imtbMid')==''){
	json_error('The field imtbMid cannot be empty!');
	}
	elseif (post('imtbProcessingCode')==''){
	json_error('The field imtbProcessingCode cannot be empty!');
	}
	elseif (post('imtbSerialNumber')==''){
	json_error('The field imtbSerialNumber cannot be empty!');
	}
	elseif (post('mailClassDescription')==''){
	json_error('The field mailClassDescription cannot be empty!');
	}
	elseif (post('mailShapeDescription')==''){
	json_error('The field mailShapeDescription cannot be empty!');
	}
	elseif (post('arrDtm')==''){
	json_error('The field arrDtm cannot be empty!');
	}
	elseif (post('pieceCount')==''){
	json_error('The field pieceCount cannot be empty!');
	}
	elseif (post('scanDatetime')==''){
	json_error('The field scanDatetime cannot be empty!');
	}
	elseif (post('facAddr')==''){
	json_error('The field facAddr cannot be empty!');
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
	elseif (post('scanState')==''){
	json_error('The field scanState cannot be empty!');
	}
	elseif (post('scannerType')==''){
	json_error('The field scannerType cannot be empty!');
	}
	elseif (post('stcFacAddr')==''){
	json_error('The field stcFacAddr cannot be empty!');
	}
	elseif (post('stcFacCity')==''){
	json_error('The field stcFacCity cannot be empty!');
	}
	elseif (post('stcFacLcleKey')==''){
	json_error('The field stcFacLcleKey cannot be empty!');
	}
	elseif (post('stcFacName')==''){
	json_error('The field stcFacName cannot be empty!');
	}
	elseif (post('stcFacState')==''){
	json_error('The field stcFacState cannot be empty!');
	}
	elseif (post('stcFacZip')==''){
	json_error('The field stcFacZip cannot be empty!');
	}
	else{
	$this->mtrhandlingunit_model->Insert(post('sourceFile'),post('appointmentId'),post('bundleCount'),post('edocContainerId'),post('edocCsaAgreementId'),post('edocCustomerGroupId'),post('edocJobId'),post('edocMailingGroupId'),post('edocParentContainerId'),post('edocSiblingContainerId'),post('edocSubmitterCrid'),post('edocUserLicenseCode'),post('handlingEventType'),post('handlingEventTypeDescription'),post('imtb'),post('imtbCin'),post('imtbDestinationZip'),post('imtbMid'),post('imtbProcessingCode'),post('imtbSerialNumber'),post('mailClassDescription'),post('mailShapeDescription'),post('arrDtm'),post('pieceCount'),post('scanDatetime'),post('facAddr'),post('scanFacilityCity'),post('scanFacilityName'),post('scanFacilityState'),post('scanFacilityZip'),post('scanLocaleKey'),post('scanState'),post('scannerType'),post('stcFacAddr'),post('stcFacCity'),post('stcFacLcleKey'),post('stcFacName'),post('stcFacState'),post('stcFacZip'));
	json_send(''.H_CLIENT.'&view=mtrhandlingunit&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mtrhandlingunit_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mtrhandlingunit/Update.php');
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
	elseif (post('appointmentId')==''){
	json_error('The field appointmentId cannot be empty!');
	}
	elseif (post('bundleCount')==''){
	json_error('The field bundleCount cannot be empty!');
	}
	elseif (post('edocContainerId')==''){
	json_error('The field edocContainerId cannot be empty!');
	}
	elseif (post('edocCsaAgreementId')==''){
	json_error('The field edocCsaAgreementId cannot be empty!');
	}
	elseif (post('edocCustomerGroupId')==''){
	json_error('The field edocCustomerGroupId cannot be empty!');
	}
	elseif (post('edocJobId')==''){
	json_error('The field edocJobId cannot be empty!');
	}
	elseif (post('edocMailingGroupId')==''){
	json_error('The field edocMailingGroupId cannot be empty!');
	}
	elseif (post('edocParentContainerId')==''){
	json_error('The field edocParentContainerId cannot be empty!');
	}
	elseif (post('edocSiblingContainerId')==''){
	json_error('The field edocSiblingContainerId cannot be empty!');
	}
	elseif (post('edocSubmitterCrid')==''){
	json_error('The field edocSubmitterCrid cannot be empty!');
	}
	elseif (post('edocUserLicenseCode')==''){
	json_error('The field edocUserLicenseCode cannot be empty!');
	}
	elseif (post('handlingEventType')==''){
	json_error('The field handlingEventType cannot be empty!');
	}
	elseif (post('handlingEventTypeDescription')==''){
	json_error('The field handlingEventTypeDescription cannot be empty!');
	}
	elseif (post('imtb')==''){
	json_error('The field imtb cannot be empty!');
	}
	elseif (post('imtbCin')==''){
	json_error('The field imtbCin cannot be empty!');
	}
	elseif (post('imtbDestinationZip')==''){
	json_error('The field imtbDestinationZip cannot be empty!');
	}
	elseif (post('imtbMid')==''){
	json_error('The field imtbMid cannot be empty!');
	}
	elseif (post('imtbProcessingCode')==''){
	json_error('The field imtbProcessingCode cannot be empty!');
	}
	elseif (post('imtbSerialNumber')==''){
	json_error('The field imtbSerialNumber cannot be empty!');
	}
	elseif (post('mailClassDescription')==''){
	json_error('The field mailClassDescription cannot be empty!');
	}
	elseif (post('mailShapeDescription')==''){
	json_error('The field mailShapeDescription cannot be empty!');
	}
	elseif (post('arrDtm')==''){
	json_error('The field arrDtm cannot be empty!');
	}
	elseif (post('pieceCount')==''){
	json_error('The field pieceCount cannot be empty!');
	}
	elseif (post('scanDatetime')==''){
	json_error('The field scanDatetime cannot be empty!');
	}
	elseif (post('facAddr')==''){
	json_error('The field facAddr cannot be empty!');
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
	elseif (post('scanState')==''){
	json_error('The field scanState cannot be empty!');
	}
	elseif (post('scannerType')==''){
	json_error('The field scannerType cannot be empty!');
	}
	elseif (post('stcFacAddr')==''){
	json_error('The field stcFacAddr cannot be empty!');
	}
	elseif (post('stcFacCity')==''){
	json_error('The field stcFacCity cannot be empty!');
	}
	elseif (post('stcFacLcleKey')==''){
	json_error('The field stcFacLcleKey cannot be empty!');
	}
	elseif (post('stcFacName')==''){
	json_error('The field stcFacName cannot be empty!');
	}
	elseif (post('stcFacState')==''){
	json_error('The field stcFacState cannot be empty!');
	}
	elseif (post('stcFacZip')==''){
	json_error('The field stcFacZip cannot be empty!');
	}
	else{
	$this->mtrhandlingunit_model->Update(post('sourceFile'),post('appointmentId'),post('bundleCount'),post('edocContainerId'),post('edocCsaAgreementId'),post('edocCustomerGroupId'),post('edocJobId'),post('edocMailingGroupId'),post('edocParentContainerId'),post('edocSiblingContainerId'),post('edocSubmitterCrid'),post('edocUserLicenseCode'),post('handlingEventType'),post('handlingEventTypeDescription'),post('imtb'),post('imtbCin'),post('imtbDestinationZip'),post('imtbMid'),post('imtbProcessingCode'),post('imtbSerialNumber'),post('mailClassDescription'),post('mailShapeDescription'),post('arrDtm'),post('pieceCount'),post('scanDatetime'),post('facAddr'),post('scanFacilityCity'),post('scanFacilityName'),post('scanFacilityState'),post('scanFacilityZip'),post('scanLocaleKey'),post('scanState'),post('scannerType'),post('stcFacAddr'),post('stcFacCity'),post('stcFacLcleKey'),post('stcFacName'),post('stcFacState'),post('stcFacZip'),post('id'));
	json_send(''.H_CLIENT.'&view=mtrhandlingunit&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mtrhandlingunit_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mtrhandlingunit/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mtrhandlingunit_model->TruncateTable(''.H_CLIENT.'&view=mtrhandlingunit&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/mtrhandlingunit/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mtrhandlingunit_model->Delete(get('id'),''.H_CLIENT.'&view=mtrhandlingunit&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mtrhandlingunit_model->Delete(get('id'),''.H_CLIENT.'&view=mtrhandlingunit&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=mtrhandlingunit&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	