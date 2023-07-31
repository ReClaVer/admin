<div class="container-fluid">
    <h2>Data Costumer</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Costumer</th>
                <th>Costumer Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($costumer as $data): ?>
            <tr>
                <td><?= $data->id_user ?></td>
                <td><?= $data->name ?></td>
                <td><?= $data->email ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
