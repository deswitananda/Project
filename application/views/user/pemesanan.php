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
<div class="card shadow-lg mb-4" id="container_table">
    <div class="card-body">
        <div class="">
            <div class="body" >
                <button class="btn btn-primary m-b-15 btnTambah" type="button" data-target="pemesanan_user"
                    data-toggle="modal">
                    <i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Pemesanan
                </button>
                <button class="btn btn-secondary btnRefresh m-b-15" data-target="pemesanan_user">
                    <i class="fa fa-refresh"></i>
                </button>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped" data-target="pemesanan_user"
                        id="table_pemesanan_user">
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
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_pemesanan_user" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card">
                    <div class="card-body" >
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="">
                            <h3 style="color: black; font-weight: bold;">Form Pemesanan</h3>
                        </div>
                        <br>
                        <form id="form_pemesanan_user" method="POST" enctype="multipart/form-data">
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" class="form-control" id="id" name="id" value="">
                                    <div class="form-group">
                                        <label for="kode_pendaftaran" class="form-label">Kode Pendaftaran</label>
                                        <select class="form-control loadSelect chainedSelect" data-target="pendaftaran" id="id_pendaftaran" name="id_pendaftaran" value="">
                                            <option value="">Pilih</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_kategori" class="form-label">Kategori</label>
                                        <select class="form-control loadSelect chainedSelect" data-target="kategori" id="id_kategori" name="id_kategori" value="">
                                            <option value="">Pilih</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_paket" class="form-label">Nama Paket</label>
                                        <select class="form-control loadSelect chainedSelect" data-target="produk" id="id_produk" name="id_produk" value="">
                                            <option value="">Pilih</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btnSave" data-type="with-title"
                                    data-target="pemesanan_user">Simpan</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="detailModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="">
                            <h3 style="color: black; font-weight: bold;">Detail Pemesanan</h3>
                        </div>
                        <br>
                        <form id="form_pemesanan_user" method="POST" enctype="multipart/form-data">
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" class="form-control" id="id" name="id" value="">
                                    <div class="form-group">
                                        <label for="kode_pemesanan" class="form-label">Kode Pemesanan</label>
                                        <input type="text" class="form-control" id="kode_pemesanan" name="kode_pemesanan" value="" style="width: 100%;" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_kategori" class="form-label">Kategori</label>
                                        <select class="form-control loadSelect chainedSelect" data-target="kategori" id="id_kategori" name="id_kategori" value="" disabled>
                                            <option value="">Pilih</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_produk" class="form-label">Nama Paket</label>
                                        <select class="form-control loadSelect chainedSelect" data-target="produk" id="id_produk" name="id_produk" value="" disabled>
                                            <option value="">Pilih</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_pemesanan" class="form-label">Tangal Pemesanan</label>
                                        <input type="text" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" value="" style="width: 100%;" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btnSave" data-type="with-title"
                                    data-target="pemesanan_user">Simpan</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
    // Memuat kategori saat halaman dimuat
    $.ajax({
        url: baseClass+'/option_kategori',  // Gantilah dengan URL yang sesuai untuk memuat kategori
        method: 'GET',
        success: function(data) {
            $('#id_kategori').html(data);
        }
    });

    // Ketika kategori dipilih
    $('#id_kategori').change(function() {
        var kategoriId = $(this).val();

        // Cek apakah kategori dipilih
        if (kategoriId) {
            // Mengaktifkan dropdown produk dan memuat produk berdasarkan kategori
            $('#id_produk').prop('disabled', false);

            $.ajax({
                url: baseClass+'/option_produk/' + kategoriId,  // Gantilah dengan URL yang sesuai untuk memuat produk
                method: 'GET',
                success: function(data) {
                    $('#id_produk').html(data);
                }
            });
        } else {
            // Jika kategori tidak dipilih, disable dropdown produk dan reset
            $('#id_produk').prop('disabled', true).html('<option value="">Pilih</option>');
        }
    });

    
});



</script>


<script>
    $(document).ready(function() {
    // Memuat kategori saat halaman dimuat
    $.ajax({
        url: baseClass+'/option_kategori',  // Gantilah dengan URL yang sesuai untuk memuat kategori
        method: 'GET',
        success: function(data) {
            $('#id_kategori').html(data);
        }
    });

    // Ketika kategori dipilih
    $('#id_kategori').change(function() {
        var kategoriId = $(this).val();

        // Cek apakah kategori dipilih
        if (kategoriId) {
            // Mengaktifkan dropdown produk dan memuat produk berdasarkan kategori
            $('#id_produk').prop('disabled', false);

            $.ajax({
                url: baseClass+'/option_produk/' + kategoriId,  // Gantilah dengan URL yang sesuai untuk memuat produk
                method: 'GET',
                success: function(data) {
                    $('#id_produk').html(data);
                }
            });
        } else {
            // Jika kategori tidak dipilih, disable dropdown produk dan reset
            $('#id_produk').prop('disabled', true).html('<option value="">Pilih</option>');
        }
    });

    
});



</script>