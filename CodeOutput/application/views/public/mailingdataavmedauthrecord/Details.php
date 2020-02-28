
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Details.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedauthrecord
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
    <h3 class="box-title">Mailingdataavmedauthrecord</h3>
   <ul class="nav pull-right">
				
	<a href="<?php echo H_CLIENT;?>&view=mailingdataavmedauthrecord&do=viewall" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mailingdataavmedauthrecord&do=add" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_ADD;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mailingdataavmedauthrecord&id=<?php echo $rows->id;?>&do=update" title="<?php echo LANG_TIP_UPDATE;?> Record" class="btn btn-default btn-xs tip"><i class="fa fa-edit"></i> <?php echo LANG_UPDATE;?></a>
	
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mailingdataavmedauthrecord&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=PDF" title="<?php echo LANG_TIP_PDF;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-file"></i> <?php echo LANG_PDF;?></a>
	
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mailingdataavmedauthrecord&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=word" title="<?php echo LANG_TIP_WORD;?>" class="btn btn-default btn-xs tip"><i class="fa fa-file-o"></i> <?php echo LANG_WORD;?></a>
	
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mailingdataavmedauthrecord&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=printer" title="<?php echo LANG_TIP_PRINT;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-print"></i> <?php echo LANG_PRINT;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mailingdataavmedauthrecord&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE_ALL;?>" class="btn btn-default btn-xs tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	</ul>
	
	 </div><!-- /.box-header -->
   <div class="box-body">
	<table data-page="false" class="table table-striped table-bordered">
	 <tbody>
		  	
	<tr>
	<th>Parent Id</th><td><?php echo $rows->parent_id;?></td>
	</tr>
		
	<tr>
	<th>Page</th><td><?php echo $rows->page;?></td>
	</tr>
		
	<tr>
	<th>Date</th><td><?php echo $rows->date;?></td>
	</tr>
		
	<tr>
	<th>Summary</th><td><?php echo $rows->summary;?></td>
	</tr>
		
	<tr>
	<th>Info</th><td><?php echo $rows->info;?></td>
	</tr>
		
	<tr>
	<th>Status</th><td><?php echo $rows->status;?></td>
	</tr>
		
	<tr>
	<th>Prov</th><td><?php echo $rows->prov;?></td>
	</tr>
		
	<tr>
	<th>Header1</th><td><?php echo $rows->header1;?></td>
	</tr>
		
	<tr>
	<th>Header2</th><td><?php echo $rows->header2;?></td>
	</tr>
		
	<tr>
	<th>Details</th><td><?php echo $rows->details;?></td>
	</tr>
	</tbody>
	</table>
	 </div><!-- /.box-body -->
  </div><!-- /.box -->
  </div><!-- /.col -->
  </div><!-- /.row -->
	