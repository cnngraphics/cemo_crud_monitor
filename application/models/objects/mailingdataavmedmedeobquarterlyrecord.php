
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedmedeobquarterlyrecord_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedmedeobquarterlyrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdataavmedmedeobquarterlyrecord.php');
	
	class mailingdataavmedmedeobquarterlyrecord_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdataavmedmedeobquarterlyrecord LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdataavmedmedeobquarterlyrecord");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdataavmedmedeobquarterlyrecord");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdataavmedmedeobquarterlyrecord","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdataavmedmedeobquarterlyrecord","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdataavmedmedeobquarterlyrecord");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdataavmedmedeobquarterlyrecord","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($parent_id,$page,$pageDate,$quarterPeriodStart,$quarterPeriodEnd,$memberNumber,$name,$address,$city,$state,$zip,$billedAmountQuarter,$allowedAmountQuarter,$paidAmountQuarter,$memberResponsibilityQuarter,$billedAmountYear,$allowedAmountYear,$paidAmountYear,$memberResponsibilityYear,$oopUsedYear,$oopMaxYear)
	{
	
	$values = array(array( 'parent_id'=>$parent_id,'page'=>$page,'pageDate'=>$pageDate,'quarterPeriodStart'=>$quarterPeriodStart,'quarterPeriodEnd'=>$quarterPeriodEnd,'memberNumber'=>$memberNumber,'name'=>$name,'address'=>$address,'city'=>$city,'state'=>$state,'zip'=>$zip,'billedAmountQuarter'=>$billedAmountQuarter,'allowedAmountQuarter'=>$allowedAmountQuarter,'paidAmountQuarter'=>$paidAmountQuarter,'memberResponsibilityQuarter'=>$memberResponsibilityQuarter,'billedAmountYear'=>$billedAmountYear,'allowedAmountYear'=>$allowedAmountYear,'paidAmountYear'=>$paidAmountYear,'memberResponsibilityYear'=>$memberResponsibilityYear,'oopUsedYear'=>$oopUsedYear,'oopMaxYear'=>$oopMaxYear ));
	HDB::hus()->Hinsert('mailingdataavmedmedeobquarterlyrecord', $values);
	}
	
	// UPDATE
	public function Update($parent_id,$page,$pageDate,$quarterPeriodStart,$quarterPeriodEnd,$memberNumber,$name,$address,$city,$state,$zip,$billedAmountQuarter,$allowedAmountQuarter,$paidAmountQuarter,$memberResponsibilityQuarter,$billedAmountYear,$allowedAmountYear,$paidAmountYear,$memberResponsibilityYear,$oopUsedYear,$oopMaxYear,$id)
	{
	$sql = "  parent_id =:parent_id,page =:page,pageDate =:pageDate,quarterPeriodStart =:quarterPeriodStart,quarterPeriodEnd =:quarterPeriodEnd,memberNumber =:memberNumber,name =:name,address =:address,city =:city,state =:state,zip =:zip,billedAmountQuarter =:billedAmountQuarter,allowedAmountQuarter =:allowedAmountQuarter,paidAmountQuarter =:paidAmountQuarter,memberResponsibilityQuarter =:memberResponsibilityQuarter,billedAmountYear =:billedAmountYear,allowedAmountYear =:allowedAmountYear,paidAmountYear =:paidAmountYear,memberResponsibilityYear =:memberResponsibilityYear,oopUsedYear =:oopUsedYear,oopMaxYear =:oopMaxYear WHERE id = :id ";
	$data = array(':parent_id'=>$parent_id,':page'=>$page,':pageDate'=>$pageDate,':quarterPeriodStart'=>$quarterPeriodStart,':quarterPeriodEnd'=>$quarterPeriodEnd,':memberNumber'=>$memberNumber,':name'=>$name,':address'=>$address,':city'=>$city,':state'=>$state,':zip'=>$zip,':billedAmountQuarter'=>$billedAmountQuarter,':allowedAmountQuarter'=>$allowedAmountQuarter,':paidAmountQuarter'=>$paidAmountQuarter,':memberResponsibilityQuarter'=>$memberResponsibilityQuarter,':billedAmountYear'=>$billedAmountYear,':allowedAmountYear'=>$allowedAmountYear,':paidAmountYear'=>$paidAmountYear,':memberResponsibilityYear'=>$memberResponsibilityYear,':oopUsedYear'=>$oopUsedYear,':oopMaxYear'=>$oopMaxYear,':id'=>$id);
	HDB::hus()->Hupdate('mailingdataavmedmedeobquarterlyrecord',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	