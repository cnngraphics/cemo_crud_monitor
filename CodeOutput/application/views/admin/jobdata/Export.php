<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Jobdata</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>CreatedAt</th>
      <th>FinishedAt</th>
      <th>JobName</th>
      <th>OiJobNumber</th>
      <th>Status</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->createdAt.'</td>
	<td>'.$rows->finishedAt.'</td>
	<td>'.$rows->jobName.'</td>
	<td>'.$rows->oiJobNumber.'</td>
	<td>'.$rows->status.'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'jobdata_'.date('Y-m-d').'.doc';
	$filename2= 'jobdata_'.date('Y-m-d').'.xls';
	$pdf_output= 'jobdata_'.date('Y-m-d').'.pdf';
	
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