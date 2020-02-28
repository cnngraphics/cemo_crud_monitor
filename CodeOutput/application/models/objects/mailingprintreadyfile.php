
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingprintreadyfile_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingprintreadyfile
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingprintreadyfile.php');
	
	class mailingprintreadyfile_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingprintreadyfile LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingprintreadyfile");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingprintreadyfile");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingprintreadyfile","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingprintreadyfile","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingprintreadyfile");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingprintreadyfile","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($fileName,$createdAt,$jobData_id,$discr,$pdfTotPages,$pdfTotalRecords)
	{
	
	$values = array(array( 'fileName'=>$fileName,'createdAt'=>$createdAt,'jobData_id'=>$jobData_id,'discr'=>$discr,'pdfTotPages'=>$pdfTotPages,'pdfTotalRecords'=>$pdfTotalRecords ));
	HDB::hus()->Hinsert('mailingprintreadyfile', $values);
	}
	
	// UPDATE
	public function Update($fileName,$createdAt,$jobData_id,$discr,$pdfTotPages,$pdfTotalRecords,$id)
	{
	$sql = "  fileName =:fileName,createdAt =:createdAt,jobData_id =:jobData_id,discr =:discr,pdfTotPages =:pdfTotPages,pdfTotalRecords =:pdfTotalRecords WHERE id = :id ";
	$data = array(':fileName'=>$fileName,':createdAt'=>$createdAt,':jobData_id'=>$jobData_id,':discr'=>$discr,':pdfTotPages'=>$pdfTotPages,':pdfTotalRecords'=>$pdfTotalRecords,':id'=>$id);
	HDB::hus()->Hupdate('mailingprintreadyfile',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	