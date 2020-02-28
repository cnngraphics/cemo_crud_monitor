
	<?php
	
	/*
	* =======================================================================
	* FILE NAME:        mailingdataavmedgroupinvoicesrecord40.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord40
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include(APP_FOLDER.'/models/objects/mailingdataavmedgroupinvoicesrecord40.php');
	
	class mailingdataavmedgroupinvoicesrecord40_controller {
	public $mailingdataavmedgroupinvoicesrecord40_model;
	
	public function __construct()  
    {  
        $this->mailingdataavmedgroupinvoicesrecord40_model = new mailingdataavmedgroupinvoicesrecord40_model();
    } 
	
	public function invoke_mailingdataavmedgroupinvoicesrecord40()
	{
	
	//SELECT ALL //////////////////////////////////	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->mailingdataavmedgroupinvoicesrecord40_model->SelectAll(RECORD_PER_PAGE);
	//Accept get url  e.g (index.php?id=1&cat=2...)
	$paging = pagination($this->mailingdataavmedgroupinvoicesrecord40_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord40&do=viewall');
	}else{
	$result = $this->mailingdataavmedgroupinvoicesrecord40_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord40/View.php');
	}
	
	
	//EXPORT ////////////////////////////////////////////////////	
	if(get('do')=='export'){
	$result = $this->mailingdataavmedgroupinvoicesrecord40_model->SelectAll();
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord40/Export.php');
	}
	
	//Expeort2
	elseif(get('do')=='export2'){
	$rows = $this->mailingdataavmedgroupinvoicesrecord40_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord40/Export2.php');
	}
	//SEARCH SUGGEST ////////////////////////////////////////////////////	
	elseif(get('do')=='autosearch'){
	$qstring = post('qstring');
	if(strlen($qstring) >0) {
	$autosearch = $this->mailingdataavmedgroupinvoicesrecord40_model->AutoSearch(trim($qstring),10,'parent_id');
	echo' <div class=widget><ul class="list-group">';
	foreach ($autosearch as $srow) {
	echo '<span class="searchheading"><a href="'.H_ADMIN.'&view=mailingdataavmedgroupinvoicesrecord40&id='.$srow->id.'&do=details"><li class="list-group-item">'. $srow->parent_id.'</li></a>
	</span>';
	}
	echo '</ul></div>';
	}
	}
	
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord40/Add.php');
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
	elseif (post('adjEffDate')==''){
	json_error('The field adjEffDate cannot be empty!');
	}
	elseif (post('adjEndDate')==''){
	json_error('The field adjEndDate cannot be empty!');
	}
	elseif (post('adjContType')==''){
	json_error('The field adjContType cannot be empty!');
	}
	elseif (post('adjRemark')==''){
	json_error('The field adjRemark cannot be empty!');
	}
	elseif (post('adjAmount')==''){
	json_error('The field adjAmount cannot be empty!');
	}
	elseif (post('nbrDaysMonths')==''){
	json_error('The field nbrDaysMonths cannot be empty!');
	}
	elseif (post('adjAmountEntry1')==''){
	json_error('The field adjAmountEntry1 cannot be empty!');
	}
	elseif (post('adjAmountEntry2')==''){
	json_error('The field adjAmountEntry2 cannot be empty!');
	}
	elseif (post('adjAmountEntry3')==''){
	json_error('The field adjAmountEntry3 cannot be empty!');
	}
	elseif (post('adjAmountEntry4')==''){
	json_error('The field adjAmountEntry4 cannot be empty!');
	}
	elseif (post('adjAmountEntry5')==''){
	json_error('The field adjAmountEntry5 cannot be empty!');
	}
	elseif (post('adjAmountEntry6')==''){
	json_error('The field adjAmountEntry6 cannot be empty!');
	}
	elseif (post('adjAmountEntry7')==''){
	json_error('The field adjAmountEntry7 cannot be empty!');
	}
	elseif (post('adjAmountEntry8')==''){
	json_error('The field adjAmountEntry8 cannot be empty!');
	}
	elseif (post('adjAmountEntry9')==''){
	json_error('The field adjAmountEntry9 cannot be empty!');
	}
	elseif (post('adjAmountEntry10')==''){
	json_error('The field adjAmountEntry10 cannot be empty!');
	}
	elseif (post('adjAmountEntry11')==''){
	json_error('The field adjAmountEntry11 cannot be empty!');
	}
	elseif (post('adjAmountEntry12')==''){
	json_error('The field adjAmountEntry12 cannot be empty!');
	}
	else{
	$this->mailingdataavmedgroupinvoicesrecord40_model->Insert(post('parent_id'),post('invNo'),post('contractNo'),post('lastName'),post('firstName'),post('divisionNo'),post('adjEffDate'),post('adjEndDate'),post('adjContType'),post('adjRemark'),post('adjAmount'),post('nbrDaysMonths'),post('adjAmountEntry1'),post('adjAmountEntry2'),post('adjAmountEntry3'),post('adjAmountEntry4'),post('adjAmountEntry5'),post('adjAmountEntry6'),post('adjAmountEntry7'),post('adjAmountEntry8'),post('adjAmountEntry9'),post('adjAmountEntry10'),post('adjAmountEntry11'),post('adjAmountEntry12'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord40&do=viewall&msg=add');
	json_success('Process Completed');
	}
	}
	}
	
	//UPDATE //////////////////////////////////////////////////
	elseif(get('do')=='update'){$rows = $this->mailingdataavmedgroupinvoicesrecord40_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord40/Update.php');
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
	elseif (post('adjEffDate')==''){
	json_error('The field adjEffDate cannot be empty!');
	}
	elseif (post('adjEndDate')==''){
	json_error('The field adjEndDate cannot be empty!');
	}
	elseif (post('adjContType')==''){
	json_error('The field adjContType cannot be empty!');
	}
	elseif (post('adjRemark')==''){
	json_error('The field adjRemark cannot be empty!');
	}
	elseif (post('adjAmount')==''){
	json_error('The field adjAmount cannot be empty!');
	}
	elseif (post('nbrDaysMonths')==''){
	json_error('The field nbrDaysMonths cannot be empty!');
	}
	elseif (post('adjAmountEntry1')==''){
	json_error('The field adjAmountEntry1 cannot be empty!');
	}
	elseif (post('adjAmountEntry2')==''){
	json_error('The field adjAmountEntry2 cannot be empty!');
	}
	elseif (post('adjAmountEntry3')==''){
	json_error('The field adjAmountEntry3 cannot be empty!');
	}
	elseif (post('adjAmountEntry4')==''){
	json_error('The field adjAmountEntry4 cannot be empty!');
	}
	elseif (post('adjAmountEntry5')==''){
	json_error('The field adjAmountEntry5 cannot be empty!');
	}
	elseif (post('adjAmountEntry6')==''){
	json_error('The field adjAmountEntry6 cannot be empty!');
	}
	elseif (post('adjAmountEntry7')==''){
	json_error('The field adjAmountEntry7 cannot be empty!');
	}
	elseif (post('adjAmountEntry8')==''){
	json_error('The field adjAmountEntry8 cannot be empty!');
	}
	elseif (post('adjAmountEntry9')==''){
	json_error('The field adjAmountEntry9 cannot be empty!');
	}
	elseif (post('adjAmountEntry10')==''){
	json_error('The field adjAmountEntry10 cannot be empty!');
	}
	elseif (post('adjAmountEntry11')==''){
	json_error('The field adjAmountEntry11 cannot be empty!');
	}
	elseif (post('adjAmountEntry12')==''){
	json_error('The field adjAmountEntry12 cannot be empty!');
	}
	else{
	$this->mailingdataavmedgroupinvoicesrecord40_model->Update(post('parent_id'),post('invNo'),post('contractNo'),post('lastName'),post('firstName'),post('divisionNo'),post('adjEffDate'),post('adjEndDate'),post('adjContType'),post('adjRemark'),post('adjAmount'),post('nbrDaysMonths'),post('adjAmountEntry1'),post('adjAmountEntry2'),post('adjAmountEntry3'),post('adjAmountEntry4'),post('adjAmountEntry5'),post('adjAmountEntry6'),post('adjAmountEntry7'),post('adjAmountEntry8'),post('adjAmountEntry9'),post('adjAmountEntry10'),post('adjAmountEntry11'),post('adjAmountEntry12'),post('id'));
	json_send(''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord40&id='.post('id').'&do=details&msg=update');
	json_success('Process Completed');
	}
	}
	}
	
	//DETAILS //////////////////////////////////////////////
	elseif(get('do')=='details'){
	$rows = $this->mailingdataavmedgroupinvoicesrecord40_model->SelectOne(get('id'));
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord40/Details.php');
	}
	
	//TRUNCATE ///////////////////////////////////////////////
	elseif(get('do')=='truncate'){
	$this->mailingdataavmedgroupinvoicesrecord40_model->TruncateTable(''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord40&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/public/mailingdataavmedgroupinvoicesrecord40/View.php');
	}
	
	//DELETE /////////////////////////////////////////////////
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('id') and $dfile==''){
	$del = $this->mailingdataavmedgroupinvoicesrecord40_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord40&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->mailingdataavmedgroupinvoicesrecord40_model->Delete(get('id'),''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord40&do=viewall&msg=delete');
	}
	elseif(get('id') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_CLIENT.'&view=mailingdataavmedgroupinvoicesrecord40&id='.get('id').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	