<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedmedeobquarterlyrecord</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>Parent Id</td>
	<td>'.$rows->parent_id.'</td>
  	</tr>
    <tr>
	<td>Page</td>
	<td>'.$rows->page.'</td>
  	</tr>
    <tr>
	<td>PageDate</td>
	<td>'.$rows->pageDate.'</td>
  	</tr>
    <tr>
	<td>QuarterPeriodStart</td>
	<td>'.$rows->quarterPeriodStart.'</td>
  	</tr>
    <tr>
	<td>QuarterPeriodEnd</td>
	<td>'.$rows->quarterPeriodEnd.'</td>
  	</tr>
    <tr>
	<td>MemberNumber</td>
	<td>'.$rows->memberNumber.'</td>
  	</tr>
    <tr>
	<td>Name</td>
	<td>'.$rows->name.'</td>
  	</tr>
    <tr>
	<td>Address</td>
	<td>'.$rows->address.'</td>
  	</tr>
    <tr>
	<td>City</td>
	<td>'.$rows->city.'</td>
  	</tr>
    <tr>
	<td>State</td>
	<td>'.$rows->state.'</td>
  	</tr>
    <tr>
	<td>Zip</td>
	<td>'.$rows->zip.'</td>
  	</tr>
    <tr>
	<td>BilledAmountQuarter</td>
	<td>'.$rows->billedAmountQuarter.'</td>
  	</tr>
    <tr>
	<td>AllowedAmountQuarter</td>
	<td>'.$rows->allowedAmountQuarter.'</td>
  	</tr>
    <tr>
	<td>PaidAmountQuarter</td>
	<td>'.$rows->paidAmountQuarter.'</td>
  	</tr>
    <tr>
	<td>MemberResponsibilityQuarter</td>
	<td>'.$rows->memberResponsibilityQuarter.'</td>
  	</tr>
    <tr>
	<td>BilledAmountYear</td>
	<td>'.$rows->billedAmountYear.'</td>
  	</tr>
    <tr>
	<td>AllowedAmountYear</td>
	<td>'.$rows->allowedAmountYear.'</td>
  	</tr>
    <tr>
	<td>PaidAmountYear</td>
	<td>'.$rows->paidAmountYear.'</td>
  	</tr>
    <tr>
	<td>MemberResponsibilityYear</td>
	<td>'.$rows->memberResponsibilityYear.'</td>
  	</tr>
    <tr>
	<td>OopUsedYear</td>
	<td>'.$rows->oopUsedYear.'</td>
  	</tr>
    <tr>
	<td>OopMaxYear</td>
	<td>'.$rows->oopMaxYear.'</td>
  	</tr>';
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
    