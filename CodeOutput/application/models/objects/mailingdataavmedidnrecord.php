
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedidnrecord_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedidnrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdataavmedidnrecord.php');
	
	class mailingdataavmedidnrecord_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdataavmedidnrecord LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdataavmedidnrecord");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdataavmedidnrecord");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdataavmedidnrecord","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdataavmedidnrecord","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdataavmedidnrecord");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdataavmedidnrecord","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($parent_id,$claim,$service,$serviceDate,$description,$codes,$codeDesc,$provider,$providerNumber,$billed,$responsability,$type)
	{
	
	$values = array(array( 'parent_id'=>$parent_id,'claim'=>$claim,'service'=>$service,'serviceDate'=>$serviceDate,'description'=>$description,'codes'=>$codes,'codeDesc'=>$codeDesc,'provider'=>$provider,'providerNumber'=>$providerNumber,'billed'=>$billed,'responsability'=>$responsability,'type'=>$type ));
	HDB::hus()->Hinsert('mailingdataavmedidnrecord', $values);
	}
	
	// UPDATE
	public function Update($parent_id,$claim,$service,$serviceDate,$description,$codes,$codeDesc,$provider,$providerNumber,$billed,$responsability,$type,$id)
	{
	$sql = "  parent_id =:parent_id,claim =:claim,service =:service,serviceDate =:serviceDate,description =:description,codes =:codes,codeDesc =:codeDesc,provider =:provider,providerNumber =:providerNumber,billed =:billed,responsability =:responsability,type =:type WHERE id = :id ";
	$data = array(':parent_id'=>$parent_id,':claim'=>$claim,':service'=>$service,':serviceDate'=>$serviceDate,':description'=>$description,':codes'=>$codes,':codeDesc'=>$codeDesc,':provider'=>$provider,':providerNumber'=>$providerNumber,':billed'=>$billed,':responsability'=>$responsability,':type'=>$type,':id'=>$id);
	HDB::hus()->Hupdate('mailingdataavmedidnrecord',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	