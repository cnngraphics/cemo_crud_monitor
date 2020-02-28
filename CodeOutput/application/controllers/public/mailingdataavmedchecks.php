
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdataavmedchecks.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedchecks
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdataavmedchecks.php');
	
	class mailingdataavmedchecks_controller {
	public $mailingdataavmedchecks_model;
	
	public function __construct()  
    {  
        $this->mailingdataavmedchecks_model = new mailingdataavmedchecks_model();
    } 
	
	public function invoke_mailingdataavmedchecks()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdataavmedchecks_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdataavmedchecks_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdataavmedchecks&do=viewall');
	}else{
	$result = $this->mailingdataavmedchecks_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/mailingdataavmedchecks/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdataavmedchecks_model->SelectAll();
	include(APP_FOLDER.'/views/public/mailingdataavmedchecks/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdataavmedchecks_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedchecks/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdataavmedchecks_model->AutoSearch(trim($qstring),10,'aAdd1');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdataavmedchecks&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->aAdd1.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/mailingdataavmedchecks/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('aAdd1')==''){
	json_error('The field aAdd1 cannot be empty!');
	}
	elseif (post('aAdd2')==''){
	json_error('The field aAdd2 cannot be empty!');
	}
	elseif (post('aAdd3')==''){
	json_error('The field aAdd3 cannot be empty!');
	}
	elseif (post('aAdd4')==''){
	json_error('The field aAdd4 cannot be empty!');
	}
	elseif (post('bAdd1')==''){
	json_error('The field bAdd1 cannot be empty!');
	}
	elseif (post('bAdd2')==''){
	json_error('The field bAdd2 cannot be empty!');
	}
	elseif (post('bAdd3')==''){
	json_error('The field bAdd3 cannot be empty!');
	}
	elseif (post('bAdd4')==''){
	json_error('The field bAdd4 cannot be empty!');
	}
	elseif (post('pAdd1')==''){
	json_error('The field pAdd1 cannot be empty!');
	}
	elseif (post('pAdd2')==''){
	json_error('The field pAdd2 cannot be empty!');
	}
	elseif (post('pAdd3')==''){
	json_error('The field pAdd3 cannot be empty!');
	}
	elseif (post('pAdd4')==''){
	json_error('The field pAdd4 cannot be empty!');
	}
	elseif (post('checkId')==''){
	json_error('The field checkId cannot be empty!');
	}
	elseif (post('checkNumber')==''){
	json_error('The field checkNumber cannot be empty!');
	}
	elseif (post('checkDate')==''){
	json_error('The field checkDate cannot be empty!');
	}
	elseif (post('checkAmount')==''){
	json_error('The field checkAmount cannot be empty!');
	}
	elseif (post('micrCheck')==''){
	json_error('The field micrCheck cannot be empty!');
	}
	elseif (post('micrRouting')==''){
	json_error('The field micrRouting cannot be empty!');
	}
	elseif (post('micrAccount')==''){
	json_error('The field micrAccount cannot be empty!');
	}
	elseif (post('seqNumber')==''){
	json_error('The field seqNumber cannot be empty!');
	}
	elseif (post('createdAt')==''){
	json_error('The field createdAt cannot be empty!');
	}
	elseif (post('jobData_id')==''){
	json_error('The field jobData id cannot be empty!');
	}
	elseif (post('mailingDataFile_id')==''){
	json_error('The field mailingDataFile id cannot be empty!');
	}
	elseif (post('mailingPrintReadyFile_id')==''){
	json_error('The field mailingPrintReadyFile id cannot be empty!');
	}
	elseif (post('discr')==''){
	json_error('The field discr cannot be empty!');
	}
	else{
	$this->mailingdataavmedchecks_model->Insert(post('aAdd1'),post('aAdd2'),post('aAdd3'),post('aAdd4'),post('bAdd1'),post('bAdd2'),post('bAdd3'),post('bAdd4'),post('pAdd1'),post('pAdd2'),post('pAdd3'),post('pAdd4'),post('checkId'),post('checkNumber'),post('checkDate'),post('checkAmount'),post('micrCheck'),post('micrRouting'),post('micrAccount'),post('seqNumber'),post('createdAt'),post('jobData_id'),post('mailingDataFile_id'),post('mailingPrintReadyFile_id'),post('discr'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedchecks&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdataavmedchecks_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedchecks/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('aAdd1')==''){
	json_error('The field aAdd1 cannot be empty!');
	}
	elseif (post('aAdd2')==''){
	json_error('The field aAdd2 cannot be empty!');
	}
	elseif (post('aAdd3')==''){
	json_error('The field aAdd3 cannot be empty!');
	}
	elseif (post('aAdd4')==''){
	json_error('The field aAdd4 cannot be empty!');
	}
	elseif (post('bAdd1')==''){
	json_error('The field bAdd1 cannot be empty!');
	}
	elseif (post('bAdd2')==''){
	json_error('The field bAdd2 cannot be empty!');
	}
	elseif (post('bAdd3')==''){
	json_error('The field bAdd3 cannot be empty!');
	}
	elseif (post('bAdd4')==''){
	json_error('The field bAdd4 cannot be empty!');
	}
	elseif (post('pAdd1')==''){
	json_error('The field pAdd1 cannot be empty!');
	}
	elseif (post('pAdd2')==''){
	json_error('The field pAdd2 cannot be empty!');
	}
	elseif (post('pAdd3')==''){
	json_error('The field pAdd3 cannot be empty!');
	}
	elseif (post('pAdd4')==''){
	json_error('The field pAdd4 cannot be empty!');
	}
	elseif (post('checkId')==''){
	json_error('The field checkId cannot be empty!');
	}
	elseif (post('checkNumber')==''){
	json_error('The field checkNumber cannot be empty!');
	}
	elseif (post('checkDate')==''){
	json_error('The field checkDate cannot be empty!');
	}
	elseif (post('checkAmount')==''){
	json_error('The field checkAmount cannot be empty!');
	}
	elseif (post('micrCheck')==''){
	json_error('The field micrCheck cannot be empty!');
	}
	elseif (post('micrRouting')==''){
	json_error('The field micrRouting cannot be empty!');
	}
	elseif (post('micrAccount')==''){
	json_error('The field micrAccount cannot be empty!');
	}
	elseif (post('seqNumber')==''){
	json_error('The field seqNumber cannot be empty!');
	}
	elseif (post('createdAt')==''){
	json_error('The field createdAt cannot be empty!');
	}
	elseif (post('jobData_id')==''){
	json_error('The field jobData id cannot be empty!');
	}
	elseif (post('mailingDataFile_id')==''){
	json_error('The field mailingDataFile id cannot be empty!');
	}
	elseif (post('mailingPrintReadyFile_id')==''){
	json_error('The field mailingPrintReadyFile id cannot be empty!');
	}
	elseif (post('discr')==''){
	json_error('The field discr cannot be empty!');
	}
	else{
	$this->mailingdataavmedchecks_model->Update(post('aAdd1'),post('aAdd2'),post('aAdd3'),post('aAdd4'),post('bAdd1'),post('bAdd2'),post('bAdd3'),post('bAdd4'),post('pAdd1'),post('pAdd2'),post('pAdd3'),post('pAdd4'),post('checkId'),post('checkNumber'),post('checkDate'),post('checkAmount'),post('micrCheck'),post('micrRouting'),post('micrAccount'),post('seqNumber'),post('createdAt'),post('jobData_id'),post('mailingDataFile_id'),post('mailingPrintReadyFile_id'),post('discr'),post('id'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedchecks&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdataavmedchecks_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedchecks/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdataavmedchecks_model->TruncateTable(''.H_CLIENT.'&view=mailingdataavmedchecks&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/mailingdataavmedchecks/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdataavmedchecks_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedchecks&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdataavmedchecks_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedchecks&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=mailingdataavmedchecks&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	