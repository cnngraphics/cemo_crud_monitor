
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Details.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataprincess
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
    <h3 class="box-title">Mailingdataprincess</h3>
   <ul class="nav pull-right">
				
	<a href="<?php echo H_ADMIN;?>&view=mailingdataprincess&do=viewall" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdataprincess&do=add" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_ADD;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdataprincess&id=<?php echo $rows->id;?>&do=update" title="<?php echo LANG_TIP_UPDATE;?> Record" class="btn btn-default btn-xs tip"><i class="fa fa-edit"></i> <?php echo LANG_UPDATE;?></a>
	
	<a href="<?php echo H_ADMIN_MAIN;?>&view=mailingdataprincess&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=PDF" title="<?php echo LANG_TIP_PDF;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-file"></i> <?php echo LANG_PDF;?></a>
	
	<a href="<?php echo H_ADMIN_MAIN;?>&view=mailingdataprincess&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=word" title="<?php echo LANG_TIP_WORD;?>" class="btn btn-default btn-xs tip"><i class="fa fa-file-o"></i> <?php echo LANG_WORD;?></a>
	
	<a href="<?php echo H_ADMIN_MAIN;?>&view=mailingdataprincess&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=printer" title="<?php echo LANG_TIP_PRINT;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-print"></i> <?php echo LANG_PRINT;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdataprincess&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE_ALL;?>" class="btn btn-default btn-xs tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	</ul>
	
	 </div><!-- /.box-header -->
   <div class="box-body">
	<table data-page="false" class="table table-striped table-bordered">
	 <tbody>
		  	
	<tr>
	<th>Job</th><td><?php echo $rows->job;?></td>
	</tr>
		
	<tr>
	<th>SailDate</th><td><?php echo $rows->sailDate;?></td>
	</tr>
		
	<tr>
	<th>Counter</th><td><?php echo $rows->counter;?></td>
	</tr>
		
	<tr>
	<th>FirstName</th><td><?php echo $rows->firstName;?></td>
	</tr>
		
	<tr>
	<th>LastName</th><td><?php echo $rows->lastName;?></td>
	</tr>
		
	<tr>
	<th>CompanionF</th><td><?php echo $rows->companionF;?></td>
	</tr>
		
	<tr>
	<th>CompanionL</th><td><?php echo $rows->companionL;?></td>
	</tr>
		
	<tr>
	<th>CabinNumber</th><td><?php echo $rows->cabinNumber;?></td>
	</tr>
		
	<tr>
	<th>Greeting</th><td><?php echo $rows->greeting;?></td>
	</tr>
		
	<tr>
	<th>ExpirationDate</th><td><?php echo $rows->expirationDate;?></td>
	</tr>
		
	<tr>
	<th>Celebration</th><td><?php echo $rows->celebration;?></td>
	</tr>
		
	<tr>
	<th>VoyageId</th><td><?php echo $rows->voyageId;?></td>
	</tr>
		
	<tr>
	<th>UniqueId</th><td><?php echo $rows->uniqueId;?></td>
	</tr>
		
	<tr>
	<th>Offer</th><td><?php echo $rows->offer;?></td>
	</tr>
		
	<tr>
	<th>NumCardsInHolder</th><td><?php echo $rows->numCardsInHolder;?></td>
	</tr>
		
	<tr>
	<th>Value</th><td><?php echo $rows->value;?></td>
	</tr>
		
	<tr>
	<th>Disclaimer</th><td><?php echo $rows->disclaimer;?></td>
	</tr>
		
	<tr>
	<th>JustBecause</th><td><?php echo $rows->justBecause;?></td>
	</tr>
		
	<tr>
	<th>MailingDataFile Id</th><td><?php echo $rows->mailingDataFile_id;?></td>
	</tr>
		
	<tr>
	<th>MailingPrintReadyFile Id</th><td><?php echo $rows->mailingPrintReadyFile_id;?></td>
	</tr>
	</tbody>
	</table>
	 </div><!-- /.box-body -->
  </div><!-- /.box -->
  </div><!-- /.col -->
  </div><!-- /.row -->
	