
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mtrpiece_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mtrpiece
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mtrpiece.php');
	
	class mtrpiece_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mtrpiece LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mtrpiece");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mtrpiece");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mtrpiece","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mtrpiece","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mtrpiece");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mtrpiece","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($sourceFile,$edocJobId,$edocMailingGroupId,$edocSubmitterCrid,$handlingEventType,$handlingEventTypeDescription,$idTag,$imb,$imbMid,$imbRoutingCode,$imbSerialNumber,$imbStid,$imbTrackingCode,$ldeDeliveryMode,$ldeInventoryMethod,$ldeTriggerMethod,$machineId,$machineName,$mailClassDescription,$mailShapeDescription,$parentContainerEdocContainerId,$parentTrayEdocContainerId,$predictedDeliveryDate,$routingCodeImbMatchingPortion,$scanDatetime,$scanEventCode,$scanFacilityCity,$scanFacilityName,$scanFacilityState,$scanFacilityZip,$scanLocaleKey,$scannerType,$startTheClockDate)
	{
	
	$values = array(array( 'sourceFile'=>$sourceFile,'edocJobId'=>$edocJobId,'edocMailingGroupId'=>$edocMailingGroupId,'edocSubmitterCrid'=>$edocSubmitterCrid,'handlingEventType'=>$handlingEventType,'handlingEventTypeDescription'=>$handlingEventTypeDescription,'idTag'=>$idTag,'imb'=>$imb,'imbMid'=>$imbMid,'imbRoutingCode'=>$imbRoutingCode,'imbSerialNumber'=>$imbSerialNumber,'imbStid'=>$imbStid,'imbTrackingCode'=>$imbTrackingCode,'ldeDeliveryMode'=>$ldeDeliveryMode,'ldeInventoryMethod'=>$ldeInventoryMethod,'ldeTriggerMethod'=>$ldeTriggerMethod,'machineId'=>$machineId,'machineName'=>$machineName,'mailClassDescription'=>$mailClassDescription,'mailShapeDescription'=>$mailShapeDescription,'parentContainerEdocContainerId'=>$parentContainerEdocContainerId,'parentTrayEdocContainerId'=>$parentTrayEdocContainerId,'predictedDeliveryDate'=>$predictedDeliveryDate,'routingCodeImbMatchingPortion'=>$routingCodeImbMatchingPortion,'scanDatetime'=>$scanDatetime,'scanEventCode'=>$scanEventCode,'scanFacilityCity'=>$scanFacilityCity,'scanFacilityName'=>$scanFacilityName,'scanFacilityState'=>$scanFacilityState,'scanFacilityZip'=>$scanFacilityZip,'scanLocaleKey'=>$scanLocaleKey,'scannerType'=>$scannerType,'startTheClockDate'=>$startTheClockDate ));
	HDB::hus()->Hinsert('mtrpiece', $values);
	}
	
	// UPDATE
	public function Update($sourceFile,$edocJobId,$edocMailingGroupId,$edocSubmitterCrid,$handlingEventType,$handlingEventTypeDescription,$idTag,$imb,$imbMid,$imbRoutingCode,$imbSerialNumber,$imbStid,$imbTrackingCode,$ldeDeliveryMode,$ldeInventoryMethod,$ldeTriggerMethod,$machineId,$machineName,$mailClassDescription,$mailShapeDescription,$parentContainerEdocContainerId,$parentTrayEdocContainerId,$predictedDeliveryDate,$routingCodeImbMatchingPortion,$scanDatetime,$scanEventCode,$scanFacilityCity,$scanFacilityName,$scanFacilityState,$scanFacilityZip,$scanLocaleKey,$scannerType,$startTheClockDate,$id)
	{
	$sql = "  sourceFile =:sourceFile,edocJobId =:edocJobId,edocMailingGroupId =:edocMailingGroupId,edocSubmitterCrid =:edocSubmitterCrid,handlingEventType =:handlingEventType,handlingEventTypeDescription =:handlingEventTypeDescription,idTag =:idTag,imb =:imb,imbMid =:imbMid,imbRoutingCode =:imbRoutingCode,imbSerialNumber =:imbSerialNumber,imbStid =:imbStid,imbTrackingCode =:imbTrackingCode,ldeDeliveryMode =:ldeDeliveryMode,ldeInventoryMethod =:ldeInventoryMethod,ldeTriggerMethod =:ldeTriggerMethod,machineId =:machineId,machineName =:machineName,mailClassDescription =:mailClassDescription,mailShapeDescription =:mailShapeDescription,parentContainerEdocContainerId =:parentContainerEdocContainerId,parentTrayEdocContainerId =:parentTrayEdocContainerId,predictedDeliveryDate =:predictedDeliveryDate,routingCodeImbMatchingPortion =:routingCodeImbMatchingPortion,scanDatetime =:scanDatetime,scanEventCode =:scanEventCode,scanFacilityCity =:scanFacilityCity,scanFacilityName =:scanFacilityName,scanFacilityState =:scanFacilityState,scanFacilityZip =:scanFacilityZip,scanLocaleKey =:scanLocaleKey,scannerType =:scannerType,startTheClockDate =:startTheClockDate WHERE id = :id ";
	$data = array(':sourceFile'=>$sourceFile,':edocJobId'=>$edocJobId,':edocMailingGroupId'=>$edocMailingGroupId,':edocSubmitterCrid'=>$edocSubmitterCrid,':handlingEventType'=>$handlingEventType,':handlingEventTypeDescription'=>$handlingEventTypeDescription,':idTag'=>$idTag,':imb'=>$imb,':imbMid'=>$imbMid,':imbRoutingCode'=>$imbRoutingCode,':imbSerialNumber'=>$imbSerialNumber,':imbStid'=>$imbStid,':imbTrackingCode'=>$imbTrackingCode,':ldeDeliveryMode'=>$ldeDeliveryMode,':ldeInventoryMethod'=>$ldeInventoryMethod,':ldeTriggerMethod'=>$ldeTriggerMethod,':machineId'=>$machineId,':machineName'=>$machineName,':mailClassDescription'=>$mailClassDescription,':mailShapeDescription'=>$mailShapeDescription,':parentContainerEdocContainerId'=>$parentContainerEdocContainerId,':parentTrayEdocContainerId'=>$parentTrayEdocContainerId,':predictedDeliveryDate'=>$predictedDeliveryDate,':routingCodeImbMatchingPortion'=>$routingCodeImbMatchingPortion,':scanDatetime'=>$scanDatetime,':scanEventCode'=>$scanEventCode,':scanFacilityCity'=>$scanFacilityCity,':scanFacilityName'=>$scanFacilityName,':scanFacilityState'=>$scanFacilityState,':scanFacilityZip'=>$scanFacilityZip,':scanLocaleKey'=>$scanLocaleKey,':scannerType'=>$scannerType,':startTheClockDate'=>$startTheClockDate,':id'=>$id);
	HDB::hus()->Hupdate('mtrpiece',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	