@extends('layout')

@section('header')
<div id="header-featured">
    <div id="banner-wrapper">
        <div id="banner" class="container">
            <h2>Contact</h2>
            <form class="form-group" method="POST" action="/contact">
                @csrf
                <div>
                    <label for="email">Email : </label> <input type="email" name="email" id="email"
                        placeholder="your email address">
                </div>
                <button type="submit" class="btn btn-primary">Send !</button>
            </form>
            @error('email')
            <div class="text-danger font-italic">{{ $message }}</div>
            @enderror

            @if (session('message'))
            <div class="text-success font-italic">{{ session('message') }}</div>
            @endif
        </div>
    </div>
</div>
@endsection