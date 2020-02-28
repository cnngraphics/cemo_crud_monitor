
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        jobdata
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		jobdata
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class jobdata
	{
	public $id;
	public $createdAt; 
	public $finishedAt; 
	public $jobName; 
	public $oiJobNumber; 
	public $status; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getcreatedAt()
	{
	return $this->createdAt;
	}
	
	public function getfinishedAt()
	{
	return $this->finishedAt;
	}
	
	public function getjobName()
	{
	return $this->jobName;
	}
	
	public function getoiJobNumber()
	{
	return $this->oiJobNumber;
	}
	
	public function getstatus()
	{
	return $this->status;
	}
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setcreatedAt($val)
	{
	$this->createdAt =  $val;
	}
	
	public function setfinishedAt($val)
	{
	$this->finishedAt =  $val;
	}
	
	public function setjobName($val)
	{
	$this->jobName =  $val;
	}
	
	public function setoiJobNumber($val)
	{
	$this->oiJobNumber =  $val;
	}
	
	public function setstatus($val)
	{
	$this->status =  $val;
	}
	}