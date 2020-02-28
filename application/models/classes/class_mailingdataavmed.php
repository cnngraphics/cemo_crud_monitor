
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdataavmed
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmed
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class mailingdataavmed
	{
	public $id;
	public $firstName; 
	public $lastName; 
	public $middleName; 
	public $fullName; 
	public $address1; 
	public $mmAddress1; 
	public $address2; 
	public $mmAddress2; 
	public $city; 
	public $mmCity; 
	public $state; 
	public $mmState; 
	public $zipCode; 
	public $mmZipCode; 
	public $country; 
	public $mmCountry; 
	public $mmImb; 
	public $mmOpt; 
	public $mmReturnCode; 
	public $mmDpv; 
	public $mmOrder; 
	public $pdfLocation; 
	public $documentDate; 
	public $mailingDataFile_id; 
	public $mailingPrintReadyFile_id; 
	public $mailingDataAvmedRecord_id; 
	public $pdfTotPages; 
	public $mmCOAMoveToDate; 
	public $mmCOAMoveType; 
	public $seqNumber; 
	public $reprint; 
	public $generic1; 
	public $generic2; 
	public $mmImbDigi; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getfirstName()
	{
	return $this->firstName;
	}
	
	public function getlastName()
	{
	return $this->lastName;
	}
	
	public function getmiddleName()
	{
	return $this->middleName;
	}
	
	public function getfullName()
	{
	return $this->fullName;
	}
	
	public function getaddress1()
	{
	return $this->address1;
	}
	
	public function getmmAddress1()
	{
	return $this->mmAddress1;
	}
	
	public function getaddress2()
	{
	return $this->address2;
	}
	
	public function getmmAddress2()
	{
	return $this->mmAddress2;
	}
	
	public function getcity()
	{
	return $this->city;
	}
	
	public function getmmCity()
	{
	return $this->mmCity;
	}
	
	public function getstate()
	{
	return $this->state;
	}
	
	public function getmmState()
	{
	return $this->mmState;
	}
	
	public function getzipCode()
	{
	return $this->zipCode;
	}
	
	public function getmmZipCode()
	{
	return $this->mmZipCode;
	}
	
	public function getcountry()
	{
	return $this->country;
	}
	
	public function getmmCountry()
	{
	return $this->mmCountry;
	}
	
	public function getmmImb()
	{
	return $this->mmImb;
	}
	
	public function getmmOpt()
	{
	return $this->mmOpt;
	}
	
	public function getmmReturnCode()
	{
	return $this->mmReturnCode;
	}
	
	public function getmmDpv()
	{
	return $this->mmDpv;
	}
	
	public function getmmOrder()
	{
	return $this->mmOrder;
	}
	
	public function getpdfLocation()
	{
	return $this->pdfLocation;
	}
	
	public function getdocumentDate()
	{
	return $this->documentDate;
	}
	
	public function getmailingDataFile_id()
	{
	return $this->mailingDataFile_id;
	}
	
	public function getmailingPrintReadyFile_id()
	{
	return $this->mailingPrintReadyFile_id;
	}
	
	public function getmailingDataAvmedRecord_id()
	{
	return $this->mailingDataAvmedRecord_id;
	}
	
	public function getpdfTotPages()
	{
	return $this->pdfTotPages;
	}
	
	public function getmmCOAMoveToDate()
	{
	return $this->mmCOAMoveToDate;
	}
	
	public function getmmCOAMoveType()
	{
	return $this->mmCOAMoveType;
	}
	
	public function getseqNumber()
	{
	return $this->seqNumber;
	}
	
	public function getreprint()
	{
	return $this->reprint;
	}
	
	public function getgeneric1()
	{
	return $this->generic1;
	}
	
	public function getgeneric2()
	{
	return $this->generic2;
	}
	
	public function getmmImbDigi()
	{
	return $this->mmImbDigi;
	}
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setfirstName($val)
	{
	$this->firstName =  $val;
	}
	
	public function setlastName($val)
	{
	$this->lastName =  $val;
	}
	
	public function setmiddleName($val)
	{
	$this->middleName =  $val;
	}
	
	public function setfullName($val)
	{
	$this->fullName =  $val;
	}
	
	public function setaddress1($val)
	{
	$this->address1 =  $val;
	}
	
	public function setmmAddress1($val)
	{
	$this->mmAddress1 =  $val;
	}
	
	public function setaddress2($val)
	{
	$this->address2 =  $val;
	}
	
	public function setmmAddress2($val)
	{
	$this->mmAddress2 =  $val;
	}
	
	public function setcity($val)
	{
	$this->city =  $val;
	}
	
	public function setmmCity($val)
	{
	$this->mmCity =  $val;
	}
	
	public function setstate($val)
	{
	$this->state =  $val;
	}
	
	public function setmmState($val)
	{
	$this->mmState =  $val;
	}
	
	public function setzipCode($val)
	{
	$this->zipCode =  $val;
	}
	
	public function setmmZipCode($val)
	{
	$this->mmZipCode =  $val;
	}
	
	public function setcountry($val)
	{
	$this->country =  $val;
	}
	
	public function setmmCountry($val)
	{
	$this->mmCountry =  $val;
	}
	
	public function setmmImb($val)
	{
	$this->mmImb =  $val;
	}
	
	public function setmmOpt($val)
	{
	$this->mmOpt =  $val;
	}
	
	public function setmmReturnCode($val)
	{
	$this->mmReturnCode =  $val;
	}
	
	public function setmmDpv($val)
	{
	$this->mmDpv =  $val;
	}
	
	public function setmmOrder($val)
	{
	$this->mmOrder =  $val;
	}
	
	public function setpdfLocation($val)
	{
	$this->pdfLocation =  $val;
	}
	
	public function setdocumentDate($val)
	{
	$this->documentDate =  $val;
	}
	
	public function setmailingDataFile_id($val)
	{
	$this->mailingDataFile_id =  $val;
	}
	
	public function setmailingPrintReadyFile_id($val)
	{
	$this->mailingPrintReadyFile_id =  $val;
	}
	
	public function setmailingDataAvmedRecord_id($val)
	{
	$this->mailingDataAvmedRecord_id =  $val;
	}
	
	public function setpdfTotPages($val)
	{
	$this->pdfTotPages =  $val;
	}
	
	public function setmmCOAMoveToDate($val)
	{
	$this->mmCOAMoveToDate =  $val;
	}
	
	public function setmmCOAMoveType($val)
	{
	$this->mmCOAMoveType =  $val;
	}
	
	public function setseqNumber($val)
	{
	$this->seqNumber =  $val;
	}
	
	public function setreprint($val)
	{
	$this->reprint =  $val;
	}
	
	public function setgeneric1($val)
	{
	$this->generic1 =  $val;
	}
	
	public function setgeneric2($val)
	{
	$this->generic2 =  $val;
	}
	
	public function setmmImbDigi($val)
	{
	$this->mmImbDigi =  $val;
	}
	}