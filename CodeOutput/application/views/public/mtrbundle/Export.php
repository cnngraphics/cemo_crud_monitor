<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mtrbundle</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>SourceFile</th>
      <th>DeviceId</th>
      <th>EdocJobId</th>
      <th>EdocMailingGroupId</th>
      <th>EdocPackageId</th>
      <th>EdocSubmitterCrid</th>
      <th>HandlingEventType</th>
      <th>HandlingEventTypeDescription</th>
      <th>Imb</th>
      <th>ImbMid</th>
      <th>ImbRoutingCode</th>
      <th>ImbSerialNumber</th>
      <th>ImbStid</th>
      <th>ImbTrackingCode</th>
      <th>MachineName</th>
      <th>MailClassDescription</th>
      <th>MailShapeDescription</th>
      <th>ParentContainerEdocContainerId</th>
      <th>ParentTrayEdocContainerId</th>
      <th>RoutingCodeImbMatchingPortion</th>
      <th>ScanDatetime</th>
      <th>ScanEventCode</th>
      <th>ScanFacilityCity</th>
      <th>ScanFacilityName</th>
      <th>ScanFacilityState</th>
      <th>ScanFacilityZip</th>
      <th>ScanLocaleKey</th>
      <th>ScannerType</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->sourceFile.'</td>
	<td>'.$rows->deviceId.'</td>
	<td>'.$rows->edocJobId.'</td>
	<td>'.$rows->edocMailingGroupId.'</td>
	<td>'.$rows->edocPackageId.'</td>
	<td>'.$rows->edocSubmitterCrid.'</td>
	<td>'.$rows->handlingEventType.'</td>
	<td>'.$rows->handlingEventTypeDescription.'</td>
	<td>'.$rows->imb.'</td>
	<td>'.$rows->imbMid.'</td>
	<td>'.$rows->imbRoutingCode.'</td>
	<td>'.$rows->imbSerialNumber.'</td>
	<td>'.$rows->imbStid.'</td>
	<td>'.$rows->imbTrackingCode.'</td>
	<td>'.$rows->machineName.'</td>
	<td>'.$rows->mailClassDescription.'</td>
	<td>'.$rows->mailShapeDescription.'</td>
	<td>'.$rows->parentContainerEdocContainerId.'</td>
	<td>'.$rows->parentTrayEdocContainerId.'</td>
	<td>'.$rows->routingCodeImbMatchingPortion.'</td>
	<td>'.$rows->scanDatetime.'</td>
	<td>'.$rows->scanEventCode.'</td>
	<td>'.$rows->scanFacilityCity.'</td>
	<td>'.$rows->scanFacilityName.'</td>
	<td>'.$rows->scanFacilityState.'</td>
	<td>'.$rows->scanFacilityZip.'</td>
	<td>'.$rows->scanLocaleKey.'</td>
	<td>'.$rows->scannerType.'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'mtrbundle_'.date('Y-m-d').'.doc';
	$filename2= 'mtrbundle_'.date('Y-m-d').'.xls';
	$pdf_output= 'mtrbundle_'.date('Y-m-d').'.pdf';
	
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