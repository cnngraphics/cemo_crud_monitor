
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Details.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mtrpiece
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
    <h3 class="box-title">Mtrpiece</h3>
   <ul class="nav pull-right">
				
	<a href="<?php echo H_CLIENT;?>&view=mtrpiece&do=viewall" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mtrpiece&do=add" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_ADD;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mtrpiece&id=<?php echo $rows->id;?>&do=update" title="<?php echo LANG_TIP_UPDATE;?> Record" class="btn btn-default btn-xs tip"><i class="fa fa-edit"></i> <?php echo LANG_UPDATE;?></a>
	
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mtrpiece&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=PDF" title="<?php echo LANG_TIP_PDF;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-file"></i> <?php echo LANG_PDF;?></a>
	
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mtrpiece&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=word" title="<?php echo LANG_TIP_WORD;?>" class="btn btn-default btn-xs tip"><i class="fa fa-file-o"></i> <?php echo LANG_WORD;?></a>
	
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mtrpiece&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=printer" title="<?php echo LANG_TIP_PRINT;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-print"></i> <?php echo LANG_PRINT;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mtrpiece&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE_ALL;?>" class="btn btn-default btn-xs tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	</ul>
	
	 </div><!-- /.box-header -->
   <div class="box-body">
	<table data-page="false" class="table table-striped table-bordered">
	 <tbody>
		  	
	<tr>
	<th>SourceFile</th><td><?php echo $rows->sourceFile;?></td>
	</tr>
		
	<tr>
	<th>EdocJobId</th><td><?php echo $rows->edocJobId;?></td>
	</tr>
		
	<tr>
	<th>EdocMailingGroupId</th><td><?php echo $rows->edocMailingGroupId;?></td>
	</tr>
		
	<tr>
	<th>EdocSubmitterCrid</th><td><?php echo $rows->edocSubmitterCrid;?></td>
	</tr>
		
	<tr>
	<th>HandlingEventType</th><td><?php echo $rows->handlingEventType;?></td>
	</tr>
		
	<tr>
	<th>HandlingEventTypeDescription</th><td><?php echo $rows->handlingEventTypeDescription;?></td>
	</tr>
		
	<tr>
	<th>IdTag</th><td><?php echo $rows->idTag;?></td>
	</tr>
		
	<tr>
	<th>Imb</th><td><?php echo $rows->imb;?></td>
	</tr>
		
	<tr>
	<th>ImbMid</th><td><?php echo $rows->imbMid;?></td>
	</tr>
		
	<tr>
	<th>ImbRoutingCode</th><td><?php echo $rows->imbRoutingCode;?></td>
	</tr>
		
	<tr>
	<th>ImbSerialNumber</th><td><?php echo $rows->imbSerialNumber;?></td>
	</tr>
		
	<tr>
	<th>ImbStid</th><td><?php echo $rows->imbStid;?></td>
	</tr>
		
	<tr>
	<th>ImbTrackingCode</th><td><?php echo $rows->imbTrackingCode;?></td>
	</tr>
		
	<tr>
	<th>LdeDeliveryMode</th><td><?php echo $rows->ldeDeliveryMode;?></td>
	</tr>
		
	<tr>
	<th>LdeInventoryMethod</th><td><?php echo $rows->ldeInventoryMethod;?></td>
	</tr>
		
	<tr>
	<th>LdeTriggerMethod</th><td><?php echo $rows->ldeTriggerMethod;?></td>
	</tr>
		
	<tr>
	<th>MachineId</th><td><?php echo $rows->machineId;?></td>
	</tr>
		
	<tr>
	<th>MachineName</th><td><?php echo $rows->machineName;?></td>
	</tr>
		
	<tr>
	<th>MailClassDescription</th><td><?php echo $rows->mailClassDescription;?></td>
	</tr>
		
	<tr>
	<th>MailShapeDescription</th><td><?php echo $rows->mailShapeDescription;?></td>
	</tr>
		
	<tr>
	<th>ParentContainerEdocContainerId</th><td><?php echo $rows->parentContainerEdocContainerId;?></td>
	</tr>
		
	<tr>
	<th>ParentTrayEdocContainerId</th><td><?php echo $rows->parentTrayEdocContainerId;?></td>
	</tr>
		
	<tr>
	<th>PredictedDeliveryDate</th><td><?php echo $rows->predictedDeliveryDate;?></td>
	</tr>
		
	<tr>
	<th>RoutingCodeImbMatchingPortion</th><td><?php echo $rows->routingCodeImbMatchingPortion;?></td>
	</tr>
		
	<tr>
	<th>ScanDatetime</th><td><?php echo $rows->scanDatetime;?></td>
	</tr>
		
	<tr>
	<th>ScanEventCode</th><td><?php echo $rows->scanEventCode;?></td>
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
	<th>ScannerType</th><td><?php echo $rows->scannerType;?></td>
	</tr>
		
	<tr>
	<th>StartTheClockDate</th><td><?php echo $rows->startTheClockDate;?></td>
	</tr>
	</tbody>
	</table>
	 </div><!-- /.box-body -->
  </div><!-- /.box -->
  </div><!-- /.col -->
  </div><!-- /.row -->
	