@extends('layouts.dashboard')

@section('title', 'post slug')

@section('content')
    <h1>Elenco post</h1>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> {{ $post->title }} </h5>
            <h6 class="card-title"> {{ $post->user->name }} </h6>
            <h6 class="card-title"> {{ $post->user->mail }} </h6>
            <p class="card-text"> {{ $post->content }} </p>
        </div>
    </div>

@endsection