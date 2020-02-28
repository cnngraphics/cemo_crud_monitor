
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        maintenancedata
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		maintenancedata
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class maintenancedata
	{
	public $id;
	public $parentId; 
	public $jobId; 
	public $parentJobId; 
	public $campaign; 
	public $mailing; 
	public $originalFileName; 
	public $pdfFileName; 
	public $token; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getparentId()
	{
	return $this->parentId;
	}
	
	public function getjobId()
	{
	return $this->jobId;
	}
	
	public function getparentJobId()
	{
	return $this->parentJobId;
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
	
	public function getpdfFileName()
	{
	return $this->pdfFileName;
	}
	
	public function gettoken()
	{
	return $this->token;
	}
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setparentId($val)
	{
	$this->parentId =  $val;
	}
	
	public function setjobId($val)
	{
	$this->jobId =  $val;
	}
	
	public function setparentJobId($val)
	{
	$this->parentJobId =  $val;
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
	
	public function setpdfFileName($val)
	{
	$this->pdfFileName =  $val;
	}
	
	public function settoken($val)
	{
	$this->token =  $val;
	}
	}