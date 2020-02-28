
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedgroupinvoicesrecord10
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord10
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class mailingdataavmedgroupinvoicesrecord10
	{
	public $id;
	public $invNo; 
	public $invDate; 
	public $dueDate; 
	public $cycleCode; 
	public $billFrom; 
	public $billTo; 
	public $billingMethod; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getinvNo()
	{
	return $this->invNo;
	}
	
	public function getinvDate()
	{
	return $this->invDate;
	}
	
	public function getdueDate()
	{
	return $this->dueDate;
	}
	
	public function getcycleCode()
	{
	return $this->cycleCode;
	}
	
	public function getbillFrom()
	{
	return $this->billFrom;
	}
	
	public function getbillTo()
	{
	return $this->billTo;
	}
	
	public function getbillingMethod()
	{
	return $this->billingMethod;
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
	
	public function setinvDate($val)
	{
	$this->invDate =  $val;
	}
	
	public function setdueDate($val)
	{
	$this->dueDate =  $val;
	}
	
	public function setcycleCode($val)
	{
	$this->cycleCode =  $val;
	}
	
	public function setbillFrom($val)
	{
	$this->billFrom =  $val;
	}
	
	public function setbillTo($val)
	{
	$this->billTo =  $val;
	}
	
	public function setbillingMethod($val)
	{
	$this->billingMethod =  $val;
	}
	}