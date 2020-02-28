
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Details.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedmedeobquarterlyrecord
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
    <h3 class="box-title">Mailingdataavmedmedeobquarterlyrecord</h3>
   <ul class="nav pull-right">
				
	<a href="<?php echo H_ADMIN;?>&view=mailingdataavmedmedeobquarterlyrecord&do=viewall" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdataavmedmedeobquarterlyrecord&do=add" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_ADD;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdataavmedmedeobquarterlyrecord&id=<?php echo $rows->id;?>&do=update" title="<?php echo LANG_TIP_UPDATE;?> Record" class="btn btn-default btn-xs tip"><i class="fa fa-edit"></i> <?php echo LANG_UPDATE;?></a>
	
	<a href="<?php echo H_ADMIN_MAIN;?>&view=mailingdataavmedmedeobquarterlyrecord&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=PDF" title="<?php echo LANG_TIP_PDF;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-file"></i> <?php echo LANG_PDF;?></a>
	
	<a href="<?php echo H_ADMIN_MAIN;?>&view=mailingdataavmedmedeobquarterlyrecord&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=word" title="<?php echo LANG_TIP_WORD;?>" class="btn btn-default btn-xs tip"><i class="fa fa-file-o"></i> <?php echo LANG_WORD;?></a>
	
	<a href="<?php echo H_ADMIN_MAIN;?>&view=mailingdataavmedmedeobquarterlyrecord&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=printer" title="<?php echo LANG_TIP_PRINT;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-print"></i> <?php echo LANG_PRINT;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdataavmedmedeobquarterlyrecord&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE_ALL;?>" class="btn btn-default btn-xs tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
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
	<th>PageDate</th><td><?php echo $rows->pageDate;?></td>
	</tr>
		
	<tr>
	<th>QuarterPeriodStart</th><td><?php echo $rows->quarterPeriodStart;?></td>
	</tr>
		
	<tr>
	<th>QuarterPeriodEnd</th><td><?php echo $rows->quarterPeriodEnd;?></td>
	</tr>
		
	<tr>
	<th>MemberNumber</th><td><?php echo $rows->memberNumber;?></td>
	</tr>
		
	<tr>
	<th>Name</th><td><?php echo $rows->name;?></td>
	</tr>
		
	<tr>
	<th>Address</th><td><?php echo $rows->address;?></td>
	</tr>
		
	<tr>
	<th>City</th><td><?php echo $rows->city;?></td>
	</tr>
		
	<tr>
	<th>State</th><td><?php echo $rows->state;?></td>
	</tr>
		
	<tr>
	<th>Zip</th><td><?php echo $rows->zip;?></td>
	</tr>
		
	<tr>
	<th>BilledAmountQuarter</th><td><?php echo $rows->billedAmountQuarter;?></td>
	</tr>
		
	<tr>
	<th>AllowedAmountQuarter</th><td><?php echo $rows->allowedAmountQuarter;?></td>
	</tr>
		
	<tr>
	<th>PaidAmountQuarter</th><td><?php echo $rows->paidAmountQuarter;?></td>
	</tr>
		
	<tr>
	<th>MemberResponsibilityQuarter</th><td><?php echo $rows->memberResponsibilityQuarter;?></td>
	</tr>
		
	<tr>
	<th>BilledAmountYear</th><td><?php echo $rows->billedAmountYear;?></td>
	</tr>
		
	<tr>
	<th>AllowedAmountYear</th><td><?php echo $rows->allowedAmountYear;?></td>
	</tr>
		
	<tr>
	<th>PaidAmountYear</th><td><?php echo $rows->paidAmountYear;?></td>
	</tr>
		
	<tr>
	<th>MemberResponsibilityYear</th><td><?php echo $rows->memberResponsibilityYear;?></td>
	</tr>
		
	<tr>
	<th>OopUsedYear</th><td><?php echo $rows->oopUsedYear;?></td>
	</tr>
		
	<tr>
	<th>OopMaxYear</th><td><?php echo $rows->oopMaxYear;?></td>
	</tr>
	</tbody>
	</table>
	 </div><!-- /.box-body -->
  </div><!-- /.box -->
  </div><!-- /.col -->
  </div><!-- /.row -->
	