<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Clientdata</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>ClientName</td>
	<td>'.$rows->clientName.'</td>
  	</tr>
    <tr>
	<td>MonthlyJobNumber</td>
	<td>'.$rows->monthlyJobNumber.'</td>
  	</tr>
    <tr>
	<td>VisibleClientName</td>
	<td>'.$rows->visibleClientName.'</td>
  	</tr>
    <tr>
	<td>MailingDataEntity</td>
	<td>'.$rows->mailingDataEntity.'</td>
  	</tr>
    <tr>
	<td>ListEmails</td>
	<td>'.$rows->listEmails.'</td>
  	</tr>
    <tr>
	<td>LocalFolder</td>
	<td>'.$rows->localFolder.'</td>
  	</tr>
    <tr>
	<td>JobGroup</td>
	<td>'.$rows->jobGroup.'</td>
  	</tr>';
   $excel.='</table>';
	
	$filename1= 'clientdata_'.date('Y-m-d').'.doc';
	$filename2= 'clientdata_'.date('Y-m-d').'.xls';
	$pdf_output= 'clientdata_'.date('Y-m-d').'.pdf';
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
    