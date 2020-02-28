
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Add.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		mailingdatabcparecord
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	 
	 <form action="<?php echo H_CLIENT_MAIN.'&view=mailingdatabcparecord&do=addpro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<div class="col-12">
	<ul class="nav pull-right" style="margin-top:5px;">
	  <label for="hButton" class="btn btn-info btn-sm" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_CREATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_CREATE_RECORD;?>" />
	 	 
	  <a href="<?php echo H_CLIENT;?>&view=mailingdatabcparecord&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_CREATE_NEW;?> Mailingdatabcparecord</h3></div>
  <div class="panel-body">
	
	 <div class="output"></div>
	  
	<div class="form-group">
    <label class="control-label sr-only" for="headerPage1">HeaderPage1</label>
	<div class="input-group-addon left">HeaderPage1</div>
	<input id="headerPage1" name="headerPage1" type="text" maxlength="500"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="headerPage2">HeaderPage2</label>
	<div class="input-group-addon left">HeaderPage2</div>
	<input id="headerPage2" name="headerPage2" type="text" maxlength="2000"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="companyAddress">CompanyAddress</label>
	<div class="input-group-addon left">CompanyAddress</div>
	<input id="companyAddress" name="companyAddress" type="text" maxlength="2000"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="propertyValues">PropertyValues</label>
	<div class="input-group-addon left">PropertyValues</div>
	<textarea rows="5" id="propertyValues" name="propertyValues" class="form-control editor1 styler" required/></textarea>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="taxes">Taxes</label>
	<div class="input-group-addon left">Taxes</div>
	<textarea rows="5" id="taxes" name="taxes" class="form-control editor1 styler" required/></textarea>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="footerTextPage1">FooterTextPage1</label>
	<div class="input-group-addon left">FooterTextPage1</div>
	<input id="footerTextPage1" name="footerTextPage1" type="text" maxlength="500"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="tablePage2">TablePage2</label>
	<div class="input-group-addon left">TablePage2</div>
	<textarea rows="5" id="tablePage2" name="tablePage2" class="form-control editor1 styler" required/></textarea>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="totalPage2">TotalPage2</label>
	<div class="input-group-addon left">TotalPage2</div>
	<input id="totalPage2" name="totalPage2" type="text" maxlength="200"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="parcelNumber">ParcelNumber</label>
	<div class="input-group-addon left">ParcelNumber</div>
	<input id="parcelNumber" name="parcelNumber" type="text" maxlength="25"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="date">Date</label>
	<div class="input-group-addon left">Date</div>
	<input id="date" name="date" type="text" maxlength="15"  value="" class="form-control styler" required/>
	</div>

	<div class="form-group">
    <label class="control-label sr-only" for="file">File</label>
	<div class="input-group-addon left">File</div>
	<input id="file" name="file" type="text" maxlength="100"  value="" class="form-control styler" required/>
	</div>

	 <div class="output"></div>
	  </div>
	   <div class="panel-footer" style="border-bottom:solid 2px #CCC;"> 
     <label for="hButton" class="btn btn-info" style="color:#FFF;"><i class="fa fa-floppy-o"></i> <?php echo LANG_CREATE_RECORD;?></label>
	 <input type="submit" name="button" id="hButton" class="hidden" value="<?php echo LANG_CREATE_RECORD;?>" />
	 	 </div>
	 	 
	  
	
 </div><!--/col-12-->
	
	</form>
	 