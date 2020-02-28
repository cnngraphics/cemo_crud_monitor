
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdatafile
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatafile
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class mailingdatafile
	{
	public $id;
	public $header_id; 
	public $footer_id; 
	public $fileName; 
	public $fileNameMm; 
	public $createdAt; 
	public $jobData_id; 
	public $discr; 
	public $totalRecords; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getheader_id()
	{
	return $this->header_id;
	}
	
	public function getfooter_id()
	{
	return $this->footer_id;
	}
	
	public function getfileName()
	{
	return $this->fileName;
	}
	
	public function getfileNameMm()
	{
	return $this->fileNameMm;
	}
	
	public function getcreatedAt()
	{
	return $this->createdAt;
	}
	
	public function getjobData_id()
	{
	return $this->jobData_id;
	}
	
	public function getdiscr()
	{
	return $this->discr;
	}
	
	public function gettotalRecords()
	{
	return $this->totalRecords;
	}
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setheader_id($val)
	{
	$this->header_id =  $val;
	}
	
	public function setfooter_id($val)
	{
	$this->footer_id =  $val;
	}
	
	public function setfileName($val)
	{
	$this->fileName =  $val;
	}
	
	public function setfileNameMm($val)
	{
	$this->fileNameMm =  $val;
	}
	
	public function setcreatedAt($val)
	{
	$this->createdAt =  $val;
	}
	
	public function setjobData_id($val)
	{
	$this->jobData_id =  $val;
	}
	
	public function setdiscr($val)
	{
	$this->discr =  $val;
	}
	
	public function settotalRecords($val)
	{
	$this->totalRecords =  $val;
	}
	}