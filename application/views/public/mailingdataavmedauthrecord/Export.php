<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedauthrecord</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>Parent Id</th>
      <th>Page</th>
      <th>Date</th>
      <th>Summary</th>
      <th>Info</th>
      <th>Status</th>
      <th>Prov</th>
      <th>Header1</th>
      <th>Header2</th>
      <th>Details</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->parent_id.'</td>
	<td>'.$rows->page.'</td>
	<td>'.$rows->date.'</td>
	<td>'.$rows->summary.'</td>
	<td>'.$rows->info.'</td>
	<td>'.$rows->status.'</td>
	<td>'.$rows->prov.'</td>
	<td>'.$rows->header1.'</td>
	<td>'.$rows->header2.'</td>
	<td>'.$rows->details.'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'mailingdataavmedauthrecord_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdataavmedauthrecord_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdataavmedauthrecord_'.date('Y-m-d').'.pdf';
	
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