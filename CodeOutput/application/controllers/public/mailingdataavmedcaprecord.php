
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdataavmedcaprecord.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedcaprecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdataavmedcaprecord.php');
	
	class mailingdataavmedcaprecord_controller {
	public $mailingdataavmedcaprecord_model;
	
	public function __construct()  
    {  
        $this->mailingdataavmedcaprecord_model = new mailingdataavmedcaprecord_model();
    } 
	
	public function invoke_mailingdataavmedcaprecord()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdataavmedcaprecord_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdataavmedcaprecord_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdataavmedcaprecord&do=viewall');
	}else{
	$result = $this->mailingdataavmedcaprecord_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/mailingdataavmedcaprecord/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdataavmedcaprecord_model->SelectAll();
	include(APP_FOLDER.'/views/public/mailingdataavmedcaprecord/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdataavmedcaprecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedcaprecord/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdataavmedcaprecord_model->AutoSearch(trim($qstring),10,'parent_id');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdataavmedcaprecord&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->parent_id.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/mailingdataavmedcaprecord/Add.php');
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
	elseif (post('pageData')==''){
	json_error('The field pageData cannot be empty!');
	}
	else{
	$this->mailingdataavmedcaprecord_model->Insert(post('parent_id'),post('page'),post('pageData'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedcaprecord&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdataavmedcaprecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedcaprecord/Update.php');
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
	elseif (post('pageData')==''){
	json_error('The field pageData cannot be empty!');
	}
	else{
	$this->mailingdataavmedcaprecord_model->Update(post('parent_id'),post('page'),post('pageData'),post('id'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedcaprecord&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdataavmedcaprecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedcaprecord/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdataavmedcaprecord_model->TruncateTable(''.H_CLIENT.'&view=mailingdataavmedcaprecord&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/mailingdataavmedcaprecord/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdataavmedcaprecord_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedcaprecord&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdataavmedcaprecord_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedcaprecord&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=mailingdataavmedcaprecord&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	