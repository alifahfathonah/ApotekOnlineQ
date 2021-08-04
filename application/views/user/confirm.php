    <div class="container">
      <div class="py-5">
        <h2>Form Pembayaran</h2>
        <hr>
      </div>

        <div class="col-md-12 mb-5">
        	<div class="row">
              <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                  Detail Transaksi
                </h4>
                <hr>
                <ul class="list-group mb-3">
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">Tanggal Transaksi</h6>
                    </div>
                    <span class="text-muted"><?php echo $transaksi['tgl_transaksi'] ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">Nama Item</h6>
                    </div>
                    <span class="text-muted"></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">Jumlah Beli</h6>
                    </div>
                    <span class="text-muted"><?php echo $transaksi['jumlah_beli'] ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">Total</h6>
                    </div>
                    <span class="text-muted"><?php echo $transaksi['total_tagihan'] ?></span>
                  </li>
                  
                </ul>
              </div>
              <div class="col-md-8 order-md-2 mb-4">
        		
        		
        	
          <form method="post" action="<?php echo base_url().'user/payment' ?>" enctype="multipart/form-data">
            
            <input type="hidden" name="id_item" id="id_item" value="">
            <div class="col-md-8 mb-3">
        			<h4 class="mb-3">Konfirmasi Pembayaran</h4>
        	</div>
            <hr>
            <div class="row">
              

            <div class="mb-3 ml-3">
              <h5 class="mb-3">Kode Booking : <?php echo $this->session->userdata('kode'); ?></h5>
              <?php if($this->session->userdata('status') == ''){?>
                <input type="file" class="form-control-file btn btn-primary" name="image" id="image" autocomplete="off" placeholder="Masukkan jumlah beli" readonly>
              <?php }else{ ?>
              <input type="file" class="form-control-file" name="image" id="image" autocomplete="off" placeholder="Masukkan jumlah beli">
            <?php } ?>
              <div class="invalid-feedback">

                      <?= form_error('jml_beli', '<small class="text-danger pl-3">','</small>');?>
                Please input quantity of items.
              </div>
            </div>
            <hr>
            <?php if($this->session->userdata('status') == 'active'){
              ?>

                <input type="submit" class="btn btn-info btn-lg btn-block ml-3" type="submit" value="Konfirmasi">
              
            <?php }else{
              ?>
              <a href="<?php echo base_url().'Page/login'?>" style="text-decoration: none" ><button class="btn btn-danger btn-lg btn-block ml-3" type="button">Anda Harus Login Terlebih Dahulu</button></a>
            <?php } ?>
            
          </form>
        </div>
      </div>
      </div>    
</div>
</div>

  