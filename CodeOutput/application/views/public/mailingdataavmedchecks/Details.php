
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Details.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedchecks
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
    <h3 class="box-title">Mailingdataavmedchecks</h3>
   <ul class="nav pull-right">
				
	<a href="<?php echo H_CLIENT;?>&view=mailingdataavmedchecks&do=viewall" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mailingdataavmedchecks&do=add" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_ADD;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mailingdataavmedchecks&id=<?php echo $rows->id;?>&do=update" title="<?php echo LANG_TIP_UPDATE;?> Record" class="btn btn-default btn-xs tip"><i class="fa fa-edit"></i> <?php echo LANG_UPDATE;?></a>
	
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mailingdataavmedchecks&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=PDF" title="<?php echo LANG_TIP_PDF;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-file"></i> <?php echo LANG_PDF;?></a>
	
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mailingdataavmedchecks&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=word" title="<?php echo LANG_TIP_WORD;?>" class="btn btn-default btn-xs tip"><i class="fa fa-file-o"></i> <?php echo LANG_WORD;?></a>
	
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mailingdataavmedchecks&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=printer" title="<?php echo LANG_TIP_PRINT;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-print"></i> <?php echo LANG_PRINT;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mailingdataavmedchecks&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE_ALL;?>" class="btn btn-default btn-xs tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	</ul>
	
	 </div><!-- /.box-header -->
   <div class="box-body">
	<table data-page="false" class="table table-striped table-bordered">
	 <tbody>
		  	
	<tr>
	<th>AAdd1</th><td><?php echo $rows->aAdd1;?></td>
	</tr>
		
	<tr>
	<th>AAdd2</th><td><?php echo $rows->aAdd2;?></td>
	</tr>
		
	<tr>
	<th>AAdd3</th><td><?php echo $rows->aAdd3;?></td>
	</tr>
		
	<tr>
	<th>AAdd4</th><td><?php echo $rows->aAdd4;?></td>
	</tr>
		
	<tr>
	<th>BAdd1</th><td><?php echo $rows->bAdd1;?></td>
	</tr>
		
	<tr>
	<th>BAdd2</th><td><?php echo $rows->bAdd2;?></td>
	</tr>
		
	<tr>
	<th>BAdd3</th><td><?php echo $rows->bAdd3;?></td>
	</tr>
		
	<tr>
	<th>BAdd4</th><td><?php echo $rows->bAdd4;?></td>
	</tr>
		
	<tr>
	<th>PAdd1</th><td><?php echo $rows->pAdd1;?></td>
	</tr>
		
	<tr>
	<th>PAdd2</th><td><?php echo $rows->pAdd2;?></td>
	</tr>
		
	<tr>
	<th>PAdd3</th><td><?php echo $rows->pAdd3;?></td>
	</tr>
		
	<tr>
	<th>PAdd4</th><td><?php echo $rows->pAdd4;?></td>
	</tr>
		
	<tr>
	<th>CheckId</th><td><?php echo $rows->checkId;?></td>
	</tr>
		
	<tr>
	<th>CheckNumber</th><td><?php echo $rows->checkNumber;?></td>
	</tr>
		
	<tr>
	<th>CheckDate</th><td><?php echo $rows->checkDate;?></td>
	</tr>
		
	<tr>
	<th>CheckAmount</th><td><?php echo $rows->checkAmount;?></td>
	</tr>
		
	<tr>
	<th>MicrCheck</th><td><?php echo $rows->micrCheck;?></td>
	</tr>
		
	<tr>
	<th>MicrRouting</th><td><?php echo $rows->micrRouting;?></td>
	</tr>
		
	<tr>
	<th>MicrAccount</th><td><?php echo $rows->micrAccount;?></td>
	</tr>
		
	<tr>
	<th>SeqNumber</th><td><?php echo $rows->seqNumber;?></td>
	</tr>
		
	<tr>
	<th>CreatedAt</th><td><?php echo $rows->createdAt;?></td>
	</tr>
		
	<tr>
	<th>JobData Id</th><td><?php echo $rows->jobData_id;?></td>
	</tr>
		
	<tr>
	<th>MailingDataFile Id</th><td><?php echo $rows->mailingDataFile_id;?></td>
	</tr>
		
	<tr>
	<th>MailingPrintReadyFile Id</th><td><?php echo $rows->mailingPrintReadyFile_id;?></td>
	</tr>
		
	<tr>
	<th>Discr</th><td><?php echo $rows->discr;?></td>
	</tr>
	</tbody>
	</table>
	 </div><!-- /.box-body -->
  </div><!-- /.box -->
  </div><!-- /.col -->
  </div><!-- /.row -->
	