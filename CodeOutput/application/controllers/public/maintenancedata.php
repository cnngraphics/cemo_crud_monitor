
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        maintenancedata.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		maintenancedata
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/maintenancedata.php');
	
	class maintenancedata_controller {
	public $maintenancedata_model;
	
	public function __construct()  
    {  
        $this->maintenancedata_model = new maintenancedata_model();
    } 
	
	public function invoke_maintenancedata()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->maintenancedata_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->maintenancedata_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=maintenancedata&do=viewall');
	}else{
	$result = $this->maintenancedata_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/maintenancedata/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->maintenancedata_model->SelectAll();
	include(APP_FOLDER.'/views/public/maintenancedata/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->maintenancedata_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/maintenancedata/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->maintenancedata_model->AutoSearch(trim($qstring),10,'parentId');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=maintenancedata&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->parentId.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/maintenancedata/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('parentId')==''){
	json_error('The field parentId cannot be empty!');
	}
	elseif (post('jobId')==''){
	json_error('The field jobId cannot be empty!');
	}
	elseif (post('parentJobId')==''){
	json_error('The field parentJobId cannot be empty!');
	}
	elseif (post('campaign')==''){
	json_error('The field campaign cannot be empty!');
	}
	elseif (post('mailing')==''){
	json_error('The field mailing cannot be empty!');
	}
	elseif (post('originalFileName')==''){
	json_error('The field originalFileName cannot be empty!');
	}
	elseif (post('pdfFileName')==''){
	json_error('The field pdfFileName cannot be empty!');
	}
	elseif (post('token')==''){
	json_error('The field token cannot be empty!');
	}
	else{
	$this->maintenancedata_model->Insert(post('parentId'),post('jobId'),post('parentJobId'),post('campaign'),post('mailing'),post('originalFileName'),post('pdfFileName'),post('token'));
	json_send(''.H_CLIENT.'&view=maintenancedata&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->maintenancedata_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/maintenancedata/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('parentId')==''){
	json_error('The field parentId cannot be empty!');
	}
	elseif (post('jobId')==''){
	json_error('The field jobId cannot be empty!');
	}
	elseif (post('parentJobId')==''){
	json_error('The field parentJobId cannot be empty!');
	}
	elseif (post('campaign')==''){
	json_error('The field campaign cannot be empty!');
	}
	elseif (post('mailing')==''){
	json_error('The field mailing cannot be empty!');
	}
	elseif (post('originalFileName')==''){
	json_error('The field originalFileName cannot be empty!');
	}
	elseif (post('pdfFileName')==''){
	json_error('The field pdfFileName cannot be empty!');
	}
	elseif (post('token')==''){
	json_error('The field token cannot be empty!');
	}
	else{
	$this->maintenancedata_model->Update(post('parentId'),post('jobId'),post('parentJobId'),post('campaign'),post('mailing'),post('originalFileName'),post('pdfFileName'),post('token'),post('id'));
	json_send(''.H_CLIENT.'&view=maintenancedata&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->maintenancedata_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/maintenancedata/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->maintenancedata_model->TruncateTable(''.H_CLIENT.'&view=maintenancedata&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/maintenancedata/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->maintenancedata_model->Delete(get('id'),''.H_CLIENT.'&view=maintenancedata&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->maintenancedata_model->Delete(get('id'),''.H_CLIENT.'&view=maintenancedata&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=maintenancedata&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	