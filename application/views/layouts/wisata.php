<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paket Wisata Eksklusif</title>
    <!-- Bootstrap CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <!-- Font Awesome (untuk ikon checklist) -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        /* Hero Section */
        .hero {
            background: url("https://via.placeholder.com/1200x300") no-repeat center center/cover;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        /* Package Section */
        .package-section {
            padding: 60px 15px;
            background: #fff;
        }

        .package-section h1 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
        }

        /* Kartu Paket Wisata */
        .package-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
            background-color: #f8ed8c;
            text-align: center;
        }

        .package-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .package-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .package-card .card-body {
            padding: 20px;
        }

        .package-card .card-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #000;
        }

        .package-card .price-wisata {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #000;
            color: #FFA725;
        }

        .package-card .currency {
            font-size: 1.2rem;
            vertical-align: super;
            margin-right: 5px;
        }

        .package-card ul {
            list-style: none;
            padding: 0;
            margin: 0 0 20px;
            text-align: left;
            display: inline-block;
        }

        .package-card ul li {
            margin: 8px 0;
            font-size: 0.95rem;
            color: #000;
            position: relative;
            padding-left: 25px;
        }

        .package-card ul li i {
            position: absolute;
            left: 0;
            top: 2px;
            color: gray;
        }

        .btn-package {
            background-color: #000;
            border: none;
            color: #fff;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }

        .btn-package:hover {
            background-color: #333;
        }
    </style>
</head>

<body>
    <!-- Section Paket Wisata -->
    <section class="package-section">
        <div class="container">
            <h1 class="text-center">Rekomendasi Paket Wisata</h1>
            <!-- Tautan "See More" ditempatkan di sisi kanan -->
            <div class="text-end mb-4">
                <a href="<?php echo site_url('wisata'); ?>">See More &raquo;</a>
            </div>
            <div class="row">
                <!-- Kartu Paket 1: Wisata Alam -->
                <div class="col-md-4 mb-4">
                    <div class="card package-card">
                        <img src="public/template/images/alam.jpg" alt="Wisata Alam" />
                        <div class="card-body">
                            <h5 class="card-title">Wisata Alam</h5>
                            <p class="price-wisata">
                                <span class="currency">Rp</span>50.000.000
                            </p>
                            <ul>
                                <li>
                                    <i class="fa fa-check"></i> Tanggal: 1 Maret 2025
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Durasi: 7 Hari
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Transportasi: Bus &amp; Boat
                                </li>
                            </ul>
                            <button class="btn-package">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <!-- Kartu Paket 2: Wisata Kota -->
                <div class="col-md-4 mb-4">
                    <div class="card package-card">
                        <img src="public/template/images/kota.jpg" alt="Wisata Kota" />
                        <div class="card-body">
                            <h5 class="card-title">Wisata Kota</h5>
                            <p class="price-wisata">
                                <span class="currency">Rp</span>20.000.000
                            </p>
                            <ul>
                                <li>
                                    <i class="fa fa-check"></i> Tanggal: 1 Maret 2025
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Durasi: 7 Hari
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Transportasi: Bus &amp; Boat
                                </li>
                            </ul>
                            <button class="btn-package">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <!-- Kartu Paket 3: Wisata Budaya -->
                <div class="col-md-4 mb-4">
                    <div class="card package-card">
                        <img src="public/template/images/budaya.jpg" alt="Wisata Budaya" />
                        <div class="card-body">
                            <h5 class="card-title">Wisata Budaya</h5>
                            <p class="price-wisata">
                                <span class="currency">Rp</span>30.000.000
                            </p>
                            <ul>
                                <li>
                                    <i class="fa fa-check"></i> Tanggal: 1 Maret 2025
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Durasi: 7 Hari
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Transportasi: Bus &amp; Boat
                                </li>
                            </ul>
                            <button class="btn-package">Lihat Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>