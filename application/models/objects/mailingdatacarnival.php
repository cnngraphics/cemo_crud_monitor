
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdatacarnival_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatacarnival
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdatacarnival.php');
	
	class mailingdatacarnival_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdatacarnival LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdatacarnival");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdatacarnival");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdatacarnival","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdatacarnival","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdatacarnival");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdatacarnival","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($job,$counter,$shipCode,$sailDate,$firstName,$lastName,$middleName,$fullName,$cabinNumber,$section,$offer,$companionFull,$celebration,$expirationDate,$totalCards,$companionF,$companionL,$shipName,$HD,$mailingDataFile_id,$mailingPrintReadyFile_id,$personNumber,$pastGuessNumber,$fileCreationDate,$cabinDropDate,$deliveryDate,$offerAmount,$spaManager,$spaManagerExt,$holderId,$cellPackageSk,$seqTrkNum,$cardHolderType,$priorityPrinting,$bulletDeliveryDate,$wildCard)
	{
	
	$values = array(array( 'job'=>$job,'counter'=>$counter,'shipCode'=>$shipCode,'sailDate'=>$sailDate,'firstName'=>$firstName,'lastName'=>$lastName,'middleName'=>$middleName,'fullName'=>$fullName,'cabinNumber'=>$cabinNumber,'section'=>$section,'offer'=>$offer,'companionFull'=>$companionFull,'celebration'=>$celebration,'expirationDate'=>$expirationDate,'totalCards'=>$totalCards,'companionF'=>$companionF,'companionL'=>$companionL,'shipName'=>$shipName,'HD'=>$HD,'mailingDataFile_id'=>$mailingDataFile_id,'mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,'personNumber'=>$personNumber,'pastGuessNumber'=>$pastGuessNumber,'fileCreationDate'=>$fileCreationDate,'cabinDropDate'=>$cabinDropDate,'deliveryDate'=>$deliveryDate,'offerAmount'=>$offerAmount,'spaManager'=>$spaManager,'spaManagerExt'=>$spaManagerExt,'holderId'=>$holderId,'cellPackageSk'=>$cellPackageSk,'seqTrkNum'=>$seqTrkNum,'cardHolderType'=>$cardHolderType,'priorityPrinting'=>$priorityPrinting,'bulletDeliveryDate'=>$bulletDeliveryDate,'wildCard'=>$wildCard ));
	HDB::hus()->Hinsert('mailingdatacarnival', $values);
	}
	
	// UPDATE
	public function Update($job,$counter,$shipCode,$sailDate,$firstName,$lastName,$middleName,$fullName,$cabinNumber,$section,$offer,$companionFull,$celebration,$expirationDate,$totalCards,$companionF,$companionL,$shipName,$HD,$mailingDataFile_id,$mailingPrintReadyFile_id,$personNumber,$pastGuessNumber,$fileCreationDate,$cabinDropDate,$deliveryDate,$offerAmount,$spaManager,$spaManagerExt,$holderId,$cellPackageSk,$seqTrkNum,$cardHolderType,$priorityPrinting,$bulletDeliveryDate,$wildCard,$id)
	{
	$sql = "  job =:job,counter =:counter,shipCode =:shipCode,sailDate =:sailDate,firstName =:firstName,lastName =:lastName,middleName =:middleName,fullName =:fullName,cabinNumber =:cabinNumber,section =:section,offer =:offer,companionFull =:companionFull,celebration =:celebration,expirationDate =:expirationDate,totalCards =:totalCards,companionF =:companionF,companionL =:companionL,shipName =:shipName,HD =:HD,mailingDataFile_id =:mailingDataFile_id,mailingPrintReadyFile_id =:mailingPrintReadyFile_id,personNumber =:personNumber,pastGuessNumber =:pastGuessNumber,fileCreationDate =:fileCreationDate,cabinDropDate =:cabinDropDate,deliveryDate =:deliveryDate,offerAmount =:offerAmount,spaManager =:spaManager,spaManagerExt =:spaManagerExt,holderId =:holderId,cellPackageSk =:cellPackageSk,seqTrkNum =:seqTrkNum,cardHolderType =:cardHolderType,priorityPrinting =:priorityPrinting,bulletDeliveryDate =:bulletDeliveryDate,wildCard =:wildCard WHERE id = :id ";
	$data = array(':job'=>$job,':counter'=>$counter,':shipCode'=>$shipCode,':sailDate'=>$sailDate,':firstName'=>$firstName,':lastName'=>$lastName,':middleName'=>$middleName,':fullName'=>$fullName,':cabinNumber'=>$cabinNumber,':section'=>$section,':offer'=>$offer,':companionFull'=>$companionFull,':celebration'=>$celebration,':expirationDate'=>$expirationDate,':totalCards'=>$totalCards,':companionF'=>$companionF,':companionL'=>$companionL,':shipName'=>$shipName,':HD'=>$HD,':mailingDataFile_id'=>$mailingDataFile_id,':mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,':personNumber'=>$personNumber,':pastGuessNumber'=>$pastGuessNumber,':fileCreationDate'=>$fileCreationDate,':cabinDropDate'=>$cabinDropDate,':deliveryDate'=>$deliveryDate,':offerAmount'=>$offerAmount,':spaManager'=>$spaManager,':spaManagerExt'=>$spaManagerExt,':holderId'=>$holderId,':cellPackageSk'=>$cellPackageSk,':seqTrkNum'=>$seqTrkNum,':cardHolderType'=>$cardHolderType,':priorityPrinting'=>$priorityPrinting,':bulletDeliveryDate'=>$bulletDeliveryDate,':wildCard'=>$wildCard,':id'=>$id);
	HDB::hus()->Hupdate('mailingdatacarnival',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	