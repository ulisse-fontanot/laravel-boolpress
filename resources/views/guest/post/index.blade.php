@extends('layouts.app')

@section('title', 'elenco post')

@section('content')
    <h1>Elenco post</h1>

    <div class="card" style="width: 18rem;">
        @foreach($posts as $post)
            <div class="card-body">
                <h5 class="card-title"> {{ $post->title }} </h5>
                <h6 class="card-title"> {{ $post->user->name }} </h6>
                <h6 class="card-title"> {{ $post->user->mail }} </h6>
                <p class="card-text"> {{ $post->content }} </p>
                <a href=" {{ route('guest.post.show', $post->slug) }} " class="btn btn-primary">Dettagli</a>
            </div>
        @endforeach
    </div>

@endsection