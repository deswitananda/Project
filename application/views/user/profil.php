<div class="container py-4">
    <h4 class="font-weight-bold mb-3">Profil Pengguna</h4>
    <p class="text-muted">Kelola informasi pribadi, dokumen perjalanan, dan kontak darurat Anda.</p>

    <div class="row">
        <!-- Kolom Kiri: Avatar / Foto Profil -->
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <!-- Foto Profil (Placeholder) -->
                    <img src="https://via.placeholder.com/120" alt="Foto Profil" class="rounded-circle mb-3" style="width: 120px;">
                    <h6 class="font-weight-bold">Foto Profil</h6>
                    <input type="file" class="form-control-file mb-3">
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Form Pengaturan Profil -->
        <div class="col-md-8">
            <form>
                <!-- 1. Data Pribadi -->
                <div class="card mb-3">
                    <div class="card-body">
                        <h6 class="font-weight-bold">Data Pribadi</h6>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="email@example.com">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>No. Telepon</label>
                                <input type="text" class="form-control" placeholder="+62 8123456789">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" rows="2" placeholder="Alamat lengkap"></textarea>
                        </div>
                    </div>
                </div>

                <!-- 2. Data Dokumen (KTP / Passport) -->
                <div class="card mb-3">
                    <div class="card-body">
                        <h6 class="font-weight-bold">Data Dokumen</h6>
                        <div class="form-group">
                            <label>Nomor KTP</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nomor KTP">
                        </div>
                        <div class="form-group">
                            <label>Nomor Passport</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nomor Passport">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Tanggal Terbit Passport</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tanggal Habis Passport</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Kontak Darurat -->
                <div class="card mb-3">
                    <div class="card-body">
                        <h6 class="font-weight-bold">Kontak Darurat</h6>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nama Kontak Darurat</label>
                                <input type="text" class="form-control" placeholder="Nama Kontak Darurat">
                            </div>
                            <div class="form-group col-md-6">
                                <label>No. Telepon Kontak Darurat</label>
                                <input type="text" class="form-control" placeholder="+62 8123456789">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Hubungan</label>
                            <select class="form-control">
                                <option>Suami/Istri</option>
                                <option>Anak</option>
                                <option>Orang Tua</option>
                                <option>Saudara</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Tombol Simpan -->
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
