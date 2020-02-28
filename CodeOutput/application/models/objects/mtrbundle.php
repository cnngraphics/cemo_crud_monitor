
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mtrbundle_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mtrbundle
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mtrbundle.php');
	
	class mtrbundle_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mtrbundle LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mtrbundle");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mtrbundle");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mtrbundle","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mtrbundle","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mtrbundle");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mtrbundle","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($sourceFile,$deviceId,$edocJobId,$edocMailingGroupId,$edocPackageId,$edocSubmitterCrid,$handlingEventType,$handlingEventTypeDescription,$imb,$imbMid,$imbRoutingCode,$imbSerialNumber,$imbStid,$imbTrackingCode,$machineName,$mailClassDescription,$mailShapeDescription,$parentContainerEdocContainerId,$parentTrayEdocContainerId,$routingCodeImbMatchingPortion,$scanDatetime,$scanEventCode,$scanFacilityCity,$scanFacilityName,$scanFacilityState,$scanFacilityZip,$scanLocaleKey,$scannerType)
	{
	
	$values = array(array( 'sourceFile'=>$sourceFile,'deviceId'=>$deviceId,'edocJobId'=>$edocJobId,'edocMailingGroupId'=>$edocMailingGroupId,'edocPackageId'=>$edocPackageId,'edocSubmitterCrid'=>$edocSubmitterCrid,'handlingEventType'=>$handlingEventType,'handlingEventTypeDescription'=>$handlingEventTypeDescription,'imb'=>$imb,'imbMid'=>$imbMid,'imbRoutingCode'=>$imbRoutingCode,'imbSerialNumber'=>$imbSerialNumber,'imbStid'=>$imbStid,'imbTrackingCode'=>$imbTrackingCode,'machineName'=>$machineName,'mailClassDescription'=>$mailClassDescription,'mailShapeDescription'=>$mailShapeDescription,'parentContainerEdocContainerId'=>$parentContainerEdocContainerId,'parentTrayEdocContainerId'=>$parentTrayEdocContainerId,'routingCodeImbMatchingPortion'=>$routingCodeImbMatchingPortion,'scanDatetime'=>$scanDatetime,'scanEventCode'=>$scanEventCode,'scanFacilityCity'=>$scanFacilityCity,'scanFacilityName'=>$scanFacilityName,'scanFacilityState'=>$scanFacilityState,'scanFacilityZip'=>$scanFacilityZip,'scanLocaleKey'=>$scanLocaleKey,'scannerType'=>$scannerType ));
	HDB::hus()->Hinsert('mtrbundle', $values);
	}
	
	// UPDATE
	public function Update($sourceFile,$deviceId,$edocJobId,$edocMailingGroupId,$edocPackageId,$edocSubmitterCrid,$handlingEventType,$handlingEventTypeDescription,$imb,$imbMid,$imbRoutingCode,$imbSerialNumber,$imbStid,$imbTrackingCode,$machineName,$mailClassDescription,$mailShapeDescription,$parentContainerEdocContainerId,$parentTrayEdocContainerId,$routingCodeImbMatchingPortion,$scanDatetime,$scanEventCode,$scanFacilityCity,$scanFacilityName,$scanFacilityState,$scanFacilityZip,$scanLocaleKey,$scannerType,$id)
	{
	$sql = "  sourceFile =:sourceFile,deviceId =:deviceId,edocJobId =:edocJobId,edocMailingGroupId =:edocMailingGroupId,edocPackageId =:edocPackageId,edocSubmitterCrid =:edocSubmitterCrid,handlingEventType =:handlingEventType,handlingEventTypeDescription =:handlingEventTypeDescription,imb =:imb,imbMid =:imbMid,imbRoutingCode =:imbRoutingCode,imbSerialNumber =:imbSerialNumber,imbStid =:imbStid,imbTrackingCode =:imbTrackingCode,machineName =:machineName,mailClassDescription =:mailClassDescription,mailShapeDescription =:mailShapeDescription,parentContainerEdocContainerId =:parentContainerEdocContainerId,parentTrayEdocContainerId =:parentTrayEdocContainerId,routingCodeImbMatchingPortion =:routingCodeImbMatchingPortion,scanDatetime =:scanDatetime,scanEventCode =:scanEventCode,scanFacilityCity =:scanFacilityCity,scanFacilityName =:scanFacilityName,scanFacilityState =:scanFacilityState,scanFacilityZip =:scanFacilityZip,scanLocaleKey =:scanLocaleKey,scannerType =:scannerType WHERE id = :id ";
	$data = array(':sourceFile'=>$sourceFile,':deviceId'=>$deviceId,':edocJobId'=>$edocJobId,':edocMailingGroupId'=>$edocMailingGroupId,':edocPackageId'=>$edocPackageId,':edocSubmitterCrid'=>$edocSubmitterCrid,':handlingEventType'=>$handlingEventType,':handlingEventTypeDescription'=>$handlingEventTypeDescription,':imb'=>$imb,':imbMid'=>$imbMid,':imbRoutingCode'=>$imbRoutingCode,':imbSerialNumber'=>$imbSerialNumber,':imbStid'=>$imbStid,':imbTrackingCode'=>$imbTrackingCode,':machineName'=>$machineName,':mailClassDescription'=>$mailClassDescription,':mailShapeDescription'=>$mailShapeDescription,':parentContainerEdocContainerId'=>$parentContainerEdocContainerId,':parentTrayEdocContainerId'=>$parentTrayEdocContainerId,':routingCodeImbMatchingPortion'=>$routingCodeImbMatchingPortion,':scanDatetime'=>$scanDatetime,':scanEventCode'=>$scanEventCode,':scanFacilityCity'=>$scanFacilityCity,':scanFacilityName'=>$scanFacilityName,':scanFacilityState'=>$scanFacilityState,':scanFacilityZip'=>$scanFacilityZip,':scanLocaleKey'=>$scanLocaleKey,':scannerType'=>$scannerType,':id'=>$id);
	HDB::hus()->Hupdate('mtrbundle',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	