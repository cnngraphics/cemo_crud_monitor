
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        clientdata_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		clientdata
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_clientdata.php');
	
	class clientdata_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("clientdata LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("clientdata");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("clientdata");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("clientdata","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("clientdata","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE clientdata");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("clientdata","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($clientName,$monthlyJobNumber,$visibleClientName,$mailingDataEntity,$listEmails,$localFolder,$jobGroup)
	{
	
	$values = array(array( 'clientName'=>$clientName,'monthlyJobNumber'=>$monthlyJobNumber,'visibleClientName'=>$visibleClientName,'mailingDataEntity'=>$mailingDataEntity,'listEmails'=>$listEmails,'localFolder'=>$localFolder,'jobGroup'=>$jobGroup ));
	HDB::hus()->Hinsert('clientdata', $values);
	}
	
	// UPDATE
	public function Update($clientName,$monthlyJobNumber,$visibleClientName,$mailingDataEntity,$listEmails,$localFolder,$jobGroup,$id)
	{
	$sql = "  clientName =:clientName,monthlyJobNumber =:monthlyJobNumber,visibleClientName =:visibleClientName,mailingDataEntity =:mailingDataEntity,listEmails =:listEmails,localFolder =:localFolder,jobGroup =:jobGroup WHERE id = :id ";
	$data = array(':clientName'=>$clientName,':monthlyJobNumber'=>$monthlyJobNumber,':visibleClientName'=>$visibleClientName,':mailingDataEntity'=>$mailingDataEntity,':listEmails'=>$listEmails,':localFolder'=>$localFolder,':jobGroup'=>$jobGroup,':id'=>$id);
	HDB::hus()->Hupdate('clientdata',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	