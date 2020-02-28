
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdataavmedgroupinvoicesrecord30.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord30
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdataavmedgroupinvoicesrecord30.php');
	
	class mailingdataavmedgroupinvoicesrecord30_controller {
	public $mailingdataavmedgroupinvoicesrecord30_model;
	
	public function __construct()  
    {  
        $this->mailingdataavmedgroupinvoicesrecord30_model = new mailingdataavmedgroupinvoicesrecord30_model();
    } 
	
	public function invoke_mailingdataavmedgroupinvoicesrecord30()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdataavmedgroupinvoicesrecord30_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdataavmedgroupinvoicesrecord30_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord30&do=viewall');
	}else{
	$result = $this->mailingdataavmedgroupinvoicesrecord30_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/admin/mailingdataavmedgroupinvoicesrecord30/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdataavmedgroupinvoicesrecord30_model->SelectAll();
	include(APP_FOLDER.'/views/admin/mailingdataavmedgroupinvoicesrecord30/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdataavmedgroupinvoicesrecord30_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmedgroupinvoicesrecord30/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdataavmedgroupinvoicesrecord30_model->AutoSearch(trim($qstring),10,'parent_id');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord30&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->parent_id.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/admin/mailingdataavmedgroupinvoicesrecord30/Add.php');
	}
	
	//ADD PROCESS //////////////////////////////////////////////////
	elseif(get('do')=='addpro'){
	if($_POST){
	//form validation
	if (post('parent_id')==''){
	json_error('The field parent id cannot be empty!');
	}
	elseif (post('invNo')==''){
	json_error('The field invNo cannot be empty!');
	}
	elseif (post('contractNo')==''){
	json_error('The field contractNo cannot be empty!');
	}
	elseif (post('lastName')==''){
	json_error('The field lastName cannot be empty!');
	}
	elseif (post('firstName')==''){
	json_error('The field firstName cannot be empty!');
	}
	elseif (post('divisionNo')==''){
	json_error('The field divisionNo cannot be empty!');
	}
	elseif (post('spanEffDate')==''){
	json_error('The field spanEffDate cannot be empty!');
	}
	elseif (post('premFromDate')==''){
	json_error('The field premFromDate cannot be empty!');
	}
	elseif (post('premToDate')==''){
	json_error('The field premToDate cannot be empty!');
	}
	elseif (post('premContType')==''){
	json_error('The field premContType cannot be empty!');
	}
	elseif (post('familySize')==''){
	json_error('The field familySize cannot be empty!');
	}
	elseif (post('premAmount')==''){
	json_error('The field premAmount cannot be empty!');
	}
	elseif (post('nbrDayMonths')==''){
	json_error('The field nbrDayMonths cannot be empty!');
	}
	elseif (post('premAmtEntry1')==''){
	json_error('The field premAmtEntry1 cannot be empty!');
	}
	elseif (post('premAmtEntry2')==''){
	json_error('The field premAmtEntry2 cannot be empty!');
	}
	elseif (post('premAmtEntry3')==''){
	json_error('The field premAmtEntry3 cannot be empty!');
	}
	elseif (post('premAmtEntry4')==''){
	json_error('The field premAmtEntry4 cannot be empty!');
	}
	elseif (post('premAmtEntry5')==''){
	json_error('The field premAmtEntry5 cannot be empty!');
	}
	elseif (post('premAmtEntry6')==''){
	json_error('The field premAmtEntry6 cannot be empty!');
	}
	elseif (post('premAmtEntry7')==''){
	json_error('The field premAmtEntry7 cannot be empty!');
	}
	elseif (post('premAmtEntry8')==''){
	json_error('The field premAmtEntry8 cannot be empty!');
	}
	elseif (post('premAmtEntry9')==''){
	json_error('The field premAmtEntry9 cannot be empty!');
	}
	elseif (post('premAmtEntry10')==''){
	json_error('The field premAmtEntry10 cannot be empty!');
	}
	elseif (post('premAmtEntry11')==''){
	json_error('The field premAmtEntry11 cannot be empty!');
	}
	elseif (post('premAmtEntry12')==''){
	json_error('The field premAmtEntry12 cannot be empty!');
	}
	else{
	$this->mailingdataavmedgroupinvoicesrecord30_model->Insert(post('parent_id'),post('invNo'),post('contractNo'),post('lastName'),post('firstName'),post('divisionNo'),post('spanEffDate'),post('premFromDate'),post('premToDate'),post('premContType'),post('familySize'),post('premAmount'),post('nbrDayMonths'),post('premAmtEntry1'),post('premAmtEntry2'),post('premAmtEntry3'),post('premAmtEntry4'),post('premAmtEntry5'),post('premAmtEntry6'),post('premAmtEntry7'),post('premAmtEntry8'),post('premAmtEntry9'),post('premAmtEntry10'),post('premAmtEntry11'),post('premAmtEntry12'));
	json_send(''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord30&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdataavmedgroupinvoicesrecord30_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmedgroupinvoicesrecord30/Update.php');
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
	elseif (post('invNo')==''){
	json_error('The field invNo cannot be empty!');
	}
	elseif (post('contractNo')==''){
	json_error('The field contractNo cannot be empty!');
	}
	elseif (post('lastName')==''){
	json_error('The field lastName cannot be empty!');
	}
	elseif (post('firstName')==''){
	json_error('The field firstName cannot be empty!');
	}
	elseif (post('divisionNo')==''){
	json_error('The field divisionNo cannot be empty!');
	}
	elseif (post('spanEffDate')==''){
	json_error('The field spanEffDate cannot be empty!');
	}
	elseif (post('premFromDate')==''){
	json_error('The field premFromDate cannot be empty!');
	}
	elseif (post('premToDate')==''){
	json_error('The field premToDate cannot be empty!');
	}
	elseif (post('premContType')==''){
	json_error('The field premContType cannot be empty!');
	}
	elseif (post('familySize')==''){
	json_error('The field familySize cannot be empty!');
	}
	elseif (post('premAmount')==''){
	json_error('The field premAmount cannot be empty!');
	}
	elseif (post('nbrDayMonths')==''){
	json_error('The field nbrDayMonths cannot be empty!');
	}
	elseif (post('premAmtEntry1')==''){
	json_error('The field premAmtEntry1 cannot be empty!');
	}
	elseif (post('premAmtEntry2')==''){
	json_error('The field premAmtEntry2 cannot be empty!');
	}
	elseif (post('premAmtEntry3')==''){
	json_error('The field premAmtEntry3 cannot be empty!');
	}
	elseif (post('premAmtEntry4')==''){
	json_error('The field premAmtEntry4 cannot be empty!');
	}
	elseif (post('premAmtEntry5')==''){
	json_error('The field premAmtEntry5 cannot be empty!');
	}
	elseif (post('premAmtEntry6')==''){
	json_error('The field premAmtEntry6 cannot be empty!');
	}
	elseif (post('premAmtEntry7')==''){
	json_error('The field premAmtEntry7 cannot be empty!');
	}
	elseif (post('premAmtEntry8')==''){
	json_error('The field premAmtEntry8 cannot be empty!');
	}
	elseif (post('premAmtEntry9')==''){
	json_error('The field premAmtEntry9 cannot be empty!');
	}
	elseif (post('premAmtEntry10')==''){
	json_error('The field premAmtEntry10 cannot be empty!');
	}
	elseif (post('premAmtEntry11')==''){
	json_error('The field premAmtEntry11 cannot be empty!');
	}
	elseif (post('premAmtEntry12')==''){
	json_error('The field premAmtEntry12 cannot be empty!');
	}
	else{
	$this->mailingdataavmedgroupinvoicesrecord30_model->Update(post('parent_id'),post('invNo'),post('contractNo'),post('lastName'),post('firstName'),post('divisionNo'),post('spanEffDate'),post('premFromDate'),post('premToDate'),post('premContType'),post('familySize'),post('premAmount'),post('nbrDayMonths'),post('premAmtEntry1'),post('premAmtEntry2'),post('premAmtEntry3'),post('premAmtEntry4'),post('premAmtEntry5'),post('premAmtEntry6'),post('premAmtEntry7'),post('premAmtEntry8'),post('premAmtEntry9'),post('premAmtEntry10'),post('premAmtEntry11'),post('premAmtEntry12'),post('id'));
	json_send(''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord30&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdataavmedgroupinvoicesrecord30_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/admin/mailingdataavmedgroupinvoicesrecord30/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdataavmedgroupinvoicesrecord30_model->TruncateTable(''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord30&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/admin/mailingdataavmedgroupinvoicesrecord30/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdataavmedgroupinvoicesrecord30_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord30&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdataavmedgroupinvoicesrecord30_model->Delete(get('id'),''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord30&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord30&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	