<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Choose Your Package</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <!-- Font Awesome (untuk ikon checklist) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .pricing-section {
            padding: 60px 15px;
            text-align: center;
        }

        .pricing-section h2 {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .pricing-section p.lead {
            color: #6c757d;
            margin-bottom: 40px;
        }

        .subetitle {
            text-align: left;
            margin: 40px 0 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #000;
        }

        .subetitle h2 {
            font-size: 2rem;
            color: #000;
            font-weight: 700;
            margin: 0;
        }

        /* Wrapper untuk kartu dan gambar */
        .card-wrapper {
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }

        .card-wrapper:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .card-wrapper img.card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }

        .pricing-card {
            border: none;
            border-radius: 0;
            box-shadow: none;
            padding: 30px;
            background-color: #F8ED8C;
            text-align: center;
            margin: 0;
        }

        .pricing-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #000;
        }

        .pricing-card .price {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #000;
        }

        .pricing-card .currency {
            font-size: 1.2rem;
            vertical-align: super;
            margin-right: 5px;
        }

        .pricing-card ul {
            list-style: none;
            padding: 0;
            margin: 0 0 20px;
            text-align: left;
            display: inline-block;
        }

        .pricing-card ul li {
            margin: 8px 0;
            color: #333;
            font-size: 0.95rem;
            position: relative;
            padding-left: 25px;
        }

        .pricing-card ul li i {
            color: gray;
            margin-right: 5px;
            position: absolute;
            left: 0;
            top: 2px;
        }

        .btn-package {
            background-color: #000;
            border: none;
            color: #fff;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 25px;
            transition: background-color 0.3s ease;
            margin-bottom: 15px;
        }

        .btn-package:hover {
            background-color: #333;
        }

        .text-end a {
            text-decoration: none;
            font-size: 0.9rem;
            color: #6c757d;
            transition: color 0.2s;
        }

        .text-end a:hover {
            color: #000;
        }

        @media (max-width: 768px) {
            .subetitle {
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container">
            <h2>Rekomendasi Paket Haji dan Umrah</h2>
            <p class="lead">
                Mulailah Perjalanan Spiritual: Mitra Haji Tepercaya Anda.
                Paket Haji Komprehensif yang Disesuaikan dengan Kebutuhan Anda.
                Akomodasi premium, transportasi individual.
            </p>

            <!-- Paket Haji -->
            <div class="subetitle">
                <h2>PAKET HAJI</h2>
            </div>
            <div class="row justify-content-center">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card-wrapper">
                        <img src="public/template/images/kabah 3.jpg" alt="Paket Umroh Reguler" class="card-img-top" />
                        <div class="pricing-card">
                            <h3>Paket Haji Reguler</h3>
                            <div class="price">
                                <span class="currency">Rp</span>33.000.000
                            </div>
                            <button class="btn-package">Lihat Detail</button>
                            <ul>
                                <li><i class="fa fa-check"></i> Tanggal: 25 Februari 2025</li>
                                <li><i class="fa fa-check"></i> Maskapai: Lion Air</li>
                                <li><i class="fa fa-check"></i> Durasi: 9 Hari</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card-wrapper">
                        <img src="public/template/images/kabah 3.jpg" alt="Paket Umrah Ramadhan" class="card-img-top" />
                        <div class="pricing-card">
                            <h3>Paket Haji</h3>
                            <div class="price">
                                <span class="currency">Rp</span>35.000.000
                            </div>
                            <button class="btn-package">Lihat Detail</button>
                            <ul>
                                <li><i class="fa fa-check"></i> Tanggal: 25 Februari 2025</li>
                                <li><i class="fa fa-check"></i> Maskapai: Lion Air</li>
                                <li><i class="fa fa-check"></i> Durasi: 9 Hari</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card-wrapper">
                        <img src="public/template/images/kabah 3.jpg" alt="Paket Umrah Syaban" class="card-img-top" />
                        <div class="pricing-card">
                            <h3>Paket Haji Plus</h3>
                            <div class="price">
                                <span class="currency">Rp</span>30.000.000
                            </div>
                            <button class="btn-package">Lihat Detail</button>
                            <ul>
                                <li><i class="fa fa-check"></i> Tanggal: 25 Februari 2025</li>
                                <li><i class="fa fa-check"></i> Maskapai: Lion Air</li>
                                <li><i class="fa fa-check"></i> Durasi: 9 Hari</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Paket Umrah -->
            <div class="subetitle">
                <h2>PAKET UMRAH</h2>
            </div>
            <div class="row justify-content-center">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card-wrapper">
                        <img src="public/template/images/kabah 3.jpg" alt="Paket Umroh Reguler" class="card-img-top" />
                        <div class="pricing-card">
                            <h3>Paket Umroh Reguler</h3>
                            <div class="price">
                                <span class="currency">Rp</span>33.000.000
                            </div>
                            <button class="btn-package">Lihat Detail</button>
                            <ul>
                                <li><i class="fa fa-check"></i> Tanggal: 25 Februari 2025</li>
                                <li><i class="fa fa-check"></i> Maskapai: Lion Air</li>
                                <li><i class="fa fa-check"></i> Durasi: 9 Hari</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card-wrapper">
                        <img src="public/template/images/kabah 3.jpg" alt="Paket Umrah Ramadhan" class="card-img-top" />
                        <div class="pricing-card">
                            <h3>Paket Umrah Ramadhan</h3>
                            <div class="price">
                                <span class="currency">Rp</span>35.000.000
                            </div>
                            <button class="btn-package">Lihat Detail</button>
                            <ul>
                                <li><i class="fa fa-check"></i> Tanggal: 25 Februari 2025</li>
                                <li><i class="fa fa-check"></i> Maskapai: Lion Air</li>
                                <li><i class="fa fa-check"></i> Durasi: 9 Hari</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card-wrapper">
                        <img src="public/template/images/kabah 3.jpg" alt="Paket Umrah Syaban" class="card-img-top" />
                        <div class="pricing-card">
                            <h3>Paket Umrah Syaban</h3>
                            <div class="price">
                                <span class="currency">Rp</span>30.000.000
                            </div>
                            <button class="btn-package">Lihat Detail</button>
                            <ul>
                                <li><i class="fa fa-check"></i> Tanggal: 25 Februari 2025</li>
                                <li><i class="fa fa-check"></i> Maskapai: Lion Air</li>
                                <li><i class="fa fa-check"></i> Durasi: 9 Hari</li>
                            </ul>
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