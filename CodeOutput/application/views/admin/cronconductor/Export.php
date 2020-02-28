<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Cronconductor</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>CronFunction</th>
      <th>TimeAdded</th>
      <th>AddedBy</th>
      <th>TimeToRun</th>
      <th>TimeRan</th>
      <th>TimeNeededToRun</th>
      <th>RanBy</th>
      <th>TimeFinished</th>
      <th>Error</th>
      <th>Sleeping</th>
      <th>JobData Id</th>
      <th>ClientData Id</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->cronFunction.'</td>
	<td>'.$rows->timeAdded.'</td>
	<td>'.$rows->addedBy.'</td>
	<td>'.$rows->timeToRun.'</td>
	<td>'.$rows->timeRan.'</td>
	<td>'.$rows->timeNeededToRun.'</td>
	<td>'.$rows->ranBy.'</td>
	<td>'.$rows->timeFinished.'</td>
	<td>'.$rows->error.'</td>
	<td>'.$rows->sleeping.'</td>
	<td>'.$rows->jobData_id.'</td>
	<td>'.$rows->clientData_id.'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'cronconductor_'.date('Y-m-d').'.doc';
	$filename2= 'cronconductor_'.date('Y-m-d').'.xls';
	$pdf_output= 'cronconductor_'.date('Y-m-d').'.pdf';
	
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