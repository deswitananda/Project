<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/style.css'); ?>">
    <!-- Untuk Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Paket Umroh</title>
</head>

<body>

    <!-- Paket Tersedia -->
    <div class="container" style="padding-top: 10%;">
        <div class=" row align-items-center justify-content-between">
            <div class="col-12 col-lg-6 mb-3">
                <h2 class="title-home font-weight-bold mb-3">Paket Tersedia</h2>
                <p class="mt-2 mb-0">
                    Memberikan fasilitas & pelayanan terbaik untuk kenyamanan ibadah Anda.
                </p>
            </div>
            <div class="col-12 col-lg-4 text-lg-end text-center">
                <a href="#" class="btn btn-primary">Lihat Semua Paket</a>

            </div>
        </div>


        <!-- Paket Cards -->
        <div class="row mt-4">
            <div class="col-md-6 col-lg-3">
                <div class="card card-umrah">
                    <img src="<?= base_url('public/assets/images/mekkah.jpg'); ?>"
                        class="card-img-top img-fluid rounded"
                        alt="Paket Umroh" />

                    <div class="card-body">
                        <div class="info">
                            <h5 class="name">
                                <a href="#">Paket Umroh</a>
                            </h5>

                            <div class="text-icon">
                                <div class="item">
                                    <div style="display: flex; align-items: center; gap: 10px;">
                                        <div><i class="fa-solid fa-calendar"></i> Tanggal</div>
                                        <div class="text">04 March 2025</div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div><i class="fa-solid fa-plane"></i> Maskapai</div>
                                    <div class="text">Citilink</div>
                                </div>
                            </div>

                            <div class="price">
                                <div class="text">Mulai dari</div>
                                <div class="promo">
                                    <div class="normal">Rp 35.000.000</div>
                                    <div class="discount">Rp 30.000.000</div>
                                </div>
                            </div>

                            <a href="#" class="btn btn-primary w-100 mt-3">Detail Produk</a>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img src="<?= base_url('public/assets/images/mekkah.jpg'); ?>" class="card-img-top img-fluid rounded" alt="Paket Umroh">
                    <div class="card-body">
                        <h5 class="name"><a href="#">Paket Umroh</a></h5>
                        <p><i class="ti ti-calendar-minus me-2"></i> 25 February 2025</p>
                        <p><i class="ti ti-plane-departure me-2"></i> Lion Air</p>
                        <p class="text">Mulai dari: <span class="text-danger">Rp 33.000.000</span></p>
                        <a href="#" class="btn btn-primary w-100 mt-3">Detail Produk</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img src="<?= base_url('public/assets/images/mekkah.jpg'); ?>" class="card-img-top img-fluid rounded" alt="Paket Umroh">
                    <div class="card-body">
                        <h5 class="name"><a href="#">Paket Umroh</a></h5>
                        <p><i class="ti ti-calendar-minus me-2"></i> 19 February 2025</p>
                        <p><i class="ti ti-plane-departure me-2"></i> Lion Air</p>
                        <p class="text">Mulai dari: <span class="text-danger">Rp 29.000.000</span></p>
                        <a href="#" class="btn btn-primary w-100 mt-3">Detail Produk</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img src="<?= base_url('public/assets/images/mekkah.jpg'); ?>" class="card-img-top img-fluid rounded" alt="Paket Umroh">
                    <div class="card-body">
                        <h5 class="name"><a href="#">Paket Umroh</a></h5>
                        <p><i class="ti ti-calendar-minus me-2"></i> 04 April 2025</p>
                        <p><i class="ti ti-plane-departure me-2"></i> Lion Air</p>
                        <p class="text">Mulai dari: <span class="text-danger">Rp 35.000.000</span></p>
                        <a href="#" class="btn btn-primary w-100 mt-3">Detail Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>