@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: url('/images/why-choose-us-img.jpg');
        /* Replace with your image */
        background-size: cover;
        background-attachment: fixed;
    }

    .card {
        background-color: rgba(255, 255, 255, 0.9);
        /* Make card slightly transparent */
        border-radius: 15px;
    }

    .table {
        border-radius: 10px;
        overflow: hidden;
    }

    .action-buttons {
        display: flex;
        gap: 10px;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">{{ __('Dashboard') }}</h3>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <!-- Orders List -->
                    <h4 class="text-center mb-4">Les Demandes accepté</h4>

                    <div class="table-responsive mt-3">
                        <table class="table table-bordered table-striped table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Name</th>
                                    <th>Order</th>
                                    <th>Delivery Location</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->prenom }} {{ $order->nom }}</td>
                                    <td>{{ $order->commande }}</td>
                                    <td>{{ $order->lieu_livraison }}</td>
                                    <td>{{ $order->telephone }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>
                                        <span class="
                                            @if($order->status === 'traité') text-success
                                            @elseif($order->status === 'pending') text-warning
                                            @elseif($order->status === 'canceled') text-danger
                                            @endif">
                                            {{ ucfirst($order->status) }}
                                        </span>
                                    </td>
                                    <td>


                                        <div class="action-buttons">
                                            <form action="{{ route('orders.traiteAccepted', $order->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-success">Traité</button>
                                            </form>
                                            <form action="{{ route('orders.canceled', $order->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger">Annulée</button>
                                            </form>
                                        </div>


                                    </td>

                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const traitButtons = document.querySelectorAll('.trait-btn');
        const annulButtons = document.querySelectorAll('.annul-btn');

        traitButtons.forEach((button) => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const form = this.closest('form');
                this.closest('.action-buttons').style.display = 'none';
                form.submit();
            });
        });

        annulButtons.forEach((button) => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const form = this.closest('form');
                this.closest('.action-buttons').style.display = 'none';
                form.submit();
            });
        });
    });
</script>
@endsection
