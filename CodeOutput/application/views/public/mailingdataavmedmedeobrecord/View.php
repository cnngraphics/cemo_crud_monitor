
	<?php
	/*
	* =======================================================================
	* FILE NAME:        View.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdataavmedmedeobrecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.com
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	<?php AjaxSearchSuggest(''.H_ADMIN_MAIN.'&view=mailingdataavmedmedeobrecord&do=autosearch');?>
	
	<div class="row">
            <div class="col-xs-12">
              <div class="box">
              
               <div class="box-header with-border">
               <h3 class="box-title">Mailingdataavmedmedeobrecord</h3>
                <ul class="nav pull-right">

	<a href="<?php echo H_CLIENT;?>&view=mailingdataavmedmedeobrecord&do=add" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_ADD;?></a>
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mailingdataavmedmedeobrecord&do=export&hexport=yes&etype=printer" target="_blank" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_PRINT;?>"><i class="fa fa-print"></i> <?php echo LANG_PRINT;?></a>
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mailingdataavmedmedeobrecord&do=export&hexport=yes&etype=excel" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_EXCEL;?>"><i class="fa fa-table"></i> <?php echo LANG_EXCEL;?></a>
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mailingdataavmedmedeobrecord&do=export&hexport=yes&etype=word" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_WORD;?>"><i class="fa fa-file-o"></i> <?php echo LANG_WORD;?></a>
	<a href="<?php echo H_CLIENT_MAIN;?>&view=mailingdataavmedmedeobrecord&do=export&hexport=yes&etype=PDF" target="_blank" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_PDF;?>"><i class="fa fa-file"></i> <?php echo LANG_PDF;?></a>
	<a href="<?php echo H_CLIENT_MAIN;?>&view=hezedata&hexport=mailingdataavmedmedeobrecord" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_CSV_EXPORT;?>"><i class="fa fa-list-alt"></i> <?php echo LANG_CSV;?></a>
	<a href="<?php echo H_CLIENT;?>&view=mailingdataavmedmedeobrecord&do=truncate" class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_TRUNCATE;?>" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_TRUNCATE;?></a>
	</ul>
	
	 </div><!-- /.box-header -->
   <div class="box-body">
   
   <!--AUTO COMPLETE-->
  <div class="col-md-3 autosearch">
    <div class=" s-absolute">
            <div class="input-group">
              <input type="text" class="form-control input-sm styler" id="inputString" onkeyup="lookup(this.value);"  placeholder="search" autocomplete="off">
              <span class="input-group-btn">
                <button class="btn btn-default btn-sm" type="button"><span class="fa fa-search"></span></button>
              </span>
            </div><!-- /input-group -->
            <div id="suggestions"></div>
      </div>
      </div><!--/col-lg-3--> 
	 <!--/AUTO COMPLETE-->
	 
	<table data-page="false" class="table table-bordered table-hover table-striped" data-filter="#filter" data-page-size="<?php echo RECORD_PER_PAGE;?>" data-page-previous-text="<?php echo LANG_PREVIOUS;?>" data-page-next-text="<?php echo LANG_NEXT;?>">
	<thead>
    <tr><th data-sort-ignore="true"><?php echo LANG_ACTIONS;?></th>
	</tr>
  </thead>
  <tbody>
  
   <?php
	foreach($result as $rows)
			{
	?>
	<tr>
	<td class="table-actions">
	 <div class="btn-group">
	 <a href="<?php echo H_CLIENT;?>&view=mailingdataavmedmedeobrecord&id=<?php echo $rows->id;?>&do=details"  class="btn btn-info btn-xs"><span class="fa fa-search-plus tip" title="<?php echo LANG_TIP_DETAILS;?>"></span></a>
	<a href="<?php echo H_CLIENT;?>&view=mailingdataavmedmedeobrecord&id=<?php echo $rows->id;?>&do=update" class="btn btn-primary btn-xs"><span class="fa fa-edit tip" title="<?php echo LANG_TIP_UPDATE;?>"></span></a>
	 <a href="<?php echo H_CLIENT;?>&view=mailingdataavmedmedeobrecord&id=<?php echo $rows->id;?>&do=delete" class="btn btn-danger btn-xs" data-confirm="<?php echo LANG_DELETE_AUTH;?>"> <span class="fa fa-times tip" title="<?php echo LANG_TIP_DELETE;?>"></span></a>
	 </div>
	 </td>
    </tr>
	<?php }?>
  </tbody>
  <tfoot>
    <tr>
    <td colspan="">
    <div class="pagination"><?php echo $paging;?></div>
    </td>
    </tr>
</tfoot>
</table>
  </div><!-- /.box-body -->
  </div><!-- /.box -->
  </div><!-- /.col -->
  </div><!-- /.row -->