
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        jobinterfaceitem
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		jobinterfaceitem
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class jobinterfaceitem
	{
	public $id;
	public $dateInserted; 
	public $name; 
	public $value; 
	public $jobData_id; 
	public $discr; 
	public $pathDownloadLink; 
	public $saveBy; 
	public $pathUploadFolder; 
	public $pathUploadFileName; 
	public $ccToTrigger_id; 
	public $approvedAction; 
	public $dateApproved; 
	public $approvedBy; 
	public $dateModified; 
	public $approvedDisapproved; 
	public $dateApprovedDisapproved; 
	public $approvedDisapprovedBy; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getdateInserted()
	{
	return $this->dateInserted;
	}
	
	public function getname()
	{
	return $this->name;
	}
	
	public function getvalue()
	{
	return $this->value;
	}
	
	public function getjobData_id()
	{
	return $this->jobData_id;
	}
	
	public function getdiscr()
	{
	return $this->discr;
	}
	
	public function getpathDownloadLink()
	{
	return $this->pathDownloadLink;
	}
	
	public function getsaveBy()
	{
	return $this->saveBy;
	}
	
	public function getpathUploadFolder()
	{
	return $this->pathUploadFolder;
	}
	
	public function getpathUploadFileName()
	{
	return $this->pathUploadFileName;
	}
	
	public function getccToTrigger_id()
	{
	return $this->ccToTrigger_id;
	}
	
	public function getapprovedAction()
	{
	return $this->approvedAction;
	}
	
	public function getdateApproved()
	{
	return $this->dateApproved;
	}
	
	public function getapprovedBy()
	{
	return $this->approvedBy;
	}
	
	public function getdateModified()
	{
	return $this->dateModified;
	}
	
	public function getapprovedDisapproved()
	{
	return $this->approvedDisapproved;
	}
	
	public function getdateApprovedDisapproved()
	{
	return $this->dateApprovedDisapproved;
	}
	
	public function getapprovedDisapprovedBy()
	{
	return $this->approvedDisapprovedBy;
	}
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setdateInserted($val)
	{
	$this->dateInserted =  $val;
	}
	
	public function setname($val)
	{
	$this->name =  $val;
	}
	
	public function setvalue($val)
	{
	$this->value =  $val;
	}
	
	public function setjobData_id($val)
	{
	$this->jobData_id =  $val;
	}
	
	public function setdiscr($val)
	{
	$this->discr =  $val;
	}
	
	public function setpathDownloadLink($val)
	{
	$this->pathDownloadLink =  $val;
	}
	
	public function setsaveBy($val)
	{
	$this->saveBy =  $val;
	}
	
	public function setpathUploadFolder($val)
	{
	$this->pathUploadFolder =  $val;
	}
	
	public function setpathUploadFileName($val)
	{
	$this->pathUploadFileName =  $val;
	}
	
	public function setccToTrigger_id($val)
	{
	$this->ccToTrigger_id =  $val;
	}
	
	public function setapprovedAction($val)
	{
	$this->approvedAction =  $val;
	}
	
	public function setdateApproved($val)
	{
	$this->dateApproved =  $val;
	}
	
	public function setapprovedBy($val)
	{
	$this->approvedBy =  $val;
	}
	
	public function setdateModified($val)
	{
	$this->dateModified =  $val;
	}
	
	public function setapprovedDisapproved($val)
	{
	$this->approvedDisapproved =  $val;
	}
	
	public function setdateApprovedDisapproved($val)
	{
	$this->dateApprovedDisapproved =  $val;
	}
	
	public function setapprovedDisapprovedBy($val)
	{
	$this->approvedDisapprovedBy =  $val;
	}
	}