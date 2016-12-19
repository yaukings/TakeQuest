  <body>
       <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="http://localhost/randomproject/image/tq_logo.png" class="img-rounded" alt="Cinque Terre" width="130" height="300" ></a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url(); ?>core">Home</a></li>
			<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Sign In</a>
				<div class="dropdown-menu" style="padding: 15px; padding-bottom: 10px;">
				<?php echo validation_errors(); ?>
        		<?php echo form_open('../verifylogin'); ?>
				<form class="form-horizontal">
				  <input id="sp_uname" class="form-control login" type="text" name="username" placeholder="Username.." />
				  <input id="sp_pass" class="form-control login" type="password" name="password" placeholder="Password.."/>
				  <input class="btn btn-primary" type="submit" name="login" value="login" />
				</form>
				</div>
			</li>
            <li><a href="<?php echo base_url(); ?>Main/register_page">Sign Up</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>