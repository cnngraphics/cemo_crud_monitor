<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Maintenancedata</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>ParentId</td>
	<td>'.$rows->parentId.'</td>
  	</tr>
    <tr>
	<td>JobId</td>
	<td>'.$rows->jobId.'</td>
  	</tr>
    <tr>
	<td>ParentJobId</td>
	<td>'.$rows->parentJobId.'</td>
  	</tr>
    <tr>
	<td>Campaign</td>
	<td>'.$rows->campaign.'</td>
  	</tr>
    <tr>
	<td>Mailing</td>
	<td>'.$rows->mailing.'</td>
  	</tr>
    <tr>
	<td>OriginalFileName</td>
	<td>'.$rows->originalFileName.'</td>
  	</tr>
    <tr>
	<td>PdfFileName</td>
	<td>'.$rows->pdfFileName.'</td>
  	</tr>
    <tr>
	<td>Token</td>
	<td>'.$rows->token.'</td>
  	</tr>';
   $excel.='</table>';
	
	$filename1= 'maintenancedata_'.date('Y-m-d').'.doc';
	$filename2= 'maintenancedata_'.date('Y-m-d').'.xls';
	$pdf_output= 'maintenancedata_'.date('Y-m-d').'.pdf';
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
    