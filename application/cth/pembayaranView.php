<div class="py-4">
    <h2>Edit Status Pembayaran</h2>
    <?php if($this->session->flashdata('error')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
    <?php endif; ?>
    <div class="card">
        <div class="card-body">
            <form action="<?= site_url('admin/pemesanan/update/'.$order->id) ?>" method="post">
                <div class="form-group">
                    <label>Status Pesanan</label>
                    <select name="status" class="form-control" required>
                        <option value="Menunggu Pembayaran" <?= $order->status == 'Menunggu Pembayaran' ? 'selected' : '' ?>>Menunggu Pembayaran</option>
                        <option value="Lunas" <?= $order->status == 'Lunas' ? 'selected' : '' ?>>Lunas</option>
                        <option value="Dibatalkan" <?= $order->status == 'Dibatalkan' ? 'selected' : '' ?>>Dibatalkan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Payment Status</label>
                    <select name="payment_status" class="form-control" required>
                        <option value="Belum Lunas" <?= $order->payment_status == 'Belum Lunas' ? 'selected' : '' ?>>Belum Lunas</option>
                        <option value="Lunas" <?= $order->payment_status == 'Lunas' ? 'selected' : '' ?>>Lunas</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
