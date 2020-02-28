
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedgroupinvoicesrecord50_model
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord50
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	include_once(APP_FOLDER.'/models/classes/class_mailingdataavmedgroupinvoicesrecord50.php');
	
	class mailingdataavmedgroupinvoicesrecord50_model{
	
	// SELECT ALL
	public function SelectAll($limit=NULL)
	{
	if($limit){
	$startpg = pageparam($limit);
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord50 LIMIT {$startpg} , {$limit}");
	}else{
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord50");	
	}
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	return HDB::hus()->Hcount("mailingdataavmedgroupinvoicesrecord50");
	}
	
	// SELECT ONE
	public function SelectOne($id)
	{
	$bind = array(":id" =>$id);
	return HDB::hus()->Hone("mailingdataavmedgroupinvoicesrecord50","id=:id",$bind);
	}
	
	// QUICK SEARCH
	public function AutoSearch($qstring,$limit,$where)
	{
	$bind = array(":svalue" =>"%$qstring%");
	return HDB::hus()->Hselect("mailingdataavmedgroupinvoicesrecord50","$where LIKE :svalue LIMIT $limit",$bind);		
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
   	$sql=HDB::hus()->prepare("TRUNCATE mailingdataavmedgroupinvoicesrecord50");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$bind = array(":id" =>$id);
	HDB::hus()->Hdelete("mailingdataavmedgroupinvoicesrecord50","id=:id",$bind);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($invNo,$contracts,$members,$prevBalance,$totRetroAdj,$totAdj,$payments,$finance,$balanceForward,$totPremium,$amountDue)
	{
	
	$values = array(array( 'invNo'=>$invNo,'contracts'=>$contracts,'members'=>$members,'prevBalance'=>$prevBalance,'totRetroAdj'=>$totRetroAdj,'totAdj'=>$totAdj,'payments'=>$payments,'finance'=>$finance,'balanceForward'=>$balanceForward,'totPremium'=>$totPremium,'amountDue'=>$amountDue ));
	HDB::hus()->Hinsert('mailingdataavmedgroupinvoicesrecord50', $values);
	}
	
	// UPDATE
	public function Update($invNo,$contracts,$members,$prevBalance,$totRetroAdj,$totAdj,$payments,$finance,$balanceForward,$totPremium,$amountDue,$id)
	{
	$sql = "  invNo =:invNo,contracts =:contracts,members =:members,prevBalance =:prevBalance,totRetroAdj =:totRetroAdj,totAdj =:totAdj,payments =:payments,finance =:finance,balanceForward =:balanceForward,totPremium =:totPremium,amountDue =:amountDue WHERE id = :id ";
	$data = array(':invNo'=>$invNo,':contracts'=>$contracts,':members'=>$members,':prevBalance'=>$prevBalance,':totRetroAdj'=>$totRetroAdj,':totAdj'=>$totAdj,':payments'=>$payments,':finance'=>$finance,':balanceForward'=>$balanceForward,':totPremium'=>$totPremium,':amountDue'=>$amountDue,':id'=>$id);
	HDB::hus()->Hupdate('mailingdataavmedgroupinvoicesrecord50',$sql,$data);
	
	}
	
	
	} // end class
	
	?>
	
	