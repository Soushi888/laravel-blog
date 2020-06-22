@extends('layout')
@section('content')
<div class="container">
    <form action="" method="POST">
        @csrf
        <label for="amount">Payment : </label>
        <input type="number" name="amount" id="amount">$<br>
        <button type="submit" class="btn btn-primary">Envoyer !</button>
    </form>
</div>
@endsection