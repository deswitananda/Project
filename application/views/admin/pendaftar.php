<div class="container py-4">
    <!-- Judul Halaman & Tombol Buat Pendaftaran Baru -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h4 class="font-weight-bold mb-0">Pendaftaran Jamaah</h4>
            <small class="text-muted">Kelola pendaftaran jamaah, ubah status, dan lihat detail.</small>
        </div>
        <!-- Tombol Buat Pendaftaran Baru (Tanpa Icon) -->
        <button id="btn-buat-pendaftaran" class="btn btn-success">
            Buat Pendaftaran Baru
        </button>
    </div>

    <!-- Tabel Daftar Jamaah Terdaftar -->
    <div class="card shadow-lg mb-4" id="daftar-jamaah">
        <div class="card-body">
            <h5 class="font-weight-bold">Daftar Jamaah Terdaftar</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <!-- Tambahkan class="text-center" agar teks <th> berada di tengah -->
                        <tr class="text-center">
                            <th style="width: 50px;">No</th>
                            <th>Nama Jamaah</th>
                            <th>Kontak</th>
                            <th>Paket yang Dipilih</th>
                            <th>Status Pembayaran</th>
                            <th>Status Visa</th>
                            <th style="width: 180px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh data statis. Nanti diganti dengan data dari database. -->
                        <tr>
                            <td>1</td>
                            <td>Ahmad Zain</td>
                            <td>08123456789</td>
                            <td>Umroh Reguler</td>
                            <td>DP 50%</td>
                            <td>Belum Lengkap</td>
                            <td>
                                <button class="btn btn-sm btn-primary">Ubah Status</button>
                                <button class="btn btn-sm btn-info">Lihat Detail</button>
                                <button class="btn btn-sm btn-danger">Harus Pendaftaran</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Siti Hana</td>
                            <td>08987654321</td>
                            <td>Haji Plus VIP</td>
                            <td>Lunas</td>
                            <td>Lengkap</td>
                            <td>
                                <button class="btn btn-sm btn-primary">Ubah Status</button>
                                <button class="btn btn-sm btn-info">Lihat Detail</button>
                                <button class="btn btn-sm btn-danger">Harus Pendaftaran</button>
                            </td>
                        </tr>
                        <!-- ... dan seterusnya -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Formulir Pendaftaran Jamaah (default disembunyikan) -->
    <div class="card shadow-lg mb-4" id="form-pendaftaran" style="display: none;">
        <div class="card-body">
            <h5 class="font-weight-bold">Form Pendaftaran Jamaah</h5>
            <small class="text-muted">Lengkapi data pendaftaran untuk jamaah.</small>
            <hr>
            <form id="pendaftaranForm">
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
                    <small class="form-text text-muted">
                        Upload KTP, Paspor, atau dokumen lain sebagai bukti pendukung.
                    </small>
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-secondary mr-2" id="btn-batal">
                        Batal Pendaftaran
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Simpan Pendaftaran
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Konfirmasi Pendaftaran Sukses (Secara default disembunyikan) -->
    <div id="confirmation" class="card shadow-lg" style="display: none;">
        <div class="card-body">
            <h5 class="font-weight-bold text-success">Pendaftaran berhasil! Data jamaah telah ditambahkan.</h5>
            <hr>
            <p><strong>Nama Jamaah:</strong> <span id="conf-nama"></span></p>
            <p><strong>Paket yang Dipilih:</strong> <span id="conf-paket"></span></p>
            <p><strong>Status Pembayaran:</strong> <span id="conf-pembayaran"></span></p>
            <p><strong>Tanggal Keberangkatan:</strong> <span id="conf-keberangkatan"></span></p>
            <div class="mt-3">
                <button class="btn btn-info" id="btn-lihat-daftar">
                    Lihat Daftar Jamaah
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Contoh JavaScript sederhana untuk toggle tampilan -->
<script>
    const btnBuatPendaftaran = document.getElementById('btn-buat-pendaftaran');
    const formPendaftaran = document.getElementById('form-pendaftaran');
    const daftarJamaah = document.getElementById('daftar-jamaah');
    const confirmation = document.getElementById('confirmation');
    const btnBatal = document.getElementById('btn-batal');
    const pendaftaranForm = document.getElementById('pendaftaranForm');
    const btnLihatDaftar = document.getElementById('btn-lihat-daftar');

    // Tampilkan form pendaftaran, sembunyikan tabel
    btnBuatPendaftaran.addEventListener('click', () => {
        daftarJamaah.style.display = 'none';
        confirmation.style.display = 'none';
        formPendaftaran.style.display = 'block';
    });

    // Tombol batal pendaftaran
    btnBatal.addEventListener('click', () => {
        formPendaftaran.style.display = 'none';
        confirmation.style.display = 'none';
        daftarJamaah.style.display = 'block';
    });

    // Simpan pendaftaran (contoh sederhana, belum ada proses ke server)
    pendaftaranForm.addEventListener('submit', (e) => {
        e.preventDefault(); // Mencegah reload halaman

        // Misal mengambil data singkat dari form
        const nama = pendaftaranForm.querySelector('input[placeholder="Masukkan nama lengkap"]').value;
        // Perlu lebih spesifik jika punya beberapa <select> required, 
        // misalnya Anda dapat gunakan querySelectorAll untuk mengambil select ke-2, dsb.
        const paket = pendaftaranForm.querySelector('select[required]').value;
        const pembayaran = pendaftaranForm.querySelector('select[required]').value; 
        const tglKeberangkatan = pendaftaranForm.querySelector('input[type="date"]').value; 

        // Sembunyikan form, tampilkan konfirmasi
        formPendaftaran.style.display = 'none';
        confirmation.style.display = 'block';
        daftarJamaah.style.display = 'none';

        // Isi data konfirmasi
        document.getElementById('conf-nama').innerText = nama || '[Nama Lengkap]';
        document.getElementById('conf-paket').innerText = paket || '[Paket]';
        document.getElementById('conf-pembayaran').innerText = pembayaran || '[Status Pembayaran]';
        document.getElementById('conf-keberangkatan').innerText = tglKeberangkatan || '[Tanggal Keberangkatan]';
    });

    // Tombol "Lihat Daftar Jamaah" di konfirmasi
    btnLihatDaftar.addEventListener('click', () => {
        confirmation.style.display = 'none';
        formPendaftaran.style.display = 'none';
        daftarJamaah.style.display = 'block';

        // Di sini Anda bisa memuat ulang data tabel via AJAX/refresh, dsb.
    });
</script>
