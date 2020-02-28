<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedchecks</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>AAdd1</td>
	<td>'.$rows->aAdd1.'</td>
  	</tr>
    <tr>
	<td>AAdd2</td>
	<td>'.$rows->aAdd2.'</td>
  	</tr>
    <tr>
	<td>AAdd3</td>
	<td>'.$rows->aAdd3.'</td>
  	</tr>
    <tr>
	<td>AAdd4</td>
	<td>'.$rows->aAdd4.'</td>
  	</tr>
    <tr>
	<td>BAdd1</td>
	<td>'.$rows->bAdd1.'</td>
  	</tr>
    <tr>
	<td>BAdd2</td>
	<td>'.$rows->bAdd2.'</td>
  	</tr>
    <tr>
	<td>BAdd3</td>
	<td>'.$rows->bAdd3.'</td>
  	</tr>
    <tr>
	<td>BAdd4</td>
	<td>'.$rows->bAdd4.'</td>
  	</tr>
    <tr>
	<td>PAdd1</td>
	<td>'.$rows->pAdd1.'</td>
  	</tr>
    <tr>
	<td>PAdd2</td>
	<td>'.$rows->pAdd2.'</td>
  	</tr>
    <tr>
	<td>PAdd3</td>
	<td>'.$rows->pAdd3.'</td>
  	</tr>
    <tr>
	<td>PAdd4</td>
	<td>'.$rows->pAdd4.'</td>
  	</tr>
    <tr>
	<td>CheckId</td>
	<td>'.$rows->checkId.'</td>
  	</tr>
    <tr>
	<td>CheckNumber</td>
	<td>'.$rows->checkNumber.'</td>
  	</tr>
    <tr>
	<td>CheckDate</td>
	<td>'.$rows->checkDate.'</td>
  	</tr>
    <tr>
	<td>CheckAmount</td>
	<td>'.$rows->checkAmount.'</td>
  	</tr>
    <tr>
	<td>MicrCheck</td>
	<td>'.$rows->micrCheck.'</td>
  	</tr>
    <tr>
	<td>MicrRouting</td>
	<td>'.$rows->micrRouting.'</td>
  	</tr>
    <tr>
	<td>MicrAccount</td>
	<td>'.$rows->micrAccount.'</td>
  	</tr>
    <tr>
	<td>SeqNumber</td>
	<td>'.$rows->seqNumber.'</td>
  	</tr>
    <tr>
	<td>CreatedAt</td>
	<td>'.$rows->createdAt.'</td>
  	</tr>
    <tr>
	<td>JobData Id</td>
	<td>'.$rows->jobData_id.'</td>
  	</tr>
    <tr>
	<td>MailingDataFile Id</td>
	<td>'.$rows->mailingDataFile_id.'</td>
  	</tr>
    <tr>
	<td>MailingPrintReadyFile Id</td>
	<td>'.$rows->mailingPrintReadyFile_id.'</td>
  	</tr>
    <tr>
	<td>Discr</td>
	<td>'.$rows->discr.'</td>
  	</tr>';
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
    