<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MCE</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
        }

       .hero {
    background-image: url('/images/post-2.jpg'); /* Replace with the correct path */
    background-size: cover; /* Ensures the image covers the whole section */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat; /* Prevents the image from repeating */
    color: white; /* Adjust text color for better contrast */
    padding: 50px 0; /* Adds some padding for spacing */
    }

    .hero h1 {
    font-size: 3rem; /* Adjust font size as needed */
    margin-bottom: 20px; /* Space between title and text */
    }

    .hero p {
    font-size: 1.25rem; /* Adjust font size as needed */
    margin-bottom: 20px; /* Space between text and button */
    }

    .hero .btn {
    font-size: 1rem; /* Adjust font size as needed */
    padding: 10px 20px; /* Adjust padding for button */
    }

        .product-card {
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
        }

        footer a {
            color: #ffc107;
        }

        .why-choose-section{
            margin-top: 5%
        }

        .why-choose-section .feature .icon img {
        width: 40px;
        height: auto;
        }
        .why-choose-section h2.section-title {
        font-weight: 700;
        font-size: 16px;
        margin-bottom: 20px;
        }
        .why-choose-section .feature h3 {
        font-weight: 600;
        margin-top: 8px;
        }

        .why-choose-section .feature p {
       font-size: 12px;
        }

        .we-help-section .imgs-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
        }
        .we-help-section .grid img {
        width: 100%;
        height: auto;
        object-fit: cover;
        }
        .we-help-section h2.section-title {
        font-weight: 700;
        font-size: 28px;
        margin-bottom: 20px;
        }
        .we-help-section .custom-list li {
        margin-bottom: 10px;
        font-weight: 600;
        }

        .popular-product .product-item-sm {
        border: 1px solid #ddd;
        padding: 15px;
        border-radius: 10px;
        transition: transform 0.3s;
        }
        .popular-product .product-item-sm:hover {
        transform: scale(1.05);
        }
        .popular-product .thumbnail img {
        width: 100px;
        height: auto;
        margin-right: 15px;
        }
        .popular-product h3 {
        font-size: 18px;
        font-weight: 700;
        }
        .popular-product p {
        font-size: 14px;
        margin-bottom: 10px;
        }
        .product-card img {
        height: 100%;
        width: 100%;
        object-fit: cover; /* Ensures the image covers the entire card without distortion */
        }
        .imgs-grid .grid img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensures the image fills the container while maintaining aspect ratio */
        display: block; /* Removes any inline spacing between images */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mouse Confort Expert</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link">Home</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>
                    {{-- @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                    @endif --}}
                    @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Mousse Confort Experts</h1>
            <p>Création et vente des découpes de mousse, de couture et des matlas.</p>
            <a href={{ route('orders.create') }} class="btn btn-primary">Commander Nos Produits</a>
        </div>
    </section>

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section" id="P2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">Pourquoi Choisir MOUSSE CONFORT EXPERTS?</h2>
                    <p>Découvrez l’alliance parfaite entre qualité, technologie et confort pour des nuits inégalées.</p>
                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('images/truck.svg') }}" alt="Image" class="img-fluid">
                                </div>
                                <h3>Qualité Supérieure</h3>
                                <p>Nos mousses sont fabriquées avec des matériaux de première qualité, garantissant
                                    durabilité, confort et performance exceptionnelle pour tous vos besoins.</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('images/bag.svg') }}" alt="Image" class="img-fluid">
                                </div>
                                <h3>Personnalisation sur Mesure</h3>
                                <p>Chez MOUSSE CONFORT Experts, nous créons des produits sur mesure, adaptés à vos
                                    spécifications exactes, que ce soit pour des sièges, matelas ou projets industriels.</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('images/support.svg') }}" alt="Image" class="img-fluid">
                                </div>
                                <h3>Expertise et Expérience</h3>
                                <p>Forts de notre longue expérience dans le domaine, nous maîtrisons chaque étape de la
                                    fabrication pour vous offrir des produits qui répondent parfaitement à vos attentes.</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('images/return.svg') }}" alt="Image" class="img-fluid">
                                </div>
                                <h3>Engagement Environnemental</h3>
                                <p>Nous nous engageons à utiliser des procédés respectueux de l'environnement et à réduire
                                    notre empreinte carbone en choisissant des matériaux écologiques et durables.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="{{ asset('images/DJ10.jpg') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

   <!-- Start We Help Section -->
<div class="we-help-section" id="P3">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="imgs-grid">
                    <div class="grid grid-1"><img src="{{ asset('images/DJ09.jpg') }}" alt="Untree.co"
                            class="img-fluid"></div>
                    <div class="grid grid-2"><img src="{{ asset('images/DJ08.jpg') }}" alt="Untree.co"
                            class="img-fluid"></div>
                    <div class="grid grid-3"><img src="{{ asset('images/DJ02.jpg') }}" alt="Untree.co"
                            class="img-fluid"></div>
                </div>
            </div>
            <div class="col-lg-5 ps-lg-5">
                <h2 class="section-title mb-4">Nous vous aidons à créer un design d'intérieur moderne</h2>
                <p>Chez MOUSSE CONFORT EXPERTS, nous allions les dernières tendances en matière de design avec des
                    éléments classiques et intemporels. Nos créations sont pensées pour rester élégantes et pertinentes,
                    assurant que votre intérieur conserve son charme et sa modernité au fil des années.</p>

                <ul class="list-unstyled custom-list my-4">
                    <li>Conception Personnalisée</li>
                    <li>Matériaux Innovants</li>
                    <li>Solutions Flexibles</li>
                    <li>Tendance et Intemporel</li>
                </ul>
                <p><a href="#" class="btn btn-primary">Explore</a></p>
            </div>
        </div>
    </div>
</div>
<!-- End We Help Section -->
<br/>
<!-- Start Popular Product -->
<div class="popular-product" id="P4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="product-item-sm d-flex">
                    <div class="thumbnail">
                        <img src="{{ asset('images/mousse-acoustique.png') }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="pt-3">
                        <h3>Mousses acoustiques</h3>
                        <p>Utilisés pour améliorer le confort et le soutien du sommeil, ces produits sont souvent faits
                            de mousse à mémoire de forme ou de mousse de polyuréthane.</p>
                        <p><a href="#">Lire plus</a></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="product-item-sm d-flex">
                    <div class="thumbnail">
                        <img src="{{ asset('images/Mousses-protection.png') }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="pt-3">
                        <h3>Mousses de protection</h3>
                        <p>Employées pour l'emballage de produits fragiles, les protections sportives, ou même les
                            dispositifs médicaux.</p>
                        <p><a href="#">Lire plus</a></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="product-item-sm d-flex">
                    <div class="thumbnail">
                        <img src="{{ asset('images/mousse-issolation.png') }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="pt-3">
                        <h3>Mousses isolantes</h3>
                        <p>Utilisées dans la construction pour l'isolation thermique et phonique des bâtiments.</p>
                        <p><a href="#">Lire plus</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Popular Product -->

    <!-- Products Section -->
    <section id="products" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Nos produits</h2>
            <div class="row">
                <!-- Example Product Card -->
                <div class="col-md-4">
                    <div class="card product-card h-100">
                        <img src="/images/DJ05.jpg" class="card-img-top" alt="Product 1">
                        {{-- <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">This is a brief description of Product 1.</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card product-card h-100">
                        <img src="/images/DJ10.jpg" class="card-img-top" alt="Product 2">
                        {{-- <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">This is a brief description of Product 2.</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card product-card h-100">
                        <img src="/images/img-grid-1.jpg" class="card-img-top" alt="Product 3">
                        {{-- <div class="card-body">
                            <h5 class="card-title">Product 3</h5>
                            <p class="card-text">This is a brief description of Product 3.</p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Footer -->
    <footer>
        <div class="container">
            <!-- Start Map Section -->
            <div class="row mb-4">
                <div class="col-12">
                    <!-- Google Maps Embed -->
                    <div class="map-container" style="height: 300px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093705!2d144.95373531550436!3d-37.81627974202108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43df4876fb%3A0x2d51626f27a6f3e7!2sMelbourne!5e0!3m2!1sen!2sau!4v1631940400980!5m2!1sen!2sau"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
            <!-- End Map Section -->

            <!-- Footer Content -->
            <div class="text-center">
                <p>&copy; 2024 Mousse Confort Experts. All rights reserved.</p>
                <p>
                    <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
