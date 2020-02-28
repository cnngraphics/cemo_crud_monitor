<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdatabcparecord</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>HeaderPage1</td>
	<td>'.$rows->headerPage1.'</td>
  	</tr>
    <tr>
	<td>HeaderPage2</td>
	<td>'.$rows->headerPage2.'</td>
  	</tr>
    <tr>
	<td>CompanyAddress</td>
	<td>'.$rows->companyAddress.'</td>
  	</tr>
    <tr>
	<td>PropertyValues</td>
	<td>'.$rows->propertyValues.'</td>
  	</tr>
    <tr>
	<td>Taxes</td>
	<td>'.$rows->taxes.'</td>
  	</tr>
    <tr>
	<td>FooterTextPage1</td>
	<td>'.$rows->footerTextPage1.'</td>
  	</tr>
    <tr>
	<td>TablePage2</td>
	<td>'.$rows->tablePage2.'</td>
  	</tr>
    <tr>
	<td>TotalPage2</td>
	<td>'.$rows->totalPage2.'</td>
  	</tr>
    <tr>
	<td>ParcelNumber</td>
	<td>'.$rows->parcelNumber.'</td>
  	</tr>
    <tr>
	<td>Date</td>
	<td>'.$rows->date.'</td>
  	</tr>
    <tr>
	<td>File</td>
	<td>'.$rows->file.'</td>
  	</tr>';
   $excel.='</table>';
	
	$filename1= 'mailingdatabcparecord_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdatabcparecord_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdatabcparecord_'.date('Y-m-d').'.pdf';
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
    