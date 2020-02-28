
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        cronconductor.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		cronconductor
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/cronconductor.php');
	
	class cronconductor_controller {
	public $cronconductor_model;
	
	public function __construct()  
    {  
        $this->cronconductor_model = new cronconductor_model();
    } 
	
	public function invoke_cronconductor()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->cronconductor_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->cronconductor_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=cronconductor&do=viewall');
	}else{
	$result = $this->cronconductor_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/cronconductor/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->cronconductor_model->SelectAll();
	include(APP_FOLDER.'/views/public/cronconductor/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->cronconductor_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/cronconductor/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->cronconductor_model->AutoSearch(trim($qstring),10,'cronFunction');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=cronconductor&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->cronFunction.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/cronconductor/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('cronFunction')==''){
	json_error('The field cronFunction cannot be empty!');
	}
	elseif (post('timeAdded')==''){
	json_error('The field timeAdded cannot be empty!');
	}
	elseif (post('addedBy')==''){
	json_error('The field addedBy cannot be empty!');
	}
	elseif (post('timeToRun')==''){
	json_error('The field timeToRun cannot be empty!');
	}
	elseif (post('timeRan')==''){
	json_error('The field timeRan cannot be empty!');
	}
	elseif (post('timeNeededToRun')==''){
	json_error('The field timeNeededToRun cannot be empty!');
	}
	elseif (post('ranBy')==''){
	json_error('The field ranBy cannot be empty!');
	}
	elseif (post('timeFinished')==''){
	json_error('The field timeFinished cannot be empty!');
	}
	elseif (post('error')==''){
	json_error('The field error cannot be empty!');
	}
	elseif (post('sleeping')==''){
	json_error('The field sleeping cannot be empty!');
	}
	elseif (post('jobData_id')==''){
	json_error('The field jobData id cannot be empty!');
	}
	elseif (post('clientData_id')==''){
	json_error('The field clientData id cannot be empty!');
	}
	else{
	$this->cronconductor_model->Insert(post('cronFunction'),post('timeAdded'),post('addedBy'),post('timeToRun'),post('timeRan'),post('timeNeededToRun'),post('ranBy'),post('timeFinished'),post('error'),post('sleeping'),post('jobData_id'),post('clientData_id'));
	json_send(''.H_CLIENT.'&view=cronconductor&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->cronconductor_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/cronconductor/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('cronFunction')==''){
	json_error('The field cronFunction cannot be empty!');
	}
	elseif (post('timeAdded')==''){
	json_error('The field timeAdded cannot be empty!');
	}
	elseif (post('addedBy')==''){
	json_error('The field addedBy cannot be empty!');
	}
	elseif (post('timeToRun')==''){
	json_error('The field timeToRun cannot be empty!');
	}
	elseif (post('timeRan')==''){
	json_error('The field timeRan cannot be empty!');
	}
	elseif (post('timeNeededToRun')==''){
	json_error('The field timeNeededToRun cannot be empty!');
	}
	elseif (post('ranBy')==''){
	json_error('The field ranBy cannot be empty!');
	}
	elseif (post('timeFinished')==''){
	json_error('The field timeFinished cannot be empty!');
	}
	elseif (post('error')==''){
	json_error('The field error cannot be empty!');
	}
	elseif (post('sleeping')==''){
	json_error('The field sleeping cannot be empty!');
	}
	elseif (post('jobData_id')==''){
	json_error('The field jobData id cannot be empty!');
	}
	elseif (post('clientData_id')==''){
	json_error('The field clientData id cannot be empty!');
	}
	else{
	$this->cronconductor_model->Update(post('cronFunction'),post('timeAdded'),post('addedBy'),post('timeToRun'),post('timeRan'),post('timeNeededToRun'),post('ranBy'),post('timeFinished'),post('error'),post('sleeping'),post('jobData_id'),post('clientData_id'),post('id'));
	json_send(''.H_CLIENT.'&view=cronconductor&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->cronconductor_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/cronconductor/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->cronconductor_model->TruncateTable(''.H_CLIENT.'&view=cronconductor&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/cronconductor/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->cronconductor_model->Delete(get('id'),''.H_CLIENT.'&view=cronconductor&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->cronconductor_model->Delete(get('id'),''.H_CLIENT.'&view=cronconductor&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=cronconductor&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	