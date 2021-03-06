
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mailingdatacarnival
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatacarnival
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class mailingdatacarnival
	{
	public $id;
	public $job; 
	public $counter; 
	public $shipCode; 
	public $sailDate; 
	public $firstName; 
	public $lastName; 
	public $middleName; 
	public $fullName; 
	public $cabinNumber; 
	public $section; 
	public $offer; 
	public $companionFull; 
	public $celebration; 
	public $expirationDate; 
	public $totalCards; 
	public $companionF; 
	public $companionL; 
	public $shipName; 
	public $HD; 
	public $mailingDataFile_id; 
	public $mailingPrintReadyFile_id; 
	public $personNumber; 
	public $pastGuessNumber; 
	public $fileCreationDate; 
	public $cabinDropDate; 
	public $deliveryDate; 
	public $offerAmount; 
	public $spaManager; 
	public $spaManagerExt; 
	public $holderId; 
	public $cellPackageSk; 
	public $seqTrkNum; 
	public $cardHolderType; 
	public $priorityPrinting; 
	public $bulletDeliveryDate; 
	public $wildCard; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getjob()
	{
	return $this->job;
	}
	
	public function getcounter()
	{
	return $this->counter;
	}
	
	public function getshipCode()
	{
	return $this->shipCode;
	}
	
	public function getsailDate()
	{
	return $this->sailDate;
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
	
	public function getcabinNumber()
	{
	return $this->cabinNumber;
	}
	
	public function getsection()
	{
	return $this->section;
	}
	
	public function getoffer()
	{
	return $this->offer;
	}
	
	public function getcompanionFull()
	{
	return $this->companionFull;
	}
	
	public function getcelebration()
	{
	return $this->celebration;
	}
	
	public function getexpirationDate()
	{
	return $this->expirationDate;
	}
	
	public function gettotalCards()
	{
	return $this->totalCards;
	}
	
	public function getcompanionF()
	{
	return $this->companionF;
	}
	
	public function getcompanionL()
	{
	return $this->companionL;
	}
	
	public function getshipName()
	{
	return $this->shipName;
	}
	
	public function getHD()
	{
	return $this->HD;
	}
	
	public function getmailingDataFile_id()
	{
	return $this->mailingDataFile_id;
	}
	
	public function getmailingPrintReadyFile_id()
	{
	return $this->mailingPrintReadyFile_id;
	}
	
	public function getpersonNumber()
	{
	return $this->personNumber;
	}
	
	public function getpastGuessNumber()
	{
	return $this->pastGuessNumber;
	}
	
	public function getfileCreationDate()
	{
	return $this->fileCreationDate;
	}
	
	public function getcabinDropDate()
	{
	return $this->cabinDropDate;
	}
	
	public function getdeliveryDate()
	{
	return $this->deliveryDate;
	}
	
	public function getofferAmount()
	{
	return $this->offerAmount;
	}
	
	public function getspaManager()
	{
	return $this->spaManager;
	}
	
	public function getspaManagerExt()
	{
	return $this->spaManagerExt;
	}
	
	public function getholderId()
	{
	return $this->holderId;
	}
	
	public function getcellPackageSk()
	{
	return $this->cellPackageSk;
	}
	
	public function getseqTrkNum()
	{
	return $this->seqTrkNum;
	}
	
	public function getcardHolderType()
	{
	return $this->cardHolderType;
	}
	
	public function getpriorityPrinting()
	{
	return $this->priorityPrinting;
	}
	
	public function getbulletDeliveryDate()
	{
	return $this->bulletDeliveryDate;
	}
	
	public function getwildCard()
	{
	return $this->wildCard;
	}
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setjob($val)
	{
	$this->job =  $val;
	}
	
	public function setcounter($val)
	{
	$this->counter =  $val;
	}
	
	public function setshipCode($val)
	{
	$this->shipCode =  $val;
	}
	
	public function setsailDate($val)
	{
	$this->sailDate =  $val;
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
	
	public function setcabinNumber($val)
	{
	$this->cabinNumber =  $val;
	}
	
	public function setsection($val)
	{
	$this->section =  $val;
	}
	
	public function setoffer($val)
	{
	$this->offer =  $val;
	}
	
	public function setcompanionFull($val)
	{
	$this->companionFull =  $val;
	}
	
	public function setcelebration($val)
	{
	$this->celebration =  $val;
	}
	
	public function setexpirationDate($val)
	{
	$this->expirationDate =  $val;
	}
	
	public function settotalCards($val)
	{
	$this->totalCards =  $val;
	}
	
	public function setcompanionF($val)
	{
	$this->companionF =  $val;
	}
	
	public function setcompanionL($val)
	{
	$this->companionL =  $val;
	}
	
	public function setshipName($val)
	{
	$this->shipName =  $val;
	}
	
	public function setHD($val)
	{
	$this->HD =  $val;
	}
	
	public function setmailingDataFile_id($val)
	{
	$this->mailingDataFile_id =  $val;
	}
	
	public function setmailingPrintReadyFile_id($val)
	{
	$this->mailingPrintReadyFile_id =  $val;
	}
	
	public function setpersonNumber($val)
	{
	$this->personNumber =  $val;
	}
	
	public function setpastGuessNumber($val)
	{
	$this->pastGuessNumber =  $val;
	}
	
	public function setfileCreationDate($val)
	{
	$this->fileCreationDate =  $val;
	}
	
	public function setcabinDropDate($val)
	{
	$this->cabinDropDate =  $val;
	}
	
	public function setdeliveryDate($val)
	{
	$this->deliveryDate =  $val;
	}
	
	public function setofferAmount($val)
	{
	$this->offerAmount =  $val;
	}
	
	public function setspaManager($val)
	{
	$this->spaManager =  $val;
	}
	
	public function setspaManagerExt($val)
	{
	$this->spaManagerExt =  $val;
	}
	
	public function setholderId($val)
	{
	$this->holderId =  $val;
	}
	
	public function setcellPackageSk($val)
	{
	$this->cellPackageSk =  $val;
	}
	
	public function setseqTrkNum($val)
	{
	$this->seqTrkNum =  $val;
	}
	
	public function setcardHolderType($val)
	{
	$this->cardHolderType =  $val;
	}
	
	public function setpriorityPrinting($val)
	{
	$this->priorityPrinting =  $val;
	}
	
	public function setbulletDeliveryDate($val)
	{
	$this->bulletDeliveryDate =  $val;
	}
	
	public function setwildCard($val)
	{
	$this->wildCard =  $val;
	}
	}