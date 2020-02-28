<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mtrbundle</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>SourceFile</td>
	<td>'.$rows->sourceFile.'</td>
  	</tr>
    <tr>
	<td>DeviceId</td>
	<td>'.$rows->deviceId.'</td>
  	</tr>
    <tr>
	<td>EdocJobId</td>
	<td>'.$rows->edocJobId.'</td>
  	</tr>
    <tr>
	<td>EdocMailingGroupId</td>
	<td>'.$rows->edocMailingGroupId.'</td>
  	</tr>
    <tr>
	<td>EdocPackageId</td>
	<td>'.$rows->edocPackageId.'</td>
  	</tr>
    <tr>
	<td>EdocSubmitterCrid</td>
	<td>'.$rows->edocSubmitterCrid.'</td>
  	</tr>
    <tr>
	<td>HandlingEventType</td>
	<td>'.$rows->handlingEventType.'</td>
  	</tr>
    <tr>
	<td>HandlingEventTypeDescription</td>
	<td>'.$rows->handlingEventTypeDescription.'</td>
  	</tr>
    <tr>
	<td>Imb</td>
	<td>'.$rows->imb.'</td>
  	</tr>
    <tr>
	<td>ImbMid</td>
	<td>'.$rows->imbMid.'</td>
  	</tr>
    <tr>
	<td>ImbRoutingCode</td>
	<td>'.$rows->imbRoutingCode.'</td>
  	</tr>
    <tr>
	<td>ImbSerialNumber</td>
	<td>'.$rows->imbSerialNumber.'</td>
  	</tr>
    <tr>
	<td>ImbStid</td>
	<td>'.$rows->imbStid.'</td>
  	</tr>
    <tr>
	<td>ImbTrackingCode</td>
	<td>'.$rows->imbTrackingCode.'</td>
  	</tr>
    <tr>
	<td>MachineName</td>
	<td>'.$rows->machineName.'</td>
  	</tr>
    <tr>
	<td>MailClassDescription</td>
	<td>'.$rows->mailClassDescription.'</td>
  	</tr>
    <tr>
	<td>MailShapeDescription</td>
	<td>'.$rows->mailShapeDescription.'</td>
  	</tr>
    <tr>
	<td>ParentContainerEdocContainerId</td>
	<td>'.$rows->parentContainerEdocContainerId.'</td>
  	</tr>
    <tr>
	<td>ParentTrayEdocContainerId</td>
	<td>'.$rows->parentTrayEdocContainerId.'</td>
  	</tr>
    <tr>
	<td>RoutingCodeImbMatchingPortion</td>
	<td>'.$rows->routingCodeImbMatchingPortion.'</td>
  	</tr>
    <tr>
	<td>ScanDatetime</td>
	<td>'.$rows->scanDatetime.'</td>
  	</tr>
    <tr>
	<td>ScanEventCode</td>
	<td>'.$rows->scanEventCode.'</td>
  	</tr>
    <tr>
	<td>ScanFacilityCity</td>
	<td>'.$rows->scanFacilityCity.'</td>
  	</tr>
    <tr>
	<td>ScanFacilityName</td>
	<td>'.$rows->scanFacilityName.'</td>
  	</tr>
    <tr>
	<td>ScanFacilityState</td>
	<td>'.$rows->scanFacilityState.'</td>
  	</tr>
    <tr>
	<td>ScanFacilityZip</td>
	<td>'.$rows->scanFacilityZip.'</td>
  	</tr>
    <tr>
	<td>ScanLocaleKey</td>
	<td>'.$rows->scanLocaleKey.'</td>
  	</tr>
    <tr>
	<td>ScannerType</td>
	<td>'.$rows->scannerType.'</td>
  	</tr>';
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
    