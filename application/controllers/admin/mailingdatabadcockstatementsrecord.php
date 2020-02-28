
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdatabadcockstatementsrecord.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatabadcockstatementsrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdatabadcockstatementsrecord.php');
	
	class mailingdatabadcockstatementsrecord_controller {
	public $mailingdatabadcockstatementsrecord_model;
	
	public function __construct()  
    {  
        $this->mailingdatabadcockstatementsrecord_model = new mailingdatabadcockstatementsrecord_model();
    } 
	
	public function invoke_mailingdatabadcockstatementsrecord()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdatabadcockstatementsrecord_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdatabadcockstatementsrecord_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdatabadcockstatementsrecord&do=viewall');
	}else{
	$result = $this->mailingdatabadcockstatementsrecord_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/admin/mailingdatabadcockstatementsrecord/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdatabadcockstatementsrecord_model->SelectAll();
	include(APP_FOLDER.'/views/admin/mailingdatabadcockstatementsrecord/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdatabadcockstatementsrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdatabadcockstatementsrecord/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdatabadcockstatementsrecord_model->AutoSearch(trim($qstring),10,'parent_id');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdatabadcockstatementsrecord&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->parent_id.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/admin/mailingdatabadcockstatementsrecord/Add.php');
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
	else{
	$this->mailingdatabadcockstatementsrecord_model->Insert(post('parent_id'),post('page'));
	json_send(''.H_ADMIN.'&view=mailingdatabadcockstatementsrecord&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdatabadcockstatementsrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdatabadcockstatementsrecord/Update.php');
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
	else{
	$this->mailingdatabadcockstatementsrecord_model->Update(post('parent_id'),post('page'),post('id'));
	json_send(''.H_ADMIN.'&view=mailingdatabadcockstatementsrecord&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdatabadcockstatementsrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdatabadcockstatementsrecord/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdatabadcockstatementsrecord_model->TruncateTable(''.H_ADMIN.'&view=mailingdatabadcockstatementsrecord&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/admin/mailingdatabadcockstatementsrecord/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdatabadcockstatementsrecord_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdatabadcockstatementsrecord&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdatabadcockstatementsrecord_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdatabadcockstatementsrecord&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_ADMIN.'&view=mailingdatabadcockstatementsrecord&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	