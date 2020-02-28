<?php
/*
* =======================================================================
* CLASSNAME:        class_database.php
* DATE CREATED:  	11-11-2013
* FOR TABLE:  		admin_users
* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
* =======================================================================
*/
if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');

class Hezdbmanager
{
    //EXPORT ALL TABLE
    function backup_tables($bdir,$tables = '*')
    {
        //$db=DB::getInstance();
        if($tables == '*')
        {
            $tables = array();
            $result = HDB::hus()->query('SHOW TABLES');
            $seter = $result->setFetchMode(PDO::FETCH_NUM);
            while($row = $result->fetch())
            {
                $tables[] = $row[0];
            }
        }
        else
        {
            $tables = is_array($tables) ? $tables : explode(',',$tables);
        }
        foreach($tables as $table)
        {
            $result = HDB::hus()->query('SELECT * FROM '.$table);
            $num_fields = $result->columnCount();
            $return.= 'DROP TABLE '.$table.';';
            $sq=HDB::hus()->query('SHOW CREATE TABLE '.$table);
            $se = $sq->setFetchMode(PDO::FETCH_NUM);
            $row2 = $sq->fetch();
            $return.= "\n\n".$row2[1].";\n\n";
            for ($i = 0; $i < $num_fields; $i++)
            {
                while($row = $result->fetch())
                {
                    $return.= 'INSERT INTO '.$table.' VALUES(';
                    for($j=0; $j<$num_fields; $j++)
                    {
                        $row[$j] = addslashes($row[$j]);
                        $row[$j] = mb_ereg_replace("\n","\\n",$row[$j]);
                        if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                        if ($j<($num_fields-1)) { $return.= ','; }
                    }
                    $return.= ");\n";
                }
            }
            $return.="\n\n\n";
        }
        //save file
        $handle = fopen($bdir.'/db-backup-'.date('Y-m-d').'.sql','w+');
        fwrite($handle,$return);
        fclose($handle);
    }

    public function DataInFileImportCSV($redirect_to)
    {
        /*$db=DB::getInstance();
        $sqlrows = $db->query("LOAD DATA INFILE 'file.txt'
    INTO TABLE ".$table." (column1, @dummy, column2, @dummy, column3); ");*/

    }

    // DB IMPORT CSV
    public function TableImportCSV($redirect_to)
    {
        if(post('button')){

            //$db=DB::getInstance();
            $table=post('tablename');
            $fileName=$_FILES['uploadfile']['name'];
            $csv_folder=H_BACKUP_DIR.'/';
            $file = $csv_folder.basename($fileName);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) {

                $csv_file = $csv_folder.$fileName;
                $handle = fopen($csv_file, 'r');

                while (($data = fgetcsv($handle, 20000, ",")) !== FALSE)
                {
                    $colname="";
                    $colvar="";
                    $n="";
                    $n.=-1;
                    $sqlrows = HDB::hus()->query("SHOW COLUMNS FROM ".$table."");
                    $outer=$sqlrows->fetchAll(PDO::FETCH_OBJ);
                    foreach ($outer as $cols)
                    {
                        $n++;
                        $coln=$cols->Field;

                        $colname.= $coln . ",";
                        $dbtrim=trim(str_replace("'","",$data[$n]));
                        $colvar.= "'$dbtrim'" . ",";
                    }
                    $fields = substr($colname,0,-1);  //label
                    $finsert = substr($colvar,0,-1);  //insert

                    $import=HDB::hus()->query("INSERT INTO $table ($fields) VALUES($finsert)");
                }
                fclose($handle);
                if(file_exists($csv_file)){unlink ($csv_file);}
                send_to($redirect_to);

            }
        }
    }

    //IMPORT GENERAL DATABASE
    function ImportSplitSQL($file, $delimiter = ';')
    {
        set_time_limit(0);
        $db=DB::getInstance();

        if (is_file($file) === true)
        {
            $file = fopen($file, 'r');

            if (is_resource($file) === true)
            {
                $query = array();

                while (feof($file) === false)
                {
                    $query[] = fgets($file);

                    if (preg_match('~' . preg_quote($delimiter, '~') . '\s*$~iS', end($query)) === 1)
                    {
                        $query = trim(implode('', $query));

                        if ($db->query($query) === false)
                        {
                            echo '<h3>An Error Has Occured While Importing Queries</h3>' . "\n";
                        }

                        /*                    else
                                            {
                                                echo '<h3>SUCCESS</h3>' . "\n";
                                            }
                        */
                        while (ob_get_level() > 0)
                        {
                            ob_end_flush();
                        }

                        flush();
                    }

                    if (is_string($query) === true)
                    {
                        $query = array();
                    }
                }

                return fclose($file);
            }
        }

        return false;
    }

//SET UP
    function ManageDB($bdir){
        $dir = opendir ($bdir.'./');
        while (false !== ($file = readdir($dir))) {
            if (strpos($file,'.sql',1)) {
                $date = substr($file, 9, 10);
                $time = substr($file, 20, 8);
                $filenameboth = str_replace('.sql', '', $file);
                $dowld = '<i class="fa fa-download"></i>';
                $dbdelete = '<i class="fa fa-trash-o"></i>';
                $dbrest = '<i class="fa fa-refresh"></i>';
                $dbimage = '<i class="fa fa-cloud-download"></i>';
                $mlink = ''.$_SERVER["PHP_SELF"].'?start=1&amp;fn='.urlencode($file).'&amp;foffset=0&amp;totalqueries=0';
                print("
    <div class='col-md-4' style='margin-top:10px; margin-left:-15px;'>
 	<div class='btn btn-large btn-default'>");
                print("  <span>".$dbimage."</span>" );
                print("  <span style='font-size:16px'>" . $filenameboth . "<br>" );
                print("<div class='btn-group'><a href='".$bdir."/" . $filenameboth . ".sql' target='_blank' class='btn btn-xs btn-success tip' title='".LANG_DOWNLOAD."'>".$dowld." ".LANG_DOWNLOAD."</a>");
                print("<a href='index.php?view=hezedata&do=database&dbrestore=".$file."'=' class='btn btn-xs btn-info tip' title='".LANG_RESTORE." ".$file."'>".$dbrest." ".LANG_RESTORE."</a>");
                print("<a href='index.php?view=hezedata&do=database&dbfile=" . $file . "' class='btn btn-xs btn-danger tip' title='".LANG_DELETE."' data-confirm='".LANG_DATABASE_DELETE_AUTH."'>".$dbdelete." ".LANG_DELETE."</a></div>");
                print("</div></div>");
            }
        }
    }

    //DELETE DB
    function deletebk($bdir,$file) {
        if (!is_dir($bdir.'/' . $file)) {
            unlink($bdir.'/' . $file);
        }
    }

    //EXPORT TO CSV
    public function ExportTable($table)
    {
        ob_start();
        //$db=DB::getInstance();

        $sql = HDB::hus()->prepare("SELECT * FROM ".$table."");
        $sql->execute();
        $row = $sql->rowCount();
        if ($row > 0){

            $filep = fopen('php://output', 'w');
            if ($filep) {
                $file = $table."_".date("Y-m-d_H-i",time()).'.csv';
                header("Content-Type: text/csv");
                header("Content-Disposition: attachment; filename=$file");
                header("Pragma: no-cache");
                header("Expires: 0");
                while ($rows = $sql->fetch(PDO::FETCH_NUM)) {
                    fputcsv($filep, $rows);
                }
                die;
            }
        }
        return ob_get_clean();
    }

}//class
?>