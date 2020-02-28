
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        partdata_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		partdata
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_partdata.php');
	
	class partdata_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("partdata LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("partdata");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("partdata");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("partdata","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("partdata","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE partdata");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("partdata","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($sourceFileName,$campaign,$mailing,$originalFileName,$fileReceived,$filePrinted,$memberId,$name,$address1,$address2,$city,$state,$zip,$jobId,$pdfFileName,$sheetCount,$stitchedDate,$checkedDate)
	{
	
	$values = array(array( 'sourceFileName'=>$sourceFileName,'campaign'=>$campaign,'mailing'=>$mailing,'originalFileName'=>$originalFileName,'fileReceived'=>$fileReceived,'filePrinted'=>$filePrinted,'memberId'=>$memberId,'name'=>$name,'address1'=>$address1,'address2'=>$address2,'city'=>$city,'state'=>$state,'zip'=>$zip,'jobId'=>$jobId,'pdfFileName'=>$pdfFileName,'sheetCount'=>$sheetCount,'stitchedDate'=>$stitchedDate,'checkedDate'=>$checkedDate ));
	HDB::hus()->Hinsert('partdata', $values);
	}
	
	// UPDATE
	public function Update($sourceFileName,$campaign,$mailing,$originalFileName,$fileReceived,$filePrinted,$memberId,$name,$address1,$address2,$city,$state,$zip,$jobId,$pdfFileName,$sheetCount,$stitchedDate,$checkedDate,$id)
	{
	$sql = "  sourceFileName =:sourceFileName,campaign =:campaign,mailing =:mailing,originalFileName =:originalFileName,fileReceived =:fileReceived,filePrinted =:filePrinted,memberId =:memberId,name =:name,address1 =:address1,address2 =:address2,city =:city,state =:state,zip =:zip,jobId =:jobId,pdfFileName =:pdfFileName,sheetCount =:sheetCount,stitchedDate =:stitchedDate,checkedDate =:checkedDate WHERE id = :id ";
	$data = array(':sourceFileName'=>$sourceFileName,':campaign'=>$campaign,':mailing'=>$mailing,':originalFileName'=>$originalFileName,':fileReceived'=>$fileReceived,':filePrinted'=>$filePrinted,':memberId'=>$memberId,':name'=>$name,':address1'=>$address1,':address2'=>$address2,':city'=>$city,':state'=>$state,':zip'=>$zip,':jobId'=>$jobId,':pdfFileName'=>$pdfFileName,':sheetCount'=>$sheetCount,':stitchedDate'=>$stitchedDate,':checkedDate'=>$checkedDate,':id'=>$id);
	HDB::hus()->Hupdate('partdata',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	