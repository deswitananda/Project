<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/template/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/template/css/style.css'); ?>">
    <!-- Untuk Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
=======
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
>>>>>>> 4492dc7 (homepage)

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

        /* Pricing Cards */
        .pricing-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            transition: all 0.3s ease;
            background-color: #fff;
            text-align: center;
            position: relative;
            margin-bottom: 30px;
        }

        .pricing-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        /* Gambar di atas card */
        .pricing-card img.card-img {
            width: 100%;
            border-radius: 10px 10px 0 0;
            margin-bottom: 20px;
            height: 180px;
            object-fit: cover;
        }

        .pricing-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .pricing-card .price {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
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
            color: #6c757d;
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
            background-color: #F8ED8C;
            border: none;
            color: #000;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }

        .btn-package:hover {
            background-color: #F8ED8C;
            color: #fff;
        }

        .highlight {
            background-color: #F8ED8C;
        }

        .highlight .btn-package {
            background-color: #000;
            color: #fff;
        }

        .highlight .btn-package:hover {
            background-color: #333;
        }

        .text-end a{
            text-decoration: none;
            font-size: 0.9rem;
            color: #6c757d;
            transition: color 0.2s;
        }

        .text-end a:hover {
            color: #000;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .pricing-card {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container">
            <h2>Choose your Package</h2>
            <p class="lead">
                Embark on a Spiritual Journey: Your Trusted Hajj Partner.
                Comprehensive Hajj Packages Tailored to Your Needs.
                Premium accommodation, individual transportation.
            </p>
            <!-- Tautan "See More" ditempatkan di sisi kanan -->
            <div class="text-end mb-4">
                <a href="#">See More &raquo;</a>
            </div>

<<<<<<< HEAD
            </div>
        </div>


        <!-- Paket Cards -->
        <div class="row mt-4">
            <div class="col-md-6 col-lg-3">
                <div class="card card-umrah">
                    <img src="<?= base_url('public/template/images/mekkah.jpg'); ?>"
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
=======
            <div class="row justify-content-center">
                <!-- Card 1: Premium Hajj -->
                <div class="col-md-4 mb-4">
                    <div class="pricing-card">
                        <img src="public/assets/images/kabah 3.jpg" alt="Premium Hajj" class="card-img" />
                        <h3>Premium Hajj</h3>
                        <div class="price">
                            <span class="currency">$</span>450
>>>>>>> 4492dc7 (homepage)
                        </div>
                        <button class="btn-package mb-3">Get Started Now</button>
                        <ul>
                            <li><i class="fa fa-check"></i> Feb 10 - Feb 15</li>
                            <li><i class="fa fa-check"></i> Document Guide</li>
                            <li><i class="fa fa-check"></i> 5 Star Hotel</li>
                            <li><i class="fa fa-check"></i> Local Meals</li>
                            <li><i class="fa fa-check"></i> Visa Included</li>
                        </ul>
                    </div>
                </div>

<<<<<<< HEAD

            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img src="<?= base_url('public/template/images/mekkah.jpg'); ?>" class="card-img-top img-fluid rounded" alt="Paket Umroh">
                    <div class="card-body">
                        <h5 class="name"><a href="#">Paket Umroh</a></h5>
                        <p><i class="ti ti-calendar-minus me-2"></i> 25 February 2025</p>
                        <p><i class="ti ti-plane-departure me-2"></i> Lion Air</p>
                        <p class="text">Mulai dari: <span class="text-danger">Rp 33.000.000</span></p>
                        <a href="#" class="btn btn-primary w-100 mt-3">Detail Produk</a>
=======
                <!-- Card 2: Family Umrah (Highlight) -->
                <div class="col-md-4 mb-4">
                    <div class="pricing-card highlight">
                        <img src="public/assets/images/kabah 3.jpg" alt="Family Umrah" class="card-img" />
                        <h3>Family Umrah</h3>
                        <div class="price">
                            <span class="currency">$</span>550
                        </div>
                        <button class="btn-package mb-3">Get Started Now</button>
                        <ul>
                            <li><i class="fa fa-check"></i> Feb 10 - Feb 15</li>
                            <li><i class="fa fa-check"></i> Document Guide</li>
                            <li><i class="fa fa-check"></i> 5 Star Hotel</li>
                            <li><i class="fa fa-check"></i> Local Meals</li>
                            <li><i class="fa fa-check"></i> Visa Included</li>
                        </ul>
>>>>>>> 4492dc7 (homepage)
                    </div>
                </div>

<<<<<<< HEAD
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img src="<?= base_url('public/template/images/mekkah.jpg'); ?>" class="card-img-top img-fluid rounded" alt="Paket Umroh">
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
                    <img src="<?= base_url('public/template/images/mekkah.jpg'); ?>" class="card-img-top img-fluid rounded" alt="Paket Umroh">
                    <div class="card-body">
                        <h5 class="name"><a href="#">Paket Umroh</a></h5>
                        <p><i class="ti ti-calendar-minus me-2"></i> 04 April 2025</p>
                        <p><i class="ti ti-plane-departure me-2"></i> Lion Air</p>
                        <p class="text">Mulai dari: <span class="text-danger">Rp 35.000.000</span></p>
                        <a href="#" class="btn btn-primary w-100 mt-3">Detail Produk</a>
=======
                <!-- Card 3: Ramadan Umrah -->
                <div class="col-md-4 mb-4">
                    <div class="pricing-card">
                        <img src="public/assets/images/kabah 3.jpg" alt="Ramadan Umrah" class="card-img" />
                        <h3>Ramadan Umrah</h3>
                        <div class="price">
                            <span class="currency">$</span>260
                        </div>
                        <button class="btn-package mb-3">Get Started Now</button>
                        <ul>
                            <li><i class="fa fa-check"></i> Feb 10 - Feb 15</li>
                            <li><i class="fa fa-check"></i> Document Guide</li>
                            <li><i class="fa fa-check"></i> 4 Star Hotel</li>
                            <li><i class="fa fa-check"></i> Local Meals</li>
                            <li><i class="fa fa-check"></i> Visa Included</li>
                        </ul>
>>>>>>> 4492dc7 (homepage)
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>