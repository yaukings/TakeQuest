<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
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
			 	
		 		<h4>Deskripsi Quest</h4>
		 		<p><?php echo $result[0]->quest_description ?></p>
		 		<h4>Persyaratan</h4>
		 		<p><?php echo $result[0]->quest_syarat ?></p>

		 		<form role='form' method='post' action='<?php echo base_url(); ?>core/quest_drop'>

		            <button type='submit' class='btn btn-theme' name='q_id' value="<?php echo $result[0]->quest_id ?>">Drop Quest</button>
		          </form>
		 		<br><br><br><br><br>
		 	</div>
		 	
		 	<div class="col-lg-4 col-lg-offset-1">
			 	<div class="spacing"></div>
		 		<h4>Keterangan</h4>
		 		<div class="hline"></div>	
		 		<p><b>Pemilik Quest:</b> <?php echo $result[0]->quest_owner ?></p>
		 		<p><b>Kapasitas Quest:</b> <?php echo $result[0]->quest_kapasitas ?> Player</p>
		 		<p><b>Reward:</b> <?php echo $result[0]->quest_reward ?></p>
		 		<p><b>Status:</b> <?php echo $result2[0]->status_name ?>
		 		</p>
		 	</div>

		 	
	 	</div><! --/row -->

	 	

	 </div><! --/container -->