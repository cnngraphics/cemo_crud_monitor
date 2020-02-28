
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedgroupinvoicesrecord10_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord10
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdataavmedgroupinvoicesrecord10.php');
	
	class mailingdataavmedgroupinvoicesrecord10_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord10 LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord10");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdataavmedgroupinvoicesrecord10");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdataavmedgroupinvoicesrecord10","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord10","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdataavmedgroupinvoicesrecord10");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdataavmedgroupinvoicesrecord10","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($invNo,$invDate,$dueDate,$cycleCode,$billFrom,$billTo,$billingMethod)
	{
	
	$values = array(array( 'invNo'=>$invNo,'invDate'=>$invDate,'dueDate'=>$dueDate,'cycleCode'=>$cycleCode,'billFrom'=>$billFrom,'billTo'=>$billTo,'billingMethod'=>$billingMethod ));
	HDB::hus()->Hinsert('mailingdataavmedgroupinvoicesrecord10', $values);
	}
	
	// UPDATE
	public function Update($invNo,$invDate,$dueDate,$cycleCode,$billFrom,$billTo,$billingMethod,$id)
	{
	$sql = "  invNo =:invNo,invDate =:invDate,dueDate =:dueDate,cycleCode =:cycleCode,billFrom =:billFrom,billTo =:billTo,billingMethod =:billingMethod WHERE id = :id ";
	$data = array(':invNo'=>$invNo,':invDate'=>$invDate,':dueDate'=>$dueDate,':cycleCode'=>$cycleCode,':billFrom'=>$billFrom,':billTo'=>$billTo,':billingMethod'=>$billingMethod,':id'=>$id);
	HDB::hus()->Hupdate('mailingdataavmedgroupinvoicesrecord10',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	