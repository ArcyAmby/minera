@extends('layouts.user')

@section('content')
<!-- checkout.blade.php -->

<h1>Checkout</h1>

<form action="{{ route('user-dashboard.checkout') }}" method="post">
    @csrf

    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $item['price'] * $item['quantity'] }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Total</th>
                <th>{{ $totalPrice }}</th>
            </tr>
        </tfoot>
    </table>

    <button type="submit">Process Payment</button>

    @if(isset($message))
    <div class="alert {{ $paymentSuccessful ? 'alert-success' : 'alert-danger' }}">
        {{ $message }}
    </div>
@endif

<!-- rest of the checkout form -->
</form>
@endsection
