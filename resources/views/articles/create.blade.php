@extends('layout');

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.css">
@endsection

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">New article</h1>

        <form action="/articles" method="POST">
            @csrf

            <div class="field">
                <label class="label" for="title">Title</label>
                @error('title')
                <span class="help is-danger">{{ $errors->first("title") }}</span>
                @enderror


                <div class="control">
                    <input class="input @error('title') is-danger @enderror" type="text" name="title" id="title"
                        value="{{ old("title") }}">
                </div>

                <label class="label" for="s;ug">Slug</label>
                @error('slug')
                <span class="help is-danger">{{ $errors->first("slug") }}</span>
                @enderror


                <div class="control">
                    <input class="input @error('slug') is-danger @enderror" type="text" name="slug" id="slug"
                        value="{{ old("slug") }}">
                </div>


                <label class="label" for="excerpt">Excerpt</label>
                @error('excerpt')
                <span class="help is-danger">{{ $errors->first("excerpt") }}</span>
                @enderror

                <div class="control">
                    <textarea class="textarea @error('excerpt') is-danger @enderror" name="excerpt" id="excerpt"
                        cols="150" rows="10">{{ old("excerpt") }}</textarea>
                </div>


                <label class="label" for="body">Body</label>
                @error('body')
                <span class="help is-danger">{{ $errors->first("body") }}</span>
                @enderror

                <div class="control">
                    <textarea class="textarea @error('body') is-danger @enderror" name="body" id="body" cols="150"
                        rows="10">{{ old("body") }}</textarea>
                </div>

                <label class="label" for="tags">Tags</label>
                @error('tags')
                <span class="help is-danger">{{ $message }}</span>
                @enderror

                <div class="control">
                    <select name="tags[]" id="tags" multiple>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Envoyer !</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection