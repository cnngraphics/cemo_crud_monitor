
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        cronconductor_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		cronconductor
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_cronconductor.php');
	
	class cronconductor_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("cronconductor LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("cronconductor");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("cronconductor");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("cronconductor","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("cronconductor","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE cronconductor");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("cronconductor","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($cronFunction,$timeAdded,$addedBy,$timeToRun,$timeRan,$timeNeededToRun,$ranBy,$timeFinished,$error,$sleeping,$jobData_id,$clientData_id)
	{
	
	$values = array(array( 'cronFunction'=>$cronFunction,'timeAdded'=>$timeAdded,'addedBy'=>$addedBy,'timeToRun'=>$timeToRun,'timeRan'=>$timeRan,'timeNeededToRun'=>$timeNeededToRun,'ranBy'=>$ranBy,'timeFinished'=>$timeFinished,'error'=>$error,'sleeping'=>$sleeping,'jobData_id'=>$jobData_id,'clientData_id'=>$clientData_id ));
	HDB::hus()->Hinsert('cronconductor', $values);
	}
	
	// UPDATE
	public function Update($cronFunction,$timeAdded,$addedBy,$timeToRun,$timeRan,$timeNeededToRun,$ranBy,$timeFinished,$error,$sleeping,$jobData_id,$clientData_id,$id)
	{
	$sql = "  cronFunction =:cronFunction,timeAdded =:timeAdded,addedBy =:addedBy,timeToRun =:timeToRun,timeRan =:timeRan,timeNeededToRun =:timeNeededToRun,ranBy =:ranBy,timeFinished =:timeFinished,error =:error,sleeping =:sleeping,jobData_id =:jobData_id,clientData_id =:clientData_id WHERE id = :id ";
	$data = array(':cronFunction'=>$cronFunction,':timeAdded'=>$timeAdded,':addedBy'=>$addedBy,':timeToRun'=>$timeToRun,':timeRan'=>$timeRan,':timeNeededToRun'=>$timeNeededToRun,':ranBy'=>$ranBy,':timeFinished'=>$timeFinished,':error'=>$error,':sleeping'=>$sleeping,':jobData_id'=>$jobData_id,':clientData_id'=>$clientData_id,':id'=>$id);
	HDB::hus()->Hupdate('cronconductor',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	