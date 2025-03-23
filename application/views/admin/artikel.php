<div class="container py-4">
    <!-- Card dengan border kuning -->
    <div class="card-custom-border mb-4">
        <div class="card-header bg-white">
            <h4 class="font-weight-bold mb-0">ARTIKEL</h4>
        </div>
        <!-- Nav Tabs -->
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#tab-artikel" role="tab" aria-controls="tab-artikel" aria-selected="true">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#tab-kategori" role="tab" aria-controls="tab-kategori" aria-selected="false">Kategori Artikel</a>
                </li>
            </ul>
        </div>
        <!-- Tab Content -->
        <div class="tab-content">
            <!-- Tab Artikel -->
            <div id="tab-artikel" class="tab-pane fade show active" role="tabpanel">
                <!-- Tombol di atas tabel -->
                <div class="d-flex justify-content-start mb-2">
                    <button id="btnTambahArtikel" class="btn btn-success" data-target="artikel">Buat Artikel Baru</button>
                    <button id="btnRefreshArtikel" class="btn btn-refresh ml-2" data-target="artikel">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                </div>
                <!-- Tabel Artikel -->
                <div class="table-responsive mb-3">
                    <table id="table_artikel" class="table table-bordered table-hover" data-target="artikel">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th data-key="no">No</th>
                                <th data-key="nama_kategori">Kategori</th>
                                <th data-key="judul">Judul</th>
                                <th data-key="tanggal">Tanggal</th>
                                <th data-key="aksi">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data dimuat secara otomatis melalui AJAX -->
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Tab Kategori -->
            <div id="tab-kategori" class="tab-pane fade" role="tabpanel">
                <!-- Tombol di atas tabel -->
                <div class="d-flex justify-content-start mb-2">
                    <button id="btnTambahKategori" class="btn btn-success" data-target="kategori">Buat Kategori Baru</button>
                    <button id="btnRefreshKategori" class="btn btn-refresh ml-2" data-target="kategori">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                </div>
                <!-- Tabel Kategori -->
                <div class="table-responsive mb-3">
                    <table id="table_kategori_artikel" class="table table-bordered table-hover" data-target="kategori">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th data-key="no">No</th>
                                <th data-key="nama_kategori">Nama Kategori</th>
                                <th data-key="aksi">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data dimuat secara otomatis melalui AJAX -->
                        </tbody>
                    </table>
                </div>
            </div> <!-- End Tab Kategori -->
        </div> <!-- End Tab Content -->
    </div> <!-- End Card -->
</div> <!-- End Container -->

<!-- Modal Form Artikel -->
<div class="modal fade" id="modal_artikel" tabindex="-1" role="dialog" aria-labelledby="modalArtikelLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="artikelForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalArtikelLabel">Buat Artikel Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Form Tambah Artikel</h5>
                        <small class="text-muted">Lengkapi data artikel baru.</small>
                        <hr>
                        <!-- Baris 1: Kategori & Judul Artikel -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="kategoriArtikel">Kategori</label>
                                <select class="form-control" id="kategoriArtikel" required>
                                    <option value="">Pilih Kategori</option>
                                    <!-- Opsi kategori akan dimuat via AJAX (lihat method option_kategori_Artikel) -->
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="judulArtikel">Judul Artikel</label>
                                <input type="text" class="form-control" id="judulArtikel" placeholder="Masukkan judul artikel" required>
                            </div>
                        </div>
                        <!-- Baris 2: Konten Artikel -->
                        <div class="form-group">
                            <label for="kontenArtikel">Konten</label>
                            <textarea class="form-control" id="kontenArtikel" rows="5" placeholder="Tulis konten artikel di sini..." required></textarea>
                        </div>
                        <!-- Baris 3: Keyword & Gambar -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="keywordArtikel">Keyword</label>
                                <input type="text" class="form-control" id="keywordArtikel" placeholder="Contoh: teknologi, inovasi, AI" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gambarArtikel">Gambar</label>
                                <input type="file" class="form-control-file" id="gambarArtikel">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Artikel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Form Kategori -->
<div class="modal fade" id="modal_kategori" tabindex="-1" role="dialog" aria-labelledby="modalKategoriLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="form_kategori">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalKategoriLabel">Buat Kategori Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_kategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" placeholder="Masukkan nama kategori" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" data-target="kategori">Simpan Kategori</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Inisialisasi DataTables untuk Artikel dengan AJAX
        var tableArtikel = $('#table_artikel').DataTable({
            "ajax": {
                "url": "<?= base_url('artikel/table_artikel') ?>",
                "type": "POST"
            },
            "columnDefs": [{
                "targets": 0,
                "orderable": false,
                "searchable": false
            }],
            "drawCallback": function(settings) {
                var api = this.api();
                api.column(0, {
                    search: 'applied',
                    order: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                });
            }
        });

        // Inisialisasi DataTables untuk Kategori dengan AJAX
        var tableKategori = $('#table_kategori_artikel').DataTable({
            "ajax": {
                "url": "<?= base_url('artikel/table_kategori_artikel') ?>",
                "type": "POST"
            },
            "columnDefs": [{
                "targets": -1,
                "orderable": false,
                "searchable": false,
                "render": function(data, type, row, meta) {
                    return data;
                }
            }],
            "drawCallback": function(settings) {
                var api = this.api();
                api.column(0, {
                    search: 'applied',
                    order: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                });
            }
        });

        // // Muat opsi kategori untuk form artikel via AJAX
        // $.ajax({
        //     url: "<?= base_url('artikel/option_kategori_artikel') ?>",
        //     method: "GET",
        //     success: function(response) {
        //         $('#kategoriArtikel').html(response);
        //     },
        //     error: function(xhr, status, error) {
        //         console.error("Gagal memuat opsi kategori:", error);
        //     }
        // });


        // Tampilkan modal untuk membuat artikel baru
        $('#btnTambahArtikel').on('click', function() {
            $('#modal_artikel').modal('show');
        });
        // Tampilkan modal untuk membuat kategori baru
        $('#btnTambahKategori').on('click', function() {
            $('#modal_kategori').modal('show');
        });

        // Tombol refresh
        $('#btnRefreshArtikel').on('click', function() {
            tableArtikel.ajax.reload(null, false);
        });
        $('#btnRefreshKategori').on('click', function() {
            tableKategori.ajax.reload(null, false);
        });

        // Submit form Artikel
        $('#artikelForm').on('submit', function(e) {
            e.preventDefault();
            const judul = $('#judulArtikel').val();
            const kategori = $('#kategoriArtikel').val();
            const konten = $('#kontenArtikel').val();
            const keyword = $('#keywordArtikel').val();

            $.ajax({
                url: '<?= base_url("artikel/save_artikel") ?>',
                method: 'POST',
                data: {
                    judul,
                    id_kategori: kategori,
                    konten,
                    keyword
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status) {
                        $('#modal_artikel').modal('hide');
                        alert(response.message);
                        tableArtikel.ajax.reload(null, false);
                    } else {
                        alert(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('Terjadi kesalahan saat menyimpan data.');
                }
            });
        });

        // Submit form Kategori
        $('#form_kategori').on('submit', function(e) {
            e.preventDefault();
            const namaKategori = $('#nama_kategori').val();

            $.ajax({
                url: '<?= base_url("artikel/save_kategori_artikel") ?>',
                method: 'POST',
                data: {
                    nama_kategori: namaKategori
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status) {
                        $('#modal_kategori').modal('hide');
                        alert(response.message);
                        tableKategori.ajax.reload(null, false);
                    } else {
                        alert(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('Terjadi kesalahan saat menyimpan kategori.');
                }
            });
        });
    });
</script>