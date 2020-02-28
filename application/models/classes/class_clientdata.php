
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        clientdata
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		clientdata
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class clientdata
	{
	public $id;
	public $clientName; 
	public $monthlyJobNumber; 
	public $visibleClientName; 
	public $mailingDataEntity; 
	public $listEmails; 
	public $localFolder; 
	public $jobGroup; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getclientName()
	{
	return $this->clientName;
	}
	
	public function getmonthlyJobNumber()
	{
	return $this->monthlyJobNumber;
	}
	
	public function getvisibleClientName()
	{
	return $this->visibleClientName;
	}
	
	public function getmailingDataEntity()
	{
	return $this->mailingDataEntity;
	}
	
	public function getlistEmails()
	{
	return $this->listEmails;
	}
	
	public function getlocalFolder()
	{
	return $this->localFolder;
	}
	
	public function getjobGroup()
	{
	return $this->jobGroup;
	}
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setclientName($val)
	{
	$this->clientName =  $val;
	}
	
	public function setmonthlyJobNumber($val)
	{
	$this->monthlyJobNumber =  $val;
	}
	
	public function setvisibleClientName($val)
	{
	$this->visibleClientName =  $val;
	}
	
	public function setmailingDataEntity($val)
	{
	$this->mailingDataEntity =  $val;
	}
	
	public function setlistEmails($val)
	{
	$this->listEmails =  $val;
	}
	
	public function setlocalFolder($val)
	{
	$this->localFolder =  $val;
	}
	
	public function setjobGroup($val)
	{
	$this->jobGroup =  $val;
	}
	}