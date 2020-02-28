<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedmedeobquarterlyrecord</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>Parent Id</th>
      <th>Page</th>
      <th>PageDate</th>
      <th>QuarterPeriodStart</th>
      <th>QuarterPeriodEnd</th>
      <th>MemberNumber</th>
      <th>Name</th>
      <th>Address</th>
      <th>City</th>
      <th>State</th>
      <th>Zip</th>
      <th>BilledAmountQuarter</th>
      <th>AllowedAmountQuarter</th>
      <th>PaidAmountQuarter</th>
      <th>MemberResponsibilityQuarter</th>
      <th>BilledAmountYear</th>
      <th>AllowedAmountYear</th>
      <th>PaidAmountYear</th>
      <th>MemberResponsibilityYear</th>
      <th>OopUsedYear</th>
      <th>OopMaxYear</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->parent_id.'</td>
	<td>'.$rows->page.'</td>
	<td>'.$rows->pageDate.'</td>
	<td>'.$rows->quarterPeriodStart.'</td>
	<td>'.$rows->quarterPeriodEnd.'</td>
	<td>'.$rows->memberNumber.'</td>
	<td>'.$rows->name.'</td>
	<td>'.$rows->address.'</td>
	<td>'.$rows->city.'</td>
	<td>'.$rows->state.'</td>
	<td>'.$rows->zip.'</td>
	<td>'.$rows->billedAmountQuarter.'</td>
	<td>'.$rows->allowedAmountQuarter.'</td>
	<td>'.$rows->paidAmountQuarter.'</td>
	<td>'.$rows->memberResponsibilityQuarter.'</td>
	<td>'.$rows->billedAmountYear.'</td>
	<td>'.$rows->allowedAmountYear.'</td>
	<td>'.$rows->paidAmountYear.'</td>
	<td>'.$rows->memberResponsibilityYear.'</td>
	<td>'.$rows->oopUsedYear.'</td>
	<td>'.$rows->oopMaxYear.'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'mailingdataavmedmedeobquarterlyrecord_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdataavmedmedeobquarterlyrecord_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdataavmedmedeobquarterlyrecord_'.date('Y-m-d').'.pdf';
	
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