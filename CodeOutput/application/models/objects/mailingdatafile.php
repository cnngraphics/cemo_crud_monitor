
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdatafile_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatafile
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdatafile.php');
	
	class mailingdatafile_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdatafile LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdatafile");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdatafile");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdatafile","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdatafile","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdatafile");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdatafile","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($header_id,$footer_id,$fileName,$fileNameMm,$createdAt,$jobData_id,$discr,$totalRecords)
	{
	
	$values = array(array( 'header_id'=>$header_id,'footer_id'=>$footer_id,'fileName'=>$fileName,'fileNameMm'=>$fileNameMm,'createdAt'=>$createdAt,'jobData_id'=>$jobData_id,'discr'=>$discr,'totalRecords'=>$totalRecords ));
	HDB::hus()->Hinsert('mailingdatafile', $values);
	}
	
	// UPDATE
	public function Update($header_id,$footer_id,$fileName,$fileNameMm,$createdAt,$jobData_id,$discr,$totalRecords,$id)
	{
	$sql = "  header_id =:header_id,footer_id =:footer_id,fileName =:fileName,fileNameMm =:fileNameMm,createdAt =:createdAt,jobData_id =:jobData_id,discr =:discr,totalRecords =:totalRecords WHERE id = :id ";
	$data = array(':header_id'=>$header_id,':footer_id'=>$footer_id,':fileName'=>$fileName,':fileNameMm'=>$fileNameMm,':createdAt'=>$createdAt,':jobData_id'=>$jobData_id,':discr'=>$discr,':totalRecords'=>$totalRecords,':id'=>$id);
	HDB::hus()->Hupdate('mailingdatafile',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	