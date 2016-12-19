<div id="blue">
	    <div class="container">
			<div class="row">
				<h3><?php echo $result[0]->quest_name ?></h3>

			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 TITLE & CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container mt">
	 	
		 	
		 	<div class="col-lg-5 col-lg-offset-1">
			 	
		 		<h4>Deskripsi</h4>
		 		<p><?php echo $result[0]->quest_description ?></p>
		 		<h4>Syarat</h4>
		 		<p><?php echo $result[0]->quest_syarat ?></p>
		 		<form role='form' method='post' action='<?php echo base_url(); ?>core/request'>
		 		<button type="submit" class="btn btn-theme" value="<?php echo $result[0]->quest_id ?>" name="q_id">Take Quest</button></form>
		 		<br>
		 		<hr>
		 	</div>
		 	
		 	<div class="col-lg-4 col-lg-offset-1">
			 	<div class="spacing"></div>
		 		<h4>Detail Quest</h4>
		 		<div class="hline"></div>
		 		<p><b>Kapasitas:</b> <?php echo $result[0]->quest_kapasitas ?></p>
		 		<p><b>Reward:</b> <?php echo $result[0]->quest_reward ?></p>

		 	</div>
		 	
	 	</div><! --/row -->

	 </div><! --/container -->