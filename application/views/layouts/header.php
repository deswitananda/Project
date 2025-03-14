<!DOCTYPE html>
<html lang="id">
<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Umroh & Haji</title>
    
    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="<?= base_url('public/template/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/template/css/style.css'); ?>">
=======
>>>>>>> 4492dc7 (homepage)

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Berkah Travel - Navbar</title>

    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />

    <!-- Font Awesome (untuk ikon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f0f0;
        }

        /* Navbar Styling */
        .navbar {
            background: linear-gradient(90deg, #000, #1c1c1c);
            padding: 10px 0;
        }

        .navbar-brand img {
            height: 45px;
        }

        .navbar h1 {
            font-size: 24px;
            font-weight: 700;
            color: #F8ED8C;
            margin-left: 10px;
            text-shadow: 2px 2px 4px rgba(255, 193, 7, 0.5);
        }

        .navbar-nav .nav-link {
            color: #ddd;
            margin: 0 12px;
            font-weight: 500;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #F8ED8C;
            text-decoration: underline;
        }

        /* Ikon di kanan */
        .navbar-icons a {
            color: #ddd;
            margin-left: 15px;
            font-size: 1.2rem;
            transition: color 0.3s;
            text-decoration: none;
        }

        .navbar-icons a:hover {
            color: #F8ED8C;
        }

        /* Dropdown User */
        .dropdown-menu {
            background: #fff;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .dropdown-menu a {
            color: #000;
            font-weight: 500;
            padding: 8px 15px;
            display: block;
            transition: background 0.3s;
            width: 80%;
        }

        .dropdown-menu a:hover {
            background: #F8ED8C;
            color: #000;
            width: 80%;
        }

        .logo-circle {
            width: 40px;
            /* Sesuaikan ukuran lingkaran */
            height: 40px;
            background-color: #F8ED8C;
            /* Warna background */
            border-radius: 50%;
            /* Membuatnya bulat */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-circle img {
            width: 40px;
            /* Sesuaikan ukuran logo */
            height: auto;
        }
    </style>
</head>

<body>

<<<<<<< HEAD
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container d-flex justify-content-between">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="<?= base_url(); ?>">
            <img src="<?= base_url('public/template/images/logo.png'); ?>" alt="Travel Umroh & Haji" class="logo-navbar">
        </a>
=======
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex align-items-center">
            <!-- Brand (Logo) -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <!-- Bungkus logo dalam div -->
                <div class="logo-circle">
                    <img src="public/assets/images/logo.png" alt="Berkah Travel Logo">
                </div>
>>>>>>> 4492dc7 (homepage)

                <h1>Berkah Travel</h1>
            </a>

<<<<<<< HEAD
        <!-- Tombol Masuk & Daftar -->
        <div class="d-flex align-items-center">
            <!-- <a href="<?= base_url('login'); ?>" class="btn btn-outline-primary btn-sm mx-2">Masuk</a> -->
            <a href="<?= base_url('register'); ?>" class="btn btn-primary btn-sm">Login</a>
=======
            <!-- Toggler (mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Paket Haji & Umroh</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Paket Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>

                <!-- Ikon di kanan -->
                <div class="navbar-icons d-flex align-items-center">
                    <a href="#"><i class="fas fa-search"></i></a>
                    <a href="#"><i class="far fa-heart"></i></a>

                    <!-- Dropdown User -->
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" id="userDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fas fa-user-circle"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#">Login</a></li>
                            <li><a class="dropdown-item" href="#">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
>>>>>>> 4492dc7 (homepage)
        </div>
    </nav>

    <!-- Bootstrap JS (Penting agar dropdown berfungsi) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script tambahan untuk debugging -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var dropdownToggle = document.getElementById("userDropdown");

            dropdownToggle.addEventListener("click", function(event) {
                event.preventDefault(); // Mencegah redirect jika ada href="#"
                var dropdownMenu = this.nextElementSibling;

                if (dropdownMenu.classList.contains("show")) {
                    dropdownMenu.classList.remove("show");
                } else {
                    // Tutup dropdown lain yang terbuka
                    document.querySelectorAll(".dropdown-menu").forEach(menu => menu.classList.remove("show"));
                    dropdownMenu.classList.add("show");
                }
            });

            // Tutup dropdown saat klik di luar
            document.addEventListener("click", function(event) {
                if (!dropdownToggle.contains(event.target)) {
                    document.querySelectorAll(".dropdown-menu").forEach(menu => menu.classList.remove("show"));
                }
            });
        });
    </script>

</body>

</html>