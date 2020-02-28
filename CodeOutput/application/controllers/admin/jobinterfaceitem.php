
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        jobinterfaceitem.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		jobinterfaceitem
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/jobinterfaceitem.php');
	
	class jobinterfaceitem_controller {
	public $jobinterfaceitem_model;
	
	public function __construct()  
    {  
        $this->jobinterfaceitem_model = new jobinterfaceitem_model();
    } 
	
	public function invoke_jobinterfaceitem()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->jobinterfaceitem_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->jobinterfaceitem_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=jobinterfaceitem&do=viewall');
	}else{
	$result = $this->jobinterfaceitem_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/admin/jobinterfaceitem/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->jobinterfaceitem_model->SelectAll();
	include(APP_FOLDER.'/views/admin/jobinterfaceitem/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->jobinterfaceitem_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/jobinterfaceitem/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->jobinterfaceitem_model->AutoSearch(trim($qstring),10,'dateInserted');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=jobinterfaceitem&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->dateInserted.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/admin/jobinterfaceitem/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('dateInserted')==''){
	json_error('The field dateInserted cannot be empty!');
	}
	elseif (post('name')==''){
	json_error('The field name cannot be empty!');
	}
	elseif (post('value')==''){
	json_error('The field value cannot be empty!');
	}
	elseif (post('jobData_id')==''){
	json_error('The field jobData id cannot be empty!');
	}
	elseif (post('discr')==''){
	json_error('The field discr cannot be empty!');
	}
	elseif (post('pathDownloadLink')==''){
	json_error('The field pathDownloadLink cannot be empty!');
	}
	elseif (post('saveBy')==''){
	json_error('The field saveBy cannot be empty!');
	}
	elseif (post('pathUploadFolder')==''){
	json_error('The field pathUploadFolder cannot be empty!');
	}
	elseif (post('pathUploadFileName')==''){
	json_error('The field pathUploadFileName cannot be empty!');
	}
	elseif (post('ccToTrigger_id')==''){
	json_error('The field ccToTrigger id cannot be empty!');
	}
	elseif (post('approvedAction')==''){
	json_error('The field approvedAction cannot be empty!');
	}
	elseif (post('dateApproved')==''){
	json_error('The field dateApproved cannot be empty!');
	}
	elseif (post('approvedBy')==''){
	json_error('The field approvedBy cannot be empty!');
	}
	elseif (post('dateModified')==''){
	json_error('The field dateModified cannot be empty!');
	}
	elseif (post('approvedDisapproved')==''){
	json_error('The field approvedDisapproved cannot be empty!');
	}
	elseif (post('dateApprovedDisapproved')==''){
	json_error('The field dateApprovedDisapproved cannot be empty!');
	}
	elseif (post('approvedDisapprovedBy')==''){
	json_error('The field approvedDisapprovedBy cannot be empty!');
	}
	else{
	$this->jobinterfaceitem_model->Insert(post('dateInserted'),post('name'),post('value'),post('jobData_id'),post('discr'),post('pathDownloadLink'),post('saveBy'),post('pathUploadFolder'),post('pathUploadFileName'),post('ccToTrigger_id'),post('approvedAction'),post('dateApproved'),post('approvedBy'),post('dateModified'),post('approvedDisapproved'),post('dateApprovedDisapproved'),post('approvedDisapprovedBy'));
	json_send(''.H_ADMIN.'&view=jobinterfaceitem&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->jobinterfaceitem_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/jobinterfaceitem/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('dateInserted')==''){
	json_error('The field dateInserted cannot be empty!');
	}
	elseif (post('name')==''){
	json_error('The field name cannot be empty!');
	}
	elseif (post('value')==''){
	json_error('The field value cannot be empty!');
	}
	elseif (post('jobData_id')==''){
	json_error('The field jobData id cannot be empty!');
	}
	elseif (post('discr')==''){
	json_error('The field discr cannot be empty!');
	}
	elseif (post('pathDownloadLink')==''){
	json_error('The field pathDownloadLink cannot be empty!');
	}
	elseif (post('saveBy')==''){
	json_error('The field saveBy cannot be empty!');
	}
	elseif (post('pathUploadFolder')==''){
	json_error('The field pathUploadFolder cannot be empty!');
	}
	elseif (post('pathUploadFileName')==''){
	json_error('The field pathUploadFileName cannot be empty!');
	}
	elseif (post('ccToTrigger_id')==''){
	json_error('The field ccToTrigger id cannot be empty!');
	}
	elseif (post('approvedAction')==''){
	json_error('The field approvedAction cannot be empty!');
	}
	elseif (post('dateApproved')==''){
	json_error('The field dateApproved cannot be empty!');
	}
	elseif (post('approvedBy')==''){
	json_error('The field approvedBy cannot be empty!');
	}
	elseif (post('dateModified')==''){
	json_error('The field dateModified cannot be empty!');
	}
	elseif (post('approvedDisapproved')==''){
	json_error('The field approvedDisapproved cannot be empty!');
	}
	elseif (post('dateApprovedDisapproved')==''){
	json_error('The field dateApprovedDisapproved cannot be empty!');
	}
	elseif (post('approvedDisapprovedBy')==''){
	json_error('The field approvedDisapprovedBy cannot be empty!');
	}
	else{
	$this->jobinterfaceitem_model->Update(post('dateInserted'),post('name'),post('value'),post('jobData_id'),post('discr'),post('pathDownloadLink'),post('saveBy'),post('pathUploadFolder'),post('pathUploadFileName'),post('ccToTrigger_id'),post('approvedAction'),post('dateApproved'),post('approvedBy'),post('dateModified'),post('approvedDisapproved'),post('dateApprovedDisapproved'),post('approvedDisapprovedBy'),post('id'));
	json_send(''.H_ADMIN.'&view=jobinterfaceitem&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->jobinterfaceitem_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/jobinterfaceitem/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->jobinterfaceitem_model->TruncateTable(''.H_ADMIN.'&view=jobinterfaceitem&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/admin/jobinterfaceitem/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->jobinterfaceitem_model->Delete(get('id'),''.H_ADMIN.'&view=jobinterfaceitem&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->jobinterfaceitem_model->Delete(get('id'),''.H_ADMIN.'&view=jobinterfaceitem&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_ADMIN.'&view=jobinterfaceitem&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	