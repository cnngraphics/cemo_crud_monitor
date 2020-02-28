<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdatafploncall</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>FirstName</td>
	<td>'.$rows->firstName.'</td>
  	</tr>
    <tr>
	<td>LastName</td>
	<td>'.$rows->lastName.'</td>
  	</tr>
    <tr>
	<td>MiddleName</td>
	<td>'.$rows->middleName.'</td>
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
	<td>MmAddress1</td>
	<td>'.$rows->mmAddress1.'</td>
  	</tr>
    <tr>
	<td>Address2</td>
	<td>'.$rows->address2.'</td>
  	</tr>
    <tr>
	<td>MmAddress2</td>
	<td>'.$rows->mmAddress2.'</td>
  	</tr>
    <tr>
	<td>City</td>
	<td>'.$rows->city.'</td>
  	</tr>
    <tr>
	<td>MmCity</td>
	<td>'.$rows->mmCity.'</td>
  	</tr>
    <tr>
	<td>State</td>
	<td>'.$rows->state.'</td>
  	</tr>
    <tr>
	<td>MmState</td>
	<td>'.$rows->mmState.'</td>
  	</tr>
    <tr>
	<td>ZipCode</td>
	<td>'.$rows->zipCode.'</td>
  	</tr>
    <tr>
	<td>MmZipCode</td>
	<td>'.$rows->mmZipCode.'</td>
  	</tr>
    <tr>
	<td>Country</td>
	<td>'.$rows->country.'</td>
  	</tr>
    <tr>
	<td>MmCountry</td>
	<td>'.$rows->mmCountry.'</td>
  	</tr>
    <tr>
	<td>MmImb</td>
	<td>'.$rows->mmImb.'</td>
  	</tr>
    <tr>
	<td>MmOpt</td>
	<td>'.$rows->mmOpt.'</td>
  	</tr>
    <tr>
	<td>MmReturnCode</td>
	<td>'.$rows->mmReturnCode.'</td>
  	</tr>
    <tr>
	<td>MmDpv</td>
	<td>'.$rows->mmDpv.'</td>
  	</tr>
    <tr>
	<td>MmOrder</td>
	<td>'.$rows->mmOrder.'</td>
  	</tr>
    <tr>
	<td>MmCOAMoveToDate</td>
	<td>'.$rows->mmCOAMoveToDate.'</td>
  	</tr>
    <tr>
	<td>MmCOAMoveType</td>
	<td>'.$rows->mmCOAMoveType.'</td>
  	</tr>
    <tr>
	<td>PdfLocation</td>
	<td>'.$rows->pdfLocation.'</td>
  	</tr>
    <tr>
	<td>PdfTotPages</td>
	<td>'.$rows->pdfTotPages.'</td>
  	</tr>
    <tr>
	<td>NO LTR</td>
	<td>'.$rows->NO_LTR.'</td>
  	</tr>
    <tr>
	<td>CD CUST TYPE</td>
	<td>'.$rows->CD_CUST_TYPE.'</td>
  	</tr>
    <tr>
	<td>AccountNo</td>
	<td>'.$rows->accountNo.'</td>
  	</tr>
    <tr>
	<td>PREMAddrs</td>
	<td>'.$rows->PREMAddrs.'</td>
  	</tr>
    <tr>
	<td>PREMCity</td>
	<td>'.$rows->PREMCity.'</td>
  	</tr>
    <tr>
	<td>PREMST</td>
	<td>'.$rows->PREMST.'</td>
  	</tr>
    <tr>
	<td>PREMZip</td>
	<td>'.$rows->PREMZip.'</td>
  	</tr>
    <tr>
	<td>Credit</td>
	<td>'.$rows->credit.'</td>
  	</tr>
    <tr>
	<td>Date</td>
	<td>'.$rows->date.'</td>
  	</tr>
    <tr>
	<td>AC</td>
	<td>'.$rows->AC.'</td>
  	</tr>
    <tr>
	<td>HS</td>
	<td>'.$rows->HS.'</td>
  	</tr>
    <tr>
	<td>HP</td>
	<td>'.$rows->HP.'</td>
  	</tr>
    <tr>
	<td>WH</td>
	<td>'.$rows->WH.'</td>
  	</tr>
    <tr>
	<td>PP</td>
	<td>'.$rows->PP.'</td>
  	</tr>
    <tr>
	<td>PS</td>
	<td>'.$rows->PS.'</td>
  	</tr>
    <tr>
	<td>Contractor</td>
	<td>'.$rows->contractor.'</td>
  	</tr>
    <tr>
	<td>Phone</td>
	<td>'.$rows->phone.'</td>
  	</tr>
    <tr>
	<td>Status</td>
	<td>'.$rows->status.'</td>
  	</tr>
    <tr>
	<td>PostDate</td>
	<td>'.$rows->postDate.'</td>
  	</tr>
    <tr>
	<td>Notes</td>
	<td>'.$rows->notes.'</td>
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
	<td>Generic1</td>
	<td>'.$rows->generic1.'</td>
  	</tr>
    <tr>
	<td>Generic2</td>
	<td>'.$rows->generic2.'</td>
  	</tr>
    <tr>
	<td>MmImbDigi</td>
	<td>'.$rows->mmImbDigi.'</td>
  	</tr>';
   $excel.='</table>';
	
	$filename1= 'mailingdatafploncall_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdatafploncall_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdatafploncall_'.date('Y-m-d').'.pdf';
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
    