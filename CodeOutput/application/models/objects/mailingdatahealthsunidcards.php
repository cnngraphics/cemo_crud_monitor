
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdatahealthsunidcards_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatahealthsunidcards
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdatahealthsunidcards.php');
	
	class mailingdatahealthsunidcards_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdatahealthsunidcards LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdatahealthsunidcards");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdatahealthsunidcards");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdatahealthsunidcards","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdatahealthsunidcards","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdatahealthsunidcards");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdatahealthsunidcards","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($firstName,$lastName,$middleName,$fullName,$address1,$mmAddress1,$address2,$mmAddress2,$city,$mmCity,$state,$mmState,$zipCode,$mmZipCode,$country,$mmCountry,$mmImb,$mmOpt,$mmReturnCode,$mmDpv,$mmOrder,$pdfLocation,$pdfTotPages,$memberPBPID,$createdDate,$exportedDate,$postmarkedDate,$memberNumber,$effectiveDate,$dateOfBirth,$cityStateZIP,$county,$homePhone,$rxGroup,$coverageType,$officeVisitCoPay,$eRCoPay,$memberServicesPhone,$tTYPhone,$carrierNumber,$planName,$pBPNumber,$providerName,$providerNumber,$providerPhone,$defaultLanguage,$errorCode,$errorDescription,$mailingDataFile_id,$mailingPrintReadyFile_id,$mmCOAMoveToDate,$mmCOAMoveType,$generic1,$generic2,$mmImbDigi)
	{
	
	$values = array(array( 'firstName'=>$firstName,'lastName'=>$lastName,'middleName'=>$middleName,'fullName'=>$fullName,'address1'=>$address1,'mmAddress1'=>$mmAddress1,'address2'=>$address2,'mmAddress2'=>$mmAddress2,'city'=>$city,'mmCity'=>$mmCity,'state'=>$state,'mmState'=>$mmState,'zipCode'=>$zipCode,'mmZipCode'=>$mmZipCode,'country'=>$country,'mmCountry'=>$mmCountry,'mmImb'=>$mmImb,'mmOpt'=>$mmOpt,'mmReturnCode'=>$mmReturnCode,'mmDpv'=>$mmDpv,'mmOrder'=>$mmOrder,'pdfLocation'=>$pdfLocation,'pdfTotPages'=>$pdfTotPages,'memberPBPID'=>$memberPBPID,'createdDate'=>$createdDate,'exportedDate'=>$exportedDate,'postmarkedDate'=>$postmarkedDate,'memberNumber'=>$memberNumber,'effectiveDate'=>$effectiveDate,'dateOfBirth'=>$dateOfBirth,'cityStateZIP'=>$cityStateZIP,'county'=>$county,'homePhone'=>$homePhone,'rxGroup'=>$rxGroup,'coverageType'=>$coverageType,'officeVisitCoPay'=>$officeVisitCoPay,'eRCoPay'=>$eRCoPay,'memberServicesPhone'=>$memberServicesPhone,'tTYPhone'=>$tTYPhone,'carrierNumber'=>$carrierNumber,'planName'=>$planName,'pBPNumber'=>$pBPNumber,'providerName'=>$providerName,'providerNumber'=>$providerNumber,'providerPhone'=>$providerPhone,'defaultLanguage'=>$defaultLanguage,'errorCode'=>$errorCode,'errorDescription'=>$errorDescription,'mailingDataFile_id'=>$mailingDataFile_id,'mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,'mmCOAMoveToDate'=>$mmCOAMoveToDate,'mmCOAMoveType'=>$mmCOAMoveType,'generic1'=>$generic1,'generic2'=>$generic2,'mmImbDigi'=>$mmImbDigi ));
	HDB::hus()->Hinsert('mailingdatahealthsunidcards', $values);
	}
	
	// UPDATE
	public function Update($firstName,$lastName,$middleName,$fullName,$address1,$mmAddress1,$address2,$mmAddress2,$city,$mmCity,$state,$mmState,$zipCode,$mmZipCode,$country,$mmCountry,$mmImb,$mmOpt,$mmReturnCode,$mmDpv,$mmOrder,$pdfLocation,$pdfTotPages,$memberPBPID,$createdDate,$exportedDate,$postmarkedDate,$memberNumber,$effectiveDate,$dateOfBirth,$cityStateZIP,$county,$homePhone,$rxGroup,$coverageType,$officeVisitCoPay,$eRCoPay,$memberServicesPhone,$tTYPhone,$carrierNumber,$planName,$pBPNumber,$providerName,$providerNumber,$providerPhone,$defaultLanguage,$errorCode,$errorDescription,$mailingDataFile_id,$mailingPrintReadyFile_id,$mmCOAMoveToDate,$mmCOAMoveType,$generic1,$generic2,$mmImbDigi,$id)
	{
	$sql = "  firstName =:firstName,lastName =:lastName,middleName =:middleName,fullName =:fullName,address1 =:address1,mmAddress1 =:mmAddress1,address2 =:address2,mmAddress2 =:mmAddress2,city =:city,mmCity =:mmCity,state =:state,mmState =:mmState,zipCode =:zipCode,mmZipCode =:mmZipCode,country =:country,mmCountry =:mmCountry,mmImb =:mmImb,mmOpt =:mmOpt,mmReturnCode =:mmReturnCode,mmDpv =:mmDpv,mmOrder =:mmOrder,pdfLocation =:pdfLocation,pdfTotPages =:pdfTotPages,memberPBPID =:memberPBPID,createdDate =:createdDate,exportedDate =:exportedDate,postmarkedDate =:postmarkedDate,memberNumber =:memberNumber,effectiveDate =:effectiveDate,dateOfBirth =:dateOfBirth,cityStateZIP =:cityStateZIP,county =:county,homePhone =:homePhone,rxGroup =:rxGroup,coverageType =:coverageType,officeVisitCoPay =:officeVisitCoPay,eRCoPay =:eRCoPay,memberServicesPhone =:memberServicesPhone,tTYPhone =:tTYPhone,carrierNumber =:carrierNumber,planName =:planName,pBPNumber =:pBPNumber,providerName =:providerName,providerNumber =:providerNumber,providerPhone =:providerPhone,defaultLanguage =:defaultLanguage,errorCode =:errorCode,errorDescription =:errorDescription,mailingDataFile_id =:mailingDataFile_id,mailingPrintReadyFile_id =:mailingPrintReadyFile_id,mmCOAMoveToDate =:mmCOAMoveToDate,mmCOAMoveType =:mmCOAMoveType,generic1 =:generic1,generic2 =:generic2,mmImbDigi =:mmImbDigi WHERE id = :id ";
	$data = array(':firstName'=>$firstName,':lastName'=>$lastName,':middleName'=>$middleName,':fullName'=>$fullName,':address1'=>$address1,':mmAddress1'=>$mmAddress1,':address2'=>$address2,':mmAddress2'=>$mmAddress2,':city'=>$city,':mmCity'=>$mmCity,':state'=>$state,':mmState'=>$mmState,':zipCode'=>$zipCode,':mmZipCode'=>$mmZipCode,':country'=>$country,':mmCountry'=>$mmCountry,':mmImb'=>$mmImb,':mmOpt'=>$mmOpt,':mmReturnCode'=>$mmReturnCode,':mmDpv'=>$mmDpv,':mmOrder'=>$mmOrder,':pdfLocation'=>$pdfLocation,':pdfTotPages'=>$pdfTotPages,':memberPBPID'=>$memberPBPID,':createdDate'=>$createdDate,':exportedDate'=>$exportedDate,':postmarkedDate'=>$postmarkedDate,':memberNumber'=>$memberNumber,':effectiveDate'=>$effectiveDate,':dateOfBirth'=>$dateOfBirth,':cityStateZIP'=>$cityStateZIP,':county'=>$county,':homePhone'=>$homePhone,':rxGroup'=>$rxGroup,':coverageType'=>$coverageType,':officeVisitCoPay'=>$officeVisitCoPay,':eRCoPay'=>$eRCoPay,':memberServicesPhone'=>$memberServicesPhone,':tTYPhone'=>$tTYPhone,':carrierNumber'=>$carrierNumber,':planName'=>$planName,':pBPNumber'=>$pBPNumber,':providerName'=>$providerName,':providerNumber'=>$providerNumber,':providerPhone'=>$providerPhone,':defaultLanguage'=>$defaultLanguage,':errorCode'=>$errorCode,':errorDescription'=>$errorDescription,':mailingDataFile_id'=>$mailingDataFile_id,':mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,':mmCOAMoveToDate'=>$mmCOAMoveToDate,':mmCOAMoveType'=>$mmCOAMoveType,':generic1'=>$generic1,':generic2'=>$generic2,':mmImbDigi'=>$mmImbDigi,':id'=>$id);
	HDB::hus()->Hupdate('mailingdatahealthsunidcards',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	