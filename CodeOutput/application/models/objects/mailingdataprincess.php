
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataprincess_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataprincess
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdataprincess.php');
	
	class mailingdataprincess_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdataprincess LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdataprincess");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdataprincess");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdataprincess","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdataprincess","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdataprincess");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdataprincess","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($job,$sailDate,$counter,$firstName,$lastName,$companionF,$companionL,$cabinNumber,$greeting,$expirationDate,$celebration,$voyageId,$uniqueId,$offer,$numCardsInHolder,$value,$disclaimer,$justBecause,$mailingDataFile_id,$mailingPrintReadyFile_id)
	{
	
	$values = array(array( 'job'=>$job,'sailDate'=>$sailDate,'counter'=>$counter,'firstName'=>$firstName,'lastName'=>$lastName,'companionF'=>$companionF,'companionL'=>$companionL,'cabinNumber'=>$cabinNumber,'greeting'=>$greeting,'expirationDate'=>$expirationDate,'celebration'=>$celebration,'voyageId'=>$voyageId,'uniqueId'=>$uniqueId,'offer'=>$offer,'numCardsInHolder'=>$numCardsInHolder,'value'=>$value,'disclaimer'=>$disclaimer,'justBecause'=>$justBecause,'mailingDataFile_id'=>$mailingDataFile_id,'mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id ));
	HDB::hus()->Hinsert('mailingdataprincess', $values);
	}
	
	// UPDATE
	public function Update($job,$sailDate,$counter,$firstName,$lastName,$companionF,$companionL,$cabinNumber,$greeting,$expirationDate,$celebration,$voyageId,$uniqueId,$offer,$numCardsInHolder,$value,$disclaimer,$justBecause,$mailingDataFile_id,$mailingPrintReadyFile_id,$id)
	{
	$sql = "  job =:job,sailDate =:sailDate,counter =:counter,firstName =:firstName,lastName =:lastName,companionF =:companionF,companionL =:companionL,cabinNumber =:cabinNumber,greeting =:greeting,expirationDate =:expirationDate,celebration =:celebration,voyageId =:voyageId,uniqueId =:uniqueId,offer =:offer,numCardsInHolder =:numCardsInHolder,value =:value,disclaimer =:disclaimer,justBecause =:justBecause,mailingDataFile_id =:mailingDataFile_id,mailingPrintReadyFile_id =:mailingPrintReadyFile_id WHERE id = :id ";
	$data = array(':job'=>$job,':sailDate'=>$sailDate,':counter'=>$counter,':firstName'=>$firstName,':lastName'=>$lastName,':companionF'=>$companionF,':companionL'=>$companionL,':cabinNumber'=>$cabinNumber,':greeting'=>$greeting,':expirationDate'=>$expirationDate,':celebration'=>$celebration,':voyageId'=>$voyageId,':uniqueId'=>$uniqueId,':offer'=>$offer,':numCardsInHolder'=>$numCardsInHolder,':value'=>$value,':disclaimer'=>$disclaimer,':justBecause'=>$justBecause,':mailingDataFile_id'=>$mailingDataFile_id,':mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,':id'=>$id);
	HDB::hus()->Hupdate('mailingdataprincess',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	