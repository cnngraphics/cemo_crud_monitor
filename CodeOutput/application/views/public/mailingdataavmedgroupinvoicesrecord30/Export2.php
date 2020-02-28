<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedgroupinvoicesrecord30</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>Parent Id</td>
	<td>'.$rows->parent_id.'</td>
  	</tr>
    <tr>
	<td>InvNo</td>
	<td>'.$rows->invNo.'</td>
  	</tr>
    <tr>
	<td>ContractNo</td>
	<td>'.$rows->contractNo.'</td>
  	</tr>
    <tr>
	<td>LastName</td>
	<td>'.$rows->lastName.'</td>
  	</tr>
    <tr>
	<td>FirstName</td>
	<td>'.$rows->firstName.'</td>
  	</tr>
    <tr>
	<td>DivisionNo</td>
	<td>'.$rows->divisionNo.'</td>
  	</tr>
    <tr>
	<td>SpanEffDate</td>
	<td>'.$rows->spanEffDate.'</td>
  	</tr>
    <tr>
	<td>PremFromDate</td>
	<td>'.$rows->premFromDate.'</td>
  	</tr>
    <tr>
	<td>PremToDate</td>
	<td>'.$rows->premToDate.'</td>
  	</tr>
    <tr>
	<td>PremContType</td>
	<td>'.$rows->premContType.'</td>
  	</tr>
    <tr>
	<td>FamilySize</td>
	<td>'.$rows->familySize.'</td>
  	</tr>
    <tr>
	<td>PremAmount</td>
	<td>'.$rows->premAmount.'</td>
  	</tr>
    <tr>
	<td>NbrDayMonths</td>
	<td>'.$rows->nbrDayMonths.'</td>
  	</tr>
    <tr>
	<td>PremAmtEntry1</td>
	<td>'.$rows->premAmtEntry1.'</td>
  	</tr>
    <tr>
	<td>PremAmtEntry2</td>
	<td>'.$rows->premAmtEntry2.'</td>
  	</tr>
    <tr>
	<td>PremAmtEntry3</td>
	<td>'.$rows->premAmtEntry3.'</td>
  	</tr>
    <tr>
	<td>PremAmtEntry4</td>
	<td>'.$rows->premAmtEntry4.'</td>
  	</tr>
    <tr>
	<td>PremAmtEntry5</td>
	<td>'.$rows->premAmtEntry5.'</td>
  	</tr>
    <tr>
	<td>PremAmtEntry6</td>
	<td>'.$rows->premAmtEntry6.'</td>
  	</tr>
    <tr>
	<td>PremAmtEntry7</td>
	<td>'.$rows->premAmtEntry7.'</td>
  	</tr>
    <tr>
	<td>PremAmtEntry8</td>
	<td>'.$rows->premAmtEntry8.'</td>
  	</tr>
    <tr>
	<td>PremAmtEntry9</td>
	<td>'.$rows->premAmtEntry9.'</td>
  	</tr>
    <tr>
	<td>PremAmtEntry10</td>
	<td>'.$rows->premAmtEntry10.'</td>
  	</tr>
    <tr>
	<td>PremAmtEntry11</td>
	<td>'.$rows->premAmtEntry11.'</td>
  	</tr>
    <tr>
	<td>PremAmtEntry12</td>
	<td>'.$rows->premAmtEntry12.'</td>
  	</tr>';
   $excel.='</table>';
	
	$filename1= 'mailingdataavmedgroupinvoicesrecord30_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdataavmedgroupinvoicesrecord30_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdataavmedgroupinvoicesrecord30_'.date('Y-m-d').'.pdf';
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
    