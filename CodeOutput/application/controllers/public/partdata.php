
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        partdata.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		partdata
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/partdata.php');
	
	class partdata_controller {
	public $partdata_model;
	
	public function __construct()  
    {  
        $this->partdata_model = new partdata_model();
    } 
	
	public function invoke_partdata()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->partdata_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->partdata_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=partdata&do=viewall');
	}else{
	$result = $this->partdata_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/partdata/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->partdata_model->SelectAll();
	include(APP_FOLDER.'/views/public/partdata/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->partdata_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/partdata/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->partdata_model->AutoSearch(trim($qstring),10,'sourceFileName');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=partdata&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->sourceFileName.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/partdata/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('sourceFileName')==''){
	json_error('The field sourceFileName cannot be empty!');
	}
	elseif (post('campaign')==''){
	json_error('The field campaign cannot be empty!');
	}
	elseif (post('mailing')==''){
	json_error('The field mailing cannot be empty!');
	}
	elseif (post('originalFileName')==''){
	json_error('The field originalFileName cannot be empty!');
	}
	elseif (post('fileReceived')==''){
	json_error('The field fileReceived cannot be empty!');
	}
	elseif (post('filePrinted')==''){
	json_error('The field filePrinted cannot be empty!');
	}
	elseif (post('memberId')==''){
	json_error('The field memberId cannot be empty!');
	}
	elseif (post('name')==''){
	json_error('The field name cannot be empty!');
	}
	elseif (post('address1')==''){
	json_error('The field address1 cannot be empty!');
	}
	elseif (post('address2')==''){
	json_error('The field address2 cannot be empty!');
	}
	elseif (post('city')==''){
	json_error('The field city cannot be empty!');
	}
	elseif (post('state')==''){
	json_error('The field state cannot be empty!');
	}
	elseif (post('zip')==''){
	json_error('The field zip cannot be empty!');
	}
	elseif (post('jobId')==''){
	json_error('The field jobId cannot be empty!');
	}
	elseif (post('pdfFileName')==''){
	json_error('The field pdfFileName cannot be empty!');
	}
	elseif (post('sheetCount')==''){
	json_error('The field sheetCount cannot be empty!');
	}
	elseif (post('stitchedDate')==''){
	json_error('The field stitchedDate cannot be empty!');
	}
	elseif (post('checkedDate')==''){
	json_error('The field checkedDate cannot be empty!');
	}
	else{
	$this->partdata_model->Insert(post('sourceFileName'),post('campaign'),post('mailing'),post('originalFileName'),post('fileReceived'),post('filePrinted'),post('memberId'),post('name'),post('address1'),post('address2'),post('city'),post('state'),post('zip'),post('jobId'),post('pdfFileName'),post('sheetCount'),post('stitchedDate'),post('checkedDate'));
	json_send(''.H_CLIENT.'&view=partdata&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->partdata_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/partdata/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('sourceFileName')==''){
	json_error('The field sourceFileName cannot be empty!');
	}
	elseif (post('campaign')==''){
	json_error('The field campaign cannot be empty!');
	}
	elseif (post('mailing')==''){
	json_error('The field mailing cannot be empty!');
	}
	elseif (post('originalFileName')==''){
	json_error('The field originalFileName cannot be empty!');
	}
	elseif (post('fileReceived')==''){
	json_error('The field fileReceived cannot be empty!');
	}
	elseif (post('filePrinted')==''){
	json_error('The field filePrinted cannot be empty!');
	}
	elseif (post('memberId')==''){
	json_error('The field memberId cannot be empty!');
	}
	elseif (post('name')==''){
	json_error('The field name cannot be empty!');
	}
	elseif (post('address1')==''){
	json_error('The field address1 cannot be empty!');
	}
	elseif (post('address2')==''){
	json_error('The field address2 cannot be empty!');
	}
	elseif (post('city')==''){
	json_error('The field city cannot be empty!');
	}
	elseif (post('state')==''){
	json_error('The field state cannot be empty!');
	}
	elseif (post('zip')==''){
	json_error('The field zip cannot be empty!');
	}
	elseif (post('jobId')==''){
	json_error('The field jobId cannot be empty!');
	}
	elseif (post('pdfFileName')==''){
	json_error('The field pdfFileName cannot be empty!');
	}
	elseif (post('sheetCount')==''){
	json_error('The field sheetCount cannot be empty!');
	}
	elseif (post('stitchedDate')==''){
	json_error('The field stitchedDate cannot be empty!');
	}
	elseif (post('checkedDate')==''){
	json_error('The field checkedDate cannot be empty!');
	}
	else{
	$this->partdata_model->Update(post('sourceFileName'),post('campaign'),post('mailing'),post('originalFileName'),post('fileReceived'),post('filePrinted'),post('memberId'),post('name'),post('address1'),post('address2'),post('city'),post('state'),post('zip'),post('jobId'),post('pdfFileName'),post('sheetCount'),post('stitchedDate'),post('checkedDate'),post('id'));
	json_send(''.H_CLIENT.'&view=partdata&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->partdata_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/partdata/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->partdata_model->TruncateTable(''.H_CLIENT.'&view=partdata&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/partdata/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->partdata_model->Delete(get('id'),''.H_CLIENT.'&view=partdata&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->partdata_model->Delete(get('id'),''.H_CLIENT.'&view=partdata&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=partdata&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	