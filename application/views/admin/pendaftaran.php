<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12">
            <h2>PENDAFTARAN</h2>
        </div>
        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
            <ul class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="dashboard"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active">Pendaftaran</li>
            </ul>
        </div>
    </div>
</div>

<div class="card shadow-lg mb-4" id="daftar-jamaah">
    <div class="card-body">
        <div class="">
            <div class="body">
                <button class="btn btn-secondary btnRefresh m-b-15" data-target="pendaftaran_admin">
                    <i class="fa fa-refresh"></i>
                </button>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped" data-target="pendaftaran_admin"
                        id="table_pendaftaran_admin">
                        <thead>
                            <tr>
                                <th data-key="no">No</th>
                                <th data-key="kode_pendaftaran">Kode Pendaftaran</th>
                                <th data-key="nama_lengkap">Nama Lengkap</th>
                                <th data-key="jenis_kelamin">Jenis Kelamin</th>
                                <th data-key="no_hp_pendaftar">Nomor HP/WhatsApp</th>
                                <th data-key="alamat">Alamat</th>
                                <th data-key="email_pendaftar">Email</th>
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
                            <h3 style="color: black; font-weight: bold;">Detail Pendaftaran</h3>
                        </div>
                        <br>
                        <form id="form_pendaftaran_user" method="POST" enctype="multipart/form-data">
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="hidden" class="form-control" id="id" name="id" value="">
                                    <div class="form-group">
                                        <label for="kode_pendaftaran" class="form-label">Kode Pendaftaran</label>
                                        <input type="text" class="form-control" id="kode_pendaftaran" name="kode_pendaftaran" value="" style="width: 100%;" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" value="" style="width: 100%;" placeholder="Masukkan Nama Lengkap" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="email_pendaftar" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email_pendaftar" name="email_pendaftar" value="" style="width: 100%;" placeholder="Contoh: John@gmail.com" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" style="width: 100%;" disabled>
                                            <option value="">Pilih</option>
                                            <option value="laki-laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp_pendaftar" class="form-label">Nomor HP/WhatsApp</label>
                                        <input type="text" class="form-control" id="no_hp_pendaftar" name="no_hp_pendaftar" value="" placeholder="Contoh: 082300009999" style="width: 100%;" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"  value="" style="width: 100%;" placeholder="Contoh: Medan" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"  value="" style="width: 100%;" disabled>
                                    </div>

                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" id="alamat" name="alamat" value="" class="form-control" placeholder="Masukkan Alamat Anda" style="width: 100%;" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor_paspor" class="form-label">Nomor Paspor</label>
                                        <input type="text" id="nomor_paspor" name="nomor_paspor" value="" class="form-control" placeholder="Masukkan Alamat Nomor Paspor" style="width: 100%;" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor_ktp" class="form-label">Nomor KTP/NIK</label>
                                        <input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp" value="" placeholder="Contoh: 1271000011112222" style="width: 100%;" disabled>
                                    </div>
                                    <!-- <div class="form-group">
                                <label for="foto_ktp">Foto KTP</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto_ktp" name="foto_ktp">
                                        <label class="custom-file-label" for="foto_ktp"></label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div> -->
                                    <div class="form-group">
                                        <label for="riwayat_kesehatan" class="form-label">Riwayat Kesehatan</label>
                                        <textarea type="text" class="form-control" id="riwayat_kesehatan" name="riwayat_kesehatan" value="" style="width: 100%;" disabled></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btnSave" data-type="with-title"
                                    data-target="pendaftaran_user">Simpan</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal Ubah Status -->
<div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="statusModalLabel">Ubah Status Pendaftaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUbahStatus">
          <input type="hidden" id="pendaftaran_id" name="id">
          <div class="form-group">
            <label for="new_status">Pilih Status</label>
            <select class="form-control" id="new_status" name="status">
              <option value="Menunggu Verifikasi">Menunggu Verifikasi</option>
              <option value="Diterima">Diterima</option>
              <option value="Ditolak">Ditolak</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" id="btnSimpanStatus">Simpan</button>
      </div>
    </div>
  </div>
</div>




<script>
$(document).on('click', '.openModalStatus', function() {
    var id = $(this).data('id');
    var status = $(this).data('status');

    $('#pendaftaran_id').val(id);
    $('#new_status').val(status);
    $('#statusModal').modal('show');
});

// Simpan perubahan status
$('#btnSimpanStatus').on('click', function() {
    var formData = $('#formUbahStatus').serialize();

    $.ajax({
        url: baseClass + '/update_status_pendaftaran',
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status) {
                $('#statusModal').modal('hide');
                alert('Status berhasil diperbarui');
                location.reload(); // Refresh halaman
            } else {
                alert('Gagal memperbarui status');
            }
        }
    });
});


</script>

