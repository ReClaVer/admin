<div class="container-fluid">
    <h2>Data Wishlist</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Wishlist</th>
                <th>Nama Pengguna</th>
                <th>Nama Barang</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wishlist as $data): ?>
            <tr>
                <td><?= $data->id_wishlist ?></td>
                <td><?= $data->user_name ?></td>
                <td><?= $data->apparel_name ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
