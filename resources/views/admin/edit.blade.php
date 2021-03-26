@extends('layouts.dashboard')

@section('title','pagina create')

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('post.update', $post) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="campo">titolo</label>
            <input name="title" value="{{ $post->title }}" type="text" class="form-control" id="campo">
        </div>
        <div class="form-group">
            <label for="campo">testo</label>
            <input name="content" value="{{ $post->content }}" type="text" class="form-control" id="campo">
        </div>
        <button type="submit" class="btn btn-primary">CREA</button>
    </form>
@endsection