
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdatafplemm.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatafplemm
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdatafplemm.php');
	
	class mailingdatafplemm_controller {
	public $mailingdatafplemm_model;
	
	public function __construct()  
    {  
        $this->mailingdatafplemm_model = new mailingdatafplemm_model();
    } 
	
	public function invoke_mailingdatafplemm()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdatafplemm_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdatafplemm_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdatafplemm&do=viewall');
	}else{
	$result = $this->mailingdatafplemm_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/admin/mailingdatafplemm/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdatafplemm_model->SelectAll();
	include(APP_FOLDER.'/views/admin/mailingdatafplemm/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdatafplemm_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdatafplemm/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdatafplemm_model->AutoSearch(trim($qstring),10,'jobId');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdatafplemm&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->jobId.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/admin/mailingdatafplemm/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('jobId')==''){
	json_error('The field jobId cannot be empty!');
	}
	elseif (post('originalFileName')==''){
	json_error('The field originalFileName cannot be empty!');
	}
	elseif (post('fileName')==''){
	json_error('The field fileName cannot be empty!');
	}
	elseif (post('sheets')==''){
	json_error('The field sheets cannot be empty!');
	}
	elseif (post('date')==''){
	json_error('The field date cannot be empty!');
	}
	elseif (post('fullName')==''){
	json_error('The field fullName cannot be empty!');
	}
	elseif (post('address1')==''){
	json_error('The field address1 cannot be empty!');
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
	elseif (post('stitchedDate')==''){
	json_error('The field stitchedDate cannot be empty!');
	}
	elseif (post('seqNumber')==''){
	json_error('The field seqNumber cannot be empty!');
	}
	elseif (post('mailingPrintReadyFile_id')==''){
	json_error('The field mailingPrintReadyFile id cannot be empty!');
	}
	elseif (post('pdfTotPages')==''){
	json_error('The field pdfTotPages cannot be empty!');
	}
	else{
	$this->mailingdatafplemm_model->Insert(post('jobId'),post('originalFileName'),post('fileName'),post('sheets'),post('date'),post('fullName'),post('address1'),post('city'),post('state'),post('zip'),post('stitchedDate'),post('seqNumber'),post('mailingPrintReadyFile_id'),post('pdfTotPages'));
	json_send(''.H_ADMIN.'&view=mailingdatafplemm&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdatafplemm_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdatafplemm/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('jobId')==''){
	json_error('The field jobId cannot be empty!');
	}
	elseif (post('originalFileName')==''){
	json_error('The field originalFileName cannot be empty!');
	}
	elseif (post('fileName')==''){
	json_error('The field fileName cannot be empty!');
	}
	elseif (post('sheets')==''){
	json_error('The field sheets cannot be empty!');
	}
	elseif (post('date')==''){
	json_error('The field date cannot be empty!');
	}
	elseif (post('fullName')==''){
	json_error('The field fullName cannot be empty!');
	}
	elseif (post('address1')==''){
	json_error('The field address1 cannot be empty!');
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
	elseif (post('stitchedDate')==''){
	json_error('The field stitchedDate cannot be empty!');
	}
	elseif (post('seqNumber')==''){
	json_error('The field seqNumber cannot be empty!');
	}
	elseif (post('mailingPrintReadyFile_id')==''){
	json_error('The field mailingPrintReadyFile id cannot be empty!');
	}
	elseif (post('pdfTotPages')==''){
	json_error('The field pdfTotPages cannot be empty!');
	}
	else{
	$this->mailingdatafplemm_model->Update(post('jobId'),post('originalFileName'),post('fileName'),post('sheets'),post('date'),post('fullName'),post('address1'),post('city'),post('state'),post('zip'),post('stitchedDate'),post('seqNumber'),post('mailingPrintReadyFile_id'),post('pdfTotPages'),post('id'));
	json_send(''.H_ADMIN.'&view=mailingdatafplemm&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdatafplemm_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdatafplemm/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdatafplemm_model->TruncateTable(''.H_ADMIN.'&view=mailingdatafplemm&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/admin/mailingdatafplemm/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdatafplemm_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdatafplemm&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdatafplemm_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdatafplemm&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_ADMIN.'&view=mailingdatafplemm&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	