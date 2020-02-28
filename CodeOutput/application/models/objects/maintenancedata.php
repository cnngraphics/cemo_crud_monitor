
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        maintenancedata_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		maintenancedata
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_maintenancedata.php');
	
	class maintenancedata_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("maintenancedata LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("maintenancedata");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("maintenancedata");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("maintenancedata","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("maintenancedata","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE maintenancedata");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("maintenancedata","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($parentId,$jobId,$parentJobId,$campaign,$mailing,$originalFileName,$pdfFileName,$token)
	{
	
	$values = array(array( 'parentId'=>$parentId,'jobId'=>$jobId,'parentJobId'=>$parentJobId,'campaign'=>$campaign,'mailing'=>$mailing,'originalFileName'=>$originalFileName,'pdfFileName'=>$pdfFileName,'token'=>$token ));
	HDB::hus()->Hinsert('maintenancedata', $values);
	}
	
	// UPDATE
	public function Update($parentId,$jobId,$parentJobId,$campaign,$mailing,$originalFileName,$pdfFileName,$token,$id)
	{
	$sql = "  parentId =:parentId,jobId =:jobId,parentJobId =:parentJobId,campaign =:campaign,mailing =:mailing,originalFileName =:originalFileName,pdfFileName =:pdfFileName,token =:token WHERE id = :id ";
	$data = array(':parentId'=>$parentId,':jobId'=>$jobId,':parentJobId'=>$parentJobId,':campaign'=>$campaign,':mailing'=>$mailing,':originalFileName'=>$originalFileName,':pdfFileName'=>$pdfFileName,':token'=>$token,':id'=>$id);
	HDB::hus()->Hupdate('maintenancedata',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	