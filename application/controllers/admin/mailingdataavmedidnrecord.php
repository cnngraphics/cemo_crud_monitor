
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdataavmedidnrecord.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedidnrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdataavmedidnrecord.php');
	
	class mailingdataavmedidnrecord_controller {
	public $mailingdataavmedidnrecord_model;
	
	public function __construct()  
    {  
        $this->mailingdataavmedidnrecord_model = new mailingdataavmedidnrecord_model();
    } 
	
	public function invoke_mailingdataavmedidnrecord()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdataavmedidnrecord_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdataavmedidnrecord_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdataavmedidnrecord&do=viewall');
	}else{
	$result = $this->mailingdataavmedidnrecord_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/admin/mailingdataavmedidnrecord/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdataavmedidnrecord_model->SelectAll();
	include(APP_FOLDER.'/views/admin/mailingdataavmedidnrecord/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdataavmedidnrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmedidnrecord/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdataavmedidnrecord_model->AutoSearch(trim($qstring),10,'parent_id');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdataavmedidnrecord&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->parent_id.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/admin/mailingdataavmedidnrecord/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('parent_id')==''){
	json_error('The field parent id cannot be empty!');
	}
	elseif (post('claim')==''){
	json_error('The field claim cannot be empty!');
	}
	elseif (post('service')==''){
	json_error('The field service cannot be empty!');
	}
	elseif (post('serviceDate')==''){
	json_error('The field serviceDate cannot be empty!');
	}
	elseif (post('description')==''){
	json_error('The field description cannot be empty!');
	}
	elseif (post('codes')==''){
	json_error('The field codes cannot be empty!');
	}
	elseif (post('codeDesc')==''){
	json_error('The field codeDesc cannot be empty!');
	}
	elseif (post('provider')==''){
	json_error('The field provider cannot be empty!');
	}
	elseif (post('providerNumber')==''){
	json_error('The field providerNumber cannot be empty!');
	}
	elseif (post('billed')==''){
	json_error('The field billed cannot be empty!');
	}
	elseif (post('responsability')==''){
	json_error('The field responsability cannot be empty!');
	}
	elseif (post('type')==''){
	json_error('The field type cannot be empty!');
	}
	else{
	$this->mailingdataavmedidnrecord_model->Insert(post('parent_id'),post('claim'),post('service'),post('serviceDate'),post('description'),post('codes'),post('codeDesc'),post('provider'),post('providerNumber'),post('billed'),post('responsability'),post('type'));
	json_send(''.H_ADMIN.'&view=mailingdataavmedidnrecord&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdataavmedidnrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmedidnrecord/Update.php');
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
	elseif (post('claim')==''){
	json_error('The field claim cannot be empty!');
	}
	elseif (post('service')==''){
	json_error('The field service cannot be empty!');
	}
	elseif (post('serviceDate')==''){
	json_error('The field serviceDate cannot be empty!');
	}
	elseif (post('description')==''){
	json_error('The field description cannot be empty!');
	}
	elseif (post('codes')==''){
	json_error('The field codes cannot be empty!');
	}
	elseif (post('codeDesc')==''){
	json_error('The field codeDesc cannot be empty!');
	}
	elseif (post('provider')==''){
	json_error('The field provider cannot be empty!');
	}
	elseif (post('providerNumber')==''){
	json_error('The field providerNumber cannot be empty!');
	}
	elseif (post('billed')==''){
	json_error('The field billed cannot be empty!');
	}
	elseif (post('responsability')==''){
	json_error('The field responsability cannot be empty!');
	}
	elseif (post('type')==''){
	json_error('The field type cannot be empty!');
	}
	else{
	$this->mailingdataavmedidnrecord_model->Update(post('parent_id'),post('claim'),post('service'),post('serviceDate'),post('description'),post('codes'),post('codeDesc'),post('provider'),post('providerNumber'),post('billed'),post('responsability'),post('type'),post('id'));
	json_send(''.H_ADMIN.'&view=mailingdataavmedidnrecord&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdataavmedidnrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmedidnrecord/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdataavmedidnrecord_model->TruncateTable(''.H_ADMIN.'&view=mailingdataavmedidnrecord&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/admin/mailingdataavmedidnrecord/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdataavmedidnrecord_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdataavmedidnrecord&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdataavmedidnrecord_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdataavmedidnrecord&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_ADMIN.'&view=mailingdataavmedidnrecord&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	