
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdataavmedgroupinvoicesrecord10.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord10
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdataavmedgroupinvoicesrecord10.php');
	
	class mailingdataavmedgroupinvoicesrecord10_controller {
	public $mailingdataavmedgroupinvoicesrecord10_model;
	
	public function __construct()  
    {  
        $this->mailingdataavmedgroupinvoicesrecord10_model = new mailingdataavmedgroupinvoicesrecord10_model();
    } 
	
	public function invoke_mailingdataavmedgroupinvoicesrecord10()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdataavmedgroupinvoicesrecord10_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdataavmedgroupinvoicesrecord10_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord10&do=viewall');
	}else{
	$result = $this->mailingdataavmedgroupinvoicesrecord10_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/admin/mailingdataavmedgroupinvoicesrecord10/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdataavmedgroupinvoicesrecord10_model->SelectAll();
	include(APP_FOLDER.'/views/admin/mailingdataavmedgroupinvoicesrecord10/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdataavmedgroupinvoicesrecord10_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmedgroupinvoicesrecord10/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdataavmedgroupinvoicesrecord10_model->AutoSearch(trim($qstring),10,'invNo');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord10&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->invNo.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/admin/mailingdataavmedgroupinvoicesrecord10/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('invNo')==''){
	json_error('The field invNo cannot be empty!');
	}
	elseif (post('invDate')==''){
	json_error('The field invDate cannot be empty!');
	}
	elseif (post('dueDate')==''){
	json_error('The field dueDate cannot be empty!');
	}
	elseif (post('cycleCode')==''){
	json_error('The field cycleCode cannot be empty!');
	}
	elseif (post('billFrom')==''){
	json_error('The field billFrom cannot be empty!');
	}
	elseif (post('billTo')==''){
	json_error('The field billTo cannot be empty!');
	}
	elseif (post('billingMethod')==''){
	json_error('The field billingMethod cannot be empty!');
	}
	else{
	$this->mailingdataavmedgroupinvoicesrecord10_model->Insert(post('invNo'),post('invDate'),post('dueDate'),post('cycleCode'),post('billFrom'),post('billTo'),post('billingMethod'));
	json_send(''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord10&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdataavmedgroupinvoicesrecord10_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmedgroupinvoicesrecord10/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('invNo')==''){
	json_error('The field invNo cannot be empty!');
	}
	elseif (post('invDate')==''){
	json_error('The field invDate cannot be empty!');
	}
	elseif (post('dueDate')==''){
	json_error('The field dueDate cannot be empty!');
	}
	elseif (post('cycleCode')==''){
	json_error('The field cycleCode cannot be empty!');
	}
	elseif (post('billFrom')==''){
	json_error('The field billFrom cannot be empty!');
	}
	elseif (post('billTo')==''){
	json_error('The field billTo cannot be empty!');
	}
	elseif (post('billingMethod')==''){
	json_error('The field billingMethod cannot be empty!');
	}
	else{
	$this->mailingdataavmedgroupinvoicesrecord10_model->Update(post('invNo'),post('invDate'),post('dueDate'),post('cycleCode'),post('billFrom'),post('billTo'),post('billingMethod'),post('id'));
	json_send(''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord10&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdataavmedgroupinvoicesrecord10_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmedgroupinvoicesrecord10/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdataavmedgroupinvoicesrecord10_model->TruncateTable(''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord10&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/admin/mailingdataavmedgroupinvoicesrecord10/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdataavmedgroupinvoicesrecord10_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord10&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdataavmedgroupinvoicesrecord10_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord10&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord10&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	