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
        <div class="body">
            <button class="btn btn-secondary btnRefresh m-b-15" data-target="pemesanan_admin">
                <i class="fa fa-refresh"></i>
            </button>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" data-target="pemesanan_admin"
                    id="table_pemesanan_admin">
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
                            <th data-key="tagihan">Tagihan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data di-load melalui Ajax -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk Ubah Tagihan -->
<div class="modal fade" id="modalTagihan" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ubah Tagihan & Status</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formTagihan">
          <input type="hidden" name="id" id="tagihan_id">
          <div class="form-group">
            <label for="tagihan_status">Tagihan</label>
            <select class="form-control" name="tagihan" id="tagihan_status">
              <option value="Belum Lunas">Belum Lunas</option>
              <option value="Lunas">Lunas</option>
            </select>
          </div>
          <div class="form-group">
            <label for="status_pemesanan">Status Pemesanan</label>
            <select class="form-control" name="status" id="status_pemesanan">
              <option value="Menunggu Verifikasi">Menunggu Verifikasi</option>
              <option value="Diterima">Diterima</option>
              <option value="Ditolak">Ditolak</option>
              <option value="Lunas">Lunas</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" id="btnSimpanTagihan">Simpan Perubahan</button>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    // Inisialisasi DataTables untuk load data (sesuaikan dengan implementasi DataTables Anda)
    // ...

    // Event untuk membuka modal Ubah Tagihan
    $(document).on('click', '.openModalTagihan', function(){
        var id      = $(this).data('id');
        var tagihan = $(this).data('tagihan');
        var status  = $(this).data('status');

        $('#tagihan_id').val(id);
        $('#tagihan_status').val(tagihan);
        $('#status_pemesanan').val(status);
        $('#modalTagihan').modal('show');
    });

    // Event untuk menyimpan perubahan dari modal
    $('#btnSimpanTagihan').on('click', function(){
        var formData = $('#formTagihan').serialize();
        $.ajax({
            url: '<?= site_url("admin/pemesanan/update_status_pemesanan") ?>',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response){
                if(response.status){
                    alert(response.message);
                    $('#modalTagihan').modal('hide');
                    location.reload();
                } else {
                    alert(response.message);
                }
            }
        });
    });
});
</script>
