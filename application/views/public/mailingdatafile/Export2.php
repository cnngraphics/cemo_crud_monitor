<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdatafile</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>Header Id</td>
	<td>'.$rows->header_id.'</td>
  	</tr>
    <tr>
	<td>Footer Id</td>
	<td>'.$rows->footer_id.'</td>
  	</tr>
    <tr>
	<td>FileName</td>
	<td>'.$rows->fileName.'</td>
  	</tr>
    <tr>
	<td>FileNameMm</td>
	<td>'.$rows->fileNameMm.'</td>
  	</tr>
    <tr>
	<td>CreatedAt</td>
	<td>'.$rows->createdAt.'</td>
  	</tr>
    <tr>
	<td>JobData Id</td>
	<td>'.$rows->jobData_id.'</td>
  	</tr>
    <tr>
	<td>Discr</td>
	<td>'.$rows->discr.'</td>
  	</tr>
    <tr>
	<td>TotalRecords</td>
	<td>'.$rows->totalRecords.'</td>
  	</tr>';
   $excel.='</table>';
	
	$filename1= 'mailingdatafile_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdatafile_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdatafile_'.date('Y-m-d').'.pdf';
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
    