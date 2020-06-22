@extends('layout')

@section('content')
<div class="container">
    <p>Show all notification of the user.</p>
    <div>
        <ul>
            @forelse ($notifications as $notification)
            <li>
                @if ($notification->type == "App\Notifications\PaymentReceived")
                We have received a payment of {{ $notification->data['amount'] / 100}}$ from you !
                @endif
            </li>
            @empty
            <li>You have no unread notifications.</li>
            @endforelse
        </ul>
    </div>
</div>
@endsection