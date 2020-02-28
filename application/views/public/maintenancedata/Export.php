<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Maintenancedata</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>ParentId</th>
      <th>JobId</th>
      <th>ParentJobId</th>
      <th>Campaign</th>
      <th>Mailing</th>
      <th>OriginalFileName</th>
      <th>PdfFileName</th>
      <th>Token</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->parentId.'</td>
	<td>'.$rows->jobId.'</td>
	<td>'.$rows->parentJobId.'</td>
	<td>'.$rows->campaign.'</td>
	<td>'.$rows->mailing.'</td>
	<td>'.$rows->originalFileName.'</td>
	<td>'.$rows->pdfFileName.'</td>
	<td>'.$rows->token.'</td>
	</tr>';
	}
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