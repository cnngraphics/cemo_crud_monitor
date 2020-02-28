
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        jobdata.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		jobdata
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/jobdata.php');
	
	class jobdata_controller {
	public $jobdata_model;
	
	public function __construct()  
    {  
        $this->jobdata_model = new jobdata_model();
    } 
	
	public function invoke_jobdata()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->jobdata_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->jobdata_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=jobdata&do=viewall');
	}else{
	$result = $this->jobdata_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/admin/jobdata/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->jobdata_model->SelectAll();
	include(APP_FOLDER.'/views/admin/jobdata/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->jobdata_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/jobdata/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->jobdata_model->AutoSearch(trim($qstring),10,'createdAt');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=jobdata&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->createdAt.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/admin/jobdata/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('createdAt')==''){
	json_error('The field createdAt cannot be empty!');
	}
	elseif (post('finishedAt')==''){
	json_error('The field finishedAt cannot be empty!');
	}
	elseif (post('jobName')==''){
	json_error('The field jobName cannot be empty!');
	}
	elseif (post('oiJobNumber')==''){
	json_error('The field oiJobNumber cannot be empty!');
	}
	elseif (post('status')==''){
	json_error('The field status cannot be empty!');
	}
	else{
	$this->jobdata_model->Insert(post('createdAt'),post('finishedAt'),post('jobName'),post('oiJobNumber'),post('status'));
	json_send(''.H_ADMIN.'&view=jobdata&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->jobdata_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/jobdata/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('createdAt')==''){
	json_error('The field createdAt cannot be empty!');
	}
	elseif (post('finishedAt')==''){
	json_error('The field finishedAt cannot be empty!');
	}
	elseif (post('jobName')==''){
	json_error('The field jobName cannot be empty!');
	}
	elseif (post('oiJobNumber')==''){
	json_error('The field oiJobNumber cannot be empty!');
	}
	elseif (post('status')==''){
	json_error('The field status cannot be empty!');
	}
	else{
	$this->jobdata_model->Update(post('createdAt'),post('finishedAt'),post('jobName'),post('oiJobNumber'),post('status'),post('id'));
	json_send(''.H_ADMIN.'&view=jobdata&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->jobdata_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/jobdata/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->jobdata_model->TruncateTable(''.H_ADMIN.'&view=jobdata&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/admin/jobdata/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->jobdata_model->Delete(get('id'),''.H_ADMIN.'&view=jobdata&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->jobdata_model->Delete(get('id'),''.H_ADMIN.'&view=jobdata&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_ADMIN.'&view=jobdata&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	