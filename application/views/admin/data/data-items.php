
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Item</h1>
          <p class="mb-4">Showing All Items</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="#" class="btn btn-primary add-data-item" data-toggle="modal" data-target="#FormModal">+New Item</a>
            </div>
            <div class="card-body">
              <small class="text-danger pl-3"><?php echo $this->session->flashdata('success'); ?> </small>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="bg-success text-white text-center">
                    <tr>
                      <th>No</th>
                      <th>Item Name</th>
                      <th>Category</th>
                      <th>Stock</th>
                      <th>Price</th>
                      <th>Option</th>
                    </tr>
                  </thead>

                  <tbody class="text-center">
                    <?php $no=1;foreach ($item as $items) {
                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $items['nama_item']; ?></td>
                        <td><?php if($items['id_kategori'] == 1){echo "Medicine";}elseif($items['id_kategori'] == 2){echo "Healthy Item";}else{echo "Supportive Item";} ?></td>
                        <td><?php echo $items['stok']?></td>
                        <td><?php echo "Rp. ".$items['harga']." Per/".$items['satuan']?></td>
                        <td>
                          <a href="" data-toggle="modal" data-target="#FormStock" class="badge badge-warning addStock" data-id="<?php echo $items['id_item'] ?>">Add Stock</a>
                          <a href="" data-toggle="modal" data-target="#FormModal" class="badge badge-info ml-2 get-data-item" data-id="<?php echo $items['id_item'] ?>">Update</a>
                          <a href="" class="badge badge-danger ml-2 deletebtn" data-toggle="modal" data-target="#deleteModal">Delete</a></td>  
                      </tr>
                    <?php 
                    } ?>
                    
                  </tbody>
                </table>
              </div>
            </div>

        </div>
        <!-- /.container-fluid -->

      <!-- Form Modal-->
  <div class="modal fade" id="FormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <form method="post" action="" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="FormModalLabel">Title</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id_item" id="id_item">
                    <div class="form-group">
                        <label for="Item Name">Item Name</label>
                        <input type="text" id="nama_item" class="form-control" name="nama_item" placeholder="Input Item's Name ... " autocomplete="off">

                    </div>
                    <div class="form-group">
                      <label for="Category">Category</label>
                      <select name="id_kategori" id="id_kategori" class="form-control">
                        <option>Select Category :</option>
                        <option value="1">Medicine</option>
                        <option value="2">Healthy Item</option>
                        <option value="3">Supportive Item</option>
                      </select>
                    </div>
                    <input type="hidden" class="form-control" id="stok" name="stok" value="0">
                    <div class="form-group">
                      <label for="Satuan">Satuan</label>
                      <input type="text" id="satuan" class="form-control" name="satuan" placeholder="Input Satuan" autocomplete="off">
                    </div>
                      <div class="form-group">
                        <label for="Price">Price</label>
                        <input type="text" id="harga" class="form-control" name="harga" placeholder="Input Price of Item" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <label for="Foto">File Photo</label>
                        <p id="txt-img">nama File</p>
                        <input type="file" id="image" class="form-control-file" name="image" placeholder="upload" autocomplete="off" value="test">
                        <input type="hidden" name="old_image">
                      </div>
              
          
        </div>
        <div class="modal-footer">
          <button class="btn btn-success" type="submit">Save!</button>
          <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
        </div>
          </form>

      </div>
    </div>
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
          <a class="btn btn-danger" href="<?php echo base_url("admin/item/delete/".$items['id_item']) ?>">Yes</a>
          <button class="btn btn-primary" type="button" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="FormStock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Stock Item</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"><form method="post" action="<?php echo base_url('Admin/Item/UpdateStok') ?>">
          <input type="hidden" name="id_itemStock" id="id_itemStock">
          <div class="form-row">
            <div class="col-md-6">
              Item Name
            </div>
            <div class="col-md-1">: </div>
            <div class="col-md-5"><p id="formname"> Name</p></div>
          </div>
          <div class="form-group">
            <label for="Add Stock">Stock</label>
          <input type="text" name="inputstock" id="inputstock" class="form-control" placeholder="Input Stock">
          <input type="hidden" name="stock" id="stock">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Add</button>
          <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>