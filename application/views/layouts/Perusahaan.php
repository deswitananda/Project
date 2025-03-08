<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/style.css'); ?>">
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
                    <img src="<?= base_url('public/assets/images/kabah 2.jpg'); ?>" alt="kabah 2" class="img-fluid rounded" style="max-width: 50%; height: auto;">
                </div>
                <div class="carousel-item text-center">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item text-center">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControlsNoTouching" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControlsNoTouching" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>

</body>

</html>