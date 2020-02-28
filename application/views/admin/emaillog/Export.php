<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Emaillog</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>DateSent</th>
      <th>MailTo</th>
      <th>Cc</th>
      <th>Bcc</th>
      <th>Subject</th>
      <th>Body</th>
      <th>CemiUserId</th>
      <th>CronConductor Id</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->dateSent.'</td>
	<td>'.$rows->mailTo.'</td>
	<td>'.$rows->cc.'</td>
	<td>'.$rows->bcc.'</td>
	<td>'.$rows->subject.'</td>
	<td>'.$rows->body.'</td>
	<td>'.$rows->cemiUserId.'</td>
	<td>'.$rows->cronConductor_id.'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'emaillog_'.date('Y-m-d').'.doc';
	$filename2= 'emaillog_'.date('Y-m-d').'.xls';
	$pdf_output= 'emaillog_'.date('Y-m-d').'.pdf';
	
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