
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedcaprecord_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedcaprecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdataavmedcaprecord.php');
	
	class mailingdataavmedcaprecord_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdataavmedcaprecord LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdataavmedcaprecord");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdataavmedcaprecord");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdataavmedcaprecord","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdataavmedcaprecord","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdataavmedcaprecord");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdataavmedcaprecord","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($parent_id,$page,$pageData)
	{
	
	$values = array(array( 'parent_id'=>$parent_id,'page'=>$page,'pageData'=>$pageData ));
	HDB::hus()->Hinsert('mailingdataavmedcaprecord', $values);
	}
	
	// UPDATE
	public function Update($parent_id,$page,$pageData,$id)
	{
	$sql = "  parent_id =:parent_id,page =:page,pageData =:pageData WHERE id = :id ";
	$data = array(':parent_id'=>$parent_id,':page'=>$page,':pageData'=>$pageData,':id'=>$id);
	HDB::hus()->Hupdate('mailingdataavmedcaprecord',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	