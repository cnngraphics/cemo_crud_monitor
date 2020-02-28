<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Cronconductor</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>CronFunction</td>
	<td>'.$rows->cronFunction.'</td>
  	</tr>
    <tr>
	<td>TimeAdded</td>
	<td>'.$rows->timeAdded.'</td>
  	</tr>
    <tr>
	<td>AddedBy</td>
	<td>'.$rows->addedBy.'</td>
  	</tr>
    <tr>
	<td>TimeToRun</td>
	<td>'.$rows->timeToRun.'</td>
  	</tr>
    <tr>
	<td>TimeRan</td>
	<td>'.$rows->timeRan.'</td>
  	</tr>
    <tr>
	<td>TimeNeededToRun</td>
	<td>'.$rows->timeNeededToRun.'</td>
  	</tr>
    <tr>
	<td>RanBy</td>
	<td>'.$rows->ranBy.'</td>
  	</tr>
    <tr>
	<td>TimeFinished</td>
	<td>'.$rows->timeFinished.'</td>
  	</tr>
    <tr>
	<td>Error</td>
	<td>'.$rows->error.'</td>
  	</tr>
    <tr>
	<td>Sleeping</td>
	<td>'.$rows->sleeping.'</td>
  	</tr>
    <tr>
	<td>JobData Id</td>
	<td>'.$rows->jobData_id.'</td>
  	</tr>
    <tr>
	<td>ClientData Id</td>
	<td>'.$rows->clientData_id.'</td>
  	</tr>';
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
    