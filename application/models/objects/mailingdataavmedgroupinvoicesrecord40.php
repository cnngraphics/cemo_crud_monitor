
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedgroupinvoicesrecord40_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord40
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdataavmedgroupinvoicesrecord40.php');
	
	class mailingdataavmedgroupinvoicesrecord40_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord40 LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord40");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdataavmedgroupinvoicesrecord40");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdataavmedgroupinvoicesrecord40","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord40","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdataavmedgroupinvoicesrecord40");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdataavmedgroupinvoicesrecord40","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($parent_id,$invNo,$contractNo,$lastName,$firstName,$divisionNo,$adjEffDate,$adjEndDate,$adjContType,$adjRemark,$adjAmount,$nbrDaysMonths,$adjAmountEntry1,$adjAmountEntry2,$adjAmountEntry3,$adjAmountEntry4,$adjAmountEntry5,$adjAmountEntry6,$adjAmountEntry7,$adjAmountEntry8,$adjAmountEntry9,$adjAmountEntry10,$adjAmountEntry11,$adjAmountEntry12)
	{
	
	$values = array(array( 'parent_id'=>$parent_id,'invNo'=>$invNo,'contractNo'=>$contractNo,'lastName'=>$lastName,'firstName'=>$firstName,'divisionNo'=>$divisionNo,'adjEffDate'=>$adjEffDate,'adjEndDate'=>$adjEndDate,'adjContType'=>$adjContType,'adjRemark'=>$adjRemark,'adjAmount'=>$adjAmount,'nbrDaysMonths'=>$nbrDaysMonths,'adjAmountEntry1'=>$adjAmountEntry1,'adjAmountEntry2'=>$adjAmountEntry2,'adjAmountEntry3'=>$adjAmountEntry3,'adjAmountEntry4'=>$adjAmountEntry4,'adjAmountEntry5'=>$adjAmountEntry5,'adjAmountEntry6'=>$adjAmountEntry6,'adjAmountEntry7'=>$adjAmountEntry7,'adjAmountEntry8'=>$adjAmountEntry8,'adjAmountEntry9'=>$adjAmountEntry9,'adjAmountEntry10'=>$adjAmountEntry10,'adjAmountEntry11'=>$adjAmountEntry11,'adjAmountEntry12'=>$adjAmountEntry12 ));
	HDB::hus()->Hinsert('mailingdataavmedgroupinvoicesrecord40', $values);
	}
	
	// UPDATE
	public function Update($parent_id,$invNo,$contractNo,$lastName,$firstName,$divisionNo,$adjEffDate,$adjEndDate,$adjContType,$adjRemark,$adjAmount,$nbrDaysMonths,$adjAmountEntry1,$adjAmountEntry2,$adjAmountEntry3,$adjAmountEntry4,$adjAmountEntry5,$adjAmountEntry6,$adjAmountEntry7,$adjAmountEntry8,$adjAmountEntry9,$adjAmountEntry10,$adjAmountEntry11,$adjAmountEntry12,$id)
	{
	$sql = "  parent_id =:parent_id,invNo =:invNo,contractNo =:contractNo,lastName =:lastName,firstName =:firstName,divisionNo =:divisionNo,adjEffDate =:adjEffDate,adjEndDate =:adjEndDate,adjContType =:adjContType,adjRemark =:adjRemark,adjAmount =:adjAmount,nbrDaysMonths =:nbrDaysMonths,adjAmountEntry1 =:adjAmountEntry1,adjAmountEntry2 =:adjAmountEntry2,adjAmountEntry3 =:adjAmountEntry3,adjAmountEntry4 =:adjAmountEntry4,adjAmountEntry5 =:adjAmountEntry5,adjAmountEntry6 =:adjAmountEntry6,adjAmountEntry7 =:adjAmountEntry7,adjAmountEntry8 =:adjAmountEntry8,adjAmountEntry9 =:adjAmountEntry9,adjAmountEntry10 =:adjAmountEntry10,adjAmountEntry11 =:adjAmountEntry11,adjAmountEntry12 =:adjAmountEntry12 WHERE id = :id ";
	$data = array(':parent_id'=>$parent_id,':invNo'=>$invNo,':contractNo'=>$contractNo,':lastName'=>$lastName,':firstName'=>$firstName,':divisionNo'=>$divisionNo,':adjEffDate'=>$adjEffDate,':adjEndDate'=>$adjEndDate,':adjContType'=>$adjContType,':adjRemark'=>$adjRemark,':adjAmount'=>$adjAmount,':nbrDaysMonths'=>$nbrDaysMonths,':adjAmountEntry1'=>$adjAmountEntry1,':adjAmountEntry2'=>$adjAmountEntry2,':adjAmountEntry3'=>$adjAmountEntry3,':adjAmountEntry4'=>$adjAmountEntry4,':adjAmountEntry5'=>$adjAmountEntry5,':adjAmountEntry6'=>$adjAmountEntry6,':adjAmountEntry7'=>$adjAmountEntry7,':adjAmountEntry8'=>$adjAmountEntry8,':adjAmountEntry9'=>$adjAmountEntry9,':adjAmountEntry10'=>$adjAmountEntry10,':adjAmountEntry11'=>$adjAmountEntry11,':adjAmountEntry12'=>$adjAmountEntry12,':id'=>$id);
	HDB::hus()->Hupdate('mailingdataavmedgroupinvoicesrecord40',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	