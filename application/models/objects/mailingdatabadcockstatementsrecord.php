
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdatabadcockstatementsrecord_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatabadcockstatementsrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdatabadcockstatementsrecord.php');
	
	class mailingdatabadcockstatementsrecord_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdatabadcockstatementsrecord LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdatabadcockstatementsrecord");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdatabadcockstatementsrecord");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdatabadcockstatementsrecord","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdatabadcockstatementsrecord","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdatabadcockstatementsrecord");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdatabadcockstatementsrecord","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($parent_id,$page)
	{
	
	$values = array(array( 'parent_id'=>$parent_id,'page'=>$page ));
	HDB::hus()->Hinsert('mailingdatabadcockstatementsrecord', $values);
	}
	
	// UPDATE
	public function Update($parent_id,$page,$id)
	{
	$sql = "  parent_id =:parent_id,page =:page WHERE id = :id ";
	$data = array(':parent_id'=>$parent_id,':page'=>$page,':id'=>$id);
	HDB::hus()->Hupdate('mailingdatabadcockstatementsrecord',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	