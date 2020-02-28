
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmednonparedi_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmednonparedi
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdataavmednonparedi.php');
	
	class mailingdataavmednonparedi_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdataavmednonparedi LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdataavmednonparedi");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdataavmednonparedi");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdataavmednonparedi","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdataavmednonparedi","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdataavmednonparedi");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdataavmednonparedi","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($firstName,$lastName,$middleName,$fullName,$address1,$mmAddress1,$address2,$mmAddress2,$city,$mmCity,$state,$mmState,$zipCode,$mmZipCode,$country,$mmCountry,$mmImb,$mmOpt,$mmReturnCode,$mmDpv,$mmOrder,$mmCOAMoveToDate,$mmCOAMoveType,$pdfLocation,$pdfTotPages,$transmissionDate,$claimNumber,$providerTaxId,$providerNPI,$avmedID,$memberName,$service,$DIAG1,$seqNumber,$reprint,$mailingDataFile_id,$mailingPrintReadyFile_id,$generic1,$generic2,$mmImbDigi)
	{
	
	$values = array(array( 'firstName'=>$firstName,'lastName'=>$lastName,'middleName'=>$middleName,'fullName'=>$fullName,'address1'=>$address1,'mmAddress1'=>$mmAddress1,'address2'=>$address2,'mmAddress2'=>$mmAddress2,'city'=>$city,'mmCity'=>$mmCity,'state'=>$state,'mmState'=>$mmState,'zipCode'=>$zipCode,'mmZipCode'=>$mmZipCode,'country'=>$country,'mmCountry'=>$mmCountry,'mmImb'=>$mmImb,'mmOpt'=>$mmOpt,'mmReturnCode'=>$mmReturnCode,'mmDpv'=>$mmDpv,'mmOrder'=>$mmOrder,'mmCOAMoveToDate'=>$mmCOAMoveToDate,'mmCOAMoveType'=>$mmCOAMoveType,'pdfLocation'=>$pdfLocation,'pdfTotPages'=>$pdfTotPages,'transmissionDate'=>$transmissionDate,'claimNumber'=>$claimNumber,'providerTaxId'=>$providerTaxId,'providerNPI'=>$providerNPI,'avmedID'=>$avmedID,'memberName'=>$memberName,'service'=>$service,'DIAG1'=>$DIAG1,'seqNumber'=>$seqNumber,'reprint'=>$reprint,'mailingDataFile_id'=>$mailingDataFile_id,'mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,'generic1'=>$generic1,'generic2'=>$generic2,'mmImbDigi'=>$mmImbDigi ));
	HDB::hus()->Hinsert('mailingdataavmednonparedi', $values);
	}
	
	// UPDATE
	public function Update($firstName,$lastName,$middleName,$fullName,$address1,$mmAddress1,$address2,$mmAddress2,$city,$mmCity,$state,$mmState,$zipCode,$mmZipCode,$country,$mmCountry,$mmImb,$mmOpt,$mmReturnCode,$mmDpv,$mmOrder,$mmCOAMoveToDate,$mmCOAMoveType,$pdfLocation,$pdfTotPages,$transmissionDate,$claimNumber,$providerTaxId,$providerNPI,$avmedID,$memberName,$service,$DIAG1,$seqNumber,$reprint,$mailingDataFile_id,$mailingPrintReadyFile_id,$generic1,$generic2,$mmImbDigi,$id)
	{
	$sql = "  firstName =:firstName,lastName =:lastName,middleName =:middleName,fullName =:fullName,address1 =:address1,mmAddress1 =:mmAddress1,address2 =:address2,mmAddress2 =:mmAddress2,city =:city,mmCity =:mmCity,state =:state,mmState =:mmState,zipCode =:zipCode,mmZipCode =:mmZipCode,country =:country,mmCountry =:mmCountry,mmImb =:mmImb,mmOpt =:mmOpt,mmReturnCode =:mmReturnCode,mmDpv =:mmDpv,mmOrder =:mmOrder,mmCOAMoveToDate =:mmCOAMoveToDate,mmCOAMoveType =:mmCOAMoveType,pdfLocation =:pdfLocation,pdfTotPages =:pdfTotPages,transmissionDate =:transmissionDate,claimNumber =:claimNumber,providerTaxId =:providerTaxId,providerNPI =:providerNPI,avmedID =:avmedID,memberName =:memberName,service =:service,DIAG1 =:DIAG1,seqNumber =:seqNumber,reprint =:reprint,mailingDataFile_id =:mailingDataFile_id,mailingPrintReadyFile_id =:mailingPrintReadyFile_id,generic1 =:generic1,generic2 =:generic2,mmImbDigi =:mmImbDigi WHERE id = :id ";
	$data = array(':firstName'=>$firstName,':lastName'=>$lastName,':middleName'=>$middleName,':fullName'=>$fullName,':address1'=>$address1,':mmAddress1'=>$mmAddress1,':address2'=>$address2,':mmAddress2'=>$mmAddress2,':city'=>$city,':mmCity'=>$mmCity,':state'=>$state,':mmState'=>$mmState,':zipCode'=>$zipCode,':mmZipCode'=>$mmZipCode,':country'=>$country,':mmCountry'=>$mmCountry,':mmImb'=>$mmImb,':mmOpt'=>$mmOpt,':mmReturnCode'=>$mmReturnCode,':mmDpv'=>$mmDpv,':mmOrder'=>$mmOrder,':mmCOAMoveToDate'=>$mmCOAMoveToDate,':mmCOAMoveType'=>$mmCOAMoveType,':pdfLocation'=>$pdfLocation,':pdfTotPages'=>$pdfTotPages,':transmissionDate'=>$transmissionDate,':claimNumber'=>$claimNumber,':providerTaxId'=>$providerTaxId,':providerNPI'=>$providerNPI,':avmedID'=>$avmedID,':memberName'=>$memberName,':service'=>$service,':DIAG1'=>$DIAG1,':seqNumber'=>$seqNumber,':reprint'=>$reprint,':mailingDataFile_id'=>$mailingDataFile_id,':mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,':generic1'=>$generic1,':generic2'=>$generic2,':mmImbDigi'=>$mmImbDigi,':id'=>$id);
	HDB::hus()->Hupdate('mailingdataavmednonparedi',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	