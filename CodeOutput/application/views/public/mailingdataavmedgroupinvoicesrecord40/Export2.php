<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedgroupinvoicesrecord40</p>';
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
	<td>AdjEffDate</td>
	<td>'.$rows->adjEffDate.'</td>
  	</tr>
    <tr>
	<td>AdjEndDate</td>
	<td>'.$rows->adjEndDate.'</td>
  	</tr>
    <tr>
	<td>AdjContType</td>
	<td>'.$rows->adjContType.'</td>
  	</tr>
    <tr>
	<td>AdjRemark</td>
	<td>'.$rows->adjRemark.'</td>
  	</tr>
    <tr>
	<td>AdjAmount</td>
	<td>'.$rows->adjAmount.'</td>
  	</tr>
    <tr>
	<td>NbrDaysMonths</td>
	<td>'.$rows->nbrDaysMonths.'</td>
  	</tr>
    <tr>
	<td>AdjAmountEntry1</td>
	<td>'.$rows->adjAmountEntry1.'</td>
  	</tr>
    <tr>
	<td>AdjAmountEntry2</td>
	<td>'.$rows->adjAmountEntry2.'</td>
  	</tr>
    <tr>
	<td>AdjAmountEntry3</td>
	<td>'.$rows->adjAmountEntry3.'</td>
  	</tr>
    <tr>
	<td>AdjAmountEntry4</td>
	<td>'.$rows->adjAmountEntry4.'</td>
  	</tr>
    <tr>
	<td>AdjAmountEntry5</td>
	<td>'.$rows->adjAmountEntry5.'</td>
  	</tr>
    <tr>
	<td>AdjAmountEntry6</td>
	<td>'.$rows->adjAmountEntry6.'</td>
  	</tr>
    <tr>
	<td>AdjAmountEntry7</td>
	<td>'.$rows->adjAmountEntry7.'</td>
  	</tr>
    <tr>
	<td>AdjAmountEntry8</td>
	<td>'.$rows->adjAmountEntry8.'</td>
  	</tr>
    <tr>
	<td>AdjAmountEntry9</td>
	<td>'.$rows->adjAmountEntry9.'</td>
  	</tr>
    <tr>
	<td>AdjAmountEntry10</td>
	<td>'.$rows->adjAmountEntry10.'</td>
  	</tr>
    <tr>
	<td>AdjAmountEntry11</td>
	<td>'.$rows->adjAmountEntry11.'</td>
  	</tr>
    <tr>
	<td>AdjAmountEntry12</td>
	<td>'.$rows->adjAmountEntry12.'</td>
  	</tr>';
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
    