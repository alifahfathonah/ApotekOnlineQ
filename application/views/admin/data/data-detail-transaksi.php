
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Detail Order</h1>
          <p class="mb-4">Show Detail Orders</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="<?php echo base_url('Admin/Transaksi') ?>" class="btn btn-secondary ml-2"><- Back</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="bg-success text-white text-center">
                    <tr>
                      <th>No</th>
                      <th>Nama Item</th>
                      <th>Jumlah</th>
                      <th>Total Sub Billing</th>
                      <th>Option</th>
                    </tr>
                  </thead>

                  <tbody class="text-center">
                    <?php $no=1;foreach($detail as $d) {
                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['id_item']; ?></td>
                        <td><?php echo $d['jumlah']; ?></td>
                        <td><?php echo "Rp. ". $d['total']; ?></td>
                        <td><a href="<?= base_url().'Admin/Trip/DeletePemesanan/'.$d['id_transaksi']?>" class="badge badge-danger ml-2 deletebtn" data-toggle="modal" data-target="#deleteModal">Delete</a></td>  
                      </tr>
                    <?php 
                    } ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
   
    </div>
  </div>
 <!-- Delete Modal-->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menghapus data?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Yes" untuk menghapus dan "No" untuk kembali</div>
        <div class="modal-footer">
          <a class="btn btn-danger" href="<?php echo base_url("Admin/Pemesanan/DeletePemesanan/".$d['id_transaksi']) ?>">Yes</a>
          <button class="btn btn-primary" type="button" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>