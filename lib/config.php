<?php
/*
HEZECOM TECH SOLUTIONS LTD
Author: Hezecom Technologies (http://hezecom.com) info@hezecom.com
COPYRIGHT 2020 ALL RIGHTS RESERVED
Configuration File

You must have purchased a valid license from Hezecom(CodeCanyon.com) in order to have
access this file.
        
You may only use this file according to the respective licensing terms
you agreed to when purchasing this item.
*/


$path=dirname(__FILE__);
$npath = str_replace('\\', '/', $path);
$npath= str_replace($_SERVER['DOCUMENT_ROOT'], '', $npath);
$absolutep= str_replace('config','',$npath);
$base = str_replace('config','',dirname(__FILE__).DIRECTORY_SEPARATOR.'/');
/*absolute path*/
$htspath = str_replace('\\', '/', dirname(__FILE__));
$htspath= str_replace(array('config'),'',$htspath);
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','pppppp');
define('DB_NAME','mailing_list');
define('DB_TYPE','mysql');
define('H_TITLE','CEMICRUD');
define('VIEW_DISPLAY','');
define('RECORD_PER_PAGE','20');
define('JQUERY_VALIDATE','required');
define('CLASS_TYPE','');
define('UPLOAD_TYPE','multipleimage');
define('EDITOR_TYPE','tinymce');
define('ADMIN_USERNAME','');
define('ADMIN_PASSWORD','');
define('BIG_IMAGE_WIDTH','800');

define('H_DIV','span12');

define('THUMB_IMAGE_WIDTH','150');

//File Upload Table
define('UPLOAD_TABLE','hfiles');
define('FILE_ID','fid');
define('RELATE_ID','relateid');
define('H_FILE','gfile');
define('H_DATE','gdate');

define('FORM_TEMPLATE','Grouped');
define('FORM_STYLE','styler');

define('FORMS_PROCESSING','Ajax');
define('PHP_VALIDATION','Enable');
define('PAGINATION_TYPE','Normal');

//Exemption for access
define('H_SYSTEM_ACCESS','');
define('H_USER_SESSION','');
?>