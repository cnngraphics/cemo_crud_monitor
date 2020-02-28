
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Details.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		jobinterfaceitem
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
    <h3 class="box-title">Jobinterfaceitem</h3>
   <ul class="nav pull-right">
				
	<a href="<?php echo H_ADMIN;?>&view=jobinterfaceitem&do=viewall" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=jobinterfaceitem&do=add" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_ADD;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=jobinterfaceitem&id=<?php echo $rows->id;?>&do=update" title="<?php echo LANG_TIP_UPDATE;?> Record" class="btn btn-default btn-xs tip"><i class="fa fa-edit"></i> <?php echo LANG_UPDATE;?></a>
	
	<a href="<?php echo H_ADMIN_MAIN;?>&view=jobinterfaceitem&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=PDF" title="<?php echo LANG_TIP_PDF;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-file"></i> <?php echo LANG_PDF;?></a>
	
	<a href="<?php echo H_ADMIN_MAIN;?>&view=jobinterfaceitem&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=word" title="<?php echo LANG_TIP_WORD;?>" class="btn btn-default btn-xs tip"><i class="fa fa-file-o"></i> <?php echo LANG_WORD;?></a>
	
	<a href="<?php echo H_ADMIN_MAIN;?>&view=jobinterfaceitem&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=printer" title="<?php echo LANG_TIP_PRINT;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-print"></i> <?php echo LANG_PRINT;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=jobinterfaceitem&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE_ALL;?>" class="btn btn-default btn-xs tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	</ul>
	
	 </div><!-- /.box-header -->
   <div class="box-body">
	<table data-page="false" class="table table-striped table-bordered">
	 <tbody>
		  	
	<tr>
	<th>DateInserted</th><td><?php echo $rows->dateInserted;?></td>
	</tr>
		
	<tr>
	<th>Name</th><td><?php echo $rows->name;?></td>
	</tr>
		
	<tr>
	<th>Value</th><td><?php echo $rows->value;?></td>
	</tr>
		
	<tr>
	<th>JobData Id</th><td><?php echo $rows->jobData_id;?></td>
	</tr>
		
	<tr>
	<th>Discr</th><td><?php echo $rows->discr;?></td>
	</tr>
		
	<tr>
	<th>PathDownloadLink</th><td><?php echo $rows->pathDownloadLink;?></td>
	</tr>
		
	<tr>
	<th>SaveBy</th><td><?php echo $rows->saveBy;?></td>
	</tr>
		
	<tr>
	<th>PathUploadFolder</th><td><?php echo $rows->pathUploadFolder;?></td>
	</tr>
		
	<tr>
	<th>PathUploadFileName</th><td><?php echo $rows->pathUploadFileName;?></td>
	</tr>
		
	<tr>
	<th>CcToTrigger Id</th><td><?php echo $rows->ccToTrigger_id;?></td>
	</tr>
		
	<tr>
	<th>ApprovedAction</th><td><?php echo $rows->approvedAction;?></td>
	</tr>
		
	<tr>
	<th>DateApproved</th><td><?php echo $rows->dateApproved;?></td>
	</tr>
		
	<tr>
	<th>ApprovedBy</th><td><?php echo $rows->approvedBy;?></td>
	</tr>
		
	<tr>
	<th>DateModified</th><td><?php echo $rows->dateModified;?></td>
	</tr>
		
	<tr>
	<th>ApprovedDisapproved</th><td><?php echo $rows->approvedDisapproved;?></td>
	</tr>
		
	<tr>
	<th>DateApprovedDisapproved</th><td><?php echo $rows->dateApprovedDisapproved;?></td>
	</tr>
		
	<tr>
	<th>ApprovedDisapprovedBy</th><td><?php echo $rows->approvedDisapprovedBy;?></td>
	</tr>
	</tbody>
	</table>
	 </div><!-- /.box-body -->
  </div><!-- /.box -->
  </div><!-- /.col -->
  </div><!-- /.row -->
	