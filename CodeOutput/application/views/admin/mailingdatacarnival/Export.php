<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdatacarnival</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>Job</th>
      <th>Counter</th>
      <th>ShipCode</th>
      <th>SailDate</th>
      <th>FirstName</th>
      <th>LastName</th>
      <th>MiddleName</th>
      <th>FullName</th>
      <th>CabinNumber</th>
      <th>Section</th>
      <th>Offer</th>
      <th>CompanionFull</th>
      <th>Celebration</th>
      <th>ExpirationDate</th>
      <th>TotalCards</th>
      <th>CompanionF</th>
      <th>CompanionL</th>
      <th>ShipName</th>
      <th>HD</th>
      <th>MailingDataFile Id</th>
      <th>MailingPrintReadyFile Id</th>
      <th>PersonNumber</th>
      <th>PastGuessNumber</th>
      <th>FileCreationDate</th>
      <th>CabinDropDate</th>
      <th>DeliveryDate</th>
      <th>OfferAmount</th>
      <th>SpaManager</th>
      <th>SpaManagerExt</th>
      <th>HolderId</th>
      <th>CellPackageSk</th>
      <th>SeqTrkNum</th>
      <th>CardHolderType</th>
      <th>PriorityPrinting</th>
      <th>BulletDeliveryDate</th>
      <th>WildCard</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->job.'</td>
	<td>'.$rows->counter.'</td>
	<td>'.$rows->shipCode.'</td>
	<td>'.$rows->sailDate.'</td>
	<td>'.$rows->firstName.'</td>
	<td>'.$rows->lastName.'</td>
	<td>'.$rows->middleName.'</td>
	<td>'.$rows->fullName.'</td>
	<td>'.$rows->cabinNumber.'</td>
	<td>'.$rows->section.'</td>
	<td>'.$rows->offer.'</td>
	<td>'.$rows->companionFull.'</td>
	<td>'.$rows->celebration.'</td>
	<td>'.$rows->expirationDate.'</td>
	<td>'.$rows->totalCards.'</td>
	<td>'.$rows->companionF.'</td>
	<td>'.$rows->companionL.'</td>
	<td>'.$rows->shipName.'</td>
	<td>'.$rows->HD.'</td>
	<td>'.$rows->mailingDataFile_id.'</td>
	<td>'.$rows->mailingPrintReadyFile_id.'</td>
	<td>'.$rows->personNumber.'</td>
	<td>'.$rows->pastGuessNumber.'</td>
	<td>'.$rows->fileCreationDate.'</td>
	<td>'.$rows->cabinDropDate.'</td>
	<td>'.$rows->deliveryDate.'</td>
	<td>'.$rows->offerAmount.'</td>
	<td>'.$rows->spaManager.'</td>
	<td>'.$rows->spaManagerExt.'</td>
	<td>'.$rows->holderId.'</td>
	<td>'.$rows->cellPackageSk.'</td>
	<td>'.$rows->seqTrkNum.'</td>
	<td>'.$rows->cardHolderType.'</td>
	<td>'.$rows->priorityPrinting.'</td>
	<td>'.$rows->bulletDeliveryDate.'</td>
	<td>'.$rows->wildCard.'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'mailingdatacarnival_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdatacarnival_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdatacarnival_'.date('Y-m-d').'.pdf';
	
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