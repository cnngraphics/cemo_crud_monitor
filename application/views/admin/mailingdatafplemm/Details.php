
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Details.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatafplemm
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
    <h3 class="box-title">Mailingdatafplemm</h3>
   <ul class="nav pull-right">
				
	<a href="<?php echo H_ADMIN;?>&view=mailingdatafplemm&do=viewall" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdatafplemm&do=add" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_ADD;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdatafplemm&id=<?php echo $rows->id;?>&do=update" title="<?php echo LANG_TIP_UPDATE;?> Record" class="btn btn-default btn-xs tip"><i class="fa fa-edit"></i> <?php echo LANG_UPDATE;?></a>
	
	<a href="<?php echo H_ADMIN_MAIN;?>&view=mailingdatafplemm&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=PDF" title="<?php echo LANG_TIP_PDF;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-file"></i> <?php echo LANG_PDF;?></a>
	
	<a href="<?php echo H_ADMIN_MAIN;?>&view=mailingdatafplemm&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=word" title="<?php echo LANG_TIP_WORD;?>" class="btn btn-default btn-xs tip"><i class="fa fa-file-o"></i> <?php echo LANG_WORD;?></a>
	
	<a href="<?php echo H_ADMIN_MAIN;?>&view=mailingdatafplemm&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=printer" title="<?php echo LANG_TIP_PRINT;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-print"></i> <?php echo LANG_PRINT;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=mailingdatafplemm&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE_ALL;?>" class="btn btn-default btn-xs tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	</ul>
	
	 </div><!-- /.box-header -->
   <div class="box-body">
	<table data-page="false" class="table table-striped table-bordered">
	 <tbody>
		  	
	<tr>
	<th>JobId</th><td><?php echo $rows->jobId;?></td>
	</tr>
		
	<tr>
	<th>OriginalFileName</th><td><?php echo $rows->originalFileName;?></td>
	</tr>
		
	<tr>
	<th>FileName</th><td><?php echo $rows->fileName;?></td>
	</tr>
		
	<tr>
	<th>Sheets</th><td><?php echo $rows->sheets;?></td>
	</tr>
		
	<tr>
	<th>Date</th><td><?php echo $rows->date;?></td>
	</tr>
		
	<tr>
	<th>FullName</th><td><?php echo $rows->fullName;?></td>
	</tr>
		
	<tr>
	<th>Address1</th><td><?php echo $rows->address1;?></td>
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
	<th>StitchedDate</th><td><?php echo $rows->stitchedDate;?></td>
	</tr>
		
	<tr>
	<th>SeqNumber</th><td><?php echo $rows->seqNumber;?></td>
	</tr>
		
	<tr>
	<th>MailingPrintReadyFile Id</th><td><?php echo $rows->mailingPrintReadyFile_id;?></td>
	</tr>
		
	<tr>
	<th>PdfTotPages</th><td><?php echo $rows->pdfTotPages;?></td>
	</tr>
	</tbody>
	</table>
	 </div><!-- /.box-body -->
  </div><!-- /.box -->
  </div><!-- /.col -->
  </div><!-- /.row -->
	