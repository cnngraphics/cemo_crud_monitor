
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        emaillog.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		emaillog
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/emaillog.php');
	
	class emaillog_controller {
	public $emaillog_model;
	
	public function __construct()  
    {  
        $this->emaillog_model = new emaillog_model();
    } 
	
	public function invoke_emaillog()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->emaillog_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->emaillog_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=emaillog&do=viewall');
	}else{
	$result = $this->emaillog_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/emaillog/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->emaillog_model->SelectAll();
	include(APP_FOLDER.'/views/public/emaillog/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->emaillog_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/emaillog/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->emaillog_model->AutoSearch(trim($qstring),10,'dateSent');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=emaillog&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->dateSent.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/emaillog/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('dateSent')==''){
	json_error('The field dateSent cannot be empty!');
	}
	elseif (post('mailTo')==''){
	json_error('The field mailTo cannot be empty!');
	}
	elseif (post('cc')==''){
	json_error('The field cc cannot be empty!');
	}
	elseif (post('bcc')==''){
	json_error('The field bcc cannot be empty!');
	}
	elseif (post('subject')==''){
	json_error('The field subject cannot be empty!');
	}
	elseif (post('body')==''){
	json_error('The field body cannot be empty!');
	}
	elseif (post('cemiUserId')==''){
	json_error('The field cemiUserId cannot be empty!');
	}
	elseif (post('cronConductor_id')==''){
	json_error('The field cronConductor id cannot be empty!');
	}
	else{
	$this->emaillog_model->Insert(post('dateSent'),post('mailTo'),post('cc'),post('bcc'),post('subject'),post('body'),post('cemiUserId'),post('cronConductor_id'));
	json_send(''.H_CLIENT.'&view=emaillog&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->emaillog_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/emaillog/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('dateSent')==''){
	json_error('The field dateSent cannot be empty!');
	}
	elseif (post('mailTo')==''){
	json_error('The field mailTo cannot be empty!');
	}
	elseif (post('cc')==''){
	json_error('The field cc cannot be empty!');
	}
	elseif (post('bcc')==''){
	json_error('The field bcc cannot be empty!');
	}
	elseif (post('subject')==''){
	json_error('The field subject cannot be empty!');
	}
	elseif (post('body')==''){
	json_error('The field body cannot be empty!');
	}
	elseif (post('cemiUserId')==''){
	json_error('The field cemiUserId cannot be empty!');
	}
	elseif (post('cronConductor_id')==''){
	json_error('The field cronConductor id cannot be empty!');
	}
	else{
	$this->emaillog_model->Update(post('dateSent'),post('mailTo'),post('cc'),post('bcc'),post('subject'),post('body'),post('cemiUserId'),post('cronConductor_id'),post('id'));
	json_send(''.H_CLIENT.'&view=emaillog&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->emaillog_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/emaillog/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->emaillog_model->TruncateTable(''.H_CLIENT.'&view=emaillog&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/emaillog/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->emaillog_model->Delete(get('id'),''.H_CLIENT.'&view=emaillog&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->emaillog_model->Delete(get('id'),''.H_CLIENT.'&view=emaillog&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=emaillog&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	