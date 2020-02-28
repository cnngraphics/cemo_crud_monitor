<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedgroupinvoicesrecord10</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>InvNo</th>
      <th>InvDate</th>
      <th>DueDate</th>
      <th>CycleCode</th>
      <th>BillFrom</th>
      <th>BillTo</th>
      <th>BillingMethod</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->invNo.'</td>
	<td>'.$rows->invDate.'</td>
	<td>'.$rows->dueDate.'</td>
	<td>'.$rows->cycleCode.'</td>
	<td>'.$rows->billFrom.'</td>
	<td>'.$rows->billTo.'</td>
	<td>'.$rows->billingMethod.'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'mailingdataavmedgroupinvoicesrecord10_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdataavmedgroupinvoicesrecord10_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdataavmedgroupinvoicesrecord10_'.date('Y-m-d').'.pdf';
	
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