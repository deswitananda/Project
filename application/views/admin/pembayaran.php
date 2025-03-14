<div class="container py-4">
    <!-- Judul & Tombol Aksi -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h4 class="font-weight-bold mb-0">Pembayaran - Admin</h4>
            <small class="text-muted">Kelola pembayaran jamaah secara efisien.</small>
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
                    <div class="nav flex-column nav-pills" id="payment-tabs" role="tablist" aria-orientation="vertical">
                        <!-- 1. Daftar Pembayaran -->
                        <a class="nav-link active mb-2 d-flex align-items-center"
                           id="list-tab" data-toggle="pill" href="#list" role="tab">
                            <i class="fa fa-list-alt mr-2 text-primary"></i>
                            Daftar Pembayaran
                        </a>
                        <!-- 2. Tambah Pembayaran Manual -->
                        <a class="nav-link d-flex align-items-center"
                           id="manual-tab" data-toggle="pill" href="#manual" role="tab">
                            <i class="fa fa-plus-square mr-2 text-success"></i>
                            Tambah Pembayaran Manual
                        </a>
                    </div>
                </div>
                
                <!-- KONTEN: Bagian Kanan -->
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <!-- Tab Content -->
                    <div class="tab-content" id="payment-tabs-content">
                        
                        <!-- TAB 1: Daftar Pembayaran -->
                        <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
                            <h5 class="font-weight-bold">Daftar Pembayaran</h5>
                            <small class="text-muted d-block mb-3">
                                Tampilkan semua pembayaran yang telah dilakukan jamaah.
                            </small>
                            <hr>
                            <!-- Contoh Kartu Pembayaran -->
                            <div class="payment-list">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="card-title">#PAY001 - Paket Umroh Reguler</h6>
                                        <p class="card-text mb-1"><strong>Nama Jamaah:</strong> Ahmad</p>
                                        <p class="card-text mb-1"><strong>Jumlah Bayar:</strong> Rp 5.000.000</p>
                                        <p class="card-text mb-1"><strong>Status:</strong> Belum Lunas</p>
                                        <p class="card-text"><small class="text-muted">Tanggal Pembayaran: 2025-02-15</small></p>
                                        <div>
                                            <button class="btn btn-sm btn-warning">Edit</button>
                                            <button class="btn btn-sm btn-danger">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tambahan kartu pembayaran lainnya dapat ditambahkan di sini -->
                            </div>
                        </div>
                        
                        <!-- TAB 2: Tambah Pembayaran Manual -->
                        <div class="tab-pane fade" id="manual" role="tabpanel" aria-labelledby="manual-tab">
                            <h5 class="font-weight-bold">Tambah Pembayaran Manual</h5>
                            <small class="text-muted d-block mb-3">
                                Input data pembayaran secara manual untuk pembayaran melalui metode lain.
                            </small>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label>Nomor Pembayaran</label>
                                    <input type="text" class="form-control" placeholder="Contoh: PAY001" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Jamaah</label>
                                    <input type="text" class="form-control" placeholder="Nama jamaah" required>
                                </div>
                                <div class="form-group">
                                    <label>Paket yang Dibayar</label>
                                    <select class="form-control" required>
                                        <option value="">Pilih Paket</option>
                                        <option>Paket Haji</option>
                                        <option>Paket Umroh</option>
                                        <option>Paket Wisata</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Jumlah Bayar</label>
                                        <input type="number" class="form-control" placeholder="Masukkan jumlah pembayaran" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Status Pembayaran</label>
                                        <select class="form-control" required>
                                            <option value="">Pilih Status</option>
                                            <option>DP 30%</option>
                                            <option>DP 50%</option>
                                            <option>Lunas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Pembayaran</label>
                                    <input type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Catatan (Opsional)</label>
                                    <textarea class="form-control" rows="2" placeholder="Masukkan catatan jika ada"></textarea>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-secondary mr-2">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan Pembayaran</button>
                                </div>
                            </form>
                        </div>
                        
                    </div> <!-- /tab-content -->
                </div> <!-- /col -->
            </div> <!-- /row -->
        </div> <!-- /card-body -->
    </div> <!-- /card -->
</div>
