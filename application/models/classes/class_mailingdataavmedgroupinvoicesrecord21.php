
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedgroupinvoicesrecord21
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord21
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class mailingdataavmedgroupinvoicesrecord21
	{
	public $id;
	public $invNo; 
	public $subscriberAddr2; 
	public $subscriberAddr3; 
	public $acctId; 
	public $contact; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getinvNo()
	{
	return $this->invNo;
	}
	
	public function getsubscriberAddr2()
	{
	return $this->subscriberAddr2;
	}
	
	public function getsubscriberAddr3()
	{
	return $this->subscriberAddr3;
	}
	
	public function getacctId()
	{
	return $this->acctId;
	}
	
	public function getcontact()
	{
	return $this->contact;
	}
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setinvNo($val)
	{
	$this->invNo =  $val;
	}
	
	public function setsubscriberAddr2($val)
	{
	$this->subscriberAddr2 =  $val;
	}
	
	public function setsubscriberAddr3($val)
	{
	$this->subscriberAddr3 =  $val;
	}
	
	public function setacctId($val)
	{
	$this->acctId =  $val;
	}
	
	public function setcontact($val)
	{
	$this->contact =  $val;
	}
	}