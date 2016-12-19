<!-- *****************************************************************************************************************
   BLUE WRAP
   ***************************************************************************************************************** -->
  <div id="blue">
      <div class="container">
      <div class="row">
        <h3>Buat Quest Baru</h3>
      </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /blue -->

  <!-- *****************************************************************************************************************
   CONTACT WRAP
   ***************************************************************************************************************** -->

   
  <!-- *****************************************************************************************************************
   CONTACT FORMS
   ***************************************************************************************************************** -->

   <div class="container mtb">
    <div class="row">
      <div class="col-lg-8">
        <h4>Quest Baru</h4>
        <div class="hline"></div>
          <p>Buat Quest baru dan beri tahu kepada orang-orang yang dapat memenuhinya</p>
          <form role="form" action="<?php echo base_url(); ?>core/q_create" method="post">
            <div class="form-group" method="post">
              <label for="InputName1">Nama Quest</label>
              <input type="text" class="form-control" name="q_name">
            </div>
            <div class="form-group">
              <fieldset class="form-group">
                <label for="exampleTextarea">Deskripsi</label>
                <input type="text" class="form-control" name="q_desc">
              </fieldset>
            </div>
             <div class="form-group">
              <fieldset class="form-group">
                <label for="exampleTextarea">Persyaratan</label>
                <input type="text" class="form-control" name="q_syarat">
              </fieldset>
            </div>
             <div class="form-group">
              <label for="InputName1">Kapasitas</label>
              <p></p><input type="number" name="q_kapasitas" min="1" max="1000">
            </div>
            <div class="form-group">
              <label for="InputEmail1">Reward</label>
              <input type="text" class="form-control" name="q_reward">
            </div>
            <div>
             
            </div>
            <button type="submit" class="btn btn-theme" name="buatquest" value="buatquest">Buat Quest</button>
          </form>
      </div><! --/col-lg-8 -->
      
    </div><! --/row -->
   </div><! --/container -->