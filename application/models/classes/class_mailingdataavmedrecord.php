
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedrecord
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class mailingdataavmedrecord
	{
	public $id;
	public $parent_id; 
	public $recordId; 
	public $memberId; 
	public $line; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getparent_id()
	{
	return $this->parent_id;
	}
	
	public function getrecordId()
	{
	return $this->recordId;
	}
	
	public function getmemberId()
	{
	return $this->memberId;
	}
	
	public function getline()
	{
	return $this->line;
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
	
	public function setrecordId($val)
	{
	$this->recordId =  $val;
	}
	
	public function setmemberId($val)
	{
	$this->memberId =  $val;
	}
	
	public function setline($val)
	{
	$this->line =  $val;
	}
	}