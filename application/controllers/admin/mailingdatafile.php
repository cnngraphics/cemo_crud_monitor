
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdatafile.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatafile
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdatafile.php');
	
	class mailingdatafile_controller {
	public $mailingdatafile_model;
	
	public function __construct()  
    {  
        $this->mailingdatafile_model = new mailingdatafile_model();
    } 
	
	public function invoke_mailingdatafile()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdatafile_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdatafile_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdatafile&do=viewall');
	}else{
	$result = $this->mailingdatafile_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/admin/mailingdatafile/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdatafile_model->SelectAll();
	include(APP_FOLDER.'/views/admin/mailingdatafile/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdatafile_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdatafile/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdatafile_model->AutoSearch(trim($qstring),10,'header_id');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdatafile&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->header_id.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/admin/mailingdatafile/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('header_id')==''){
	json_error('The field header id cannot be empty!');
	}
	elseif (post('footer_id')==''){
	json_error('The field footer id cannot be empty!');
	}
	elseif (post('fileName')==''){
	json_error('The field fileName cannot be empty!');
	}
	elseif (post('fileNameMm')==''){
	json_error('The field fileNameMm cannot be empty!');
	}
	elseif (post('createdAt')==''){
	json_error('The field createdAt cannot be empty!');
	}
	elseif (post('jobData_id')==''){
	json_error('The field jobData id cannot be empty!');
	}
	elseif (post('discr')==''){
	json_error('The field discr cannot be empty!');
	}
	elseif (post('totalRecords')==''){
	json_error('The field totalRecords cannot be empty!');
	}
	else{
	$this->mailingdatafile_model->Insert(post('header_id'),post('footer_id'),post('fileName'),post('fileNameMm'),post('createdAt'),post('jobData_id'),post('discr'),post('totalRecords'));
	json_send(''.H_ADMIN.'&view=mailingdatafile&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdatafile_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdatafile/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('header_id')==''){
	json_error('The field header id cannot be empty!');
	}
	elseif (post('footer_id')==''){
	json_error('The field footer id cannot be empty!');
	}
	elseif (post('fileName')==''){
	json_error('The field fileName cannot be empty!');
	}
	elseif (post('fileNameMm')==''){
	json_error('The field fileNameMm cannot be empty!');
	}
	elseif (post('createdAt')==''){
	json_error('The field createdAt cannot be empty!');
	}
	elseif (post('jobData_id')==''){
	json_error('The field jobData id cannot be empty!');
	}
	elseif (post('discr')==''){
	json_error('The field discr cannot be empty!');
	}
	elseif (post('totalRecords')==''){
	json_error('The field totalRecords cannot be empty!');
	}
	else{
	$this->mailingdatafile_model->Update(post('header_id'),post('footer_id'),post('fileName'),post('fileNameMm'),post('createdAt'),post('jobData_id'),post('discr'),post('totalRecords'),post('id'));
	json_send(''.H_ADMIN.'&view=mailingdatafile&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdatafile_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdatafile/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdatafile_model->TruncateTable(''.H_ADMIN.'&view=mailingdatafile&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/admin/mailingdatafile/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdatafile_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdatafile&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdatafile_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdatafile&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_ADMIN.'&view=mailingdatafile&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	