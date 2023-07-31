<div class="container-fluid">
    <h2>Laporan Penjualan</h2>

    <!-- Form Filter berdasarkan Tanggal -->
      <form method="get" action="<?= base_url('laporan') ?>">
        <div class="row mb-2">
          <div class="col-md-4">
            <input type="date" name="start_date" class="form-control" value="<?= $start_date ?>">
          </div>
          <div class="col-md-4">
            <input type="date" name="end_date" class="form-control" value="<?= $end_date ?>">
          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-primary">Filter</button>
          </div>
          <div class="col-md-2">
            <a href="<?= base_url('laporan') ?>" class="btn btn-secondary">Reset</a>
          </div>
        </div>
      </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Order</th>
                <th>Nama User</th>
                <th>List Shop</th>
                <th>Delivery</th>
                <th>Payment</th>
                <th>Note</th>
                <th>Total</th>
                <th>Image</th>
                <th>Date Time</th>
                <th>Arrived</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($laporan as $data) : ?>
                <tr>
                    <td><?= $data->id_order ?></td>
                    <td><?= $data->name ?></td>
                    <td><?= $data->list_shop ?></td>
                    <td><?= $data->delivery ?></td>
                    <td><?= $data->payment ?></td>
                    <td><?= $data->note ?></td>
                    <td><?= $data->total ?></td>
                    <td><img src="<?= $data->image ?>" class="img-thumbnail" style="width: 100px;"></td>
                    <td><?= $data->date_time ?></td>
                    <td><?= $data->arrived ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

