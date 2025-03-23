<!-- Header / Breadcrumb -->
<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12">
            <h2>PEMESANAN</h2>
        </div>
        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
            <ul class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="dashboard"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active">Pemesanan</li>
            </ul>
        </div>
    </div>
</div>

<!-- Tabel Pemesanan -->
<div class="card shadow-lg mb-4" id="container_table">
    <div class="card-body">
        <div class="body">
            <button class="btn btn-primary m-b-15 btnTambah" type="button" data-target="pemesanan_user" data-toggle="modal">
                <i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Pemesanan
            </button>
            <button class="btn btn-secondary btnRefresh m-b-15" data-target="pemesanan_user">
                <i class="fa fa-refresh"></i>
            </button>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" data-target="pemesanan_user" id="table_pemesanan_user">
                    <thead>
                        <tr>
                            <th data-key="no">No</th>
                            <th data-key="kode_pemesanan">Kode Pemesanan</th>
                            <th data-key="nama_kategori">Kategori</th>
                            <th data-key="nama_paket">Nama Paket</th>
                            <th data-key="nama_lengkap">Nama Lengkap</th>
                            <th data-key="harga">Harga</th>
                            <th data-key="tanggal_pemesanan">Tanggal Pemesanan</th>
                            <th data-key="status">Status</th>
                            <!-- Kolom Tagihan -->
                            <th data-key="tagihan">Tagihan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Form Pemesanan -->
<div class="modal fade" id="modal_pemesanan_user" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div>
                            <h3 style="color: black; font-weight: bold;">Form Pemesanan</h3>
                        </div>
                        <br>
                        <form id="form_pemesanan_user" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" id="id" name="id" value="">
                                    <div class="form-group">
                                        <label for="kode_pendaftaran" class="form-label">Kode Pendaftaran</label>
                                        <select class="form-control loadSelect chainedSelect" data-target="pendaftaran" id="id_pendaftaran" name="id_pendaftaran">
                                            <option value="">Pilih</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_kategori" class="form-label">Kategori</label>
                                        <select class="form-control loadSelect chainedSelect" data-target="kategori" id="id_kategori" name="id_kategori">
                                            <option value="">Pilih</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_paket" class="form-label">Nama Paket</label>
                                        <select class="form-control loadSelect chainedSelect" data-target="produk" id="id_produk" name="id_produk">
                                            <option value="">Pilih</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btnSave" data-type="with-title" data-target="pemesanan_user">Simpan</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail Pemesanan -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div>
                            <h3 style="color: black; font-weight: bold;">Detail Pemesanan</h3>
                        </div>
                        <br>
                        <form id="form_pemesanan_user" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" id="id" name="id" value="">
                                    <div class="form-group">
                                        <label for="kode_pemesanan" class="form-label">Kode Pemesanan</label>
                                        <input type="text" id="kode_pemesanan" name="kode_pemesanan" class="form-control" value="" disabled>
                                    </div>
                                    <!-- Field Tagihan / No Invoice -->
                                    <div class="form-group">
                                        <label for="tagihan" class="form-label">Tagihan (No Invoice)</label>
                                        <input type="text" id="tagihan" name="tagihan" class="form-control" value="" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_kategori" class="form-label">Kategori</label>
                                        <select class="form-control loadSelect chainedSelect" data-target="kategori" id="id_kategori" name="id_kategori" disabled>
                                            <option value="">Pilih</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_produk" class="form-label">Nama Paket</label>
                                        <select class="form-control loadSelect chainedSelect" data-target="produk" id="id_produk" name="id_produk" disabled>
                                            <option value="">Pilih</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_pemesanan" class="form-label">Tanggal Pemesanan</label>
                                        <input type="text" id="tanggal_pemesanan" name="tanggal_pemesanan" class="form-control" value="" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btnSave" data-type="with-title" data-target="pemesanan_user">Simpan</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script untuk load data kategori dan produk -->
<script>
    $(document).ready(function() {
        // Load kategori untuk form
        $.ajax({
            url: baseClass+'/option_kategori',
            method: 'GET',
            success: function(data) {
                $('#id_kategori').html(data);
            }
        });

        // Jika kategori dipilih, load produk terkait
        $('#id_kategori').change(function() {
            var kategoriId = $(this).val();
            if (kategoriId) {
                $('#id_produk').prop('disabled', false);
                $.ajax({
                    url: baseClass+'/option_produk/' + kategoriId,
                    method: 'GET',
                    success: function(data) {
                        $('#id_produk').html(data);
                    }
                });
            } else {
                $('#id_produk').prop('disabled', true).html('<option value="">Pilih</option>');
            }
        });
    });
</script>

<!-- Script tambahan untuk modal detail (load kategori dan produk) -->
<script>
    $(document).ready(function() {
        $.ajax({
            url: baseClass+'/option_kategori',
            method: 'GET',
            success: function(data) {
                $('#detailModal #id_kategori').html(data);
            }
        });

        $('#detailModal #id_kategori').change(function() {
            var kategoriId = $(this).val();
            if (kategoriId) {
                $('#detailModal #id_produk').prop('disabled', false);
                $.ajax({
                    url: baseClass+'/option_produk/' + kategoriId,
                    method: 'GET',
                    success: function(data) {
                        $('#detailModal #id_produk').html(data);
                    }
                });
            } else {
                $('#detailModal #id_produk').prop('disabled', true).html('<option value="">Pilih</option>');
            }
        });
    });
</script>
