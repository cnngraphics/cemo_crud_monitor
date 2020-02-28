
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mtrcontainer
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mtrcontainer
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class mtrcontainer
	{
	public $id;
	public $sourceFile; 
	public $handlingEventType; 
	public $handlingEventTypeDescription; 
	public $imcb; 
	public $imcbMid; 
	public $imcbSerialNumber; 
	public $mailClassDescription; 
	public $mailShapeDescription; 
	public $arrDtm; 
	public $pieceCount; 
	public $scanDatetime; 
	public $facAddr; 
	public $scanFacilityCity; 
	public $scanFacilityName; 
	public $scanFacilityState; 
	public $scanFacilityZip; 
	public $scanLocaleKey; 
	public $scanState; 
	public $scannerType; 
	public $stcDate; 
	public $stcFacAddr; 
	public $stcFacCity; 
	public $stcFacLcleKey; 
	public $stcFacName; 
	public $stcFacState; 
	public $stcFacZip; 
	public $trayCount; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getsourceFile()
	{
	return $this->sourceFile;
	}
	
	public function gethandlingEventType()
	{
	return $this->handlingEventType;
	}
	
	public function gethandlingEventTypeDescription()
	{
	return $this->handlingEventTypeDescription;
	}
	
	public function getimcb()
	{
	return $this->imcb;
	}
	
	public function getimcbMid()
	{
	return $this->imcbMid;
	}
	
	public function getimcbSerialNumber()
	{
	return $this->imcbSerialNumber;
	}
	
	public function getmailClassDescription()
	{
	return $this->mailClassDescription;
	}
	
	public function getmailShapeDescription()
	{
	return $this->mailShapeDescription;
	}
	
	public function getarrDtm()
	{
	return $this->arrDtm;
	}
	
	public function getpieceCount()
	{
	return $this->pieceCount;
	}
	
	public function getscanDatetime()
	{
	return $this->scanDatetime;
	}
	
	public function getfacAddr()
	{
	return $this->facAddr;
	}
	
	public function getscanFacilityCity()
	{
	return $this->scanFacilityCity;
	}
	
	public function getscanFacilityName()
	{
	return $this->scanFacilityName;
	}
	
	public function getscanFacilityState()
	{
	return $this->scanFacilityState;
	}
	
	public function getscanFacilityZip()
	{
	return $this->scanFacilityZip;
	}
	
	public function getscanLocaleKey()
	{
	return $this->scanLocaleKey;
	}
	
	public function getscanState()
	{
	return $this->scanState;
	}
	
	public function getscannerType()
	{
	return $this->scannerType;
	}
	
	public function getstcDate()
	{
	return $this->stcDate;
	}
	
	public function getstcFacAddr()
	{
	return $this->stcFacAddr;
	}
	
	public function getstcFacCity()
	{
	return $this->stcFacCity;
	}
	
	public function getstcFacLcleKey()
	{
	return $this->stcFacLcleKey;
	}
	
	public function getstcFacName()
	{
	return $this->stcFacName;
	}
	
	public function getstcFacState()
	{
	return $this->stcFacState;
	}
	
	public function getstcFacZip()
	{
	return $this->stcFacZip;
	}
	
	public function gettrayCount()
	{
	return $this->trayCount;
	}
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setsourceFile($val)
	{
	$this->sourceFile =  $val;
	}
	
	public function sethandlingEventType($val)
	{
	$this->handlingEventType =  $val;
	}
	
	public function sethandlingEventTypeDescription($val)
	{
	$this->handlingEventTypeDescription =  $val;
	}
	
	public function setimcb($val)
	{
	$this->imcb =  $val;
	}
	
	public function setimcbMid($val)
	{
	$this->imcbMid =  $val;
	}
	
	public function setimcbSerialNumber($val)
	{
	$this->imcbSerialNumber =  $val;
	}
	
	public function setmailClassDescription($val)
	{
	$this->mailClassDescription =  $val;
	}
	
	public function setmailShapeDescription($val)
	{
	$this->mailShapeDescription =  $val;
	}
	
	public function setarrDtm($val)
	{
	$this->arrDtm =  $val;
	}
	
	public function setpieceCount($val)
	{
	$this->pieceCount =  $val;
	}
	
	public function setscanDatetime($val)
	{
	$this->scanDatetime =  $val;
	}
	
	public function setfacAddr($val)
	{
	$this->facAddr =  $val;
	}
	
	public function setscanFacilityCity($val)
	{
	$this->scanFacilityCity =  $val;
	}
	
	public function setscanFacilityName($val)
	{
	$this->scanFacilityName =  $val;
	}
	
	public function setscanFacilityState($val)
	{
	$this->scanFacilityState =  $val;
	}
	
	public function setscanFacilityZip($val)
	{
	$this->scanFacilityZip =  $val;
	}
	
	public function setscanLocaleKey($val)
	{
	$this->scanLocaleKey =  $val;
	}
	
	public function setscanState($val)
	{
	$this->scanState =  $val;
	}
	
	public function setscannerType($val)
	{
	$this->scannerType =  $val;
	}
	
	public function setstcDate($val)
	{
	$this->stcDate =  $val;
	}
	
	public function setstcFacAddr($val)
	{
	$this->stcFacAddr =  $val;
	}
	
	public function setstcFacCity($val)
	{
	$this->stcFacCity =  $val;
	}
	
	public function setstcFacLcleKey($val)
	{
	$this->stcFacLcleKey =  $val;
	}
	
	public function setstcFacName($val)
	{
	$this->stcFacName =  $val;
	}
	
	public function setstcFacState($val)
	{
	$this->stcFacState =  $val;
	}
	
	public function setstcFacZip($val)
	{
	$this->stcFacZip =  $val;
	}
	
	public function settrayCount($val)
	{
	$this->trayCount =  $val;
	}
	}