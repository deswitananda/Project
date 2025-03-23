<div class="py-4">
    <h4 class="mb-3">Halaman Pemesanan</h4>
    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
    <?php elseif($this->session->flashdata('error')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
    <?php endif; ?>

    <!-- Form Pesanan Baru -->
    <div class="card mb-4">
        <div class="card-header">
            Buat Pesanan Baru
        </div>
        <div class="card-body">
            <form action="<?= site_url('user/pemesanan/store') ?>" method="post">
                <div class="form-group">
                    <label>Pilih Paket</label>
                    <select class="form-control" name="paket_id" required>
                        <?php foreach($paket as $p): ?>
                            <option value="<?= $p->id ?>">
                                <?= $p->name ?> - Rp. <?= number_format($p->price, 2) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
            </form>
        </div>
    </div>

    <!-- Daftar Pesanan User -->
    <div>
        <h5>Deskripsi Pesanan Anda</h5>
        <?php if($orders): ?>
            <?php foreach($orders as $order): ?>
                <div class="card mb-2">
                    <div class="card-body">
                        <h6 class="card-title"><?= $order->order_number ?> - <?= $order->paket_name ?></h6>
                        <p class="card-text">
                            <strong>Status:</strong> <?= $order->status ?> <br>
                            <strong>Payment Status:</strong> <?= $order->payment_status ?> <br>
                            <small>Dibuat pada: <?= $order->created_at ?></small>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Anda belum membuat pemesanan.</p>
        <?php endif; ?>
    </div>
</div>
