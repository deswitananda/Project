<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Umroh & Haji</title>
    
    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/style.css'); ?>">

</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container d-flex justify-content-between">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="<?= base_url(); ?>">
            <img src="<?= base_url('public/assets/images/logo.png'); ?>" alt="Travel Umroh & Haji" class="logo-navbar">
        </a>

        <!-- <a class="navbar-brand font-weight-bold text-primary" href="<?= base_url(); ?>">Travel Umroh & Haji</a> -->
        
        <!-- Button Toggler -->
        <button class="navbar-toggler" type="button" id="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Menu Tengah -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-3"><a class="nav-link" href="<?= base_url('home'); ?>">Beranda</a></li>
                <li class="nav-item mx-3"><a class="nav-link" href="<?= base_url('paket_haji_umroh'); ?>">Paket Haji dan Umroh</a></li>
                <li class="nav-item mx-3"><a class="nav-link" href="<?= base_url('paket_wisata'); ?>">Paket Wisata</a></li>
                <li class="nav-item mx-3"><a class="nav-link" href="<?= base_url('blog'); ?>">Blog</a></li>
                <li class="nav-item mx-3"><a class="nav-link" href="<?= base_url('about'); ?>">Tentang Kami</a></li>
            </ul>
        </div>

        <!-- Tombol Masuk & Daftar -->
        <div class="d-flex align-items-center">
            <!-- <a href="<?= base_url('login'); ?>" class="btn btn-outline-primary btn-sm mx-2">Masuk</a> -->
            <a href="<?= base_url('register'); ?>" class="btn btn-primary btn-sm">Login</a>
        </div>
    </div>
</nav>
