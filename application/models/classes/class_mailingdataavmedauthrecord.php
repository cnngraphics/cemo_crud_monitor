
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmedauthrecord
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedauthrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class mailingdataavmedauthrecord
	{
	public $id;
	public $parent_id; 
	public $page; 
	public $date; 
	public $summary; 
	public $info; 
	public $status; 
	public $prov; 
	public $header1; 
	public $header2; 
	public $details; 
	
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
	
	public function getdate()
	{
	return $this->date;
	}
	
	public function getsummary()
	{
	return $this->summary;
	}
	
	public function getinfo()
	{
	return $this->info;
	}
	
	public function getstatus()
	{
	return $this->status;
	}
	
	public function getprov()
	{
	return $this->prov;
	}
	
	public function getheader1()
	{
	return $this->header1;
	}
	
	public function getheader2()
	{
	return $this->header2;
	}
	
	public function getdetails()
	{
	return $this->details;
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
	
	public function setdate($val)
	{
	$this->date =  $val;
	}
	
	public function setsummary($val)
	{
	$this->summary =  $val;
	}
	
	public function setinfo($val)
	{
	$this->info =  $val;
	}
	
	public function setstatus($val)
	{
	$this->status =  $val;
	}
	
	public function setprov($val)
	{
	$this->prov =  $val;
	}
	
	public function setheader1($val)
	{
	$this->header1 =  $val;
	}
	
	public function setheader2($val)
	{
	$this->header2 =  $val;
	}
	
	public function setdetails($val)
	{
	$this->details =  $val;
	}
	}