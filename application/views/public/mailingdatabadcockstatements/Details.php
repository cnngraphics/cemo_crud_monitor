
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Details.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatabadcockstatements
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
    <h3 class="box-title">Mailingdatabadcockstatements</h3>
   <ul class="nav pull-right">
				
	<a href="<?php echo H_CLIENT;?>&view=mailingdatabadcockstatements&do=viewall" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mailingdatabadcockstatements&do=add" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_ADD;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mailingdatabadcockstatements&id=<?php echo $rows->id;?>&do=update" title="<?php echo LANG_TIP_UPDATE;?> Record" class="btn btn-default btn-xs tip"><i class="fa fa-edit"></i> <?php echo LANG_UPDATE;?></a>
	
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mailingdatabadcockstatements&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=PDF" title="<?php echo LANG_TIP_PDF;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-file"></i> <?php echo LANG_PDF;?></a>
	
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mailingdatabadcockstatements&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=word" title="<?php echo LANG_TIP_WORD;?>" class="btn btn-default btn-xs tip"><i class="fa fa-file-o"></i> <?php echo LANG_WORD;?></a>
	
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mailingdatabadcockstatements&id=<?php echo $rows->id;?>&do=export2&hexport=yes&etype=printer" title="<?php echo LANG_TIP_PRINT;?>" target="_blank" class="btn btn-default btn-xs tip"><i class="fa fa-print"></i> <?php echo LANG_PRINT;?></a>
	
	<a href="<?php echo H_CLIENT;?>&view=mailingdatabadcockstatements&id=<?php echo $rows->id;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE_ALL;?>" class="btn btn-default btn-xs tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	</ul>
	
	 </div><!-- /.box-header -->
   <div class="box-body">
	<table data-page="false" class="table table-striped table-bordered">
	 <tbody>
		  	
	<tr>
	<th>FirstName</th><td><?php echo $rows->firstName;?></td>
	</tr>
		
	<tr>
	<th>LastName</th><td><?php echo $rows->lastName;?></td>
	</tr>
		
	<tr>
	<th>MiddleName</th><td><?php echo $rows->middleName;?></td>
	</tr>
		
	<tr>
	<th>FullName</th><td><?php echo $rows->fullName;?></td>
	</tr>
		
	<tr>
	<th>Address1</th><td><?php echo $rows->address1;?></td>
	</tr>
		
	<tr>
	<th>MmAddress1</th><td><?php echo $rows->mmAddress1;?></td>
	</tr>
		
	<tr>
	<th>Address2</th><td><?php echo $rows->address2;?></td>
	</tr>
		
	<tr>
	<th>MmAddress2</th><td><?php echo $rows->mmAddress2;?></td>
	</tr>
		
	<tr>
	<th>City</th><td><?php echo $rows->city;?></td>
	</tr>
		
	<tr>
	<th>MmCity</th><td><?php echo $rows->mmCity;?></td>
	</tr>
		
	<tr>
	<th>State</th><td><?php echo $rows->state;?></td>
	</tr>
		
	<tr>
	<th>MmState</th><td><?php echo $rows->mmState;?></td>
	</tr>
		
	<tr>
	<th>ZipCode</th><td><?php echo $rows->zipCode;?></td>
	</tr>
		
	<tr>
	<th>MmZipCode</th><td><?php echo $rows->mmZipCode;?></td>
	</tr>
		
	<tr>
	<th>Country</th><td><?php echo $rows->country;?></td>
	</tr>
		
	<tr>
	<th>MmCountry</th><td><?php echo $rows->mmCountry;?></td>
	</tr>
		
	<tr>
	<th>MmImb</th><td><?php echo $rows->mmImb;?></td>
	</tr>
		
	<tr>
	<th>MmOpt</th><td><?php echo $rows->mmOpt;?></td>
	</tr>
		
	<tr>
	<th>MmReturnCode</th><td><?php echo $rows->mmReturnCode;?></td>
	</tr>
		
	<tr>
	<th>MmDpv</th><td><?php echo $rows->mmDpv;?></td>
	</tr>
		
	<tr>
	<th>MmOrder</th><td><?php echo $rows->mmOrder;?></td>
	</tr>
		
	<tr>
	<th>MmCOAMoveToDate</th><td><?php echo $rows->mmCOAMoveToDate;?></td>
	</tr>
		
	<tr>
	<th>MmCOAMoveType</th><td><?php echo $rows->mmCOAMoveType;?></td>
	</tr>
		
	<tr>
	<th>PdfLocation</th><td><?php echo $rows->pdfLocation;?></td>
	</tr>
		
	<tr>
	<th>PdfTotPages</th><td><?php echo $rows->pdfTotPages;?></td>
	</tr>
		
	<tr>
	<th>Generic1</th><td><?php echo $rows->generic1;?></td>
	</tr>
		
	<tr>
	<th>Generic2</th><td><?php echo $rows->generic2;?></td>
	</tr>
		
	<tr>
	<th>MmImbDigi</th><td><?php echo $rows->mmImbDigi;?></td>
	</tr>
		
	<tr>
	<th>RecordId</th><td><?php echo $rows->recordId;?></td>
	</tr>
		
	<tr>
	<th>CustomerNumber</th><td><?php echo $rows->customerNumber;?></td>
	</tr>
		
	<tr>
	<th>BeginningCycle</th><td><?php echo $rows->beginningCycle;?></td>
	</tr>
		
	<tr>
	<th>EndingCycle</th><td><?php echo $rows->endingCycle;?></td>
	</tr>
		
	<tr>
	<th>StoreNumber</th><td><?php echo $rows->storeNumber;?></td>
	</tr>
		
	<tr>
	<th>Cycle</th><td><?php echo $rows->cycle;?></td>
	</tr>
		
	<tr>
	<th>DeliveryMethod</th><td><?php echo $rows->deliveryMethod;?></td>
	</tr>
		
	<tr>
	<th>SeqNumber</th><td><?php echo $rows->seqNumber;?></td>
	</tr>
		
	<tr>
	<th>MailingDataFile Id</th><td><?php echo $rows->mailingDataFile_id;?></td>
	</tr>
		
	<tr>
	<th>MailingPrintReadyFile Id</th><td><?php echo $rows->mailingPrintReadyFile_id;?></td>
	</tr>
		
	<tr>
	<th>MailingDataRecord Id</th><td><?php echo $rows->mailingDataRecord_id;?></td>
	</tr>
		
	<tr>
	<th>Qc</th><td><?php echo $rows->qc;?></td>
	</tr>
	</tbody>
	</table>
	 </div><!-- /.box-body -->
  </div><!-- /.box -->
  </div><!-- /.col -->
  </div><!-- /.row -->
	