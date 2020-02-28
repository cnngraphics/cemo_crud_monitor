
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdataavmedcvs.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedcvs
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdataavmedcvs.php');
	
	class mailingdataavmedcvs_controller {
	public $mailingdataavmedcvs_model;
	
	public function __construct()  
    {  
        $this->mailingdataavmedcvs_model = new mailingdataavmedcvs_model();
    } 
	
	public function invoke_mailingdataavmedcvs()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdataavmedcvs_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdataavmedcvs_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdataavmedcvs&do=viewall');
	}else{
	$result = $this->mailingdataavmedcvs_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/admin/mailingdataavmedcvs/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdataavmedcvs_model->SelectAll();
	include(APP_FOLDER.'/views/admin/mailingdataavmedcvs/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdataavmedcvs_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmedcvs/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdataavmedcvs_model->AutoSearch(trim($qstring),10,'firstName');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdataavmedcvs&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->firstName.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/admin/mailingdataavmedcvs/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('firstName')==''){
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
	elseif (post('address1')==''){
	json_error('The field address1 cannot be empty!');
	}
	elseif (post('mmAddress1')==''){
	json_error('The field mmAddress1 cannot be empty!');
	}
	elseif (post('address2')==''){
	json_error('The field address2 cannot be empty!');
	}
	elseif (post('mmAddress2')==''){
	json_error('The field mmAddress2 cannot be empty!');
	}
	elseif (post('city')==''){
	json_error('The field city cannot be empty!');
	}
	elseif (post('mmCity')==''){
	json_error('The field mmCity cannot be empty!');
	}
	elseif (post('state')==''){
	json_error('The field state cannot be empty!');
	}
	elseif (post('mmState')==''){
	json_error('The field mmState cannot be empty!');
	}
	elseif (post('zipCode')==''){
	json_error('The field zipCode cannot be empty!');
	}
	elseif (post('mmZipCode')==''){
	json_error('The field mmZipCode cannot be empty!');
	}
	elseif (post('country')==''){
	json_error('The field country cannot be empty!');
	}
	elseif (post('mmCountry')==''){
	json_error('The field mmCountry cannot be empty!');
	}
	elseif (post('mmImb')==''){
	json_error('The field mmImb cannot be empty!');
	}
	elseif (post('mmOpt')==''){
	json_error('The field mmOpt cannot be empty!');
	}
	elseif (post('mmReturnCode')==''){
	json_error('The field mmReturnCode cannot be empty!');
	}
	elseif (post('mmDpv')==''){
	json_error('The field mmDpv cannot be empty!');
	}
	elseif (post('mmOrder')==''){
	json_error('The field mmOrder cannot be empty!');
	}
	elseif (post('mmCOAMoveToDate')==''){
	json_error('The field mmCOAMoveToDate cannot be empty!');
	}
	elseif (post('mmCOAMoveType')==''){
	json_error('The field mmCOAMoveType cannot be empty!');
	}
	elseif (post('pdfLocation')==''){
	json_error('The field pdfLocation cannot be empty!');
	}
	elseif (post('pdfTotPages')==''){
	json_error('The field pdfTotPages cannot be empty!');
	}
	elseif (post('generic1')==''){
	json_error('The field generic1 cannot be empty!');
	}
	elseif (post('generic2')==''){
	json_error('The field generic2 cannot be empty!');
	}
	elseif (post('mmImbDigi')==''){
	json_error('The field mmImbDigi cannot be empty!');
	}
	elseif (post('processDate')==''){
	json_error('The field processDate cannot be empty!');
	}
	elseif (post('mailingDataFile_id')==''){
	json_error('The field mailingDataFile id cannot be empty!');
	}
	elseif (post('mailingPrintReadyFile_id')==''){
	json_error('The field mailingPrintReadyFile id cannot be empty!');
	}
	else{
	$this->mailingdataavmedcvs_model->Insert(post('firstName'),post('lastName'),post('middleName'),post('fullName'),post('address1'),post('mmAddress1'),post('address2'),post('mmAddress2'),post('city'),post('mmCity'),post('state'),post('mmState'),post('zipCode'),post('mmZipCode'),post('country'),post('mmCountry'),post('mmImb'),post('mmOpt'),post('mmReturnCode'),post('mmDpv'),post('mmOrder'),post('mmCOAMoveToDate'),post('mmCOAMoveType'),post('pdfLocation'),post('pdfTotPages'),post('generic1'),post('generic2'),post('mmImbDigi'),post('processDate'),post('mailingDataFile_id'),post('mailingPrintReadyFile_id'));
	json_send(''.H_ADMIN.'&view=mailingdataavmedcvs&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdataavmedcvs_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmedcvs/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
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
	elseif (post('address1')==''){
	json_error('The field address1 cannot be empty!');
	}
	elseif (post('mmAddress1')==''){
	json_error('The field mmAddress1 cannot be empty!');
	}
	elseif (post('address2')==''){
	json_error('The field address2 cannot be empty!');
	}
	elseif (post('mmAddress2')==''){
	json_error('The field mmAddress2 cannot be empty!');
	}
	elseif (post('city')==''){
	json_error('The field city cannot be empty!');
	}
	elseif (post('mmCity')==''){
	json_error('The field mmCity cannot be empty!');
	}
	elseif (post('state')==''){
	json_error('The field state cannot be empty!');
	}
	elseif (post('mmState')==''){
	json_error('The field mmState cannot be empty!');
	}
	elseif (post('zipCode')==''){
	json_error('The field zipCode cannot be empty!');
	}
	elseif (post('mmZipCode')==''){
	json_error('The field mmZipCode cannot be empty!');
	}
	elseif (post('country')==''){
	json_error('The field country cannot be empty!');
	}
	elseif (post('mmCountry')==''){
	json_error('The field mmCountry cannot be empty!');
	}
	elseif (post('mmImb')==''){
	json_error('The field mmImb cannot be empty!');
	}
	elseif (post('mmOpt')==''){
	json_error('The field mmOpt cannot be empty!');
	}
	elseif (post('mmReturnCode')==''){
	json_error('The field mmReturnCode cannot be empty!');
	}
	elseif (post('mmDpv')==''){
	json_error('The field mmDpv cannot be empty!');
	}
	elseif (post('mmOrder')==''){
	json_error('The field mmOrder cannot be empty!');
	}
	elseif (post('mmCOAMoveToDate')==''){
	json_error('The field mmCOAMoveToDate cannot be empty!');
	}
	elseif (post('mmCOAMoveType')==''){
	json_error('The field mmCOAMoveType cannot be empty!');
	}
	elseif (post('pdfLocation')==''){
	json_error('The field pdfLocation cannot be empty!');
	}
	elseif (post('pdfTotPages')==''){
	json_error('The field pdfTotPages cannot be empty!');
	}
	elseif (post('generic1')==''){
	json_error('The field generic1 cannot be empty!');
	}
	elseif (post('generic2')==''){
	json_error('The field generic2 cannot be empty!');
	}
	elseif (post('mmImbDigi')==''){
	json_error('The field mmImbDigi cannot be empty!');
	}
	elseif (post('processDate')==''){
	json_error('The field processDate cannot be empty!');
	}
	elseif (post('mailingDataFile_id')==''){
	json_error('The field mailingDataFile id cannot be empty!');
	}
	elseif (post('mailingPrintReadyFile_id')==''){
	json_error('The field mailingPrintReadyFile id cannot be empty!');
	}
	else{
	$this->mailingdataavmedcvs_model->Update(post('firstName'),post('lastName'),post('middleName'),post('fullName'),post('address1'),post('mmAddress1'),post('address2'),post('mmAddress2'),post('city'),post('mmCity'),post('state'),post('mmState'),post('zipCode'),post('mmZipCode'),post('country'),post('mmCountry'),post('mmImb'),post('mmOpt'),post('mmReturnCode'),post('mmDpv'),post('mmOrder'),post('mmCOAMoveToDate'),post('mmCOAMoveType'),post('pdfLocation'),post('pdfTotPages'),post('generic1'),post('generic2'),post('mmImbDigi'),post('processDate'),post('mailingDataFile_id'),post('mailingPrintReadyFile_id'),post('id'));
	json_send(''.H_ADMIN.'&view=mailingdataavmedcvs&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdataavmedcvs_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmedcvs/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdataavmedcvs_model->TruncateTable(''.H_ADMIN.'&view=mailingdataavmedcvs&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/admin/mailingdataavmedcvs/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdataavmedcvs_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdataavmedcvs&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdataavmedcvs_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdataavmedcvs&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_ADMIN.'&view=mailingdataavmedcvs&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	