	<?php
	/*
	Hezecom Responsive Gallery, Portfolio and Slider Manager
	Author: Hezecom Technologies (http://hezecom.com) info@hezecom.net
	COPYRIGHT 2015 ALL RIGHTS RESERVED
	
	You must have purchased a valid license from CodeCanyon.com in order to have 
	access this file.

	You may only use this file according to the respective licensing terms 
	you agreed to when purchasing this item.
	*/

   ?>

    
    <body class="register-page"> 
<form action="<?php echo H_ADMIN_MAIN.'&view=hsys_users&do=lostpro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
    <div class="register-box">
      <div class="register-logo">
         <a href="<?php echo H_ADMIN;?>"><b>Ultimate</b>Speed</a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Get your lost password</p>
        <div class="output"></div>
        
          <div class="form-group has-feedback">
            <input type="text" name="email" class="form-control" placeholder="Enter your email" autocomplete="off"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
         
          <div class="row">
            <div class="col-xs-12">
        <button class="btn btn-primary btn-block btn-flat" name="submit" type="submit"  id="msgButton"> Retrieve Password</button>
            </div><!-- /.col -->
          </div>
               
        <a href="<?php echo H_LOGIN;?>" class="text-center">I already have an account</a><br>

        <a href="<?php echo H_REGISTER;?>" class="text-center">Register as a new member</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->
</form> 

