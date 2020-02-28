<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Jobinterfaceitem</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>DateInserted</td>
	<td>'.$rows->dateInserted.'</td>
  	</tr>
    <tr>
	<td>Name</td>
	<td>'.$rows->name.'</td>
  	</tr>
    <tr>
	<td>Value</td>
	<td>'.$rows->value.'</td>
  	</tr>
    <tr>
	<td>JobData Id</td>
	<td>'.$rows->jobData_id.'</td>
  	</tr>
    <tr>
	<td>Discr</td>
	<td>'.$rows->discr.'</td>
  	</tr>
    <tr>
	<td>PathDownloadLink</td>
	<td>'.$rows->pathDownloadLink.'</td>
  	</tr>
    <tr>
	<td>SaveBy</td>
	<td>'.$rows->saveBy.'</td>
  	</tr>
    <tr>
	<td>PathUploadFolder</td>
	<td>'.$rows->pathUploadFolder.'</td>
  	</tr>
    <tr>
	<td>PathUploadFileName</td>
	<td>'.$rows->pathUploadFileName.'</td>
  	</tr>
    <tr>
	<td>CcToTrigger Id</td>
	<td>'.$rows->ccToTrigger_id.'</td>
  	</tr>
    <tr>
	<td>ApprovedAction</td>
	<td>'.$rows->approvedAction.'</td>
  	</tr>
    <tr>
	<td>DateApproved</td>
	<td>'.$rows->dateApproved.'</td>
  	</tr>
    <tr>
	<td>ApprovedBy</td>
	<td>'.$rows->approvedBy.'</td>
  	</tr>
    <tr>
	<td>DateModified</td>
	<td>'.$rows->dateModified.'</td>
  	</tr>
    <tr>
	<td>ApprovedDisapproved</td>
	<td>'.$rows->approvedDisapproved.'</td>
  	</tr>
    <tr>
	<td>DateApprovedDisapproved</td>
	<td>'.$rows->dateApprovedDisapproved.'</td>
  	</tr>
    <tr>
	<td>ApprovedDisapprovedBy</td>
	<td>'.$rows->approvedDisapprovedBy.'</td>
  	</tr>';
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
    