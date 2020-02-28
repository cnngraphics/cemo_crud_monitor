
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdatabcparecord_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatabcparecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdatabcparecord.php');
	
	class mailingdatabcparecord_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdatabcparecord LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdatabcparecord");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdatabcparecord");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdatabcparecord","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdatabcparecord","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdatabcparecord");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdatabcparecord","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($headerPage1,$headerPage2,$companyAddress,$propertyValues,$taxes,$footerTextPage1,$tablePage2,$totalPage2,$parcelNumber,$date,$file)
	{
	
	$values = array(array( 'headerPage1'=>$headerPage1,'headerPage2'=>$headerPage2,'companyAddress'=>$companyAddress,'propertyValues'=>$propertyValues,'taxes'=>$taxes,'footerTextPage1'=>$footerTextPage1,'tablePage2'=>$tablePage2,'totalPage2'=>$totalPage2,'parcelNumber'=>$parcelNumber,'date'=>$date,'file'=>$file ));
	HDB::hus()->Hinsert('mailingdatabcparecord', $values);
	}
	
	// UPDATE
	public function Update($headerPage1,$headerPage2,$companyAddress,$propertyValues,$taxes,$footerTextPage1,$tablePage2,$totalPage2,$parcelNumber,$date,$file,$id)
	{
	$sql = "  headerPage1 =:headerPage1,headerPage2 =:headerPage2,companyAddress =:companyAddress,propertyValues =:propertyValues,taxes =:taxes,footerTextPage1 =:footerTextPage1,tablePage2 =:tablePage2,totalPage2 =:totalPage2,parcelNumber =:parcelNumber,date =:date,file =:file WHERE id = :id ";
	$data = array(':headerPage1'=>$headerPage1,':headerPage2'=>$headerPage2,':companyAddress'=>$companyAddress,':propertyValues'=>$propertyValues,':taxes'=>$taxes,':footerTextPage1'=>$footerTextPage1,':tablePage2'=>$tablePage2,':totalPage2'=>$totalPage2,':parcelNumber'=>$parcelNumber,':date'=>$date,':file'=>$file,':id'=>$id);
	HDB::hus()->Hupdate('mailingdatabcparecord',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	