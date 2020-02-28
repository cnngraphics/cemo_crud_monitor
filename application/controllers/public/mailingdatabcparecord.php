
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdatabcparecord.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatabcparecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdatabcparecord.php');
	
	class mailingdatabcparecord_controller {
	public $mailingdatabcparecord_model;
	
	public function __construct()  
    {  
        $this->mailingdatabcparecord_model = new mailingdatabcparecord_model();
    } 
	
	public function invoke_mailingdatabcparecord()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdatabcparecord_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdatabcparecord_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdatabcparecord&do=viewall');
	}else{
	$result = $this->mailingdatabcparecord_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/mailingdatabcparecord/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdatabcparecord_model->SelectAll();
	include(APP_FOLDER.'/views/public/mailingdatabcparecord/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdatabcparecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdatabcparecord/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdatabcparecord_model->AutoSearch(trim($qstring),10,'headerPage1');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdatabcparecord&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->headerPage1.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/mailingdatabcparecord/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('headerPage1')==''){
	json_error('The field headerPage1 cannot be empty!');
	}
	elseif (post('headerPage2')==''){
	json_error('The field headerPage2 cannot be empty!');
	}
	elseif (post('companyAddress')==''){
	json_error('The field companyAddress cannot be empty!');
	}
	elseif (post('propertyValues')==''){
	json_error('The field propertyValues cannot be empty!');
	}
	elseif (post('taxes')==''){
	json_error('The field taxes cannot be empty!');
	}
	elseif (post('footerTextPage1')==''){
	json_error('The field footerTextPage1 cannot be empty!');
	}
	elseif (post('tablePage2')==''){
	json_error('The field tablePage2 cannot be empty!');
	}
	elseif (post('totalPage2')==''){
	json_error('The field totalPage2 cannot be empty!');
	}
	elseif (post('parcelNumber')==''){
	json_error('The field parcelNumber cannot be empty!');
	}
	elseif (post('date')==''){
	json_error('The field date cannot be empty!');
	}
	elseif (post('file')==''){
	json_error('The field file cannot be empty!');
	}
	else{
	$this->mailingdatabcparecord_model->Insert(post('headerPage1'),post('headerPage2'),post('companyAddress'),post('propertyValues'),post('taxes'),post('footerTextPage1'),post('tablePage2'),post('totalPage2'),post('parcelNumber'),post('date'),post('file'));
	json_send(''.H_CLIENT.'&view=mailingdatabcparecord&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdatabcparecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdatabcparecord/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('headerPage1')==''){
	json_error('The field headerPage1 cannot be empty!');
	}
	elseif (post('headerPage2')==''){
	json_error('The field headerPage2 cannot be empty!');
	}
	elseif (post('companyAddress')==''){
	json_error('The field companyAddress cannot be empty!');
	}
	elseif (post('propertyValues')==''){
	json_error('The field propertyValues cannot be empty!');
	}
	elseif (post('taxes')==''){
	json_error('The field taxes cannot be empty!');
	}
	elseif (post('footerTextPage1')==''){
	json_error('The field footerTextPage1 cannot be empty!');
	}
	elseif (post('tablePage2')==''){
	json_error('The field tablePage2 cannot be empty!');
	}
	elseif (post('totalPage2')==''){
	json_error('The field totalPage2 cannot be empty!');
	}
	elseif (post('parcelNumber')==''){
	json_error('The field parcelNumber cannot be empty!');
	}
	elseif (post('date')==''){
	json_error('The field date cannot be empty!');
	}
	elseif (post('file')==''){
	json_error('The field file cannot be empty!');
	}
	else{
	$this->mailingdatabcparecord_model->Update(post('headerPage1'),post('headerPage2'),post('companyAddress'),post('propertyValues'),post('taxes'),post('footerTextPage1'),post('tablePage2'),post('totalPage2'),post('parcelNumber'),post('date'),post('file'),post('id'));
	json_send(''.H_CLIENT.'&view=mailingdatabcparecord&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdatabcparecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdatabcparecord/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdatabcparecord_model->TruncateTable(''.H_CLIENT.'&view=mailingdatabcparecord&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/mailingdatabcparecord/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdatabcparecord_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdatabcparecord&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdatabcparecord_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdatabcparecord&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=mailingdatabcparecord&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	