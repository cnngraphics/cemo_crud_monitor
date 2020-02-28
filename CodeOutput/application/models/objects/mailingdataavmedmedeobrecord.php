
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedmedeobrecord_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedmedeobrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdataavmedmedeobrecord.php');
	
	class mailingdataavmedmedeobrecord_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdataavmedmedeobrecord LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdataavmedmedeobrecord");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdataavmedmedeobrecord");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdataavmedmedeobrecord","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdataavmedmedeobrecord","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdataavmedmedeobrecord");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdataavmedmedeobrecord","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($parent_id,$page,$pageData,$pageDataAcc,$pageDataHeader,$pageDate,$pageBK)
	{
	
	$values = array(array( 'parent_id'=>$parent_id,'page'=>$page,'pageData'=>$pageData,'pageDataAcc'=>$pageDataAcc,'pageDataHeader'=>$pageDataHeader,'pageDate'=>$pageDate,'pageBK'=>$pageBK ));
	HDB::hus()->Hinsert('mailingdataavmedmedeobrecord', $values);
	}
	
	// UPDATE
	public function Update($parent_id,$page,$pageData,$pageDataAcc,$pageDataHeader,$pageDate,$pageBK,$id)
	{
	$sql = "  parent_id =:parent_id,page =:page,pageData =:pageData,pageDataAcc =:pageDataAcc,pageDataHeader =:pageDataHeader,pageDate =:pageDate,pageBK =:pageBK WHERE id = :id ";
	$data = array(':parent_id'=>$parent_id,':page'=>$page,':pageData'=>$pageData,':pageDataAcc'=>$pageDataAcc,':pageDataHeader'=>$pageDataHeader,':pageDate'=>$pageDate,':pageBK'=>$pageBK,':id'=>$id);
	HDB::hus()->Hupdate('mailingdataavmedmedeobrecord',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	