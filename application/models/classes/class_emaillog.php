
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        emaillog
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		emaillog
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class emaillog
	{
	public $id;
	public $dateSent; 
	public $mailTo; 
	public $cc; 
	public $bcc; 
	public $subject; 
	public $body; 
	public $cemiUserId; 
	public $cronConductor_id; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getdateSent()
	{
	return $this->dateSent;
	}
	
	public function getmailTo()
	{
	return $this->mailTo;
	}
	
	public function getcc()
	{
	return $this->cc;
	}
	
	public function getbcc()
	{
	return $this->bcc;
	}
	
	public function getsubject()
	{
	return $this->subject;
	}
	
	public function getbody()
	{
	return $this->body;
	}
	
	public function getcemiUserId()
	{
	return $this->cemiUserId;
	}
	
	public function getcronConductor_id()
	{
	return $this->cronConductor_id;
	}
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setdateSent($val)
	{
	$this->dateSent =  $val;
	}
	
	public function setmailTo($val)
	{
	$this->mailTo =  $val;
	}
	
	public function setcc($val)
	{
	$this->cc =  $val;
	}
	
	public function setbcc($val)
	{
	$this->bcc =  $val;
	}
	
	public function setsubject($val)
	{
	$this->subject =  $val;
	}
	
	public function setbody($val)
	{
	$this->body =  $val;
	}
	
	public function setcemiUserId($val)
	{
	$this->cemiUserId =  $val;
	}
	
	public function setcronConductor_id($val)
	{
	$this->cronConductor_id =  $val;
	}
	}