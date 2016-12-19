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
          <a class="navbar-brand" href="<?php echo base_url(); ?>core"><img src="http://localhost/randomproject/image/tq_logo.png" class="img-rounded" alt="Cinque Terre" width="130" height="300" ></a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>core"  class="active">Home</a></li>
            <li><a href="<?php echo base_url(); ?>core/user_profil">Profil</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quest<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>core/cari_quest">Cari Quest</a></li>
                <li><a href="<?php echo base_url(); ?>core/aktif_quest">Quest Active</a></li>
                <li><a href="<?php echo base_url(); ?>core/owning_quest">Questmu</a></li>
                <li><a href="<?php echo base_url(); ?>core/create_quest">Buat Quest</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url(); ?>core/logout">Log Out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>