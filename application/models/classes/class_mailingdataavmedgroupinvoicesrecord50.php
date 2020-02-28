
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedgroupinvoicesrecord50
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedgroupinvoicesrecord50
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class mailingdataavmedgroupinvoicesrecord50
	{
	public $id;
	public $invNo; 
	public $contracts; 
	public $members; 
	public $prevBalance; 
	public $totRetroAdj; 
	public $totAdj; 
	public $payments; 
	public $finance; 
	public $balanceForward; 
	public $totPremium; 
	public $amountDue; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getinvNo()
	{
	return $this->invNo;
	}
	
	public function getcontracts()
	{
	return $this->contracts;
	}
	
	public function getmembers()
	{
	return $this->members;
	}
	
	public function getprevBalance()
	{
	return $this->prevBalance;
	}
	
	public function gettotRetroAdj()
	{
	return $this->totRetroAdj;
	}
	
	public function gettotAdj()
	{
	return $this->totAdj;
	}
	
	public function getpayments()
	{
	return $this->payments;
	}
	
	public function getfinance()
	{
	return $this->finance;
	}
	
	public function getbalanceForward()
	{
	return $this->balanceForward;
	}
	
	public function gettotPremium()
	{
	return $this->totPremium;
	}
	
	public function getamountDue()
	{
	return $this->amountDue;
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
	
	public function setcontracts($val)
	{
	$this->contracts =  $val;
	}
	
	public function setmembers($val)
	{
	$this->members =  $val;
	}
	
	public function setprevBalance($val)
	{
	$this->prevBalance =  $val;
	}
	
	public function settotRetroAdj($val)
	{
	$this->totRetroAdj =  $val;
	}
	
	public function settotAdj($val)
	{
	$this->totAdj =  $val;
	}
	
	public function setpayments($val)
	{
	$this->payments =  $val;
	}
	
	public function setfinance($val)
	{
	$this->finance =  $val;
	}
	
	public function setbalanceForward($val)
	{
	$this->balanceForward =  $val;
	}
	
	public function settotPremium($val)
	{
	$this->totPremium =  $val;
	}
	
	public function setamountDue($val)
	{
	$this->amountDue =  $val;
	}
	}