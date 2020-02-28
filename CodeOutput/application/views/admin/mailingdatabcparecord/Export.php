<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdatabcparecord</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>HeaderPage1</th>
      <th>HeaderPage2</th>
      <th>CompanyAddress</th>
      <th>PropertyValues</th>
      <th>Taxes</th>
      <th>FooterTextPage1</th>
      <th>TablePage2</th>
      <th>TotalPage2</th>
      <th>ParcelNumber</th>
      <th>Date</th>
      <th>File</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->headerPage1.'</td>
	<td>'.$rows->headerPage2.'</td>
	<td>'.$rows->companyAddress.'</td>
	<td>'.$rows->propertyValues.'</td>
	<td>'.$rows->taxes.'</td>
	<td>'.$rows->footerTextPage1.'</td>
	<td>'.$rows->tablePage2.'</td>
	<td>'.$rows->totalPage2.'</td>
	<td>'.$rows->parcelNumber.'</td>
	<td>'.$rows->date.'</td>
	<td>'.$rows->file.'</td>
	</tr>';
	}
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