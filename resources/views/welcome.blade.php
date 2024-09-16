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
            <a href={{ route('orders.create') }} class="btn btn-primary">Commander Notre Produits</a>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Nos produits</h2>
            <div class="row">
                <!-- Example Product Card -->
                <div class="col-md-4">
                    <div class="card product-card h-100">
                        <img src="/images/DJ05.jpg" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">This is a brief description of Product 1.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card product-card h-100">
                        <img src="/images/DJ10.jpg" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">This is a brief description of Product 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card product-card h-100">
                        <img src="/images/img-grid-1.jpg" class="card-img-top" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">Product 3</h5>
                            <p class="card-text">This is a brief description of Product 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>&copy; 2024 Mousse Confort Experts. All rights reserved.</p>
            <p>
                <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
