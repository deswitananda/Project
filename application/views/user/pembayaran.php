<div class="py-4">
    <h4>Detail Tagihan Pemesanan</h4>
    <div class="card">
        <div class="card-body">
            <p><strong>Kode Pemesanan:</strong> <?= $order->kode_pemesanan ?></p>
            <p><strong>Paket:</strong> <?= isset($order->paket_name) ? $order->paket_name : 'Data tidak tersedia' ?></p>
            <p><strong>Status Pemesanan:</strong> <?= $order->status ?></p>
            <p><strong>Tagihan:</strong> <?= $order->tagihan ?></p>
            <p><strong>Tanggal Pemesanan:</strong> <?= $order->tanggal_pemesanan ?></p>
        </div>
    </div>
</div>
