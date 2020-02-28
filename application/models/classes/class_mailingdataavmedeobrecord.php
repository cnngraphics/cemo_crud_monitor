
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedeobrecord
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedeobrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class mailingdataavmedeobrecord
	{
	public $id;
	public $parent_id; 
	public $page; 
	public $pageData; 
	public $pageDataAcc; 
	public $pageDataHeader; 
	public $pageDate; 
	public $pageBK; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getparent_id()
	{
	return $this->parent_id;
	}
	
	public function getpage()
	{
	return $this->page;
	}
	
	public function getpageData()
	{
	return $this->pageData;
	}
	
	public function getpageDataAcc()
	{
	return $this->pageDataAcc;
	}
	
	public function getpageDataHeader()
	{
	return $this->pageDataHeader;
	}
	
	public function getpageDate()
	{
	return $this->pageDate;
	}
	
	public function getpageBK()
	{
	return $this->pageBK;
	}
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setparent_id($val)
	{
	$this->parent_id =  $val;
	}
	
	public function setpage($val)
	{
	$this->page =  $val;
	}
	
	public function setpageData($val)
	{
	$this->pageData =  $val;
	}
	
	public function setpageDataAcc($val)
	{
	$this->pageDataAcc =  $val;
	}
	
	public function setpageDataHeader($val)
	{
	$this->pageDataHeader =  $val;
	}
	
	public function setpageDate($val)
	{
	$this->pageDate =  $val;
	}
	
	public function setpageBK($val)
	{
	$this->pageBK =  $val;
	}
	}