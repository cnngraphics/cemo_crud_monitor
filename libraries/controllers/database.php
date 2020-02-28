<?php
/*
HEZECOM PHP CODE GENERATOR ULTIMATE (UltimateSpeed)
Author: Hezecom Technologies (http://hezecom.com) info@hezecom.net
COPYRIGHT 2014 ALL RIGHTS RESERVED
FILE NAME database.php

You must have purchased a valid license from CodeCanyon.com in order to have
access this file.

You may only use this file according to the respective licensing terms
you agreed to when purchasing this item.
*/
if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');


$dbm = new Hezdbmanager();

if (get('view')=='hezedata')
{
    //Import CSV
    $dbm->TableImportCSV(''.H_ADMIN.'&view=hezedata&do=database&msg=importer');

    //Create Backup
    if(get('dbm')){
        $dbm->backup_tables(H_BACKUP_DIR);
        send_to(''.H_ADMIN.'&view=hezedata&do=database&msg=backup');
    }
    //Delete Backup
    elseif(get('dbfile')){
        $dbm->deletebk(H_BACKUP_DIR,get('dbfile'));
        send_to(''.H_ADMIN.'&view=hezedata&do=database&msg=Delete');
    }
    //Restore DB
    elseif(get('dbrestore')){
        $dbm->ImportSplitSQL(H_BACKUP_DIR.'/'.get('dbrestore'));
        send_to(''.H_ADMIN.'&view=hezedata&do=database&msg=Restore');
    }
    //Export CSV
    elseif(get('hexport')){
        $dbm->ExportTable(get('hexport'));
        send_to(''.H_ADMIN.'&view='.get('hexport').'&do=viewall&msg=Export');
    }
    include 'libraries/views/admin/database.php';
}


?>