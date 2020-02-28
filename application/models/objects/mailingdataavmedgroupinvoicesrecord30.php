
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedgroupinvoicesrecord30_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord30
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdataavmedgroupinvoicesrecord30.php');
	
	class mailingdataavmedgroupinvoicesrecord30_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord30 LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord30");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdataavmedgroupinvoicesrecord30");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdataavmedgroupinvoicesrecord30","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord30","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdataavmedgroupinvoicesrecord30");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdataavmedgroupinvoicesrecord30","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($parent_id,$invNo,$contractNo,$lastName,$firstName,$divisionNo,$spanEffDate,$premFromDate,$premToDate,$premContType,$familySize,$premAmount,$nbrDayMonths,$premAmtEntry1,$premAmtEntry2,$premAmtEntry3,$premAmtEntry4,$premAmtEntry5,$premAmtEntry6,$premAmtEntry7,$premAmtEntry8,$premAmtEntry9,$premAmtEntry10,$premAmtEntry11,$premAmtEntry12)
	{
	
	$values = array(array( 'parent_id'=>$parent_id,'invNo'=>$invNo,'contractNo'=>$contractNo,'lastName'=>$lastName,'firstName'=>$firstName,'divisionNo'=>$divisionNo,'spanEffDate'=>$spanEffDate,'premFromDate'=>$premFromDate,'premToDate'=>$premToDate,'premContType'=>$premContType,'familySize'=>$familySize,'premAmount'=>$premAmount,'nbrDayMonths'=>$nbrDayMonths,'premAmtEntry1'=>$premAmtEntry1,'premAmtEntry2'=>$premAmtEntry2,'premAmtEntry3'=>$premAmtEntry3,'premAmtEntry4'=>$premAmtEntry4,'premAmtEntry5'=>$premAmtEntry5,'premAmtEntry6'=>$premAmtEntry6,'premAmtEntry7'=>$premAmtEntry7,'premAmtEntry8'=>$premAmtEntry8,'premAmtEntry9'=>$premAmtEntry9,'premAmtEntry10'=>$premAmtEntry10,'premAmtEntry11'=>$premAmtEntry11,'premAmtEntry12'=>$premAmtEntry12 ));
	HDB::hus()->Hinsert('mailingdataavmedgroupinvoicesrecord30', $values);
	}
	
	// UPDATE
	public function Update($parent_id,$invNo,$contractNo,$lastName,$firstName,$divisionNo,$spanEffDate,$premFromDate,$premToDate,$premContType,$familySize,$premAmount,$nbrDayMonths,$premAmtEntry1,$premAmtEntry2,$premAmtEntry3,$premAmtEntry4,$premAmtEntry5,$premAmtEntry6,$premAmtEntry7,$premAmtEntry8,$premAmtEntry9,$premAmtEntry10,$premAmtEntry11,$premAmtEntry12,$id)
	{
	$sql = "  parent_id =:parent_id,invNo =:invNo,contractNo =:contractNo,lastName =:lastName,firstName =:firstName,divisionNo =:divisionNo,spanEffDate =:spanEffDate,premFromDate =:premFromDate,premToDate =:premToDate,premContType =:premContType,familySize =:familySize,premAmount =:premAmount,nbrDayMonths =:nbrDayMonths,premAmtEntry1 =:premAmtEntry1,premAmtEntry2 =:premAmtEntry2,premAmtEntry3 =:premAmtEntry3,premAmtEntry4 =:premAmtEntry4,premAmtEntry5 =:premAmtEntry5,premAmtEntry6 =:premAmtEntry6,premAmtEntry7 =:premAmtEntry7,premAmtEntry8 =:premAmtEntry8,premAmtEntry9 =:premAmtEntry9,premAmtEntry10 =:premAmtEntry10,premAmtEntry11 =:premAmtEntry11,premAmtEntry12 =:premAmtEntry12 WHERE id = :id ";
	$data = array(':parent_id'=>$parent_id,':invNo'=>$invNo,':contractNo'=>$contractNo,':lastName'=>$lastName,':firstName'=>$firstName,':divisionNo'=>$divisionNo,':spanEffDate'=>$spanEffDate,':premFromDate'=>$premFromDate,':premToDate'=>$premToDate,':premContType'=>$premContType,':familySize'=>$familySize,':premAmount'=>$premAmount,':nbrDayMonths'=>$nbrDayMonths,':premAmtEntry1'=>$premAmtEntry1,':premAmtEntry2'=>$premAmtEntry2,':premAmtEntry3'=>$premAmtEntry3,':premAmtEntry4'=>$premAmtEntry4,':premAmtEntry5'=>$premAmtEntry5,':premAmtEntry6'=>$premAmtEntry6,':premAmtEntry7'=>$premAmtEntry7,':premAmtEntry8'=>$premAmtEntry8,':premAmtEntry9'=>$premAmtEntry9,':premAmtEntry10'=>$premAmtEntry10,':premAmtEntry11'=>$premAmtEntry11,':premAmtEntry12'=>$premAmtEntry12,':id'=>$id);
	HDB::hus()->Hupdate('mailingdataavmedgroupinvoicesrecord30',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	