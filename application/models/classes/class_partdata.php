
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        partdata
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		partdata
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class partdata
	{
	public $id;
	public $sourceFileName; 
	public $campaign; 
	public $mailing; 
	public $originalFileName; 
	public $fileReceived; 
	public $filePrinted; 
	public $memberId; 
	public $name; 
	public $address1; 
	public $address2; 
	public $city; 
	public $state; 
	public $zip; 
	public $jobId; 
	public $pdfFileName; 
	public $sheetCount; 
	public $stitchedDate; 
	public $checkedDate; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getsourceFileName()
	{
	return $this->sourceFileName;
	}
	
	public function getcampaign()
	{
	return $this->campaign;
	}
	
	public function getmailing()
	{
	return $this->mailing;
	}
	
	public function getoriginalFileName()
	{
	return $this->originalFileName;
	}
	
	public function getfileReceived()
	{
	return $this->fileReceived;
	}
	
	public function getfilePrinted()
	{
	return $this->filePrinted;
	}
	
	public function getmemberId()
	{
	return $this->memberId;
	}
	
	public function getname()
	{
	return $this->name;
	}
	
	public function getaddress1()
	{
	return $this->address1;
	}
	
	public function getaddress2()
	{
	return $this->address2;
	}
	
	public function getcity()
	{
	return $this->city;
	}
	
	public function getstate()
	{
	return $this->state;
	}
	
	public function getzip()
	{
	return $this->zip;
	}
	
	public function getjobId()
	{
	return $this->jobId;
	}
	
	public function getpdfFileName()
	{
	return $this->pdfFileName;
	}
	
	public function getsheetCount()
	{
	return $this->sheetCount;
	}
	
	public function getstitchedDate()
	{
	return $this->stitchedDate;
	}
	
	public function getcheckedDate()
	{
	return $this->checkedDate;
	}
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setsourceFileName($val)
	{
	$this->sourceFileName =  $val;
	}
	
	public function setcampaign($val)
	{
	$this->campaign =  $val;
	}
	
	public function setmailing($val)
	{
	$this->mailing =  $val;
	}
	
	public function setoriginalFileName($val)
	{
	$this->originalFileName =  $val;
	}
	
	public function setfileReceived($val)
	{
	$this->fileReceived =  $val;
	}
	
	public function setfilePrinted($val)
	{
	$this->filePrinted =  $val;
	}
	
	public function setmemberId($val)
	{
	$this->memberId =  $val;
	}
	
	public function setname($val)
	{
	$this->name =  $val;
	}
	
	public function setaddress1($val)
	{
	$this->address1 =  $val;
	}
	
	public function setaddress2($val)
	{
	$this->address2 =  $val;
	}
	
	public function setcity($val)
	{
	$this->city =  $val;
	}
	
	public function setstate($val)
	{
	$this->state =  $val;
	}
	
	public function setzip($val)
	{
	$this->zip =  $val;
	}
	
	public function setjobId($val)
	{
	$this->jobId =  $val;
	}
	
	public function setpdfFileName($val)
	{
	$this->pdfFileName =  $val;
	}
	
	public function setsheetCount($val)
	{
	$this->sheetCount =  $val;
	}
	
	public function setstitchedDate($val)
	{
	$this->stitchedDate =  $val;
	}
	
	public function setcheckedDate($val)
	{
	$this->checkedDate =  $val;
	}
	}