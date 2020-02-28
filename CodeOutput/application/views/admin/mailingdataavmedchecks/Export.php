<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedchecks</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>AAdd1</th>
      <th>AAdd2</th>
      <th>AAdd3</th>
      <th>AAdd4</th>
      <th>BAdd1</th>
      <th>BAdd2</th>
      <th>BAdd3</th>
      <th>BAdd4</th>
      <th>PAdd1</th>
      <th>PAdd2</th>
      <th>PAdd3</th>
      <th>PAdd4</th>
      <th>CheckId</th>
      <th>CheckNumber</th>
      <th>CheckDate</th>
      <th>CheckAmount</th>
      <th>MicrCheck</th>
      <th>MicrRouting</th>
      <th>MicrAccount</th>
      <th>SeqNumber</th>
      <th>CreatedAt</th>
      <th>JobData Id</th>
      <th>MailingDataFile Id</th>
      <th>MailingPrintReadyFile Id</th>
      <th>Discr</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->aAdd1.'</td>
	<td>'.$rows->aAdd2.'</td>
	<td>'.$rows->aAdd3.'</td>
	<td>'.$rows->aAdd4.'</td>
	<td>'.$rows->bAdd1.'</td>
	<td>'.$rows->bAdd2.'</td>
	<td>'.$rows->bAdd3.'</td>
	<td>'.$rows->bAdd4.'</td>
	<td>'.$rows->pAdd1.'</td>
	<td>'.$rows->pAdd2.'</td>
	<td>'.$rows->pAdd3.'</td>
	<td>'.$rows->pAdd4.'</td>
	<td>'.$rows->checkId.'</td>
	<td>'.$rows->checkNumber.'</td>
	<td>'.$rows->checkDate.'</td>
	<td>'.$rows->checkAmount.'</td>
	<td>'.$rows->micrCheck.'</td>
	<td>'.$rows->micrRouting.'</td>
	<td>'.$rows->micrAccount.'</td>
	<td>'.$rows->seqNumber.'</td>
	<td>'.$rows->createdAt.'</td>
	<td>'.$rows->jobData_id.'</td>
	<td>'.$rows->mailingDataFile_id.'</td>
	<td>'.$rows->mailingPrintReadyFile_id.'</td>
	<td>'.$rows->discr.'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'mailingdataavmedchecks_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdataavmedchecks_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdataavmedchecks_'.date('Y-m-d').'.pdf';
	
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