
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Details.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatabcparecord
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
    <h3 class="box-title">Mailingdatabcparecord</h3>
   <ul class="nav pull-right">
				
	<a href="<?php echo H_ADMIN;?>&view=mailingdatabcparecord&do=viewall" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdatabcparecord&do=add" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_ADD;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdatabcparecord&id=<?php echo $rows->id;?>&do=update" title="<?php echo LANG_TIP_UPDATE;?> Record" class="btn btn-default btn-xs tip"><i class="fa fa-edit"></i> <?php echo LANG_UPDATE;?></a>
	
	<a href="<?php echo H_ADMIN_MAIN;?>&view=mailingdatabcparecord&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=PDF" title="<?php echo LANG_TIP_PDF;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-file"></i> <?php echo LANG_PDF;?></a>
	
	<a href="<?php echo H_ADMIN_MAIN;?>&view=mailingdatabcparecord&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=word" title="<?php echo LANG_TIP_WORD;?>" class="btn btn-default btn-xs tip"><i class="fa fa-file-o"></i> <?php echo LANG_WORD;?></a>
	
	<a href="<?php echo H_ADMIN_MAIN;?>&view=mailingdatabcparecord&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=printer" title="<?php echo LANG_TIP_PRINT;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-print"></i> <?php echo LANG_PRINT;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdatabcparecord&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE_ALL;?>" class="btn btn-default btn-xs tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	</ul>
	
	 </div><!-- /.box-header -->
   <div class="box-body">
	<table data-page="false" class="table table-striped table-bordered">
	 <tbody>
		  	
	<tr>
	<th>HeaderPage1</th><td><?php echo $rows->headerPage1;?></td>
	</tr>
		
	<tr>
	<th>HeaderPage2</th><td><?php echo $rows->headerPage2;?></td>
	</tr>
		
	<tr>
	<th>CompanyAddress</th><td><?php echo $rows->companyAddress;?></td>
	</tr>
		
	<tr>
	<th>PropertyValues</th><td><?php echo $rows->propertyValues;?></td>
	</tr>
		
	<tr>
	<th>Taxes</th><td><?php echo $rows->taxes;?></td>
	</tr>
		
	<tr>
	<th>FooterTextPage1</th><td><?php echo $rows->footerTextPage1;?></td>
	</tr>
		
	<tr>
	<th>TablePage2</th><td><?php echo $rows->tablePage2;?></td>
	</tr>
		
	<tr>
	<th>TotalPage2</th><td><?php echo $rows->totalPage2;?></td>
	</tr>
		
	<tr>
	<th>ParcelNumber</th><td><?php echo $rows->parcelNumber;?></td>
	</tr>
		
	<tr>
	<th>Date</th><td><?php echo $rows->date;?></td>
	</tr>
		
	<tr>
	<th>File</th><td><?php echo $rows->file;?></td>
	</tr>
	</tbody>
	</table>
	 </div><!-- /.box-body -->
  </div><!-- /.box -->
  </div><!-- /.col -->
  </div><!-- /.row -->
	