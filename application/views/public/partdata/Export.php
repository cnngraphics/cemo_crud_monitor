<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Partdata</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>SourceFileName</th>
      <th>Campaign</th>
      <th>Mailing</th>
      <th>OriginalFileName</th>
      <th>FileReceived</th>
      <th>FilePrinted</th>
      <th>MemberId</th>
      <th>Name</th>
      <th>Address1</th>
      <th>Address2</th>
      <th>City</th>
      <th>State</th>
      <th>Zip</th>
      <th>JobId</th>
      <th>PdfFileName</th>
      <th>SheetCount</th>
      <th>StitchedDate</th>
      <th>CheckedDate</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->sourceFileName.'</td>
	<td>'.$rows->campaign.'</td>
	<td>'.$rows->mailing.'</td>
	<td>'.$rows->originalFileName.'</td>
	<td>'.$rows->fileReceived.'</td>
	<td>'.$rows->filePrinted.'</td>
	<td>'.$rows->memberId.'</td>
	<td>'.$rows->name.'</td>
	<td>'.$rows->address1.'</td>
	<td>'.$rows->address2.'</td>
	<td>'.$rows->city.'</td>
	<td>'.$rows->state.'</td>
	<td>'.$rows->zip.'</td>
	<td>'.$rows->jobId.'</td>
	<td>'.$rows->pdfFileName.'</td>
	<td>'.$rows->sheetCount.'</td>
	<td>'.$rows->stitchedDate.'</td>
	<td>'.$rows->checkedDate.'</td>
	</tr>';
	}
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