
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdataavmedgroupinvoicesrecord21.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord21
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdataavmedgroupinvoicesrecord21.php');
	
	class mailingdataavmedgroupinvoicesrecord21_controller {
	public $mailingdataavmedgroupinvoicesrecord21_model;
	
	public function __construct()  
    {  
        $this->mailingdataavmedgroupinvoicesrecord21_model = new mailingdataavmedgroupinvoicesrecord21_model();
    } 
	
	public function invoke_mailingdataavmedgroupinvoicesrecord21()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdataavmedgroupinvoicesrecord21_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdataavmedgroupinvoicesrecord21_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord21&do=viewall');
	}else{
	$result = $this->mailingdataavmedgroupinvoicesrecord21_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord21/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdataavmedgroupinvoicesrecord21_model->SelectAll();
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord21/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdataavmedgroupinvoicesrecord21_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord21/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdataavmedgroupinvoicesrecord21_model->AutoSearch(trim($qstring),10,'invNo');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord21&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->invNo.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord21/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('invNo')==''){
	json_error('The field invNo cannot be empty!');
	}
	elseif (post('subscriberAddr2')==''){
	json_error('The field subscriberAddr2 cannot be empty!');
	}
	elseif (post('subscriberAddr3')==''){
	json_error('The field subscriberAddr3 cannot be empty!');
	}
	elseif (post('acctId')==''){
	json_error('The field acctId cannot be empty!');
	}
	elseif (post('contact')==''){
	json_error('The field contact cannot be empty!');
	}
	else{
	$this->mailingdataavmedgroupinvoicesrecord21_model->Insert(post('invNo'),post('subscriberAddr2'),post('subscriberAddr3'),post('acctId'),post('contact'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord21&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdataavmedgroupinvoicesrecord21_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord21/Update.php');
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
	elseif (post('subscriberAddr2')==''){
	json_error('The field subscriberAddr2 cannot be empty!');
	}
	elseif (post('subscriberAddr3')==''){
	json_error('The field subscriberAddr3 cannot be empty!');
	}
	elseif (post('acctId')==''){
	json_error('The field acctId cannot be empty!');
	}
	elseif (post('contact')==''){
	json_error('The field contact cannot be empty!');
	}
	else{
	$this->mailingdataavmedgroupinvoicesrecord21_model->Update(post('invNo'),post('subscriberAddr2'),post('subscriberAddr3'),post('acctId'),post('contact'),post('id'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord21&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdataavmedgroupinvoicesrecord21_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord21/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdataavmedgroupinvoicesrecord21_model->TruncateTable(''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord21&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord21/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdataavmedgroupinvoicesrecord21_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord21&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdataavmedgroupinvoicesrecord21_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord21&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord21&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	