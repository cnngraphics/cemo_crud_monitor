
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedrecord_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdataavmedrecord.php');
	
	class mailingdataavmedrecord_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdataavmedrecord LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdataavmedrecord");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdataavmedrecord");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdataavmedrecord","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdataavmedrecord","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdataavmedrecord");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdataavmedrecord","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($parent_id,$recordId,$memberId,$line)
	{
	
	$values = array(array( 'parent_id'=>$parent_id,'recordId'=>$recordId,'memberId'=>$memberId,'line'=>$line ));
	HDB::hus()->Hinsert('mailingdataavmedrecord', $values);
	}
	
	// UPDATE
	public function Update($parent_id,$recordId,$memberId,$line,$id)
	{
	$sql = "  parent_id =:parent_id,recordId =:recordId,memberId =:memberId,line =:line WHERE id = :id ";
	$data = array(':parent_id'=>$parent_id,':recordId'=>$recordId,':memberId'=>$memberId,':line'=>$line,':id'=>$id);
	HDB::hus()->Hupdate('mailingdataavmedrecord',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	