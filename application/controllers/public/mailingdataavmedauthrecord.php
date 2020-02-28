
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdataavmedauthrecord.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedauthrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdataavmedauthrecord.php');
	
	class mailingdataavmedauthrecord_controller {
	public $mailingdataavmedauthrecord_model;
	
	public function __construct()  
    {  
        $this->mailingdataavmedauthrecord_model = new mailingdataavmedauthrecord_model();
    } 
	
	public function invoke_mailingdataavmedauthrecord()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdataavmedauthrecord_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdataavmedauthrecord_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdataavmedauthrecord&do=viewall');
	}else{
	$result = $this->mailingdataavmedauthrecord_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/mailingdataavmedauthrecord/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdataavmedauthrecord_model->SelectAll();
	include(APP_FOLDER.'/views/public/mailingdataavmedauthrecord/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdataavmedauthrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedauthrecord/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdataavmedauthrecord_model->AutoSearch(trim($qstring),10,'parent_id');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdataavmedauthrecord&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->parent_id.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/mailingdataavmedauthrecord/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('parent_id')==''){
	json_error('The field parent id cannot be empty!');
	}
	elseif (post('page')==''){
	json_error('The field page cannot be empty!');
	}
	elseif (post('date')==''){
	json_error('The field date cannot be empty!');
	}
	elseif (post('summary')==''){
	json_error('The field summary cannot be empty!');
	}
	elseif (post('info')==''){
	json_error('The field info cannot be empty!');
	}
	elseif (post('status')==''){
	json_error('The field status cannot be empty!');
	}
	elseif (post('prov')==''){
	json_error('The field prov cannot be empty!');
	}
	elseif (post('header1')==''){
	json_error('The field header1 cannot be empty!');
	}
	elseif (post('header2')==''){
	json_error('The field header2 cannot be empty!');
	}
	elseif (post('details')==''){
	json_error('The field details cannot be empty!');
	}
	else{
	$this->mailingdataavmedauthrecord_model->Insert(post('parent_id'),post('page'),post('date'),post('summary'),post('info'),post('status'),post('prov'),post('header1'),post('header2'),post('details'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedauthrecord&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdataavmedauthrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedauthrecord/Update.php');
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
	elseif (post('page')==''){
	json_error('The field page cannot be empty!');
	}
	elseif (post('date')==''){
	json_error('The field date cannot be empty!');
	}
	elseif (post('summary')==''){
	json_error('The field summary cannot be empty!');
	}
	elseif (post('info')==''){
	json_error('The field info cannot be empty!');
	}
	elseif (post('status')==''){
	json_error('The field status cannot be empty!');
	}
	elseif (post('prov')==''){
	json_error('The field prov cannot be empty!');
	}
	elseif (post('header1')==''){
	json_error('The field header1 cannot be empty!');
	}
	elseif (post('header2')==''){
	json_error('The field header2 cannot be empty!');
	}
	elseif (post('details')==''){
	json_error('The field details cannot be empty!');
	}
	else{
	$this->mailingdataavmedauthrecord_model->Update(post('parent_id'),post('page'),post('date'),post('summary'),post('info'),post('status'),post('prov'),post('header1'),post('header2'),post('details'),post('id'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedauthrecord&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdataavmedauthrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedauthrecord/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdataavmedauthrecord_model->TruncateTable(''.H_CLIENT.'&view=mailingdataavmedauthrecord&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/mailingdataavmedauthrecord/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdataavmedauthrecord_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedauthrecord&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdataavmedauthrecord_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedauthrecord&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=mailingdataavmedauthrecord&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	