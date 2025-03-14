<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Footer Example</title>
    <!-- Bootstrap CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <!-- Font Awesome (untuk ikon sosial media) -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        /* FOOTER */
        footer {
            background-color: #2d2d2d;
            /* Warna latar footer */
            color: #fff;
            padding: 40px 0 20px;
        }

        .footer-logo {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .footer-description {
            color: #bfbfbf;
            /* Warna teks abu-abu */
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .footer-col h5 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .footer-col ul {
            list-style: none;
            padding-left: 0;
        }

        .footer-col ul li {
            margin-bottom: 8px;
        }

        .footer-col ul li a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-col ul li a:hover {
            color: #fff;
        }

        .footer-social a {
            display: inline-block;
            margin-right: 10px;
            color: #ccc;
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        .footer-social a:hover {
            color: #fff;
        }

        .footer-contact li {
            margin-bottom: 8px;
            color: #ccc;
        }

        /* Gallery thumbnail */
        .footer-gallery img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 6px;
            margin-right: 10px;
            margin-bottom: 10px;
            transition: transform 0.3s;
        }

        .footer-gallery img:hover {
            transform: scale(1.05);
        }

        /* Footer Bottom */
        .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 15px;
            margin-top: 30px;
            font-size: 0.9rem;
            color: #999;
        }

        /* Payment methods icon */
        .payment-icons img {
            width: 32px;
            margin-right: 8px;
        }
    </style>
</head>

<body>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- Col 1: Brand & Description -->
                <div class="col-md-3 mb-4 footer-col">
                    <div class="footer-logo">Berkah Travel</div>
                    <p class="footer-description">
                        Pioneering Advanced Medical Solutions to Elevate Healthcare Service
                        and Improve Patient Outcomes.
                    </p>
                    <div class="footer-social mt-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Col 2: What We Offer -->
                <div class="col-md-3 mb-4 footer-col">
                    <h5>What We Offer</h5>
                    <ul>
                        <li><a href="#">Hajj offer</a></li>
                        <li><a href="#">Umrah offer</a></li>
                        <li><a href="#">Zamzam Offer</a></li>
                        <li><a href="#">Madinah to Makkah</a></li>
                    </ul>
                </div>

                <!-- Col 3: Contact Us -->
                <div class="col-md-3 mb-4 footer-col">
                    <h5>Contact Us</h5>
                    <ul class="footer-contact">
                        <li>Indonesia, Medan</li>
                        <li>Phone: +831 96898266</li>
                        <li>Email: info@berkahtravel.com</li>
                    </ul>
                </div>

                <!-- Col 4: Gallery -->
                <div class="col-md-3 mb-4 footer-col">
                    <h5>Gallery</h5>
                    <div class="footer-gallery d-flex flex-wrap">
                        <img src="public/assets/images/kabah 1.jpg" alt="gallery1" />
                        <img src="public/assets/images/kabah 2.jpg" alt="gallery2" />
                        <img src="public/assets/images/kabah 3.jpg" alt="gallery3" />
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="row footer-bottom align-items-center">
                <div class="col-md-6 mb-2 mb-md-0">
                    <p class="mb-0">&copy; 2023 Berkah Travel. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end payment-icons">
                    <span>We accept:</span>
                    <img src="public/assets/images/visa.jpg" alt="Visa" />
                    <img src="public/assets/images/mastercard.jpg" alt="Mastercard" />
                    <img src="public/assets/images/paypal.jpg" alt="PayPal" />
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>