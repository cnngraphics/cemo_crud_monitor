<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataprincess</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>Job</th>
      <th>SailDate</th>
      <th>Counter</th>
      <th>FirstName</th>
      <th>LastName</th>
      <th>CompanionF</th>
      <th>CompanionL</th>
      <th>CabinNumber</th>
      <th>Greeting</th>
      <th>ExpirationDate</th>
      <th>Celebration</th>
      <th>VoyageId</th>
      <th>UniqueId</th>
      <th>Offer</th>
      <th>NumCardsInHolder</th>
      <th>Value</th>
      <th>Disclaimer</th>
      <th>JustBecause</th>
      <th>MailingDataFile Id</th>
      <th>MailingPrintReadyFile Id</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->job.'</td>
	<td>'.$rows->sailDate.'</td>
	<td>'.$rows->counter.'</td>
	<td>'.$rows->firstName.'</td>
	<td>'.$rows->lastName.'</td>
	<td>'.$rows->companionF.'</td>
	<td>'.$rows->companionL.'</td>
	<td>'.$rows->cabinNumber.'</td>
	<td>'.$rows->greeting.'</td>
	<td>'.$rows->expirationDate.'</td>
	<td>'.$rows->celebration.'</td>
	<td>'.$rows->voyageId.'</td>
	<td>'.$rows->uniqueId.'</td>
	<td>'.$rows->offer.'</td>
	<td>'.$rows->numCardsInHolder.'</td>
	<td>'.$rows->value.'</td>
	<td>'.$rows->disclaimer.'</td>
	<td>'.$rows->justBecause.'</td>
	<td>'.$rows->mailingDataFile_id.'</td>
	<td>'.$rows->mailingPrintReadyFile_id.'</td>
	</tr>';
	}
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