<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdatafplemm</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>JobId</td>
	<td>'.$rows->jobId.'</td>
  	</tr>
    <tr>
	<td>OriginalFileName</td>
	<td>'.$rows->originalFileName.'</td>
  	</tr>
    <tr>
	<td>FileName</td>
	<td>'.$rows->fileName.'</td>
  	</tr>
    <tr>
	<td>Sheets</td>
	<td>'.$rows->sheets.'</td>
  	</tr>
    <tr>
	<td>Date</td>
	<td>'.$rows->date.'</td>
  	</tr>
    <tr>
	<td>FullName</td>
	<td>'.$rows->fullName.'</td>
  	</tr>
    <tr>
	<td>Address1</td>
	<td>'.$rows->address1.'</td>
  	</tr>
    <tr>
	<td>City</td>
	<td>'.$rows->city.'</td>
  	</tr>
    <tr>
	<td>State</td>
	<td>'.$rows->state.'</td>
  	</tr>
    <tr>
	<td>Zip</td>
	<td>'.$rows->zip.'</td>
  	</tr>
    <tr>
	<td>StitchedDate</td>
	<td>'.$rows->stitchedDate.'</td>
  	</tr>
    <tr>
	<td>SeqNumber</td>
	<td>'.$rows->seqNumber.'</td>
  	</tr>
    <tr>
	<td>MailingPrintReadyFile Id</td>
	<td>'.$rows->mailingPrintReadyFile_id.'</td>
  	</tr>
    <tr>
	<td>PdfTotPages</td>
	<td>'.$rows->pdfTotPages.'</td>
  	</tr>';
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
    