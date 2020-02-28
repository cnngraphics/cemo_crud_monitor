<?php
		//For Handling Ajax Call and Exports
		ob_start();
		session_start();
		include('config/config.php');
		include('language/eng.php');
		include('libraries/functions.php');
		include_once('libraries/class_dbcon.php');
		include_once('libraries/upload_class.php');
		include_once('libraries/class_database.php');
        if (!get('hexport') and get('etype') != 'PDF') {
            include_once('libraries/system_users.php');
            $haccess = new admin_users_model();
            $acc = $haccess->UserAccess();
            if (get('view') and get('pg') == 'admin') {
                include(APP_FOLDER . '/controllers/admin/main.php');
                include('libraries/controllers/database.php');
                include('libraries/controllers/system_users.php');
            } else {
                //include(APP_FOLDER . '/controllers/public/main.php');
                include('libraries/controllers/database.php');
            }
        }else{
            include_once("libraries/dompdf/dompdf_config.inc.php");
            include('libraries/controllers/database.php');
            include(APP_FOLDER . '/controllers/admin/main.php');
        }
		ob_end_flush();
	
?>