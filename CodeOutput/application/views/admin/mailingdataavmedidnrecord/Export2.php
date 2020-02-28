<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedidnrecord</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>Parent Id</td>
	<td>'.$rows->parent_id.'</td>
  	</tr>
    <tr>
	<td>Claim</td>
	<td>'.$rows->claim.'</td>
  	</tr>
    <tr>
	<td>Service</td>
	<td>'.$rows->service.'</td>
  	</tr>
    <tr>
	<td>ServiceDate</td>
	<td>'.$rows->serviceDate.'</td>
  	</tr>
    <tr>
	<td>Description</td>
	<td>'.$rows->description.'</td>
  	</tr>
    <tr>
	<td>Codes</td>
	<td>'.$rows->codes.'</td>
  	</tr>
    <tr>
	<td>CodeDesc</td>
	<td>'.$rows->codeDesc.'</td>
  	</tr>
    <tr>
	<td>Provider</td>
	<td>'.$rows->provider.'</td>
  	</tr>
    <tr>
	<td>ProviderNumber</td>
	<td>'.$rows->providerNumber.'</td>
  	</tr>
    <tr>
	<td>Billed</td>
	<td>'.$rows->billed.'</td>
  	</tr>
    <tr>
	<td>Responsability</td>
	<td>'.$rows->responsability.'</td>
  	</tr>
    <tr>
	<td>Type</td>
	<td>'.$rows->type.'</td>
  	</tr>';
   $excel.='</table>';
	
	$filename1= 'mailingdataavmedidnrecord_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdataavmedidnrecord_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdataavmedidnrecord_'.date('Y-m-d').'.pdf';
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
    