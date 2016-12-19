<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3><?php echo $result[0]->quest_name ?> </h3>
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
		 		<form role='form' method='post' action='<?php echo base_url(); ?>core/quest_deleting'>

            <button type='submit' class='btn btn-theme' name='q_id' value="<?php echo $result[0]->quest_id ?>">Delete Quest</button>
          </form>
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
		 	<div class="col-lg-8 col-lg-offset-1">
		 		<h2>Status Player</h2>
		  		<p>User yang mengambil Quest anda</p>            
		  		<table class="table table-striped">
			    	<thead>
			      	<tr>
			        	<th>Username</th>
			        	<th>Status</th>
			 			<th>Quest Result</th>
			      	</tr>
			    	</thead>
			    	<tbody>
			    	
			      	<?php foreach ($result2 as $pb) { ?>
			     	<tr>
				        <td><?php echo $pb->username ?></td>
				        <td>
				        <form role='form' method='post' action='<?php echo base_url(); ?>core/quest_accept'>
				            <button type='submit' class='btn btn-info btn-xs' name='accept' value="<?php echo $pb->rq_id ?>">Accept</button>
				        </form>
				        </td>
				        <td>
				        <form role='form' method='post' action='<?php echo base_url(); ?>core/quest_complete'>
				            <button type='submit' class='btn btn-success btn-xs' name='complete' value="<?php echo $pb->rq_id ?>">Complete</button>
				        </form>
				        <form role='form' method='post' action='<?php echo base_url(); ?>core/quest_failed'>   
				            <button type='submit' class='btn btn-danger btn-xs' name='failed' value="<?php echo $pb->rq_id ?>">Failed</button>
				        </form>
				        	
				        </td>
			      	</tr>
			      	<?php } ?> 

			   		</tbody>
		 		</table>
			</div>		 	
		 	
	 	</div><! --/row -->

	 </div><! --/container -->