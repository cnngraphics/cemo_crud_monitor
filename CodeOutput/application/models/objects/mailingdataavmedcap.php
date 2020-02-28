
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedcap_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedcap
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdataavmedcap.php');
	
	class mailingdataavmedcap_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdataavmedcap LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdataavmedcap");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdataavmedcap");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdataavmedcap","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdataavmedcap","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdataavmedcap");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdataavmedcap","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($firstName,$lastName,$middleName,$fullName,$address1,$mmAddress1,$address2,$mmAddress2,$city,$mmCity,$state,$mmState,$zipCode,$mmZipCode,$country,$mmCountry,$mmImb,$mmOpt,$mmReturnCode,$mmDpv,$mmOrder,$mmCOAMoveToDate,$mmCOAMoveType,$pdfLocation,$pdfTotPages,$documentDate,$seqNumber,$lastPage,$reprint,$checkNumber,$checkDate,$checkAmount,$mailingDataFile_id,$mailingPrintReadyFile_id,$mailingDataAvmedCAPRecord_id,$generic1,$generic2,$mmImbDigi)
	{
	
	$values = array(array( 'firstName'=>$firstName,'lastName'=>$lastName,'middleName'=>$middleName,'fullName'=>$fullName,'address1'=>$address1,'mmAddress1'=>$mmAddress1,'address2'=>$address2,'mmAddress2'=>$mmAddress2,'city'=>$city,'mmCity'=>$mmCity,'state'=>$state,'mmState'=>$mmState,'zipCode'=>$zipCode,'mmZipCode'=>$mmZipCode,'country'=>$country,'mmCountry'=>$mmCountry,'mmImb'=>$mmImb,'mmOpt'=>$mmOpt,'mmReturnCode'=>$mmReturnCode,'mmDpv'=>$mmDpv,'mmOrder'=>$mmOrder,'mmCOAMoveToDate'=>$mmCOAMoveToDate,'mmCOAMoveType'=>$mmCOAMoveType,'pdfLocation'=>$pdfLocation,'pdfTotPages'=>$pdfTotPages,'documentDate'=>$documentDate,'seqNumber'=>$seqNumber,'lastPage'=>$lastPage,'reprint'=>$reprint,'checkNumber'=>$checkNumber,'checkDate'=>$checkDate,'checkAmount'=>$checkAmount,'mailingDataFile_id'=>$mailingDataFile_id,'mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,'mailingDataAvmedCAPRecord_id'=>$mailingDataAvmedCAPRecord_id,'generic1'=>$generic1,'generic2'=>$generic2,'mmImbDigi'=>$mmImbDigi ));
	HDB::hus()->Hinsert('mailingdataavmedcap', $values);
	}
	
	// UPDATE
	public function Update($firstName,$lastName,$middleName,$fullName,$address1,$mmAddress1,$address2,$mmAddress2,$city,$mmCity,$state,$mmState,$zipCode,$mmZipCode,$country,$mmCountry,$mmImb,$mmOpt,$mmReturnCode,$mmDpv,$mmOrder,$mmCOAMoveToDate,$mmCOAMoveType,$pdfLocation,$pdfTotPages,$documentDate,$seqNumber,$lastPage,$reprint,$checkNumber,$checkDate,$checkAmount,$mailingDataFile_id,$mailingPrintReadyFile_id,$mailingDataAvmedCAPRecord_id,$generic1,$generic2,$mmImbDigi,$id)
	{
	$sql = "  firstName =:firstName,lastName =:lastName,middleName =:middleName,fullName =:fullName,address1 =:address1,mmAddress1 =:mmAddress1,address2 =:address2,mmAddress2 =:mmAddress2,city =:city,mmCity =:mmCity,state =:state,mmState =:mmState,zipCode =:zipCode,mmZipCode =:mmZipCode,country =:country,mmCountry =:mmCountry,mmImb =:mmImb,mmOpt =:mmOpt,mmReturnCode =:mmReturnCode,mmDpv =:mmDpv,mmOrder =:mmOrder,mmCOAMoveToDate =:mmCOAMoveToDate,mmCOAMoveType =:mmCOAMoveType,pdfLocation =:pdfLocation,pdfTotPages =:pdfTotPages,documentDate =:documentDate,seqNumber =:seqNumber,lastPage =:lastPage,reprint =:reprint,checkNumber =:checkNumber,checkDate =:checkDate,checkAmount =:checkAmount,mailingDataFile_id =:mailingDataFile_id,mailingPrintReadyFile_id =:mailingPrintReadyFile_id,mailingDataAvmedCAPRecord_id =:mailingDataAvmedCAPRecord_id,generic1 =:generic1,generic2 =:generic2,mmImbDigi =:mmImbDigi WHERE id = :id ";
	$data = array(':firstName'=>$firstName,':lastName'=>$lastName,':middleName'=>$middleName,':fullName'=>$fullName,':address1'=>$address1,':mmAddress1'=>$mmAddress1,':address2'=>$address2,':mmAddress2'=>$mmAddress2,':city'=>$city,':mmCity'=>$mmCity,':state'=>$state,':mmState'=>$mmState,':zipCode'=>$zipCode,':mmZipCode'=>$mmZipCode,':country'=>$country,':mmCountry'=>$mmCountry,':mmImb'=>$mmImb,':mmOpt'=>$mmOpt,':mmReturnCode'=>$mmReturnCode,':mmDpv'=>$mmDpv,':mmOrder'=>$mmOrder,':mmCOAMoveToDate'=>$mmCOAMoveToDate,':mmCOAMoveType'=>$mmCOAMoveType,':pdfLocation'=>$pdfLocation,':pdfTotPages'=>$pdfTotPages,':documentDate'=>$documentDate,':seqNumber'=>$seqNumber,':lastPage'=>$lastPage,':reprint'=>$reprint,':checkNumber'=>$checkNumber,':checkDate'=>$checkDate,':checkAmount'=>$checkAmount,':mailingDataFile_id'=>$mailingDataFile_id,':mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,':mailingDataAvmedCAPRecord_id'=>$mailingDataAvmedCAPRecord_id,':generic1'=>$generic1,':generic2'=>$generic2,':mmImbDigi'=>$mmImbDigi,':id'=>$id);
	HDB::hus()->Hupdate('mailingdataavmedcap',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	