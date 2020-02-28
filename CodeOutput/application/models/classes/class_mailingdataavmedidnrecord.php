
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedidnrecord
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedidnrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class mailingdataavmedidnrecord
	{
	public $id;
	public $parent_id; 
	public $claim; 
	public $service; 
	public $serviceDate; 
	public $description; 
	public $codes; 
	public $codeDesc; 
	public $provider; 
	public $providerNumber; 
	public $billed; 
	public $responsability; 
	public $type; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getparent_id()
	{
	return $this->parent_id;
	}
	
	public function getclaim()
	{
	return $this->claim;
	}
	
	public function getservice()
	{
	return $this->service;
	}
	
	public function getserviceDate()
	{
	return $this->serviceDate;
	}
	
	public function getdescription()
	{
	return $this->description;
	}
	
	public function getcodes()
	{
	return $this->codes;
	}
	
	public function getcodeDesc()
	{
	return $this->codeDesc;
	}
	
	public function getprovider()
	{
	return $this->provider;
	}
	
	public function getproviderNumber()
	{
	return $this->providerNumber;
	}
	
	public function getbilled()
	{
	return $this->billed;
	}
	
	public function getresponsability()
	{
	return $this->responsability;
	}
	
	public function gettype()
	{
	return $this->type;
	}
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setparent_id($val)
	{
	$this->parent_id =  $val;
	}
	
	public function setclaim($val)
	{
	$this->claim =  $val;
	}
	
	public function setservice($val)
	{
	$this->service =  $val;
	}
	
	public function setserviceDate($val)
	{
	$this->serviceDate =  $val;
	}
	
	public function setdescription($val)
	{
	$this->description =  $val;
	}
	
	public function setcodes($val)
	{
	$this->codes =  $val;
	}
	
	public function setcodeDesc($val)
	{
	$this->codeDesc =  $val;
	}
	
	public function setprovider($val)
	{
	$this->provider =  $val;
	}
	
	public function setproviderNumber($val)
	{
	$this->providerNumber =  $val;
	}
	
	public function setbilled($val)
	{
	$this->billed =  $val;
	}
	
	public function setresponsability($val)
	{
	$this->responsability =  $val;
	}
	
	public function settype($val)
	{
	$this->type =  $val;
	}
	}