    <?php if($this->session->userdata('status-user') == 'no active'){
      redirect('user/');
    } ?> 
  


    <div class="container">
      <div class="py-5">
        <h2>My Order</h2>
        <hr>
        <h5>NIK : <?php echo $this->session->userdata('nik'); ?> </h5>
        <h5>Nama : <?php echo $this->session->userdata('nama'); ?></h5>
      </div>
       <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              List Selurah Transaksi Anda
            </div>
            <div class="card-body">
              <small class="text-success pl-3"><?php echo $this->session->flashdata('message'); ?> </small>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr>
                      <th>No</th>
                      <th>Tanggal Pemesanan</th>
                      <th>Kode Booking</th>
                      <th>Id Item</th>
                      <th>Jumlah Beli</th>
                      <th>Total</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $no=1;
                    if($transaksi == NULL){
                      ?>
                        <td colspan="8" class="text-center">Tidak ada data yang tersedia.</td>
                      <?php
                    }
                    foreach ($transaksi as $tr) {
                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $tr['tgl_transaksi']; ?></td>
                        <td><?php echo $tr['kode']; ?></td>
                        <td><?php echo $tr['id_item'] ?></td>
                        <td><?php echo $tr['jumlah_beli'] ?></td>
                        <td><?php echo $tr['total_tagihan']; ?></td>
                        
                        
                      </tr>
                    <?php 
                    }?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  </div>

  