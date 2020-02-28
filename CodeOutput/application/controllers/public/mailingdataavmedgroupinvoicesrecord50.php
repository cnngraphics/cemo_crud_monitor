
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdataavmedgroupinvoicesrecord50.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord50
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdataavmedgroupinvoicesrecord50.php');
	
	class mailingdataavmedgroupinvoicesrecord50_controller {
	public $mailingdataavmedgroupinvoicesrecord50_model;
	
	public function __construct()  
    {  
        $this->mailingdataavmedgroupinvoicesrecord50_model = new mailingdataavmedgroupinvoicesrecord50_model();
    } 
	
	public function invoke_mailingdataavmedgroupinvoicesrecord50()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdataavmedgroupinvoicesrecord50_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdataavmedgroupinvoicesrecord50_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord50&do=viewall');
	}else{
	$result = $this->mailingdataavmedgroupinvoicesrecord50_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord50/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdataavmedgroupinvoicesrecord50_model->SelectAll();
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord50/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdataavmedgroupinvoicesrecord50_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord50/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdataavmedgroupinvoicesrecord50_model->AutoSearch(trim($qstring),10,'invNo');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord50&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->invNo.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord50/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('invNo')==''){
	json_error('The field invNo cannot be empty!');
	}
	elseif (post('contracts')==''){
	json_error('The field contracts cannot be empty!');
	}
	elseif (post('members')==''){
	json_error('The field members cannot be empty!');
	}
	elseif (post('prevBalance')==''){
	json_error('The field prevBalance cannot be empty!');
	}
	elseif (post('totRetroAdj')==''){
	json_error('The field totRetroAdj cannot be empty!');
	}
	elseif (post('totAdj')==''){
	json_error('The field totAdj cannot be empty!');
	}
	elseif (post('payments')==''){
	json_error('The field payments cannot be empty!');
	}
	elseif (post('finance')==''){
	json_error('The field finance cannot be empty!');
	}
	elseif (post('balanceForward')==''){
	json_error('The field balanceForward cannot be empty!');
	}
	elseif (post('totPremium')==''){
	json_error('The field totPremium cannot be empty!');
	}
	elseif (post('amountDue')==''){
	json_error('The field amountDue cannot be empty!');
	}
	else{
	$this->mailingdataavmedgroupinvoicesrecord50_model->Insert(post('invNo'),post('contracts'),post('members'),post('prevBalance'),post('totRetroAdj'),post('totAdj'),post('payments'),post('finance'),post('balanceForward'),post('totPremium'),post('amountDue'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord50&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdataavmedgroupinvoicesrecord50_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord50/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('invNo')==''){
	json_error('The field invNo cannot be empty!');
	}
	elseif (post('contracts')==''){
	json_error('The field contracts cannot be empty!');
	}
	elseif (post('members')==''){
	json_error('The field members cannot be empty!');
	}
	elseif (post('prevBalance')==''){
	json_error('The field prevBalance cannot be empty!');
	}
	elseif (post('totRetroAdj')==''){
	json_error('The field totRetroAdj cannot be empty!');
	}
	elseif (post('totAdj')==''){
	json_error('The field totAdj cannot be empty!');
	}
	elseif (post('payments')==''){
	json_error('The field payments cannot be empty!');
	}
	elseif (post('finance')==''){
	json_error('The field finance cannot be empty!');
	}
	elseif (post('balanceForward')==''){
	json_error('The field balanceForward cannot be empty!');
	}
	elseif (post('totPremium')==''){
	json_error('The field totPremium cannot be empty!');
	}
	elseif (post('amountDue')==''){
	json_error('The field amountDue cannot be empty!');
	}
	else{
	$this->mailingdataavmedgroupinvoicesrecord50_model->Update(post('invNo'),post('contracts'),post('members'),post('prevBalance'),post('totRetroAdj'),post('totAdj'),post('payments'),post('finance'),post('balanceForward'),post('totPremium'),post('amountDue'),post('id'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord50&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdataavmedgroupinvoicesrecord50_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord50/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdataavmedgroupinvoicesrecord50_model->TruncateTable(''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord50&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord50/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdataavmedgroupinvoicesrecord50_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord50&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdataavmedgroupinvoicesrecord50_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord50&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord50&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	