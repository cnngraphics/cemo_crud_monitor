<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedrecord</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>Parent Id</td>
	<td>'.$rows->parent_id.'</td>
  	</tr>
    <tr>
	<td>RecordId</td>
	<td>'.$rows->recordId.'</td>
  	</tr>
    <tr>
	<td>MemberId</td>
	<td>'.$rows->memberId.'</td>
  	</tr>
    <tr>
	<td>Line</td>
	<td>'.$rows->line.'</td>
  	</tr>';
   $excel.='</table>';
	
	$filename1= 'mailingdataavmedrecord_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdataavmedrecord_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdataavmedrecord_'.date('Y-m-d').'.pdf';
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
    