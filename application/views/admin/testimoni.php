<div class="container py-4">
    <!-- Header Halaman Testimoni Admin -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h4 class="font-weight-bold mb-0">Testimoni - Admin</h4>
            <small class="text-muted">Kelola testimoni yang telah diberikan oleh pengguna.</small>
        </div>
        <div>
            <!-- Tombol untuk menambah testimoni baru (bisa diarahkan ke form) -->
            <button class="btn btn-primary">Tambah Testimoni</button>
        </div>
    </div>

    <!-- Card Utama -->
    <div class="card shadow-lg">
        <div class="card-body">
            <!-- Filter & Pencarian Testimoni -->
            <div class="mb-3">
                <div class="form-inline">
                    <label class="mr-2">Cari Testimoni:</label>
                    <input type="text" class="form-control mr-2" placeholder="Cari berdasarkan nama atau kata kunci">
                    <button class="btn btn-secondary">Cari</button>
                </div>
            </div>

            <!-- Daftar Testimoni (Card-Based) -->
            <div class="testimonial-list">

                <!-- Contoh Card Testimoni 1 -->
                <div class="card mb-3">
                    <div class="card-body">
                        <!-- Bagian atas: Nama & Tanggal & Rating -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title mb-1">Budi Santoso</h6>
                                <small class="text-muted">2025-02-15</small>
                            </div>
                            <!-- Rating (contoh 4 bintang) -->
                            <div>
                                <span class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <!-- Bisa tambahkan setengah bintang atau bintang kosong sesuai rating -->
                                </span>
                            </div>
                        </div>

                        <!-- Isi Komentar -->
                        <p class="card-text mt-2">
                            Layanan travel haji dan umroh yang luar biasa! Proses pendaftaran cepat dan ramah.
                        </p>

                        <!-- Bagian bawah: Status & Aksi -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Status Testimoni -->
                            <span class="badge badge-warning">Belum Diverifikasi</span>
                            
                            <!-- Tombol Aksi -->
                            <div>
                                <button class="btn btn-sm btn-success">Verifikasi</button>
                                <button class="btn btn-sm btn-warning">Edit</button>
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contoh Card Testimoni 2 -->
                <div class="card mb-3">
                    <div class="card-body">
                        <!-- Bagian atas: Nama & Tanggal & Rating -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title mb-1">Siti Hana</h6>
                                <small class="text-muted">2025-03-01</small>
                            </div>
                            <!-- Rating (contoh 5 bintang) -->
                            <div>
                                <span class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Isi Komentar -->
                        <p class="card-text mt-2">
                            Sangat memuaskan! Saya merasa terbantu dari awal proses hingga akhir.
                        </p>

                        <!-- Bagian bawah: Status & Aksi -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Status Testimoni -->
                            <span class="badge badge-success">Terverifikasi</span>
                            
                            <!-- Tombol Aksi -->
                            <div>
                                <!-- Jika sudah terverifikasi, admin mungkin hanya bisa Edit/Hapus -->
                                <button class="btn btn-sm btn-warning">Edit</button>
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tambahkan card-card testimoni lainnya sesuai data Anda -->

            </div> <!-- /testimonial-list -->
        </div> <!-- /card-body -->
    </div> <!-- /card -->
</div>
