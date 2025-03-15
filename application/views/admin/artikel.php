<div class="container py-4">
    <!-- Nav Tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tab-artikel">Artikel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab-kategori">Kategori</a>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Tab Artikel -->
        <div id="tab-artikel" class="tab-pane fade show active">
            <!-- Header Artikel -->
            <div class="d-flex justify-content-between align-items-center my-3">
                <h4 class="font-weight-bold mb-0">Artikel</h4>
                <button id="btn-buat-artikel" class="btn btn-success">Buat Artikel Baru</button>
            </div>

            <!-- Daftar Artikel -->
            <div id="daftar-artikel">
                <div class="card shadow-lg mb-4">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Daftar Artikel</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr class="text-center">
                                        <th style="width: 50px;">No</th>
                                        <th>Kategori</th>
                                        <th>Judul</th>
                                        <th>Tanggal</th>
                                        <th style="width: 180px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Contoh data statis; nantinya data diambil dari database -->
                                    <tr>
                                        <td>1</td>
                                        <td>Teknologi</td>
                                        <td>Inovasi AI Terbaru</td>
                                        <td>2025-03-15</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary">Ubah</button>
                                            <button class="btn btn-sm btn-info">Lihat Detail</button>
                                            <button class="btn btn-sm btn-danger">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Bisnis</td>
                                        <td>Strategi Pasar Global</td>
                                        <td>2025-03-14</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary">Ubah</button>
                                            <button class="btn btn-sm btn-info">Lihat Detail</button>
                                            <button class="btn btn-sm btn-danger">Hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Tambah Artikel (default disembunyikan) -->
            <div id="form-artikel" class="card shadow-lg mb-4" style="display: none;">
                <div class="card-body">
                    <h5 class="font-weight-bold">Form Tambah Artikel</h5>
                    <small class="text-muted">Lengkapi data artikel baru.</small>
                    <hr>
                    <form id="artikelForm">
                        <!-- Baris 1: Kategori & Judul Artikel -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Kategori</label>
                                <select class="form-control" required>
                                    <option value="">Pilih Kategori</option>
                                    <option>Teknologi</option>
                                    <option>Olahraga</option>
                                    <option>Bisnis</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Judul Artikel</label>
                                <input type="text" class="form-control" placeholder="Masukkan judul artikel" required>
                            </div>
                        </div>
                        <!-- Baris 2: Konten Artikel -->
                        <div class="form-group">
                            <label>Konten</label>
                            <textarea class="form-control" rows="5" placeholder="Tulis konten artikel di sini..." required></textarea>
                        </div>
                        <!-- Baris 3: Keyword & Gambar -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Keyword</label>
                                <input type="text" class="form-control" placeholder="Contoh: teknologi, inovasi, AI" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Gambar</label>
                                <input type="file" class="form-control-file">
                            </div>
                        </div>
                        <!-- Tombol Aksi -->
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary mr-2" id="btn-batal-artikel">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan Artikel</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Konfirmasi Artikel Berhasil (default disembunyikan) -->
            <div id="confirmation-artikel" class="card shadow-lg" style="display: none;">
                <div class="card-body">
                    <h5 class="font-weight-bold text-success">Artikel berhasil disimpan!</h5>
                    <hr>
                    <p><strong>Judul Artikel:</strong> <span id="conf-judul"></span></p>
                    <p><strong>Kategori:</strong> <span id="conf-kategori"></span></p>
                    <div class="mt-3">
                        <button class="btn btn-info" id="btn-lihat-artikel">Lihat Daftar Artikel</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Kategori -->
        <div id="tab-kategori" class="tab-pane fade">
            <!-- Header Kategori -->
            <div class="d-flex justify-content-between align-items-center my-3">
                <h4 class="font-weight-bold mb-0">Kategori</h4>
                <button id="btn-buat-kategori" class="btn btn-success">Buat Kategori Baru</button>
            </div>

            <!-- Daftar Kategori -->
            <div id="daftar-kategori">
                <div class="card shadow-lg mb-4">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Daftar Kategori</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr class="text-center">
                                        <th style="width: 50px;">No</th>
                                        <th>Nama Kategori</th>
                                        <th>Deskripsi</th>
                                        <th style="width: 180px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Contoh data statis -->
                                    <tr>
                                        <td>1</td>
                                        <td>Teknologi</td>
                                        <td>Berita dan artikel seputar teknologi</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary">Ubah</button>
                                            <button class="btn btn-sm btn-danger">Hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Tambah Kategori (default disembunyikan) -->
            <div id="form-kategori" class="card shadow-lg mb-4" style="display: none;">
                <div class="card-body">
                    <h5 class="font-weight-bold">Form Tambah Kategori</h5>
                    <small class="text-muted">Lengkapi data kategori baru.</small>
                    <hr>
                    <form id="kategoriForm">
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama kategori" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" rows="3" placeholder="Deskripsi kategori" required></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary mr-2" id="btn-batal-kategori">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan Kategori</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Konfirmasi Kategori Berhasil (default disembunyikan) -->
            <div id="confirmation-kategori" class="card shadow-lg" style="display: none;">
                <div class="card-body">
                    <h5 class="font-weight-bold text-success">Kategori berhasil disimpan!</h5>
                    <hr>
                    <p><strong>Nama Kategori:</strong> <span id="conf-nama-kategori"></span></p>
                    <p><strong>Deskripsi:</strong> <span id="conf-deskripsi"></span></p>
                    <div class="mt-3">
                        <button class="btn btn-info" id="btn-lihat-kategori">Lihat Daftar Kategori</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript Toggle Tampilan -->
<script>
    // --- Artikel Section ---
    const btnBuatArtikel = document.getElementById('btn-buat-artikel');
    const formArtikel = document.getElementById('form-artikel');
    const daftarArtikel = document.getElementById('daftar-artikel');
    const confirmationArtikel = document.getElementById('confirmation-artikel');
    const btnBatalArtikel = document.getElementById('btn-batal-artikel');
    const artikelForm = document.getElementById('artikelForm');
    const btnLihatArtikel = document.getElementById('btn-lihat-artikel');

    btnBuatArtikel.addEventListener('click', () => {
        daftarArtikel.style.display = 'none';
        confirmationArtikel.style.display = 'none';
        formArtikel.style.display = 'block';
    });

    btnBatalArtikel.addEventListener('click', () => {
        formArtikel.style.display = 'none';
        confirmationArtikel.style.display = 'none';
        daftarArtikel.style.display = 'block';
    });

    artikelForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const judul = artikelForm.querySelector('input[placeholder="Masukkan judul artikel"]').value;
        const kategori = artikelForm.querySelector('select[required]').value;
        formArtikel.style.display = 'none';
        confirmationArtikel.style.display = 'block';
        daftarArtikel.style.display = 'none';
        document.getElementById('conf-judul').innerText = judul || '[Judul Artikel]';
        document.getElementById('conf-kategori').innerText = kategori || '[Kategori]';
    });

    btnLihatArtikel.addEventListener('click', () => {
        confirmationArtikel.style.display = 'none';
        formArtikel.style.display = 'none';
        daftarArtikel.style.display = 'block';
    });

    // --- Kategori Section ---
    const btnBuatKategori = document.getElementById('btn-buat-kategori');
    const formKategori = document.getElementById('form-kategori');
    const daftarKategori = document.getElementById('daftar-kategori');
    const confirmationKategori = document.getElementById('confirmation-kategori');
    const btnBatalKategori = document.getElementById('btn-batal-kategori');
    const kategoriForm = document.getElementById('kategoriForm');
    const btnLihatKategori = document.getElementById('btn-lihat-kategori');

    btnBuatKategori.addEventListener('click', () => {
        daftarKategori.style.display = 'none';
        confirmationKategori.style.display = 'none';
        formKategori.style.display = 'block';
    });

    btnBatalKategori.addEventListener('click', () => {
        formKategori.style.display = 'none';
        confirmationKategori.style.display = 'none';
        daftarKategori.style.display = 'block';
    });

    kategoriForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const namaKategori = kategoriForm.querySelector('input[placeholder="Masukkan nama kategori"]').value;
        const deskripsi = kategoriForm.querySelector('textarea[placeholder="Deskripsi kategori"]').value;
        formKategori.style.display = 'none';
        confirmationKategori.style.display = 'block';
        daftarKategori.style.display = 'none';
        document.getElementById('conf-nama-kategori').innerText = namaKategori || '[Nama Kategori]';
        document.getElementById('conf-deskripsi').innerText = deskripsi || '[Deskripsi]';
    });

    btnLihatKategori.addEventListener('click', () => {
        confirmationKategori.style.display = 'none';
        formKategori.style.display = 'none';
        daftarKategori.style.display = 'block';
    });
</script>