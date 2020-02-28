
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        jobdatafile_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		jobdatafile
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_jobdatafile.php');
	
	class jobdatafile_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("jobdatafile LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("jobdatafile");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("jobdatafile");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("jobdatafile","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("jobdatafile","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE jobdatafile");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("jobdatafile","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($fileName,$createdAt,$jobData_id)
	{
	
	$values = array(array( 'fileName'=>$fileName,'createdAt'=>$createdAt,'jobData_id'=>$jobData_id ));
	HDB::hus()->Hinsert('jobdatafile', $values);
	}
	
	// UPDATE
	public function Update($fileName,$createdAt,$jobData_id,$id)
	{
	$sql = "  fileName =:fileName,createdAt =:createdAt,jobData_id =:jobData_id WHERE id = :id ";
	$data = array(':fileName'=>$fileName,':createdAt'=>$createdAt,':jobData_id'=>$jobData_id,':id'=>$id);
	HDB::hus()->Hupdate('jobdatafile',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	