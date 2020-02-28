
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdatacarnival.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatacarnival
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdatacarnival.php');
	
	class mailingdatacarnival_controller {
	public $mailingdatacarnival_model;
	
	public function __construct()  
    {  
        $this->mailingdatacarnival_model = new mailingdatacarnival_model();
    } 
	
	public function invoke_mailingdatacarnival()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdatacarnival_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdatacarnival_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdatacarnival&do=viewall');
	}else{
	$result = $this->mailingdatacarnival_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/mailingdatacarnival/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdatacarnival_model->SelectAll();
	include(APP_FOLDER.'/views/public/mailingdatacarnival/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdatacarnival_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdatacarnival/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdatacarnival_model->AutoSearch(trim($qstring),10,'job');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdatacarnival&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->job.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/mailingdatacarnival/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('job')==''){
	json_error('The field job cannot be empty!');
	}
	elseif (post('counter')==''){
	json_error('The field counter cannot be empty!');
	}
	elseif (post('shipCode')==''){
	json_error('The field shipCode cannot be empty!');
	}
	elseif (post('sailDate')==''){
	json_error('The field sailDate cannot be empty!');
	}
	elseif (post('firstName')==''){
	json_error('The field firstName cannot be empty!');
	}
	elseif (post('lastName')==''){
	json_error('The field lastName cannot be empty!');
	}
	elseif (post('middleName')==''){
	json_error('The field middleName cannot be empty!');
	}
	elseif (post('fullName')==''){
	json_error('The field fullName cannot be empty!');
	}
	elseif (post('cabinNumber')==''){
	json_error('The field cabinNumber cannot be empty!');
	}
	elseif (post('section')==''){
	json_error('The field section cannot be empty!');
	}
	elseif (post('offer')==''){
	json_error('The field offer cannot be empty!');
	}
	elseif (post('companionFull')==''){
	json_error('The field companionFull cannot be empty!');
	}
	elseif (post('celebration')==''){
	json_error('The field celebration cannot be empty!');
	}
	elseif (post('expirationDate')==''){
	json_error('The field expirationDate cannot be empty!');
	}
	elseif (post('totalCards')==''){
	json_error('The field totalCards cannot be empty!');
	}
	elseif (post('companionF')==''){
	json_error('The field companionF cannot be empty!');
	}
	elseif (post('companionL')==''){
	json_error('The field companionL cannot be empty!');
	}
	elseif (post('shipName')==''){
	json_error('The field shipName cannot be empty!');
	}
	elseif (post('HD')==''){
	json_error('The field HD cannot be empty!');
	}
	elseif (post('mailingDataFile_id')==''){
	json_error('The field mailingDataFile id cannot be empty!');
	}
	elseif (post('mailingPrintReadyFile_id')==''){
	json_error('The field mailingPrintReadyFile id cannot be empty!');
	}
	elseif (post('personNumber')==''){
	json_error('The field personNumber cannot be empty!');
	}
	elseif (post('pastGuessNumber')==''){
	json_error('The field pastGuessNumber cannot be empty!');
	}
	elseif (post('fileCreationDate')==''){
	json_error('The field fileCreationDate cannot be empty!');
	}
	elseif (post('cabinDropDate')==''){
	json_error('The field cabinDropDate cannot be empty!');
	}
	elseif (post('deliveryDate')==''){
	json_error('The field deliveryDate cannot be empty!');
	}
	elseif (post('offerAmount')==''){
	json_error('The field offerAmount cannot be empty!');
	}
	elseif (post('spaManager')==''){
	json_error('The field spaManager cannot be empty!');
	}
	elseif (post('spaManagerExt')==''){
	json_error('The field spaManagerExt cannot be empty!');
	}
	elseif (post('holderId')==''){
	json_error('The field holderId cannot be empty!');
	}
	elseif (post('cellPackageSk')==''){
	json_error('The field cellPackageSk cannot be empty!');
	}
	elseif (post('seqTrkNum')==''){
	json_error('The field seqTrkNum cannot be empty!');
	}
	elseif (post('cardHolderType')==''){
	json_error('The field cardHolderType cannot be empty!');
	}
	elseif (post('priorityPrinting')==''){
	json_error('The field priorityPrinting cannot be empty!');
	}
	elseif (post('bulletDeliveryDate')==''){
	json_error('The field bulletDeliveryDate cannot be empty!');
	}
	elseif (post('wildCard')==''){
	json_error('The field wildCard cannot be empty!');
	}
	else{
	$this->mailingdatacarnival_model->Insert(post('job'),post('counter'),post('shipCode'),post('sailDate'),post('firstName'),post('lastName'),post('middleName'),post('fullName'),post('cabinNumber'),post('section'),post('offer'),post('companionFull'),post('celebration'),post('expirationDate'),post('totalCards'),post('companionF'),post('companionL'),post('shipName'),post('HD'),post('mailingDataFile_id'),post('mailingPrintReadyFile_id'),post('personNumber'),post('pastGuessNumber'),post('fileCreationDate'),post('cabinDropDate'),post('deliveryDate'),post('offerAmount'),post('spaManager'),post('spaManagerExt'),post('holderId'),post('cellPackageSk'),post('seqTrkNum'),post('cardHolderType'),post('priorityPrinting'),post('bulletDeliveryDate'),post('wildCard'));
	json_send(''.H_CLIENT.'&view=mailingdatacarnival&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdatacarnival_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdatacarnival/Update.php');
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
	elseif (post('counter')==''){
	json_error('The field counter cannot be empty!');
	}
	elseif (post('shipCode')==''){
	json_error('The field shipCode cannot be empty!');
	}
	elseif (post('sailDate')==''){
	json_error('The field sailDate cannot be empty!');
	}
	elseif (post('firstName')==''){
	json_error('The field firstName cannot be empty!');
	}
	elseif (post('lastName')==''){
	json_error('The field lastName cannot be empty!');
	}
	elseif (post('middleName')==''){
	json_error('The field middleName cannot be empty!');
	}
	elseif (post('fullName')==''){
	json_error('The field fullName cannot be empty!');
	}
	elseif (post('cabinNumber')==''){
	json_error('The field cabinNumber cannot be empty!');
	}
	elseif (post('section')==''){
	json_error('The field section cannot be empty!');
	}
	elseif (post('offer')==''){
	json_error('The field offer cannot be empty!');
	}
	elseif (post('companionFull')==''){
	json_error('The field companionFull cannot be empty!');
	}
	elseif (post('celebration')==''){
	json_error('The field celebration cannot be empty!');
	}
	elseif (post('expirationDate')==''){
	json_error('The field expirationDate cannot be empty!');
	}
	elseif (post('totalCards')==''){
	json_error('The field totalCards cannot be empty!');
	}
	elseif (post('companionF')==''){
	json_error('The field companionF cannot be empty!');
	}
	elseif (post('companionL')==''){
	json_error('The field companionL cannot be empty!');
	}
	elseif (post('shipName')==''){
	json_error('The field shipName cannot be empty!');
	}
	elseif (post('HD')==''){
	json_error('The field HD cannot be empty!');
	}
	elseif (post('mailingDataFile_id')==''){
	json_error('The field mailingDataFile id cannot be empty!');
	}
	elseif (post('mailingPrintReadyFile_id')==''){
	json_error('The field mailingPrintReadyFile id cannot be empty!');
	}
	elseif (post('personNumber')==''){
	json_error('The field personNumber cannot be empty!');
	}
	elseif (post('pastGuessNumber')==''){
	json_error('The field pastGuessNumber cannot be empty!');
	}
	elseif (post('fileCreationDate')==''){
	json_error('The field fileCreationDate cannot be empty!');
	}
	elseif (post('cabinDropDate')==''){
	json_error('The field cabinDropDate cannot be empty!');
	}
	elseif (post('deliveryDate')==''){
	json_error('The field deliveryDate cannot be empty!');
	}
	elseif (post('offerAmount')==''){
	json_error('The field offerAmount cannot be empty!');
	}
	elseif (post('spaManager')==''){
	json_error('The field spaManager cannot be empty!');
	}
	elseif (post('spaManagerExt')==''){
	json_error('The field spaManagerExt cannot be empty!');
	}
	elseif (post('holderId')==''){
	json_error('The field holderId cannot be empty!');
	}
	elseif (post('cellPackageSk')==''){
	json_error('The field cellPackageSk cannot be empty!');
	}
	elseif (post('seqTrkNum')==''){
	json_error('The field seqTrkNum cannot be empty!');
	}
	elseif (post('cardHolderType')==''){
	json_error('The field cardHolderType cannot be empty!');
	}
	elseif (post('priorityPrinting')==''){
	json_error('The field priorityPrinting cannot be empty!');
	}
	elseif (post('bulletDeliveryDate')==''){
	json_error('The field bulletDeliveryDate cannot be empty!');
	}
	elseif (post('wildCard')==''){
	json_error('The field wildCard cannot be empty!');
	}
	else{
	$this->mailingdatacarnival_model->Update(post('job'),post('counter'),post('shipCode'),post('sailDate'),post('firstName'),post('lastName'),post('middleName'),post('fullName'),post('cabinNumber'),post('section'),post('offer'),post('companionFull'),post('celebration'),post('expirationDate'),post('totalCards'),post('companionF'),post('companionL'),post('shipName'),post('HD'),post('mailingDataFile_id'),post('mailingPrintReadyFile_id'),post('personNumber'),post('pastGuessNumber'),post('fileCreationDate'),post('cabinDropDate'),post('deliveryDate'),post('offerAmount'),post('spaManager'),post('spaManagerExt'),post('holderId'),post('cellPackageSk'),post('seqTrkNum'),post('cardHolderType'),post('priorityPrinting'),post('bulletDeliveryDate'),post('wildCard'),post('id'));
	json_send(''.H_CLIENT.'&view=mailingdatacarnival&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdatacarnival_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdatacarnival/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdatacarnival_model->TruncateTable(''.H_CLIENT.'&view=mailingdatacarnival&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/mailingdatacarnival/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdatacarnival_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdatacarnival&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdatacarnival_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdatacarnival&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=mailingdatacarnival&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	