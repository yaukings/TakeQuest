	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h3>Welcome, Player</h3>
					<h1><?php echo $username ?></h1>
					<h5>Newbie</h5>		
					<p><br/><a href="<?php echo base_url(); ?>core/user_profil" class="btn btn-theme">cek Profil</a></p>		
				</div>
				</div>
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="20"
				  aria-valuemin="0" aria-valuemax="100" style="width:20">
				    <span class="sr-only">100% Complete</span>
				  </div>
				</div>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->

	<!-- *****************************************************************************************************************
	 Quest Mu
	 ***************************************************************************************************************** -->
	 <!--<br>
	 <br>
	 <h3><center>Questmu</center></h3>
	 <div id="service">
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
	    <!-- </div> -- /container -->
	 	<!-- <br> 
	 	<center><a href="yourquest.php">Lihat semua Quest milikmu</a></center>
	 </div><! --/service -->

	<!-- *****************************************************************************************************************
	 Active Quest
	 ***************************************************************************************************************** -->
	 <!--<br>
	 <br>
	 <h3><center>Quest Active</center></h3>
	 <div id="service">
	 	<div class="container">
 			<div class="row centered">
 				<?php
 				//include ("conn.php");
				    //$query3 = mysqli_query($conn,"call sp_q_mine('$usr_id')");
				     
				    //$ah1=0;	
					//while($final3 = mysqli_fetch_assoc($query3))
					//{   
						//if($ah1==3)
						//{
						//	break;
						//}
						//$ah1++;
					//echo  "<div class='col-md-4'>
	 					//<i class='fa fa-trophy'></i>" ."<h4>" . $final3['q_name'] . "</h4>" . "<p>" . $final3['q_desc'] . "<p>" . "<p>"."</>".
					//"
 				
 				//<form role='form' method='post' action='desc_post.php'>
           
	            //<p><br/><button type='submit' class='btn btn-theme' name='page' value=". $final3['q_id'].">More</button></p>
	          //</form>
	          //</div>
 				//"; 
					
				//}
				//if($ah1==0)
					//{
						//echo "<center><p>Quest Kosong, Cari Quest <a href='cariquest.php'>sekarang</a></p></center>";
					//}?>		 			 					 					
	 		</div>
	 	<!--</div>/container -->
	 	<!-- <br> 
	 	<center><a href="aktifquest.php">Lihat semua Quest aktif</a></center>
	 </div><! --/service -->


	<!-- *****************************************************************************************************************
	 SERVICE LOGOS
	 ***************************************************************************************************************** -->
	 <br>
	 <br>
	 <h3><center>What's New</center></h3>
	 <div id="service">
	 	<div class="container">
 			<div class="row centered">
 			<?php for ($x = 0; $x <= 2; $x++) { ?>
 			<?php if(!empty($result[$x])){ ?> 
	 					
 				<div class='col-md-4'>
	 					<i class='fa fa-trophy'></i><h4><?php echo $result[$x]->quest_name ?></h4><p><?php echo $result[$x]->quest_description;  ?></p>
 				<form role='form' method='post' action='<?php echo base_url(); ?>core/detail_general'>
           	
	            <p><br/><button type='submit' class='btn btn-theme' name='page' value='<?php echo $result[$x]->quest_id ?>'>More</button></p>
	          </form>
	          </div>
			<?php }} ?>	 					 					
	 		</div>
	 	</div><! --/container -->
	 	<br> 
	 	<center><a href="<?php echo base_url(); ?>core/cari_quest">Lihat semua Quest</a></center>
	 </div><! --/service -->
	 
	 
	 
	<!-- *****************************************************************************************************************
	 MIDDLE CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 		
	 		
	 		<div class="col-lg-3 col-lg-offset-1">
		 		<h4>Buatlah sebuah Quest baru</h4>
		 		<p>Banyak orang yang dapat memenuhi permintaanmu. Tapi kamu tidak tahu mereka dimana dan siapa mereka. Segera buat sebuah Quest untuk memenuhi permintaanmu. </p>
 				<p><br/><a href="buatquest.php" class="btn btn-theme">Buat Quest</a></p>
	 		</div>
	 		<div class="col-lg-3 col-lg-offset-1">
		 		<h4>Cari Quest sekarang</h4>
		 		<p>Tanpa kamu sadari banyak orang memerlukan bantuan dan usahamu. Karena setiap usaha dan kemampuan memiliki nilai tersendiri. Segera temukan mereka sekarang di TakeQuest. </p>
 				<p><br/><a href="cariquest.php" class="btn btn-theme">Cari Quest</a></p>
	 		</div>
	 	</div><! --/row -->
	 </div><! --/container -->
