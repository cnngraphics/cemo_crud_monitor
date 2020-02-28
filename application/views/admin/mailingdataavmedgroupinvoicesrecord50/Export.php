<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedgroupinvoicesrecord50</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>InvNo</th>
      <th>Contracts</th>
      <th>Members</th>
      <th>PrevBalance</th>
      <th>TotRetroAdj</th>
      <th>TotAdj</th>
      <th>Payments</th>
      <th>Finance</th>
      <th>BalanceForward</th>
      <th>TotPremium</th>
      <th>AmountDue</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->invNo.'</td>
	<td>'.$rows->contracts.'</td>
	<td>'.$rows->members.'</td>
	<td>'.$rows->prevBalance.'</td>
	<td>'.$rows->totRetroAdj.'</td>
	<td>'.$rows->totAdj.'</td>
	<td>'.$rows->payments.'</td>
	<td>'.$rows->finance.'</td>
	<td>'.$rows->balanceForward.'</td>
	<td>'.$rows->totPremium.'</td>
	<td>'.$rows->amountDue.'</td>
	</tr>';
	}
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