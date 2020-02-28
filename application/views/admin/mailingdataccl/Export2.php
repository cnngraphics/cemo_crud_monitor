<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataccl</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>Job</td>
	<td>'.$rows->job.'</td>
  	</tr>
    <tr>
	<td>PersonNumber</td>
	<td>'.$rows->personNumber.'</td>
  	</tr>
    <tr>
	<td>PastGuessNumber</td>
	<td>'.$rows->pastGuessNumber.'</td>
  	</tr>
    <tr>
	<td>ShipCode</td>
	<td>'.$rows->shipCode.'</td>
  	</tr>
    <tr>
	<td>ShipName</td>
	<td>'.$rows->shipName.'</td>
  	</tr>
    <tr>
	<td>SailDate</td>
	<td>'.$rows->sailDate.'</td>
  	</tr>
    <tr>
	<td>CabinNumber</td>
	<td>'.$rows->cabinNumber.'</td>
  	</tr>
    <tr>
	<td>Section</td>
	<td>'.$rows->section.'</td>
  	</tr>
    <tr>
	<td>FileCreationDate</td>
	<td>'.$rows->fileCreationDate.'</td>
  	</tr>
    <tr>
	<td>CabinDropDate</td>
	<td>'.$rows->cabinDropDate.'</td>
  	</tr>
    <tr>
	<td>DeliveryDate</td>
	<td>'.$rows->deliveryDate.'</td>
  	</tr>
    <tr>
	<td>FirstName</td>
	<td>'.$rows->firstName.'</td>
  	</tr>
    <tr>
	<td>MiddleName</td>
	<td>'.$rows->middleName.'</td>
  	</tr>
    <tr>
	<td>LastName</td>
	<td>'.$rows->lastName.'</td>
  	</tr>
    <tr>
	<td>FullName</td>
	<td>'.$rows->fullName.'</td>
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
	<td>CompanionFull</td>
	<td>'.$rows->companionFull.'</td>
  	</tr>
    <tr>
	<td>Celebration</td>
	<td>'.$rows->celebration.'</td>
  	</tr>
    <tr>
	<td>Offer</td>
	<td>'.$rows->offer.'</td>
  	</tr>
    <tr>
	<td>OfferAmount</td>
	<td>'.$rows->offerAmount.'</td>
  	</tr>
    <tr>
	<td>ExpirationDate</td>
	<td>'.$rows->expirationDate.'</td>
  	</tr>
    <tr>
	<td>TotalCards</td>
	<td>'.$rows->totalCards.'</td>
  	</tr>
    <tr>
	<td>HD</td>
	<td>'.$rows->HD.'</td>
  	</tr>
    <tr>
	<td>SpaManager</td>
	<td>'.$rows->spaManager.'</td>
  	</tr>
    <tr>
	<td>SpaManagerExt</td>
	<td>'.$rows->spaManagerExt.'</td>
  	</tr>
    <tr>
	<td>Counter</td>
	<td>'.$rows->counter.'</td>
  	</tr>
    <tr>
	<td>HolderId</td>
	<td>'.$rows->holderId.'</td>
  	</tr>
    <tr>
	<td>CellPackageSk</td>
	<td>'.$rows->cellPackageSk.'</td>
  	</tr>
    <tr>
	<td>SeqTrkNum</td>
	<td>'.$rows->seqTrkNum.'</td>
  	</tr>
    <tr>
	<td>CardHolderType</td>
	<td>'.$rows->cardHolderType.'</td>
  	</tr>
    <tr>
	<td>PriorityPrinting</td>
	<td>'.$rows->priorityPrinting.'</td>
  	</tr>
    <tr>
	<td>BulletDeliveryDate</td>
	<td>'.$rows->bulletDeliveryDate.'</td>
  	</tr>
    <tr>
	<td>WildCard</td>
	<td>'.$rows->wildCard.'</td>
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
	
	$filename1= 'mailingdataccl_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdataccl_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdataccl_'.date('Y-m-d').'.pdf';
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
    