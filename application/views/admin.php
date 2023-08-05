<div class="container-fluid">
    <h2>Data Admin</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Admin</th>
                <th>Username</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($admin as $data): ?>
            <tr>
                <td><?= $data->id ?></td>
                <td><?= $data->username ?></td>
                <td><?= $data->nama ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
