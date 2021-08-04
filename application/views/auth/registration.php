 <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('Page/Registration')?>">
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="NIK" name="NIK" placeholder="enter your identity number" autocomplete="off" value="<?= set_value('NIK')?>">
                  <?= form_error('NIK', '<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama_pelanggan" name="nama_pelanggan" placeholder="enter your full name" autocomplete="off" value="<?= set_value('nama_pelanggan')?>">
                  <?= form_error('nama_pelanggan', '<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="enter your username" autocomplete="off" value="<?= set_value('username')?>">
                  <?= form_error('username', '<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="enter your password" autocomplete="off" value="<?= set_value('password1')?>">
                    <?= form_error('password1', '<small class="text-danger pl-3">','</small>');?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="repeat password" autocomplete="off" value="<?= set_value('password2')?>">
                    <?= form_error('password2', '<small class="text-danger pl-3">','</small>');?>
                  </div>
                </div>
                  <div class="form-group">
                    <textarea class="form-control form-control" id="alamat" name="alamat" placeholder="enter your address" autocomplete="off" ><?php echo set_value('alamat') ?></textarea><?= form_error('alamat', '<small class="text-danger pl-3">','</small>');?>
                  </div>
                  
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="no_telp" name="no_telp" placeholder="enter your phone number" autocomplete="off" value="<?= set_value('no_telp')?>"><?= form_error('no_telp', '<small class="text-danger pl-3">','</small>');?>
                  </div>
                  
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?php echo base_url('Page/Login') ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>