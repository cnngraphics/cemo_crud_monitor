<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataprincess</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>Job</td>
	<td>'.$rows->job.'</td>
  	</tr>
    <tr>
	<td>SailDate</td>
	<td>'.$rows->sailDate.'</td>
  	</tr>
    <tr>
	<td>Counter</td>
	<td>'.$rows->counter.'</td>
  	</tr>
    <tr>
	<td>FirstName</td>
	<td>'.$rows->firstName.'</td>
  	</tr>
    <tr>
	<td>LastName</td>
	<td>'.$rows->lastName.'</td>
  	</tr>
    <tr>
	<td>CompanionF</td>
	<td>'.$rows->companionF.'</td>
  	</tr>
    <tr>
	<td>CompanionL</td>
	<td>'.$rows->companionL.'</td>
  	</tr>
    <tr>
	<td>CabinNumber</td>
	<td>'.$rows->cabinNumber.'</td>
  	</tr>
    <tr>
	<td>Greeting</td>
	<td>'.$rows->greeting.'</td>
  	</tr>
    <tr>
	<td>ExpirationDate</td>
	<td>'.$rows->expirationDate.'</td>
  	</tr>
    <tr>
	<td>Celebration</td>
	<td>'.$rows->celebration.'</td>
  	</tr>
    <tr>
	<td>VoyageId</td>
	<td>'.$rows->voyageId.'</td>
  	</tr>
    <tr>
	<td>UniqueId</td>
	<td>'.$rows->uniqueId.'</td>
  	</tr>
    <tr>
	<td>Offer</td>
	<td>'.$rows->offer.'</td>
  	</tr>
    <tr>
	<td>NumCardsInHolder</td>
	<td>'.$rows->numCardsInHolder.'</td>
  	</tr>
    <tr>
	<td>Value</td>
	<td>'.$rows->value.'</td>
  	</tr>
    <tr>
	<td>Disclaimer</td>
	<td>'.$rows->disclaimer.'</td>
  	</tr>
    <tr>
	<td>JustBecause</td>
	<td>'.$rows->justBecause.'</td>
  	</tr>
    <tr>
	<td>MailingDataFile Id</td>
	<td>'.$rows->mailingDataFile_id.'</td>
  	</tr>
    <tr>
	<td>MailingPrintReadyFile Id</td>
	<td>'.$rows->mailingPrintReadyFile_id.'</td>
  	</tr>';
   $excel.='</table>';
	
	$filename1= 'mailingdataprincess_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdataprincess_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdataprincess_'.date('Y-m-d').'.pdf';
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
    