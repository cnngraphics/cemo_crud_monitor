<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedgroupinvoicesrecord21</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>InvNo</td>
	<td>'.$rows->invNo.'</td>
  	</tr>
    <tr>
	<td>SubscriberAddr2</td>
	<td>'.$rows->subscriberAddr2.'</td>
  	</tr>
    <tr>
	<td>SubscriberAddr3</td>
	<td>'.$rows->subscriberAddr3.'</td>
  	</tr>
    <tr>
	<td>AcctId</td>
	<td>'.$rows->acctId.'</td>
  	</tr>
    <tr>
	<td>Contact</td>
	<td>'.$rows->contact.'</td>
  	</tr>';
   $excel.='</table>';
	
	$filename1= 'mailingdataavmedgroupinvoicesrecord21_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdataavmedgroupinvoicesrecord21_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdataavmedgroupinvoicesrecord21_'.date('Y-m-d').'.pdf';
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
    