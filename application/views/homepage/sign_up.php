
<div id="blue">
      <div class="container">
      <div class="row">
        <h3>Sign Up</h3>
      </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /blue -->
<div class="container mtb">
    <div class="row">
      <div class="col-lg-8">
        <h4>Daftar Baru</h4>
        <div class="hline"></div>
          <p>Daftarkan dirimu di TakeQuest dengan melengkapi isian dibawah ini</p>
          <form  role="form" action="<?php echo base_url(); ?>Main/registering" method="post">
             <div class="form-group">
              <label for="InputName1">Username</label>
              <input type="text" class="form-control" name="username">
            </div>
             <div class="form-group">
              <label for="InputName1">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
              <label for="InputEmail1">Email address</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group" method="post">
              <label for="InputName1">Nama Depan</label>
              <input type="text" class="form-control" name="first_name">
            </div>
            <div class="form-group">
              <label for="InputName1">Nama Belakang</label>
              <input type="text" class="form-control" name="last_name">
            </div>
            <button type="submit" class="btn btn-theme" name="register" value="register">Daftar</button>
          </form>
      </div><! --/col-lg-8 -->
      
    </div><! --/row -->
   </div><! --/container -->
        
      
