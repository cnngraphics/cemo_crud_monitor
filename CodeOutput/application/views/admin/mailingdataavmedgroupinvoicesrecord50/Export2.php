<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedgroupinvoicesrecord50</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>InvNo</td>
	<td>'.$rows->invNo.'</td>
  	</tr>
    <tr>
	<td>Contracts</td>
	<td>'.$rows->contracts.'</td>
  	</tr>
    <tr>
	<td>Members</td>
	<td>'.$rows->members.'</td>
  	</tr>
    <tr>
	<td>PrevBalance</td>
	<td>'.$rows->prevBalance.'</td>
  	</tr>
    <tr>
	<td>TotRetroAdj</td>
	<td>'.$rows->totRetroAdj.'</td>
  	</tr>
    <tr>
	<td>TotAdj</td>
	<td>'.$rows->totAdj.'</td>
  	</tr>
    <tr>
	<td>Payments</td>
	<td>'.$rows->payments.'</td>
  	</tr>
    <tr>
	<td>Finance</td>
	<td>'.$rows->finance.'</td>
  	</tr>
    <tr>
	<td>BalanceForward</td>
	<td>'.$rows->balanceForward.'</td>
  	</tr>
    <tr>
	<td>TotPremium</td>
	<td>'.$rows->totPremium.'</td>
  	</tr>
    <tr>
	<td>AmountDue</td>
	<td>'.$rows->amountDue.'</td>
  	</tr>';
   $excel.='</table>';
	
	$filename1= 'mailingdataavmedgroupinvoicesrecord50_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdataavmedgroupinvoicesrecord50_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdataavmedgroupinvoicesrecord50_'.date('Y-m-d').'.pdf';
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
    