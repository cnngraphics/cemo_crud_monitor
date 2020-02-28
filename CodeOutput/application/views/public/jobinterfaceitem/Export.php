<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Jobinterfaceitem</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>DateInserted</th>
      <th>Name</th>
      <th>Value</th>
      <th>JobData Id</th>
      <th>Discr</th>
      <th>PathDownloadLink</th>
      <th>SaveBy</th>
      <th>PathUploadFolder</th>
      <th>PathUploadFileName</th>
      <th>CcToTrigger Id</th>
      <th>ApprovedAction</th>
      <th>DateApproved</th>
      <th>ApprovedBy</th>
      <th>DateModified</th>
      <th>ApprovedDisapproved</th>
      <th>DateApprovedDisapproved</th>
      <th>ApprovedDisapprovedBy</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->dateInserted.'</td>
	<td>'.$rows->name.'</td>
	<td>'.$rows->value.'</td>
	<td>'.$rows->jobData_id.'</td>
	<td>'.$rows->discr.'</td>
	<td>'.$rows->pathDownloadLink.'</td>
	<td>'.$rows->saveBy.'</td>
	<td>'.$rows->pathUploadFolder.'</td>
	<td>'.$rows->pathUploadFileName.'</td>
	<td>'.$rows->ccToTrigger_id.'</td>
	<td>'.$rows->approvedAction.'</td>
	<td>'.$rows->dateApproved.'</td>
	<td>'.$rows->approvedBy.'</td>
	<td>'.$rows->dateModified.'</td>
	<td>'.$rows->approvedDisapproved.'</td>
	<td>'.$rows->dateApprovedDisapproved.'</td>
	<td>'.$rows->approvedDisapprovedBy.'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'jobinterfaceitem_'.date('Y-m-d').'.doc';
	$filename2= 'jobinterfaceitem_'.date('Y-m-d').'.xls';
	$pdf_output= 'jobinterfaceitem_'.date('Y-m-d').'.pdf';
	
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