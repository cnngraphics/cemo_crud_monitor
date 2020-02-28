<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Clientdata</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>ClientName</th>
      <th>MonthlyJobNumber</th>
      <th>VisibleClientName</th>
      <th>MailingDataEntity</th>
      <th>ListEmails</th>
      <th>LocalFolder</th>
      <th>JobGroup</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->clientName.'</td>
	<td>'.$rows->monthlyJobNumber.'</td>
	<td>'.$rows->visibleClientName.'</td>
	<td>'.$rows->mailingDataEntity.'</td>
	<td>'.$rows->listEmails.'</td>
	<td>'.$rows->localFolder.'</td>
	<td>'.$rows->jobGroup.'</td>
	</tr>';
	}
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