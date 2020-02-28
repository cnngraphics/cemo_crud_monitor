
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mtrcontainer.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mtrcontainer
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mtrcontainer.php');
	
	class mtrcontainer_controller {
	public $mtrcontainer_model;
	
	public function __construct()  
    {  
        $this->mtrcontainer_model = new mtrcontainer_model();
    } 
	
	public function invoke_mtrcontainer()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mtrcontainer_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mtrcontainer_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mtrcontainer&do=viewall');
	}else{
	$result = $this->mtrcontainer_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/admin/mtrcontainer/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mtrcontainer_model->SelectAll();
	include(APP_FOLDER.'/views/admin/mtrcontainer/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mtrcontainer_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mtrcontainer/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mtrcontainer_model->AutoSearch(trim($qstring),10,'sourceFile');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mtrcontainer&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->sourceFile.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/admin/mtrcontainer/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('sourceFile')==''){
	json_error('The field sourceFile cannot be empty!');
	}
	elseif (post('handlingEventType')==''){
	json_error('The field handlingEventType cannot be empty!');
	}
	elseif (post('handlingEventTypeDescription')==''){
	json_error('The field handlingEventTypeDescription cannot be empty!');
	}
	elseif (post('imcb')==''){
	json_error('The field imcb cannot be empty!');
	}
	elseif (post('imcbMid')==''){
	json_error('The field imcbMid cannot be empty!');
	}
	elseif (post('imcbSerialNumber')==''){
	json_error('The field imcbSerialNumber cannot be empty!');
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
	elseif (post('stcDate')==''){
	json_error('The field stcDate cannot be empty!');
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
	elseif (post('trayCount')==''){
	json_error('The field trayCount cannot be empty!');
	}
	else{
	$this->mtrcontainer_model->Insert(post('sourceFile'),post('handlingEventType'),post('handlingEventTypeDescription'),post('imcb'),post('imcbMid'),post('imcbSerialNumber'),post('mailClassDescription'),post('mailShapeDescription'),post('arrDtm'),post('pieceCount'),post('scanDatetime'),post('facAddr'),post('scanFacilityCity'),post('scanFacilityName'),post('scanFacilityState'),post('scanFacilityZip'),post('scanLocaleKey'),post('scanState'),post('scannerType'),post('stcDate'),post('stcFacAddr'),post('stcFacCity'),post('stcFacLcleKey'),post('stcFacName'),post('stcFacState'),post('stcFacZip'),post('trayCount'));
	json_send(''.H_ADMIN.'&view=mtrcontainer&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mtrcontainer_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mtrcontainer/Update.php');
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
	elseif (post('handlingEventType')==''){
	json_error('The field handlingEventType cannot be empty!');
	}
	elseif (post('handlingEventTypeDescription')==''){
	json_error('The field handlingEventTypeDescription cannot be empty!');
	}
	elseif (post('imcb')==''){
	json_error('The field imcb cannot be empty!');
	}
	elseif (post('imcbMid')==''){
	json_error('The field imcbMid cannot be empty!');
	}
	elseif (post('imcbSerialNumber')==''){
	json_error('The field imcbSerialNumber cannot be empty!');
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
	elseif (post('stcDate')==''){
	json_error('The field stcDate cannot be empty!');
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
	elseif (post('trayCount')==''){
	json_error('The field trayCount cannot be empty!');
	}
	else{
	$this->mtrcontainer_model->Update(post('sourceFile'),post('handlingEventType'),post('handlingEventTypeDescription'),post('imcb'),post('imcbMid'),post('imcbSerialNumber'),post('mailClassDescription'),post('mailShapeDescription'),post('arrDtm'),post('pieceCount'),post('scanDatetime'),post('facAddr'),post('scanFacilityCity'),post('scanFacilityName'),post('scanFacilityState'),post('scanFacilityZip'),post('scanLocaleKey'),post('scanState'),post('scannerType'),post('stcDate'),post('stcFacAddr'),post('stcFacCity'),post('stcFacLcleKey'),post('stcFacName'),post('stcFacState'),post('stcFacZip'),post('trayCount'),post('id'));
	json_send(''.H_ADMIN.'&view=mtrcontainer&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mtrcontainer_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mtrcontainer/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mtrcontainer_model->TruncateTable(''.H_ADMIN.'&view=mtrcontainer&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/admin/mtrcontainer/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mtrcontainer_model->Delete(get('id'),''.H_ADMIN.'&view=mtrcontainer&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mtrcontainer_model->Delete(get('id'),''.H_ADMIN.'&view=mtrcontainer&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_ADMIN.'&view=mtrcontainer&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	