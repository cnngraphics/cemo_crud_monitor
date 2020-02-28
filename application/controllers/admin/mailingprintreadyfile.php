
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingprintreadyfile.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingprintreadyfile
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingprintreadyfile.php');
	
	class mailingprintreadyfile_controller {
	public $mailingprintreadyfile_model;
	
	public function __construct()  
    {  
        $this->mailingprintreadyfile_model = new mailingprintreadyfile_model();
    } 
	
	public function invoke_mailingprintreadyfile()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingprintreadyfile_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingprintreadyfile_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingprintreadyfile&do=viewall');
	}else{
	$result = $this->mailingprintreadyfile_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/admin/mailingprintreadyfile/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingprintreadyfile_model->SelectAll();
	include(APP_FOLDER.'/views/admin/mailingprintreadyfile/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingprintreadyfile_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingprintreadyfile/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingprintreadyfile_model->AutoSearch(trim($qstring),10,'fileName');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingprintreadyfile&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->fileName.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/admin/mailingprintreadyfile/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('fileName')==''){
	json_error('The field fileName cannot be empty!');
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
	elseif (post('pdfTotPages')==''){
	json_error('The field pdfTotPages cannot be empty!');
	}
	elseif (post('pdfTotalRecords')==''){
	json_error('The field pdfTotalRecords cannot be empty!');
	}
	else{
	$this->mailingprintreadyfile_model->Insert(post('fileName'),post('createdAt'),post('jobData_id'),post('discr'),post('pdfTotPages'),post('pdfTotalRecords'));
	json_send(''.H_ADMIN.'&view=mailingprintreadyfile&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingprintreadyfile_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingprintreadyfile/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('fileName')==''){
	json_error('The field fileName cannot be empty!');
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
	elseif (post('pdfTotPages')==''){
	json_error('The field pdfTotPages cannot be empty!');
	}
	elseif (post('pdfTotalRecords')==''){
	json_error('The field pdfTotalRecords cannot be empty!');
	}
	else{
	$this->mailingprintreadyfile_model->Update(post('fileName'),post('createdAt'),post('jobData_id'),post('discr'),post('pdfTotPages'),post('pdfTotalRecords'),post('id'));
	json_send(''.H_ADMIN.'&view=mailingprintreadyfile&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingprintreadyfile_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingprintreadyfile/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingprintreadyfile_model->TruncateTable(''.H_ADMIN.'&view=mailingprintreadyfile&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/admin/mailingprintreadyfile/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingprintreadyfile_model->Delete(get('id'),''.H_ADMIN.'&view=mailingprintreadyfile&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingprintreadyfile_model->Delete(get('id'),''.H_ADMIN.'&view=mailingprintreadyfile&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_ADMIN.'&view=mailingprintreadyfile&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	