<?php
/*
	HEZECOM PHP CODE GENERATOR ULTIMATE (UltimateSpeed)
	Author: Hezecom Technologies (http://hezecom.com) info@hezecom.net
	COPYRIGHT 2014 ALL RIGHTS RESERVED
	FILE NAME index.php 
	
	You must have purchased a valid license from CodeCanyon.com in order to have 
	access this file.

	You may only use this file according to the respective licensing terms 
	you agreed to when purchasing this item.
*/

	include('lib/config.php');
	include('lib/functions.php');
	include("lib/class_dbcon.php");
	$db=DB::getInstance();
	$fom="<?php htmlspecialchars(";$fom.="$";$fom.="_SERVER['PHP_SELF']);?>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hezecom PHP Code Generator Ultimate</title>
<link rel="stylesheet" href="CodeOutput/public/themes/default/css/bootstrap.min.css">
<link rel="stylesheet" href="CodeOutput/public/themes/default/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/admin.css">
<script type="text/javascript">
function SQLMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>

<body>


	<?php if(isset($_GET['cleared'])){?>
    <div class="heze-notify progress-bar-success"><p>All Generated Codes Were Deleted Successfully</p></div>
    
	<?php } elseif(isset($_GET['do'])){?>
	<div class="heze-notify progress-bar-success"><p>Database Settings Updated Successfully</p></div>
    <?php }?>
  
    <div id="hezewraper">
      <div class="navbar navbar-static-top navbar-fixed-top navbar-inverse">
          <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" id="showLeft" style="border:0;">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
      <a class="navbar-brand" href="index.php" style="color:#FFF;"> Hezecom PHP Code Generator Ultimate</a>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav pull-right">
      <li><a href="index.php" style="color:#FFF;">Generator</a></li>
      <li><a href="customsql.php" style="color:#FFF;">Show SQL</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#FFF;">View Code Output <b class="caret"></b></a>
        <ul class="dropdown-menu" style="background:#689CD7;">
          <li><a href="CodeOutput/admin.php" target="_blank">Admin Login</a></li>
          <li><a href="CodeOutput/index.php" target="_blank">Clients No Login</a></li>
        </ul>
      </li>
    </ul>
   </div><!--/.nav-collapse -->
</div>
      
    
     
<div id="hezewraper">    
<!-- BODY CONTENTS -->
<div class="heze-container">
<div class="container">

<div class="headbread">
 <div class="col-12">
  <h3><i class="fa fa-table"></i> SQL Documentation<small><br>
 NOTICE: You must have generated your main codes before doing this.</small></h3>
  </div>
</div>
<div class="row"> 
<div class="col-md-6">
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> PARENT TABLE</h3></div>
  <div class="panel-body">
   <p>
   <form action="customsql.php" method="post" name="form1" id="form1">
    <div class="form-group">
        <label class="control-label sr-only" for="tablename1">Select a Table to Start</label>
        <div class="input-group-addon left">Select a Table to See the SQL</div>
        <select name="tablename1" id="tablename1" class="form-control" onchange="SQLMenu('parent',this,0)">
        <option value="<?php if(get('tablename')) echo get('tablename');else echo''; ?>"><?php if(get('tablename')) echo get('tablename');else echo'Select Parent Table'; ?></option>
         <?php
	$sql = "SHOW TABLES";
	$n='';
    foreach ($db->query($sql) as $row)
        { 
	if(isset($n)) $n=$n++;
	
	$sqlk = "SHOW COLUMNS FROM ".$row[0]." WHERE Extra='AUTO_INCREMENT'";
	 foreach ($db->query($sqlk) as $rowk)
        {	
	$colname=$rowk[0];
	?>
    <option value="customsql.php?tablename=<?php echo $row[0];?>&keyname=<?php echo $colname;?>"><?php echo $row[0];?></option>
    <?php }}?>
     </select>
	</div>
   
     <input type="hidden" name="keyname" value="<?php echo get('keyname');?>"/>
    <input type="hidden" name="tablename" value="<?php echo get('tablename');?>" />
	<?php if(get('tablename') and get('keyname')){?>
    
    <div class="form-group">
    <div class="input-group-addon left">Current SQL For View.php (All Records).</div>
 <pre>HDB::hus()->Hselect("<?php echo get('tablename');?>");</pre>
   </div>
   
    <div class="form-group">
    <div class="input-group-addon left">Current SQL For View.php (Limited Records)</div>
    <pre>HDB::hus()->Hselect("<?php echo get('tablename');?> LIMIT {$startpg} , {$limit}");</pre>
   </div>
   
   <div class="form-group">
    <div class="input-group-addon left">Current SQL For Details.php (One Record)</div>
     <pre>$bind = array(":id" =>$id);
HDB::hus()->Hone("<?php echo get('tablename');?>","<?php echo get('keyname');?>=:id",$bind);</pre>
    </div>
     
    <div class="form-group">
    <div class="input-group-addon left">Current SQL For Delete</div>
     <pre> $bind = array(":id" =>$id);
HDB::hus()->Hdelete("<?php echo get('tablename');?>","<?php echo get('keyname');?>=:id",$bind);</pre>
    </div> 
    
     <div class="form-group">
    <div class="input-group-addon left">Current SQL For Insert</div>
     <pre>$values = array(array( 'val1'=>$val1,'val2'=>$val2));
HDB::hus()->Hinsert('<?php echo get('tablename');?>', $values);</pre>
    </div> 
    
     <div class="form-group">
    <div class="input-group-addon left">Current SQL For Update</div>
     <pre>$sql = "  val1 =:val1,val2 =:val2 WHERE id = :id ";
$data = array(':val1'=>$val1,':val2'=>$val2,':id'=>$id);
HDB::hus()->Hupdate('<?php echo get('tablename');?>',$sql,$data);</pre>
    </div> 
    
     <div class="form-group">
    <div class="input-group-addon left">Current SQL For Search</div>
     <pre>$bind = array(":svalue" =>"%$qstring%");
HDB::hus()->Hselect("<?php echo get('tablename');?>","$where LIKE :svalue LIMIT $limit",$bind);</pre>
    </div> 
   
   <?php }?>
 
    </form> 
   
    </p>
  </div>
</div>
 </div><!--/col-md-6-->
 <?php if(get('tablename') and get('keyname')){?>
 <div class="col-md-6">
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> SQL TABLE JOIN EXAMPLE SQL</h3></div>
  <div class="panel-body">
   <p>
  <strong> JOINING 2 TABLES</strong>
  <pre>
  HDB::hus()->Hselect(<strong>SELECT</strong>
    posts.*, posts_comments.*
<strong>FROM</strong>
    posts
    <strong>INNER JOIN</strong> posts_comments
     <strong>ON</strong> (posts.post_by = posts_comments.post_id))
  </pre>
  
  <strong> JOINING 4 TABLES</strong>
  <pre>
  HDB::hus()->Hselect(<strong>SELECT</strong> 
  `borrowed_materials`.*, `library_categories`.*, `library_resources`.*, `students_profile`.*
	<strong>FROM</strong> `borrowed_materials`
    <strong>INNER JOIN</strong> `library_categories` 
<strong>ON</strong> (`borrowed_materials`.`catid` = `library_categories`.`catid`)
    <strong>INNER JOIN</strong> `students_profile` 
<strong>ON</strong> (`borrowed_materials`.`borrowed_by` = `students_profile`.`st_id`)
    <strong>INNER JOIN</strong> `library_resources` 
<strong>ON</strong> (`library_resources`.`lid` = `borrowed_materials`.`lid`))
  </pre>
  <strong>CHECK THE SQL FILE FOR MORE AT:</strong><br>
	<a href="#">application/models/objects/<?php echo get('tablename');?>.php</a>
	</p>
  </div>
</div>
 </div><!--/col-md-6-->
 </div>
 
  <div class="col-12">
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> File to Update After the Custom SQL Generated</h3></div>
  <div class="panel-body">

   <div class="row">
   <div class="col-md-6">
   <strong>EDIT HTML HERE</strong><br>
  <a href="#">application/views/admin/<?php echo get('tablename');?>/View.php</a><br>
  <a href="#">application/views/admin/<?php echo get('tablename');?>/Details.php</a><br>
  <a href="#">application/views/admin/<?php echo get('tablename');?>/Export.php</a><br>
	<strong>THE SQL FILE:</strong><br>
	<a href="#">application/models/objects/<?php echo get('tablename');?>.php</a>
    </div>
    
     <div class="col-md-6">
   <strong>EDIT HTML ACCORDING TO YOUR TABLE WITH THIS FORMAT</strong><br>
   <pre> 
 	<td>&lt;?php echo $rows->system_username;?></td>
	<td>&lt;?php echo $rows->system_password;?></td>
	<td>&lt;?php echo $rows->full_name;?></td>
    </pre>
    </div>
	
  </div>
</div>
 </div><!--/col-md-6-->
 <?php }?>
  </div><!--contaner-->    
 </div><!--/heze-container-->       
</div><!--hezewraper-->
  

 <div id="footer" class="navbar-fixed-bottom">
      <div class="container">
        <p class="text-muted credit">&copy; 2015 <a href="http://hezecom.com">Hezecom Technologies</a></p>
      </div>
    </div>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.box.js"></script>
<script src="assets/js/hezecom.custom.js"></script>
    
  </body>
  </html>
