
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdataavmedeobrecord.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedeobrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdataavmedeobrecord.php');
	
	class mailingdataavmedeobrecord_controller {
	public $mailingdataavmedeobrecord_model;
	
	public function __construct()  
    {  
        $this->mailingdataavmedeobrecord_model = new mailingdataavmedeobrecord_model();
    } 
	
	public function invoke_mailingdataavmedeobrecord()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdataavmedeobrecord_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdataavmedeobrecord_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdataavmedeobrecord&do=viewall');
	}else{
	$result = $this->mailingdataavmedeobrecord_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/mailingdataavmedeobrecord/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdataavmedeobrecord_model->SelectAll();
	include(APP_FOLDER.'/views/public/mailingdataavmedeobrecord/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdataavmedeobrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedeobrecord/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdataavmedeobrecord_model->AutoSearch(trim($qstring),10,'parent_id');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdataavmedeobrecord&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->parent_id.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/mailingdataavmedeobrecord/Add.php');
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
	elseif (post('pageDataAcc')==''){
	json_error('The field pageDataAcc cannot be empty!');
	}
	elseif (post('pageDataHeader')==''){
	json_error('The field pageDataHeader cannot be empty!');
	}
	elseif (post('pageDate')==''){
	json_error('The field pageDate cannot be empty!');
	}
	elseif (post('pageBK')==''){
	json_error('The field pageBK cannot be empty!');
	}
	else{
	$this->mailingdataavmedeobrecord_model->Insert(post('parent_id'),post('page'),post('pageData'),post('pageDataAcc'),post('pageDataHeader'),post('pageDate'),post('pageBK'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedeobrecord&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdataavmedeobrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedeobrecord/Update.php');
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
	elseif (post('pageDataAcc')==''){
	json_error('The field pageDataAcc cannot be empty!');
	}
	elseif (post('pageDataHeader')==''){
	json_error('The field pageDataHeader cannot be empty!');
	}
	elseif (post('pageDate')==''){
	json_error('The field pageDate cannot be empty!');
	}
	elseif (post('pageBK')==''){
	json_error('The field pageBK cannot be empty!');
	}
	else{
	$this->mailingdataavmedeobrecord_model->Update(post('parent_id'),post('page'),post('pageData'),post('pageDataAcc'),post('pageDataHeader'),post('pageDate'),post('pageBK'),post('id'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedeobrecord&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdataavmedeobrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedeobrecord/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdataavmedeobrecord_model->TruncateTable(''.H_CLIENT.'&view=mailingdataavmedeobrecord&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/mailingdataavmedeobrecord/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdataavmedeobrecord_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedeobrecord&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdataavmedeobrecord_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedeobrecord&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=mailingdataavmedeobrecord&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	