<!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->
	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h1><?php echo $username; ?></h1>
					<h5>Newbie</h5>		
					<h3>Quest dibuat : <?php foreach ($count as $pd){ echo $pd->jumlah; } ?></h3>
					<p><br/><a href="<?php echo base_url(); ?>core/create_quest" class="btn btn-theme">Buat Quest</a></p>	
				</div>
				</div>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->

	<!-- *****************************************************************************************************************
	 Active Quest
	 ***************************************************************************************************************** -->
	 <br>
	 <br>
	 <h3><center>Questmu</center></h3>
	 <div id="service">
	 	<div class="container">
 			<div class="row centered">
 			<?php foreach ($result as $pb) { ?>
 				<div class='col-md-4'>
	 					<i class='fa fa-trophy'></i><h4><?php echo $pb->quest_name ?></h4><p><?php echo $pb->quest_description ?></p>
 				<form role="form" action="<?php echo base_url(); ?>core/detail_own" method="post">
           
	            <p><br/><button type='submit' class='btn btn-theme' name='page' value="<?php echo $pb->quest_id ?>">More</button></p>
	          </form>
	          </div>
			<?php } ?>	 					 					
	 		</div>
	 	</div><! --/container -->
	 </div><! --/service -->
	 