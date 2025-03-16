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
            <h2>PAKET WISATA<small><code class="highlighter-rouge"></code></small></h2>
        </div>
        <div class="body">
            <ul class="nav nav-tabs-new2">
                <li class="nav-item"><a class="nav-link show active" data-toggle="tab" href="#wisata">Wisata</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kategori">Kategori</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show active" id="wisata">
                    <div class="body">
                        <button class="btn btn-primary m-b-15 btnTambah" type="button" data-target="paket_wisata"
                            data-toggle="modal">
                            <i class="fa fa-plus-square" aria-hidden="true"></i> Tambah
                        </button>
                        <button class="btn btn-secondary btnRefresh m-b-15" data-target="paket_wisata">
                            <i class="fa fa-refresh"></i>
                        </button>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" data-target="paket_wisata"
                                id="table_paket_wisata">
                                <thead>
                                    <tr>
                                        <th data-key="no">No</th>
                                        <th data-key="nama_kategori">Kategori</th>
                                        <th data-key="nama_paket">Nama Paket</th>
                                        <th data-key="harga">Harga</th>
                                        <th data-key="tujuan">Tujuan</th>
                                        <th data-key="tanggal">Tanggal Berangkat</th>
                                        <th data-key="fasilitas">Kuota</th>
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
                <div class="tab-pane" id="kategori">
                    <div class="body">
                        <button class="btn btn-primary m-b-15 btnTambah" type="button" data-target="kategori"
                            data-toggle="modal">
                            <i class="fa fa-plus-square" aria-hidden="true"></i> Tambah
                        </button>
                        <button class="btn btn-secondary btnRefresh m-b-15" data-target="kategori">
                            <i class="fa fa-refresh"></i>
                        </button>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped w-100" data-target="kategori"
                                id="table_kategori">
                                <thead>
                                    <tr>
                                        <th data-key="no">No</th>
                                        <th data-key="nama_kategori">Nama</th>
                                        <th data-key="btn_Aksi">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL TAMBAH PAKET wisata -->
<div class="modal fade" id="modal_paket_wisata" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header align-center">
                <h4 class="title" id="largeModalLabel">Paket wisata</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="body">
                        <form id="form_paket_wisata" method="post" novalidate>
                            <input type="hidden" class="form-control" id="id" name="id" value="">
                            <div class="form-group">
                                <label for="nama_kategori" class="form-label">Kategori</label>
                                <select class="form-control loadSelect chainedSelect" data-target="kategori" id="id_kategori" name="id_kategori" value="">
                                    <option value="">Pilih</option>
                                </select>
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-group">
                                <label for="nama_paket" class="form-label">Nama Paket</label>
                                <input type="text" id="nama_paket" name="nama_paket" class="form-control" required>
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-group">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" id="harga" name="harga" class="form-control" required>
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-group">
                                <label for="tujuan" class="form-label">Tujuan</label>
                                <input type="text" id="tujuan" name="tujuan" class="form-control" required>
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-group">
                                <label for="tanggal" class="form-label">Tanggal Berangkat</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-calendar"></i></span>
                                    </div>
                                    <input type="text" id="tanggal_berangkat" name="tanggal_berangkat"
                                        class="form-control date" placeholder="Ex: 30/07/2016" required>
                                </div>
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-group">
                                <label for="fasilitas" class="form-label">Fasilitas</label>
                                <input type="text" class="form-control" id="fasilitas" name="fasilitas" required>
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="form-label">Status </label>
                                <select class="form-control show-tick ms select2" id="status" name="status"
                                    data-placeholder="Select" required>
                                    <option></option>
                                    <option>Aktif</option>
                                    <option>Tutup</option>
                                </select>
                                <div class="text-danger"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btnSave js-sweetalert"
                                    data-type="with-title" data-target="paket_wisata">Simpan</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- MODAL DETAIL TABEL PAKET wisata -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="body">
                    <form id="form_paket_wisata" method="post" novalidate>
                            <input type="hidden" class="form-control" id="id" name="id" value="">
                            <div class="form-group">
                                <label for="nama_kategori" class="form-label">Kategori</label>
                                <select class="form-control loadSelect chainedSelect" data-target="kategori" id="id_kategori" name="id_kategori" value="" disabled>
                                    <option value="">Pilih</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="nama_paket" class="form-label">Nama Paket</label>
                                <input type="text" id="nama_paket" name="nama_paket" class="form-control" disabled>

                            </div>
                            <div class="form-group">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" id="harga" name="harga" class="form-control" disabled>

                            </div>
                            <div class="form-group">
                                <label for="tujuan" class="form-label">Tujuan</label>
                                <input type="text" id="durasi" name="durasi" class="form-control" disabled>

                            </div>
                            <div class="form-group">
                                <label for="tanggal" class="form-label">Tanggal Berangkat</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-calendar"></i></span>
                                    </div>
                                    <input type="text" id="tanggal_berangkat" name="tanggal_berangkat"
                                        class="form-control date" placeholder="Ex: 30/07/2016" disabled>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="fasilitas" class="form-label">Fasilitas</label>
                                <input type="text" class="form-control" id="fasilitas" name="fasilitas" disabled>

                            </div>
                            <div class="form-group">
                                <label for="status" class="form-label">Status </label>
                                <select class="form-control show-tick ms select2" id="status" name="status"
                                    data-placeholder="Select" disabled>
                                    <option></option>
                                    <option>Aktif</option>
                                    <option>Tutup</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btnSave js-sweetalert"
                                    data-type="with-title" data-target="paket_wisata">Simpan</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- MODAL TAMBAH KATEGORI PAKET wisata -->
<div class="modal fade" id="modal_kategori" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header align-center">
                <h4 class="title" id="largeModalLabel">Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="body">
                        <form id="form_kategori" method="post" novalidate>
                            <input type="hidden" class="form-control" id="id" name="id" value="">
                            <div class="form-group">
                                <label for="nama_kategori" class="form-label">Nama</label>
                                <textarea class="form-control" id="nama_kategori" name="nama_kategori" rows="5" cols="30"
                                    required></textarea>
                                <div class="text-danger"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btnSave js-sweetalert"
                                    data-type="with-title" data-target="kategori">Simpan</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- MODAL TAMBAH PERSYARATAN PAKET wisata -->
<div class="modal fade" id="modal_persyaratan" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header align-center">
                <h4 class="title" id="largeModalLabel">Tambah</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="body">
                        <form id="form_persyaratan" method="post" novalidate>
                            <input type="hidden" class="form-control" id="id" name="id" value="">
                            <div class="form-group">
                                <label for="nama_persyaratan_paket_haji" class="form-label">Nama</label>
                                <textarea class="form-control" id="nama_persyaratan_paket_haji" name="nama_persyaratan_paket_haji" rows="5" cols="30"
                                    required></textarea>
                                <div class="text-danger"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btnSave js-sweetalert"
                                    data-type="with-title" data-target="persyaratan">Simpan</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- MODAL TAMBAH SYARAT PAKET HAJI -->
<div class="modal fade" id="modal_syarat" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header align-center">
                <h4 class="title" id="largeModalLabel">Tambah</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="body">
                        <form id="form_syarat" method="post" novalidate>
                            <input type="hidden" class="form-control" id="id" name="id" value="">
                            <div class="form-group">
                                <label for="nama_syarat" class="form-label">Nama</label>
                                <textarea class="form-control" id="nama_syarat" name="nama_syarat" rows="5" cols="30"
                                    required></textarea>
                                <div class="text-danger"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btnSave js-sweetalert"
                                    data-type="with-title" data-target="syarat">Simpan</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

