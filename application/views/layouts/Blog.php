<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('template/assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/assets/css/style.css'); ?>">
    <title>Paket Umroh</title>
=======
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Haramain News</title>
    <!-- Bootstrap CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <style>
        /* RESET DASAR */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        /* SECTION BLOG */
        .blog-section {
            padding: 60px 15px;
        }

        .blog-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .blog-header h2 {
            font-weight: 700;
        }

        .blog-header a {
            text-decoration: none;
            font-size: 0.9rem;
            color: #6c757d;
            transition: color 0.2s;
        }

        .blog-header a:hover {
            color: #000;
        }

        /* Card styling */
        .blog-card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .blog-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .blog-card img {
            border-radius: 8px 8px 0 0;
            height: 180px;
            object-fit: cover;
        }

        .blog-card-title {
            font-size: 1rem;
            font-weight: 600;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        /* Responsiveness */
        @media (max-width: 576px) {
            .blog-card img {
                height: auto;
            }
        }
    </style>
>>>>>>> 4492dc7 (homepage)
</head>

<body>

    <!-- Blog Section -->
    <div class="container blog-section">
        <!-- Header: Title + See More -->
        <div class="blog-header">
            <h2>Blog</h2>
            <a href="#">See More &raquo;</a>
        </div>

<<<<<<< HEAD
        </div>
    </div>


    <!-- Paket Cards -->
    <div class="row mt-4">
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <img src="<?= base_url('template/assets/images/mekkah.jpg'); ?>" class="card-img-top img-fluid rounded" alt="Paket Umroh">
                <div class="card-body">
                    <h5 class="name"><a href="#">Paket Umroh</a></h5>
                    <p><i class="ti ti-calendar-minus me-2"></i> 01 March 2025</p>
                    <p><i class="ti ti-plane-departure me-2"></i> Lion Air</p>
                    <p class="text">Mulai dari: <span class="text-danger">Rp 31.500.000</span></p>
                    <a href="#" class="btn btn-primary w-100 mt-3">Detail Produk</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card">
                <img src="<?= base_url('template/assets/images/mekkah.jpg'); ?>" class="card-img-top img-fluid rounded" alt="Paket Umroh">
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
                <img src="<?= base_url('template/assets/images/mekkah.jpg'); ?>" class="card-img-top img-fluid rounded" alt="Paket Umroh">
                <div class="card-body">
                    <h5 class="name"><a href="#">Paket Umroh</a></h5>
                    <p><i class="ti ti-calendar-minus me-2"></i> 19 February 2025</p>
                    <p><i class="ti ti-plane-departure me-2"></i> Lion Air</p>
                    <p class="text">Mulai dari: <span class="text-danger">Rp 29.000.000</span></p>
                    <a href="#" class="btn btn-primary w-100 mt-3">Detail Produk</a>
=======
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card blog-card">
                    <img
                        src="public/assets/images/kabah 1.jpg"
                        class="card-img-top"
                        alt="Essential Packing Tips" />
                    <div class="card-body text-center">
                        <h5 class="blog-card-title">
                            Essential Packing Tips for Your Hajj
                        </h5>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card blog-card">
                    <img
                        src="public/assets/images/kabah 2.jpg"
                        class="card-img-top"
                        alt="Sacred Journey" />
                    <div class="card-body text-center">
                        <h5 class="blog-card-title">
                            Personal Stories from the Sacred Journey
                        </h5>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card blog-card">
                    <img
                        src="public/assets/images/kabah 3.jpg"
                        class="card-img-top"
                        alt="Ultimate Guide to Performing Umrah" />
                    <div class="card-body text-center">
                        <h5 class="blog-card-title">
                            The Ultimate Guide to Performing Umrah
                        </h5>
                    </div>
>>>>>>> 4492dc7 (homepage)
                </div>
            </div>

<<<<<<< HEAD
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <img src="<?= base_url('template/assets/images/mekkah.jpg'); ?>" class="card-img-top img-fluid rounded" alt="Paket Umroh">
                <div class="card-body">
                    <h5 class="name"><a href="#">Paket Umroh</a></h5>
                    <p><i class="ti ti-calendar-minus me-2"></i> 04 April 2025</p>
                    <p><i class="ti ti-plane-departure me-2"></i> Lion Air</p>
                    <p class="text">Mulai dari: <span class="text-danger">Rp 35.000.000</span></p>
                    <a href="#" class="btn btn-primary w-100 mt-3">Detail Produk</a>
=======
            <!-- Card 4 -->
            <div class="col-md-4">
                <div class="card blog-card">
                    <img
                        src="public/assets/images/kabah 3.jpg"
                        class="card-img-top"
                        alt="Ultimate Guide to Performing Umrah" />
                    <div class="card-body text-center">
                        <h5 class="blog-card-title">
                            The Ultimate Guide to Performing Umrah
                        </h5>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-4">
                <div class="card blog-card">
                    <img
                        src="public/assets/images/kabah 3.jpg"
                        class="card-img-top"
                        alt="Ultimate Guide to Performing Umrah" />
                    <div class="card-body text-center">
                        <h5 class="blog-card-title">
                            The Ultimate Guide to Performing Umrah
                        </h5>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-4">
                <div class="card blog-card">
                    <img
                        src="public/assets/images/kabah 3.jpg"
                        class="card-img-top"
                        alt="Ultimate Guide to Performing Umrah" />
                    <div class="card-body text-center">
                        <h5 class="blog-card-title">
                            The Ultimate Guide to Performing Umrah
                        </h5>
                    </div>
>>>>>>> 4492dc7 (homepage)
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>