
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdatafploncall_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatafploncall
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdatafploncall.php');
	
	class mailingdatafploncall_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdatafploncall LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdatafploncall");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdatafploncall");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdatafploncall","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdatafploncall","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdatafploncall");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdatafploncall","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($firstName,$lastName,$middleName,$fullName,$address1,$mmAddress1,$address2,$mmAddress2,$city,$mmCity,$state,$mmState,$zipCode,$mmZipCode,$country,$mmCountry,$mmImb,$mmOpt,$mmReturnCode,$mmDpv,$mmOrder,$mmCOAMoveToDate,$mmCOAMoveType,$pdfLocation,$pdfTotPages,$NO_LTR,$CD_CUST_TYPE,$accountNo,$PREMAddrs,$PREMCity,$PREMST,$PREMZip,$credit,$date,$AC,$HS,$HP,$WH,$PP,$PS,$contractor,$phone,$status,$postDate,$notes,$mailingDataFile_id,$mailingPrintReadyFile_id,$generic1,$generic2,$mmImbDigi)
	{
	
	$values = array(array( 'firstName'=>$firstName,'lastName'=>$lastName,'middleName'=>$middleName,'fullName'=>$fullName,'address1'=>$address1,'mmAddress1'=>$mmAddress1,'address2'=>$address2,'mmAddress2'=>$mmAddress2,'city'=>$city,'mmCity'=>$mmCity,'state'=>$state,'mmState'=>$mmState,'zipCode'=>$zipCode,'mmZipCode'=>$mmZipCode,'country'=>$country,'mmCountry'=>$mmCountry,'mmImb'=>$mmImb,'mmOpt'=>$mmOpt,'mmReturnCode'=>$mmReturnCode,'mmDpv'=>$mmDpv,'mmOrder'=>$mmOrder,'mmCOAMoveToDate'=>$mmCOAMoveToDate,'mmCOAMoveType'=>$mmCOAMoveType,'pdfLocation'=>$pdfLocation,'pdfTotPages'=>$pdfTotPages,'NO_LTR'=>$NO_LTR,'CD_CUST_TYPE'=>$CD_CUST_TYPE,'accountNo'=>$accountNo,'PREMAddrs'=>$PREMAddrs,'PREMCity'=>$PREMCity,'PREMST'=>$PREMST,'PREMZip'=>$PREMZip,'credit'=>$credit,'date'=>$date,'AC'=>$AC,'HS'=>$HS,'HP'=>$HP,'WH'=>$WH,'PP'=>$PP,'PS'=>$PS,'contractor'=>$contractor,'phone'=>$phone,'status'=>$status,'postDate'=>$postDate,'notes'=>$notes,'mailingDataFile_id'=>$mailingDataFile_id,'mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,'generic1'=>$generic1,'generic2'=>$generic2,'mmImbDigi'=>$mmImbDigi ));
	HDB::hus()->Hinsert('mailingdatafploncall', $values);
	}
	
	// UPDATE
	public function Update($firstName,$lastName,$middleName,$fullName,$address1,$mmAddress1,$address2,$mmAddress2,$city,$mmCity,$state,$mmState,$zipCode,$mmZipCode,$country,$mmCountry,$mmImb,$mmOpt,$mmReturnCode,$mmDpv,$mmOrder,$mmCOAMoveToDate,$mmCOAMoveType,$pdfLocation,$pdfTotPages,$NO_LTR,$CD_CUST_TYPE,$accountNo,$PREMAddrs,$PREMCity,$PREMST,$PREMZip,$credit,$date,$AC,$HS,$HP,$WH,$PP,$PS,$contractor,$phone,$status,$postDate,$notes,$mailingDataFile_id,$mailingPrintReadyFile_id,$generic1,$generic2,$mmImbDigi,$id)
	{
	$sql = "  firstName =:firstName,lastName =:lastName,middleName =:middleName,fullName =:fullName,address1 =:address1,mmAddress1 =:mmAddress1,address2 =:address2,mmAddress2 =:mmAddress2,city =:city,mmCity =:mmCity,state =:state,mmState =:mmState,zipCode =:zipCode,mmZipCode =:mmZipCode,country =:country,mmCountry =:mmCountry,mmImb =:mmImb,mmOpt =:mmOpt,mmReturnCode =:mmReturnCode,mmDpv =:mmDpv,mmOrder =:mmOrder,mmCOAMoveToDate =:mmCOAMoveToDate,mmCOAMoveType =:mmCOAMoveType,pdfLocation =:pdfLocation,pdfTotPages =:pdfTotPages,NO_LTR =:NO_LTR,CD_CUST_TYPE =:CD_CUST_TYPE,accountNo =:accountNo,PREMAddrs =:PREMAddrs,PREMCity =:PREMCity,PREMST =:PREMST,PREMZip =:PREMZip,credit =:credit,date =:date,AC =:AC,HS =:HS,HP =:HP,WH =:WH,PP =:PP,PS =:PS,contractor =:contractor,phone =:phone,status =:status,postDate =:postDate,notes =:notes,mailingDataFile_id =:mailingDataFile_id,mailingPrintReadyFile_id =:mailingPrintReadyFile_id,generic1 =:generic1,generic2 =:generic2,mmImbDigi =:mmImbDigi WHERE id = :id ";
	$data = array(':firstName'=>$firstName,':lastName'=>$lastName,':middleName'=>$middleName,':fullName'=>$fullName,':address1'=>$address1,':mmAddress1'=>$mmAddress1,':address2'=>$address2,':mmAddress2'=>$mmAddress2,':city'=>$city,':mmCity'=>$mmCity,':state'=>$state,':mmState'=>$mmState,':zipCode'=>$zipCode,':mmZipCode'=>$mmZipCode,':country'=>$country,':mmCountry'=>$mmCountry,':mmImb'=>$mmImb,':mmOpt'=>$mmOpt,':mmReturnCode'=>$mmReturnCode,':mmDpv'=>$mmDpv,':mmOrder'=>$mmOrder,':mmCOAMoveToDate'=>$mmCOAMoveToDate,':mmCOAMoveType'=>$mmCOAMoveType,':pdfLocation'=>$pdfLocation,':pdfTotPages'=>$pdfTotPages,':NO_LTR'=>$NO_LTR,':CD_CUST_TYPE'=>$CD_CUST_TYPE,':accountNo'=>$accountNo,':PREMAddrs'=>$PREMAddrs,':PREMCity'=>$PREMCity,':PREMST'=>$PREMST,':PREMZip'=>$PREMZip,':credit'=>$credit,':date'=>$date,':AC'=>$AC,':HS'=>$HS,':HP'=>$HP,':WH'=>$WH,':PP'=>$PP,':PS'=>$PS,':contractor'=>$contractor,':phone'=>$phone,':status'=>$status,':postDate'=>$postDate,':notes'=>$notes,':mailingDataFile_id'=>$mailingDataFile_id,':mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,':generic1'=>$generic1,':generic2'=>$generic2,':mmImbDigi'=>$mmImbDigi,':id'=>$id);
	HDB::hus()->Hupdate('mailingdatafploncall',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	