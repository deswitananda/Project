<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Berkah Travel Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        /* Reset dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 100vh;
            background: url('public/template/images/homepage.jpg') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
            padding: 0 15px;
        }

        /* Overlay agar teks terbaca jelas */
        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
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
            font-weight: 600;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .btn-hero {
            background-color: #ffc107;
            color: #000;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            border: none;
            transition: background-color 0.3s, transform 0.3s;
            margin-bottom: 30px;
        }

        .btn-hero:hover {
            background-color: #ff9800;
            transform: translateY(-2px);
        }

        /* Search Box Container */
        .search-box {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: space-between;
            align-items: center;
            max-width: 600px;
            margin: 40px auto 0;
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
            color: #333;
        }

        .search-box input,
        .search-box select {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #ddd;
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

        /* Responsive untuk tampilan mobile */
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
            }

            .search-box .form-group,
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
            <h1 class="hero-title">BERKAH TRAVEL</h1>
            <p class="hero-subtitle">
                Selamat datang di Berkah Travel – mitra perjalanan ibadah dan wisata terpercaya! Kami hadir untuk membantu Anda mewujudkan perjalanan spiritual dan liburan yang berkesan.
            </p>
            <button class="btn-hero">Get Started</button>

            <!-- Search Box -->
            <div class="search-box">
                <!-- Flight Date -->
                <div class="form-group">
                    <label for="flight-date">Jadwal Penerbangan</label>
                    <input type="date" id="flight-date" />
                </div>
                <!-- Packages -->
                <div class="form-group">
                    <label for="packages">Kategori</label>
                    <select id="packages">
                        <option value="">Umrah</option>
                        <option value="">Hajj</option>
                        <option value="">Ramadan Umrah</option>
                    </select>
                </div>
                <!-- Price -->
                <div class="form-group">
                    <label for="price">Harga</label>
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
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>