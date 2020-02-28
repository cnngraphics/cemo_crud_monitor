<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mailingdataavmedmedeobrecord</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>Parent Id</th>
      <th>Page</th>
      <th>PageData</th>
      <th>PageDataAcc</th>
      <th>PageDataHeader</th>
      <th>PageDate</th>
      <th>PageBK</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->parent_id.'</td>
	<td>'.$rows->page.'</td>
	<td>'.$rows->pageData.'</td>
	<td>'.$rows->pageDataAcc.'</td>
	<td>'.$rows->pageDataHeader.'</td>
	<td>'.$rows->pageDate.'</td>
	<td>'.$rows->pageBK.'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'mailingdataavmedmedeobrecord_'.date('Y-m-d').'.doc';
	$filename2= 'mailingdataavmedmedeobrecord_'.date('Y-m-d').'.xls';
	$pdf_output= 'mailingdataavmedmedeobrecord_'.date('Y-m-d').'.pdf';
	
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