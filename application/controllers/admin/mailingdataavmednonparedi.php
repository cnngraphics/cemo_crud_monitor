
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdataavmednonparedi.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmednonparedi
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdataavmednonparedi.php');
	
	class mailingdataavmednonparedi_controller {
	public $mailingdataavmednonparedi_model;
	
	public function __construct()  
    {  
        $this->mailingdataavmednonparedi_model = new mailingdataavmednonparedi_model();
    } 
	
	public function invoke_mailingdataavmednonparedi()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdataavmednonparedi_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdataavmednonparedi_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdataavmednonparedi&do=viewall');
	}else{
	$result = $this->mailingdataavmednonparedi_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/admin/mailingdataavmednonparedi/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdataavmednonparedi_model->SelectAll();
	include(APP_FOLDER.'/views/admin/mailingdataavmednonparedi/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdataavmednonparedi_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmednonparedi/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdataavmednonparedi_model->AutoSearch(trim($qstring),10,'firstName');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdataavmednonparedi&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->firstName.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/admin/mailingdataavmednonparedi/Add.php');
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
	elseif (post('transmissionDate')==''){
	json_error('The field transmissionDate cannot be empty!');
	}
	elseif (post('claimNumber')==''){
	json_error('The field claimNumber cannot be empty!');
	}
	elseif (post('providerTaxId')==''){
	json_error('The field providerTaxId cannot be empty!');
	}
	elseif (post('providerNPI')==''){
	json_error('The field providerNPI cannot be empty!');
	}
	elseif (post('avmedID')==''){
	json_error('The field avmedID cannot be empty!');
	}
	elseif (post('memberName')==''){
	json_error('The field memberName cannot be empty!');
	}
	elseif (post('service')==''){
	json_error('The field service cannot be empty!');
	}
	elseif (post('DIAG1')==''){
	json_error('The field DIAG1 cannot be empty!');
	}
	elseif (post('seqNumber')==''){
	json_error('The field seqNumber cannot be empty!');
	}
	elseif (post('reprint')==''){
	json_error('The field reprint cannot be empty!');
	}
	elseif (post('mailingDataFile_id')==''){
	json_error('The field mailingDataFile id cannot be empty!');
	}
	elseif (post('mailingPrintReadyFile_id')==''){
	json_error('The field mailingPrintReadyFile id cannot be empty!');
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
	else{
	$this->mailingdataavmednonparedi_model->Insert(post('firstName'),post('lastName'),post('middleName'),post('fullName'),post('address1'),post('mmAddress1'),post('address2'),post('mmAddress2'),post('city'),post('mmCity'),post('state'),post('mmState'),post('zipCode'),post('mmZipCode'),post('country'),post('mmCountry'),post('mmImb'),post('mmOpt'),post('mmReturnCode'),post('mmDpv'),post('mmOrder'),post('mmCOAMoveToDate'),post('mmCOAMoveType'),post('pdfLocation'),post('pdfTotPages'),post('transmissionDate'),post('claimNumber'),post('providerTaxId'),post('providerNPI'),post('avmedID'),post('memberName'),post('service'),post('DIAG1'),post('seqNumber'),post('reprint'),post('mailingDataFile_id'),post('mailingPrintReadyFile_id'),post('generic1'),post('generic2'),post('mmImbDigi'));
	json_send(''.H_ADMIN.'&view=mailingdataavmednonparedi&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdataavmednonparedi_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmednonparedi/Update.php');
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
	elseif (post('transmissionDate')==''){
	json_error('The field transmissionDate cannot be empty!');
	}
	elseif (post('claimNumber')==''){
	json_error('The field claimNumber cannot be empty!');
	}
	elseif (post('providerTaxId')==''){
	json_error('The field providerTaxId cannot be empty!');
	}
	elseif (post('providerNPI')==''){
	json_error('The field providerNPI cannot be empty!');
	}
	elseif (post('avmedID')==''){
	json_error('The field avmedID cannot be empty!');
	}
	elseif (post('memberName')==''){
	json_error('The field memberName cannot be empty!');
	}
	elseif (post('service')==''){
	json_error('The field service cannot be empty!');
	}
	elseif (post('DIAG1')==''){
	json_error('The field DIAG1 cannot be empty!');
	}
	elseif (post('seqNumber')==''){
	json_error('The field seqNumber cannot be empty!');
	}
	elseif (post('reprint')==''){
	json_error('The field reprint cannot be empty!');
	}
	elseif (post('mailingDataFile_id')==''){
	json_error('The field mailingDataFile id cannot be empty!');
	}
	elseif (post('mailingPrintReadyFile_id')==''){
	json_error('The field mailingPrintReadyFile id cannot be empty!');
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
	else{
	$this->mailingdataavmednonparedi_model->Update(post('firstName'),post('lastName'),post('middleName'),post('fullName'),post('address1'),post('mmAddress1'),post('address2'),post('mmAddress2'),post('city'),post('mmCity'),post('state'),post('mmState'),post('zipCode'),post('mmZipCode'),post('country'),post('mmCountry'),post('mmImb'),post('mmOpt'),post('mmReturnCode'),post('mmDpv'),post('mmOrder'),post('mmCOAMoveToDate'),post('mmCOAMoveType'),post('pdfLocation'),post('pdfTotPages'),post('transmissionDate'),post('claimNumber'),post('providerTaxId'),post('providerNPI'),post('avmedID'),post('memberName'),post('service'),post('DIAG1'),post('seqNumber'),post('reprint'),post('mailingDataFile_id'),post('mailingPrintReadyFile_id'),post('generic1'),post('generic2'),post('mmImbDigi'),post('id'));
	json_send(''.H_ADMIN.'&view=mailingdataavmednonparedi&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdataavmednonparedi_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmednonparedi/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdataavmednonparedi_model->TruncateTable(''.H_ADMIN.'&view=mailingdataavmednonparedi&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/admin/mailingdataavmednonparedi/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdataavmednonparedi_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdataavmednonparedi&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdataavmednonparedi_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdataavmednonparedi&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_ADMIN.'&view=mailingdataavmednonparedi&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	