<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/template/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/template/css/style.css'); ?>">
    <title>Document</title>
</head>

<body>
    <!-- Tentang Perusahaan -->
    <div class="container" style="padding-top: 10%;" id="perusahaan">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 text-center">
                <h1 class="title-home font-weight-bold mb-3">PT. Travel Haji dan Umroh</h1>
                <p class="lead mb-4">Layanan terpercaya untuk perjalanan ibadah Anda.</p>
            </div>
        </div>

        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-touch="false" data-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <img src="<?= base_url('public/template/images/kabah 2.jpg'); ?>" alt="kabah 2" class="img-fluid rounded" style="max-width: 50%; height: auto;">
                </div>
                <div class="carousel-item text-center">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item text-center">
                    <img src="..." class="d-block w-100" alt="...">
=======
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Service - Single Arch Image</title>

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
        }

        /* SECTION UTAMA */
        .service-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 15px;
        }

        /* Judul kecil ABOUT US */
        .orange-text {
            color: #ff7f00;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 14px;
        }

        .service-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .service-section p {
            font-size: 1rem;
            line-height: 1.6;
        }

        /* List bullet manual dengan checklist */
        .service-section ul {
            list-style: none;
            padding-left: 0;
        }

        .service-section ul li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 8px;
        }

        .service-section ul li::before {
            content: '✓';
            color: #28a745;
            position: absolute;
            left: 0;
            top: 0;
        }

        /* Tombol custom */
        .btn-custom {
            background-color: #F8ED8C;
            color: black;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            font-weight: 500;
        }

        /* Container gambar tunggal */
        .img-arch {
            width: 350px;
            /* Perbesar lebar */
            height: 450px;
            /* Perbesar tinggi */
            overflow: hidden;
        }

        /* Poligon untuk membuat arch (kubah di bagian atas) */
        .img-arch img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            clip-path: polygon(0% 100%,
                    0% 10%,
                    50% 0%,
                    100% 10%,
                    100% 100%);
        }

        /* Responsive: pada layar kecil, gambar full-width */
        @media (max-width: 576px) {
            .img-arch {
                width: 100%;
                height: auto;
            }

            .service-section h2 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>
    <div class="container service-section">
        <div class="row align-items-center">
            <!-- Kolom kiri: gambar tunggal dengan arch -->
            <div class="col-md-6 d-flex justify-content-center mb-4 mb-md-0">
                <div class="img-arch">
                    <img src="public/assets/images/perusahaan.jpg" alt="Arch Shaped Mosque" />
>>>>>>> 4492dc7 (homepage)
                </div>
            </div>
            <!-- Kolom kanan: teks -->
            <div class="col-md-6">
                <h1 class="orange-text">ABOUT US</h1>
                <h2>We Provide The Best Service</h2>
                <p>
                    We are a leading travel company in Canada specializing in flight
                    bookings, worldwide tours, and Umrah services. <strong>Berkah Travel</strong> is
                    licensed by Consumer Protection and IATA.
                </p>
                <ul>
                    <li>Experience Team</li>
                    <li>Fast Response</li>
                    <li>Professional</li>
                    <li>Guarantee Cash Back</li>
                </ul>
                <a href="#" class="btn-custom">Contact Us</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>