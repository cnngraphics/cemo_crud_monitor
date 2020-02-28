
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        jobdatafile
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		jobdatafile
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class jobdatafile
	{
	public $id;
	public $fileName; 
	public $createdAt; 
	public $jobData_id; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getfileName()
	{
	return $this->fileName;
	}
	
	public function getcreatedAt()
	{
	return $this->createdAt;
	}
	
	public function getjobData_id()
	{
	return $this->jobData_id;
	}
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setfileName($val)
	{
	$this->fileName =  $val;
	}
	
	public function setcreatedAt($val)
	{
	$this->createdAt =  $val;
	}
	
	public function setjobData_id($val)
	{
	$this->jobData_id =  $val;
	}
	}