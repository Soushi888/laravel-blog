@extends('layout')

<style>
    #header-wrapper {
        background: #2b2b2b !important;
        /* background-size: auto !important; */
    }

    h2 a {
        text-decoration: none;
    }

    hr {
        margin: 50px 0
    }

    nav {
        display: block;
        margin: auto;
        width: 500px;
        padding-bottom: 50px
    }

    nav ul li {
        display: inline;
    }

    #article {
        margin-top: 50px
    }

    .create-button {
        display: block;
        width: max-content;
        background: #2b2b2b;
        padding: 10px;
        margin: 20px 0 0 20px;
        border-radius: 5px
    }

    .create-button a {
        color: white;
    }
</style>



@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div class="create-button">
            <a href="articles/create">Créer un article</a>
        </div>
        @forelse ($articles as $article)
        <div id="article">
            <div class="title">
                <h2><a href="{{ $article->path() }}">{{ $article->title }}</a></h2>
            </div>
            <p>{{ $article->body }}</p>
            <br>
            <a href="{{ $article->path() }}">Read more...</a>
            <hr>
        </div>
        @empty
        <p>No article yet.</p>
        @endforelse
    </div>

</div>
@endsection