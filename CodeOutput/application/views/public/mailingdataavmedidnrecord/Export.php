<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedidnrecord</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>Parent Id</th>
      <th>Claim</th>
      <th>Service</th>
      <th>ServiceDate</th>
      <th>Description</th>
      <th>Codes</th>
      <th>CodeDesc</th>
      <th>Provider</th>
      <th>ProviderNumber</th>
      <th>Billed</th>
      <th>Responsability</th>
      <th>Type</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->parent_id.'</td>
	<td>'.$rows->claim.'</td>
	<td>'.$rows->service.'</td>
	<td>'.$rows->serviceDate.'</td>
	<td>'.$rows->description.'</td>
	<td>'.$rows->codes.'</td>
	<td>'.$rows->codeDesc.'</td>
	<td>'.$rows->provider.'</td>
	<td>'.$rows->providerNumber.'</td>
	<td>'.$rows->billed.'</td>
	<td>'.$rows->responsability.'</td>
	<td>'.$rows->type.'</td>
	</tr>';
	}
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