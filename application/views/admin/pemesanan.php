<div class="container py-4">
    <!-- Judul & Tombol di Luar Card -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h4 class="font-weight-bold mb-0">Pemesanan - Admin</h4>
            <small class="text-muted">Kelola pemesanan pengguna secara mudah.</small>
        </div>
        <div>
            <button class="btn btn-light mr-2">Cancel</button>
            <button class="btn btn-primary">Save Changes</button>
        </div>
    </div>

    <!-- Card Utama -->
    <div class="card shadow-lg">
        <div class="card-body">
            <div class="row">
                <!-- SIDEBAR: Vertical Tabs -->
                <div class="col-lg-3 col-md-4 col-sm-12 border-right">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <!-- 1. Daftar Pemesanan -->
                        <a class="nav-link active mb-2 d-flex align-items-center"
                           id="daftar-tab" data-toggle="pill" href="#daftar" role="tab">
                            <i class="fa fa-list-alt mr-2 text-primary"></i>
                            Daftar Pemesanan
                        </a>
                        <!-- 2. Tambah Pemesanan -->
                        <a class="nav-link mb-2 d-flex align-items-center"
                           id="tambah-tab" data-toggle="pill" href="#tambah" role="tab">
                            <i class="fa fa-plus-square mr-2 text-success"></i>
                            Tambah Pemesanan
                        </a>
                        <!-- 3. Status Pemesanan -->
                        <a class="nav-link mb-2 d-flex align-items-center"
                           id="status-tab" data-toggle="pill" href="#status" role="tab">
                            <i class="fa fa-tasks mr-2 text-warning"></i>
                            Status Pemesanan
                        </a>
                        <!-- 4. Riwayat Pemesanan -->
                        <a class="nav-link d-flex align-items-center"
                           id="riwayat-tab" data-toggle="pill" href="#riwayat" role="tab">
                            <i class="fa fa-history mr-2 text-secondary"></i>
                            Riwayat Pemesanan
                        </a>
                    </div>
                </div>
                
                <!-- KONTEN: Bagian Kanan -->
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <!-- Tab Content -->
                    <div class="tab-content" id="v-pills-tabContent">
                        
                        <!-- TAB 1: Daftar Pemesanan -->
                        <div class="tab-pane fade show active" id="daftar" role="tabpanel" aria-labelledby="daftar-tab">
                            <h5 class="font-weight-bold">Daftar Pemesanan</h5>
                            <small class="text-muted">Tampilkan semua pemesanan yang telah dibuat pengguna. Gunakan filter untuk menyaring berdasarkan status.</small>
                            <hr>
                            <!-- Filter & Pencarian -->
                            <div class="mb-3">
                                <div class="form-inline">
                                    <label class="mr-2">Filter Status:</label>
                                    <select class="form-control mr-2">
                                        <option>Semua</option>
                                        <option>Belum Dibayar</option>
                                        <option>Terbayar</option>
                                        <option>Dibatalkan</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="Cari pemesanan...">
                                    <button class="btn btn-primary ml-2">Cari</button>
                                </div>
                            </div>
                            
                            <!-- Contoh daftar pemesanan (kartu) -->
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6 class="card-title">#001 - Paket Umroh Reguler</h6>
                                    <p class="card-text mb-1">Pengguna: Ahmad</p>
                                    <p class="card-text mb-1">Status: Belum Dibayar</p>
                                    <p class="card-text"><small class="text-muted">Tanggal: 2025-03-10</small></p>
                                    <div>
                                        <button class="btn btn-sm btn-warning">Edit</button>
                                        <button class="btn btn-sm btn-danger">Hapus</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6 class="card-title">#002 - Paket Haji Plus</h6>
                                    <p class="card-text mb-1">Pengguna: Siti</p>
                                    <p class="card-text mb-1">Status: Terbayar</p>
                                    <p class="card-text"><small class="text-muted">Tanggal: 2025-03-11</small></p>
                                    <div>
                                        <button class="btn btn-sm btn-warning">Edit</button>
                                        <button class="btn btn-sm btn-danger">Hapus</button>
                                    </div>
                                </div>
                            </div>
                            <!-- ... lanjutkan daftar pemesanan lainnya -->
                        </div>
                        
                        <!-- TAB 2: Tambah Pemesanan -->
                        <div class="tab-pane fade" id="tambah" role="tabpanel" aria-labelledby="tambah-tab">
                            <h5 class="font-weight-bold">Tambah Pemesanan</h5>
                            <small class="text-muted">Input data pemesanan secara manual apabila terjadi pemesanan melalui metode lain atau koreksi data.</small>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label>Pilih Paket</label>
                                    <select class="form-control">
                                        <option>Paket Umroh Reguler</option>
                                        <option>Paket Umroh Plus</option>
                                        <option>Paket Haji</option>
                                    </select>
                                </div>
                                <h6>Data Pengguna</h6>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama pengguna">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="email@example.com">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" rows="2" placeholder="Alamat lengkap"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <input type="text" class="form-control" placeholder="+62 8123456789">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Pemesanan</label>
                                    <input type="text" class="form-control" placeholder="Nomor pemesanan">
                                </div>
                                <div class="form-group">
                                    <label>Status Pembayaran</label>
                                    <select class="form-control">
                                        <option>Lunas</option>
                                        <option>Belum Lunas</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Konfirmasi Pemesanan</button>
                            </form>
                        </div>
                        
                        <!-- TAB 3: Status Pemesanan -->
                        <div class="tab-pane fade" id="status" role="tabpanel" aria-labelledby="status-tab">
                            <h5 class="font-weight-bold">Status Pemesanan</h5>
                            <small class="text-muted">Perbarui status pemesanan yang sedang berjalan. Pilih status yang sesuai untuk setiap pemesanan.</small>
                            <hr>
                            <!-- Contoh kartu status -->
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6 class="card-title">#001</h6>
                                    <p class="card-text">Status Saat Ini: <strong>Belum Dibayar</strong></p>
                                    <div class="form-group">
                                        <label>Perbarui Status:</label>
                                        <select class="form-control">
                                            <option>Belum Dibayar</option>
                                            <option>Terbayar</option>
                                            <option>Dibatalkan</option>
                                            <option>Diterima</option>
                                            <option>Menunggu Pembayaran</option>
                                            <option>Selesai</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-sm btn-primary">Perbarui</button>
                                </div>
                            </div>
                            <!-- ... tambah kartu status lainnya jika perlu -->
                        </div>
                        
                        <!-- TAB 4: Riwayat Pemesanan -->
                        <div class="tab-pane fade" id="riwayat" role="tabpanel" aria-labelledby="riwayat-tab">
                            <h5 class="font-weight-bold">Riwayat Pemesanan</h5>
                            <small class="text-muted">Lihat riwayat pemesanan yang telah selesai. Gunakan filter tanggal untuk pencarian yang lebih spesifik.</small>
                            <hr>
                            <!-- Contoh kartu riwayat -->
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6 class="card-title">#001 - Paket Umroh Reguler</h6>
                                    <p class="card-text mb-1">Pengguna: Ahmad</p>
                                    <p class="card-text"><small class="text-muted">Selesai pada: 2025-03-15</small></p>
                                    <button class="btn btn-sm btn-info">Lihat Detail</button>
                                </div>
                            </div>
                            <!-- ... tambah kartu riwayat lainnya jika perlu -->
                        </div>
                        
                    </div> <!-- /tab-content -->
                </div> <!-- /col -->
            </div> <!-- /row -->
        </div> <!-- /card-body -->
    </div> <!-- /card -->
</div>
