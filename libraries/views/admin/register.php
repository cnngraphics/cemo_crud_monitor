<body class="register-page"> 
<form action="<?php echo H_ADMIN_MAIN.'&view=hsys_users&do=addpro';?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
    <div class="register-box">
      <div class="register-logo">
         <a href="<?php echo H_CLIENT;?>"><b>Ultimate</b>Speed</a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <div class="output"></div>
        
        <input name="user_status" type="hidden" value="1">
         <input name="user_position" type="hidden" value="2">
       
          <div class="form-group has-feedback">
            <input type="text" name="name" class="form-control" placeholder="Full name"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" name="email" class="form-control" placeholder="Email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
           <div class="form-group has-feedback">
            <input type="text" name="username" maxlength="50" class="form-control" placeholder="Username"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
           <div class="form-group has-feedback">
            <input type="text" name="phone" class="form-control" placeholder="Phone"/>
            <span class="glyphicon glyphicon-phone form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
          <input id="password" name="password" type="password" maxlength="50"  value="" class="form-control" placeholder="Password" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input id="password2" name="password2" type="password" maxlength="50"  value="" class="form-control" placeholder="Retype password" />
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
        <input name="register" class="btn btn-primary btn-block btn-flat " type="submit" value="Register">
            </div><!-- /.col -->
          </div>
               
        <a href="<?php echo H_LOGIN;?>" class="text-center">I already have a membership</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->
</form> 
