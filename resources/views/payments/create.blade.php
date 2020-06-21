@extends('layout')
@section('content')
<div class="container">
    <form action="" method="POST">
        @csrf
        <label for="">Payment : </label>
        <button class="btn btn-primary">Test</button>
    </form>
</div>
@endsection