<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MCE</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Commande MCE</h1>

       <!-- Start Form -->
    <form action="{{ route('orders.store') }}" method="POST" class="row g-3 mt-4">
        @csrf

        <!-- Name Field -->
        <div class="col-md-6">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter your nom" required>
        </div>

        <!-- Prenom Field -->
        <div class="col-md-6">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Enter your prenom" required>
        </div>

        <!-- lieu_livraison Field -->
        <div class="col-md-6">
            <label for="lieu_livraison" class="form-label">Lieu Livraison</label>
            <input type="text" class="form-control" id="lieu_livraison" name="lieu_livraison"
                placeholder="Enter your lieu livraison" required>
        </div>

        <!-- Telephone Field -->
        <div class="col-md-6">
            <label for="telephone" class="form-label">Tél</label>
            <input type="number" class="form-control" id="telephone" name="telephone" placeholder="Enter your telephone"
                required>
        </div>

        <!-- Email Field -->
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <!-- Commande Field -->
        <div class="col-12">
            <label for="commande" class="form-label">Commande</label>
            <textarea class="form-control" id="commande" name="commande" rows="4" placeholder="Enter your commande"
                required></textarea>
        </div>

        <!-- Submit Button -->
        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100">Commander</button>
        </div>
    </form>
        <!-- End Form -->
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
