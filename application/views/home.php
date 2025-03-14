<<<<<<< HEAD
<!-- Travel Section -->
<div class="container d-flex align-items-center justify-content-center" style="min-height: 85vh; padding-top: 100px; padding-bottom: 60px;">
    <div class="row align-items-center">
        <!-- Gambar -->
        <div class="col-md-6 d-flex justify-content-center">
            <img src="<?= base_url('public/template/images/mekkah.jpg'); ?>" alt="Mekkah" class="img-fluid rounded" style="max-width: 90%; height: auto;">
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Berkah Travel Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <!-- Bootstrap Icons (opsional) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        /* Reset dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 100vh;
            background: url('public/assets/images/homepage.jpg') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
            padding: 0 15px;
        }

        /* Overlay gelap agar teks terbaca jelas */
        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            margin: 0 auto;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .btn-hero {
            background-color: #ffc107;
            color: #000;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            border: none;
            transition: background-color 0.3s;
            margin-bottom: 30px;
        }

        .btn-hero:hover {
            background-color: #ff9800;
            color: #fff;
        }

        /* Search Box Container */
        .search-box {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: space-between;
            align-items: center;
            margin-top: 40px;
            color: #000;
            max-width: 600px;
            /* Membatasi lebar search box */
            margin: 40px auto 0;
            /* Terpusat dan beri jarak atas */
        }

        .search-box .form-group {
            flex: 1 1 200px;
            min-width: 180px;
        }

        .search-box label {
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 5px;
            display: block;
        }

        .search-box input,
        .search-box select {
            width: 100%;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .search-box button {
            background-color: #ffeb3b;
            color: #000;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 25px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            min-width: 120px;
        }

        .search-box button:hover {
            background-color: #ffc107;
        }

        /* Responsive: Untuk tampilan mobile */
        @media (max-width: 576px) {
            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .btn-hero {
                padding: 10px 20px;
            }

            .search-box {
                flex-direction: column;
                align-items: stretch;
                gap: 15px;
            }

            .search-box .form-group {
                width: 100%;
            }

            .search-box button {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">Hajj Umrah</h1>
            <p class="hero-subtitle">
                Deluxe Umrah Packages <br />
                Started from <span style="color: #ffc107; font-weight: 700;">USD 3235</span>
            </p>
            <button class="btn-hero">Get Started</button>

            <!-- Search Box -->
            <div class="search-box">
                <!-- Flight Date -->
                <div class="form-group">
                    <label for="flight-date">Flight Date</label>
                    <input type="date" id="flight-date" />
                </div>
                <!-- Packages -->
                <div class="form-group">
                    <label for="packages">Packages</label>
                    <select id="packages">
                        <option value="">Umrah</option>
                        <option value="">Hajj</option>
                        <option value="">Ramadan Umrah</option>
                    </select>
                </div>
                <!-- Price -->
                <div class="form-group">
                    <label for="price">Price</label>
                    <select id="price">
                        <option value="">$2000 - $3000</option>
                        <option value="">$3001 - $4000</option>
                        <option value="">$4001 - $5000</option>
                    </select>
                </div>
                <!-- Search Button -->
                <button>
                    <i class="bi bi-search"></i> Search
                </button>
            </div>
>>>>>>> 4492dc7 (homepage)
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>