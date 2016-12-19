<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3><?php echo $username ?></h3>

			</div><!-- /row -->
			<h4>Newbie</h4>
			<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $usr_exp ?>"
				  aria-valuemin="0" aria-valuemax="<?php echo $usr_exp ?>" style="width:<?php echo $usr_exp ?>%">
				    <span class="sr-only"><?php echo $usr_exp ?>% Complete</span>
				  </div>
				</div>
	    </div> <!-- /container -->
	</div><!-- /blue -->

	 
	

	<!-- *****************************************************************************************************************
	 TEEAM MEMBERS
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row centered">
		 	<h3 class="mb">Profil</h3>
		 	
		 	<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="he-wrap tpl6">
				<img src="http://localhost/randomproject/image/avatar.png" alt="">
					<div class="he-view">
						<div class="bg a0" data-animate="fadeIn">
                            <h3 class="a1" data-animate="fadeInDown">Contact Me:</h3>
                            <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
                            <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-twitter"></i></a>
                    	</div><!-- he bg -->
					</div><!-- he view -->		
				</div><!-- he wrap -->
				<h4><?php echo $result[0]->usr_First_name;echo " ";echo $result[0]->usr_Last_name; ?></h4>
				<h5 class="ctitle">Newbie</h5>
				<p><br/><a href="<?php echo base_url(); ?>core/edit_profil" class="btn btn-theme">Ubah Profil</a></p>
				<p></p>
				<div class="hline"></div>

		 	</div><! --/col-lg-3 -->
		 		<div class="col-lg-2" align="left">
		 		<h4>Username</h4>
		 		<h4>Password</h4>
		 		<h4>Name Depan</h4>
		 		<h4>Nama Belakang</h4>
		 		<h4>Email</h4>
	 			</div>


	 			<div class="col-lg-4" align="left">
	 			<div>
	 				<h4>: <?php echo $result[0]->username ?></h4>
			 		<h4><a href="ubahpassword.php">: Ubah Password</a></h4>
			 		<h4>: <?php echo $result[0]->usr_First_name ?></h4>
			 		<h4>: <?php echo $result[0]->usr_Last_name ?></h4>
			 		<h4>: <?php echo $result[0]->usr_Email ?></h4>
	 			</div>
	 			</div>
			</div><! --/col-lg-3 -->



		 	
		 	
	 	</div><! --/row -->
	 </div><! --/container -->