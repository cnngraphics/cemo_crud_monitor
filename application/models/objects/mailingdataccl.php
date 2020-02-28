
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataccl_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataccl
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdataccl.php');
	
	class mailingdataccl_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdataccl LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdataccl");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdataccl");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdataccl","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdataccl","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdataccl");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdataccl","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($job,$personNumber,$pastGuessNumber,$shipCode,$shipName,$sailDate,$cabinNumber,$section,$fileCreationDate,$cabinDropDate,$deliveryDate,$firstName,$middleName,$lastName,$fullName,$companionF,$companionL,$companionFull,$celebration,$offer,$offerAmount,$expirationDate,$totalCards,$HD,$spaManager,$spaManagerExt,$counter,$holderId,$cellPackageSk,$seqTrkNum,$cardHolderType,$priorityPrinting,$bulletDeliveryDate,$wildCard,$mailingDataFile_id,$mailingPrintReadyFile_id)
	{
	
	$values = array(array( 'job'=>$job,'personNumber'=>$personNumber,'pastGuessNumber'=>$pastGuessNumber,'shipCode'=>$shipCode,'shipName'=>$shipName,'sailDate'=>$sailDate,'cabinNumber'=>$cabinNumber,'section'=>$section,'fileCreationDate'=>$fileCreationDate,'cabinDropDate'=>$cabinDropDate,'deliveryDate'=>$deliveryDate,'firstName'=>$firstName,'middleName'=>$middleName,'lastName'=>$lastName,'fullName'=>$fullName,'companionF'=>$companionF,'companionL'=>$companionL,'companionFull'=>$companionFull,'celebration'=>$celebration,'offer'=>$offer,'offerAmount'=>$offerAmount,'expirationDate'=>$expirationDate,'totalCards'=>$totalCards,'HD'=>$HD,'spaManager'=>$spaManager,'spaManagerExt'=>$spaManagerExt,'counter'=>$counter,'holderId'=>$holderId,'cellPackageSk'=>$cellPackageSk,'seqTrkNum'=>$seqTrkNum,'cardHolderType'=>$cardHolderType,'priorityPrinting'=>$priorityPrinting,'bulletDeliveryDate'=>$bulletDeliveryDate,'wildCard'=>$wildCard,'mailingDataFile_id'=>$mailingDataFile_id,'mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id ));
	HDB::hus()->Hinsert('mailingdataccl', $values);
	}
	
	// UPDATE
	public function Update($job,$personNumber,$pastGuessNumber,$shipCode,$shipName,$sailDate,$cabinNumber,$section,$fileCreationDate,$cabinDropDate,$deliveryDate,$firstName,$middleName,$lastName,$fullName,$companionF,$companionL,$companionFull,$celebration,$offer,$offerAmount,$expirationDate,$totalCards,$HD,$spaManager,$spaManagerExt,$counter,$holderId,$cellPackageSk,$seqTrkNum,$cardHolderType,$priorityPrinting,$bulletDeliveryDate,$wildCard,$mailingDataFile_id,$mailingPrintReadyFile_id,$id)
	{
	$sql = "  job =:job,personNumber =:personNumber,pastGuessNumber =:pastGuessNumber,shipCode =:shipCode,shipName =:shipName,sailDate =:sailDate,cabinNumber =:cabinNumber,section =:section,fileCreationDate =:fileCreationDate,cabinDropDate =:cabinDropDate,deliveryDate =:deliveryDate,firstName =:firstName,middleName =:middleName,lastName =:lastName,fullName =:fullName,companionF =:companionF,companionL =:companionL,companionFull =:companionFull,celebration =:celebration,offer =:offer,offerAmount =:offerAmount,expirationDate =:expirationDate,totalCards =:totalCards,HD =:HD,spaManager =:spaManager,spaManagerExt =:spaManagerExt,counter =:counter,holderId =:holderId,cellPackageSk =:cellPackageSk,seqTrkNum =:seqTrkNum,cardHolderType =:cardHolderType,priorityPrinting =:priorityPrinting,bulletDeliveryDate =:bulletDeliveryDate,wildCard =:wildCard,mailingDataFile_id =:mailingDataFile_id,mailingPrintReadyFile_id =:mailingPrintReadyFile_id WHERE id = :id ";
	$data = array(':job'=>$job,':personNumber'=>$personNumber,':pastGuessNumber'=>$pastGuessNumber,':shipCode'=>$shipCode,':shipName'=>$shipName,':sailDate'=>$sailDate,':cabinNumber'=>$cabinNumber,':section'=>$section,':fileCreationDate'=>$fileCreationDate,':cabinDropDate'=>$cabinDropDate,':deliveryDate'=>$deliveryDate,':firstName'=>$firstName,':middleName'=>$middleName,':lastName'=>$lastName,':fullName'=>$fullName,':companionF'=>$companionF,':companionL'=>$companionL,':companionFull'=>$companionFull,':celebration'=>$celebration,':offer'=>$offer,':offerAmount'=>$offerAmount,':expirationDate'=>$expirationDate,':totalCards'=>$totalCards,':HD'=>$HD,':spaManager'=>$spaManager,':spaManagerExt'=>$spaManagerExt,':counter'=>$counter,':holderId'=>$holderId,':cellPackageSk'=>$cellPackageSk,':seqTrkNum'=>$seqTrkNum,':cardHolderType'=>$cardHolderType,':priorityPrinting'=>$priorityPrinting,':bulletDeliveryDate'=>$bulletDeliveryDate,':wildCard'=>$wildCard,':mailingDataFile_id'=>$mailingDataFile_id,':mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,':id'=>$id);
	HDB::hus()->Hupdate('mailingdataccl',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	