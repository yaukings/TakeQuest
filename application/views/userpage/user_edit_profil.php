<!-- *****************************************************************************************************************
   BLUE WRAP
   ***************************************************************************************************************** -->
  <div id="blue">
      <div class="container">
      <div class="row">
        <h3>Profil</h3>
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
        <h4>Ubah Profil</h4>
        <div class="hline"></div>
          <p>Ubah Profil Sekarang</p>
          <form role="form" action="updateprofile.php" method="post">
            <div class="form-group">
              <label for="InputName1">Nama Depan</label>
              <input type="text" class="form-control" value="<?php if (isset($usr_front_name)) echo $usr_front_name ?>" name="usr_front_name">
            </div>
            <div class="form-group">
              <label for="InputName1">Nama Belakang</label>
              <input type="text" class="form-control" value="<?php if (isset($usr_last_name)) echo $usr_last_name ?>" name="usr_last_name">
            </div>
             <div class="form-group">
              <label for="InputName1">Username</label>
              <input type="text" class="form-control" value="<?php if (isset($usr_name)) echo $usr_name ?>" name="usr_name" readonly>
            </div>
             <div class="form-group">
              <label for="InputName1">Password</label>
              <input type="password" class="form-control" value="<?php if (isset($usr_pass)) echo $usr_pass ?>" name="usr_pass" readonly>
            </div>
            <div class="form-group">
              <label for="InputEmail1">Email address</label>
              <input type="email" class="form-control" value="<?php if (isset($usr_mail)) echo $usr_mail ?>" name="usr_mail">
            </div>
            <div class="form-group">
              <input type="hidden" name="usr_id" value="<?php if(isset($usr_id)) echo $usr_id ?>">
              <!--<fieldset class="form-group">
                <label for="exampleInputFile">Masukkan Foto</label>
                <input type="file" class="form-control-file" id="exampleInputFile">
                <small class="text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
              </fieldset>-->
            </div>

            <button type="submit" class="btn btn-theme">Ubah Profil</button>
          </form>
      </div><! --/col-lg-8 -->
      
    </div><! --/row -->
   </div><! --/container -->