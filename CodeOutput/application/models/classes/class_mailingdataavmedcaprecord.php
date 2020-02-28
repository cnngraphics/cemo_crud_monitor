
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedcaprecord
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedcaprecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class mailingdataavmedcaprecord
	{
	public $id;
	public $parent_id; 
	public $page; 
	public $pageData; 
	
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
	}