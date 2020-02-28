
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdataprincess.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataprincess
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdataprincess.php');
	
	class mailingdataprincess_controller {
	public $mailingdataprincess_model;
	
	public function __construct()  
    {  
        $this->mailingdataprincess_model = new mailingdataprincess_model();
    } 
	
	public function invoke_mailingdataprincess()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdataprincess_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdataprincess_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdataprincess&do=viewall');
	}else{
	$result = $this->mailingdataprincess_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/mailingdataprincess/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdataprincess_model->SelectAll();
	include(APP_FOLDER.'/views/public/mailingdataprincess/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdataprincess_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataprincess/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdataprincess_model->AutoSearch(trim($qstring),10,'job');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdataprincess&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->job.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/mailingdataprincess/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('job')==''){
	json_error('The field job cannot be empty!');
	}
	elseif (post('sailDate')==''){
	json_error('The field sailDate cannot be empty!');
	}
	elseif (post('counter')==''){
	json_error('The field counter cannot be empty!');
	}
	elseif (post('firstName')==''){
	json_error('The field firstName cannot be empty!');
	}
	elseif (post('lastName')==''){
	json_error('The field lastName cannot be empty!');
	}
	elseif (post('companionF')==''){
	json_error('The field companionF cannot be empty!');
	}
	elseif (post('companionL')==''){
	json_error('The field companionL cannot be empty!');
	}
	elseif (post('cabinNumber')==''){
	json_error('The field cabinNumber cannot be empty!');
	}
	elseif (post('greeting')==''){
	json_error('The field greeting cannot be empty!');
	}
	elseif (post('expirationDate')==''){
	json_error('The field expirationDate cannot be empty!');
	}
	elseif (post('celebration')==''){
	json_error('The field celebration cannot be empty!');
	}
	elseif (post('voyageId')==''){
	json_error('The field voyageId cannot be empty!');
	}
	elseif (post('uniqueId')==''){
	json_error('The field uniqueId cannot be empty!');
	}
	elseif (post('offer')==''){
	json_error('The field offer cannot be empty!');
	}
	elseif (post('numCardsInHolder')==''){
	json_error('The field numCardsInHolder cannot be empty!');
	}
	elseif (post('value')==''){
	json_error('The field value cannot be empty!');
	}
	elseif (post('disclaimer')==''){
	json_error('The field disclaimer cannot be empty!');
	}
	elseif (post('justBecause')==''){
	json_error('The field justBecause cannot be empty!');
	}
	elseif (post('mailingDataFile_id')==''){
	json_error('The field mailingDataFile id cannot be empty!');
	}
	elseif (post('mailingPrintReadyFile_id')==''){
	json_error('The field mailingPrintReadyFile id cannot be empty!');
	}
	else{
	$this->mailingdataprincess_model->Insert(post('job'),post('sailDate'),post('counter'),post('firstName'),post('lastName'),post('companionF'),post('companionL'),post('cabinNumber'),post('greeting'),post('expirationDate'),post('celebration'),post('voyageId'),post('uniqueId'),post('offer'),post('numCardsInHolder'),post('value'),post('disclaimer'),post('justBecause'),post('mailingDataFile_id'),post('mailingPrintReadyFile_id'));
	json_send(''.H_CLIENT.'&view=mailingdataprincess&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdataprincess_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataprincess/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('job')==''){
	json_error('The field job cannot be empty!');
	}
	elseif (post('sailDate')==''){
	json_error('The field sailDate cannot be empty!');
	}
	elseif (post('counter')==''){
	json_error('The field counter cannot be empty!');
	}
	elseif (post('firstName')==''){
	json_error('The field firstName cannot be empty!');
	}
	elseif (post('lastName')==''){
	json_error('The field lastName cannot be empty!');
	}
	elseif (post('companionF')==''){
	json_error('The field companionF cannot be empty!');
	}
	elseif (post('companionL')==''){
	json_error('The field companionL cannot be empty!');
	}
	elseif (post('cabinNumber')==''){
	json_error('The field cabinNumber cannot be empty!');
	}
	elseif (post('greeting')==''){
	json_error('The field greeting cannot be empty!');
	}
	elseif (post('expirationDate')==''){
	json_error('The field expirationDate cannot be empty!');
	}
	elseif (post('celebration')==''){
	json_error('The field celebration cannot be empty!');
	}
	elseif (post('voyageId')==''){
	json_error('The field voyageId cannot be empty!');
	}
	elseif (post('uniqueId')==''){
	json_error('The field uniqueId cannot be empty!');
	}
	elseif (post('offer')==''){
	json_error('The field offer cannot be empty!');
	}
	elseif (post('numCardsInHolder')==''){
	json_error('The field numCardsInHolder cannot be empty!');
	}
	elseif (post('value')==''){
	json_error('The field value cannot be empty!');
	}
	elseif (post('disclaimer')==''){
	json_error('The field disclaimer cannot be empty!');
	}
	elseif (post('justBecause')==''){
	json_error('The field justBecause cannot be empty!');
	}
	elseif (post('mailingDataFile_id')==''){
	json_error('The field mailingDataFile id cannot be empty!');
	}
	elseif (post('mailingPrintReadyFile_id')==''){
	json_error('The field mailingPrintReadyFile id cannot be empty!');
	}
	else{
	$this->mailingdataprincess_model->Update(post('job'),post('sailDate'),post('counter'),post('firstName'),post('lastName'),post('companionF'),post('companionL'),post('cabinNumber'),post('greeting'),post('expirationDate'),post('celebration'),post('voyageId'),post('uniqueId'),post('offer'),post('numCardsInHolder'),post('value'),post('disclaimer'),post('justBecause'),post('mailingDataFile_id'),post('mailingPrintReadyFile_id'),post('id'));
	json_send(''.H_CLIENT.'&view=mailingdataprincess&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdataprincess_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataprincess/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdataprincess_model->TruncateTable(''.H_CLIENT.'&view=mailingdataprincess&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/mailingdataprincess/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdataprincess_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataprincess&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdataprincess_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataprincess&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=mailingdataprincess&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	