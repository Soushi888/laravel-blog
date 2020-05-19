@extends('layout')

<style>
    #header-wrapper {
        background: #2b2b2b !important;
        /* background-size: auto !important; */
    }

    #page {
        padding: 50px 0;
    }

    .tags {
        margin-bottom: 20px;
    }
</style>



@section('article')
<div id="wrapper">
    <div id="page" class="container">
        <div id="article">
            <div class="title">
                <h2>{{ $article->title }}</h2>
                <span class="byline">{{ $article->excerpt }}</span>
            </div>
            <div class="tags">
                @foreach ($article->tags as $tag)
                <a href="{{ route("articles.index", ['tag' => $tag->name]) }}">{{ $tag->name }}</a>
                @endforeach
            </div>
            <p><img src="/images/banner.jpg" alt="" class="image image-full" /></p>
            {!! $article->body !!}
        </div>
        <a href="{{ route("articles.edit", $article) }}">Edit the article.</a><br>
        <a href="{{ route("articles.index") }}">Back to articles.</a>
    </div>
</div>
@endsection