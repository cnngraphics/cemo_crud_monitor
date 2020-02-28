<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Mtrcontainer</p>';
	$excel.='
	<table border="1" cellspacing="0" style="font-family:arial; font-size:14px; width: 100%;" cellpadding="5">
    <tr>
	<td>SourceFile</td>
	<td>'.$rows->sourceFile.'</td>
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
	<td>Imcb</td>
	<td>'.$rows->imcb.'</td>
  	</tr>
    <tr>
	<td>ImcbMid</td>
	<td>'.$rows->imcbMid.'</td>
  	</tr>
    <tr>
	<td>ImcbSerialNumber</td>
	<td>'.$rows->imcbSerialNumber.'</td>
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
	<td>ArrDtm</td>
	<td>'.$rows->arrDtm.'</td>
  	</tr>
    <tr>
	<td>PieceCount</td>
	<td>'.$rows->pieceCount.'</td>
  	</tr>
    <tr>
	<td>ScanDatetime</td>
	<td>'.$rows->scanDatetime.'</td>
  	</tr>
    <tr>
	<td>FacAddr</td>
	<td>'.$rows->facAddr.'</td>
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
	<td>ScanState</td>
	<td>'.$rows->scanState.'</td>
  	</tr>
    <tr>
	<td>ScannerType</td>
	<td>'.$rows->scannerType.'</td>
  	</tr>
    <tr>
	<td>StcDate</td>
	<td>'.$rows->stcDate.'</td>
  	</tr>
    <tr>
	<td>StcFacAddr</td>
	<td>'.$rows->stcFacAddr.'</td>
  	</tr>
    <tr>
	<td>StcFacCity</td>
	<td>'.$rows->stcFacCity.'</td>
  	</tr>
    <tr>
	<td>StcFacLcleKey</td>
	<td>'.$rows->stcFacLcleKey.'</td>
  	</tr>
    <tr>
	<td>StcFacName</td>
	<td>'.$rows->stcFacName.'</td>
  	</tr>
    <tr>
	<td>StcFacState</td>
	<td>'.$rows->stcFacState.'</td>
  	</tr>
    <tr>
	<td>StcFacZip</td>
	<td>'.$rows->stcFacZip.'</td>
  	</tr>
    <tr>
	<td>TrayCount</td>
	<td>'.$rows->trayCount.'</td>
  	</tr>';
   $excel.='</table>';
	
	$filename1= 'mtrcontainer_'.date('Y-m-d').'.doc';
	$filename2= 'mtrcontainer_'.date('Y-m-d').'.xls';
	$pdf_output= 'mtrcontainer_'.date('Y-m-d').'.pdf';
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
    