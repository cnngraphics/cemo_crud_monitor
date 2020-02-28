
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdataavmedgroupinvoicesrecord20.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord20
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdataavmedgroupinvoicesrecord20.php');
	
	class mailingdataavmedgroupinvoicesrecord20_controller {
	public $mailingdataavmedgroupinvoicesrecord20_model;
	
	public function __construct()  
    {  
        $this->mailingdataavmedgroupinvoicesrecord20_model = new mailingdataavmedgroupinvoicesrecord20_model();
    } 
	
	public function invoke_mailingdataavmedgroupinvoicesrecord20()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdataavmedgroupinvoicesrecord20_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdataavmedgroupinvoicesrecord20_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord20&do=viewall');
	}else{
	$result = $this->mailingdataavmedgroupinvoicesrecord20_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord20/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdataavmedgroupinvoicesrecord20_model->SelectAll();
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord20/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdataavmedgroupinvoicesrecord20_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord20/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdataavmedgroupinvoicesrecord20_model->AutoSearch(trim($qstring),10,'invNo');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord20&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->invNo.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord20/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('invNo')==''){
	json_error('The field invNo cannot be empty!');
	}
	elseif (post('subscriberName')==''){
	json_error('The field subscriberName cannot be empty!');
	}
	elseif (post('subscriberAddr1')==''){
	json_error('The field subscriberAddr1 cannot be empty!');
	}
	else{
	$this->mailingdataavmedgroupinvoicesrecord20_model->Insert(post('invNo'),post('subscriberName'),post('subscriberAddr1'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord20&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdataavmedgroupinvoicesrecord20_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord20/Update.php');
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
	elseif (post('subscriberName')==''){
	json_error('The field subscriberName cannot be empty!');
	}
	elseif (post('subscriberAddr1')==''){
	json_error('The field subscriberAddr1 cannot be empty!');
	}
	else{
	$this->mailingdataavmedgroupinvoicesrecord20_model->Update(post('invNo'),post('subscriberName'),post('subscriberAddr1'),post('id'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord20&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdataavmedgroupinvoicesrecord20_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord20/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdataavmedgroupinvoicesrecord20_model->TruncateTable(''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord20&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord20/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdataavmedgroupinvoicesrecord20_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord20&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdataavmedgroupinvoicesrecord20_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord20&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord20&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	