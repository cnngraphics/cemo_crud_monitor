<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingprintreadyfile</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>FileName</th>
      <th>CreatedAt</th>
      <th>JobData Id</th>
      <th>Discr</th>
      <th>PdfTotPages</th>
      <th>PdfTotalRecords</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->fileName.'</td>
	<td>'.$rows->createdAt.'</td>
	<td>'.$rows->jobData_id.'</td>
	<td>'.$rows->discr.'</td>
	<td>'.$rows->pdfTotPages.'</td>
	<td>'.$rows->pdfTotalRecords.'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'mailingprintreadyfile_'.date('Y-m-d').'.doc';
	$filename2= 'mailingprintreadyfile_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingprintreadyfile_'.date('Y-m-d').'.pdf';
	
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