@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <div class="row justify-content-center">
                <div class="col-md-10">
                        <div class="card shadow-lg">
                                <div class="card-header bg-primary text-white">
                                        <h3 class="mb-0">{{ __('Dashboard') }}</h3>
                                    </div>
                              <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <!-- Adjusted margin for Orders List -->
                    <h4 class="text-center mb-2">Orders List</h4>

                    <!-- Adjusted margin for the table container -->
                    <div class="table-responsive mt-2">
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
                                        @if($order->status === 'pending')
                                        <div class="action-buttons d-flex">
                                            <form action="{{ route('orders.traite', $order->id) }}" method="POST"
                                                style="margin-right: 5px;">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-success trait-btn">Traitée</button>
                                            </form>

                                            <form action="{{ route('orders.canceled', $order->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger annul-btn">Annulée</button>
                                            </form>
                                        </div>
                                        @endif
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
@endsection

@section('scripts')
<script>
        document.addEventListener('DOMContentLoaded', function() {
        // Get all traitée and annulée buttons
        const traitButtons = document.querySelectorAll('.trait-btn');
        const annulButtons = document.querySelectorAll('.annul-btn');

        traitButtons.forEach((button) => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const form = this.closest('form');
                // Hide both buttons when one is clicked
                this.closest('.action-buttons').style.display = 'none';
                // Submit the form
                form.submit();
            });
        });

        annulButtons.forEach((button) => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const form = this.closest('form');
                // Hide both buttons when one is clicked
                this.closest('.action-buttons').style.display = 'none';
                // Submit the form
                form.submit();
            });
        });
    });
</script>
@endsection
