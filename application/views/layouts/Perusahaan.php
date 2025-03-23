<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Service - Single Arch Image</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />

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
                    <img src="public/template/images/perusahaan.jpg" alt="Masjid dengan Bentuk Kubah" />
                </div>
            </div>
            <!-- Kolom kanan: teks -->
            <div class="col-md-6">
                <h1 class="orange-text">TENTANG KAMI</h1>
                <h2>Kami Menyediakan Layanan Terbaik</h2>
                <p>
                    Kami adalah perusahaan perjalanan terkemuka di Indonesia yang berspesialisasi dalam pemesanan penerbangan, tur di seluruh dunia, dan layanan Umrah. 
                </p>
                <ul>
                    <li>Tim Berpengalaman</li>
                    <li>Respon Cepat</li>
                    <li>Profesional</li>
                    <!-- <li>Garansi Cashback</li> -->
                </ul>
                <a href="#" class="btn-custom">Hubungi Kami</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
