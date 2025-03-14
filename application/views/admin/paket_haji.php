<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12">
            <h2>PRODUK</h2>
        </div>
        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
            <ul class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="dashboard"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active">Produk</li>
            </ul>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="header">
            <h2>PAKET HAJI<small><code class="highlighter-rouge"></code></small></h2>
        </div>
        <div class="body">
            <ul class="nav nav-tabs-new2">
                <li class="nav-item"><a class="nav-link show active" data-toggle="tab" href="#haji">Haji</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kategori">Kategori</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#persyaratan">Persyaratan Peserta</a>
                </li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#syarat">Syarat & Ketentuan</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show active" id="haji">
                    <div class="body">
                        <button class="btn btn-primary m-b-15 btnTambah" type="button" data-target="paket_haji"
                            data-toggle="modal">
                            <i class="fa fa-plus-square" aria-hidden="true"></i> Tambah
                        </button>
                        <button class="btn btn-secondary btnRefresh m-b-15" data-target="paket_haji">
                            <i class="fa fa-refresh"></i>
                        </button>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" data-target="paket_haji"
                                id="table_paket_haji">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="check-all"></th>
                                        <th data-key="no">No</th>
                                        <th data-key="nama_paket">Nama Paket</th>
                                        <th data-key="deskripsi">Deskripsi</th>
                                        <th data-key="harga">Harga</th>
                                        <th data-key="durasi">Durasi</th>
                                        <th data-key="tanggal_berangkat">Tanggal_berangkat</th>
                                        <th data-key="tanggal_pulang">Tanggal_pulang</th>
                                        <th data-key="fasilitas">Fasilitas</th>
                                        <th data-key="maskapai">Maskapai</th>
                                        <th data-key="kuota">Kuota</th>
                                        <th data-key="status">Status</th>
                                        <th data-key="btn_Aksi">Aksi</th>
                                    </tr>
                                </thead>
                                <br>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="kategori">

                </div>
                <div class="tab-pane" id="persyaratan">

                </div>
                <div class="tab-pane" id="syarat">

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Large Size -->
<div class="modal fade" id="modal_paket_haji" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header align-center">
                <h4 class="title" id="largeModalLabel">Tambah Paket Haji</h4>
            </div>
            <div class="modal-body">
                <div class="card">
                <div class="body">
                    <form id="basic-form" method="post" novalidate>
                        <div class="form-group">
                            <label>Nama Paket</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" rows="5" cols="30" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Durasi</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Berangkat</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-calendar"></i></span>
                                </div>
                                <input type="text" class="form-control date" placeholder="Ex: 30/07/2016" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Pulang</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-calendar"></i></span>
                                </div>
                                <input type="text" class="form-control date" placeholder="Ex: 30/07/2016" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Fasilitas</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Maskapai</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Kuota</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Status </label>
                            <select class="form-control show-tick ms select2" data-placeholder="Select" required>
                                <option></option>
                                <option>Tersedia</option>
                                <option>Penuh</option>
                                <option>Tutup</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>

        </div>
    </div>
</div>