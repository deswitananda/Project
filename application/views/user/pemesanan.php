<div class="container py-4">
    <!-- Judul Halaman -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h4 class="font-weight-bold mb-0">Halaman Pemesanan</h4>
            <small class="text-muted">Kelola semua pemesanan Anda di sini.</small>
        </div>
        <div>
            <!-- Tombol Opsional, misalnya untuk kembali ke Dashboard -->
            <button class="btn btn-light">Kembali ke Dashboard</button>
        </div>
    </div>

    <!-- Card Utama -->
    <div class="card shadow-lg">
        <div class="card-body">
            <div class="row">
                <!-- SIDEBAR: Vertical Tabs (Opsional) -->
                <div class="col-md-3 border-right">
                    <div class="nav flex-column nav-pills" id="user-order-tabs" role="tablist" aria-orientation="vertical">
                        <!-- Daftar Pemesanan -->
                        <a class="nav-link active mb-2 d-flex align-items-center"
                           id="daftar-tab" data-toggle="pill" href="#daftar" role="tab">
                            <i class="fa fa-list-alt mr-2 text-primary"></i> 
                            Daftar Pemesanan
                        </a>
                        <!-- Buat Pesanan Baru -->
                        <a class="nav-link d-flex align-items-center"
                           id="pesan-tab" data-toggle="pill" href="#pesan" role="tab">
                            <i class="fa fa-plus-square mr-2 text-success"></i> 
                            Buat Pesanan Baru
                        </a>
                    </div>
                </div>

                <!-- Konten Tab -->
                <div class="col-md-9">
                    <div class="tab-content" id="user-order-tabsContent">
                        
                        <!-- TAB 1: Daftar Pemesanan -->
                        <div class="tab-pane fade show active" id="daftar" role="tabpanel" aria-labelledby="daftar-tab">
                            <h5 class="font-weight-bold">Daftar Pemesanan</h5>
                            <small class="text-muted d-block mb-3">Tampilkan semua pemesanan yang telah Anda buat.</small>
                            <hr>
                            <!-- Filter & Pencarian (Opsional) -->
                            <div class="mb-3">
                                <div class="form-inline">
                                    <label class="mr-2">Filter Status:</label>
                                    <select class="form-control mr-2">
                                        <option>Semua</option>
                                        <option>Menunggu Pembayaran</option>
                                        <option>Sudah Dibayar</option>
                                        <option>Selesai</option>
                                        <option>Dibatalkan</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="Cari pemesanan...">
                                    <button class="btn btn-primary ml-2">Cari</button>
                                </div>
                            </div>
                            <!-- Contoh Daftar Pemesanan (Kartu atau Tabel) -->
                            <div class="order-list">
                                <!-- Contoh Card Pemesanan -->
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="card-title">#UMR001 - Paket Umroh Reguler</h6>
                                        <p class="card-text mb-1"><strong>Tanggal Keberangkatan:</strong> 2025-03-15</p>
                                        <p class="card-text mb-1"><strong>Status:</strong> Menunggu Pembayaran</p>
                                        <p class="card-text"><small class="text-muted">Dipesan pada: 2025-02-01</small></p>
                                        <div>
                                            <button class="btn btn-sm btn-info">Detail</button>
                                            <button class="btn btn-sm btn-success">Bayar</button>
                                            <button class="btn btn-sm btn-danger">Batalkan</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tambahkan kartu pemesanan lain di sini -->
                            </div>
                        </div>
                        
                        <!-- TAB 2: Buat Pesanan Baru -->
                        <div class="tab-pane fade" id="pesan" role="tabpanel" aria-labelledby="pesan-tab">
                            <h5 class="font-weight-bold">Buat Pesanan Baru</h5>
                            <small class="text-muted d-block mb-3">Lengkapi formulir berikut untuk melakukan pemesanan paket.</small>
                            <hr>
                            <!-- Form Pesanan Baru -->
                            <form>
                                <div class="form-group">
                                    <label>Pilih Paket</label>
                                    <select class="form-control">
                                        <option>Paket Umroh Reguler</option>
                                        <option>Paket Umroh Plus</option>
                                        <option>Paket Haji Plus</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Tanggal Keberangkatan</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Jumlah Jamaah</label>
                                        <input type="number" class="form-control" placeholder="Misal: 2 orang">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan Tambahan</label>
                                    <textarea class="form-control" rows="2" placeholder="Misal: Permintaan khusus, preferensi hotel, dsb."></textarea>
                                </div>
                                <!-- Tombol Submit -->
                                <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
                            </form>
                        </div>
                        
                    </div> <!-- /tab-content -->
                </div> <!-- /col -->
            </div> <!-- /row -->
        </div> <!-- /card-body -->
    </div> <!-- /card -->
</div>
