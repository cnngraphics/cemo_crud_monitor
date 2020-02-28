
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdatabcparecord
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatabcparecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class mailingdatabcparecord
	{
	public $id;
	public $headerPage1; 
	public $headerPage2; 
	public $companyAddress; 
	public $propertyValues; 
	public $taxes; 
	public $footerTextPage1; 
	public $tablePage2; 
	public $totalPage2; 
	public $parcelNumber; 
	public $date; 
	public $file; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getheaderPage1()
	{
	return $this->headerPage1;
	}
	
	public function getheaderPage2()
	{
	return $this->headerPage2;
	}
	
	public function getcompanyAddress()
	{
	return $this->companyAddress;
	}
	
	public function getpropertyValues()
	{
	return $this->propertyValues;
	}
	
	public function gettaxes()
	{
	return $this->taxes;
	}
	
	public function getfooterTextPage1()
	{
	return $this->footerTextPage1;
	}
	
	public function gettablePage2()
	{
	return $this->tablePage2;
	}
	
	public function gettotalPage2()
	{
	return $this->totalPage2;
	}
	
	public function getparcelNumber()
	{
	return $this->parcelNumber;
	}
	
	public function getdate()
	{
	return $this->date;
	}
	
	public function getfile()
	{
	return $this->file;
	}
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setheaderPage1($val)
	{
	$this->headerPage1 =  $val;
	}
	
	public function setheaderPage2($val)
	{
	$this->headerPage2 =  $val;
	}
	
	public function setcompanyAddress($val)
	{
	$this->companyAddress =  $val;
	}
	
	public function setpropertyValues($val)
	{
	$this->propertyValues =  $val;
	}
	
	public function settaxes($val)
	{
	$this->taxes =  $val;
	}
	
	public function setfooterTextPage1($val)
	{
	$this->footerTextPage1 =  $val;
	}
	
	public function settablePage2($val)
	{
	$this->tablePage2 =  $val;
	}
	
	public function settotalPage2($val)
	{
	$this->totalPage2 =  $val;
	}
	
	public function setparcelNumber($val)
	{
	$this->parcelNumber =  $val;
	}
	
	public function setdate($val)
	{
	$this->date =  $val;
	}
	
	public function setfile($val)
	{
	$this->file =  $val;
	}
	}