
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        jobdata_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		jobdata
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_jobdata.php');
	
	class jobdata_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("jobdata LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("jobdata");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("jobdata");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("jobdata","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("jobdata","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE jobdata");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("jobdata","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($createdAt,$finishedAt,$jobName,$oiJobNumber,$status)
	{
	
	$values = array(array( 'createdAt'=>$createdAt,'finishedAt'=>$finishedAt,'jobName'=>$jobName,'oiJobNumber'=>$oiJobNumber,'status'=>$status ));
	HDB::hus()->Hinsert('jobdata', $values);
	}
	
	// UPDATE
	public function Update($createdAt,$finishedAt,$jobName,$oiJobNumber,$status,$id)
	{
	$sql = "  createdAt =:createdAt,finishedAt =:finishedAt,jobName =:jobName,oiJobNumber =:oiJobNumber,status =:status WHERE id = :id ";
	$data = array(':createdAt'=>$createdAt,':finishedAt'=>$finishedAt,':jobName'=>$jobName,':oiJobNumber'=>$oiJobNumber,':status'=>$status,':id'=>$id);
	HDB::hus()->Hupdate('jobdata',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	