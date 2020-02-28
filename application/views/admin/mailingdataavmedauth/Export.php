<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedauth</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>FirstName</th>
      <th>LastName</th>
      <th>MiddleName</th>
      <th>FullName</th>
      <th>Address1</th>
      <th>MmAddress1</th>
      <th>Address2</th>
      <th>MmAddress2</th>
      <th>City</th>
      <th>MmCity</th>
      <th>State</th>
      <th>MmState</th>
      <th>ZipCode</th>
      <th>MmZipCode</th>
      <th>Country</th>
      <th>MmCountry</th>
      <th>MmImb</th>
      <th>MmOpt</th>
      <th>MmReturnCode</th>
      <th>MmDpv</th>
      <th>MmOrder</th>
      <th>MmCOAMoveToDate</th>
      <th>MmCOAMoveType</th>
      <th>PdfLocation</th>
      <th>PdfTotPages</th>
      <th>DocumentDate</th>
      <th>SeqNumber</th>
      <th>LastPage</th>
      <th>Reprint</th>
      <th>AvmedID</th>
      <th>MailingDataFile Id</th>
      <th>MailingPrintReadyFile Id</th>
      <th>MailingDataRecord Id</th>
      <th>Generic1</th>
      <th>Generic2</th>
      <th>MmImbDigi</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->firstName.'</td>
	<td>'.$rows->lastName.'</td>
	<td>'.$rows->middleName.'</td>
	<td>'.$rows->fullName.'</td>
	<td>'.$rows->address1.'</td>
	<td>'.$rows->mmAddress1.'</td>
	<td>'.$rows->address2.'</td>
	<td>'.$rows->mmAddress2.'</td>
	<td>'.$rows->city.'</td>
	<td>'.$rows->mmCity.'</td>
	<td>'.$rows->state.'</td>
	<td>'.$rows->mmState.'</td>
	<td>'.$rows->zipCode.'</td>
	<td>'.$rows->mmZipCode.'</td>
	<td>'.$rows->country.'</td>
	<td>'.$rows->mmCountry.'</td>
	<td>'.$rows->mmImb.'</td>
	<td>'.$rows->mmOpt.'</td>
	<td>'.$rows->mmReturnCode.'</td>
	<td>'.$rows->mmDpv.'</td>
	<td>'.$rows->mmOrder.'</td>
	<td>'.$rows->mmCOAMoveToDate.'</td>
	<td>'.$rows->mmCOAMoveType.'</td>
	<td>'.$rows->pdfLocation.'</td>
	<td>'.$rows->pdfTotPages.'</td>
	<td>'.$rows->documentDate.'</td>
	<td>'.$rows->seqNumber.'</td>
	<td>'.$rows->lastPage.'</td>
	<td>'.$rows->reprint.'</td>
	<td>'.$rows->avmedID.'</td>
	<td>'.$rows->mailingDataFile_id.'</td>
	<td>'.$rows->mailingPrintReadyFile_id.'</td>
	<td>'.$rows->mailingDataRecord_id.'</td>
	<td>'.$rows->generic1.'</td>
	<td>'.$rows->generic2.'</td>
	<td>'.$rows->mmImbDigi.'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'mailingdataavmedauth_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdataavmedauth_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdataavmedauth_'.date('Y-m-d').'.pdf';
	
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