
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdatafplemm
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatafplemm
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class mailingdatafplemm
	{
	public $id;
	public $jobId; 
	public $originalFileName; 
	public $fileName; 
	public $sheets; 
	public $date; 
	public $fullName; 
	public $address1; 
	public $city; 
	public $state; 
	public $zip; 
	public $stitchedDate; 
	public $seqNumber; 
	public $mailingPrintReadyFile_id; 
	public $pdfTotPages; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getjobId()
	{
	return $this->jobId;
	}
	
	public function getoriginalFileName()
	{
	return $this->originalFileName;
	}
	
	public function getfileName()
	{
	return $this->fileName;
	}
	
	public function getsheets()
	{
	return $this->sheets;
	}
	
	public function getdate()
	{
	return $this->date;
	}
	
	public function getfullName()
	{
	return $this->fullName;
	}
	
	public function getaddress1()
	{
	return $this->address1;
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
	
	public function getstitchedDate()
	{
	return $this->stitchedDate;
	}
	
	public function getseqNumber()
	{
	return $this->seqNumber;
	}
	
	public function getmailingPrintReadyFile_id()
	{
	return $this->mailingPrintReadyFile_id;
	}
	
	public function getpdfTotPages()
	{
	return $this->pdfTotPages;
	}
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setjobId($val)
	{
	$this->jobId =  $val;
	}
	
	public function setoriginalFileName($val)
	{
	$this->originalFileName =  $val;
	}
	
	public function setfileName($val)
	{
	$this->fileName =  $val;
	}
	
	public function setsheets($val)
	{
	$this->sheets =  $val;
	}
	
	public function setdate($val)
	{
	$this->date =  $val;
	}
	
	public function setfullName($val)
	{
	$this->fullName =  $val;
	}
	
	public function setaddress1($val)
	{
	$this->address1 =  $val;
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
	
	public function setstitchedDate($val)
	{
	$this->stitchedDate =  $val;
	}
	
	public function setseqNumber($val)
	{
	$this->seqNumber =  $val;
	}
	
	public function setmailingPrintReadyFile_id($val)
	{
	$this->mailingPrintReadyFile_id =  $val;
	}
	
	public function setpdfTotPages($val)
	{
	$this->pdfTotPages =  $val;
	}
	}