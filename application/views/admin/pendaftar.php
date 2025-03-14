<div class="container py-4">
    <!-- Judul Halaman Pendaftaran Jamaah -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h4 class="font-weight-bold mb-0">Pendaftaran Jamaah</h4>
            <small class="text-muted">Lengkapi data pendaftaran untuk jamaah.</small>
        </div>
    </div>

    <!-- Formulir Pendaftaran Jamaah -->
    <div class="card shadow-lg mb-4" id="form-pendaftaran">
        <div class="card-body">
            <form>
                <!-- Baris 1: Nama Lengkap & Jenis Kelamin -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                </div>

                <!-- Baris 2: Tanggal Lahir & Nomor Kontak -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nomor Kontak (Telepon/WA)</label>
                        <input type="tel" class="form-control" placeholder="+62 8123456789" required>
                    </div>
                </div>

                <!-- Baris 3: Email & Alamat (Opsional) -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Email (Opsional)</label>
                        <input type="email" class="form-control" placeholder="email@example.com">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Alamat (Opsional)</label>
                        <input type="text" class="form-control" placeholder="Alamat lengkap">
                    </div>
                </div>

                <!-- Baris 4: Paket yang Dipilih -->
                <div class="form-group">
                    <label>Paket yang Dipilih</label>
                    <select class="form-control" required>
                        <option value="">Pilih Paket</option>
                        <option>Paket Haji</option>
                        <option>Paket Umroh</option>
                        <option>Paket Wisata</option>
                    </select>
                </div>

                <!-- Baris 5: Status Pembayaran & Status Visa & Tanggal Keberangkatan -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Status Pembayaran</label>
                        <select class="form-control" required>
                            <option value="">Pilih Status Pembayaran</option>
                            <option>DP 30%</option>
                            <option>DP 50%</option>
                            <option>Lunas</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Status Visa</label>
                        <select class="form-control" required>
                            <option value="">Pilih Status Visa</option>
                            <option>Belum Lengkap</option>
                            <option>Sedang Diproses</option>
                            <option>Lengkap</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Tanggal Keberangkatan yang Diinginkan</label>
                        <input type="date" class="form-control" required>
                    </div>
                </div>

                <!-- Baris 6: Jumlah Orang & Catatan -->
                <div class="form-group">
                    <label>Jumlah Orang yang Mendaftar</label>
                    <input type="number" class="form-control" placeholder="Misal: 1 (jika 1 keluarga)" required>
                </div>
                <div class="form-group">
                    <label>Catatan (Opsional)</label>
                    <textarea class="form-control" rows="2" placeholder="Masukkan catatan tambahan jika ada"></textarea>
                </div>

                <!-- Baris 7: Dokumen Pendukung -->
                <div class="form-group">
                    <label>Dokumen Pendukung (Opsional)</label>
                    <input type="file" class="form-control-file" multiple>
                    <small class="form-text text-muted">Upload KTP, Paspor, atau dokumen lain sebagai bukti pendukung.</small>
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-end">
                    <button type="reset" class="btn btn-secondary mr-2">Batal Pendaftaran</button>
                    <button type="submit" class="btn btn-primary">Simpan Pendaftaran</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Konfirmasi Pendaftaran Sukses (Secara default disembunyikan) -->
    <div id="confirmation" class="card shadow-lg" style="display: none;">
        <div class="card-body">
            <h5 class="font-weight-bold text-success">Pendaftaran berhasil! Data jamaah telah ditambahkan.</h5>
            <hr>
            <p><strong>Nama Jamaah:</strong> [Nama Lengkap]</p>
            <p><strong>Paket yang Dipilih:</strong> [Paket]</p>
            <p><strong>Status Pembayaran:</strong> [Status Pembayaran]</p>
            <p><strong>Tanggal Keberangkatan:</strong> [Tanggal Keberangkatan]</p>
            <div class="mt-3">
                <a href="daftar_jamaah.php" class="btn btn-info">Lihat Daftar Jamaah</a>
            </div>
        </div>
    </div>

    <!-- Notifikasi/Pengingat untuk Pendaftaran (bisa ditempatkan di sidebar atau di atas form) -->
    <div class="alert alert-warning mt-4" role="alert">
        <strong>Notifikasi:</strong> Pendaftaran hampir tutup untuk paket tertentu. Harap konfirmasi pembayaran sebelum melanjutkan pendaftaran. Pendaftaran baru telah dibuka untuk paket umroh 2025.
    </div>
</div>
