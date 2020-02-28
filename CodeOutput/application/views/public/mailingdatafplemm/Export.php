<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdatafplemm</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>JobId</th>
      <th>OriginalFileName</th>
      <th>FileName</th>
      <th>Sheets</th>
      <th>Date</th>
      <th>FullName</th>
      <th>Address1</th>
      <th>City</th>
      <th>State</th>
      <th>Zip</th>
      <th>StitchedDate</th>
      <th>SeqNumber</th>
      <th>MailingPrintReadyFile Id</th>
      <th>PdfTotPages</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->jobId.'</td>
	<td>'.$rows->originalFileName.'</td>
	<td>'.$rows->fileName.'</td>
	<td>'.$rows->sheets.'</td>
	<td>'.$rows->date.'</td>
	<td>'.$rows->fullName.'</td>
	<td>'.$rows->address1.'</td>
	<td>'.$rows->city.'</td>
	<td>'.$rows->state.'</td>
	<td>'.$rows->zip.'</td>
	<td>'.$rows->stitchedDate.'</td>
	<td>'.$rows->seqNumber.'</td>
	<td>'.$rows->mailingPrintReadyFile_id.'</td>
	<td>'.$rows->pdfTotPages.'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'mailingdatafplemm_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdatafplemm_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdatafplemm_'.date('Y-m-d').'.pdf';
	
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