
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdatafploncall.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatafploncall
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdatafploncall.php');
	
	class mailingdatafploncall_controller {
	public $mailingdatafploncall_model;
	
	public function __construct()  
    {  
        $this->mailingdatafploncall_model = new mailingdatafploncall_model();
    } 
	
	public function invoke_mailingdatafploncall()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdatafploncall_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdatafploncall_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdatafploncall&do=viewall');
	}else{
	$result = $this->mailingdatafploncall_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/admin/mailingdatafploncall/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdatafploncall_model->SelectAll();
	include(APP_FOLDER.'/views/admin/mailingdatafploncall/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdatafploncall_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdatafploncall/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdatafploncall_model->AutoSearch(trim($qstring),10,'firstName');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdatafploncall&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->firstName.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/admin/mailingdatafploncall/Add.php');
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
	elseif (post('NO_LTR')==''){
	json_error('The field NO LTR cannot be empty!');
	}
	elseif (post('CD_CUST_TYPE')==''){
	json_error('The field CD CUST TYPE cannot be empty!');
	}
	elseif (post('accountNo')==''){
	json_error('The field accountNo cannot be empty!');
	}
	elseif (post('PREMAddrs')==''){
	json_error('The field PREMAddrs cannot be empty!');
	}
	elseif (post('PREMCity')==''){
	json_error('The field PREMCity cannot be empty!');
	}
	elseif (post('PREMST')==''){
	json_error('The field PREMST cannot be empty!');
	}
	elseif (post('PREMZip')==''){
	json_error('The field PREMZip cannot be empty!');
	}
	elseif (post('credit')==''){
	json_error('The field credit cannot be empty!');
	}
	elseif (post('date')==''){
	json_error('The field date cannot be empty!');
	}
	elseif (post('AC')==''){
	json_error('The field AC cannot be empty!');
	}
	elseif (post('HS')==''){
	json_error('The field HS cannot be empty!');
	}
	elseif (post('HP')==''){
	json_error('The field HP cannot be empty!');
	}
	elseif (post('WH')==''){
	json_error('The field WH cannot be empty!');
	}
	elseif (post('PP')==''){
	json_error('The field PP cannot be empty!');
	}
	elseif (post('PS')==''){
	json_error('The field PS cannot be empty!');
	}
	elseif (post('contractor')==''){
	json_error('The field contractor cannot be empty!');
	}
	elseif (post('phone')==''){
	json_error('The field phone cannot be empty!');
	}
	elseif (post('status')==''){
	json_error('The field status cannot be empty!');
	}
	elseif (post('postDate')==''){
	json_error('The field postDate cannot be empty!');
	}
	elseif (post('notes')==''){
	json_error('The field notes cannot be empty!');
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
	$this->mailingdatafploncall_model->Insert(post('firstName'),post('lastName'),post('middleName'),post('fullName'),post('address1'),post('mmAddress1'),post('address2'),post('mmAddress2'),post('city'),post('mmCity'),post('state'),post('mmState'),post('zipCode'),post('mmZipCode'),post('country'),post('mmCountry'),post('mmImb'),post('mmOpt'),post('mmReturnCode'),post('mmDpv'),post('mmOrder'),post('mmCOAMoveToDate'),post('mmCOAMoveType'),post('pdfLocation'),post('pdfTotPages'),post('NO_LTR'),post('CD_CUST_TYPE'),post('accountNo'),post('PREMAddrs'),post('PREMCity'),post('PREMST'),post('PREMZip'),post('credit'),post('date'),post('AC'),post('HS'),post('HP'),post('WH'),post('PP'),post('PS'),post('contractor'),post('phone'),post('status'),post('postDate'),post('notes'),post('mailingDataFile_id'),post('mailingPrintReadyFile_id'),post('generic1'),post('generic2'),post('mmImbDigi'));
	json_send(''.H_ADMIN.'&view=mailingdatafploncall&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdatafploncall_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdatafploncall/Update.php');
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
	elseif (post('NO_LTR')==''){
	json_error('The field NO LTR cannot be empty!');
	}
	elseif (post('CD_CUST_TYPE')==''){
	json_error('The field CD CUST TYPE cannot be empty!');
	}
	elseif (post('accountNo')==''){
	json_error('The field accountNo cannot be empty!');
	}
	elseif (post('PREMAddrs')==''){
	json_error('The field PREMAddrs cannot be empty!');
	}
	elseif (post('PREMCity')==''){
	json_error('The field PREMCity cannot be empty!');
	}
	elseif (post('PREMST')==''){
	json_error('The field PREMST cannot be empty!');
	}
	elseif (post('PREMZip')==''){
	json_error('The field PREMZip cannot be empty!');
	}
	elseif (post('credit')==''){
	json_error('The field credit cannot be empty!');
	}
	elseif (post('date')==''){
	json_error('The field date cannot be empty!');
	}
	elseif (post('AC')==''){
	json_error('The field AC cannot be empty!');
	}
	elseif (post('HS')==''){
	json_error('The field HS cannot be empty!');
	}
	elseif (post('HP')==''){
	json_error('The field HP cannot be empty!');
	}
	elseif (post('WH')==''){
	json_error('The field WH cannot be empty!');
	}
	elseif (post('PP')==''){
	json_error('The field PP cannot be empty!');
	}
	elseif (post('PS')==''){
	json_error('The field PS cannot be empty!');
	}
	elseif (post('contractor')==''){
	json_error('The field contractor cannot be empty!');
	}
	elseif (post('phone')==''){
	json_error('The field phone cannot be empty!');
	}
	elseif (post('status')==''){
	json_error('The field status cannot be empty!');
	}
	elseif (post('postDate')==''){
	json_error('The field postDate cannot be empty!');
	}
	elseif (post('notes')==''){
	json_error('The field notes cannot be empty!');
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
	$this->mailingdatafploncall_model->Update(post('firstName'),post('lastName'),post('middleName'),post('fullName'),post('address1'),post('mmAddress1'),post('address2'),post('mmAddress2'),post('city'),post('mmCity'),post('state'),post('mmState'),post('zipCode'),post('mmZipCode'),post('country'),post('mmCountry'),post('mmImb'),post('mmOpt'),post('mmReturnCode'),post('mmDpv'),post('mmOrder'),post('mmCOAMoveToDate'),post('mmCOAMoveType'),post('pdfLocation'),post('pdfTotPages'),post('NO_LTR'),post('CD_CUST_TYPE'),post('accountNo'),post('PREMAddrs'),post('PREMCity'),post('PREMST'),post('PREMZip'),post('credit'),post('date'),post('AC'),post('HS'),post('HP'),post('WH'),post('PP'),post('PS'),post('contractor'),post('phone'),post('status'),post('postDate'),post('notes'),post('mailingDataFile_id'),post('mailingPrintReadyFile_id'),post('generic1'),post('generic2'),post('mmImbDigi'),post('id'));
	json_send(''.H_ADMIN.'&view=mailingdatafploncall&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdatafploncall_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdatafploncall/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdatafploncall_model->TruncateTable(''.H_ADMIN.'&view=mailingdatafploncall&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/admin/mailingdatafploncall/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdatafploncall_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdatafploncall&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdatafploncall_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdatafploncall&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_ADMIN.'&view=mailingdatafploncall&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	