
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        cronconductor
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		cronconductor
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class cronconductor
	{
	public $id;
	public $cronFunction; 
	public $timeAdded; 
	public $addedBy; 
	public $timeToRun; 
	public $timeRan; 
	public $timeNeededToRun; 
	public $ranBy; 
	public $timeFinished; 
	public $error; 
	public $sleeping; 
	public $jobData_id; 
	public $clientData_id; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getcronFunction()
	{
	return $this->cronFunction;
	}
	
	public function gettimeAdded()
	{
	return $this->timeAdded;
	}
	
	public function getaddedBy()
	{
	return $this->addedBy;
	}
	
	public function gettimeToRun()
	{
	return $this->timeToRun;
	}
	
	public function gettimeRan()
	{
	return $this->timeRan;
	}
	
	public function gettimeNeededToRun()
	{
	return $this->timeNeededToRun;
	}
	
	public function getranBy()
	{
	return $this->ranBy;
	}
	
	public function gettimeFinished()
	{
	return $this->timeFinished;
	}
	
	public function geterror()
	{
	return $this->error;
	}
	
	public function getsleeping()
	{
	return $this->sleeping;
	}
	
	public function getjobData_id()
	{
	return $this->jobData_id;
	}
	
	public function getclientData_id()
	{
	return $this->clientData_id;
	}
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setcronFunction($val)
	{
	$this->cronFunction =  $val;
	}
	
	public function settimeAdded($val)
	{
	$this->timeAdded =  $val;
	}
	
	public function setaddedBy($val)
	{
	$this->addedBy =  $val;
	}
	
	public function settimeToRun($val)
	{
	$this->timeToRun =  $val;
	}
	
	public function settimeRan($val)
	{
	$this->timeRan =  $val;
	}
	
	public function settimeNeededToRun($val)
	{
	$this->timeNeededToRun =  $val;
	}
	
	public function setranBy($val)
	{
	$this->ranBy =  $val;
	}
	
	public function settimeFinished($val)
	{
	$this->timeFinished =  $val;
	}
	
	public function seterror($val)
	{
	$this->error =  $val;
	}
	
	public function setsleeping($val)
	{
	$this->sleeping =  $val;
	}
	
	public function setjobData_id($val)
	{
	$this->jobData_id =  $val;
	}
	
	public function setclientData_id($val)
	{
	$this->clientData_id =  $val;
	}
	}