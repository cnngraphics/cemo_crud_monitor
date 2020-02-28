<?php
/*
	HEZECOM UltimateSpeed PHP CODE GENERATOR
	Author: Hezecom Technologies (http://hezecom.com) info@hezecom.net
	COPYRIGHT 2014-2015 ALL RIGHTS RESERVED
	FILE NAME interface_class.php 
	
	You must have purchased a valid license from CodeCanyon.com in order to have 
	access this file.

	You may only use this file according to the respective licensing terms 
	you agreed to when purchasing this item.
*/

	class Hezecom_Interface {
	
	function View_Interface($dfolder,$table,$primkey,$dpg,$dpgB){
	$db=DB::getInstance();	
	$storefileLink="";
	$sqlr = $db->query("SHOW COLUMNS FROM $table");
	$outr=$sqlr->fetchAll(PDO::FETCH_OBJ);
	foreach ($outr as $colink)
    {	
	$colname=$colink->Field;
	if(strpos($colink->Type,'varbinary') !== false){
	$storefileLink.="<?php echo "."$"."rows->$colname;?>";
	}}
	$stitle=str_replace('_',' ',$table);
	$dview= $this->credit_header('View.php',$table);
	
	$dview.="<?php AjaxSearchSuggest(''.H_ADMIN_MAIN.'&view=".$table."&do=autosearch');?>
	";
$dview.='
	<div class="row">
            <div class="col-xs-12">
              <div class="box">
              
               <div class="box-header with-border">
               <h3 class="box-title">'.ucwords($stitle).'</h3>
                <ul class="nav pull-right">

	<a href="<?php echo '.$dpg.';?>&view='.$table.'&do=add" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_ADD;?></a>
	<a href="<?php echo '.$dpgB.';?>&view='.$table.'&do=export&hexport=yes&etype=printer" target="_blank" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_PRINT;?>"><i class="fa fa-print"></i> <?php echo LANG_PRINT;?></a>
	<a href="<?php echo '.$dpgB.';?>&view='.$table.'&do=export&hexport=yes&etype=excel" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_EXCEL;?>"><i class="fa fa-table"></i> <?php echo LANG_EXCEL;?></a>
	<a href="<?php echo '.$dpgB.';?>&view='.$table.'&do=export&hexport=yes&etype=word" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_WORD;?>"><i class="fa fa-file-o"></i> <?php echo LANG_WORD;?></a>
	<a href="<?php echo '.$dpgB.';?>&view='.$table.'&do=export&hexport=yes&etype=PDF" target="_blank" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_PDF;?>"><i class="fa fa-file"></i> <?php echo LANG_PDF;?></a>
	<a href="<?php echo '.$dpgB.';?>&view=hezedata&hexport='.$table.'" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_CSV_EXPORT;?>"><i class="fa fa-list-alt"></i> <?php echo LANG_CSV;?></a>
	<a href="<?php echo '.$dpg.';?>&view='.$table.'&do=truncate" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_TRUNCATE;?>" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_TRUNCATE;?></a>
	</ul>
	
	 </div><!-- /.box-header -->
   <div class="box-body">
   
   <!--AUTO COMPLETE-->
  <div class="col-md-3 autosearch">
    <div class=" s-absolute">
            <div class="input-group">
              <input type="text" class="form-control input-sm styler" id="inputString" onkeyup="lookup(this.value);"  placeholder="search" autocomplete="off">
              <span class="input-group-btn">
                <button class="btn btn-default btn-sm" type="button"><span class="fa fa-search"></span></button>
              </span>
            </div><!-- /input-group -->
            <div id="suggestions"></div>
      </div>
      </div><!--/col-lg-3--> 
	 <!--/AUTO COMPLETE-->
	 
	<table data-page="false" class="table table-bordered table-hover table-striped" data-filter="#filter" data-page-size="<?php echo RECORD_PER_PAGE;?>" data-page-previous-text="<?php echo LANG_PREVIOUS;?>" data-page-next-text="<?php echo LANG_NEXT;?>">
	<thead>
    <tr>';
	$sql = "SHOW COLUMNS FROM $table WHERE TYPE NOT LIKE 'text' ";
	foreach ($db->query($sql) as $row)
    {	
	$record[] = $row[0];
	}
	$num='';
	$output = array_slice($record, 0,VIEW_DISPLAY);   
	foreach($output as $row[0])
			{
	$num++;
	$colname=$row[0];
	if($colname!=$primkey){
	$rname=str_replace('_',' ',$colname);
	
	if($num>2){	
	$dview.='<th data-hide="phone,tablet">'.ucwords($rname).'</th>
	  ';
	}else{
	$dview.='
      <th>'.ucwords($rname).'</th>
	  ';	
	}
	}
	}
	$dview.='<th data-sort-ignore="true"><?php echo LANG_ACTIONS;?></th>
	';
  $dview.='</tr>
  </thead>
  <tbody>
  ';
  
  $dview.="
   <?php
	";
	$dview.="foreach(";$dview.="$";$dview.="result as ";$dview.="$";$dview.="rows)
			{
	?>
	";
 	$dview.="<tr>
	";
	$sqlrows = $db->query("SHOW COLUMNS FROM $table WHERE TYPE NOT LIKE 'text'");
	$outer=$sqlrows->fetchAll(PDO::FETCH_OBJ);
	$outputB = array_slice($outer, 0,VIEW_DISPLAY);   
	foreach ($outputB as $cols)
    {
	$colname=$cols->Field;
	if($colname!=$primkey){
	if(strpos($cols->Type,'varbinary') !== false){
	if(UPLOAD_TYPE=='imgonly'){
	$dview.="<td <div class='gallery'><?php if(is_file(UPLOAD_FOLDER."."$"."rows->".$colname.")){?><a href='<?php echo UPLOAD_FOLDER."."$"."rows->$colname;?>' data-rel='hezebox'><img src='<?php echo THUMB_FOLDER."."$"."rows->$colname;?>'></a><?php }?></td>
	";
	$storefile.=$colname;
	}elseif(UPLOAD_TYPE=='fileonly'){
	$dview.="<td><?php if(is_file(UPLOAD_FOLDER."."$"."rows->".$colname.")){?><a href='<?php echo UPLOAD_FOLDER."."$"."rows->$colname;?>'><?php echo "."$"."rows->$colname;?></a><?php }?></td>
	";
	}elseif(UPLOAD_TYPE=='multiplefile' or UPLOAD_TYPE=='multipleimage'){
	$dview.="<td align='center'><?php echo LANG_PREVIEW;?></td> 
	";
	}
	}else{	
	$dview.="<td><?php echo "."$"."rows->$colname;?></td>
	";
	}
	}}
	$getc1='do=details';
	$getc2='do=update';
	if($storefileLink!=''){
	$getc3="do=delete&dfile=$storefileLink";
	}else{
	$getc3='do=delete';
	}
	$getdo='view='.$table;
	 $dview.='<td class="table-actions">
	 <div class="btn-group">
	 <a href="<?php echo '.$dpg.';?>&'.$getdo.'&'.$primkey.'=<?php echo ';$dview.='$';$dview.='rows->'.$primkey.';?>&'.$getc1.'"  class="btn btn-info btn-xs"><span class="fa fa-search-plus tip" title="<?php echo LANG_TIP_DETAILS;?>"></span></a>
	';
    $dview.='<a href="<?php echo '.$dpg.';?>&'.$getdo.'&'.$primkey.'=<?php echo ';$dview.='$';$dview.='rows->'.$primkey.';?>&'.$getc2.'" class="btn btn-primary btn-xs"><span class="fa fa-edit tip" title="<?php echo LANG_TIP_UPDATE;?>"></span></a>
	';
     $dview.=' <a href="<?php echo '.$dpg.';?>&'.$getdo.'&'.$primkey.'=<?php echo ';$dview.='$';$dview.='rows->'.$primkey.';?>&'.$getc3.'" class="btn btn-danger btn-xs" data-confirm="<?php echo LANG_DELETE_AUTH;?>"> <span class="fa fa-times tip" title="<?php echo LANG_TIP_DELETE;?>"></span></a>
	 </div>
	 </td>
    </tr>
	';
	
    $dview.='<?php }?>
  </tbody>
  <tfoot>
    <tr>
    <td colspan="'.VIEW_DISPLAY.'">
    <div class="pagination"><?php echo '.'$'.'paging;?></div>
    </td>
    </tr>
</tfoot>
</table>
  </div><!-- /.box-body -->
  </div><!-- /.box -->
  </div><!-- /.col -->
  </div><!-- /.row -->';
return $dview;
	}
	

	//EXPORT
	function Export_Interface($dfolder,$table,$primkey,$dpg){
	$db=DB::getInstance();
	//$excelprint= $this->credit_header('Export.php',$table);
	$excelprint="<?php
	";
	$excelprint.='$';$excelprint.='etype=';$excelprint.="get('etype');
	";
	$lang1="'.LANG_REPORT_TITLE.'";
	$lang2="'.LANG_REPORT_SUB_TITLE.'";
	$lang3="'.LANG_REPORT_TABLE.'";
	$close="'";
	$ptitle=str_replace('_',' ',$table);
	$excelprint.="$";$excelprint.="excel=";$excelprint.="'";$excelprint.='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.$lang1.'</strong><br>'.$lang2.'<br>
	<strong>'.$lang3.'</strong> '.ucwords($ptitle).'</p>'.$close.';
	';
	//start table
	$excelprint.="$";$excelprint.="excel.=";$excelprint.="'";$excelprint.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>';
	$sql = "SHOW COLUMNS FROM $table";
	foreach ($db->query($sql) as $row)
    {	
	$colname=$row[0];
	if($colname!=$primkey){
	$rname=str_replace('_',' ',$colname);
		
	$excelprint.='
      <th>'.ucwords($rname).'</th>';
	}}
  $excelprint.='
  </tr>
  ';
  $excelprint.="';";
  $excelprint.="
	";
	$excelprint.="foreach(";$excelprint.="$";$excelprint.="result as ";$excelprint.="$";$excelprint.="rows)
			{
	";
	$excelprint.="$";$excelprint.="excel.='";
 	$excelprint.="<tr>
	";
	
	$sql = "SHOW COLUMNS FROM $table;";
	foreach ($db->query($sql) as $row)
    {	
	$colname=$row[0];
	if($colname!=$primkey){
    $excelprint.="<td>'.";$excelprint.="$";$excelprint.="rows->".$colname.".'</td>
	";
	}}
	
    $excelprint.="</tr>';
	}
	";
	$excelprint.="$";$excelprint.="excel.=";$excelprint.="'";$excelprint.='</table>';
	$excelprint.="';
	";
	//End Table
	
	$excelprint.='$';$excelprint.="filename1= ";$excelprint.="'".$table."_'.date('Y-m-d').'.doc';
	";
	$excelprint.='$';$excelprint.="filename2= ";$excelprint.="'".$table."_'.date('Y-m-d').'.xls';
	";
	$excelprint.='$';$excelprint.="pdf_output= ";$excelprint.="'".$table."_'.date('Y-m-d').'.pdf';
	
	";
 	//word
        $excelprint.='if (';$excelprint.="$"."etype == 'word') 
    {";
        $excelprint.="
        MSWord("."$"."filename1);
        print "."$"."excel;
    }
    ";
        //excel
        $excelprint.='elseif (';$excelprint.="$"."etype == 'excel') 
    {";
        $excelprint.="
        MSExcell("."$"."filename2);
        print "."$"."excel;
    }
    ";
        //print
        $excelprint.='elseif (';$excelprint.="$"."etype == 'printer') 
    {";
        $excelprint.="
        HTSPrint();
        print "."$"."excel;
    }
    ";

        //pdf
        $excelprint.='elseif (';$excelprint.="$"."etype == 'PDF') 
    {";
        $excelprint.="
        HezecomPDF("."$"."pdf_output,"."$"."excel,1);
        print "."$"."excel;
    }
    ";

        $excelprint.='
	?>';

	
	return $excelprint;
	}
	

	//DETAILS////////////
	function Details_Interface($dfolder,$table,$primkey,$dpg,$dpgB){
	$db=DB::getInstance();
	$storefileLink="";
	
	if(UPLOAD_TYPE=='imgonly' or UPLOAD_TYPE=='multipleimage'){
		$hezebox='hezebox';
	}else{
		$hezebox='';	
	}
	
	$sqlr = $db->query("SHOW COLUMNS FROM $table");
	$outr=$sqlr->fetchAll(PDO::FETCH_OBJ);
	$ptitle=str_replace('_',' ',$table);
	
	$ddetail= $this->credit_header('Details.php',$table);
		$ddetail.='
	<div class="row">
    <div class="col-xs-12">
    <div class="box">
    <div class="box-header">
    <h3 class="box-title">'.ucwords($ptitle).'</h3>
   <ul class="nav pull-right">
				
	<a href="<?php echo '.$dpg.';?>&view='.$table.'&do=viewall" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	
	<a href="<?php echo '.$dpg.';?>&view='.$table.'&do=add" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_ADD;?></a>
	
	<a href="<?php echo '.$dpg.';?>&view='.$table.'&'.$primkey.'=<?php echo '.'$'.'rows->'.$primkey.';?>&do=update" title="<?php echo LANG_TIP_UPDATE;?> Record" class="btn btn-default btn-xs tip"><i class="fa fa-edit"></i> <?php echo LANG_UPDATE;?></a>
	
	<a href="<?php echo '.$dpgB.';?>&view='.$table.'&'.$primkey.'=<?php echo '.'$'.'rows->'.$primkey.';?>&do=export2&hexport=yes&etype=PDF" title="<?php echo LANG_TIP_PDF;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-file"></i> <?php echo LANG_PDF;?></a>
	
	<a href="<?php echo '.$dpgB.';?>&view='.$table.'&'.$primkey.'=<?php echo '.'$'.'rows->'.$primkey.';?>&do=export2&hexport=yes&etype=word" title="<?php echo LANG_TIP_WORD;?>" class="btn btn-default btn-xs tip"><i class="fa fa-file-o"></i> <?php echo LANG_WORD;?></a>
	
	<a href="<?php echo '.$dpgB.';?>&view='.$table.'&'.$primkey.'=<?php echo '.'$'.'rows->'.$primkey.';?>&do=export2&hexport=yes&etype=printer" title="<?php echo LANG_TIP_PRINT;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-print"></i> <?php echo LANG_PRINT;?></a>
	
	<a href="<?php echo '.$dpg.';?>&view='.$table.'&'.$primkey.'=<?php echo '.'$'.'rows->'.$primkey.';?>&do=delete&dfile='.$storefileLink.'" title="<?php echo LANG_TIP_DELETE_ALL;?>" class="btn btn-default btn-xs tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	</ul>
	
	 </div><!-- /.box-header -->
   <div class="box-body">';
	
	$ddetail.='
	<table data-page="false" class="table table-striped table-bordered">
	 <tbody>
		  ';
	foreach ($outr as $colss)
    {	
	$colname=$colss->Field;
	$mtitle=str_replace('_',' ',$colname);
	if($colname!=$primkey){
	if(strpos($colss->Type,'varbinary') !== false){
	if(UPLOAD_TYPE=='imgonly'){
	
	$ddetail.='	
	<tr>
	<th>'.ucwords($mtitle).'</th>';
	$ddetail.="<td class='gallery'><?php if(is_file(UPLOAD_FOLDER."."$"."rows->".$colname.")){?><a href='<?php echo UPLOAD_FOLDER."."$"."rows->$colname;?>' data-rel='hezebox'><img src='<?php echo THUMB_FOLDER."."$"."rows->$colname;?>'></a><?php }?></td>
	</tr>
	";
	}elseif(UPLOAD_TYPE=='fileonly'){
	$ddetail.='	
	<tr>
	<th>'.ucwords($mtitle).'</th>';
	$ddetail.="<td><?php if(is_file(UPLOAD_FOLDER."."$"."rows->".$colname.")){?><a href='<?php echo UPLOAD_FOLDER."."$"."rows->$colname;?>'><?php echo "."$"."rows->$colname;?></a><?php }?></td>
	</tr>
	";
	}
	elseif(strpos(UPLOAD_TYPE,'multiple') !== false){
	$ddetail.='	
	<tr>
	<td colspan="2">'.ucwords($mtitle).'</td>
	</tr>';
	 
	$ddetail.='<tr>
	<td colspan="2">
    <div class="row">
    <div class="col-lg-12 gallery">
	<?php';
   $ddetail.=" foreach("."$"."upld as "."$"."frows)
			{
	if(strlen("."$"."frows->gfile)>1){
	?>";
	$ddetail.='
    <div class="col-md-2" style="padding-top:10px;">';
	if(UPLOAD_TYPE=='multipleimage'){
	$ddetail.="
	<a href='<?php echo UPLOAD_FOLDER."."$"."frows->".H_FILE.";?>' data-rel='".$hezebox."'><img src='<?php echo THUMB_FOLDER."."$"."frows->".H_FILE.";?>' class='img-responsive img-thumbnail'></a>";
	}else{
		$ddetail.="
	<a href='<?php echo UPLOAD_FOLDER."."$"."frows->".H_FILE.";?>' class='btn btn-success btn-xs' data-rel='".$hezebox."'><?php echo"."$"."frows->".H_FILE.";?></a> ";
	}
    $ddetail.="
	<a href='<?php echo ".$dpg.";?>&view=".$table."&".$primkey."=<?php echo get('".$primkey."');?>&".FILE_ID."=<?php echo "."$"."frows->".FILE_ID.";?>&do=delete&onedel=del&dfile=<?php echo "."$"."frows->".H_FILE.";?>' title='<?php echo LANG_TIP_DELETE;?>' class='btn btn-xs btn-danger tip' data-confirm='<?php echo LANG_DELETE_AUTH;?>'>
    <span class='fa fa-times'></span> <?php echo LANG_REMOVE;?></a>
     </div>	
    <?php }}?>
    </div></div>
    </td>
	</tr>
	";
	}
	}else{
	$ddetail.='	
	<tr>
	<th>'.ucwords($mtitle).'</th>';	
	$ddetail.="<td><?php echo "."$"."rows->$colname;?></td>
	</tr>
	";
	
	}
	}}
	
	$ddetail.='</tbody>
	</table>
	 </div><!-- /.box-body -->
  </div><!-- /.box -->
  </div><!-- /.col -->
  </div><!-- /.row -->
	';
	return $ddetail;
	}
	
	//Menu
	function Menu_Interface($dfolder,$dpg){
	$db=DB::getInstance();
	$sqlm = "SHOW TABLES";
    foreach ($db->query($sqlm) as $rowm)
    {
	$recordm[] = $rowm[0];
	}
	$listmenu ='';
	foreach($recordm as $keym => $valuem[0])
	{
	if($valuem[0]!=H_SYSTEM_ACCESS){
	if($valuem[0]!=UPLOAD_TABLE){
	$mtitle=str_replace('_',' ',$valuem[0]);
	$listmenu .= '<li><a href="<?php echo '.$dpg.';?>&view='.$valuem[0].'&do=viewall"><i class="fa fa-th"></i> <span>'.ucwords($mtitle).'</span> <i class="fa fa-angle-left pull-right"></i></a></li>'."\n";

	}
	}}
	return $listmenu;
	}
	
	//DASHBOARD
	function Dashboard_Interface($dpg,$dfolder=NULL){
	$db=DB::getInstance();
	$sqlm = "SHOW TABLES";
    foreach ($db->query($sqlm) as $rowm)
    {
	$recordm[] = $rowm[0];
	}
	$dashboard ='';
	$dashboard.='<div class="row">';
	
	foreach($recordm as $keym => $valuem[0])
	{
	if($valuem[0]!=H_SYSTEM_ACCESS){
	if($valuem[0]!=UPLOAD_TABLE){
	$mtitle=str_replace('_',' ',$valuem[0]);
	$dashboard .= ' <!-- Info boxes -->
            <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="<?php echo '.$dpg.';?>&view='.$valuem[0].'&do=viewall" style="color:#333;">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-circle-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">'.ucwords($mtitle).'</span>
                  <span class="info-box-number"><?php echo HDB::hus()->Hcount("'.$valuem[0].'");?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              </a>
            </div><!-- /.col -->';
			}}}
    $dashboard.='
	</div><!-- /.row -->       
          <div class="row">
            <div class="col-md-12">
              <!-- Bar chart -->
              <div class="box box-primary">
                <div class="box-header">
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">

                    </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>

                  <i class="fa fa-bar-chart-o"></i>
                  <h3 class="box-title">Database Statistics</h3>
                </div>
                <div class="box-body">
                  <div id="bar-chart" style="height: 300px;"></div>
                </div><!-- /.box-body-->
              </div><!-- /.box -->
              </div>
          </div><!-- /.row -->
          
    <!-- FLOT CHARTS -->
    <script src="<?php echo H_THEME;?>/js/flot/jquery.flot.min.js" type="text/javascript"></script>
    <script src="<?php echo H_THEME;?>/js/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="<?php echo H_THEME;?>/js/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
    <script src="<?php echo H_THEME;?>/js/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
          
      <script type="text/javascript">
      $(function () {
        var bar_data = {
          data: [';
	$chart_data='';
	foreach($recordm as $keym => $valuem[0])
	{
	if($valuem[0]!=H_SYSTEM_ACCESS){
	if($valuem[0]!=UPLOAD_TABLE){
	$mtitle=str_replace('_',' ',$valuem[0]);
	$chart_data.='["'.ucwords($mtitle).'", <?php echo HDB::hus()->Hcount("'.$valuem[0].'");?>],';
	}}}
	$dashboard.=substr($chart_data,0,-1);
	
		  $dashboard.='],
          color: "#3c8dbc"
        };
        $.plot("#bar-chart", [bar_data], {
          grid: {
            borderWidth: 1,
            borderColor: "#f3f3f3",
            tickColor: "#f3f3f3"
          },
          series: {
            bars: {
              show: true,
			  fill: true,
			  color: "#3c8dbc",
              barWidth: 0.5,
              align: "center",
            }
          },
          xaxis: {
            mode: "categories",
            tickLength: 0
          }
        });
      });

    </script>'."\n";
	return $dashboard;
	}
	
	//EXPORT DETAILS
	function Export_Details_Interface($dfolder,$table,$primkey,$dpg){
	$db=DB::getInstance();
	//$excelprint2= $this->credit_header('Export2.php',$table);
	$excelprint2="<?php
	";
	$excelprint2.='$';$excelprint2.='etype=';$excelprint2.="get('etype');
	";
	$lang1="'.LANG_REPORT_TITLE.'";
	$lang2="'.LANG_REPORT_SUB_TITLE.'";
	$lang3="'.LANG_REPORT_TABLE.'";
	$close="'";
	$ptitle=str_replace('_',' ',$table);
	$excelprint2.="$";$excelprint2.="excel=";$excelprint2.="'";$excelprint2.='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.$lang1.'</strong><br>'.$lang2.'<br>
	<strong>'.$lang3.'</strong> '.ucwords($ptitle).'</p>'.$close.';
	';
	//start table
	$excelprint2.="$";$excelprint2.="excel.=";$excelprint2.="'";$excelprint2.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">';
	
	$sql = "SHOW COLUMNS FROM $table";
	foreach ($db->query($sql) as $row)
    {	
	$colname=$row[0];
	if($colname!=$primkey){
	$rname=str_replace('_',' ',$colname);
		
	$excelprint2.='
    <tr>
	<td>'.ucwords($rname).'</td>';
	$excelprint2.="
	<td>'.";$excelprint2.="$";$excelprint2.="rows->".$colname.".'</td>";
  	$excelprint2.="
  	</tr>";}}
   $excelprint2.="';
   ";

	$excelprint2.="$";$excelprint2.="excel.=";$excelprint2.="'";$excelprint2.='</table>';
	$excelprint2.="';
	
	";
	//End Table
	
	$excelprint2.='$';$excelprint2.="filename1= ";$excelprint2.="'".$table."_'.date('Y-m-d').'.doc';
	";
	$excelprint2.='$';$excelprint2.="filename2= ";$excelprint2.="'".$table."_'.date('Y-m-d').'.xls';
	";
	$excelprint2.='$';$excelprint2.="pdf_output= ";$excelprint2.="'".$table."_'.date('Y-m-d').'.pdf';
	";
        //word
        $excelprint2.='if (';$excelprint2.="$"."etype == 'word') 
    {";
        $excelprint2.="
        MSWord("."$"."filename1);
        print "."$"."excel;
    }
    ";
        //excel
        $excelprint2.='elseif (';$excelprint2.="$"."etype == 'excel') 
    {";
        $excelprint2.="
        MSExcell("."$"."filename2);
        print "."$"."excel;
    }
    ";
        //print
        $excelprint2.='elseif (';$excelprint2.="$"."etype == 'printer') 
    {";
        $excelprint2.="
        HTSPrint();
        print "."$"."excel;
    }
    ";

        //pdf
        $excelprint2.='elseif (';$excelprint2.="$"."etype == 'PDF') 
    {";
        $excelprint2.="
        HezecomPDF("."$"."pdf_output,"."$"."excel,1);
        print "."$"."excel;
    }
    ?>
    ";

        return $excelprint2;
	}
	
	function credit_header($filen,$table){
	return"
	<?php
	/*
	* =======================================================================
	* FILE NAME:        $filen
	* DATE CREATED:  	".date('d-m-Y')."
	* FOR TABLE:  		$table
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.com
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	";	
	}
	
	}//class
	?>
