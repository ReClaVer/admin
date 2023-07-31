<div class="container">
    <h3>Edit Barang</h3>
    <form id="editForm" method="post" action="<?= base_url('barang/update/'.$barang->id_apparel) ?>">
        <div class="form-group">
            <label for="name">Nama Barang</label>
            <input type="text" name="name" class="form-control" value="<?= $barang->name ?>">
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="text" name="rating" class="form-control" value="<?= $barang->rating ?>">
        </div>
        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" name="tags" class="form-control" value="<?= $barang->tags ?>">
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="text" name="price" class="form-control" value="<?= $barang->price ?>">
        </div>
        <div class="form-group">
            <label for="sizes">Size</label>
            <input type="text" name="sizes" class="form-control" value="<?= $barang->sizes ?>">
        </div>
        <div class="form-group">
            <label for="colors">Warna</label>
            <input type="text" name="colors" class="form-control" value="<?= $barang->colors ?>">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" class="form-control" rows="3"><?= $barang->description ?></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image Link</label>
            <input type="text" name="image" class="form-control" value="<?= $barang->image ?>">
        </div>
        <?= anchor('barang', 'Kembali', ['class' => 'btn btn-secondary']) ?>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
