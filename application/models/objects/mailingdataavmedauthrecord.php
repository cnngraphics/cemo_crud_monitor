
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedauthrecord_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedauthrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdataavmedauthrecord.php');
	
	class mailingdataavmedauthrecord_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdataavmedauthrecord LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdataavmedauthrecord");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdataavmedauthrecord");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdataavmedauthrecord","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdataavmedauthrecord","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdataavmedauthrecord");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdataavmedauthrecord","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($parent_id,$page,$date,$summary,$info,$status,$prov,$header1,$header2,$details)
	{
	
	$values = array(array( 'parent_id'=>$parent_id,'page'=>$page,'date'=>$date,'summary'=>$summary,'info'=>$info,'status'=>$status,'prov'=>$prov,'header1'=>$header1,'header2'=>$header2,'details'=>$details ));
	HDB::hus()->Hinsert('mailingdataavmedauthrecord', $values);
	}
	
	// UPDATE
	public function Update($parent_id,$page,$date,$summary,$info,$status,$prov,$header1,$header2,$details,$id)
	{
	$sql = "  parent_id =:parent_id,page =:page,date =:date,summary =:summary,info =:info,status =:status,prov =:prov,header1 =:header1,header2 =:header2,details =:details WHERE id = :id ";
	$data = array(':parent_id'=>$parent_id,':page'=>$page,':date'=>$date,':summary'=>$summary,':info'=>$info,':status'=>$status,':prov'=>$prov,':header1'=>$header1,':header2'=>$header2,':details'=>$details,':id'=>$id);
	HDB::hus()->Hupdate('mailingdataavmedauthrecord',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	