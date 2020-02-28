
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        jobinterfaceitem_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		jobinterfaceitem
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_jobinterfaceitem.php');
	
	class jobinterfaceitem_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("jobinterfaceitem LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("jobinterfaceitem");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("jobinterfaceitem");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("jobinterfaceitem","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("jobinterfaceitem","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE jobinterfaceitem");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("jobinterfaceitem","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($dateInserted,$name,$value,$jobData_id,$discr,$pathDownloadLink,$saveBy,$pathUploadFolder,$pathUploadFileName,$ccToTrigger_id,$approvedAction,$dateApproved,$approvedBy,$dateModified,$approvedDisapproved,$dateApprovedDisapproved,$approvedDisapprovedBy)
	{
	
	$values = array(array( 'dateInserted'=>$dateInserted,'name'=>$name,'value'=>$value,'jobData_id'=>$jobData_id,'discr'=>$discr,'pathDownloadLink'=>$pathDownloadLink,'saveBy'=>$saveBy,'pathUploadFolder'=>$pathUploadFolder,'pathUploadFileName'=>$pathUploadFileName,'ccToTrigger_id'=>$ccToTrigger_id,'approvedAction'=>$approvedAction,'dateApproved'=>$dateApproved,'approvedBy'=>$approvedBy,'dateModified'=>$dateModified,'approvedDisapproved'=>$approvedDisapproved,'dateApprovedDisapproved'=>$dateApprovedDisapproved,'approvedDisapprovedBy'=>$approvedDisapprovedBy ));
	HDB::hus()->Hinsert('jobinterfaceitem', $values);
	}
	
	// UPDATE
	public function Update($dateInserted,$name,$value,$jobData_id,$discr,$pathDownloadLink,$saveBy,$pathUploadFolder,$pathUploadFileName,$ccToTrigger_id,$approvedAction,$dateApproved,$approvedBy,$dateModified,$approvedDisapproved,$dateApprovedDisapproved,$approvedDisapprovedBy,$id)
	{
	$sql = "  dateInserted =:dateInserted,name =:name,value =:value,jobData_id =:jobData_id,discr =:discr,pathDownloadLink =:pathDownloadLink,saveBy =:saveBy,pathUploadFolder =:pathUploadFolder,pathUploadFileName =:pathUploadFileName,ccToTrigger_id =:ccToTrigger_id,approvedAction =:approvedAction,dateApproved =:dateApproved,approvedBy =:approvedBy,dateModified =:dateModified,approvedDisapproved =:approvedDisapproved,dateApprovedDisapproved =:dateApprovedDisapproved,approvedDisapprovedBy =:approvedDisapprovedBy WHERE id = :id ";
	$data = array(':dateInserted'=>$dateInserted,':name'=>$name,':value'=>$value,':jobData_id'=>$jobData_id,':discr'=>$discr,':pathDownloadLink'=>$pathDownloadLink,':saveBy'=>$saveBy,':pathUploadFolder'=>$pathUploadFolder,':pathUploadFileName'=>$pathUploadFileName,':ccToTrigger_id'=>$ccToTrigger_id,':approvedAction'=>$approvedAction,':dateApproved'=>$dateApproved,':approvedBy'=>$approvedBy,':dateModified'=>$dateModified,':approvedDisapproved'=>$approvedDisapproved,':dateApprovedDisapproved'=>$dateApprovedDisapproved,':approvedDisapprovedBy'=>$approvedDisapprovedBy,':id'=>$id);
	HDB::hus()->Hupdate('jobinterfaceitem',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	