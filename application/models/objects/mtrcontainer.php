
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mtrcontainer_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mtrcontainer
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mtrcontainer.php');
	
	class mtrcontainer_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mtrcontainer LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mtrcontainer");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mtrcontainer");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mtrcontainer","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mtrcontainer","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mtrcontainer");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mtrcontainer","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($sourceFile,$handlingEventType,$handlingEventTypeDescription,$imcb,$imcbMid,$imcbSerialNumber,$mailClassDescription,$mailShapeDescription,$arrDtm,$pieceCount,$scanDatetime,$facAddr,$scanFacilityCity,$scanFacilityName,$scanFacilityState,$scanFacilityZip,$scanLocaleKey,$scanState,$scannerType,$stcDate,$stcFacAddr,$stcFacCity,$stcFacLcleKey,$stcFacName,$stcFacState,$stcFacZip,$trayCount)
	{
	
	$values = array(array( 'sourceFile'=>$sourceFile,'handlingEventType'=>$handlingEventType,'handlingEventTypeDescription'=>$handlingEventTypeDescription,'imcb'=>$imcb,'imcbMid'=>$imcbMid,'imcbSerialNumber'=>$imcbSerialNumber,'mailClassDescription'=>$mailClassDescription,'mailShapeDescription'=>$mailShapeDescription,'arrDtm'=>$arrDtm,'pieceCount'=>$pieceCount,'scanDatetime'=>$scanDatetime,'facAddr'=>$facAddr,'scanFacilityCity'=>$scanFacilityCity,'scanFacilityName'=>$scanFacilityName,'scanFacilityState'=>$scanFacilityState,'scanFacilityZip'=>$scanFacilityZip,'scanLocaleKey'=>$scanLocaleKey,'scanState'=>$scanState,'scannerType'=>$scannerType,'stcDate'=>$stcDate,'stcFacAddr'=>$stcFacAddr,'stcFacCity'=>$stcFacCity,'stcFacLcleKey'=>$stcFacLcleKey,'stcFacName'=>$stcFacName,'stcFacState'=>$stcFacState,'stcFacZip'=>$stcFacZip,'trayCount'=>$trayCount ));
	HDB::hus()->Hinsert('mtrcontainer', $values);
	}
	
	// UPDATE
	public function Update($sourceFile,$handlingEventType,$handlingEventTypeDescription,$imcb,$imcbMid,$imcbSerialNumber,$mailClassDescription,$mailShapeDescription,$arrDtm,$pieceCount,$scanDatetime,$facAddr,$scanFacilityCity,$scanFacilityName,$scanFacilityState,$scanFacilityZip,$scanLocaleKey,$scanState,$scannerType,$stcDate,$stcFacAddr,$stcFacCity,$stcFacLcleKey,$stcFacName,$stcFacState,$stcFacZip,$trayCount,$id)
	{
	$sql = "  sourceFile =:sourceFile,handlingEventType =:handlingEventType,handlingEventTypeDescription =:handlingEventTypeDescription,imcb =:imcb,imcbMid =:imcbMid,imcbSerialNumber =:imcbSerialNumber,mailClassDescription =:mailClassDescription,mailShapeDescription =:mailShapeDescription,arrDtm =:arrDtm,pieceCount =:pieceCount,scanDatetime =:scanDatetime,facAddr =:facAddr,scanFacilityCity =:scanFacilityCity,scanFacilityName =:scanFacilityName,scanFacilityState =:scanFacilityState,scanFacilityZip =:scanFacilityZip,scanLocaleKey =:scanLocaleKey,scanState =:scanState,scannerType =:scannerType,stcDate =:stcDate,stcFacAddr =:stcFacAddr,stcFacCity =:stcFacCity,stcFacLcleKey =:stcFacLcleKey,stcFacName =:stcFacName,stcFacState =:stcFacState,stcFacZip =:stcFacZip,trayCount =:trayCount WHERE id = :id ";
	$data = array(':sourceFile'=>$sourceFile,':handlingEventType'=>$handlingEventType,':handlingEventTypeDescription'=>$handlingEventTypeDescription,':imcb'=>$imcb,':imcbMid'=>$imcbMid,':imcbSerialNumber'=>$imcbSerialNumber,':mailClassDescription'=>$mailClassDescription,':mailShapeDescription'=>$mailShapeDescription,':arrDtm'=>$arrDtm,':pieceCount'=>$pieceCount,':scanDatetime'=>$scanDatetime,':facAddr'=>$facAddr,':scanFacilityCity'=>$scanFacilityCity,':scanFacilityName'=>$scanFacilityName,':scanFacilityState'=>$scanFacilityState,':scanFacilityZip'=>$scanFacilityZip,':scanLocaleKey'=>$scanLocaleKey,':scanState'=>$scanState,':scannerType'=>$scannerType,':stcDate'=>$stcDate,':stcFacAddr'=>$stcFacAddr,':stcFacCity'=>$stcFacCity,':stcFacLcleKey'=>$stcFacLcleKey,':stcFacName'=>$stcFacName,':stcFacState'=>$stcFacState,':stcFacZip'=>$stcFacZip,':trayCount'=>$trayCount,':id'=>$id);
	HDB::hus()->Hupdate('mtrcontainer',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	