
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedgroupinvoicesrecord20
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord20
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class mailingdataavmedgroupinvoicesrecord20
	{
	public $id;
	public $invNo; 
	public $subscriberName; 
	public $subscriberAddr1; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getinvNo()
	{
	return $this->invNo;
	}
	
	public function getsubscriberName()
	{
	return $this->subscriberName;
	}
	
	public function getsubscriberAddr1()
	{
	return $this->subscriberAddr1;
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
	
	public function setsubscriberName($val)
	{
	$this->subscriberName =  $val;
	}
	
	public function setsubscriberAddr1($val)
	{
	$this->subscriberAddr1 =  $val;
	}
	}