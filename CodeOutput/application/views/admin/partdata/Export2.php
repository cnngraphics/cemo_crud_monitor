<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Partdata</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>SourceFileName</td>
	<td>'.$rows->sourceFileName.'</td>
  	</tr>
    <tr>
	<td>Campaign</td>
	<td>'.$rows->campaign.'</td>
  	</tr>
    <tr>
	<td>Mailing</td>
	<td>'.$rows->mailing.'</td>
  	</tr>
    <tr>
	<td>OriginalFileName</td>
	<td>'.$rows->originalFileName.'</td>
  	</tr>
    <tr>
	<td>FileReceived</td>
	<td>'.$rows->fileReceived.'</td>
  	</tr>
    <tr>
	<td>FilePrinted</td>
	<td>'.$rows->filePrinted.'</td>
  	</tr>
    <tr>
	<td>MemberId</td>
	<td>'.$rows->memberId.'</td>
  	</tr>
    <tr>
	<td>Name</td>
	<td>'.$rows->name.'</td>
  	</tr>
    <tr>
	<td>Address1</td>
	<td>'.$rows->address1.'</td>
  	</tr>
    <tr>
	<td>Address2</td>
	<td>'.$rows->address2.'</td>
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
	<td>JobId</td>
	<td>'.$rows->jobId.'</td>
  	</tr>
    <tr>
	<td>PdfFileName</td>
	<td>'.$rows->pdfFileName.'</td>
  	</tr>
    <tr>
	<td>SheetCount</td>
	<td>'.$rows->sheetCount.'</td>
  	</tr>
    <tr>
	<td>StitchedDate</td>
	<td>'.$rows->stitchedDate.'</td>
  	</tr>
    <tr>
	<td>CheckedDate</td>
	<td>'.$rows->checkedDate.'</td>
  	</tr>';
   $excel.='</table>';
	
	$filename1= 'partdata_'.date('Y-m-d').'.doc';
	$filename2= 'partdata_'.date('Y-m-d').'.xls';
	$pdf_output= 'partdata_'.date('Y-m-d').'.pdf';
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
    