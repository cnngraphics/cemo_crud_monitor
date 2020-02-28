
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mtrhandlingunit_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mtrhandlingunit
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mtrhandlingunit.php');
	
	class mtrhandlingunit_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mtrhandlingunit LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mtrhandlingunit");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mtrhandlingunit");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mtrhandlingunit","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mtrhandlingunit","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mtrhandlingunit");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mtrhandlingunit","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($sourceFile,$appointmentId,$bundleCount,$edocContainerId,$edocCsaAgreementId,$edocCustomerGroupId,$edocJobId,$edocMailingGroupId,$edocParentContainerId,$edocSiblingContainerId,$edocSubmitterCrid,$edocUserLicenseCode,$handlingEventType,$handlingEventTypeDescription,$imtb,$imtbCin,$imtbDestinationZip,$imtbMid,$imtbProcessingCode,$imtbSerialNumber,$mailClassDescription,$mailShapeDescription,$arrDtm,$pieceCount,$scanDatetime,$facAddr,$scanFacilityCity,$scanFacilityName,$scanFacilityState,$scanFacilityZip,$scanLocaleKey,$scanState,$scannerType,$stcFacAddr,$stcFacCity,$stcFacLcleKey,$stcFacName,$stcFacState,$stcFacZip)
	{
	
	$values = array(array( 'sourceFile'=>$sourceFile,'appointmentId'=>$appointmentId,'bundleCount'=>$bundleCount,'edocContainerId'=>$edocContainerId,'edocCsaAgreementId'=>$edocCsaAgreementId,'edocCustomerGroupId'=>$edocCustomerGroupId,'edocJobId'=>$edocJobId,'edocMailingGroupId'=>$edocMailingGroupId,'edocParentContainerId'=>$edocParentContainerId,'edocSiblingContainerId'=>$edocSiblingContainerId,'edocSubmitterCrid'=>$edocSubmitterCrid,'edocUserLicenseCode'=>$edocUserLicenseCode,'handlingEventType'=>$handlingEventType,'handlingEventTypeDescription'=>$handlingEventTypeDescription,'imtb'=>$imtb,'imtbCin'=>$imtbCin,'imtbDestinationZip'=>$imtbDestinationZip,'imtbMid'=>$imtbMid,'imtbProcessingCode'=>$imtbProcessingCode,'imtbSerialNumber'=>$imtbSerialNumber,'mailClassDescription'=>$mailClassDescription,'mailShapeDescription'=>$mailShapeDescription,'arrDtm'=>$arrDtm,'pieceCount'=>$pieceCount,'scanDatetime'=>$scanDatetime,'facAddr'=>$facAddr,'scanFacilityCity'=>$scanFacilityCity,'scanFacilityName'=>$scanFacilityName,'scanFacilityState'=>$scanFacilityState,'scanFacilityZip'=>$scanFacilityZip,'scanLocaleKey'=>$scanLocaleKey,'scanState'=>$scanState,'scannerType'=>$scannerType,'stcFacAddr'=>$stcFacAddr,'stcFacCity'=>$stcFacCity,'stcFacLcleKey'=>$stcFacLcleKey,'stcFacName'=>$stcFacName,'stcFacState'=>$stcFacState,'stcFacZip'=>$stcFacZip ));
	HDB::hus()->Hinsert('mtrhandlingunit', $values);
	}
	
	// UPDATE
	public function Update($sourceFile,$appointmentId,$bundleCount,$edocContainerId,$edocCsaAgreementId,$edocCustomerGroupId,$edocJobId,$edocMailingGroupId,$edocParentContainerId,$edocSiblingContainerId,$edocSubmitterCrid,$edocUserLicenseCode,$handlingEventType,$handlingEventTypeDescription,$imtb,$imtbCin,$imtbDestinationZip,$imtbMid,$imtbProcessingCode,$imtbSerialNumber,$mailClassDescription,$mailShapeDescription,$arrDtm,$pieceCount,$scanDatetime,$facAddr,$scanFacilityCity,$scanFacilityName,$scanFacilityState,$scanFacilityZip,$scanLocaleKey,$scanState,$scannerType,$stcFacAddr,$stcFacCity,$stcFacLcleKey,$stcFacName,$stcFacState,$stcFacZip,$id)
	{
	$sql = "  sourceFile =:sourceFile,appointmentId =:appointmentId,bundleCount =:bundleCount,edocContainerId =:edocContainerId,edocCsaAgreementId =:edocCsaAgreementId,edocCustomerGroupId =:edocCustomerGroupId,edocJobId =:edocJobId,edocMailingGroupId =:edocMailingGroupId,edocParentContainerId =:edocParentContainerId,edocSiblingContainerId =:edocSiblingContainerId,edocSubmitterCrid =:edocSubmitterCrid,edocUserLicenseCode =:edocUserLicenseCode,handlingEventType =:handlingEventType,handlingEventTypeDescription =:handlingEventTypeDescription,imtb =:imtb,imtbCin =:imtbCin,imtbDestinationZip =:imtbDestinationZip,imtbMid =:imtbMid,imtbProcessingCode =:imtbProcessingCode,imtbSerialNumber =:imtbSerialNumber,mailClassDescription =:mailClassDescription,mailShapeDescription =:mailShapeDescription,arrDtm =:arrDtm,pieceCount =:pieceCount,scanDatetime =:scanDatetime,facAddr =:facAddr,scanFacilityCity =:scanFacilityCity,scanFacilityName =:scanFacilityName,scanFacilityState =:scanFacilityState,scanFacilityZip =:scanFacilityZip,scanLocaleKey =:scanLocaleKey,scanState =:scanState,scannerType =:scannerType,stcFacAddr =:stcFacAddr,stcFacCity =:stcFacCity,stcFacLcleKey =:stcFacLcleKey,stcFacName =:stcFacName,stcFacState =:stcFacState,stcFacZip =:stcFacZip WHERE id = :id ";
	$data = array(':sourceFile'=>$sourceFile,':appointmentId'=>$appointmentId,':bundleCount'=>$bundleCount,':edocContainerId'=>$edocContainerId,':edocCsaAgreementId'=>$edocCsaAgreementId,':edocCustomerGroupId'=>$edocCustomerGroupId,':edocJobId'=>$edocJobId,':edocMailingGroupId'=>$edocMailingGroupId,':edocParentContainerId'=>$edocParentContainerId,':edocSiblingContainerId'=>$edocSiblingContainerId,':edocSubmitterCrid'=>$edocSubmitterCrid,':edocUserLicenseCode'=>$edocUserLicenseCode,':handlingEventType'=>$handlingEventType,':handlingEventTypeDescription'=>$handlingEventTypeDescription,':imtb'=>$imtb,':imtbCin'=>$imtbCin,':imtbDestinationZip'=>$imtbDestinationZip,':imtbMid'=>$imtbMid,':imtbProcessingCode'=>$imtbProcessingCode,':imtbSerialNumber'=>$imtbSerialNumber,':mailClassDescription'=>$mailClassDescription,':mailShapeDescription'=>$mailShapeDescription,':arrDtm'=>$arrDtm,':pieceCount'=>$pieceCount,':scanDatetime'=>$scanDatetime,':facAddr'=>$facAddr,':scanFacilityCity'=>$scanFacilityCity,':scanFacilityName'=>$scanFacilityName,':scanFacilityState'=>$scanFacilityState,':scanFacilityZip'=>$scanFacilityZip,':scanLocaleKey'=>$scanLocaleKey,':scanState'=>$scanState,':scannerType'=>$scannerType,':stcFacAddr'=>$stcFacAddr,':stcFacCity'=>$stcFacCity,':stcFacLcleKey'=>$stcFacLcleKey,':stcFacName'=>$stcFacName,':stcFacState'=>$stcFacState,':stcFacZip'=>$stcFacZip,':id'=>$id);
	HDB::hus()->Hupdate('mtrhandlingunit',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	