

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Sign in!</h1>
                  </div>
                  <small class="text-danger pl-3"><?php echo $this->session->flashdata('message'); ?> </small>
                  <form class="user" action="<?php echo base_url('page/Login') ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Enter Username" autocomplete="off" value="<?= set_value('username')?>">
                      <?= form_error('username', '<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Enter Password" autocomplete="off" value="<?= set_value('password')?>">
                      <?= form_error('password', '<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url('Page/Registration') ?>">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
