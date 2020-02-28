-- --------------------------------------------------------
-- Host:                         ibd1-2015-01-28-02-00.cl3dbt8ff2xa.us-east-1.rds.amazonaws.com
-- Server version:               5.5.61-log - Source distribution
-- Server OS:                    Linux
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for mailing_list
DROP DATABASE IF EXISTS `mailing_list`;
CREATE DATABASE IF NOT EXISTS `mailing_list` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mailing_list`;

-- Dumping structure for table mailing_list.cemiUser
DROP TABLE IF EXISTS `cemiUser`;
CREATE TABLE IF NOT EXISTS `cemiUser` (
  `cemiUserId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cemiUserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.cemiuser_clientdata
DROP TABLE IF EXISTS `cemiuser_clientdata`;
CREATE TABLE IF NOT EXISTS `cemiuser_clientdata` (
  `cemiuser_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clientdata_id` bigint(20) NOT NULL,
  PRIMARY KEY (`cemiuser_id`,`clientdata_id`),
  KEY `IDX_230AB73ECDF55F69` (`cemiuser_id`),
  KEY `IDX_230AB73E9B600D0C` (`clientdata_id`),
  CONSTRAINT `FK_230AB73E9B600D0C` FOREIGN KEY (`clientdata_id`) REFERENCES `clientData` (`id`),
  CONSTRAINT `FK_230AB73ECDF55F69` FOREIGN KEY (`cemiuser_id`) REFERENCES `cemiUser` (`cemiUserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.clientData
DROP TABLE IF EXISTS `clientData`;
CREATE TABLE IF NOT EXISTS `clientData` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `clientName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `monthlyJobNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `visibleClientName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mailingDataEntity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `listEmails` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `localFolder` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jobGroup` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.cronConductor
DROP TABLE IF EXISTS `cronConductor`;
CREATE TABLE IF NOT EXISTS `cronConductor` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cronFunction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `timeAdded` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addedBy` int(11) NOT NULL,
  `timeToRun` datetime DEFAULT NULL,
  `timeRan` datetime DEFAULT NULL,
  `timeNeededToRun` datetime DEFAULT NULL,
  `ranBy` int(11) NOT NULL,
  `timeFinished` datetime DEFAULT NULL,
  `error` text COLLATE utf8_unicode_ci,
  `sleeping` tinyint(1) NOT NULL,
  `jobData_id` bigint(20) DEFAULT NULL,
  `clientData_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C931DEC3517F52A2` (`jobData_id`),
  KEY `IDX_C931DEC354DD3490` (`clientData_id`),
  CONSTRAINT `FK_C931DEC3517F52A2` FOREIGN KEY (`jobData_id`) REFERENCES `jobData` (`id`),
  CONSTRAINT `FK_C931DEC354DD3490` FOREIGN KEY (`clientData_id`) REFERENCES `clientData` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13725991 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for procedure mailing_list.deleteJobData
DROP PROCEDURE IF EXISTS `deleteJobData`;
DELIMITER //
CREATE DEFINER=`master_ibd`@`%` PROCEDURE `deleteJobData`(IN jobDataid INT(11))
BEGIN

SET SQL_SAFE_UPDATES = 0;
SET FOREIGN_KEY_CHECKS=0;

-- STep 1
DELETE from jobDataFile 
WHERE jobData_id = jobDataid;

-- Step 2
Delete FROM jobInterfaceItem
WHERE jobData_id = jobDataid;

-- Step 3
DELETE  FROM mailingDataFile
WHERE jobData_id = jobDataid;

-- Step 4
DELETE FROM emailLog where cronConductor_id 
IN (SELECT id FROM mailing_list.cronConductor
where jobData_id = jobDataid);

-- Step 5
DELETE FROM cronConductor
where jobData_id = jobDataid;

-- Step 6
DELETE FROM jobData where id = jobDataid;

SET SQL_SAFE_UPDATES = 1;
SET FOREIGN_KEY_CHECKS=1;

END//
DELIMITER ;

-- Dumping structure for table mailing_list.emailLog
DROP TABLE IF EXISTS `emailLog`;
CREATE TABLE IF NOT EXISTS `emailLog` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `dateSent` datetime DEFAULT NULL,
  `mailTo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bcc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cemiUserId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cronConductor_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_79012ADCBBCD054B` (`cronConductor_id`),
  CONSTRAINT `FK_79012ADCBBCD054B` FOREIGN KEY (`cronConductor_id`) REFERENCES `cronConductor` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104993 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.jobData
DROP TABLE IF EXISTS `jobData`;
CREATE TABLE IF NOT EXISTS `jobData` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `createdAt` datetime DEFAULT NULL,
  `finishedAt` datetime DEFAULT NULL,
  `jobName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oiJobNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('open','closed','canceled') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8192 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.jobDataFile
DROP TABLE IF EXISTS `jobDataFile`;
CREATE TABLE IF NOT EXISTS `jobDataFile` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fileName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `jobData_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_329B55D1517F52A2` (`jobData_id`),
  CONSTRAINT `FK_329B55D1517F52A2` FOREIGN KEY (`jobData_id`) REFERENCES `jobData` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31534 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.jobInterfaceItem
DROP TABLE IF EXISTS `jobInterfaceItem`;
CREATE TABLE IF NOT EXISTS `jobInterfaceItem` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `dateInserted` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jobData_id` bigint(20) DEFAULT NULL,
  `discr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pathDownloadLink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saveBy` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pathUploadFolder` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pathUploadFileName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ccToTrigger_id` bigint(20) DEFAULT NULL,
  `approvedAction` tinyint(1) DEFAULT NULL,
  `dateApproved` datetime DEFAULT NULL,
  `approvedBy` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateModified` datetime DEFAULT NULL,
  `approvedDisapproved` smallint(6) DEFAULT NULL,
  `dateApprovedDisapproved` datetime DEFAULT NULL,
  `approvedDisapprovedBy` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7CCDAEDF517F52A2` (`jobData_id`),
  KEY `IDX_7CCDAEDF9D65D158` (`ccToTrigger_id`),
  CONSTRAINT `FK_7CCDAEDF517F52A2` FOREIGN KEY (`jobData_id`) REFERENCES `jobData` (`id`),
  CONSTRAINT `FK_7CCDAEDF9D65D158` FOREIGN KEY (`ccToTrigger_id`) REFERENCES `cronConductor` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=115283 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAltegraRPC1
DROP TABLE IF EXISTS `mailingDataAltegraRPC1`;
CREATE TABLE IF NOT EXISTS `mailingDataAltegraRPC1` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `RUNTIME_MailBarCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batchID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `original_filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fileNameTemplate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `includeInTest` tinyint(1) NOT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BA08A2CC63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_BA08A2CEC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_BA08A2CC63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_BA08A2CEC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmed
DROP TABLE IF EXISTS `mailingDataAvmed`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmed` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documentDate` datetime DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `mailingDataAvmedRecord_id` bigint(20) DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `reprint` int(11) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_68F8CB622963FC65` (`mailingDataAvmedRecord_id`),
  KEY `IDX_68F8CB62C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_68F8CB62EC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_68F8CB622963FC65` FOREIGN KEY (`mailingDataAvmedRecord_id`) REFERENCES `mailingDataAvmedRecord` (`id`),
  CONSTRAINT `FK_68F8CB62C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_68F8CB62EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1595039 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedAuth
DROP TABLE IF EXISTS `mailingDataAvmedAuth`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedAuth` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `documentDate` datetime DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `lastPage` int(11) DEFAULT NULL,
  `reprint` int(11) DEFAULT NULL,
  `avmedID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `mailingDataRecord_id` bigint(20) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CB35DB91E6A415F9` (`mailingDataRecord_id`),
  KEY `IDX_CB35DB91C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_CB35DB91EC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_CB35DB91C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_CB35DB91E6A415F9` FOREIGN KEY (`mailingDataRecord_id`) REFERENCES `mailingDataAvmedAuthRecord` (`id`),
  CONSTRAINT `FK_CB35DB91EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79437 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedAuthRecord
DROP TABLE IF EXISTS `mailingDataAvmedAuthRecord`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedAuthRecord` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) DEFAULT NULL,
  `page` int(11) NOT NULL,
  `date` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `prov` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `header1` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `header2` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EE88603B727ACA70` (`parent_id`),
  CONSTRAINT `FK_EE88603B727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mailingDataAvmedAuthRecord` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79679 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedCAP
DROP TABLE IF EXISTS `mailingDataAvmedCAP`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedCAP` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `documentDate` datetime DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `lastPage` int(11) DEFAULT NULL,
  `reprint` int(11) DEFAULT NULL,
  `checkNumber` int(11) DEFAULT NULL,
  `checkDate` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `checkAmount` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `mailingDataAvmedCAPRecord_id` bigint(20) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_DFAFAEB6193EB67B` (`mailingDataAvmedCAPRecord_id`),
  KEY `IDX_DFAFAEB6C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_DFAFAEB6EC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_DFAFAEB6193EB67B` FOREIGN KEY (`mailingDataAvmedCAPRecord_id`) REFERENCES `mailingDataAvmedCAPRecord` (`id`),
  CONSTRAINT `FK_DFAFAEB6C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_DFAFAEB6EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedCAPRecord
DROP TABLE IF EXISTS `mailingDataAvmedCAPRecord`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedCAPRecord` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) DEFAULT NULL,
  `page` int(11) NOT NULL,
  `pageData` varchar(4000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CC13066727ACA70` (`parent_id`),
  CONSTRAINT `FK_CC13066727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mailingDataAvmedCAPRecord` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=532 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedChecks
DROP TABLE IF EXISTS `mailingDataAvmedChecks`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedChecks` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `aAdd1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aAdd2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aAdd3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aAdd4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bAdd1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bAdd2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bAdd3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bAdd4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pAdd1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pAdd2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pAdd3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pAdd4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `checkId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `checkNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `checkDate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `checkAmount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `micrCheck` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `micrRouting` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `micrAccount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seqNumber` int(11) NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `jobData_id` bigint(20) DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `discr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_46CFD604517F52A2` (`jobData_id`),
  KEY `IDX_46CFD604C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_46CFD604EC7793FC` (`mailingPrintReadyFile_id`),
  CONSTRAINT `FK_46CFD604517F52A2` FOREIGN KEY (`jobData_id`) REFERENCES `jobData` (`id`),
  CONSTRAINT `FK_46CFD604C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_46CFD604EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedCVS
DROP TABLE IF EXISTS `mailingDataAvmedCVS`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedCVS` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `processDate` date DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_43257B9AC63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_43257B9AEC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_43257B9AC63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_43257B9AEC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40496 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedEOB
DROP TABLE IF EXISTS `mailingDataAvmedEOB`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedEOB` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `documentDate` datetime DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `lastPage` int(11) DEFAULT NULL,
  `reprint` int(11) DEFAULT NULL,
  `avmedID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `mailingDataAvmedEOBRecord_id` bigint(20) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B6188EC2872E6948` (`mailingDataAvmedEOBRecord_id`),
  KEY `IDX_B6188EC2C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_B6188EC2EC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_B6188EC2872E6948` FOREIGN KEY (`mailingDataAvmedEOBRecord_id`) REFERENCES `mailingDataAvmedEOBRecord` (`id`),
  CONSTRAINT `FK_B6188EC2C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_B6188EC2EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6110646 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedEOBRecord
DROP TABLE IF EXISTS `mailingDataAvmedEOBRecord`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedEOBRecord` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) DEFAULT NULL,
  `page` int(11) NOT NULL,
  `pageData` varchar(4000) COLLATE utf8_unicode_ci NOT NULL,
  `pageDataAcc` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `pageDataHeader` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `pageDate` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `pageBK` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9A10D639727ACA70` (`parent_id`),
  CONSTRAINT `FK_9A10D639727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mailingDataAvmedEOBRecord` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9442048 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedGroupInvoices
DROP TABLE IF EXISTS `mailingDataAvmedGroupInvoices`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedGroupInvoices` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `documentDate` datetime DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `lastPage` int(11) DEFAULT NULL,
  `reprint` int(11) DEFAULT NULL,
  `avmedID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `mailingDataRecord10_id` bigint(20) DEFAULT NULL,
  `mailingDataRecord20_id` bigint(20) DEFAULT NULL,
  `mailingDataRecord21_id` bigint(20) DEFAULT NULL,
  `mailingDataRecord30_id` bigint(20) DEFAULT NULL,
  `mailingDataRecord40_id` bigint(20) DEFAULT NULL,
  `mailingDataRecord50_id` bigint(20) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6CC662E1AFA3BC9E` (`mailingDataRecord10_id`),
  UNIQUE KEY `UNIQ_6CC662E1E803C64E` (`mailingDataRecord20_id`),
  UNIQUE KEY `UNIQ_6CC662E150BFA12B` (`mailingDataRecord21_id`),
  UNIQUE KEY `UNIQ_6CC662E1D563EFFE` (`mailingDataRecord30_id`),
  UNIQUE KEY `UNIQ_6CC662E1674333EE` (`mailingDataRecord40_id`),
  UNIQUE KEY `UNIQ_6CC662E15A231A5E` (`mailingDataRecord50_id`),
  KEY `IDX_6CC662E1C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_6CC662E1EC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_6CC662E150BFA12B` FOREIGN KEY (`mailingDataRecord21_id`) REFERENCES `mailingDataAvmedGroupInvoicesRecord21` (`id`),
  CONSTRAINT `FK_6CC662E15A231A5E` FOREIGN KEY (`mailingDataRecord50_id`) REFERENCES `mailingDataAvmedGroupInvoicesRecord50` (`id`),
  CONSTRAINT `FK_6CC662E1674333EE` FOREIGN KEY (`mailingDataRecord40_id`) REFERENCES `mailingDataAvmedGroupInvoicesRecord40` (`id`),
  CONSTRAINT `FK_6CC662E1AFA3BC9E` FOREIGN KEY (`mailingDataRecord10_id`) REFERENCES `mailingDataAvmedGroupInvoicesRecord10` (`id`),
  CONSTRAINT `FK_6CC662E1C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_6CC662E1D563EFFE` FOREIGN KEY (`mailingDataRecord30_id`) REFERENCES `mailingDataAvmedGroupInvoicesRecord30` (`id`),
  CONSTRAINT `FK_6CC662E1E803C64E` FOREIGN KEY (`mailingDataRecord20_id`) REFERENCES `mailingDataAvmedGroupInvoicesRecord20` (`id`),
  CONSTRAINT `FK_6CC662E1EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedGroupInvoicesRecord10
DROP TABLE IF EXISTS `mailingDataAvmedGroupInvoicesRecord10`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedGroupInvoicesRecord10` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `invNo` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `invDate` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `dueDate` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `cycleCode` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `billFrom` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `billTo` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `billingMethod` varchar(19) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedGroupInvoicesRecord20
DROP TABLE IF EXISTS `mailingDataAvmedGroupInvoicesRecord20`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedGroupInvoicesRecord20` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `invNo` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `subscriberName` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `subscriberAddr1` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedGroupInvoicesRecord21
DROP TABLE IF EXISTS `mailingDataAvmedGroupInvoicesRecord21`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedGroupInvoicesRecord21` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `invNo` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `subscriberAddr2` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `subscriberAddr3` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `acctId` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedGroupInvoicesRecord30
DROP TABLE IF EXISTS `mailingDataAvmedGroupInvoicesRecord30`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedGroupInvoicesRecord30` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) DEFAULT NULL,
  `invNo` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `contractNo` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `divisionNo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `spanEffDate` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `premFromDate` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `premToDate` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `premContType` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `familySize` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `premAmount` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `nbrDayMonths` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `premAmtEntry1` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `premAmtEntry2` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `premAmtEntry3` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `premAmtEntry4` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `premAmtEntry5` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `premAmtEntry6` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `premAmtEntry7` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `premAmtEntry8` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `premAmtEntry9` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `premAmtEntry10` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `premAmtEntry11` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `premAmtEntry12` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AAD79459727ACA70` (`parent_id`),
  CONSTRAINT `FK_AAD79459727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mailingDataAvmedGroupInvoicesRecord30` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedGroupInvoicesRecord40
DROP TABLE IF EXISTS `mailingDataAvmedGroupInvoicesRecord40`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedGroupInvoicesRecord40` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) DEFAULT NULL,
  `invNo` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `contractNo` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `divisionNo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `adjEffDate` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `adjEndDate` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `adjContType` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `adjRemark` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `adjAmount` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `nbrDaysMonths` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `adjAmountEntry1` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `adjAmountEntry2` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `adjAmountEntry3` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `adjAmountEntry4` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `adjAmountEntry5` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `adjAmountEntry6` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `adjAmountEntry7` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `adjAmountEntry8` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `adjAmountEntry9` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `adjAmountEntry10` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `adjAmountEntry11` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `adjAmountEntry12` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E596029E727ACA70` (`parent_id`),
  CONSTRAINT `FK_E596029E727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mailingDataAvmedGroupInvoicesRecord40` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedGroupInvoicesRecord50
DROP TABLE IF EXISTS `mailingDataAvmedGroupInvoicesRecord50`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedGroupInvoicesRecord50` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `invNo` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `contracts` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `members` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `prevBalance` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `totRetroAdj` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `totAdj` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `payments` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `finance` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `balanceForward` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `totPremium` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `amountDue` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedIDN
DROP TABLE IF EXISTS `mailingDataAvmedIDN`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedIDN` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `documentDate` datetime DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `lastPage` int(11) DEFAULT NULL,
  `reprint` int(11) DEFAULT NULL,
  `avmedID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `mailingDataAvmedIDNRecord_id` bigint(20) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5540E246BB394303` (`mailingDataAvmedIDNRecord_id`),
  KEY `IDX_5540E246C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_5540E246EC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_5540E246BB394303` FOREIGN KEY (`mailingDataAvmedIDNRecord_id`) REFERENCES `mailingDataAvmedIDNRecord` (`id`),
  CONSTRAINT `FK_5540E246C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_5540E246EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=153320 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedIDNRecord
DROP TABLE IF EXISTS `mailingDataAvmedIDNRecord`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedIDNRecord` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) DEFAULT NULL,
  `claim` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `service` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `serviceDate` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(72) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codes` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codeDesc` varchar(218) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider` varchar(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `providerNumber` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billed` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `responsability` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E6EE530F727ACA70` (`parent_id`),
  CONSTRAINT `FK_E6EE530F727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mailingDataAvmedIDNRecord` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1417103 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedIFP
DROP TABLE IF EXISTS `mailingDataAvmedIFP`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedIFP` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `dueDate` datetime DEFAULT NULL,
  `toDate` datetime DEFAULT NULL,
  `receivedBy` datetime DEFAULT NULL,
  `agent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avmedID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `reprint` int(11) DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9D79BDA7C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_9D79BDA7EC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_9D79BDA7C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_9D79BDA7EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27046 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedMedEOB
DROP TABLE IF EXISTS `mailingDataAvmedMedEOB`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedMedEOB` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `documentDate` datetime DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `lastPage` int(11) DEFAULT NULL,
  `reprint` int(11) DEFAULT NULL,
  `avmedID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `mailingDataRecord_id` bigint(20) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A01FCF6EE6A415F9` (`mailingDataRecord_id`),
  KEY `IDX_A01FCF6EC63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_A01FCF6EEC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_A01FCF6EC63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_A01FCF6EE6A415F9` FOREIGN KEY (`mailingDataRecord_id`) REFERENCES `mailingDataAvmedMedEOBRecord` (`id`),
  CONSTRAINT `FK_A01FCF6EEC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1671695 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedMedEOBQuarterly
DROP TABLE IF EXISTS `mailingDataAvmedMedEOBQuarterly`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedMedEOBQuarterly` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `documentDate` datetime DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `lastPage` int(11) DEFAULT NULL,
  `reprint` int(11) DEFAULT NULL,
  `avmedID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `mailingDataRecord_id` bigint(20) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_458D7A3E6A415F9` (`mailingDataRecord_id`),
  KEY `IDX_458D7A3C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_458D7A3EC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_458D7A3C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_458D7A3E6A415F9` FOREIGN KEY (`mailingDataRecord_id`) REFERENCES `mailingDataAvmedMedEOBQuarterlyRecord` (`id`),
  CONSTRAINT `FK_458D7A3EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=360600 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedMedEOBQuarterlyRecord
DROP TABLE IF EXISTS `mailingDataAvmedMedEOBQuarterlyRecord`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedMedEOBQuarterlyRecord` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) DEFAULT NULL,
  `page` int(11) NOT NULL,
  `pageDate` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `quarterPeriodStart` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `quarterPeriodEnd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `memberNumber` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(93) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `billedAmountQuarter` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `allowedAmountQuarter` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `paidAmountQuarter` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `memberResponsibilityQuarter` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `billedAmountYear` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `allowedAmountYear` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `paidAmountYear` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `memberResponsibilityYear` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `oopUsedYear` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `oopMaxYear` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3175D53F727ACA70` (`parent_id`),
  CONSTRAINT `FK_3175D53F727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mailingDataAvmedMedEOBQuarterlyRecord` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=360600 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedMedEOBRecord
DROP TABLE IF EXISTS `mailingDataAvmedMedEOBRecord`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedMedEOBRecord` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) DEFAULT NULL,
  `page` int(11) NOT NULL,
  `pageData` varchar(4000) COLLATE utf8_unicode_ci NOT NULL,
  `pageDataAcc` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `pageDataHeader` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `pageDate` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `pageBK` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1421912E727ACA70` (`parent_id`),
  CONSTRAINT `FK_1421912E727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mailingDataAvmedMedEOBRecord` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2834688 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedNCOA
DROP TABLE IF EXISTS `mailingDataAvmedNCOA`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedNCOA` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `avmed_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CDB025B1C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_CDB025B1EC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_CDB025B1C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_CDB025B1EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35110721 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedNonParEDI
DROP TABLE IF EXISTS `mailingDataAvmedNonParEDI`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedNonParEDI` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `transmissionDate` datetime DEFAULT NULL,
  `claimNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `providerTaxId` int(11) DEFAULT NULL,
  `providerNPI` int(11) DEFAULT NULL,
  `avmedID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `memberName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `service` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DIAG1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `reprint` int(11) DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_40DA405DC63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_40DA405DEC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_40DA405DC63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_40DA405DEC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20194 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedRecord
DROP TABLE IF EXISTS `mailingDataAvmedRecord`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedRecord` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) DEFAULT NULL,
  `recordId` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `memberId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `line` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_427749EC727ACA70` (`parent_id`),
  CONSTRAINT `FK_427749EC727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mailingDataAvmedRecord` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10521228 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataAvmedRenewal
DROP TABLE IF EXISTS `mailingDataAvmedRenewal`;
CREATE TABLE IF NOT EXISTS `mailingDataAvmedRenewal` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `processDate` date DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D369099FC63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_D369099FEC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_D369099FC63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_D369099FEC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47851 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataBadcockCollectionLetters
DROP TABLE IF EXISTS `mailingDataBadcockCollectionLetters`;
CREATE TABLE IF NOT EXISTS `mailingDataBadcockCollectionLetters` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `customerNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `letterType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `storeNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_11FEE5AAC63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_11FEE5AAEC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_11FEE5AAC63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_11FEE5AAEC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=189811 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataBadcockStatements
DROP TABLE IF EXISTS `mailingDataBadcockStatements`;
CREATE TABLE IF NOT EXISTS `mailingDataBadcockStatements` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recordId` int(11) DEFAULT NULL,
  `customerNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `beginningCycle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endingCycle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `storeNumber` int(11) DEFAULT NULL,
  `cycle` int(11) DEFAULT NULL,
  `deliveryMethod` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `mailingDataRecord_id` bigint(20) DEFAULT NULL,
  `qc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_DA6F0A79E6A415F9` (`mailingDataRecord_id`),
  KEY `IDX_DA6F0A79C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_DA6F0A79EC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_DA6F0A79C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_DA6F0A79E6A415F9` FOREIGN KEY (`mailingDataRecord_id`) REFERENCES `mailingDataBadcockStatementsRecord` (`id`),
  CONSTRAINT `FK_DA6F0A79EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13273742 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataBadcockStatementsRecord
DROP TABLE IF EXISTS `mailingDataBadcockStatementsRecord`;
CREATE TABLE IF NOT EXISTS `mailingDataBadcockStatementsRecord` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) DEFAULT NULL,
  `page` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_195E89BC727ACA70` (`parent_id`),
  CONSTRAINT `FK_195E89BC727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `mailingDataBadcockStatementsRecord` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataBCPA
DROP TABLE IF EXISTS `mailingDataBCPA`;
CREATE TABLE IF NOT EXISTS `mailingDataBCPA` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `domestic` tinyint(1) DEFAULT NULL,
  `documentDate` datetime DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `lastPage` int(11) DEFAULT NULL,
  `reprint` int(11) DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `mailingDataBCPARecord_id` bigint(20) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qrCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_4CECCE6AD5F7AFE4` (`mailingDataBCPARecord_id`),
  KEY `IDX_4CECCE6AC63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_4CECCE6AEC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_4CECCE6AC63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_4CECCE6AD5F7AFE4` FOREIGN KEY (`mailingDataBCPARecord_id`) REFERENCES `mailingDataBCPARecord` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_4CECCE6AEC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2001778 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataBCPARecord
DROP TABLE IF EXISTS `mailingDataBCPARecord`;
CREATE TABLE IF NOT EXISTS `mailingDataBCPARecord` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `headerPage1` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `headerPage2` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `companyAddress` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `propertyValues` longtext COLLATE utf8_unicode_ci NOT NULL,
  `taxes` longtext COLLATE utf8_unicode_ci NOT NULL,
  `footerTextPage1` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tablePage2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `totalPage2` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `parcelNumber` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2001778 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataCarnival
DROP TABLE IF EXISTS `mailingDataCarnival`;
CREATE TABLE IF NOT EXISTS `mailingDataCarnival` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `job` int(11) NOT NULL,
  `counter` int(11) DEFAULT NULL,
  `shipCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sailDate` date NOT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cabinNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `offer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companionFull` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celebration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expirationDate` date NOT NULL,
  `totalCards` int(11) DEFAULT NULL,
  `companionF` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companionL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HD` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `personNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pastGuessNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fileCreationDate` date NOT NULL,
  `cabinDropDate` date NOT NULL,
  `deliveryDate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `offerAmount` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `spaManager` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `spaManagerExt` int(11) DEFAULT NULL,
  `holderId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cellPackageSk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seqTrkNum` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cardHolderType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `priorityPrinting` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bulletDeliveryDate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wildCard` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D0822D57C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_D0822D57EC7793FC` (`mailingPrintReadyFile_id`),
  CONSTRAINT `FK_D0822D57C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_D0822D57EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5124266 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataCCL
DROP TABLE IF EXISTS `mailingDataCCL`;
CREATE TABLE IF NOT EXISTS `mailingDataCCL` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `job` int(11) NOT NULL,
  `personNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pastGuessNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sailDate` date NOT NULL,
  `cabinNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fileCreationDate` date NOT NULL,
  `cabinDropDate` date NOT NULL,
  `deliveryDate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companionF` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companionL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companionFull` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celebration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `offer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `offerAmount` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expirationDate` date NOT NULL,
  `totalCards` int(11) DEFAULT NULL,
  `HD` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `spaManager` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `spaManagerExt` int(11) DEFAULT NULL,
  `counter` int(11) DEFAULT NULL,
  `holderId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cellPackageSk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seqTrkNum` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cardHolderType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `priorityPrinting` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bulletDeliveryDate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wildCard` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9F77723EC63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_9F77723EEC7793FC` (`mailingPrintReadyFile_id`),
  CONSTRAINT `FK_9F77723EC63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_9F77723EEC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2645332 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataDevotedIdCards
DROP TABLE IF EXISTS `mailingDataDevotedIdCards`;
CREATE TABLE IF NOT EXISTS `mailingDataDevotedIdCards` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sourceFileName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `processDate` datetime DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `memberId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pbpName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pbpNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pcpName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recordId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `completeDate` datetime DEFAULT NULL,
  `trackingNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipError` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3601BC2BC63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_3601BC2BEC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_3601BC2BC63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_3601BC2BEC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20455 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataFile
DROP TABLE IF EXISTS `mailingDataFile`;
CREATE TABLE IF NOT EXISTS `mailingDataFile` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `header_id` bigint(20) DEFAULT NULL,
  `footer_id` bigint(20) DEFAULT NULL,
  `fileName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fileNameMm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `jobData_id` bigint(20) DEFAULT NULL,
  `discr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `totalRecords` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B9A40725517F52A2` (`jobData_id`),
  KEY `IDX_B9A407252EF91FD8` (`header_id`),
  KEY `IDX_B9A407252412A144` (`footer_id`),
  CONSTRAINT `FK_B9A407252412A144` FOREIGN KEY (`footer_id`) REFERENCES `mailingDataAvmedRecord` (`id`),
  CONSTRAINT `FK_B9A407252EF91FD8` FOREIGN KEY (`header_id`) REFERENCES `mailingDataAvmedRecord` (`id`),
  CONSTRAINT `FK_B9A40725517F52A2` FOREIGN KEY (`jobData_id`) REFERENCES `jobData` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30460 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataFPLEMM
DROP TABLE IF EXISTS `mailingDataFPLEMM`;
CREATE TABLE IF NOT EXISTS `mailingDataFPLEMM` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `jobId` int(11) NOT NULL DEFAULT '0',
  `originalFileName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fileName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sheets` int(11) NOT NULL DEFAULT '0',
  `date` varchar(21) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stitchedDate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `job_idx` (`jobId`),
  KEY `fullName_idx` (`fullName`),
  KEY `IDX_4EBAD153EC7793FC` (`mailingPrintReadyFile_id`),
  CONSTRAINT `FK_4EBAD153EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataFPLOnCall
DROP TABLE IF EXISTS `mailingDataFPLOnCall`;
CREATE TABLE IF NOT EXISTS `mailingDataFPLOnCall` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `NO_LTR` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CD_CUST_TYPE` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `accountNo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PREMAddrs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PREMCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PREMST` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PREMZip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `AC` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HS` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HP` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `WH` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PP` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PS` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contractor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postDate` datetime DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_21504E37C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_21504E37EC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_21504E37C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_21504E37EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=207842 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataHealthSunEOBWeeklyDenialIDN
DROP TABLE IF EXISTS `mailingDataHealthSunEOBWeeklyDenialIDN`;
CREATE TABLE IF NOT EXISTS `mailingDataHealthSunEOBWeeklyDenialIDN` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sourceFileName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documentDate` datetime DEFAULT NULL,
  `processDate` datetime DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `memberNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `claimId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_799EAECDC63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_799EAECDEC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_799EAECDC63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_799EAECDEC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48547 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataHealthSunIdCards
DROP TABLE IF EXISTS `mailingDataHealthSunIdCards`;
CREATE TABLE IF NOT EXISTS `mailingDataHealthSunIdCards` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `memberPBPID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `createdDate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `exportedDate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postmarkedDate` datetime DEFAULT NULL,
  `memberNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `effectiveDate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateOfBirth` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cityStateZIP` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `county` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `homePhone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rxGroup` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coverageType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `officeVisitCoPay` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eRCoPay` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `memberServicesPhone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tTYPhone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `carrierNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `planName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pBPNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `providerName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `providerNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `providerPhone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `defaultLanguage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `errorCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `errorDescription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_62EABF39C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_62EABF39EC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_62EABF39C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_62EABF39EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=433535 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataHealthSunMemberQuarterlyEOB
DROP TABLE IF EXISTS `mailingDataHealthSunMemberQuarterlyEOB`;
CREATE TABLE IF NOT EXISTS `mailingDataHealthSunMemberQuarterlyEOB` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sourceFileName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documentDate` datetime DEFAULT NULL,
  `processDate` datetime DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `memberNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `claimId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_383E8A1DC63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_383E8A1DEC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_383E8A1DC63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_383E8A1DEC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=322728 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataHealthSunPartDEOB
DROP TABLE IF EXISTS `mailingDataHealthSunPartDEOB`;
CREATE TABLE IF NOT EXISTS `mailingDataHealthSunPartDEOB` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sourceFileName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documentDate` datetime DEFAULT NULL,
  `processDate` datetime DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `languageType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `memberNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `claimId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DC61968EC63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_DC61968EEC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_DC61968EC63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_DC61968EEC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1209814 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataMattressMarshals
DROP TABLE IF EXISTS `mailingDataMattressMarshals`;
CREATE TABLE IF NOT EXISTS `mailingDataMattressMarshals` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documentDate` datetime DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `lastPage` int(11) DEFAULT NULL,
  `reprint` int(11) DEFAULT NULL,
  `serviceOrder` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D28021A2C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_D28021A2EC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_D28021A2C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_D28021A2EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1575 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataMyron
DROP TABLE IF EXISTS `mailingDataMyron`;
CREATE TABLE IF NOT EXISTS `mailingDataMyron` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `processDate` date DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F82BD3ECC63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_F82BD3ECEC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_F82BD3ECC63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_F82BD3ECEC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=639 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataOcwen
DROP TABLE IF EXISTS `mailingDataOcwen`;
CREATE TABLE IF NOT EXISTS `mailingDataOcwen` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billDate` date DEFAULT NULL,
  `accountNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_416B1D16C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_416B1D16EC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_416B1D16C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_416B1D16EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataPrincess
DROP TABLE IF EXISTS `mailingDataPrincess`;
CREATE TABLE IF NOT EXISTS `mailingDataPrincess` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `job` int(11) NOT NULL,
  `sailDate` date NOT NULL,
  `counter` int(11) NOT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companionF` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companionL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cabinNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `greeting` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expirationDate` date NOT NULL,
  `celebration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `voyageId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uniqueId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `offer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numCardsInHolder` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `disclaimer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `justBecause` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_99B0EFFFC63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_99B0EFFFEC7793FC` (`mailingPrintReadyFile_id`),
  CONSTRAINT `FK_99B0EFFFC63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_99B0EFFFEC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=374582 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataSolstice
DROP TABLE IF EXISTS `mailingDataSolstice`;
CREATE TABLE IF NOT EXISTS `mailingDataSolstice` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `pdfLocation` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `groupNo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `idCardReq` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `groupName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `altId` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ovrpPopLn` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `planName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `effectiveDate` date DEFAULT NULL,
  `processDate` date DEFAULT NULL,
  `kitCode` int(11) NOT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A349E6D0C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_A349E6D0EC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_A349E6D0C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_A349E6D0EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=261614 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataSolsticeInvoice
DROP TABLE IF EXISTS `mailingDataSolsticeInvoice`;
CREATE TABLE IF NOT EXISTS `mailingDataSolsticeInvoice` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `processDate` date DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3E3B59D1C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_3E3B59D1EC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_3E3B59D1C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_3E3B59D1EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18352 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingDataUniversalProperty
DROP TABLE IF EXISTS `mailingDataUniversalProperty`;
CREATE TABLE IF NOT EXISTS `mailingDataUniversalProperty` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmZipCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmReturnCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmDpv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmOrder` bigint(20) DEFAULT NULL,
  `mmCOAMoveToDate` datetime DEFAULT NULL,
  `mmCOAMoveType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `generic1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generic2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mmImbDigi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documentDate` datetime DEFAULT NULL,
  `seqNumber` int(11) DEFAULT NULL,
  `mailingDataFile_id` bigint(20) DEFAULT NULL,
  `mailingPrintReadyFile_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_59255DA9C63DB0B4` (`mailingDataFile_id`),
  KEY `IDX_59255DA9EC7793FC` (`mailingPrintReadyFile_id`),
  KEY `mmOrder_idx` (`mmOrder`),
  CONSTRAINT `FK_59255DA9C63DB0B4` FOREIGN KEY (`mailingDataFile_id`) REFERENCES `mailingDataFile` (`id`),
  CONSTRAINT `FK_59255DA9EC7793FC` FOREIGN KEY (`mailingPrintReadyFile_id`) REFERENCES `mailingPrintReadyFile` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mailingPrintReadyFile
DROP TABLE IF EXISTS `mailingPrintReadyFile`;
CREATE TABLE IF NOT EXISTS `mailingPrintReadyFile` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fileName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `jobData_id` bigint(20) DEFAULT NULL,
  `discr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pdfTotPages` int(11) DEFAULT NULL,
  `pdfTotalRecords` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6AB579BE517F52A2` (`jobData_id`),
  CONSTRAINT `FK_6AB579BE517F52A2` FOREIGN KEY (`jobData_id`) REFERENCES `jobData` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13906 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.MaintenanceData
DROP TABLE IF EXISTS `MaintenanceData`;
CREATE TABLE IF NOT EXISTS `MaintenanceData` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parentId` bigint(20) NOT NULL,
  `jobId` int(11) NOT NULL,
  `parentJobId` int(11) NOT NULL,
  `campaign` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `mailing` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `originalFileName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pdfFileName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `campaign_idx` (`campaign`),
  KEY `mailing_idx` (`mailing`),
  KEY `originalFileName_idx` (`originalFileName`),
  KEY `jobId_idx` (`jobId`),
  KEY `parentJobId_idx` (`parentJobId`)
) ENGINE=InnoDB AUTO_INCREMENT=149127 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mtrBundle
DROP TABLE IF EXISTS `mtrBundle`;
CREATE TABLE IF NOT EXISTS `mtrBundle` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sourceFile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deviceId` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edocJobId` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edocMailingGroupId` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edocPackageId` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edocSubmitterCrid` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `handlingEventType` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `handlingEventTypeDescription` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imb` varchar(31) COLLATE utf8_unicode_ci NOT NULL,
  `imbMid` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imbRoutingCode` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imbSerialNumber` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imbStid` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imbTrackingCode` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `machineName` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailClassDescription` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailShapeDescription` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parentContainerEdocContainerId` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parentTrayEdocContainerId` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `routingCodeImbMatchingPortion` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanDatetime` varchar(29) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanEventCode` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanFacilityCity` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanFacilityName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanFacilityState` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanFacilityZip` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanLocaleKey` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scannerType` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `imb_idx` (`imb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mtrContainer
DROP TABLE IF EXISTS `mtrContainer`;
CREATE TABLE IF NOT EXISTS `mtrContainer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sourceFile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `handlingEventType` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `handlingEventTypeDescription` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imcb` varchar(21) COLLATE utf8_unicode_ci NOT NULL,
  `imcbMid` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imcbSerialNumber` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailClassDescription` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailShapeDescription` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `arrDtm` varchar(29) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pieceCount` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanDatetime` varchar(29) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facAddr` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanFacilityCity` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanFacilityName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanFacilityState` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanFacilityZip` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanLocaleKey` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanState` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scannerType` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stcDate` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stcFacAddr` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stcFacCity` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stcFacLcleKey` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stcFacName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stcFacState` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stcFacZip` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trayCount` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `imcb_idx` (`imcb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mtrHandlingUnit
DROP TABLE IF EXISTS `mtrHandlingUnit`;
CREATE TABLE IF NOT EXISTS `mtrHandlingUnit` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sourceFile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appointmentId` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bundleCount` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edocContainerId` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edocCsaAgreementId` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edocCustomerGroupId` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edocJobId` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edocMailingGroupId` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edocParentContainerId` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edocSiblingContainerId` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edocSubmitterCrid` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edocUserLicenseCode` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `handlingEventType` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `handlingEventTypeDescription` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imtb` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `imtbCin` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imtbDestinationZip` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imtbMid` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imtbProcessingCode` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imtbSerialNumber` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailClassDescription` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailShapeDescription` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `arrDtm` varchar(29) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pieceCount` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanDatetime` varchar(29) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facAddr` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanFacilityCity` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanFacilityName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanFacilityState` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanFacilityZip` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanLocaleKey` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanState` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scannerType` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stcFacAddr` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stcFacCity` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stcFacLcleKey` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stcFacName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stcFacState` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stcFacZip` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `imtb_idx` (`imtb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.mtrPiece
DROP TABLE IF EXISTS `mtrPiece`;
CREATE TABLE IF NOT EXISTS `mtrPiece` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sourceFile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `edocJobId` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edocMailingGroupId` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edocSubmitterCrid` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `handlingEventType` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `handlingEventTypeDescription` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idTag` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imb` varchar(31) COLLATE utf8_unicode_ci NOT NULL,
  `imbMid` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imbRoutingCode` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imbSerialNumber` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imbStid` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imbTrackingCode` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ldeDeliveryMode` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ldeInventoryMethod` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ldeTriggerMethod` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `machineId` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `machineName` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailClassDescription` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailShapeDescription` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parentContainerEdocContainerId` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parentTrayEdocContainerId` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `predictedDeliveryDate` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `routingCodeImbMatchingPortion` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanDatetime` varchar(29) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanEventCode` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanFacilityCity` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanFacilityName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanFacilityState` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanFacilityZip` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scanLocaleKey` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scannerType` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `startTheClockDate` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `imb_idx` (`imb`)
) ENGINE=InnoDB AUTO_INCREMENT=136112 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table mailing_list.partData
DROP TABLE IF EXISTS `partData`;
CREATE TABLE IF NOT EXISTS `partData` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sourceFileName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `campaign` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `originalFileName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fileReceived` varchar(21) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filePrinted` varchar(21) COLLATE utf8_unicode_ci DEFAULT NULL,
  `memberId` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jobId` int(11) NOT NULL DEFAULT '0',
  `pdfFileName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sheetCount` int(11) NOT NULL DEFAULT '0',
  `stitchedDate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `checkedDate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `campaign_idx` (`campaign`),
  KEY `mailing_idx` (`mailing`),
  KEY `name_idx` (`name`),
  KEY `fileReceived_idx` (`fileReceived`)
) ENGINE=InnoDB AUTO_INCREMENT=703381 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
