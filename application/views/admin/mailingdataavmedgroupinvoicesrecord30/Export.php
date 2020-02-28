<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedgroupinvoicesrecord30</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>Parent Id</th>
      <th>InvNo</th>
      <th>ContractNo</th>
      <th>LastName</th>
      <th>FirstName</th>
      <th>DivisionNo</th>
      <th>SpanEffDate</th>
      <th>PremFromDate</th>
      <th>PremToDate</th>
      <th>PremContType</th>
      <th>FamilySize</th>
      <th>PremAmount</th>
      <th>NbrDayMonths</th>
      <th>PremAmtEntry1</th>
      <th>PremAmtEntry2</th>
      <th>PremAmtEntry3</th>
      <th>PremAmtEntry4</th>
      <th>PremAmtEntry5</th>
      <th>PremAmtEntry6</th>
      <th>PremAmtEntry7</th>
      <th>PremAmtEntry8</th>
      <th>PremAmtEntry9</th>
      <th>PremAmtEntry10</th>
      <th>PremAmtEntry11</th>
      <th>PremAmtEntry12</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->parent_id.'</td>
	<td>'.$rows->invNo.'</td>
	<td>'.$rows->contractNo.'</td>
	<td>'.$rows->lastName.'</td>
	<td>'.$rows->firstName.'</td>
	<td>'.$rows->divisionNo.'</td>
	<td>'.$rows->spanEffDate.'</td>
	<td>'.$rows->premFromDate.'</td>
	<td>'.$rows->premToDate.'</td>
	<td>'.$rows->premContType.'</td>
	<td>'.$rows->familySize.'</td>
	<td>'.$rows->premAmount.'</td>
	<td>'.$rows->nbrDayMonths.'</td>
	<td>'.$rows->premAmtEntry1.'</td>
	<td>'.$rows->premAmtEntry2.'</td>
	<td>'.$rows->premAmtEntry3.'</td>
	<td>'.$rows->premAmtEntry4.'</td>
	<td>'.$rows->premAmtEntry5.'</td>
	<td>'.$rows->premAmtEntry6.'</td>
	<td>'.$rows->premAmtEntry7.'</td>
	<td>'.$rows->premAmtEntry8.'</td>
	<td>'.$rows->premAmtEntry9.'</td>
	<td>'.$rows->premAmtEntry10.'</td>
	<td>'.$rows->premAmtEntry11.'</td>
	<td>'.$rows->premAmtEntry12.'</td>
	</tr>';
	}
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