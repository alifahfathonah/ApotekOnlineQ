    <div class="container">
      <div class="py-5">
        <h2>Form Transaksi</h2>
        <hr>
      </div>

        <div class="col-md-12 mb-5">
        	<div class="row">
              <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                  <span class="text-muted">Detail Item</span>
                </h4>
                <hr>
                <ul class="list-group mb-3">
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">Nama Item</h6>
                      <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted"><?php echo $item['nama_item']; ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="mb-3">Stok Tersisa</h6>
                      <img src="<?php echo base_url().'assets/img/'.$item['image']; ?>" width="150" class="rounded mx-auto d-block" alt="...">
                    </div>
                    <span class="text-muted"><?php echo $item['stok'];?> <?php echo $item['satuan'];?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="">Harga</h6>
                      
                    </div>
                    <span class="text-muted">Rp. <?php echo $item['harga'];?></span>
                  </li>
                  
                </ul>
              </div>
              <div class="col-md-8 order-md-2 mb-4">
        		
        		
        	
          <form method="post" action="<?= base_url().'user/checkoutItem/'.$item['id_item']?>">
            
            <input type="hidden" name="id_item" id="id_item" value="<?php echo $item['id_item']; ?>">
            <div class="col-md-8 mb-3">
        			<h4 class="mb-3">Rincian Pembelian</h4>
        		</div>
            <hr>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" name="NIK" autocomplete="off" placeholder="Masukkan 16 Digit NIK" value="<?php echo $this->session->userdata('nik'); ?>" readonly required>
                <div class="invalid-feedback">
                  NIK is Required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" autocomplete="off" placeholder="Masukkan Nama Anda" value="<?php echo $this->session->userdata('nama'); ?>" readonly required>

                <div class="invalid-feedback">
                  Your Name is Required.
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="Tanggal Transaksi"><span class="text-muted">Tanggal Transaksi</span></label>
              <input type="text" class="form-control" name="tgl_transaksi" autocomplete="off" readonly value="<?php echo date('d-m-Y');  ?>" >
              <div class="invalid-feedback">
                Please enter persons for order.
              </div>
            </div>

            <div class="mb-3">
              <input type="hidden" name="harga" value="<?php echo $item['harga']; ?>">
              <input type="hidden" name="stok" value="<?php echo $item['stok']; ?>">
              <label for="jumlah beli"><span class="text-muted">Jumlah Beli</span></label>
              <?php if($this->session->userdata('status') == ''){?>
                <input type="text" class="form-control" name="jml_beli" id="jml_beli" autocomplete="off" placeholder="Masukkan jumlah beli" readonly>
              <?php }else{ ?>
              <input type="text" class="form-control" name="jml_beli" id="jml_beli" autocomplete="off" placeholder="Masukkan jumlah beli">
            <?php } ?>
              <div class="invalid-feedback">

                      <?= form_error('jml_beli', '<small class="text-danger pl-3">','</small>');?>
                Please input quantity of items.
              </div>
            </div>
            <hr>
            <?php if($this->session->userdata('status') == 'active'){
              ?>

                <button class="btn btn-primary btn-lg btn-block" type="submit">Lanjutkan Pembayaran</button>
              
            <?php }else{
              ?>
              <a href="<?php echo base_url().'Page/login'?>" style="text-decoration: none" ><button class="btn btn-danger btn-lg btn-block" type="button">Anda Harus Login Terlebih Dahulu</button></a>
            <?php } ?>
            
          </form>
        </div>
      </div>
      </div>    </div>

  