
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdataavmedmedeobquarterlyrecord.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedmedeobquarterlyrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdataavmedmedeobquarterlyrecord.php');
	
	class mailingdataavmedmedeobquarterlyrecord_controller {
	public $mailingdataavmedmedeobquarterlyrecord_model;
	
	public function __construct()  
    {  
        $this->mailingdataavmedmedeobquarterlyrecord_model = new mailingdataavmedmedeobquarterlyrecord_model();
    } 
	
	public function invoke_mailingdataavmedmedeobquarterlyrecord()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdataavmedmedeobquarterlyrecord_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdataavmedmedeobquarterlyrecord_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdataavmedmedeobquarterlyrecord&do=viewall');
	}else{
	$result = $this->mailingdataavmedmedeobquarterlyrecord_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/mailingdataavmedmedeobquarterlyrecord/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdataavmedmedeobquarterlyrecord_model->SelectAll();
	include(APP_FOLDER.'/views/public/mailingdataavmedmedeobquarterlyrecord/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdataavmedmedeobquarterlyrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedmedeobquarterlyrecord/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdataavmedmedeobquarterlyrecord_model->AutoSearch(trim($qstring),10,'parent_id');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdataavmedmedeobquarterlyrecord&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->parent_id.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/mailingdataavmedmedeobquarterlyrecord/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('parent_id')==''){
	json_error('The field parent id cannot be empty!');
	}
	elseif (post('page')==''){
	json_error('The field page cannot be empty!');
	}
	elseif (post('pageDate')==''){
	json_error('The field pageDate cannot be empty!');
	}
	elseif (post('quarterPeriodStart')==''){
	json_error('The field quarterPeriodStart cannot be empty!');
	}
	elseif (post('quarterPeriodEnd')==''){
	json_error('The field quarterPeriodEnd cannot be empty!');
	}
	elseif (post('memberNumber')==''){
	json_error('The field memberNumber cannot be empty!');
	}
	elseif (post('name')==''){
	json_error('The field name cannot be empty!');
	}
	elseif (post('address')==''){
	json_error('The field address cannot be empty!');
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
	elseif (post('billedAmountQuarter')==''){
	json_error('The field billedAmountQuarter cannot be empty!');
	}
	elseif (post('allowedAmountQuarter')==''){
	json_error('The field allowedAmountQuarter cannot be empty!');
	}
	elseif (post('paidAmountQuarter')==''){
	json_error('The field paidAmountQuarter cannot be empty!');
	}
	elseif (post('memberResponsibilityQuarter')==''){
	json_error('The field memberResponsibilityQuarter cannot be empty!');
	}
	elseif (post('billedAmountYear')==''){
	json_error('The field billedAmountYear cannot be empty!');
	}
	elseif (post('allowedAmountYear')==''){
	json_error('The field allowedAmountYear cannot be empty!');
	}
	elseif (post('paidAmountYear')==''){
	json_error('The field paidAmountYear cannot be empty!');
	}
	elseif (post('memberResponsibilityYear')==''){
	json_error('The field memberResponsibilityYear cannot be empty!');
	}
	elseif (post('oopUsedYear')==''){
	json_error('The field oopUsedYear cannot be empty!');
	}
	elseif (post('oopMaxYear')==''){
	json_error('The field oopMaxYear cannot be empty!');
	}
	else{
	$this->mailingdataavmedmedeobquarterlyrecord_model->Insert(post('parent_id'),post('page'),post('pageDate'),post('quarterPeriodStart'),post('quarterPeriodEnd'),post('memberNumber'),post('name'),post('address'),post('city'),post('state'),post('zip'),post('billedAmountQuarter'),post('allowedAmountQuarter'),post('paidAmountQuarter'),post('memberResponsibilityQuarter'),post('billedAmountYear'),post('allowedAmountYear'),post('paidAmountYear'),post('memberResponsibilityYear'),post('oopUsedYear'),post('oopMaxYear'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedmedeobquarterlyrecord&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdataavmedmedeobquarterlyrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedmedeobquarterlyrecord/Update.php');
	}
	
	//UPDATE PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='updatepro'){
	if($_POST){
	//form validation
	if (post('id')==''){
	json_error('The field id cannot be empty!');
	}
	elseif (post('parent_id')==''){
	json_error('The field parent id cannot be empty!');
	}
	elseif (post('page')==''){
	json_error('The field page cannot be empty!');
	}
	elseif (post('pageDate')==''){
	json_error('The field pageDate cannot be empty!');
	}
	elseif (post('quarterPeriodStart')==''){
	json_error('The field quarterPeriodStart cannot be empty!');
	}
	elseif (post('quarterPeriodEnd')==''){
	json_error('The field quarterPeriodEnd cannot be empty!');
	}
	elseif (post('memberNumber')==''){
	json_error('The field memberNumber cannot be empty!');
	}
	elseif (post('name')==''){
	json_error('The field name cannot be empty!');
	}
	elseif (post('address')==''){
	json_error('The field address cannot be empty!');
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
	elseif (post('billedAmountQuarter')==''){
	json_error('The field billedAmountQuarter cannot be empty!');
	}
	elseif (post('allowedAmountQuarter')==''){
	json_error('The field allowedAmountQuarter cannot be empty!');
	}
	elseif (post('paidAmountQuarter')==''){
	json_error('The field paidAmountQuarter cannot be empty!');
	}
	elseif (post('memberResponsibilityQuarter')==''){
	json_error('The field memberResponsibilityQuarter cannot be empty!');
	}
	elseif (post('billedAmountYear')==''){
	json_error('The field billedAmountYear cannot be empty!');
	}
	elseif (post('allowedAmountYear')==''){
	json_error('The field allowedAmountYear cannot be empty!');
	}
	elseif (post('paidAmountYear')==''){
	json_error('The field paidAmountYear cannot be empty!');
	}
	elseif (post('memberResponsibilityYear')==''){
	json_error('The field memberResponsibilityYear cannot be empty!');
	}
	elseif (post('oopUsedYear')==''){
	json_error('The field oopUsedYear cannot be empty!');
	}
	elseif (post('oopMaxYear')==''){
	json_error('The field oopMaxYear cannot be empty!');
	}
	else{
	$this->mailingdataavmedmedeobquarterlyrecord_model->Update(post('parent_id'),post('page'),post('pageDate'),post('quarterPeriodStart'),post('quarterPeriodEnd'),post('memberNumber'),post('name'),post('address'),post('city'),post('state'),post('zip'),post('billedAmountQuarter'),post('allowedAmountQuarter'),post('paidAmountQuarter'),post('memberResponsibilityQuarter'),post('billedAmountYear'),post('allowedAmountYear'),post('paidAmountYear'),post('memberResponsibilityYear'),post('oopUsedYear'),post('oopMaxYear'),post('id'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedmedeobquarterlyrecord&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdataavmedmedeobquarterlyrecord_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedmedeobquarterlyrecord/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdataavmedmedeobquarterlyrecord_model->TruncateTable(''.H_CLIENT.'&view=mailingdataavmedmedeobquarterlyrecord&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/mailingdataavmedmedeobquarterlyrecord/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdataavmedmedeobquarterlyrecord_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedmedeobquarterlyrecord&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdataavmedmedeobquarterlyrecord_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedmedeobquarterlyrecord&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=mailingdataavmedmedeobquarterlyrecord&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	