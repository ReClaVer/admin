<div class="container-fluid">
  <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus fa-sm">  Add Product</i></button>

  <table class="table table-bordered">
    <tr>
      <th>Number</th>
      <th>Product Name</th>
      <th>About</th>
      <!-- <th>Colour</th> -->
      <!-- <th>Tag</th> -->
      <th>Size</th>
      <th>Price</th>
      <th>Rating</th>
      <th>Image</th>
      <th colspan="2">Action</th>
    </tr>

    <?php 
    $no=1;
    foreach($barang as $brg) : ?>

    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $brg->name ?></td>
      <td><?php echo $brg->description ?></td>
      <!-- <td><?php echo $brg->colors ?></td> -->
      <!-- <td><?php echo $brg->tags ?></td> -->
      <td><?php echo $brg->sizes ?></td>
      <td><?php echo $brg->price ?></td>
      <td><?php echo $brg->rating ?></td>
      <td><img src="<?php echo $brg->image ?>" class="card-img-top"></td>
      <td><?= anchor('barang/update/'.$brg->id_apparel, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
      <td onclick="javascript: return confirm('Anda yakin hapus?')">
        <?= anchor('barang/hapus/'.$brg->id_apparel, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>'); ?>
      </td>
    </tr>

    <?php endforeach; ?>
  </table>
</div>

<!-- Modal Tambah Barang -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Formulir Input Data Produk</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'barang/tambah_aksi'; ?>">
          <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label>Tentang</label>
            <input type="text" name="description" class="form-control">
          </div>
          <!-- <div class="form-group">
            <label>Colour</label>
            <input type="text" name="colors" class="form-control">
          </div> -->
          <!-- <div class="form-group">
            <label>Tag</label>
            <input type="text" name="tags" class="form-control">
          </div> -->
          <div class="form-group">
            <label>Ukuran</label>
            <input type="text" name="sizes" class="form-control">
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="price" class="form-control">
          </div>
          <div class="form-group">
            <label>Rating</label>
            <input type="text" name="rating" class="form-control">
          </div>
          <div class="form-group">
            <label>Link Gambar</label>
            <input type="text" name="image" class="form-control">
          </div>
          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>

    </div>
  </div>
</div>    
