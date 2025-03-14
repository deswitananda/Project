<div class="container py-4">
    <!-- Judul & Tombol di Luar Card -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h4 class="font-weight-bold mb-0">Pengaturan Admin</h4>
            <small class="text-muted">Kelola semua pengaturan di sini.</small>
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
                    <!-- Menu (Vertical Pills) -->
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <!-- 1. Pengaturan Umum -->
                        <a class="nav-link active mb-2 d-flex align-items-center"
                           id="umum-tab" data-toggle="pill" href="#umum" role="tab">
                            <i class="fa fa-cog mr-2 text-primary"></i>
                            Pengaturan Umum
                        </a>
                        <!-- 2. Pengaturan Pengguna -->
                        <a class="nav-link mb-2 d-flex align-items-center"
                           id="pengguna-tab" data-toggle="pill" href="#pengguna" role="tab">
                            <i class="fa fa-users mr-2 text-success"></i>
                            Pengaturan Pengguna
                        </a>
                        <!-- 3. Pengaturan Pembayaran -->
                        <a class="nav-link mb-2 d-flex align-items-center"
                           id="pembayaran-tab" data-toggle="pill" href="#pembayaran" role="tab">
                            <i class="fa fa-credit-card mr-2 text-warning"></i>
                            Pengaturan Pembayaran
                        </a>
                        <!-- 4. Paket Umroh & Haji -->
                        <a class="nav-link mb-2 d-flex align-items-center"
                           id="paket-tab" data-toggle="pill" href="#paket" role="tab">
                            <i class="fa fa-plane mr-2 text-info"></i>
                            Paket Umroh &amp; Haji
                        </a>
                        <!-- 5. Email & Notifikasi -->
                        <a class="nav-link mb-2 d-flex align-items-center"
                           id="email-tab" data-toggle="pill" href="#email" role="tab">
                            <i class="fa fa-envelope mr-2 text-danger"></i>
                            Email &amp; Notifikasi
                        </a>
                        <!-- 6. Pengaturan Keamanan -->
                        <a class="nav-link mb-2 d-flex align-items-center"
                           id="keamanan-tab" data-toggle="pill" href="#keamanan" role="tab">
                            <i class="fa fa-lock mr-2 text-dark"></i>
                            Pengaturan Keamanan
                        </a>
                        <!-- 7. Laporan & Analitik -->
                        <a class="nav-link d-flex align-items-center"
                           id="laporan-tab" data-toggle="pill" href="#laporan" role="tab">
                            <i class="fa fa-chart-pie mr-2 text-secondary"></i>
                            Laporan &amp; Analitik
                        </a>
                    </div>
                </div>
                
                <!-- KONTEN: Bagian Kanan -->
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <!-- Tab Content -->
                    <div class="tab-content" id="v-pills-tabContent">
                        <!-- TAB 1: Pengaturan Umum -->
                        <div class="tab-pane fade show active" id="umum" role="tabpanel" aria-labelledby="umum-tab">
                            <h5 class="font-weight-bold">Pengaturan Umum</h5>
                            <small class="text-muted">Kelola nama website, logo, deskripsi, dan kontak.</small>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label>Nama Website</label>
                                    <input type="text" class="form-control" placeholder="Contoh: TravelUmrohKu">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Singkat</label>
                                    <textarea class="form-control" rows="2" placeholder="Tagline / deskripsi singkat"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Logo Website</label><br>
                                    <input type="file" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label>Kontak</label>
                                    <input type="text" class="form-control" placeholder="+62 8123456789">
                                </div>
                            </form>
                        </div>
                        
                        <!-- TAB 2: Pengaturan Pengguna -->
                        <div class="tab-pane fade" id="pengguna" role="tabpanel" aria-labelledby="pengguna-tab">
                            <h5 class="font-weight-bold">Pengaturan Pengguna</h5>
                            <small class="text-muted">Tambah, edit, dan hapus pengguna serta atur peran dan akses.</small>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label>Nama Pengguna</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama pengguna">
                                </div>
                                <div class="form-group">
                                    <label>Email Pengguna</label>
                                    <input type="email" class="form-control" placeholder="email@example.com">
                                </div>
                                <div class="form-group">
                                    <label>Peran Pengguna</label>
                                    <select class="form-control">
                                        <option>Administrator</option>
                                        <option>Editor</option>
                                        <option>User</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="********">
                                </div>
                            </form>
                        </div>
                        
                        <!-- TAB 3: Pengaturan Pembayaran -->
                        <div class="tab-pane fade" id="pembayaran" role="tabpanel" aria-labelledby="pembayaran-tab">
                            <h5 class="font-weight-bold">Pengaturan Pembayaran</h5>
                            <small class="text-muted">Atur metode pembayaran, gateway, dan mata uang.</small>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label>Payment Gateway</label>
                                    <select class="form-control">
                                        <option>Midtrans</option>
                                        <option>PayPal</option>
                                        <option>Stripe</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Mata Uang</label>
                                    <input type="text" class="form-control" placeholder="IDR, USD, dsb.">
                                </div>
                                <div class="form-group">
                                    <label>Notifikasi Pembayaran</label>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="paymentNotification">
                                        <label class="custom-control-label" for="paymentNotification">Aktifkan</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <!-- TAB 4: Paket Umroh & Haji -->
                        <div class="tab-pane fade" id="paket" role="tabpanel" aria-labelledby="paket-tab">
                            <h5 class="font-weight-bold">Paket Umroh &amp; Haji</h5>
                            <small class="text-muted">Kelola paket perjalanan, harga, dan ketersediaan.</small>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label>Nama Paket</label>
                                    <input type="text" class="form-control" placeholder="Contoh: Paket Umroh Reguler">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="number" class="form-control" placeholder="Contoh: 15000000">
                                </div>
                                <div class="form-group">
                                    <label>Ketersediaan</label>
                                    <select class="form-control">
                                        <option>Tersedia</option>
                                        <option>Habis</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Paket</label>
                                    <textarea class="form-control" rows="3" placeholder="Detail paket, jadwal, dsb."></textarea>
                                </div>
                            </form>
                        </div>
                        
                        <!-- TAB 5: Email & Notifikasi -->
                        <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="email-tab">
                            <h5 class="font-weight-bold">Email &amp; Notifikasi</h5>
                            <small class="text-muted">Susun template email dan konfigurasi SMTP.</small>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label>SMTP Host</label>
                                    <input type="text" class="form-control" placeholder="smtp.example.com">
                                </div>
                                <div class="form-group">
                                    <label>SMTP Port</label>
                                    <input type="number" class="form-control" placeholder="Contoh: 587">
                                </div>
                                <div class="form-group">
                                    <label>Username SMTP</label>
                                    <input type="text" class="form-control" placeholder="email@example.com">
                                </div>
                                <div class="form-group">
                                    <label>Password SMTP</label>
                                    <input type="password" class="form-control" placeholder="********">
                                </div>
                                <div class="form-group">
                                    <label>Template Email Notifikasi</label>
                                    <textarea class="form-control" rows="3" placeholder="Isi template email"></textarea>
                                </div>
                            </form>
                        </div>
                        
                        <!-- TAB 6: Pengaturan Keamanan -->
                        <div class="tab-pane fade" id="keamanan" role="tabpanel" aria-labelledby="keamanan-tab">
                            <h5 class="font-weight-bold">Pengaturan Keamanan</h5>
                            <small class="text-muted">Atur autentikasi 2FA, ganti password, dan log aktivitas.</small>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label>Aktifkan 2FA</label>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="enable2FA">
                                        <label class="custom-control-label" for="enable2FA">Aktifkan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Password Baru</label>
                                    <input type="password" class="form-control" placeholder="Masukkan password baru">
                                </div>
                                <div class="form-group">
                                    <label>Konfirmasi Password Baru</label>
                                    <input type="password" class="form-control" placeholder="Konfirmasi password baru">
                                </div>
                                <div class="form-group">
                                    <label>Log Aktivitas (Opsional)</label>
                                    <textarea class="form-control" rows="2" placeholder="Tampilkan ringkasan log keamanan"></textarea>
                                </div>
                            </form>
                        </div>
                        
                        <!-- TAB 7: Laporan & Analitik -->
                        <div class="tab-pane fade" id="laporan" role="tabpanel" aria-labelledby="laporan-tab">
                            <h5 class="font-weight-bold">Laporan &amp; Analitik</h5>
                            <small class="text-muted">Konfigurasi laporan keuangan dan pemesanan, integrasi analitik.</small>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label>Pilih Periode Laporan</label>
                                    <div class="d-flex">
                                        <input type="date" class="form-control mr-2">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Laporan</label>
                                    <select class="form-control">
                                        <option>Laporan Keuangan</option>
                                        <option>Laporan Pemesanan</option>
                                        <option>Laporan Pengguna</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Integrasi Analitik</label>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="enableAnalytics">
                                        <label class="custom-control-label" for="enableAnalytics">Aktifkan</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div> <!-- /tab-content -->
                </div> <!-- /col -->
            </div> <!-- /row -->
        </div> <!-- /card-body -->
    </div> <!-- /card -->
</div>
