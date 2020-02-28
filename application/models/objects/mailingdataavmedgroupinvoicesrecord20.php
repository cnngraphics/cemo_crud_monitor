
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedgroupinvoicesrecord20_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord20
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdataavmedgroupinvoicesrecord20.php');
	
	class mailingdataavmedgroupinvoicesrecord20_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord20 LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord20");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdataavmedgroupinvoicesrecord20");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdataavmedgroupinvoicesrecord20","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord20","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdataavmedgroupinvoicesrecord20");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdataavmedgroupinvoicesrecord20","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($invNo,$subscriberName,$subscriberAddr1)
	{
	
	$values = array(array( 'invNo'=>$invNo,'subscriberName'=>$subscriberName,'subscriberAddr1'=>$subscriberAddr1 ));
	HDB::hus()->Hinsert('mailingdataavmedgroupinvoicesrecord20', $values);
	}
	
	// UPDATE
	public function Update($invNo,$subscriberName,$subscriberAddr1,$id)
	{
	$sql = "  invNo =:invNo,subscriberName =:subscriberName,subscriberAddr1 =:subscriberAddr1 WHERE id = :id ";
	$data = array(':invNo'=>$invNo,':subscriberName'=>$subscriberName,':subscriberAddr1'=>$subscriberAddr1,':id'=>$id);
	HDB::hus()->Hupdate('mailingdataavmedgroupinvoicesrecord20',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	