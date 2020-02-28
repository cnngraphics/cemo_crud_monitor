
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        mtrhandlingunit
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mtrhandlingunit
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ libries/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class mtrhandlingunit
	{
	public $id;
	public $sourceFile; 
	public $appointmentId; 
	public $bundleCount; 
	public $edocContainerId; 
	public $edocCsaAgreementId; 
	public $edocCustomerGroupId; 
	public $edocJobId; 
	public $edocMailingGroupId; 
	public $edocParentContainerId; 
	public $edocSiblingContainerId; 
	public $edocSubmitterCrid; 
	public $edocUserLicenseCode; 
	public $handlingEventType; 
	public $handlingEventTypeDescription; 
	public $imtb; 
	public $imtbCin; 
	public $imtbDestinationZip; 
	public $imtbMid; 
	public $imtbProcessingCode; 
	public $imtbSerialNumber; 
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
	public $stcFacAddr; 
	public $stcFacCity; 
	public $stcFacLcleKey; 
	public $stcFacName; 
	public $stcFacState; 
	public $stcFacZip; 
	
	//Get Methods
	
	public function getid()
	{
	return $this->id;
	}
	
	public function getsourceFile()
	{
	return $this->sourceFile;
	}
	
	public function getappointmentId()
	{
	return $this->appointmentId;
	}
	
	public function getbundleCount()
	{
	return $this->bundleCount;
	}
	
	public function getedocContainerId()
	{
	return $this->edocContainerId;
	}
	
	public function getedocCsaAgreementId()
	{
	return $this->edocCsaAgreementId;
	}
	
	public function getedocCustomerGroupId()
	{
	return $this->edocCustomerGroupId;
	}
	
	public function getedocJobId()
	{
	return $this->edocJobId;
	}
	
	public function getedocMailingGroupId()
	{
	return $this->edocMailingGroupId;
	}
	
	public function getedocParentContainerId()
	{
	return $this->edocParentContainerId;
	}
	
	public function getedocSiblingContainerId()
	{
	return $this->edocSiblingContainerId;
	}
	
	public function getedocSubmitterCrid()
	{
	return $this->edocSubmitterCrid;
	}
	
	public function getedocUserLicenseCode()
	{
	return $this->edocUserLicenseCode;
	}
	
	public function gethandlingEventType()
	{
	return $this->handlingEventType;
	}
	
	public function gethandlingEventTypeDescription()
	{
	return $this->handlingEventTypeDescription;
	}
	
	public function getimtb()
	{
	return $this->imtb;
	}
	
	public function getimtbCin()
	{
	return $this->imtbCin;
	}
	
	public function getimtbDestinationZip()
	{
	return $this->imtbDestinationZip;
	}
	
	public function getimtbMid()
	{
	return $this->imtbMid;
	}
	
	public function getimtbProcessingCode()
	{
	return $this->imtbProcessingCode;
	}
	
	public function getimtbSerialNumber()
	{
	return $this->imtbSerialNumber;
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
	
	// Set Methods
	
	public function setid($val)
	{
	$this->id =  $val;
	}
	
	public function setsourceFile($val)
	{
	$this->sourceFile =  $val;
	}
	
	public function setappointmentId($val)
	{
	$this->appointmentId =  $val;
	}
	
	public function setbundleCount($val)
	{
	$this->bundleCount =  $val;
	}
	
	public function setedocContainerId($val)
	{
	$this->edocContainerId =  $val;
	}
	
	public function setedocCsaAgreementId($val)
	{
	$this->edocCsaAgreementId =  $val;
	}
	
	public function setedocCustomerGroupId($val)
	{
	$this->edocCustomerGroupId =  $val;
	}
	
	public function setedocJobId($val)
	{
	$this->edocJobId =  $val;
	}
	
	public function setedocMailingGroupId($val)
	{
	$this->edocMailingGroupId =  $val;
	}
	
	public function setedocParentContainerId($val)
	{
	$this->edocParentContainerId =  $val;
	}
	
	public function setedocSiblingContainerId($val)
	{
	$this->edocSiblingContainerId =  $val;
	}
	
	public function setedocSubmitterCrid($val)
	{
	$this->edocSubmitterCrid =  $val;
	}
	
	public function setedocUserLicenseCode($val)
	{
	$this->edocUserLicenseCode =  $val;
	}
	
	public function sethandlingEventType($val)
	{
	$this->handlingEventType =  $val;
	}
	
	public function sethandlingEventTypeDescription($val)
	{
	$this->handlingEventTypeDescription =  $val;
	}
	
	public function setimtb($val)
	{
	$this->imtb =  $val;
	}
	
	public function setimtbCin($val)
	{
	$this->imtbCin =  $val;
	}
	
	public function setimtbDestinationZip($val)
	{
	$this->imtbDestinationZip =  $val;
	}
	
	public function setimtbMid($val)
	{
	$this->imtbMid =  $val;
	}
	
	public function setimtbProcessingCode($val)
	{
	$this->imtbProcessingCode =  $val;
	}
	
	public function setimtbSerialNumber($val)
	{
	$this->imtbSerialNumber =  $val;
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
	}