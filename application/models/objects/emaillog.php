
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        emaillog_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		emaillog
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_emaillog.php');
	
	class emaillog_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("emaillog LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("emaillog");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("emaillog");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("emaillog","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("emaillog","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE emaillog");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("emaillog","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($dateSent,$mailTo,$cc,$bcc,$subject,$body,$cemiUserId,$cronConductor_id)
	{
	
	$values = array(array( 'dateSent'=>$dateSent,'mailTo'=>$mailTo,'cc'=>$cc,'bcc'=>$bcc,'subject'=>$subject,'body'=>$body,'cemiUserId'=>$cemiUserId,'cronConductor_id'=>$cronConductor_id ));
	HDB::hus()->Hinsert('emaillog', $values);
	}
	
	// UPDATE
	public function Update($dateSent,$mailTo,$cc,$bcc,$subject,$body,$cemiUserId,$cronConductor_id,$id)
	{
	$sql = "  dateSent =:dateSent,mailTo =:mailTo,cc =:cc,bcc =:bcc,subject =:subject,body =:body,cemiUserId =:cemiUserId,cronConductor_id =:cronConductor_id WHERE id = :id ";
	$data = array(':dateSent'=>$dateSent,':mailTo'=>$mailTo,':cc'=>$cc,':bcc'=>$bcc,':subject'=>$subject,':body'=>$body,':cemiUserId'=>$cemiUserId,':cronConductor_id'=>$cronConductor_id,':id'=>$id);
	HDB::hus()->Hupdate('emaillog',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	