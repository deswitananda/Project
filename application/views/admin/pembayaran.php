<div class="container py-4">
    <!-- Judul & Tombol Aksi -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h4 class="font-weight-bold mb-0">Pembayaran - Admin</h4>
            <small class="text-muted">Kelola pembayaran jamaah secara efisien.</small>
        </div>
        <div>
            <button class="btn btn-light mr-2">Cancel</button>
            <button class="btn btn-primary">Save Changes</button>
        </div>
    </div>

    <!-- Card Utama -->
    <div class="card shadow-lg">
        <div class="card-body">
            <div class="row">
                <!-- SIDEBAR: Vertical Tabs -->
                <div class="col-lg-3 col-md-4 col-sm-12 border-right">
                    <div class="nav flex-column nav-pills" id="payment-tabs" role="tablist" aria-orientation="vertical">
                        <!-- TAB 1: Pembayaran Jamaah -->
                        <a class="nav-link active mb-2 d-flex align-items-center"
                           id="pembayaran-jamaah-tab" data-toggle="pill" href="#pembayaran-jamaah" role="tab"
                           aria-controls="pembayaran-jamaah" aria-selected="true">
                            <i class="fa fa-money-bill-wave mr-2 text-primary"></i>
                            Pembayaran Jamaah
                        </a>
                        <!-- TAB 2: Pembayaran Belum Tervalidasi -->
                        <a class="nav-link mb-2 d-flex align-items-center"
                           id="belum-tervalidasi-tab" data-toggle="pill" href="#belum-tervalidasi" role="tab"
                           aria-controls="belum-tervalidasi" aria-selected="false">
                            <i class="fa fa-exclamation-circle mr-2 text-warning"></i>
                            Belum Tervalidasi
                        </a>
                        <!-- TAB 3: Riwayat Pembayaran -->
                        <a class="nav-link mb-2 d-flex align-items-center"
                           id="riwayat-tab" data-toggle="pill" href="#riwayat" role="tab"
                           aria-controls="riwayat" aria-selected="false">
                            <i class="fa fa-history mr-2 text-info"></i>
                            Riwayat Pembayaran
                        </a>
                        <!-- TAB 4: Laporan Pembayaran -->
                        <a class="nav-link mb-2 d-flex align-items-center"
                           id="laporan-tab" data-toggle="pill" href="#laporan" role="tab"
                           aria-controls="laporan" aria-selected="false">
                            <i class="fa fa-chart-bar mr-2 text-success"></i>
                            Laporan Pembayaran
                        </a>
                        <!-- TAB 5: Tambah Pembayaran Manual -->
                        <a class="nav-link d-flex align-items-center"
                           id="manual-tab" data-toggle="pill" href="#manual" role="tab"
                           aria-controls="manual" aria-selected="false">
                            <i class="fa fa-plus-square mr-2 text-primary"></i>
                            Pembayaran Manual
                        </a>
                    </div>
                </div>

                <!-- KONTEN: Bagian Kanan -->
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <!-- Tab Content -->
                    <div class="tab-content" id="payment-tabs-content">
                        
                        <!-- TAB 1: Pembayaran Jamaah -->
                        <div class="tab-pane fade show active" id="pembayaran-jamaah" role="tabpanel" aria-labelledby="pembayaran-jamaah-tab">
                            <h5 class="font-weight-bold">Tabel Pembayaran Jamaah</h5>
                            <small class="text-muted d-block mb-3">
                                Menampilkan data pembayaran yang telah dilakukan oleh jamaah.
                            </small>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama Jamaah</th>
                                            <th>Paket</th>
                                            <th>Jumlah Pembayaran</th>
                                            <th>Tanggal Pembayaran</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Status Pembayaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Contoh data statis -->
                                        <tr>
                                            <td>1</td>
                                            <td>Ahmad Zain</td>
                                            <td>Umroh Reguler</td>
                                            <td>Rp 5.000.000</td>
                                            <td>10-01-2025</td>
                                            <td>Transfer Bank</td>
                                            <td>Belum Tervalidasi</td>
                                            <td>
                                                <button class="btn btn-sm btn-info">Detail</button>
                                                <button class="btn btn-sm btn-warning">Ubah Status</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Siti Hana</td>
                                            <td>Haji Plus VIP</td>
                                            <td>Rp 10.000.000</td>
                                            <td>12-01-2025</td>
                                            <td>Kartu Kredit</td>
                                            <td>Lunas</td>
                                            <td>
                                                <button class="btn btn-sm btn-info">Detail</button>
                                                <button class="btn btn-sm btn-warning">Ubah Status</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- TAB 2: Pembayaran Belum Tervalidasi -->
                        <div class="tab-pane fade" id="belum-tervalidasi" role="tabpanel" aria-labelledby="belum-tervalidasi-tab">
                            <h5 class="font-weight-bold">Tabel Pembayaran Belum Tervalidasi</h5>
                            <small class="text-muted d-block mb-3">
                                Menampilkan pembayaran yang perlu dikonfirmasi atau divalidasi oleh admin.
                            </small>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama Jamaah</th>
                                            <th>Paket</th>
                                            <th>Jumlah Pembayaran</th>
                                            <th>Tanggal Pembayaran</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Status Pembayaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Siti Hana</td>
                                            <td>Haji Plus VIP</td>
                                            <td>Rp 5.000.000</td>
                                            <td>10-01-2025</td>
                                            <td>Transfer Bank</td>
                                            <td>Belum Tervalidasi</td>
                                            <td>
                                                <button class="btn btn-sm btn-success">Validasi Pembayaran</button>
                                                <button class="btn btn-sm btn-danger">Tolak Pembayaran</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>John Doe</td>
                                            <td>Wisata Domestik</td>
                                            <td>Rp 2.000.000</td>
                                            <td>11-01-2025</td>
                                            <td>Kartu Kredit</td>
                                            <td>Belum Tervalidasi</td>
                                            <td>
                                                <button class="btn btn-sm btn-success">Validasi Pembayaran</button>
                                                <button class="btn btn-sm btn-danger">Tolak Pembayaran</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- TAB 3: Riwayat Pembayaran -->
                        <div class="tab-pane fade" id="riwayat" role="tabpanel" aria-labelledby="riwayat-tab">
                            <h5 class="font-weight-bold">Riwayat Pembayaran Jamaah</h5>
                            <small class="text-muted d-block mb-3">
                                Menampilkan seluruh riwayat pembayaran yang telah selesai atau tercatat.
                            </small>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama Jamaah</th>
                                            <th>Paket</th>
                                            <th>Total Pembayaran</th>
                                            <th>Status Pembayaran</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Tanggal Pembayaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ahmad Zain</td>
                                            <td>Umroh Reguler</td>
                                            <td>Rp 5.000.000</td>
                                            <td>Lunas</td>
                                            <td>Transfer Bank</td>
                                            <td>15-01-2025</td>
                                            <td>
                                                <button class="btn btn-sm btn-info">Lihat Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Siti Hana</td>
                                            <td>Haji Plus VIP</td>
                                            <td>Rp 10.000.000</td>
                                            <td>Lunas</td>
                                            <td>Kartu Kredit</td>
                                            <td>20-01-2025</td>
                                            <td>
                                                <button class="btn btn-sm btn-info">Lihat Detail</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- TAB 4: Laporan Pembayaran -->
                        <div class="tab-pane fade" id="laporan" role="tabpanel" aria-labelledby="laporan-tab">
                            <h5 class="font-weight-bold">Laporan Pembayaran</h5>
                            <small class="text-muted d-block mb-3">
                                Menampilkan laporan keseluruhan pembayaran, dapat difilter berdasarkan periode atau status.
                            </small>
                            <hr>
                            <!-- Contoh filter sederhana (opsional) -->
                            <div class="form-row mb-3">
                                <div class="form-group col-md-3">
                                    <label>Periode Awal</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Periode Akhir</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Status Pembayaran</label>
                                    <select class="form-control">
                                        <option value="">Semua</option>
                                        <option>Belum Lunas</option>
                                        <option>Lunas</option>
                                        <option>Belum Tervalidasi</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 d-flex align-items-end">
                                    <button class="btn btn-primary w-100">Filter</button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama Jamaah</th>
                                            <th>Paket</th>
                                            <th>Jumlah Pembayaran</th>
                                            <th>Tanggal Pembayaran</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Status Pembayaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td>Umroh</td>
                                            <td>Rp 15.000.000</td>
                                            <td>10-01-2025</td>
                                            <td>Transfer Bank</td>
                                            <td>Belum Lunas</td>
                                            <td>
                                                <button class="btn btn-sm btn-info">Lihat</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jane Smith</td>
                                            <td>Haji</td>
                                            <td>Rp 30.000.000</td>
                                            <td>11-01-2025</td>
                                            <td>Kartu Kredit</td>
                                            <td>Lunas</td>
                                            <td>
                                                <button class="btn btn-sm btn-info">Lihat</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Bob Johnson</td>
                                            <td>Wisata</td>
                                            <td>Rp 5.000.000</td>
                                            <td>12-01-2025</td>
                                            <td>Tunai</td>
                                            <td>Belum Tervalidasi</td>
                                            <td>
                                                <button class="btn btn-sm btn-info">Lihat</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- TAB 5: Tambah Pembayaran Manual -->
                        <div class="tab-pane fade" id="manual" role="tabpanel" aria-labelledby="manual-tab">
                            <h5 class="font-weight-bold">Tambah Pembayaran Manual</h5>
                            <small class="text-muted d-block mb-3">
                                Input data pembayaran secara manual (transfer bank, tunai, dsb) yang belum tercatat otomatis.
                            </small>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label>Nomor Pembayaran</label>
                                    <input type="text" class="form-control" placeholder="Contoh: PAY001" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Jamaah</label>
                                    <input type="text" class="form-control" placeholder="Nama jamaah" required>
                                </div>
                                <div class="form-group">
                                    <label>Paket yang Dibayar</label>
                                    <select class="form-control" required>
                                        <option value="">Pilih Paket</option>
                                        <option>Paket Haji</option>
                                        <option>Paket Umroh</option>
                                        <option>Paket Wisata</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Jumlah Bayar</label>
                                        <input type="number" class="form-control" placeholder="Masukkan jumlah pembayaran" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Status Pembayaran</label>
                                        <select class="form-control" required>
                                            <option value="">Pilih Status</option>
                                            <option>DP 30%</option>
                                            <option>DP 50%</option>
                                            <option>Lunas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Pembayaran</label>
                                    <input type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Metode Pembayaran</label>
                                    <select class="form-control" required>
                                        <option value="">Pilih Metode</option>
                                        <option>Transfer Bank</option>
                                        <option>Kartu Kredit</option>
                                        <option>Tunai</option>
                                        <option>Dll</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Bukti Pembayaran (Opsional)</label>
                                    <input type="file" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan (Opsional)</label>
                                    <textarea class="form-control" rows="2" placeholder="Masukkan catatan jika ada"></textarea>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-secondary mr-2">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan Pembayaran</button>
                                </div>
                            </form>
                        </div>
                        
                    </div> <!-- /tab-content -->
                </div> <!-- /col -->
            </div> <!-- /row -->
        </div> <!-- /card-body -->
    </div> <!-- /card -->
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
        url: baseClass + '/update_status_pembayaran',
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