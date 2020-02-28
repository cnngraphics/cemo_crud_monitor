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

define('PAGINATION_TYPE','Normal');//Normal|Jquery

define('RECORD_PER_PAGE','20');

define('BIG_IMAGE_WIDTH','800');
define('THUMB_IMAGE_WIDTH','150');

//Admin Login Info
define('ADMIN_USERNAME','');
define('ADMIN_PASSWORD','');

//Upload Directory
define('UPLOAD_FOLDER','public/uploads/');
define('THUMB_FOLDER','public/uploads/thumbs/');
define('UPLOAD_PATH',$htspath.UPLOAD_FOLDER);
define('THUMB_PATH',$htspath.THUMB_FOLDER);
define('NO_IMAGE','public/themes/default/images/user_avatar.png');

define('VALID_DIR',1);
define('APP_PATH',$htspath);
define('APP_FOLDER',APP_PATH.'application');
define('DEFAULT_THEME','public/themes/default');
define('H_THEME',DEFAULT_THEME);
define('H_ADMIN','admin.php?pg=admin');
define('H_LOGIN','admin.php?pg=login');
define('H_LOSTPASSWORD','admin.php?pg=lost');
define('H_REGISTER','admin.php?pg=register');
define('H_CLIENT','index.php?pg=public');
define('H_ADMIN_MAIN','main.php?pg=admin');
define('H_CLIENT_MAIN','main.php?pg=public');

//Backup Dir 
define('H_BACKUP_DIR','public/backups/');
define('H_EDITOR_FILES',$absolutep.'public/uploads/editor');

//Multiple File Upload
define('UPLOAD_TABLE','hfiles');
define('FILE_ID','fid');
define('RELATE_ID','relateid');
define('H_FILE','gfile');
define('H_DATE','gdate');

//System Access
define('H_SYSTEM_ACCESS','user_access');
define('H_USER_SESSION','sessionname');
?>