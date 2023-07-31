<div class="container-fluid">
    <h2>Data Chart</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Cart</th>
                <th>User Name</th>
                <th>Apparel Name</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($chart as $data): ?>
            <tr>
                <td><?= $data->id_cart ?></td>
                <td><?= $data->user_name ?></td>
                <td><?= $data->apparel_name ?></td>
                <td><?= $data->quantity ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
