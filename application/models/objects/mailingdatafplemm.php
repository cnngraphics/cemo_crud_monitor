
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdatafplemm_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatafplemm
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdatafplemm.php');
	
	class mailingdatafplemm_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdatafplemm LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdatafplemm");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdatafplemm");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdatafplemm","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdatafplemm","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdatafplemm");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdatafplemm","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($jobId,$originalFileName,$fileName,$sheets,$date,$fullName,$address1,$city,$state,$zip,$stitchedDate,$seqNumber,$mailingPrintReadyFile_id,$pdfTotPages)
	{
	
	$values = array(array( 'jobId'=>$jobId,'originalFileName'=>$originalFileName,'fileName'=>$fileName,'sheets'=>$sheets,'date'=>$date,'fullName'=>$fullName,'address1'=>$address1,'city'=>$city,'state'=>$state,'zip'=>$zip,'stitchedDate'=>$stitchedDate,'seqNumber'=>$seqNumber,'mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,'pdfTotPages'=>$pdfTotPages ));
	HDB::hus()->Hinsert('mailingdatafplemm', $values);
	}
	
	// UPDATE
	public function Update($jobId,$originalFileName,$fileName,$sheets,$date,$fullName,$address1,$city,$state,$zip,$stitchedDate,$seqNumber,$mailingPrintReadyFile_id,$pdfTotPages,$id)
	{
	$sql = "  jobId =:jobId,originalFileName =:originalFileName,fileName =:fileName,sheets =:sheets,date =:date,fullName =:fullName,address1 =:address1,city =:city,state =:state,zip =:zip,stitchedDate =:stitchedDate,seqNumber =:seqNumber,mailingPrintReadyFile_id =:mailingPrintReadyFile_id,pdfTotPages =:pdfTotPages WHERE id = :id ";
	$data = array(':jobId'=>$jobId,':originalFileName'=>$originalFileName,':fileName'=>$fileName,':sheets'=>$sheets,':date'=>$date,':fullName'=>$fullName,':address1'=>$address1,':city'=>$city,':state'=>$state,':zip'=>$zip,':stitchedDate'=>$stitchedDate,':seqNumber'=>$seqNumber,':mailingPrintReadyFile_id'=>$mailingPrintReadyFile_id,':pdfTotPages'=>$pdfTotPages,':id'=>$id);
	HDB::hus()->Hupdate('mailingdatafplemm',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	