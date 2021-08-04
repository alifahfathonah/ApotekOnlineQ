
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Member</h1>
          <p class="mb-4">Showing All Members</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              List Data 
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="bg-success text-white text-center">
                    <tr>
                      <th>No</th>
                      <th>NIK</th>
                      <th>Member Name</th>
                      <th>Address</th>
                      <th>Phone Number</th>
                      <th>Option</th>
                    </tr>
                  </thead>

                  <tbody class="text-center">
                    <?php $no=1;foreach ($member as $members) {
                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $members['NIK']; ?></td>
                        <td><?php echo $members['nama_pelanggan']; ?></td>
                        <td><?php echo $members['alamat'];?></td>
                        <td><?php echo $members['no_telp']; ?></td>
                        <td><a href="" class="badge badge-danger ml-2 deletebtn" data-toggle="modal" data-target="#deleteModal">Delete</a></td>  
                      </tr>
                    <?php 
                    } ?>
                    
                  </tbody>
                </table>
              </div>
            </div>

        </div>
        <!-- /.container-fluid -->
      <!-- End of Main Content -->
     
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
          <a class="btn btn-danger" href="<?php echo base_url("Admin/Member/DeleteData/".$members['id_pelanggan']) ?>">Yes</a>
          <button class="btn btn-primary" type="button" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>
</div>