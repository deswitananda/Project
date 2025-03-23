<div class="py-4">
    <h1>Dashboard Pemesanan</h1>
    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Order Number</th>
                <th>User</th>
                <th>Paket</th>
                <th>Status</th>
                <th>Payment Status</th>
                <th>Tanggal Pesan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($orders as $order): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $order->order_number ?></td>
                <td><?= $order->user_name ?></td>
                <td><?= $order->paket_name ?></td>
                <td><?= $order->status ?></td>
                <td><?= $order->payment_status ?></td>
                <td><?= $order->created_at ?></td>
                <td>
                    <a href="<?= site_url('admin/pemesanan/edit/'.$order->id) ?>" class="btn btn-sm btn-warning">Edit</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
