<?php
/*
	HEZECOM PHP CODE GENERATOR ULTIMATE (UltimateSpeed)
	Author: Hezecom Technologies (http://hezecom.com) info@hezecom.net
	COPYRIGHT 2014 ALL RIGHTS RESERVED
	FILE NAME functions.php 
	
	You must have purchased a valid license from CodeCanyon.com in order to have 
	access this file.

	You may only use this file according to the respective licensing terms 
	you agreed to when purchasing this item.
*/
if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
//post
function post($var)
{
    if (isset($_POST[$var]))
        return $_POST[$var];
}
//get
function get($var)
{
    if (isset($_GET[$var]))
        return $_GET[$var];
}
//send headers
function send_to($direction)
{
    if (!headers_sent()) {
        header('Location: ' . $direction);
        exit;
    } else
        print '<script type="text/javascript">';
    print 'window.location.href="' . $direction . '";';
    print '</script>';
    print '<noscript>';
    print '<meta http-equiv="refresh" content="0;url=' . $direction . '" />';
    print '</noscript>';
}
//msgs
function success_msg($dmsg){
    print('<div class="heze-notify progress-bar-success">
  <p>'.$dmsg.'</p>
  </div>
	');
}
function error_msg($dmsg){
    print('<div class="heze-notify progress-bar-danger">
  <p>'.$dmsg.'</p>
  </div>
	');
}

//TinyMCE editor
function HezecomEditor($txteditor){
    print('
<script>
tinymce.init({
    selector: "textarea.'.$txteditor.'",
    theme: "modern",
    width: "auto",
    height: 200,
    plugins: [
         "advlist autolink link image lists charmap  preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality   paste textcolor jbimages"
   ],
   toolbar: "styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink  jbimages | print preview ", 
  
		relative_urls: false
 }); 
</script>
	');
}

//File
function delete_files($folder){
    if(is_file($folder))
        unlink($folder);
}
//dir
function app_dir($folder=NULL){
    $base = str_replace($folder,'',dirname(__FILE__));
    return str_replace('\\','/',$base);
}

//paging
function pagination($query,$per_page = 10,$url=NULL,$page = 1){
    $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    $total = $query;
    $splitter = "2";
    $url1=$url."&page=";
    $page = ($page == 0 ? 1 : $page);
    $start = ($page - 1) * $per_page;

    $firstPage = 1;
    $prev = ($page == 1)? 1:$page - 1;

    $prev = $page - 1;
    $next = $page + 1;
    $lastpage = ceil($total/$per_page);
    $lpm1 = $lastpage - 1;
    $hezpaging = "";
    if($lastpage > 1)
    {
        $hezpaging .= "<ul class='hezpaging'>";
        $hezpaging .= "<li class='details'>".LANG_PAGE." $page of $lastpage</li>";

        if ($page == 1)
        {
            $hezpaging.= "<li><a class='current'>".LANG_FIRST."</a></li>";
            $hezpaging.= "<li><a class='current'>".LANG_PREVIOUS."</a></li>";
        }
        else
        {
            $hezpaging.= "<li><a href='".$url1."$firstPage'>".LANG_FIRST."</a></li>";
            $hezpaging.= "<li><a href='".$url1."$prev'>".LANG_PREVIOUS."</a></li>";
        }

        if ($lastpage < 7 + ($splitter * 2)){
            for ($counter = 1; $counter <= $lastpage; $counter++){
                if ($counter == $page)
                    $hezpaging.= "<li><a class='current'>$counter</a></li>";
                else
                    $hezpaging.= "<li><a href='".$url1."$counter'>$counter</a></li>";
            }}
        elseif($lastpage > 5 + ($splitter * 2)){
            if($page < 1 + ($splitter * 2)){
                for ($counter = 1; $counter < 4 + ($splitter * 2); $counter++){
                    if ($counter == $page)
                        $hezpaging.= "<li><a class='current'>$counter</a></li>";
                    else
                        $hezpaging.= "<li><a href='".$url1."$counter'>$counter</a></li>";
                }
                $hezpaging.= "<li class='dot'>...</li>";
                $hezpaging.= "<li><a href='".$url1."$lpm1'>$lpm1</a></li>";
                $hezpaging.= "<li><a href='".$url1."$lastpage'>$lastpage</a></li>";
            }
            elseif($lastpage - ($splitter * 2) > $page && $page > ($splitter * 2)){
                $hezpaging.= "<li><a href='".$url1."1'>1</a></li>";
                $hezpaging.= "<li><a href='".$url1."2'>2</a></li>";
                $hezpaging.= "<li class='dot'>...</li>";
                for ($counter = $page - $splitter; $counter <= $page + $splitter; $counter++){
                    if ($counter == $page)
                        $hezpaging.= "<li><a class='current'>$counter</a></li>";
                    else
                        $hezpaging.= "<li><a href='".$url1."$counter'>$counter</a></li>";
                }
                $hezpaging.= "<li class='dot'>..</li>";
                $hezpaging.= "<li><a href='".$url1."$lpm1'>$lpm1</a></li>";
                $hezpaging.= "<li><a href='".$url1."$lastpage'>$lastpage</a></li>";
            }else{
                $hezpaging.= "<li><a href='".$url1."1'>1</a></li>";
                $hezpaging.= "<li><a href='".$url1."2'>2</a></li>";
                $hezpaging.= "<li class='dot'>..</li>";
                for ($counter = $lastpage - (2 + ($splitter * 2)); $counter <= $lastpage; $counter++){
                    if ($counter == $page)
                        $hezpaging.= "<li><a class='current'>$counter</a></li>";
                    else
                        $hezpaging.= "<li><a href='".$url1."$counter'>$counter</a></li>";
                }}}
        if ($page < $counter - 1){
            $hezpaging.= "<li><a href='".$url1."$next'>".LANG_NEXT."</a></li>";
            $hezpaging.= "<li><a href='".$url1."$lastpage'>".LANG_LAST."</a></li>";
        }else{
            $hezpaging.= "<li><a class='current'>".LANG_NEXT."</a></li>";
            $hezpaging.= "<li><a class='current'>".LANG_NEXT."</a></li>";
        }
        $hezpaging.= "</ul>\n";
    }
    return $hezpaging;
}
function pageparam($limit){
    $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    return ($page * $limit) - $limit;
}

//Form Messages
function form_errors($errors){
    if(empty($errors) === false){
        echo '<div class="alert alert-danger">'.implode($errors).'</div>';
    }
}

//Password Hashing
function hezecom_crypt($password){
    $salt = '$2y$11$'.substr(md5(uniqid(rand(), true)), 0,22);
    return crypt($password, $salt);
}
//checker
function hezecom_verify($password, $hashedPwd) {
    return (crypt($password, $hashedPwd) == $hashedPwd);
}

//user position
function check_position($val){
    $result='';
    if($val==1){$result.='Administrator';}
    elseif($val==2){$result.='Users';}
    return $result;
}
//status
function check_status($val){
    $result='';
    if($val==1){$result.='<a class="btn btn-success btn-sm">Active</a>';}
    elseif($val==0){$result.='<a class="btn btn-danger btn-sm">Inactive</a>';}
    return $result;
}

//CSV EXPORT
/*
USAGE
DownloadSentHeaders('filename.csv');
echo SendRecord2CSV($array);
die();
*/
function SendRecord2CSV(array &$array)
{
    if (count($array) == 0) {
        return null;
    }
    ob_start();
    $hezfile = fopen("php://output", 'w');
    fputcsv($hezfile, array_keys(reset($array)));
    foreach ($array as $row) {
        fputcsv($hezfile, $row);
    }
    fclose($hezfile);
    return ob_get_clean();
}

function DownloadSentHeaders($filename) {
    // disable caching
    $now = gmdate("D, d M Y H:i:s");
    header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
    header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
    header("Last-Modified: {$now} GMT");
    // force download
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");
    // disposition / encoding on response body
    header("Content-Disposition: attachment;filename={$filename}");
    header("Content-Transfer-Encoding: binary");
}

//MESSAGES
function json_error($errors){
    die('<div class="alert alert-danger">'.$errors.'</div>');
}
function json_success($success){
    die('<div class="alert alert-success"><i class="fa fa-check-circle"></i> '.$success.'</div>');
}

function json_send($success){
    echo'<script>window.location.replace("'.$success.'");</script>';
}

//QUICK SEARCH
function AjaxSearchSuggest($url){
    $jss="
	<script>
	asearch.load();
	asearch.setOnLoadCallback(function()
	{
		// Fade out the suggestions box when not active
		 $('input').blur(function(){
			$('#suggestions').fadeOut();
		 });
	});";
    $jss.="
	function lookup(inputString) {
		if(inputString.length == 0) {
			$('#suggestions').fadeOut(); // Hide the suggestions box
	} else {
		
	$.post('".$url."', {qstring:";$jss.=' ""+inputString+""}, function(data) { 
		';$jss.="$('#suggestions').fadeIn();
		$('#suggestions').html(data);
			});
		}
	}
	</script>
    ";
    print($jss);
}
//pass generator
function Password_Generator($limit=6)
{
    $generator = "";
    for ($i = 0; $i < $limit; $i++) {
        $generator .= substr("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789", mt_rand(0, 63), 1);
    }
    return $generator;
}

//access level
function UserAccess()
{
    if(isset($_SESSION[H_USER_SESSION]))
        $id=$_SESSION[H_USER_SESSION];
    $stmt=HDB::hus()->prepare("SELECT * FROM ".H_SYSTEM_ACCESS." WHERE username=:id");
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
}

function SITEURL(){
    $url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'] : "http://".$_SERVER['SERVER_NAME'];
    return $url;
}

/*main url*/
function WebURL(){
    $hpath = dirname($_SERVER["PHP_SELF"]);
    $htspath= str_replace(array('libraries'),'',$hpath);
    if($htspath!='/'){
        return SITEURL().$htspath;
    }
    else{
        return SITEURL().str_replace('/','',$htspath);
    }
}

//pdf custom 1
function HezecomPDF($pfile,$html,$dwld=1,$orienation="landscape",$send='no'){
    $dompdf = new Dompdf();
    $dompdf->load_html($html);
    $dompdf->set_paper('A4', $orienation); // portrait | landscape
    $dompdf->render();
    $canvas = $dompdf->get_canvas();
    $font = Font_Metrics::get_font("DejaVuSans");
    $canvas->page_text(16, 800, "Page: {PAGE_NUM} of {PAGE_COUNT}", $font, 8, array(0,0,0));
    if($send=='no'){
        $dompdf->stream($pfile,array("Attachment"=>$dwld));
    }else{
        $pdf = $dompdf->output();
        file_put_contents($pfile,$pdf);
    }
}

//export to json
function Json_Export($result,$table)
{
    $json_file= $table.'_'.date('Y-m-d').'.json';
    header("Content-type: application/json");
    header("Content-Disposition: attachment; filename=$json_file");
    header("Pragma: no-cache");
    header("Expires: 0");
    print json_encode($result);
}

//report header printer
function HTSPrint(){
    print'<title>'.LANG_REPORT_SUB_TITLE.'</title>
	<script type="text/javascript">
	window.onload = function () {
		window.print();
	}
	</script>
	';
}
//report header msword
function MSWord($filename){
    header("Content-type: application/msword");
    header("Content-Disposition: attachment; filename=$filename");
    header("Pragma: no-cache");
    header("Expires: 0");
}
//report header msword
function MSExcell($filename){
    header("Content-type: application/msexcel");
    header("Content-Disposition: attachment; filename=$filename");
    header("Pragma: no-cache");
    header("Expires: 0");
}

function DownloadFile($file) {
    if(file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.basename($file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        set_time_limit(0);
        readfile($file);
        exit;
    }

}

/*date reconvert*/
function date_ymd($var)
{
    $date = new DateTime($var, new DateTimeZone(HTS_TIMEZONE));
    return $date->format("Y-m-d");
}
/*date reconvert*/
function date_dmy($var)
{
    $date = new DateTime($var, new DateTimeZone(HTS_TIMEZONE));
    return $date->format("d-m-Y");
}
/*reconvert date eng*/
function date_dmy2($var)
{
    $date = new DateTime($var, new DateTimeZone(HTS_TIMEZONE));
    return $date->format("d M Y");
}
/*date convert*/
function htsDate($format,$var=NULL)
{
    $date = new DateTime($var, new DateTimeZone(HTS_TIMEZONE));
    return $date->format($format);
}
/*add days time months*/
/*date convert*/
function htsDateAdd($format,$modify,$var=NULL)
{
    $date = new DateTime($var, new DateTimeZone(HTS_TIMEZONE));
    if(!empty($format) and !empty($modify)) {
        $date->modify($modify);
        return $date->format($format);
    }else{
        return false;
    }
}

/*diff btw dates*/
function dateDiff($date1,$date2){
    //$datediff = strtotime($date2) - strtotime($date1);
    $datediff = $date2-$date1;
    return floor($datediff/(60*60*24));
}

function DaysInDates($date1,$date2) {
    if(!empty($date1) and !empty($date2)) {
        return dateDiff(strtotime($date1), strtotime($date2));
    }else{
        return false;
    }
}

?>


