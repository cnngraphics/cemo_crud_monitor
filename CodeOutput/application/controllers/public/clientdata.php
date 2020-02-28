
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        clientdata.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		clientdata
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/clientdata.php');
	
	class clientdata_controller {
	public $clientdata_model;
	
	public function __construct()  
    {  
        $this->clientdata_model = new clientdata_model();
    } 
	
	public function invoke_clientdata()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->clientdata_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->clientdata_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=clientdata&do=viewall');
	}else{
	$result = $this->clientdata_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/clientdata/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->clientdata_model->SelectAll();
	include(APP_FOLDER.'/views/public/clientdata/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->clientdata_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/clientdata/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->clientdata_model->AutoSearch(trim($qstring),10,'clientName');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=clientdata&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->clientName.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/clientdata/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('clientName')==''){
	json_error('The field clientName cannot be empty!');
	}
	elseif (post('monthlyJobNumber')==''){
	json_error('The field monthlyJobNumber cannot be empty!');
	}
	elseif (post('visibleClientName')==''){
	json_error('The field visibleClientName cannot be empty!');
	}
	elseif (post('mailingDataEntity')==''){
	json_error('The field mailingDataEntity cannot be empty!');
	}
	elseif (post('listEmails')==''){
	json_error('The field listEmails cannot be empty!');
	}
	elseif (post('localFolder')==''){
	json_error('The field localFolder cannot be empty!');
	}
	elseif (post('jobGroup')==''){
	json_error('The field jobGroup cannot be empty!');
	}
	else{
	$this->clientdata_model->Insert(post('clientName'),post('monthlyJobNumber'),post('visibleClientName'),post('mailingDataEntity'),post('listEmails'),post('localFolder'),post('jobGroup'));
	json_send(''.H_CLIENT.'&view=clientdata&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->clientdata_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/clientdata/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('clientName')==''){
	json_error('The field clientName cannot be empty!');
	}
	elseif (post('monthlyJobNumber')==''){
	json_error('The field monthlyJobNumber cannot be empty!');
	}
	elseif (post('visibleClientName')==''){
	json_error('The field visibleClientName cannot be empty!');
	}
	elseif (post('mailingDataEntity')==''){
	json_error('The field mailingDataEntity cannot be empty!');
	}
	elseif (post('listEmails')==''){
	json_error('The field listEmails cannot be empty!');
	}
	elseif (post('localFolder')==''){
	json_error('The field localFolder cannot be empty!');
	}
	elseif (post('jobGroup')==''){
	json_error('The field jobGroup cannot be empty!');
	}
	else{
	$this->clientdata_model->Update(post('clientName'),post('monthlyJobNumber'),post('visibleClientName'),post('mailingDataEntity'),post('listEmails'),post('localFolder'),post('jobGroup'),post('id'));
	json_send(''.H_CLIENT.'&view=clientdata&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->clientdata_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/clientdata/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->clientdata_model->TruncateTable(''.H_CLIENT.'&view=clientdata&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/clientdata/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->clientdata_model->Delete(get('id'),''.H_CLIENT.'&view=clientdata&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->clientdata_model->Delete(get('id'),''.H_CLIENT.'&view=clientdata&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=clientdata&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	