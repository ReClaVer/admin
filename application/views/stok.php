<div class="container-fluid">
    <h2>Data Stok Barang</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Apparel</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stok as $data) : ?>
                <tr>
                    <td><?= $data->id_apparel ?></td>
                    <td><?= $data->apparel_name ?></td>
                    <td><?= $data->stok ?></td>
                    <td>
                        <a class="btn btn-primary">Edit Stok</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>