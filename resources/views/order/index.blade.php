<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MCE</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('/images/why-choose-us-img.jpg');
            /* Replace with your background image URL */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-color: #f8f9fa;
            /* Fallback color */
        }

        .form-container {
            background-color: #ffffff;
            border-radius: .5rem;
            box-shadow: 0 0 .5rem rgba(0, 0, 0, .1);
            padding: 2rem;
            margin-top: 2rem;
            /* Added top margin for spacing */
        }

        .form-label {
            font-weight: 600;
        }

        .btn-custom {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .btn-back {
            background-color: #2373bd;
            border-color: #4297be;
        }

        .btn-back:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <!-- Back to Home Button -->
        <div class="d-flex justify-content-start mb-4">
            <a href="/" class="btn btn-back">Retour</a>
        </div>

        <!-- Form Container -->
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="form-container">
                    <h1 class="text-center mb-4">Commande MCE</h1>

                    <!-- Start Form -->
                    <form action="{{ route('orders.store') }}" method="POST" class="row g-3">
                        @csrf

                        <!-- Name Field -->
                        <div class="col-md-6">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter your nom"
                                required>
                        </div>

                        <!-- Prenom Field -->
                        <div class="col-md-6">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom"
                                placeholder="Enter your prenom" required>
                        </div>

                        <!-- lieu_livraison Field -->
                        <div class="col-md-12">
                            <label for="lieu_livraison" class="form-label">Lieu Livraison</label>
                            <input type="text" class="form-control" id="lieu_livraison" name="lieu_livraison"
                                placeholder="Enter your lieu livraison" required>
                        </div>

                        <!-- Telephone Field -->
                        <div class="col-md-6">
                            <label for="telephone" class="form-label">Tél</label>
                            <input type="tel" class="form-control" id="telephone" name="telephone"
                                placeholder="Enter your telephone" required>
                        </div>

                        <!-- Email Field -->
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your email" required>
                        </div>

                        <!-- Commande Field -->
                        <div class="col-12">
                            <label for="commande" class="form-label">Commande</label>
                            <textarea class="form-control" id="commande" name="commande" rows="4"
                                placeholder="Enter your commande" required></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-custom w-100">Commander</button>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
