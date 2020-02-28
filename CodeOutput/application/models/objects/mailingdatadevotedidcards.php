
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdatadevotedidcards_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatadevotedidcards
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdatadevotedidcards.php');
	
	class mailingdatadevotedidcards_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdatadevotedidcards LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdatadevotedidcards");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdatadevotedidcards");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdatadevotedidcards","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdatadevotedidcards","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdatadevotedidcards");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdatadevotedidcards","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($firstName,$lastName,$middleName,$fullName,$address1,$mmAddress1,$address2,$mmAddress2,$city,$mmCity,$state,$mmState,$zipCode,$mmZipCode,$country,$mmCountry,$mmImb,$mmOpt,$mmReturnCode,$mmDpv,$mmOrder,$mmCOAMoveToDate,$mmCOAMoveType,$pdfLocation,$pdfTotPages,$generic1,$generic2,$mmImbDigi,$sourceFileName,$processDate,$seqNumber,$memberId,$address3,$pbpName,$pbpNumber,$pcpName,$language,$type,$recordId,$mailingDataFile_id,$mailingPrintReadyFile_id,$completeDate,$trackingNumber,$shipError)
	{
	
	$values = array(array( 'firstName'=>$firstName,'lastName'=>$lastName,'middleName'=>$middleName,'fullName'=>$fullName,'address1'=>$address1,'mmAddress1'=>$mmAddress1,'address2'=>$address2,'mmAddress2'=>$mmAddress2,'city'=>$city,'mmCity'=>$mmCity,'state'=>$state,'mmState'=>$mmState,'zipCode'=>$zipCode,'mmZipCode'=>$mmZipCode,'country'=>$country,'mmCountry'=>$mmCountry,'mmImb'=>$mmImb,'mmOpt'=>$mmOpt,'mmReturnCode'=>$mmReturnCode,'mmDpv'=>$mmDpv,'mmOrder'=>$mmOrder,'mmCOAMoveToDate'=>$mmCOAMoveToDate,'mmCOAMoveType'=>$mmCOAMoveType,'pdfLocation'=>$pdfLocation,'pdfTotPages'=>$pdfTotPages,'generic1'=>$generic1,'generic2'=>$generic2,'mmImbDigi'=>$mmImbDigi,'sourceFileName'=>$sourceFileName,'processDate'=>$processDate,'seqNumber'=>$seqNumber,'memberId'=>$memberId,'address3'=>$address3,'pbpName'=>$pbpName,'pbpNumber'=>$pbpNumber,'pcpName'=>$pcpName,'language'=>$language,'type'=>$type,'recordId'=>$recordId,'mailingDataFile_id'=>$mailingDataFile_id,'mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,'completeDate'=>$completeDate,'trackingNumber'=>$trackingNumber,'shipError'=>$shipError ));
	HDB::hus()->Hinsert('mailingdatadevotedidcards', $values);
	}
	
	// UPDATE
	public function Update($firstName,$lastName,$middleName,$fullName,$address1,$mmAddress1,$address2,$mmAddress2,$city,$mmCity,$state,$mmState,$zipCode,$mmZipCode,$country,$mmCountry,$mmImb,$mmOpt,$mmReturnCode,$mmDpv,$mmOrder,$mmCOAMoveToDate,$mmCOAMoveType,$pdfLocation,$pdfTotPages,$generic1,$generic2,$mmImbDigi,$sourceFileName,$processDate,$seqNumber,$memberId,$address3,$pbpName,$pbpNumber,$pcpName,$language,$type,$recordId,$mailingDataFile_id,$mailingPrintReadyFile_id,$completeDate,$trackingNumber,$shipError,$id)
	{
	$sql = "  firstName =:firstName,lastName =:lastName,middleName =:middleName,fullName =:fullName,address1 =:address1,mmAddress1 =:mmAddress1,address2 =:address2,mmAddress2 =:mmAddress2,city =:city,mmCity =:mmCity,state =:state,mmState =:mmState,zipCode =:zipCode,mmZipCode =:mmZipCode,country =:country,mmCountry =:mmCountry,mmImb =:mmImb,mmOpt =:mmOpt,mmReturnCode =:mmReturnCode,mmDpv =:mmDpv,mmOrder =:mmOrder,mmCOAMoveToDate =:mmCOAMoveToDate,mmCOAMoveType =:mmCOAMoveType,pdfLocation =:pdfLocation,pdfTotPages =:pdfTotPages,generic1 =:generic1,generic2 =:generic2,mmImbDigi =:mmImbDigi,sourceFileName =:sourceFileName,processDate =:processDate,seqNumber =:seqNumber,memberId =:memberId,address3 =:address3,pbpName =:pbpName,pbpNumber =:pbpNumber,pcpName =:pcpName,language =:language,type =:type,recordId =:recordId,mailingDataFile_id =:mailingDataFile_id,mailingPrintReadyFile_id =:mailingPrintReadyFile_id,completeDate =:completeDate,trackingNumber =:trackingNumber,shipError =:shipError WHERE id = :id ";
	$data = array(':firstName'=>$firstName,':lastName'=>$lastName,':middleName'=>$middleName,':fullName'=>$fullName,':address1'=>$address1,':mmAddress1'=>$mmAddress1,':address2'=>$address2,':mmAddress2'=>$mmAddress2,':city'=>$city,':mmCity'=>$mmCity,':state'=>$state,':mmState'=>$mmState,':zipCode'=>$zipCode,':mmZipCode'=>$mmZipCode,':country'=>$country,':mmCountry'=>$mmCountry,':mmImb'=>$mmImb,':mmOpt'=>$mmOpt,':mmReturnCode'=>$mmReturnCode,':mmDpv'=>$mmDpv,':mmOrder'=>$mmOrder,':mmCOAMoveToDate'=>$mmCOAMoveToDate,':mmCOAMoveType'=>$mmCOAMoveType,':pdfLocation'=>$pdfLocation,':pdfTotPages'=>$pdfTotPages,':generic1'=>$generic1,':generic2'=>$generic2,':mmImbDigi'=>$mmImbDigi,':sourceFileName'=>$sourceFileName,':processDate'=>$processDate,':seqNumber'=>$seqNumber,':memberId'=>$memberId,':address3'=>$address3,':pbpName'=>$pbpName,':pbpNumber'=>$pbpNumber,':pcpName'=>$pcpName,':language'=>$language,':type'=>$type,':recordId'=>$recordId,':mailingDataFile_id'=>$mailingDataFile_id,':mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,':completeDate'=>$completeDate,':trackingNumber'=>$trackingNumber,':shipError'=>$shipError,':id'=>$id);
	HDB::hus()->Hupdate('mailingdatadevotedidcards',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	