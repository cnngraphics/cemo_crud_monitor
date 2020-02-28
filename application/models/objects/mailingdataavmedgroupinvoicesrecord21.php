
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedgroupinvoicesrecord21_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord21
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdataavmedgroupinvoicesrecord21.php');
	
	class mailingdataavmedgroupinvoicesrecord21_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord21 LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord21");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdataavmedgroupinvoicesrecord21");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdataavmedgroupinvoicesrecord21","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord21","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdataavmedgroupinvoicesrecord21");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdataavmedgroupinvoicesrecord21","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($invNo,$subscriberAddr2,$subscriberAddr3,$acctId,$contact)
	{
	
	$values = array(array( 'invNo'=>$invNo,'subscriberAddr2'=>$subscriberAddr2,'subscriberAddr3'=>$subscriberAddr3,'acctId'=>$acctId,'contact'=>$contact ));
	HDB::hus()->Hinsert('mailingdataavmedgroupinvoicesrecord21', $values);
	}
	
	// UPDATE
	public function Update($invNo,$subscriberAddr2,$subscriberAddr3,$acctId,$contact,$id)
	{
	$sql = "  invNo =:invNo,subscriberAddr2 =:subscriberAddr2,subscriberAddr3 =:subscriberAddr3,acctId =:acctId,contact =:contact WHERE id = :id ";
	$data = array(':invNo'=>$invNo,':subscriberAddr2'=>$subscriberAddr2,':subscriberAddr3'=>$subscriberAddr3,':acctId'=>$acctId,':contact'=>$contact,':id'=>$id);
	HDB::hus()->Hupdate('mailingdataavmedgroupinvoicesrecord21',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	