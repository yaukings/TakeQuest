<!-- *****************************************************************************************************************
   HEADERWRAP
   ***************************************************************************************************************** -->
  <div id="headerwrap">
      <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <h3>Show Your Skill</h3>
          <h1>Bergabunglah Dengan TakeQuest</h1>
          <h5>Karena Semua Usaha Memiliki Nilai Tersendiri</h5>   
          <p><br/><a href="<?php echo base_url(); ?>Main/register_page" class="btn btn-theme">Daftar Sekarang</a></p>  
        </div>
        </div>
      </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /headerwrap -->

  <!-- *****************************************************************************************************************
   SERVICE LOGOS
   ***************************************************************************************************************** -->
   <br>
   <br>
   <h3><center>What's New</center></h3>
   <div id="service">
    <div class="container">
      <div class="row centered">
        <?php foreach ($result as $pb) { ?>
        <div class='col-md-4'>
            <i class='fa fa-trophy'></i><h4><?php echo $pb->quest_name ?></h4><p><?php echo $pb->quest_description ?></p>
        <form role='form' method='post' action='desc_mine.php'>
           
            </form>
            </div>
      <?php } ?>                  
      </div>
    </div><! --/container -->
   </div><! --/service -->
   
   
   
  <!-- *****************************************************************************************************************
   MIDDLE CONTENT
   ***************************************************************************************************************** -->

   <div class="container mtb">
    <div class="row">
      
      
      <div class="col-lg-3 col-lg-offset-1">
        <h4>Buatlah sebuah Quest baru</h4>
        <p>Banyak orang yang dapat memenuhi permintaanmu. Tapi kamu tidak tahu mereka dimana dan siapa mereka. Segera buat sebuah Quest untuk memenuhi permintaanmu. </p>
        <p><br/><a href="register.php" class="btn btn-theme">Buat Quest</a></p>
      </div>
      <div class="col-lg-3 col-lg-offset-1">
        <h4>Cari Quest sekarang</h4>
        <p>Tanpa kamu sadari banyak orang memerlukan bantuan dan usahamu. Karena setiap usaha dan kemampuan memiliki nilai tersendiri. Segera temukan mereka sekarang di TakeQuest. </p>
        <p><br/><a href="register.php" class="btn btn-theme">Cari Quest</a></p>
      </div>
    </div><! --/row -->
   </div><! --/container -->