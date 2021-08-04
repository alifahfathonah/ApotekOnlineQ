

  <div class="container">
    <div class="row mt-5">
      <div class="col">
          <h1 class="display-4 text-center" >Welcome! Your happiness is our priority.</h1>
              <div class="row my-5">
                <div class="col-md-1"></div>
                    <div class="col-md-8">
                      <input type="" name="" class="form-control" placeholder="Search Items ...">
                    </div>
                    <div class="col-md-2"><button type="submit" class="btn btn-success" style="width: 100%">Search!</button></div>
                  
              </div>
        </div>
    </div>
      <div class="row">
        <div class="col">
      <h2 style="font-weight: 200">List items</h2>
      <hr>
        <div class="card-deck" >
      <div class="row my-4">
          <?php foreach ($item as $items) {
            ?>
            <div class="col">
            <div class="card mb-3" style="width: 200px;">
               
              <div class="card-body">
                <img src="<?php echo base_url().'assets/img/'.$items['image']; ?>" width="130" height="100">
                <h5 class="card-title"><?php echo $items['nama_item']; ?></h5>
                <p class="card-text" style="font-size: 14px;">Sisa Stok : <?php echo $items['stok'].' '.$items['satuan']; ?>
                </p>
                <p class="card-text" style="font-size: 14px;">Harga : Rp. <?php echo $items['harga']." Per/".$items['satuan'] ?>
                </p>
                <hr>
                <a href="<?php echo base_url(); ?>user/checkoutItem/<?php echo $items['id_item']; ?>" class="btn btn-success" style=" font-size: 14px;width: 100%;">Buy</a>
                </div>
              </div>
            </div><?php

            } ?>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
