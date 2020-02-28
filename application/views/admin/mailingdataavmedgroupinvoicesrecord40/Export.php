<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedgroupinvoicesrecord40</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>Parent Id</th>
      <th>InvNo</th>
      <th>ContractNo</th>
      <th>LastName</th>
      <th>FirstName</th>
      <th>DivisionNo</th>
      <th>AdjEffDate</th>
      <th>AdjEndDate</th>
      <th>AdjContType</th>
      <th>AdjRemark</th>
      <th>AdjAmount</th>
      <th>NbrDaysMonths</th>
      <th>AdjAmountEntry1</th>
      <th>AdjAmountEntry2</th>
      <th>AdjAmountEntry3</th>
      <th>AdjAmountEntry4</th>
      <th>AdjAmountEntry5</th>
      <th>AdjAmountEntry6</th>
      <th>AdjAmountEntry7</th>
      <th>AdjAmountEntry8</th>
      <th>AdjAmountEntry9</th>
      <th>AdjAmountEntry10</th>
      <th>AdjAmountEntry11</th>
      <th>AdjAmountEntry12</th>
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
	<td>'.$rows->adjEffDate.'</td>
	<td>'.$rows->adjEndDate.'</td>
	<td>'.$rows->adjContType.'</td>
	<td>'.$rows->adjRemark.'</td>
	<td>'.$rows->adjAmount.'</td>
	<td>'.$rows->nbrDaysMonths.'</td>
	<td>'.$rows->adjAmountEntry1.'</td>
	<td>'.$rows->adjAmountEntry2.'</td>
	<td>'.$rows->adjAmountEntry3.'</td>
	<td>'.$rows->adjAmountEntry4.'</td>
	<td>'.$rows->adjAmountEntry5.'</td>
	<td>'.$rows->adjAmountEntry6.'</td>
	<td>'.$rows->adjAmountEntry7.'</td>
	<td>'.$rows->adjAmountEntry8.'</td>
	<td>'.$rows->adjAmountEntry9.'</td>
	<td>'.$rows->adjAmountEntry10.'</td>
	<td>'.$rows->adjAmountEntry11.'</td>
	<td>'.$rows->adjAmountEntry12.'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'mailingdataavmedgroupinvoicesrecord40_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdataavmedgroupinvoicesrecord40_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdataavmedgroupinvoicesrecord40_'.date('Y-m-d').'.pdf';
	
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