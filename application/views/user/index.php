
<!--- body 2 !--->
  <div class="container mt-5 mb-5">
    <h1 class="display-4 text-center" >Welcome! Your happiness is our priority.</h1>
      <div class="row my-5">

          <div class="col-md-1"></div>
          <div class="col-md-8">
            <form>
                <input type="" name="" class="form-control" placeholder="Search Items ...">

              </div>
          <div class="col-md-2"><button type="submit" class="btn btn-success" style="width: 100%">Search!</button></div>
            </form>
        
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col">
      <h2 style="font-weight: 200">List Category :</h2>
      <hr>
      <div class="row my-4">
        <div class="card-deck" >
          <?php foreach ($category as $ct) {
            ?>
            <div class="col-md">
            <div class="card">
               
              <div class="card-body" >
                <h5 class="card-title"><?php echo $ct['nama_kategori']; ?></h5>
                <p class="card-text" style="font-size: 14px; height: 50px">Showing All Items for Get <?php echo $ct['nama_kategori']; ?>.
                </p>
                <hr>
                <center><a href="<?php echo base_url().'user/listItem/' . $ct['id_kategori']; ?>" class="btn btn-success" style="font-size: 14px;width: 100%;">Check</a></center>
              </div>
            </div>
          </div><?php

          } ?>
          </div>
        </div>
      </div>
      </div>
      
    
</div>
