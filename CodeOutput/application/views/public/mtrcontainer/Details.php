
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Details.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mtrcontainer
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.com
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	<div class="row">
    <div class="col-xs-12">
    <div class="box">
    <div class="box-header">
    <h3 class="box-title">Mtrcontainer</h3>
   <ul class="nav pull-right">
				
	<a href="<?php echo H_CLIENT;?>&view=mtrcontainer&do=viewall" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mtrcontainer&do=add" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_ADD;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mtrcontainer&id=<?php echo $rows->id;?>&do=update" title="<?php echo LANG_TIP_UPDATE;?> Record" class="btn btn-default btn-xs tip"><i class="fa fa-edit"></i> <?php echo LANG_UPDATE;?></a>
	
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mtrcontainer&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=PDF" title="<?php echo LANG_TIP_PDF;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-file"></i> <?php echo LANG_PDF;?></a>
	
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mtrcontainer&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=word" title="<?php echo LANG_TIP_WORD;?>" class="btn btn-default btn-xs tip"><i class="fa fa-file-o"></i> <?php echo LANG_WORD;?></a>
	
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mtrcontainer&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=printer" title="<?php echo LANG_TIP_PRINT;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-print"></i> <?php echo LANG_PRINT;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mtrcontainer&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE_ALL;?>" class="btn btn-default btn-xs tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	</ul>
	
	 </div><!-- /.box-header -->
   <div class="box-body">
	<table data-page="false" class="table table-striped table-bordered">
	 <tbody>
		  	
	<tr>
	<th>SourceFile</th><td><?php echo $rows->sourceFile;?></td>
	</tr>
		
	<tr>
	<th>HandlingEventType</th><td><?php echo $rows->handlingEventType;?></td>
	</tr>
		
	<tr>
	<th>HandlingEventTypeDescription</th><td><?php echo $rows->handlingEventTypeDescription;?></td>
	</tr>
		
	<tr>
	<th>Imcb</th><td><?php echo $rows->imcb;?></td>
	</tr>
		
	<tr>
	<th>ImcbMid</th><td><?php echo $rows->imcbMid;?></td>
	</tr>
		
	<tr>
	<th>ImcbSerialNumber</th><td><?php echo $rows->imcbSerialNumber;?></td>
	</tr>
		
	<tr>
	<th>MailClassDescription</th><td><?php echo $rows->mailClassDescription;?></td>
	</tr>
		
	<tr>
	<th>MailShapeDescription</th><td><?php echo $rows->mailShapeDescription;?></td>
	</tr>
		
	<tr>
	<th>ArrDtm</th><td><?php echo $rows->arrDtm;?></td>
	</tr>
		
	<tr>
	<th>PieceCount</th><td><?php echo $rows->pieceCount;?></td>
	</tr>
		
	<tr>
	<th>ScanDatetime</th><td><?php echo $rows->scanDatetime;?></td>
	</tr>
		
	<tr>
	<th>FacAddr</th><td><?php echo $rows->facAddr;?></td>
	</tr>
		
	<tr>
	<th>ScanFacilityCity</th><td><?php echo $rows->scanFacilityCity;?></td>
	</tr>
		
	<tr>
	<th>ScanFacilityName</th><td><?php echo $rows->scanFacilityName;?></td>
	</tr>
		
	<tr>
	<th>ScanFacilityState</th><td><?php echo $rows->scanFacilityState;?></td>
	</tr>
		
	<tr>
	<th>ScanFacilityZip</th><td><?php echo $rows->scanFacilityZip;?></td>
	</tr>
		
	<tr>
	<th>ScanLocaleKey</th><td><?php echo $rows->scanLocaleKey;?></td>
	</tr>
		
	<tr>
	<th>ScanState</th><td><?php echo $rows->scanState;?></td>
	</tr>
		
	<tr>
	<th>ScannerType</th><td><?php echo $rows->scannerType;?></td>
	</tr>
		
	<tr>
	<th>StcDate</th><td><?php echo $rows->stcDate;?></td>
	</tr>
		
	<tr>
	<th>StcFacAddr</th><td><?php echo $rows->stcFacAddr;?></td>
	</tr>
		
	<tr>
	<th>StcFacCity</th><td><?php echo $rows->stcFacCity;?></td>
	</tr>
		
	<tr>
	<th>StcFacLcleKey</th><td><?php echo $rows->stcFacLcleKey;?></td>
	</tr>
		
	<tr>
	<th>StcFacName</th><td><?php echo $rows->stcFacName;?></td>
	</tr>
		
	<tr>
	<th>StcFacState</th><td><?php echo $rows->stcFacState;?></td>
	</tr>
		
	<tr>
	<th>StcFacZip</th><td><?php echo $rows->stcFacZip;?></td>
	</tr>
		
	<tr>
	<th>TrayCount</th><td><?php echo $rows->trayCount;?></td>
	</tr>
	</tbody>
	</table>
	 </div><!-- /.box-body -->
  </div><!-- /.box -->
  </div><!-- /.col -->
  </div><!-- /.row -->
	