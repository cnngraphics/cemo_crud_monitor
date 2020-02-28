
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdataavmedrecord.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdataavmedrecord.php');
	
	class mailingdataavmedrecord_controller {
	public $mailingdataavmedrecord_model;
	
	public function __construct()  
    {  
        $this->mailingdataavmedrecord_model = new mailingdataavmedrecord_model();
    } 
	
	public function invoke_mailingdataavmedrecord()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdataavmedrecord_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdataavmedrecord_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdataavmedrecord&do=viewall');
	}else{
	$result = $this->mailingdataavmedrecord_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/admin/mailingdataavmedrecord/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdataavmedrecord_model->SelectAll();
	include(APP_FOLDER.'/views/admin/mailingdataavmedrecord/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdataavmedrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmedrecord/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdataavmedrecord_model->AutoSearch(trim($qstring),10,'parent_id');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdataavmedrecord&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->parent_id.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/admin/mailingdataavmedrecord/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('parent_id')==''){
	json_error('The field parent id cannot be empty!');
	}
	elseif (post('recordId')==''){
	json_error('The field recordId cannot be empty!');
	}
	elseif (post('memberId')==''){
	json_error('The field memberId cannot be empty!');
	}
	elseif (post('line')==''){
	json_error('The field line cannot be empty!');
	}
	else{
	$this->mailingdataavmedrecord_model->Insert(post('parent_id'),post('recordId'),post('memberId'),post('line'));
	json_send(''.H_ADMIN.'&view=mailingdataavmedrecord&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdataavmedrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmedrecord/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('parent_id')==''){
	json_error('The field parent id cannot be empty!');
	}
	elseif (post('recordId')==''){
	json_error('The field recordId cannot be empty!');
	}
	elseif (post('memberId')==''){
	json_error('The field memberId cannot be empty!');
	}
	elseif (post('line')==''){
	json_error('The field line cannot be empty!');
	}
	else{
	$this->mailingdataavmedrecord_model->Update(post('parent_id'),post('recordId'),post('memberId'),post('line'),post('id'));
	json_send(''.H_ADMIN.'&view=mailingdataavmedrecord&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdataavmedrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmedrecord/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdataavmedrecord_model->TruncateTable(''.H_ADMIN.'&view=mailingdataavmedrecord&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/admin/mailingdataavmedrecord/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdataavmedrecord_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdataavmedrecord&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdataavmedrecord_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdataavmedrecord&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_ADMIN.'&view=mailingdataavmedrecord&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	