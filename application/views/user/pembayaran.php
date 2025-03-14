<div class="container py-4">
    <!-- Judul Halaman Pembayaran -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h4 class="font-weight-bold mb-0">Pembayaran Saya</h4>
            <small class="text-muted">Lihat detail pembayaran dan unggah bukti pembayaran Anda.</small>
        </div>
    </div>

    <!-- Card Utama -->
    <div class="card shadow-lg">
        <div class="card-body">
            <div class="row">
                <!-- Sidebar: Vertical Tabs -->
                <div class="col-md-3 border-right">
                    <div class="nav flex-column nav-pills" id="paymentUserTabs" role="tablist" aria-orientation="vertical">
                        <!-- Detail Pembayaran -->
                        <a class="nav-link active mb-2 d-flex align-items-center"
                           id="detail-tab" data-toggle="pill" href="#detail" role="tab">
                            <i class="fa fa-info-circle mr-2 text-primary"></i>
                            Detail Pembayaran
                        </a>
                        <!-- Upload Bukti Pembayaran -->
                        <a class="nav-link d-flex align-items-center"
                           id="upload-tab" data-toggle="pill" href="#upload" role="tab">
                            <i class="fa fa-upload mr-2 text-success"></i>
                            Upload Bukti
                        </a>
                    </div>
                </div>
                
                <!-- Konten: Tab Content -->
                <div class="col-md-9">
                    <div class="tab-content" id="paymentUserTabsContent">
                        <!-- TAB 1: Detail Pembayaran -->
                        <div class="tab-pane fade show active" id="detail" role="tabpanel" aria-labelledby="detail-tab">
                            <h5 class="font-weight-bold">Detail Pembayaran</h5>
                            <small class="text-muted d-block mb-3">
                                Berikut adalah ringkasan informasi pembayaran untuk pemesanan Anda.
                            </small>
                            <hr>
                            <!-- Ringkasan Pembayaran -->
                            <div class="card mb-3">
                                <div class="card-body">
                                    <p><strong>Nomor Pesanan:</strong> #UMR001</p>
                                    <p><strong>Paket yang Dipesan:</strong> Paket Umroh Reguler</p>
                                    <p><strong>Total Pembayaran:</strong> Rp 15.000.000</p>
                                    <p><strong>Status Pembayaran:</strong> Menunggu Pembayaran</p>
                                    <p><strong>Metode Pembayaran:</strong> Transfer Bank</p>
                                    <p><strong>Rekening Tujuan:</strong> Bank ABC - 1234567890 a.n PT Travel Umroh</p>
                                    <p><strong>Tanggal Jatuh Tempo:</strong> 2025-03-10</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- TAB 2: Upload Bukti Pembayaran -->
                        <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
                            <h5 class="font-weight-bold">Upload Bukti Pembayaran</h5>
                            <small class="text-muted d-block mb-3">
                                Unggah bukti transfer atau pembayaran Anda untuk konfirmasi.
                            </small>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label>Upload File Bukti Pembayaran</label>
                                    <input type="file" class="form-control-file" required>
                                </div>
                                <div class="form-group">
                                    <label>Catatan (Opsional)</label>
                                    <textarea class="form-control" rows="2" placeholder="Masukkan catatan jika ada"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim Bukti Pembayaran</button>
                            </form>
                        </div>
                    </div> <!-- End tab-content -->
                </div> <!-- End kolom konten -->
            </div> <!-- End row -->
        </div> <!-- End card-body -->
    </div> <!-- End card -->
</div>
