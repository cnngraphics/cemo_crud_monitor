<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mtrhandlingunit</p>';
	$excel.='<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
	<tr>
      <th>SourceFile</th>
      <th>AppointmentId</th>
      <th>BundleCount</th>
      <th>EdocContainerId</th>
      <th>EdocCsaAgreementId</th>
      <th>EdocCustomerGroupId</th>
      <th>EdocJobId</th>
      <th>EdocMailingGroupId</th>
      <th>EdocParentContainerId</th>
      <th>EdocSiblingContainerId</th>
      <th>EdocSubmitterCrid</th>
      <th>EdocUserLicenseCode</th>
      <th>HandlingEventType</th>
      <th>HandlingEventTypeDescription</th>
      <th>Imtb</th>
      <th>ImtbCin</th>
      <th>ImtbDestinationZip</th>
      <th>ImtbMid</th>
      <th>ImtbProcessingCode</th>
      <th>ImtbSerialNumber</th>
      <th>MailClassDescription</th>
      <th>MailShapeDescription</th>
      <th>ArrDtm</th>
      <th>PieceCount</th>
      <th>ScanDatetime</th>
      <th>FacAddr</th>
      <th>ScanFacilityCity</th>
      <th>ScanFacilityName</th>
      <th>ScanFacilityState</th>
      <th>ScanFacilityZip</th>
      <th>ScanLocaleKey</th>
      <th>ScanState</th>
      <th>ScannerType</th>
      <th>StcFacAddr</th>
      <th>StcFacCity</th>
      <th>StcFacLcleKey</th>
      <th>StcFacName</th>
      <th>StcFacState</th>
      <th>StcFacZip</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->sourceFile.'</td>
	<td>'.$rows->appointmentId.'</td>
	<td>'.$rows->bundleCount.'</td>
	<td>'.$rows->edocContainerId.'</td>
	<td>'.$rows->edocCsaAgreementId.'</td>
	<td>'.$rows->edocCustomerGroupId.'</td>
	<td>'.$rows->edocJobId.'</td>
	<td>'.$rows->edocMailingGroupId.'</td>
	<td>'.$rows->edocParentContainerId.'</td>
	<td>'.$rows->edocSiblingContainerId.'</td>
	<td>'.$rows->edocSubmitterCrid.'</td>
	<td>'.$rows->edocUserLicenseCode.'</td>
	<td>'.$rows->handlingEventType.'</td>
	<td>'.$rows->handlingEventTypeDescription.'</td>
	<td>'.$rows->imtb.'</td>
	<td>'.$rows->imtbCin.'</td>
	<td>'.$rows->imtbDestinationZip.'</td>
	<td>'.$rows->imtbMid.'</td>
	<td>'.$rows->imtbProcessingCode.'</td>
	<td>'.$rows->imtbSerialNumber.'</td>
	<td>'.$rows->mailClassDescription.'</td>
	<td>'.$rows->mailShapeDescription.'</td>
	<td>'.$rows->arrDtm.'</td>
	<td>'.$rows->pieceCount.'</td>
	<td>'.$rows->scanDatetime.'</td>
	<td>'.$rows->facAddr.'</td>
	<td>'.$rows->scanFacilityCity.'</td>
	<td>'.$rows->scanFacilityName.'</td>
	<td>'.$rows->scanFacilityState.'</td>
	<td>'.$rows->scanFacilityZip.'</td>
	<td>'.$rows->scanLocaleKey.'</td>
	<td>'.$rows->scanState.'</td>
	<td>'.$rows->scannerType.'</td>
	<td>'.$rows->stcFacAddr.'</td>
	<td>'.$rows->stcFacCity.'</td>
	<td>'.$rows->stcFacLcleKey.'</td>
	<td>'.$rows->stcFacName.'</td>
	<td>'.$rows->stcFacState.'</td>
	<td>'.$rows->stcFacZip.'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'mtrhandlingunit_'.date('Y-m-d').'.doc';
	$filename2= 'mtrhandlingunit_'.date('Y-m-d').'.xls';
	$pdf_output= 'mtrhandlingunit_'.date('Y-m-d').'.pdf';
	
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