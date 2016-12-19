<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>Quest</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	 
	<!-- *****************************************************************************************************************
	 BLOG CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- SINGLE POST -->

	 		<div class="col-lg-8">
	 		<?php foreach ($result as $pb) { ?>
	 			<a href='single-post.php'><h3 class='ctitle'><?php echo $pb->quest_name ?></h3></a><p><?php echo $pb->quest_description ?></p>
					<form role='form' method='post' action='<?php echo base_url(); ?>core/detail_general'>
           
	            <p><br/><button type='submit'  name='page' value="<?php echo $pb->quest_id ?>">More Info</button></p>
		 		<div class='hline'></div>
		 		
		 		<div class='spacing'></div>
		 		<?php } ?>      
			</div><! --/col-lg-8 -->

	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
		 		<h4>Search</h4>
		 		<div class="hline"></div>
		 			<p>
		 				<br/>
		 				<input type="text" class="form-control" placeholder="Search something">
		 			</p>
		 			
		 		<div class="spacing"></div>
		 		
		 		
		 		
		 		
		            
		 		
	 	</div><! --/row -->
	 </div><! --/container -->
	 <br><br><br><br><br><br>
	 </div>