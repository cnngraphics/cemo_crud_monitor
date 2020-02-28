
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedchecks_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedchecks
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdataavmedchecks.php');
	
	class mailingdataavmedchecks_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdataavmedchecks LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdataavmedchecks");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdataavmedchecks");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdataavmedchecks","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdataavmedchecks","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdataavmedchecks");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdataavmedchecks","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($aAdd1,$aAdd2,$aAdd3,$aAdd4,$bAdd1,$bAdd2,$bAdd3,$bAdd4,$pAdd1,$pAdd2,$pAdd3,$pAdd4,$checkId,$checkNumber,$checkDate,$checkAmount,$micrCheck,$micrRouting,$micrAccount,$seqNumber,$createdAt,$jobData_id,$mailingDataFile_id,$mailingPrintReadyFile_id,$discr)
	{
	
	$values = array(array( 'aAdd1'=>$aAdd1,'aAdd2'=>$aAdd2,'aAdd3'=>$aAdd3,'aAdd4'=>$aAdd4,'bAdd1'=>$bAdd1,'bAdd2'=>$bAdd2,'bAdd3'=>$bAdd3,'bAdd4'=>$bAdd4,'pAdd1'=>$pAdd1,'pAdd2'=>$pAdd2,'pAdd3'=>$pAdd3,'pAdd4'=>$pAdd4,'checkId'=>$checkId,'checkNumber'=>$checkNumber,'checkDate'=>$checkDate,'checkAmount'=>$checkAmount,'micrCheck'=>$micrCheck,'micrRouting'=>$micrRouting,'micrAccount'=>$micrAccount,'seqNumber'=>$seqNumber,'createdAt'=>$createdAt,'jobData_id'=>$jobData_id,'mailingDataFile_id'=>$mailingDataFile_id,'mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,'discr'=>$discr ));
	HDB::hus()->Hinsert('mailingdataavmedchecks', $values);
	}
	
	// UPDATE
	public function Update($aAdd1,$aAdd2,$aAdd3,$aAdd4,$bAdd1,$bAdd2,$bAdd3,$bAdd4,$pAdd1,$pAdd2,$pAdd3,$pAdd4,$checkId,$checkNumber,$checkDate,$checkAmount,$micrCheck,$micrRouting,$micrAccount,$seqNumber,$createdAt,$jobData_id,$mailingDataFile_id,$mailingPrintReadyFile_id,$discr,$id)
	{
	$sql = "  aAdd1 =:aAdd1,aAdd2 =:aAdd2,aAdd3 =:aAdd3,aAdd4 =:aAdd4,bAdd1 =:bAdd1,bAdd2 =:bAdd2,bAdd3 =:bAdd3,bAdd4 =:bAdd4,pAdd1 =:pAdd1,pAdd2 =:pAdd2,pAdd3 =:pAdd3,pAdd4 =:pAdd4,checkId =:checkId,checkNumber =:checkNumber,checkDate =:checkDate,checkAmount =:checkAmount,micrCheck =:micrCheck,micrRouting =:micrRouting,micrAccount =:micrAccount,seqNumber =:seqNumber,createdAt =:createdAt,jobData_id =:jobData_id,mailingDataFile_id =:mailingDataFile_id,mailingPrintReadyFile_id =:mailingPrintReadyFile_id,discr =:discr WHERE id = :id ";
	$data = array(':aAdd1'=>$aAdd1,':aAdd2'=>$aAdd2,':aAdd3'=>$aAdd3,':aAdd4'=>$aAdd4,':bAdd1'=>$bAdd1,':bAdd2'=>$bAdd2,':bAdd3'=>$bAdd3,':bAdd4'=>$bAdd4,':pAdd1'=>$pAdd1,':pAdd2'=>$pAdd2,':pAdd3'=>$pAdd3,':pAdd4'=>$pAdd4,':checkId'=>$checkId,':checkNumber'=>$checkNumber,':checkDate'=>$checkDate,':checkAmount'=>$checkAmount,':micrCheck'=>$micrCheck,':micrRouting'=>$micrRouting,':micrAccount'=>$micrAccount,':seqNumber'=>$seqNumber,':createdAt'=>$createdAt,':jobData_id'=>$jobData_id,':mailingDataFile_id'=>$mailingDataFile_id,':mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,':discr'=>$discr,':id'=>$id);
	HDB::hus()->Hupdate('mailingdataavmedchecks',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	