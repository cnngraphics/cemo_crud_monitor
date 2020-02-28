<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedeobrecord</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>Parent Id</td>
	<td>'.$rows->parent_id.'</td>
  	</tr>
    <tr>
	<td>Page</td>
	<td>'.$rows->page.'</td>
  	</tr>
    <tr>
	<td>PageData</td>
	<td>'.$rows->pageData.'</td>
  	</tr>
    <tr>
	<td>PageDataAcc</td>
	<td>'.$rows->pageDataAcc.'</td>
  	</tr>
    <tr>
	<td>PageDataHeader</td>
	<td>'.$rows->pageDataHeader.'</td>
  	</tr>
    <tr>
	<td>PageDate</td>
	<td>'.$rows->pageDate.'</td>
  	</tr>
    <tr>
	<td>PageBK</td>
	<td>'.$rows->pageBK.'</td>
  	</tr>';
   $excel.='</table>';
	
	$filename1= 'mailingdataavmedeobrecord_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdataavmedeobrecord_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdataavmedeobrecord_'.date('Y-m-d').'.pdf';
	if ($etype == 'word') 
    {
        MSWord($filename1);
        print $excel;
    }
    elseif ($etype == 'excel') 
    {
        MSExcell($filename2);
        print $excel;
    }
    elseif ($etype == 'printer') 
    {
        HTSPrint();
        print $excel;
    }
    elseif ($etype == 'PDF') 
    {
        HezecomPDF($pdf_output,$excel,1);
        print $excel;
    }
    ?>
    