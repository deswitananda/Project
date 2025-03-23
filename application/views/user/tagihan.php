<div class="py-4">
    <h4>Tagihan Saya</h4>
    <?php if($this->session->flashdata('success')): ?>
      <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
    <?php elseif($this->session->flashdata('error')): ?>
      <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
    <?php endif; ?>

    <?php if(isset($pemesanan) && !empty($pemesanan)): ?>
        <?php foreach($pemesanan as $order): ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Invoice #<?= $order->kode_pemesanan ?></h5>
                    <p class="card-text">
                        <strong>Paket:</strong> <?= isset($order->nama_paket) ? $order->nama_paket : 'Tidak tersedia' ?><br>
                        <strong>Status Pemesanan:</strong> <?= $order->status ?><br>
                        <strong>Status Tagihan:</strong>
                        <?php if($order->tagihan == 'Lunas'): ?>
                            <span class="badge badge-success">Lunas</span>
                        <?php else: ?>
                            <span class="badge badge-warning">Belum Lunas</span>
                        <?php endif; ?><br>
                        <small class="text-muted">Dipesan pada: <?= $order->tanggal_pemesanan ?></small>
                    </p>
                    <!-- Link untuk melihat detail lebih lanjut (jika ada halaman detail invoice) -->
                    <a href="<?= site_url('pembayaran/index/'.$order->id) ?>" class="btn btn-info btn-sm">Lihat Detail</a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Tidak ada tagihan.</p>
    <?php endif; ?>
</div>
